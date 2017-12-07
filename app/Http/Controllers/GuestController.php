<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{

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
	        'email' => 'nullable|email'
	        ]);

	    $firstName = strtolower($request->firstName);
	    $lastName = strtolower($request->lastName);

	    //Retrieve the guest from the db
    	$guest = Guest::where('firstName', $firstName)
    					->where('lastName', $lastName)
    					->first();

    	if($guest != null){
	    	$guest->attending = $request->attending;
	    	$guest->email = $request->email;
	    	$guest->save();

	    	//If guest is attending, they can invite another, else they can't.
	    	return response()->json([ 
	    		'success' => 'Your have been updated on the wedding list.',
	    		'inviteAnother' => $guest->attending,
	    		'invitorFN' => $firstName,
	    		'invitorLN' => $lastName ]);
		}

		return response()->json([ 'error' => 'Sorry, you are not registered in the database. If you received an invitation, please contact us ASAP.']);
	}

	public function rsvp2(Request $request)
	{
	    //Validate 
	    $this->validate($request, [
	        'firstName' => 'required|max:50',
	        'lastName' => 'required|max:50',
	        'attending' => 'required',
	        'email' => 'nullable|email',
	        'invitorFirstName' => 'required|max:50',
	        'invitorLastName' => 'required|max:50',
	        'isKid' => 'required'
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
	    $guest->invitorFirstName = strtolower($request->invitorFirstName);
	    $guest->invitorLastName = strtolower($request->invitorLastName);
	    $guest->isKid = $request->isKid;
	    $guest->save();

	    $responseText = $flag ? $firstName.' '.$lastName.' has been added to the wedding list.' :
	    						$firstName.' '.$lastName.' has been updated on the wedding list.';

    	return response()->json([ 
    		'success' => $responseText, 
    		'invitorFN' => $guest->invitorFirstName,
    		'invitorLN' => $guest->invitorLastName ]);
	}
}
