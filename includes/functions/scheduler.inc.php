<?php
require_once 'sample-tables.inc.php' ;
require_once 'select.inc.php';
/*
 * Scheduler Concept one
 */
function event_scheduler(){

$output='';

// //row
//   $output.='<div class="">';
//   //col-md-12
//     $output.='<div class="">';
//     //panel
//       $output.='<div class="">';

        $output.='<div class=" min-heigth-800">';
          //$output.='<h3>Default Wizard</h3>';
          $output.='<div class="row swMain wizard ">';
            $output.='<ul class=" col-xs-12 bg-0076A3" style="  background-color:#2A2D2F; padding:0px 10px 0px 10px; margin:0px;">';

              $output.='<li class="">';
                $output.='<a class="" href="#step-1">';
                  $output.='<span class="stepNumber">1</span>';
                  $output.='<span class="stepDesc">Program & Speaker /<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li class="">';
                $output.='<a class="" href="#step-2">';
                  $output.='<span class="stepNumber">2</span>';
                  $output.='<span class="stepDesc">Date /<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li class="">';
                $output.='<a class="" href="#step-3">';
                  $output.='<span class="stepNumber">3</span>';
                  $output.='<span class="stepDesc">Location /<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              // $output.='<li>';
              // $output.='<a href="#step-5">';
              //     $output.='<span class="stepNumber">5</span>';
              //     $output.='<span class="stepDesc text-center">Participwants<br /><small></small></span>';
              //   $output.='</a>';
              // $output.='</li>';

              $output.='<li class="">';
              $output.='<a class=""  href="#step-4">';
                  $output.='<span class="stepNumber">4</span>';
                  $output.='<span class="stepDesc" >Send<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

            $output.='</ul>';

            $output.='<div id="step-1">';
            //Step 1 Starts
             /* $output.='<div class="padding-20 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18">Step 1. Select Speaker</h4>';
                $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';
                    $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';
*/

              $output.='<div class="row">';
                $output.='<div class="row padding-10 float-right">';
                  //$output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-previous float-right btn "><span>Prev Step</span></button> </div>';
                  $output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-next float-left btn "><span ></span>Next Step</button> </div>';
                $output.='</div>';
              $output.='</div>';

              //$output.= selectProgramEventScheduler();

              $output.='<div class="padding-20 row" style="padding: 10px 5%">';

                  $output.='<div class="row">';
                    $output.='<div class="col-md-4 padding-0">';
                      $output.='<h4 class="font-size-18" style="margin: 10px; margin-bottom: 20px; font-weight: 200;">1. Choose Program</h4>';
                      $output.= selectProgramEventScheduler();
                    $output.='</div>';
                  $output.='</div>';

                  $output.='<div class="row">';
                    $output.='<h4 class="font-size-18" style="margin: 10px; margin-bottom: 20px; font-weight: 200;">2. Select a Speaker</h4>';
                    $output.='<div class="panel " style="border: 1px solid #F5F5F5;">';
                      $output.= fakeSpeakerList();
                    $output.='</div>';
                  $output.='</div>';

              $output.='</div>';

            $output.='</div>';


            $output.='<div id="step-2">';
            //Step 2 Starts
            /*  $output.='<div class="padding-20 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18">Step 2. Select Date & Time and Program</h4>';
                $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';
                    $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';
*/

              $output.='<div class="row">';
                $output.='<div class="row padding-10 float-right">';
                  $output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-previous float-right btn "><span>Prev Step</span></button> </div>';
                  $output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-next float-left btn "><span ></span>Next Step</button> </div>';
                $output.='</div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="row" style="border: 0px solid #F5F5F5; margin: 14px 5%">';

                    $output.='<div class="row">';
                      $output.='<h4 class="font-size-18" style="   margin-bottom: 20px;  font-weight: 300;">3. Enter Date and Start Time</h4>';
                      $output.= selectDateTimeProgramEventScheduler();
                    $output.='</div>';

                    $output.='<div class="row">';
                      $output.='<h4 class="font-size-18" style="   margin-bottom: 10px;  font-weight: 300;">4. Invite Attendees</h4>';
                      $output.= inviteParticipantsEventScheduler();
                    $output.='</div>';

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';


             //Step 2 ends
            $output.='</div>';

            $output.='<div id="step-3">';
            //Step 3 Starts
              /*$output.='<div class="padding-20 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18">Step 3. Select Location & Add Attendees</h4>';
                $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';
                    $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';*/


              $output.='<div class="row">';
                $output.='<div class="row padding-10 float-right">';
                  $output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-previous float-right btn "><span>Prev Step</span></button> </div>';
                  $output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-next float-left btn "><span ></span>Next Step</button> </div>';
                $output.='</div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="row" style="border: 0px solid #F5F5F5;  margin: 24px 5%">';

                      $output.='<h4 class="font-size-18" style="  margin: 10px 0px; margin-bottom: 20px; font-weight: 300;">5. Event Location Details</h4>';
                      $output.= selectLocationEventScheduler();

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';
            //Step 3 ends
            $output.='</div>';

            $output.='<div id="step-4">';

            //Step 4 Starts
             /* $output.='<div class="padding-20 col-md-12 bg-ffffff ">';
                $output.='<h4 class="font-size-18">Step 4. Review and Submit</h4>';
                $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                nteger ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                 </p>';
                $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';
*/

              $output.='<div class="row">';
                $output.='<div class="row padding-10 float-right">';
                  $output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-previous float-right btn "><span>Prev Step</span></button> </div>';
                  //$output.='<div class="col-md-6 col-xs-6 "> <button  type="button" class="action-btn-wizard-next float-left btn "><span ></span>Next Step</button> </div>';
                $output.='</div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class=" min-heigth-500" style=" min-height: 520px;  margin: 24px 5%">';

                    $output.= reviewAndSubmitEventScheduler();
                    $output.='<div class=" margin-bottom-24 col-md-6 col-xs-6"> <button  type="button" style="border-radius:0px;" class= "float-right btn btn-primary ">Submit</span></button> </div>';


                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';
            //Step 5 Starts

            $output.='</div>';

          $output.='</div>';
        $output.='</div>';
  //     $output.='</div>';

  //    $output.='</div>';
  // $output.='</div>';
return $output;

}


