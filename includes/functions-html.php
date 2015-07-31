<?php
include 'sample-tables.inc.php' ;
include 'select.inc.php';
function widget1( $ques_sent, $responses, $response_rate) {
 $output = '';
  // $ques_sent = 1475 ;
  // $responses = 275 ;
  // $response_rate = 18.6 ;

  $output.='<div class="row">';
          /**
           * START Total Meetings
           */
          $output.='<div class="col-md-4 ">';
             /*--------------------------------------------------------------------------------------*/
              $output.='<div class="dashpage-square-number-wrapper">';
                  $output.='<div class="dashpage-square-number-top">';
                    $output.='<div class="row bg-ffffff">';

                      $output.='<div class="col-md-6 col-xs-6 " style="">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class=" padding-top-10 float-right"><img src="img/icons/cald-icon.png" alt="Mountain View" style="height:50px">';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                      $output.='</div>';

                      $output.='<div class="col-md-6">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                          $output.='<div class="animate-number h3 line-height-1-5">'.$ques_sent['value'].'</div>';
                          $output.='<div class="h6 padding-top-6">'.$ques_sent['label'].'</div>';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';
                  $output.='</div>';
              $output.='</div>';
             /*--------------------------------------------------------------------------------------*/

          $output.='</div>';
          /**
           * END Total Meetings
           */
          $output.='</div>';
          $output.='<div class="col-md-4 ">';

          /*--------------------------------------------------------------------------------------*/
            $output.='<div class="dashpage-square-number-wrapper">';
                $output.='<div class="dashpage-square-number-top">';
                  $output.='<div class="row bg-ffffff">';

                    $output.='<div class="col-md-6 col-xs-6 " style="">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class=" padding-top-10 float-right"><img src="img/icons/linegraph-icon.png" alt="Mountain View" style="height:50px">';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';

                    $output.='<div class="col-md-6">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                        $output.='<div class="animate-number-1 h3 line-height-1-5">'.$responses['value'].'</div>';
                        $output.='<div class="h6 padding-top-6">'.$responses['label'].'</div>';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';
                $output.='</div>';
            $output.='</div>';
           /*--------------------------------------------------------------------------------------*/


          $output.='</div>';

          $output.='</div>';
          $output.='<div class="col-md-4" >';
                       /*--------------------------------------------------------------------------------------*/
              $output.='<div class="dashpage-square-number-wrapper">';
                  $output.='<div class="dashpage-square-number-top">';
                    $output.='<div class="row bg-ffffff">';

                      $output.='<div class="col-md-6 col-xs-6 " style="">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class=" padding-top-10 float-right"><img src="img/icons/user-icon.png" alt="Mountain View" style="height:50px">';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                      $output.='</div>';

                      $output.='<div class="col-md-6">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                          $output.='<div class="animate-number-2 h3 line-height-1-5">'.$response_rate['value'].'%</div>';
                          $output.='<div class="h6 padding-top-6">'.$response_rate['label'].'</div>';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';
                  $output.='</div>';
              $output.='</div>';
             /*--------------------------------------------------------------------------------------*/

          $output.='</div>';


          $output.='</div>';

      $output.='</div>';

      return $output ;
}


