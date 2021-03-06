<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Guest;
use Mail;
use Response;

class GuestController extends Controller
{

	public function __construct()
	{
	   $this->middleware('auth', ['except' => ['rsvp', 'rsvp2']]);
	}

	/**
	 * The first rsvp must be someone registered in the database
	 */
	public function rsvp(Request $request)
	{
	    //Validate 
	    $this->validate($request, [
	        'firstName' => 'required|max:50',
	        'lastName' => 'required|max:50',
	        'attending' => 'required',
	        'vegatarian' => 'nullable',
	        'glutenFree' => 'nullable',
	        'lactoseIntolerant'=> 'nullable',
	        'email' => 'nullable|email',
	        'otherRestrictions' => 'nullable'
	        ]);

	    $firstName = strtolower($request->firstName);
	    $lastName = strtolower($request->lastName);

	    //Retrieve the guest from the db
    	$guest = Guest::where('firstName', $firstName)
    					->where('lastName', $lastName)
    					->first();

    	if($guest != null){

	    	$guest->attending = $request->attending;
	    	$guest->vegetarian = ($request->vegetarian) ? $request->vegetarian : 0;
	    	$guest->glutenFree = ($request->glutenFree) ? $request->glutenFree : 0;
	    	$guest->lactoseIntolerant = ($request->lactoseIntolerant) ? $request->lactoseIntolerant : 0;
	    	$guest->email = $request->email;
	    	$guest->otherRestrictions = $request->otherRestrictions;
	    	$guest->save();

	    	
	    	$title = "Wedding RSVP";
	        $name = $request->firstName. " " . $request->lastName;

	        if ($guest->email != null){
		        Mail::send('email.reminder', ['title' => $title, 'name' => $name], function ($message) use ($guest)
		        {
		            $message->from('rsvp@samandsarah2018.com', 'RSVPSamAndSarah2018');
		            $message->subject("Sam and Sarah 2018 | Save the Date!");
		            $message->to($guest->email);
		        });
		    }

	    	//If guest is attending, they can invite another, else they can't.
	    	return response()->json([ 
	    		'success' => 'Your RSVP information has been updated on the wedding list.',
	    		'attending' => $guest->attending,
	    		'invitorFN' => $firstName,
	    		'invitorLN' => $lastName ]);
		}

		return response()->json([ 'error' => 'Sorry, we could not find a record of your invitation. If you received an invitation through mail, please contact us ASAP.']);
	}

	public function rsvp2(Request $request)
	{
	    //Validate 
	    $this->validate($request, [
	        'firstName' => 'required|max:50',
	        'lastName' => 'required|max:50',
	        'attending' => 'required',
	        'vegatarian' => 'nullable',
	        'glutenFree' => 'nullable',
	        'lactoseIntolerant'=> 'nullable',
	        'email' => 'nullable|email',
	        'invitorFirstName' => 'required|max:50',
	        'invitorLastName' => 'required|max:50',
	        'isKid' => 'required',
	        'otherRestrictions' => 'nullable'
	        ]);

	    $firstName = strtolower($request->firstName);
	    $lastName = strtolower($request->lastName);
	    $flag = false;

	    //Retrieve the guest from the db
    	$guest = Guest::where('firstName', $firstName)
    					->where('lastName', $lastName)
    					->first();

    	if(!$guest){
    		$guest = new Guest;
    	    $guest->firstName = strtolower($request->firstName);
	    	$guest->lastName = strtolower($request->lastName);
	    	$flag = true;
    	}
    	

    	$guest->attending = $request->attending;
	    $guest->email = $request->email;
	    $guest->vegetarian = ($request->vegetarian) ? $request->vegetarian : 0;
	    $guest->glutenFree = ($request->glutenFree) ? $request->glutenFree : 0;
	    $guest->lactoseIntolerant = ($request->lactoseIntolerant) ? $request->lactoseIntolerant : 0;
	    $guest->invitorFirstName = strtolower($request->invitorFirstName);
	    $guest->invitorLastName = strtolower($request->invitorLastName);
	    $guest->isKid = $request->isKid;
	    $guest->otherRestrictions = $request->otherRestrictions;
	    $guest->save();

    	$title = "Wedding RSVP";
    	$name = $request->firstName. " " . $request->lastName;

    	if ($guest->email != null){
	        Mail::send('email.reminder', ['title' => $title, 'name' => $name], function ($message) use ($guest)
	        {
	            $message->from('rsvp@samandsarah2018.com', 'RSVPSamAndSarah2018');
	            $message->subject("Sam and Sarah 2018 | Save the Date!");
	            $message->to($guest->email);
	        });
	    }
	    
	    $responseText = $flag ? $firstName.' '.$lastName.' has been added on the wedding list.' :
	    						$firstName.' '.$lastName.' has been updated on the wedding list.';

    	return response()->json([ 
    		'success' => $responseText, 
    		'invitorFN' => $guest->invitorFirstName,
    		'invitorLN' => $guest->invitorLastName ]);
	}


	public function sendReminder(Request $request){
		$decodedEmailJSON = json_decode($request->emailList, true);
		$title = "Wedding Reminder";

		foreach($decodedEmailJSON as $key => $value){
			
			if ($value != null){
				
				Mail::send('email.date-reminder', ['title' => $title, 'name' => $key], function ($message) use ($value)
				{
					$message->from('rsvp@samandsarah2018.com', 'RSVPSamAndSarah2018');
					$message->subject("Sam and Sarah 2018 | Wedding Reminder! 📅");
					$message->to($value);
				});

				Log::info("Sent email to:".$key." at ".$value);
			}
		}

		$response = array(
			'success' => "Emails Sent! This is the email list: ".print_r($decodedEmailJSON, true)
		);
		
		return Response::json($response);
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
	    $guests = Guest::all();
	    $guestAttendingCount = Guest::where('attending', 1)->count();
	    $childAttendingCount = Guest::where('attending', 1)->where('isKid', 1)->count();
	    $vegetarianAttendingCount = Guest::where('attending', 1)->where('vegetarian', 1)->count();
	    $glutenFreeAttendingCount = Guest::where('attending', 1)->where('glutenFree', 1)->count();
	    $lactoseIntolerantAttendingCount = Guest::where('attending', 1)->where('lactoseIntolerant', 1)->count();
	    return view('admin.index')->with('guests', $guests)
	    						  ->with('guestAttendingCount', $guestAttendingCount)
	    						  ->with('childAttendingCount', $childAttendingCount)
	    						  ->with('vegetarianAttendingCount', $vegetarianAttendingCount)
	    						  ->with('glutenFreeAttendingCount', $glutenFreeAttendingCount)
	    						  ->with('lactoseIntolerantAttendingCount', $lactoseIntolerantAttendingCount);
	}
}