function selectLocationEventScheduler(){

$output='';


$output.='<form class="form-horizontal">';

  $output.='<div class="form-group">';
    $output.='<label class="col-md-12 col-xs-12">Venue</label>';
      $output.='<div class="col-md-12 col-xs-12">';
         $output.='<span href="#" data-toggle="dropdown" class="form-control dropdown-toggle">Hospital<span class="caret"></span></span>';
              $output.='<ul class="dropdown-menu" role="menu">';
                $output.='<li><a href="#">Hospital</a></li>';
                $output.='<li><a href="#">Medical Clinic</a></li>';
                $output.='<li><a href="#">Restaurant</a></li>';
                $output.='<li><a href="#">Hotel</a></li>';
                $output.='<li><a href="#">Conference Center</a></li>';
                $output.='<li><a href="#">Other</a></li>';
              $output.='</ul>';
        //$output.='<span class="help-block">Select your Venu</span>';
    $output.='</div>';
  $output.='</div>';

  $output.='<div class="form-group">';
    $output.='<label class="col-md-12 col-xs-12">Venu Name</label>';
    $output.='<div class="col-md-12 col-xs-12">';
        // $output.='<div class="input-group">';
            // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
            $output.='<input type="text" class="form-control"/>';
        // $output.='</div>';
        //$output.='<span class="help-block">Example "Ontario"</span>';
    $output.='</div>';
  $output.='</div>';

  $output.='<div class="form-group">';
    $output.='<label class="col-md-12 col-xs-12">Province</label>';
    $output.='<div class="col-md-12 col-xs-12">';
        // $output.='<div class="input-group">';
            // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
            $output.='<input type="text" class="form-control"/>';
        // $output.='</div>';
        //$output.='<span class="help-block">Example "Ontario"</span>';
    $output.='</div>';
  $output.='</div>';

  $output.='<div class="form-group">';
    $output.='<label class="col-md-12 col-xs-12">City</label>';
    $output.='<div class="col-md-12 col-xs-12">';
        // $output.='<div class="input-group">';
            // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
            $output.='<input type="text" class="form-control"/>';
        // $output.='</div>';
        //$output.='<span class="help-block">example "Toronto"</span>';
    $output.='</div>';
  $output.='</div>';


  $output.='<div class="form-group">';
    $output.='<label class="col-md-12 col-xs-12">Address</label>';
    $output.='<div class="col-md-12 col-xs-12">';
        // $output.='<div class="input-group">';
            // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
            $output.='<input type="text" class="form-control"/>';
        // $output.='</div>';
        //$output.='<span class="help-block">#Unit No, Street Name</span>';
    $output.='</div>';
  $output.='</div>';

  $output.='<div class="form-group">';
      $output.='<label class="col-md-12 col-xs-12">Postal Code</label>';
      $output.='<div class="col-md-12 col-xs-12">';
          // $output.='<div class="input-group">';
              // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
              $output.='<input type="text" class="form-control"/>';
          // $output.='</div>';
          //$output.='<span class="help-block">Example "N9C1A5"</span>';
      $output.='</div>';
  $output.='</div>';

$output.='</form>';
return $output;
}