function widget2( $avgSpeakerRating, $avgProgramRating, $CustomerSatisfaction ) {
  $output='';
  $output.='<div class="row">';

      $output.='<div class="col-md-4 ">';
        $output.='<div class="row  bg-0D79CF margin-top-12">';

          $output.='<div class=" col-md-12 padding-top-12">';
            $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">'.$avgSpeakerRating['value'].'</span></div>';

              $output.='<div class=" col-md-11 col-xs-11">';
                $output.='<div class="dashpage-square-number-left height-26 ">';
                  $output.='<div class="xe-progress ">';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:45%;"></span>';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';
          $output.='</div>';

          $output.='<div class="col-md-12">';
            $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">'.$avgSpeakerRating['label'].'</div>';
          $output.='</div>';

        $output.='</div>';
      $output.='</div>';
      /*-------------------------------------------------------------------------------------*/
       $output.='<div class="col-md-4 ">';
        $output.='<div class="row  bg-1194C8 margin-top-12">';

          $output.='<div class=" col-md-12 padding-top-12">';
            $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">'.$avgProgramRating['value'].'</span></div>';

              $output.='<div class=" col-md-11 col-xs-11">';
                $output.='<div class="dashpage-square-number-left height-26 ">';
                  $output.='<div class="xe-progress ">';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:50%;"></span>';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';
          $output.='</div>';

          $output.='<div class="col-md-12">';
            $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">'.$avgProgramRating['label'].'</div>';
          $output.='</div>';

        $output.='</div>';
      $output.='</div>';
      /*-------------------------------------------------------------------------------------*/
       $output.='<div class="col-md-4 ">';
        $output.='<div class="row  bg-0173B2 margin-top-12">';

          $output.='<div class=" col-md-12 padding-top-12">';
            $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">'.$CustomerSatisfaction['value'].'%</span></div>';

              $output.='<div class=" col-md-11 col-xs-11">';
                $output.='<div class="dashpage-square-number-left height-26 ">';
                  $output.='<div class="xe-progress ">';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:88.3%;"></span>';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';
          $output.='</div>';

          $output.='<div class="col-md-12">';
            $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">'.$CustomerSatisfaction['label'].'</div>';
          $output.='</div>';

        $output.='</div>';
      $output.='</div>';
      /*-------------------------------------------------------------------------------------*/

    $output.='</div>';
    return $output;
}



/*
 * This fuction defines the navigation bar on the top of each page
 */

function top_navigation() {
    /**
     * START X-NAVIGATION VERTICAL 1
     *
     */
    $output="";
    $output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
      $output.='<!-- TOGGLE NAVIGATION -->';
      $output.='<li class="xn-icon-button">';
          $output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
      $output.='</li>';

      $output.='<li>';
      $output.='<span class="color-002840 font-family-inherit padding-left-20 font-size-18 line-height-2-5 ">IPF Scheduler</span>';
      $output.='</li>';

      $output.='<!-- END TOGGLE NAVIGATION -->';

      $output.='<!-- END SEARCH -->';

      $output.='<!-- SIGN OUT -->';
      // $output.='<li class="xn-icon-button pull-right">';
      //     $output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
      // $output.='</li>';
      $output.='<!-- END SIGN OUT -->';

      $output.='</li>';
      $output.='<!-- SEARCH -->';
      //  $output.='<li class="xn-search ">';
      //     $output.='<form role="form">';
      //         $output.='<input type="text"  name="search" />';
      //     $output.='</form>';
      // $output.='</li>';
    $output.='</ul>';

    /**
     * START X-NAVIGATION VERTICAL 2
     *
     */
    // $output.='<div class="bg-F5F5F5">';
    //   $output.='<ul class=" x-navigation x-navigation-horizontal x-navigation-panel" style="background-color:#F5F5F5">';
    //     $output.='<!-- TOGGLE NAVIGATION -->';

    //     $output.='<!-- END TOGGLE NAVIGATION -->';
    //     $output.='<li >';
    //      $output.='<span class="color-002840 font-family-inherit padding-left-40 font-size-20 line-height-2-5 ">IPF Scheduler</span>';
    //     $output.='</li>';

    //     $output.='<!-- END SEARCH -->';

    //     // $output.='<li class=" pull-right ">';
    //     //   $output.='<div id="reportrange" class="reportrange border-radius-6 margin-right-6 color-fff bg-005180 padding-px-5 margin-top-10  ">';
    //     //     $output.='<span></span><b class="caret"></b>';
    //     //   $output.='</div>';
    //     // $output.='</li>';

    //   $output.='</ul>';
    // $output.='</div>';

    /*--------------------------------------------------------------------------------------------------------------------------------------*/
    return $output;
}


/*
 * Scheduler Concept one
 */

