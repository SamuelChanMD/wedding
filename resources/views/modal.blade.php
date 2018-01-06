<!-- Modal -->
<link href='{!! asset("/css/modal.css")!!}' rel='stylesheet'>
<div class="modal animated bounceInDown" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title rsvp-modal-heading">
                    RSVP To Our Wedding
                </h1>
            </div>
            <div class="modal-body">
                <div class='panel-body'>
                    <div class="text-center">
                        <p>
                            Please enter your RSVP information in the form below for the reception
                        </p>
                    </div>
                    <div id='alert-success' class='alert alert-success' role='alert'>
                    </div>
                    <div id='alert-info' class='alert alert-info' role='alert'>
                    </div>
                    <div id='alert-error' class='alert alert-danger' role='alert'>
                    </div>
                    <div class='first-rsvp-form-div'>
                        <form id='rsvpForm' class='form-horizontal' action='{{route("guest.rsvp")}}'>
                            {{ csrf_field() }}
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="firstName" class="col-sm-4 control-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input type="textbox" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastName" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-6">
                                        <input type="textbox" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="attending" class="col-sm-4 control-label">Attending?</label>
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="attending" id="attending1" value="1"> Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="attending" id="attending2" value="0"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class='hiddenUntilAttending animated fadeInUp text-center'>
                                    <div class='form-group'>
                                        <label class="col-sm-4 control-label">Dietary Restrictions</label>
                                        <div class="col-sm-6">
                                            <div class="checkbox pull-left">
                                              <label>
                                                <input type="checkbox" name="vegetarian" value="1">
                                                Vegetarian
                                              </label>
                                            </div>
                                            <div class='clearfix'></div>
                                            <div class="checkbox pull-left">
                                              <label>
                                                <input type="checkbox" name="glutenFree" value="1">
                                                Gluten Free
                                              </label>
                                            </div>
                                            <div class='clearfix'></div>
                                            <div class="checkbox pull-left">
                                              <label>
                                                <input type="checkbox" name="lactoseIntolerant" value="1">
                                                Lactose Intolerant
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Want a reminder? Fill out your electronic-mail below and we will give you an update a month beforehand!</p>
                                    <div class='form-group'>
                                        <label for="email" class="col-sm-4 control-label">E-Mail</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <button type='submit' id='submit1' class='btn btn-primary custom-btn'>Submit RSVP</button>
                            </div>
                        </form>
                    </div>
                    <div class='second-rsvp-form-div'>
                        <form id='rsvpForm2' class='form-horizontal' action='{{route("guest.rsvp2")}}'>
                            {{csrf_field()}}
                            <input type="hidden" id="invitorFirstName" name="invitorFirstName" />
                            <input type="hidden" id="invitorLastName" name="invitorLastName" />
                            <div class="form-group row">
                                <label for="firstName" class="col-sm-4 control-label">First Name</label>
                                <div class="col-sm-6">
                                    <input type="textbox" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-sm-4 control-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="textbox" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="attending" class="col-sm-4 control-label">Attending?</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attending1" value="1"> Yes!
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attending2" value="0"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class="col-sm-4 control-label">Dietary Restrictions</label>
                                <div class="col-sm-6">
                                    <div class="checkbox pull-left">
                                      <label>
                                        <input type="checkbox" name="vegetarian" value="1">
                                        Vegetarian
                                      </label>
                                    </div>
                                    <div class='clearfix'></div>
                                    <div class="checkbox pull-left">
                                      <label>
                                        <input type="checkbox" name="glutenFree" value="1">
                                        Gluten Free
                                      </label>
                                    </div>
                                    <div class='clearfix'></div>
                                    <div class="checkbox pull-left">
                                      <label>
                                        <input type="checkbox" name="lactoseIntolerant" value="1">
                                        Lactose Intolerant
                                      </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="isKid" class="col-sm-4 control-label">Are you under the age of 12?</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="isKid" id="isKid1" value="1"> Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="isKid" id="isKid2" value="0"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class='hiddenUntilAttending'>
                                <div class="text-center">
                                    <p>Want a reminder? Fill out your electronic-mail below and we will give you an update a month beforehand!</p>
                                </div>
                                <div class='form-group'>
                                    <label for="email" class="col-sm-4 control-label">E-Mail</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <button type='submit' id='submit2' class='btn btn-primary custom-btn'>Submit RSVP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>