function inviteParticipantsEventScheduler(){

$output='';

  $output.='<div class="form-group">';
    //$output.='<label class="col-md-2 col-xs-12 control-label">Postal Code*</label>';
    $output.='<div class="col-md-11 col-xs-12 margin-left-10">';

      $output.='<div class="margin-bottom-10">';
      $output.='<p class="font-size-10 color-2a2d2f margin-0  padding-0">Type the name of the person(s) you would like to invite in the box below/ Invite upto 15 colleagues.</p>';
      $output.='<p class="font-size-10 color-2a2d2f margin-0  padding-0">Only the users with an active account are available to be selected. Invitations to your event will be sent once your event request has been accepted by the speaker</p>';
      $output.='</div>';
      // $output.='<div class="input-group">';
          // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
      $output.='<input type="textarea" class="tagsinput form-control " value="Chris Dodd,Dong,Jp"/>';
          //$output.='<input type="text" class="min-heigth-80 form-control"/>';
      // $output.='</div>';
      //$output.='<span class="help-block">Input attendee name and press ENTER</span>';
    $output.='</div>';
  $output.='</div>';


  //$output.='</div>';



return $output;

}

function reviewAndSubmitEventScheduler(){

$output='';

$output.='<form class="form-horizontal">';
  $output.='<div class=" margin-top-pt-2">';
    /* Program/topic Start */
    $output.='<div class="form-group">';
        $output.='<div class="col-md-12 col-xs-12 ">';
        $output.='<label class="text-left font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Program/Topic:</label>';
        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<div class="padding-top-6 input-group">';

                $output.='<ul class="list-style-type-none">';
                $output.='<li class="font-weight-400 color-85888c font-size-16 color-000">Name of Program Selected</li>';
                $output.='</ul>';

            $output.='</div>';
             //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-edit"></span></span>';
        $output.='</div>';
        $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662 margin-right-pt-70 float-right line-height-2">EDIT</span>';
        $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-6">';
    /* Program/Topic Ends */

    /* Speaker Selected Start*/
    $output.='<div class="form-group">';
      $output.='<div class="col-md-12 col-xs-12">';
      $output.='<label class="text-left font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Speaker Selected:</label>';
      $output.='<div class="col-md-6 col-xs-6">';
          $output.='<div class="padding-top-6 input-group">';

              $output.='<ul class="list-style-type-none">';
              $output.='<li class="color-85888c font-size-16 color-000">Dr. FirstName LastName</li>';
              $output.='</ul>';

          $output.='</div>';
           //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-EDIT"></span></span>';
      $output.='</div>';
      $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662 margin-right-pt-70 float-right line-height-2">EDIT</span>';
      $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-6">';
    /* Speaker Selected Ends*/

    /* Date & Time Start */
    $output.='<div class="form-group">';
      $output.='<div class="col-md-12 col-xs-12">';
      $output.='<label class="text-left font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Date & Start Time:</label>';
      $output.='<div class="col-md-6 col-xs-6">';
          $output.='<div class="padding-top-6 input-group">';

              $output.='<ul class="list-style-type-none">';
              $output.='<li class="color-85888c font-size-16 color-000">March 25, 2015</li>';
              $output.='<li class="color-85888c font-size-16 color-000">12:00 PM-1:00 PM EST</li>';
              $output.='</ul>';

          $output.='</div>';
           //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-EDIT"></span></span>';
      $output.='</div>';
      $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662 margin-right-pt-70 float-right line-height-2">EDIT</span>';
      $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-6">';
    /* Date and Time Ends*/

    /* Invited Participants Start */
    $output.='<div class="form-group">';
      $output.='<div class="col-md-12 col-xs-12">';
      $output.='<label class="text-left font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Invited Participants:</label>';
      $output.='<div class="col-md-6 col-xs-6">';
          $output.='<div class="padding-top-6 input-group">';

              $output.='<ul class="list-style-type-none">';
              $output.='<li class="color-85888c font-size-16 color-000">Rep Name 1, Rep Name 2, Rep Name 3</li>';
              $output.='<li class="color-85888c font-size-16 color-000">Rep Name 4, Rep Name 5, Rep Name 6</li>';
              $output.='</ul>';

          $output.='</div>';
           //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-EDIT"></span></span>';
      $output.='</div>';
      $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662  margin-right-pt-70 float-right line-height-2">EDIT</span>';
      $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-6">';
    /* Invited Participants Ends*/

    /*Location Start*/
    $output.='<div class="form-group">';
      $output.='<div class="col-md-12 col-xs-12">';
      $output.='<label class="text-left font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Meeting Location:</label>';
      $output.='<div class="col-md-6 col-xs-6">';
          $output.='<div class="padding-top-6 input-group">';

              $output.='<ul class="list-style-type-none">';
              $output.='<li class="color-85888c font-size-16 color-000">Tecumseh Medical Clinic</li>';
              $output.='<li class="color-85888c font-size-16 color-000">42250 Wyandotte St #205</li>';
              $output.='<li class="color-85888c font-size-16 color-000">Tecumseh, ON</li>';
              $output.='<li class="color-85888c font-size-16 color-000">N8N2Y6</li>';
              $output.='</ul>';

          $output.='</div>';
           //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-EDIT"></span></span>';
      $output.='</div>';
      $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662  margin-right-pt-70 float-right line-height-2">EDIT</span>';
      $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-6">';
    /*Location Ends*/

  $output.='</div>';
$output.='</form>';


return $output;

}