function scheduler_concept_1(){

$output='';

//row
  $output.='<div class="">';
  //col-md-12
    $output.='<div class="">';
    //panel
      $output.='<div class="">';

        $output.='<div class=" min-heigth-800">';
          //$output.='<h3>Default Wizard</h3>';
          $output.='<div class="smartwizard wizard ">';
            $output.='<ul class="bg-0076A3" style="padding-bottom:0px; padding-left:4%; padding-right:0px; padding-top:9px;">';

              $output.='<li>';
                $output.='<a href="#step-1">';
                  $output.='<span class="stepNumber">1</span>';
                  $output.='<span class="stepDesc">Programs<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
                $output.='<a href="#step-2">';
                  $output.='<span class="stepNumber">2</span>';
                  $output.='<span class="stepDesc">Speaker<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
                $output.='<a href="#step-3">';
                  $output.='<span class="stepNumber">3</span>';
                  $output.='<span class="stepDesc">Date & Time<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
                $output.='<a href="#step-4">';
                  $output.='<span class="stepNumber">4</span>';
                  $output.='<span class="stepDesc">Details<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              // $output.='<li>';
              // $output.='<a href="#step-5">';
              //     $output.='<span class="stepNumber">5</span>';
              //     $output.='<span class="stepDesc text-center">Participants<br /><small></small></span>';
              //   $output.='</a>';
              // $output.='</li>';

              $output.='<li>';
              $output.='<a  href="#step-5">';
                  $output.='<span class="stepNumber">6</span>';
                  $output.='<span class="stepDesc" >Submit<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

            $output.='</ul>';

            $output.='<div id="step-1">';
            //Step 2 Starts
              $output.='<div class="titleWizardSchedule padding-10 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18 margin-0">Step 1. Select Program</h4>';
             /*   $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';*/
                    //$output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';


              $output.='<div class="row">';
                //$output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5;">';

                    $output.= fakeProgramList();

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';



            $output.='<div id="step-2">';
            //Step 2 Starts
              $output.='<div class="titleWizardSchedule padding-10 col-md-12 bg-ffffff ">';
                $output.='<h4 class="font-size-18 margin-0">Step 2. Select Speaker</h4>';
         /*       $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';*/
                   // $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5;">';

                    $output.= fakeSpeakerList();

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';



            $output.='<div id="step-3">';
            //Step 3 Starts
              $output.='<div class="titleWizardSchedule padding-10 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18 margin-0">Step 3. Select Date and Time</h4>';
          /*      $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';*/
                   // $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5;min-height: 500px;">';

                    $output.= selectDateTime();

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';
             //Step 3 ends
            $output.='</div>';

            $output.='<div id="step-4">';
            //Step 4 Starts
              $output.='<div class="titleWizardSchedule padding-10 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18 margin-0">Step 4. Select Location & Add Attendees</h4>';
          /*      $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';*/
                   // $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5; padding: 25px; /*min-height: 600px;*/">';

                    $output.='<div class="row">';
                      $output.='<h4 class="font-size-18" style="  margin: 5px; margin-bottom: 30px; font-weight: 300;">Location Information</h4>';
                      $output.= selectLocation();
                    $output.='</div>';

                    $output.='<div class="row">';
                      $output.='<h4 class="font-size-18" style="  margin: 5px; margin-bottom: 20px; margin-top: 34px; font-weight: 300;">Invite Attendees</h4>';
                      $output.= inviteParticipants();
                    $output.='</div>';

                  $output.='</div>';

                $output.='</div>';
              $output.='</div>';
            //Step 4 ends
            $output.='</div>';

            $output.='<div id="step-5">';

            //Step 5 Starts
              $output.='<div class="titleWizardSchedule padding-10 col-md-12 bg-ffffff ">';
                $output.='<h4 class="font-size-18 margin-0">Step 6. Review and Submit</h4>';
          /*      $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                nteger ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                 </p>';*/
               // $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                //$output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5; ">';

                    $output.= reviewAndSubmit();
                    $output.='<div class=" margin-bottom-24 col-md-6 col-xs-6"> <button  type="button" style="border-radius:0px;" class= "float-right btn btn-primary ">Submit</span></button> </div>';


                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';
            //Step 5 Starts

            $output.='</div>';

          $output.='</div>';
        $output.='</div>';
      $output.='</div>';

     $output.='</div>';
  $output.='</div>';
return $output;

}

/*
 * Scheduler Concept one
 */

