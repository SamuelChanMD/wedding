@extends('layout') @section('title', 'RSVP') @section('content')
<div class='jumbotron'>
    <div class='container'>
        <div class='panel-body' id='rsvp-section'>
            <h1 class='text-center'>RSVP</h1>
            <form class='form-horizontal'>
            	<div class="form-group row">
            	  <label for="firstName" class="col-sm-6 control-label">First Name</label>
            	  <div class="col-sm-4">
            	    <input type="textbox" class="form-control" id="firstName" name="firstName" placeholder="First Name">
            	  </div>
            	</div>
            	<div class="form-group row">
            	  <label for="lastName" class="col-sm-6 control-label">Last Name</label>
            	  <div class="col-sm-4">
            	    <input type="textbox" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
            	  </div>
            	</div>
            	<div class="form-group">
            		<label for="attending" class="col-sm-6 control-label">Attending?</label>
            		<div class="col-sm-4">
            			<div class="radio">
            			  <label>
            			    <input type="radio" name="attending" id="attending1" value="yes">
            			    Yes!
            			  </label>
            			</div>
            			<div class="radio">
            			  <label>
            			    <input type="radio" name="attending" id="attending2" value="no">
            			    No (sadface)
            			  </label>
            			</div>
            		</div>
            	</div>
            	<div class='hiddenUntilAttending'>
            		<div class="form-group">
            			<label for="isKid" class="col-sm-6 control-label">Are you under the age of 12?</label>
            			<div class="col-sm-4">
            				<div class="radio">
            				  <label>
            				    <input type="radio" name="isKid" id="isKid1" value="yes">
            				    Straight outta the womb
            				  </label>
            				</div>
            				<div class="radio">
            				  <label>
            				    <input type="radio" name="isKid" id="isKid2" value="no">
            				    No
            				  </label>
            				</div>
            			</div>
            		</div>
            	</div>
        		<div class='hiddenUntilChild'>
        			<div class="form-group row">
        			  <label for="parentFirstName" class="col-sm-6 control-label"> Parent First Name</label>
        			  <div class="col-sm-4">
        			    <input type="textbox" class="form-control" id="parentFirstName" name="parentFirstName" placeholder="Parent First Name">
        			  </div>
        			</div>
        			<div class="form-group row">
        			  <label for="parentLastName" class="col-sm-6 control-label">Parent Last Name</label>
        			  <div class="col-sm-4">
        			    <input type="textbox" class="form-control" id="parentLastName" name="parentLastName" placeholder="Parent Last Name">
        			  </div>
        			</div>
        		</div>
        		<div class='hiddenUntilNotChild'>
        			<div class="form-group">
        				<label for="receivedDirectInvitation" class="col-sm-6 control-label">Did you receive a direct invitation?</label>
        				<div class="col-sm-4">
        					<div class="radio">
        					  <label>
        					    <input type="radio" name="receivedDirectInvitation" id="receivedDirectInvitation1" value="yes">
        					    Yes
        					  </label>
        					</div>
        					<div class="radio">
        					  <label>
        					    <input type="radio" name="receivedDirectInvitation" id="receivedDirectInvitation2" value="no">
        					    No
        					  </label>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class='hiddenUntilNotDirectInvitation'>
        			<div class="form-group row">
        			  <label for="invitorFirstName" class="col-sm-6 control-label">Who are you going with?</label>
        			  <div class="col-sm-4">
        			    <input type="textbox" class="form-control" id="invitorFirstName" name="invitorFirstName" placeholder="Invitor First Name">
        			  </div>
        			</div>
        			<div class="form-group row">
        			  <label for="invitorLastName" class="col-sm-6 control-label">Who are you going with?</label>
        			  <div class="col-sm-4">
        			    <input type="textbox" class="form-control" id="invitorLastName" name="invitorLastName" placeholder="Invitor Last Name">
        			  </div>
        			</div>
        		</div>
            	<div class='hiddenUntilAttending'>
	            	<p>Want a reminder? Fill out your electronic-mail below and we will give you an update a month beforehand!</p>
	            	<div class='form-group'>
	            		<label for="email" class="col-sm-6 control-label">E-Mail</label>
	            		<div class="col-sm-4">
	            		  <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
	            		</div>
	            	</div>
	            </div>

            </form>
        </div>
    </div>
</div>

<script>
$( document ).ready(function() {


    $('.hiddenUntilAttending').hide();
    $('.hiddenUntilChild').hide();
    $('.hiddenUntilNotChild').hide();
    $('.hiddenUntilNotDirectInvitation').hide();

    $('input[name="attending"]').click(function(eventObj){
    	var obj = eventObj.target;

    	if(obj.id === 'attending1'){
    		$('.hiddenUntilAttending').show();
    	} else {
    		$('.hiddenUntilAttending').hide();
    	}
    });

    $('input[name="isKid"]').click(function(eventObj){
    	var obj = eventObj.target;

    	if(obj.id === 'isKid1'){
    		$('.hiddenUntilChild').show();
    		$('.hiddenUntilNotChild').hide();
    	} else {
    		$('.hiddenUntilChild').hide();
    		$('.hiddenUntilNotChild').show();
    	}
    });

    $('input[name="receivedDirectInvitation"]').click(function(eventObj){
    	var obj = eventObj.target;

    	if(obj.id === 'receivedDirectInvitation1'){
    		$('.hiddenUntilNotDirectInvitation').hide();
    	} else {
    		$('.hiddenUntilNotDirectInvitation').show();
    	}
    });
});
</script>


@stop