function selectDateTimeEventScheduler(){

$output = '';
$output.='<div class="container-date-time container margin-top-pt-4" style="height:auto; padding-left:10%; padding-right:10%;" >';

  // Date Calender Select
  $output.='<div class="col-md-6 ">';
    $output.='<div class="row" style="border: 3px solid #F5F5F5 ;">';
      $output.='<div class="datepicker "></div>';
    $output.='</div>';


  $output.='</div>';



  $output.='<div class="col-md-6 ">';

    //Select Time and Duration

    $output.='<div class="start-time-duration row">';
      $output.='<div class="row" style="background:#0076A3">';
        $output.='<h4 class="color-fff font-size-18 padding-top-9 text-center">Select Time & Duration</h4>';
      $output.='</div>';

      // Select Time
      $output.='<div class="row margin-top-14">';
        $output.='<div class="col-md-6 col-xs-6">';
          $output.='<label class="font-weight-400 font-size-16 control-label">Start Time :</label>';
          //$output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="width:100px">Start Time </a>';
        $output.='</div>';

        $output.='<div class="col-md-3 col-xs-2">';
            $output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="">Time <span class="caret"></span></a>';
            $output.= selectTime();
        $output.='</div>';

        $output.='<div class="col-md-3 col-xs-2">';

            $output.='<a href="#" style="" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">AM <span class="caret"></span></a>';
            $output.='<ul class="dropdown-menu" role="menu">';
              $output.='<li><a href="#">AM</a></li>';
              $output.='<li><a href="#">PM</a></li>';
            $output.='</ul>';

        $output.='</div>';

      $output.='</div>';
      // Select time Ends

      // Select duration
      $output.='<div class="row margin-top-24">';
        $output.='<div class="col-md-6 col-xs-6">';
          $output.='<label class="font-weight-400 font-size-16 control-label">Duration :</label>';
         //$output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="width:100px">Duration </a>';
        $output.='</div>';

        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" >Duration <span class="caret"></span></a>';
            $output.= selectDuration();
        $output.='</div>';
      $output.='</div>';
      // Select duration Ends

    $output.='</div>';
    // Select Time and Duration End

    //Meeting Details Starts
      $output.='<div class="row margin-top-10" style="background:#0076A3">';
        $output.='<h4 class="color-fff font-size-18 padding-top-9 text-center">Selected Date & Times</h4>';
      $output.='</div>';



      $output.='<div class="row border-1-a3bad9 " style="background:#fff; border: 3px solid #F5F5F5 ; padding-left: 5%; ">';
        $output.='<h4 class="font-weight-300  font-size-16 margin-top-10 ">Meeting Date:</h4>';
        $output.='<h4 class="font-weight-300  font-size-16 ">Start Time:</h4>';
        $output.='<h4 class="font-weight-300  font-size-16 ">Meeting Duration:</h4>';
      $output.='</div>';


  $output.='</div>';

$output.='</div>';
  //Meeting Details End

return $output;
}


