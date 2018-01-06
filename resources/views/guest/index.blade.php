@extends('layout')

@section('title', 'List of Guests')

@section('content')
<div class='container'>
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
					<th>Kid</th>
					<th>Invitor</th>
				<thead>
				<tbody>
					@foreach($guests as $guest)
						<tr>
							<td>{{$guest->firstName}} {{$guest->lastName}}</td>
							<td>{{$guest->attending}}</td>
							<td>{{$guest->email}}</td>
							<td>{{$guest->vegetarian}}</td>
							<td>{{$guest->glutenFree}}</td>
							<td>{{$guest->lactoseIntolerant}}</td>			
							<td>{{$guest->isKid}}</td>
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
			<p>Note: Number of guests includes children, wedding party, and bride and groom</p>
		</div>
	</div>	
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
@stop