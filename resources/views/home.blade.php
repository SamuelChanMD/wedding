@extends('layout') @section('title', 'Sam & Sarah') @section('content')
<div id='bannerImage' style='background-image: url(" {!! ( isset($img_banner) ? asset($img_banner) : asset( "images/home_page.JPG")) !!} ");'>
    <div class='caption'>
        <div class='container'>
            <div class='row'>
                <h1 class='pull-left' id='sarah'>Sarah</h1>
                <h1 class='pull-right' id='sam'>Sam</h1>
            </div>
        </div>
    </div>
</div>
<div class='jumbotron' id='second-body'>
    <div class='container'>
        <div class='panel-body text-center' id='our-story-section'>
            <h1>Our Story</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
            </p>
        </div>
    </div>
</div>
<div class='jumbotron test' id='third-body'>
    <div id='carousel-section' class='carousel slide' data-ride='carousel'>
        <div class='carousel-inner text-center' role='listbox'>
            <div class='item active'>
                <div class='container' id='details-section'>
                    <h1>Details</h1>
                    <h2>15th June 2018</h2>
                    <h2>StoneFields</h2>
                    <h2>1985 9th Line Carleton Place  ON K7C 3P2</h2>
                    <h2>1500 HR till 2300 HR</h2>
                    <div>RSVP</div>
                </div>
                <div class='carousel-caption'>
                </div>
            </div>
            <div class='item'>
                <div class='container' id='details-section'>
                    <h1>Details</h1>
                    <h2>15th June 2018</h2>
                    <h2>StoneFields</h2>
                    <h2>1985 9th Line Carleton Place  ON K7C 3P2</h2>
                    <h2>1500 HR till 2300 HR</h2>
                    <button type="button" class="btn btn-default btn-lg" id='rsvp-button' data-toggle="modal" data-target="#rsvpModal">
                        RVSP
                    </button>
                </div>
                <div class='carousel-caption'>
                </div>
            </div>
        </div>
        <ol class='carousel-indicators'>
            <li data-target='#carousel-section' data-slide-to='0' class='active'></li>
            <li data-target='#carousel-section' data-slide-to='1'></li>
        </ol>
        <a class='left carousel-control' href='#carousel-section' role='button' data-slide='prev'>
    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
    <span class='sr-only'>Previous</span>
  </a>
        <a class='right carousel-control' href='#carousel-section' role='button' data-slide='next'>
    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
    <span class='sr-only'>Next</span>
  </a>
    </div>
</div>
<div class='jumbotron' id='fourth-body'>
    <div class='container'>
        <div class='col-md-12 text-center'>
            <h1>Wedding Party</h1>
            <div class='col-md-6'>
                <h2>Guys</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
            <div class='col-md-6'>
                <h2>Girls</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
        </div>
    </div>
</div>
<div class='container text-center'>
    <footer> Sam and Sarah 2017 </footer>
</div>
<!-- Modal -->
<div class="modal animated bounceInDown" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="rsvpModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class='panel-body'>
                    <h1 class='text-center'>RSVP</h1>
                    <div id='alert-success' class='alert alert-success' role='alert'></div>
                    <div id='alert-info' class='alert alert-info' role='alert'></div>
                    <div id='alert-error' class='alert alert-danger' role='alert'>
                        <h4>Error</h4>
                        <ul></ul>
                    </div>
                    <div class='first-rsvp-form-div'>
                        <form id='rsvpForm' class='form-horizontal' action='{{route("guest.rsvp")}}'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="firstName" class="col-sm-6 control-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="textbox" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-sm-6 control-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="textbox" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="attending" class="col-sm-6 control-label">Attending?</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attending1" value="1"> Yes!
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attending2" value="0"> No (sadface)
                                        </label>
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
                            <button type='submit' id='submit1' class='btn btn-primary'>Submit RSVP</button>
                        </form>
                    </div>
                    <div class='second-rsvp-form-div'>
                        <form id='rsvpForm2' class='form-horizontal' action='{{route("guest.rsvp2")}}'>
                            {{csrf_field()}}
                            <input type="hidden" id="invitorFirstName" name="invitorFirstName" />
                            <input type="hidden" id="invitorLastName" name="invitorLastName" />
                            <div class="form-group row">
                                <label for="firstName" class="col-sm-6 control-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="textbox" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-sm-6 control-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="textbox" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="attending" class="col-sm-6 control-label">Attending?</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attending1" value="1"> Yes!
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attending2" value="0"> No (sadface)
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
                                                <input type="radio" name="isKid" id="isKid1" value="1"> Straight outta the womb
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="isKid" id="isKid2" value="0"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <p>Want a reminder? Fill out your electronic-mail below and we will give you an update a month beforehand!</p>
                                <div class='form-group'>
                                    <label for="email" class="col-sm-6 control-label">E-Mail</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                                    </div>
                                </div>
                            </div>
                            <button type='submit' id='submit2' class='btn btn-primary'>Submit RSVP</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="close-modal" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
@stop