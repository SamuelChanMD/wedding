@extends('layout')

@section('title', 'List of Guests')

@section('content')
<link href='{{ asset('css/app.css') }}' rel='stylesheet'>
<link href='{{ asset('css/admin.css') }}' rel='stylesheet'>
	<div class='jumbotron text-center	'>
		<h1>All Guests</h1>
		<p>Lists all the guests which have responded to the wedding invites</p>
	</div>
	<div class='container'>
	<div class='row'>
		<div class='col-md-6'>
			<h2>Dashboard Information</h2>
			<table class='table table-condensed'>
				<tbody>
					<tr>
						<td>Guests attending: </td>
						<td>{{$guestAttendingCount}}</td>
					</tr>
					<tr>
						<td>Kids attending:</td>
						<td>{{$childAttendingCount}}</td>
					</tr>
					<tr>
						<td>Vegetarians attending: </td>
						<td>{{$vegetarianAttendingCount}}</td>
					</tr>
					<tr>
						<td>Gluten frees attending: </td>
						<td>{{$glutenFreeAttendingCount}}</td>
					</tr>
					<tr>
						<td>Lactose intolerants attending: </td>
						<td>{{$lactoseIntolerantAttendingCount}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-12'>
		<p>Note: Number of guests includes children, wedding party, and bride and groom</p>
		</div>	
	</div>
	<hr class='featurette-heading'>

	<h2>Guest Information</h2>

	<button type='submit' id='send-reminder-btn' class='btn btn-default' action='{{route("guest.reminder")}}'>
		<span class='glyphicon glyphicon glyphicon-envelope'></span> Send Reminder Email
	</button>

	<div class='row'>
		<div class='col-md-12'>
			<table id='listGuests' class='table table-condensed wow slideInLeft'>
				<thead>
					<th><input id="select-all" type='checkbox'></th>
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
						<tr class="guest-row">
							<td><input type='checkbox' class='select-guest' name='select-guest'></td>
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
</div>

<script type='text/javascript' src='{!! asset("/js/jquery-1.9.1.min.js")!!}'></script>
<script type='text/javascript' src='{!! asset("/js/admin.js")!!}'></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

@stop