function scheduler_concept_2(){

$output='';

//row
  $output.='<div class="">';
  //col-md-12
    $output.='<div class="">';
    //panel
      $output.='<div class="">';

        $output.='<div class=" min-heigth-800">';
          //$output.='<h3>Default Wizard</h3>';
          $output.='<div class="swMain wizard ">';
            $output.='<ul class="col-md-12 bg-0076A3" style=" padding:0px 10px 0px 10px; margin:0px;">';

              $output.='<li class="col-md-3">';
                $output.='<a class="col-md-12" href="#step-1">';
                  $output.='<span class="stepNumber">1</span>';
                  $output.='<span class="stepDesc">Speaker<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li class="col-md-3">';
                $output.='<a class="col-md-12" href="#step-2">';
                  $output.='<span class="stepNumber">2</span>';
                  $output.='<span class="stepDesc">Meeting Details<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li class="col-md-3">';
                $output.='<a class="col-md-12" href="#step-3">';
                  $output.='<span class="stepNumber">3</span>';
                  $output.='<span class="stepDesc">Location & Invite<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              // $output.='<li>';
              // $output.='<a href="#step-5">';
              //     $output.='<span class="stepNumber">5</span>';
              //     $output.='<span class="stepDesc text-center">Participwants<br /><small></small></span>';
              //   $output.='</a>';
              // $output.='</li>';

              $output.='<li class="col-md-3">';
              $output.='<a class="col-md-12"  href="#step-4">';
                  $output.='<span class="stepNumber">4</span>';
                  $output.='<span class="stepDesc" >Submit<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

            $output.='</ul>';

            $output.='<div id="step-1">';
            //Step 2 Starts
             /* $output.='<div class="padding-20 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18">Step 1. Select Speaker</h4>';
                $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';
                    $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';
*/

              //$output.='<div class="row">';
                //$output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              //$output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5;">';

                    $output.= fakeSpeakerListWithImage();

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';


            $output.='<div id="step-2">';
            //Step 3 Starts
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
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5;min-height: 600px;">';

                    $output.= selectDateTimeProgram();

                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';
             //Step 3 ends
            $output.='</div>';

            $output.='<div id="step-3">';
            //Step 4 Starts
              /*$output.='<div class="padding-20 col-md-12 bg-ffffff">';
                $output.='<h4 class="font-size-18">Step 3. Select Location & Add Attendees</h4>';
                $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
                 Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
                  Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
                   </p>';
                    $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
              $output.='</div>';*/


              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';



              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5; padding: 25px; min-height: 600px;">';

                    $output.='<div class="row">';
                      $output.='<h4 class="font-size-18" style="  margin: 10px; margin-bottom: 34px; font-weight: 300;">Location Information</h4>';
                      $output.= selectLocation();
                    $output.='</div>';

                    $output.='<div class="row">';
                      $output.='<h4 class="font-size-18" style="  margin: 10px; margin-bottom: 34px; margin-top: 34px; font-weight: 300;">Invite Attendees</h4>';
                      $output.= inviteParticipants();
                    $output.='</div>';

                  $output.='</div>';

                $output.='</div>';
              $output.='</div>';
            //Step 4 ends
            $output.='</div>';

            // $output.='<div id="step-5">';

            // //Step 5 Starts
            //   $output.='<div class="padding-20 col-md-12 ">';
            //     $output.='<h4 class="font-size-18">Step 5. Invite Participants</h4>';
            //     $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
            //     nteger ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
            //     Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
            //      </p>';
            //     $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
            //   $output.='</div>';


            //   $output.='<div class="row">';
            //     $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
            //     $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
            //   $output.='</div>';


            //   $output.='<div class="row">';
            //     $output.='<div class="padding-20 col-md-12 ">';
            //       $output.='<div class="panel" style="border: 20px solid #F5F5F5; padding:25px; padding:25px; /*padding-top: 120;*/ min-height: 600px;">';

            //         $output.= inviteParticipants();

            //       $output.='</div>';
            //     $output.='</div>';
            //   $output.='</div>';
            // //Step 5 Starts

            // $output.='</div>';

            $output.='<div id="step-4">';

            //Step 5 Starts
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
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
                //$output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
              $output.='</div>';


              $output.='<div class="row">';
                $output.='<div class="padding-10 col-md-12 ">';
                  $output.='<div class="panel" style="border: 5px solid #F5F5F5; ">';

                    $output.= reviewAndSubmit();
                    $output.='<div class=" margin-bottom-24 col-md-6 col-xs-6"> <button  type="button" style="border-radius:0px;" class= "float-right btn btn-primary ">Submit</span></button> </div>';


                  $output.='</div>';
                $output.='</div>';
              $output.='</div>';
            //Step 5 Starts

            $output.='</div>';

          $output.='</div>';
        $output.='</div>';
      $output.='</div>';

     $output.='</div>';
  $output.='</div>';
return $output;

}


