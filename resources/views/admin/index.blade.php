@extends('layout')

@section('title', 'List of Guests')

@section('content')
<div class='container' style='font-family: "Raleway";'>
	<h1>All Guests</h1>
	<div class='row'>
		<div class='col-md-12'>
			<table id='listGuests' class='table'>
				<thead>
					<th>Name</th>
					<th>Attending</th>
					<th>Email</th>
					<th>Vegetarian</th>
					<th>Gluten Free</th>
					<th>Lactose Intolerant</th>
					<th>Other Restrictions</th>
					<th>Kid</th>
					<th>Invitor</th>
				<thead>
				<tbody>
					@foreach($guests as $guest)
						<tr>
							<td>{{$guest->firstName}} {{$guest->lastName}}</td>
							<td>@if($guest->attending) Yes @else No @endif</td>
							<td>{{$guest->email}}</td>
							<td>@if($guest->vegetarian) Yes @else No @endif</td>
							<td>@if($guest->glutenFree) Yes @else No @endif</td>
							<td>@if($guest->lactoseIntolerant) Yes @else No @endif</td>	
							<td>{{$guest->otherRestrictions}}</td>
							<td>@if($guest->isKid) Yes @else No @endif</td>
							<td>{{$guest->invitorFirstName}} {{$guest->invitorLastName}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<h3>Additional Information</h3>
	<div class='row'>
		<div class='col-md-12'>
			<p>Number of guests attending: {{$guestAttendingCount}}</p>
			<p>Number of kids attending: {{$childAttendingCount}}</p>
			<p>Number of vegetarians attending: {{$vegetarianAttendingCount}}</p>
			<p>Number of gluten frees attending: {{$glutenFreeAttendingCount}}</p>
			<p>Number of lactose intolerants attending: {{$lactoseIntolerantAttendingCount}}</p>
			<p>Note: Number of guests includes children, wedding party, and bride and groom</p>
		</div>
	</div>	
</div>
@stop