/*
 * Select program function
 */
function selectProgramEventScheduler(){
  $output = '';
  //Select Program starts
    $output.='<div class="start-time-duration-program row margin-bottom-24 ">';

        $output.='<div class="btn-group" style="min-width:100%;">';
          $output.='<a href="#" style="height: 40px; padding-top:8px;  min-width:100%; border-radius: 0px; font-size:18px; font-weight:300;" data-toggle="dropdown" class="btn btn-primary dropdown-toggle ">Select Program  <span class="caret"></span></a>';
            $output.='<ul class="dropdown-menu" role="menu">';

            for ( $i = 1 ; $i <= 5 ; $i ++) {
              $output.='<li><a href="#">Program '.$i.' </a></li>';
            }

            $output.='</ul>';
        $output.='</div>';

    $output.='</div>';
    // Select Program ends
    return $output;
}



function selectDateTimeProgramEventScheduler(){

$output = '';
$output.='<div class="container-fluid" style="margin-top:24px; height:auto; margin-bottom: 24px;" >';


  $output.='<div class="col-md-6 col-sm-6 ">';

    // Date Calender Select
    //$output.='<h4 class="font-size-18" style="margin: 10px; margin-bottom: 20px; font-weight: 300;">Select Date</h4>';
    $output.='<div class="" style="width:80%;">';
      $output.='<div class="row" style="border:2px solid #F5F5F5;">';
        $output.='<div id="" class="datepicker ll-skin-melon "></div>';
      $output.='</div>';
    $output.='</div>';

  $output.='</div>';
  $output.='<div class="col-md-6 col-xs-6 float-right" style="padding-left: 0%">';
    //Meeting Details Starts
    $output.='<div class="col-md-6">';
      //Select Time and Duration
      $output.='<div class="start-time-duration-program row">';
      //$output.='<h4 class="font-size-18" style="padding-left: 40px; margin: 10px; margin-bottom: 20px; font-weight: 300;">Select Time and Duration</h4>';
        // Select Time
      $output.='<div class="row" >';

          //$output.='<label  class="font-weight-400 font-size-16 control-label ">Start Time :</label>';
            //$output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="width:100px">Start Time </a>';
          //$output.='</div>';
          $output.='<div class="col-md-6 col-xs-6 padding-0">';
            // $output.='<a href="#"  data-toggle="dropdown" class=" btn btn-primary dropdown-toggle" style="">Start Time <span class="caret"></span></a>';
            // $output.= selectTime();
            $output.='<input readonly="true" id="timeSelectWidgetClock" type="text" class="btn btn-primary" data-kitkat-active="true"/>';
          $output.='</div>';
          /*$output.='<div class="col-md-6 col-xs-6 padding-0">';

          $output.='<a href="#" style="background-color: white;color: blue; border: 1px solid #d5d5d5;" data-toggle="dropdown" class="float-left btn btn-primary dropdown-toggle">AM</span></a>';
          $output.='<ul class="dropdown-menu" role="menu">';
            $output.='<li><a href="#">AM</a></li>';
            $output.='<li><a href="#">PM</a></li>';
          $output.='</ul>';

          $output.='</div>';*/
        $output.='</div>';
        // Select time Ends

      $output.='</div>';
      // Select Time and Duration End

    $output.='</div>';

    $output.='<div class="col-md-6">';
      //Select Time and Duration
      $output.='<div class="start-time-duration-program row">';
      //$output.='<h4 class="font-size-18" style="padding-left: 40px; margin: 10px; margin-bottom: 20px; font-weight: 300;">Select Time and Duration</h4>';


        // Select duration
        $output.='<div class="row" >';

          $output.='<div class="col-md-6 ">';
              $output.='<a href="#" style="margin-left:70px;"  data-toggle="dropdown" class=" btn btn-primary dropdown-toggle" >Duration <span class="caret"></span></a>';
              $output.= selectDuration();
          $output.='</div>';
        $output.='</div>';
        // Select duration Ends

      $output.='</div>';
      // Select Time and Duration End

    $output.='</div>';
  $output.='</div>';





$output.='</div>';
  //Meeting Details End

return $output;
}


    ?>