function selectLocation(){

$output='';



      $output.='<div class="form-group">';

      $output.='<label class="col-md-2 col-xs-12 control-label control-label-extent">Venue*</label>';
        $output.='<div class="col-md-9 col-xs-12 ">';
           $output.='<span href="#" data-toggle="dropdown" class="form-control dropdown-toggle">Hospital<span class="caret"></span></span>';
                $output.='<ul class="dropdown-menu" role="menu">';
                  $output.='<li><a href="#">Hospital</a></li>';
                  $output.='<li><a href="#">Medical Clinic</a></li>';
                  $output.='<li><a href="#">Restaurant</a></li>';
                  $output.='<li><a href="#">Hotel</a></li>';
                  $output.='<li><a href="#">Conference Center</a></li>';
                  $output.='<li><a href="#">Other</a></li>';
                $output.='</ul>';
          $output.='<span class="help-block">Select your Venu</span>';
        $output.='</div>';
      $output.='</div>';

      $output.='<div class="form-group">';
        $output.='<label class="col-md-2 col-xs-12 control-label">Province*</label>';
        $output.='<div class="col-md-9 col-xs-12">';
            // $output.='<div class="input-group">';
                // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
                $output.='<input type="text" class="form-control"/>';
            // $output.='</div>';
            $output.='<span class="help-block">Example "Ontario"</span>';
        $output.='</div>';
      $output.='</div>';

      $output.='<div class="form-group">';
        $output.='<label class="col-md-2 col-xs-12 control-label">City*</label>';
        $output.='<div class="col-md-9 col-xs-12">';
            // $output.='<div class="input-group">';
                // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
                $output.='<input type="text" class="form-control"/>';
            // $output.='</div>';
            $output.='<span class="help-block">example "Toronto"</span>';
        $output.='</div>';
      $output.='</div>';


      $output.='<div class="form-group">';
        $output.='<label class="col-md-2 col-xs-12 control-label">Address</label>';
        $output.='<div class="col-md-9 col-xs-12">';
            // $output.='<div class="input-group">';
                // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
                $output.='<input type="text" class="form-control"/>';
            // $output.='</div>';
            $output.='<span class="help-block">#Unit No, Street Name</span>';
        $output.='</div>';
      $output.='</div>';

      $output.='<div class="form-group">';
          $output.='<label class="col-md-2 col-xs-12 control-label">Postal Code*</label>';
          $output.='<div class="col-md-9 col-xs-12">';
              // $output.='<div class="input-group">';
                  // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
                  $output.='<input type="text" class="form-control"/>';
              // $output.='</div>';
              $output.='<span class="help-block">Example "N9C1A5"</span>';
          $output.='</div>';
      $output.='</div>';



return $output;
}

function inviteParticipants(){

$output='';


  //$output.='<div class="panel-body margin-top-pt-4">';

    // $output.='<div id="entry1" class="clonedInput form-group">';
    //     $output.='<label class="col-md-3 col-xs-12 control-label">Participant Email*</label>';
    //     $output.='<div class="col-md-6 col-xs-12">';
    //         $output.='<div class="input-group">';
    //             $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-envelope-o"></span></span>';
    //             //$output.='<input type="text" class="tagsinput" value="First,Second,Third"/>';
    //             $output.='<input type="text" id="participant_email" class="input_fn form-control"/>';
    //             $output.='<span id="btnAdd" class="input-group-addon"><span class="line-height-2 fa fa-plus"></span></span>';
    //             $output.='<span id="btnDel"  class="input-group-addon"><span disable class="line-height-2 fa fa-minus"></span></span>';
    //         $output.='</div>';
    //         $output.='<span class="help-block">Example "abc@domain.com"</span>';
    //     $output.='</div>';
    // $output.='</div>';

  $output.='<div class="form-group">';
    //$output.='<label class="col-md-2 col-xs-12 control-label">Postal Code*</label>';
    $output.='<div class="col-md-11 col-xs-12 margin-left-10">';
      // $output.='<div class="input-group">';
          // $output.='<span class="input-group-addon"><span class="line-height-2 fa fa-location-arrow"></span></span>';
          $output.='<input type="textarea" style="height:100px;" class="tagsinput form-control" value="Chris Dodd,Dong,Jp"/>';
          //$output.='<input type="text" class="min-heigth-80 form-control"/>';
      // $output.='</div>';
      $output.='<span class="help-block">Input attendee name and press ENTER</span>';
    $output.='</div>';
  $output.='</div>';


  //$output.='</div>';



return $output;

}

