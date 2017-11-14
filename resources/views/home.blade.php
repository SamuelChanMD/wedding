@extends('layout')

@section('title', 'Wedding 3')

@section('content')
 <div id='bannerImage' 
 	style='background-image: url("{!! ( isset($img_banner) ? asset($img_banner) : asset('images/home.jpg')) !!}");'>
 	<div class='caption'>
 		<span class='caption-title'>@yield('title')</span>
 	</div>
 </div>
@stop