function reviewAndSubmit(){

$output='';

$output.='<form class="form-horizontal">';
  $output.='<div class=" margin-top-pt-2">';

    $output.='<div class="form-group">';
        $output.='<div class="col-md-12 col-xs-12">';
        $output.='<label class="font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Participant Email:</label>';
        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<div class="padding-top-6 input-group">';

                $output.='<ul class="list-style-type-none">';
                $output.='<li class="font-weight-400 color-85888c font-size-16 color-000">Selected Program Title</li>';
                $output.='</ul>';

            $output.='</div>';
             //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-edit"></span></span>';
        $output.='</div>';
        $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662 margin-right-pt-70 float-right line-height-2">edit</span>';
        $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-14">';

        $output.='<div class="form-group">';
        $output.='<div class="col-md-12 col-xs-12">';
        $output.='<label class="font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Date & Start Time:</label>';
        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<div class="padding-top-6 input-group">';

                $output.='<ul class="list-style-type-none">';
                $output.='<li class="color-85888c font-size-16 color-000">March 25, 2015</li>';
                $output.='<li class="color-85888c font-size-16 color-000">12:00 PM-1:00 PM EST</li>';
                $output.='</ul>';

            $output.='</div>';
             //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-edit"></span></span>';
        $output.='</div>';
        $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662 margin-right-pt-70 float-right line-height-2">edit</span>';
        $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-14">';


      $output.='<div class="form-group">';
        $output.='<div class="col-md-12 col-xs-12">';
        $output.='<label class="font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Requested Speaker:</label>';
        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<div class="padding-top-6 input-group">';

                $output.='<ul class="list-style-type-none">';
                $output.='<li class="color-85888c font-size-16 color-000">Dr. Last Name</li>';
                $output.='</ul>';

            $output.='</div>';
             //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-edit"></span></span>';
        $output.='</div>';
        $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662 margin-right-pt-70 float-right line-height-2">edit</span>';
        $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-14">';


      $output.='<div class="form-group">';
        $output.='<div class="col-md-12 col-xs-12">';
        $output.='<label class="font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Meeting Location:</label>';
        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<div class="padding-top-6 input-group">';

                $output.='<ul class="list-style-type-none">';
                $output.='<li class="color-85888c font-size-16 color-000">Medical Clinic</li>';
                $output.='<li class="color-85888c font-size-16 color-000">Windsor, ON</li>';
                $output.='<li class="color-85888c font-size-16 color-000">#510 , 3015 Sandwich Street</li>';
                $output.='<li class="color-85888c font-size-16 color-000">N9C1A5</li>';
                $output.='</ul>';

            $output.='</div>';
             //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-edit"></span></span>';
        $output.='</div>';
        $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662  margin-right-pt-70 float-right line-height-2">edit</span>';
        $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-14">';


      $output.='<div class="form-group">';
        $output.='<div class="col-md-12 col-xs-12">';
        $output.='<label class="font-weight-400 font-size-16 col-md-3 col-xs-12 control-label">Invited Participants:</label>';
        $output.='<div class="col-md-6 col-xs-6">';
            $output.='<div class="padding-top-6 input-group">';

                $output.='<ul class="list-style-type-none">';
                $output.='<li class="color-85888c font-size-16 color-000">Chrisdodd@flexxia.ca, jp@flexxia.ca, dong@flexxia.ca</li>';
                $output.='</ul>';

            $output.='</div>';
             //$output.='<span class="input-group-addon"><span class="line-height-2 fa fa-edit"></span></span>';
        $output.='</div>';
        $output.='<span class="padding-right-pt-10 font-size-14 col-md-2 col-xs-6"><span class="color-f34662  margin-right-pt-70 float-right line-height-2">edit</span>';
        $output.='</div>';
    $output.='</div>';
    $output.='<hr class="width-pt-80 margin-14">';


  $output.='</div>';
$output.='</form>';


return $output;

}

function selectDateTime(){

$output = '';
$output.='<div class="container-date-time container margin-top-pt-8 " style="height:auto; padding-left:10%; padding-right:10%;" >';

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



      $output.='<div class="row border-1-a3bad9 " style="background:#fff; border: 3px solid #F5F5F5 ; padding-left: 30%; ">';
        $output.='<h4 class="font-weight-300  font-size-16 margin-top-10 ">Meeting Date:</h4>';
        $output.='<h4 class="font-weight-300  font-size-16 ">Start Time:</h4>';
        $output.='<h4 class="font-weight-300  font-size-16 ">Meeting Duration:</h4>';
      $output.='</div>';


  $output.='</div>';

$output.='</div>';
  //Meeting Details End

return $output;
}

function selectDateTimeProgram(){

$output = '';
$output.='<div class=" container margin-top-pt-2 " style="height:auto; padding-left:10%; padding-right:10%;" >';


  $output.='<div class="col-md-6 col-xs-6">';

   //Select Program starts
    $output.='<div class="start-time-duration-program row margin-bottom-24 ">';
        $output.='<h4 class="font-size-18" style="margin: 10px; margin-bottom: 30px; font-weight: 300;">Pick your Program</h4>';

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

    // Date Calender Select
    $output.='<h4 class="font-size-18" style="margin: 10px; margin-bottom: 34px; font-weight: 300;">Select Date</h4>';
    $output.='<div class="row" style="border:4px solid #F5F5F5;">';
      $output.='<div id="" class="datepicker ll-skin-melon "></div>';
    $output.='</div>';

  $output.='</div>';

  //Meeting Details Starts
  $output.='<div class="col-md-6 col-xs-6">';
    //Select Time and Duration
    $output.='<div class="start-time-duration-program row">';
    $output.='<h4 class="font-size-18" style="padding-left: 40px; margin: 10px; margin-bottom: 30px; font-weight: 300;">Select Time and Duration</h4>';
      // Select Time
      $output.='<div class="row ">';
        $output.='<div class="col-md-6 col-xs-6 text-center">';
          $output.='<label  class="font-weight-400 font-size-16 control-label ">Start Time :</label>';
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
        $output.='<div class="col-md-6 col-xs-6 text-center">';
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

  $output.='</div>';

$output.='</div>';
  //Meeting Details End

return $output;
}

// Miss code
// $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
// $output.='<div class="col-md-6 col-xs-6 btn-group">';
//   $output.='<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Accredited <span class="caret"></span></a>';
//   $output.='<ul class="dropdown-menu" role="menu">';
//       $output.='<li><a href="#">Accredited</a></li>';
//       $output.='<li><a href="#">Non Accredited</a></li>';
//   $output.='</ul>';
// $output.='</div>';




 // Program list


              // for ($i=1 ; $i <= 10 ; $i++){



                // $output.='<div class="row program-list" style="margin-top: 30px; background-color: #F0F8FF " >';

                // $output.='<div class="col-md-1 col-xs-1 fixed"><i class="fa fa-plus-circle font-size-24 padding-top-4"></i></div>';
                // $output.='<div class="col-md-10 col-xs-10 fixed padding-top-4 "> Program title and learning objective </div>';
                // $output.='<div class="col-md-1 col-xs-1 fixed "> <button  type="button" class="actionClick float-right btn btn-primary ">Schedule</button> </div>';

                // $output.='</div>';

              //}

            // $output.='<div id="step-5">';

            // //Step 5 Starts
            //   $output.='<div class="padding-20 col-md-12 ">';
            //     $output.='<h4 class="font-size-18">Step 5. Invite Participants</h4>';
            //     $output.='<p class="font-size-14 color-000">This is non libero bibendum, scelerisque arcu id, placerat nunc.
            //     nteger ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris.
            //     Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem.
            //      </p>';
            //     $output.='<div class="col-md-12" style=" background-color:#0076A3; margin-top: 10px; height:1px;   "></div>';
            //   $output.='</div>';


            //   $output.='<div class="row">';
            //     $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn "><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px;" ></span></button> </div>';
            //     $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn "><span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;" ></span></button> </div>';
            //   $output.='</div>';


            //   $output.='<div class="row">';
            //     $output.='<div class="padding-20 col-md-12 ">';
            //       $output.='<div class="panel" style="border: 20px solid #F5F5F5; padding:25px; padding:25px; /*padding-top: 120;*/ min-height: 600px;">';

            //         $output.= inviteParticipants();

            //       $output.='</div>';
            //     $output.='</div>';
            //   $output.='</div>';
            // //Step 5 Starts

            // $output.='</div>';
    ?>




