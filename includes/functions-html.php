<?php
include 'sample-tables.inc.php' ;
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
    $output.='<div class="bg-F5F5F5">';
      $output.='<ul class=" x-navigation x-navigation-horizontal x-navigation-panel" style="background-color:#F5F5F5">';
        $output.='<!-- TOGGLE NAVIGATION -->';

        $output.='<!-- END TOGGLE NAVIGATION -->';
        $output.='<li >';
         $output.='<span class="color-002840 font-family-inherit padding-left-40 font-size-20 line-height-2-5 ">IPF Scheduler</span>';
        $output.='</li>';

        $output.='<!-- END SEARCH -->';

        // $output.='<li class=" pull-right ">';
        //   $output.='<div id="reportrange" class="reportrange border-radius-6 margin-right-6 color-fff bg-005180 padding-px-5 margin-top-10  ">';
        //     $output.='<span></span><b class="caret"></b>';
        //   $output.='</div>';
        // $output.='</li>';

      $output.='</ul>';
    $output.='</div>';

    /*--------------------------------------------------------------------------------------------------------------------------------------*/
    return $output;
}


/*
 * Function wizard id defined for to show the stpes of even being scheduled
 */

function wizard(){

$output='';


  $output.='<div class="row">';
    $output.='<div class="col-md-12">';

      $output.='<div class="panel panel-default">';
        $output.='<div class="panel-body min-heigth-800">';
          //$output.='<h3>Default Wizard</h3>';
          $output.='<div class="wizard">';
            $output.='<ul>';

              $output.='<li>';
                $output.='<a href="#step-1">';
                  $output.='<span class="stepNumber">1</span>';
                  $output.='<span class="stepDesc">Choose Programs<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
                $output.='<a href="#step-2">';
                  $output.='<span class="stepNumber">2</span>';
                  $output.='<span class="stepDesc">Select Speaker<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
                $output.='<a href="#step-3">';
                  $output.='<span class="stepNumber">3</span>';
                  $output.='<span class="stepDesc">Select Date & time<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
                $output.='<a href="#step-4">';
                  $output.='<span class="stepNumber">4</span>';
                  $output.='<span class="stepDesc">Select Location<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
              $output.='<a href="#step-5">';
                  $output.='<span class="stepNumber">5</span>';
                  $output.='<span class="stepDesc">Invite Participants<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

              $output.='<li>';
              $output.='<a href="#step-6">';
                  $output.='<span class="stepNumber">6</span>';
                  $output.='<span class="stepDesc">Review & Submit<br /><small></small></span>';
                $output.='</a>';
              $output.='</li>';

            $output.='</ul>';
            $output.='<div id="step-1">';

              $output.='<h4 class="font-size-18">Available Programs</h4>';

              $output.='<div class="row">';
                  // $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
                  // $output.='<div class="col-md-6 col-xs-6 btn-group">';
                  //   $output.='<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Accredited <span class="caret"></span></a>';
                  //   $output.='<ul class="dropdown-menu" role="menu">';
                  //       $output.='<li><a href="#">Accredited</a></li>';
                  //       $output.='<li><a href="#">Non Accredited</a></li>';
                  //   $output.='</ul>';
                  // $output.='</div>';

                  $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-next float-right btn ">Next</button> </div>';
              $output.='</div>';

                // Program list


              // for ($i=1 ; $i <= 10 ; $i++){



                // $output.='<div class="row program-list" style="margin-top: 30px; background-color: #F0F8FF " >';

                // $output.='<div class="col-md-1 col-xs-1 fixed"><i class="fa fa-plus-circle font-size-24 padding-top-4"></i></div>';
                // $output.='<div class="col-md-10 col-xs-10 fixed padding-top-4 "> Program title and learning objective </div>';
                // $output.='<div class="col-md-1 col-xs-1 fixed "> <button  type="button" class="actionClick float-right btn btn-primary ">Schedule</button> </div>';

                // $output.='</div>';

              //}

              $output.= fakeProgramList();

            $output.='</div>';
            $output.='<div id="step-2">';
              //Step 2 starts
              $output.='<h4 class="font-size-18">Select your Speaker</h4>';
              // $output.='<p class="font-size-14">All Accredited and Non Accredited Programs are listed below.
              // Use the program filter to find your program faster.
              // To view the learning objective tap on the + icon.Tap on the schedule button to make your selection </p>';


               $output.='<div class="row">';
                 $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
                  // $output.='<div class="col-md-6 col-xs-6 btn-group">';
                  //   $output.='<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Available <span class="caret"></span></a>';
                  //   $output.='<ul class="dropdown-menu" role="menu">';
                  //       $output.='<li><a href="#">Available</a></li>';
                  //       $output.='<li><a href="#">Not Available</a></li>';
                  //   $output.='</ul>';
                  // $output.='</div>';

                  $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn ">Next</button> </div>';

              $output.='</div>';

              //Step 2 End
              $output.='<div class="row margin-top-12">';
                $output.=fakeSpeakerList();
              $output.='</div>';
            $output.='</div>';
            $output.='<div id="step-3">';
               //Step 3 starts
              $output.='<h4 class="font-size-18">Select Date and scheduled Time</h4>';


              $output.='<div class="row ">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-next float-right btn ">Next</button> </div>';
              $output.='</div>';

              $output.='<div class=" row margin-top-pt-4 ">';
                // Date Calender Select
                $output.='<div class="col-md-6  width-376 col-xs-offset-3">';
                  $output.='<div class="datepicker "></div>';
                $output.='</div>';

                // Select Time and Duration
                $output.='<div class="col-md-6 container  ">';


                  // Select Time
                  $output.='<div class="row ">';

                    $output.='<div class="col-md-4 col-xs-4 btn-group ">';
                      $output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Time </a>';

                    $output.='</div>';

                    $output.='<div class="col-md-4 col-xs-4 btn-group ">';
                      $output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Time <span class="caret"></span></a>';
                      $output.= selectTime();
                    $output.='</div>';

                    $output.='<div class="col-md-4 col-xs-4 btn-group">';
                      $output.='<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">AM <span class="caret"></span></a>';
                      $output.='<ul class="dropdown-menu" role="menu">';
                          $output.='<li><a href="#">AM</a></li>';
                          $output.='<li><a href="#">PM</a></li>';
                      $output.='</ul>';
                    $output.='</div>';

                  $output.='</div>';
                  // Select time Ends

                  // Select duration
                  $output.='<div class="row margin-top-12">';

                    $output.='<div class=" col-md-12 col-xs-12 btn-group ">';
                      $output.='<a href="#"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Duration <span class="caret"></span></a>';
                      $output.= selectDuration();
                    $output.='</div>';

                  $output.='</div>';
                  // Select duration Ends

                $output.='</div>';
                // Select Time and Duration End

              $output.='</div>';

              //Step 3 End
            $output.='</div>';
            $output.='<div id="step-4">';
              //Step 4 starts
              $output.='<h4 class="font-size-18">Venue Location</h4>';
              // $output.='<p class="font-size-14">All Accredited and Non Accredited Programs are listed below.
              // Use the program filter to find your program faster.
              // To view the learning objective tap on the + icon.Tap on the schedule button to make your selection </p>';

              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-next float-right btn ">Next</button> </div>';
              $output.='</div>';
              //Step 4 End
            $output.='</div>';
            $output.='<div id="step-5">';
              //Step 5 starts
              $output.='<h4 class="font-size-18">Invite Participants</h4>';
              // $output.='<p class="font-size-14">All Accredited and Non Accredited Programs are listed below.
              // Use the program filter to find your program faster.
              // To view the learning objective tap on the + icon.Tap on the schedule button to make your selection </p>';

              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-next float-right btn ">Next</button> </div>';
              $output.='</div>';
              //Step 5 End
            $output.='</div>';
            $output.='<div id="step-6">';
              //Step 6 starts
              $output.='<h4 class="font-size-18">Review & Submit</h4>';
              // $output.='<p class="font-size-14">All Accredited and Non Accredited Programs are listed below.
              // Use the program filter to find your program faster.
              // To view the learning objective tap on the + icon.Tap on the schedule button to make your selection </p>';

              $output.='<div class="row">';
                $output.='<div class="col-md-6 col-xs-6"> <button  type="button" class="action-btn-wizard-previous float-left btn ">Previous</button> </div>';
                $output.='<div class="col-md-12 col-xs-12"> <button  type="button" class="action-btn-wizard-next float-right btn ">Next</button> </div>';
              $output.='</div>';
              //Step 6 End
            $output.='</div>';
          $output.='</div>';
        $output.='</div>';
      $output.='</div>';

     $output.='</div>';
  $output.='</div>';
return $output;

}


function selectTime(){
$output = '';

$output.='<ul class="dropdown-menu scrollable-menu " role="menu">';

  $output.='<li><a href="#">12:00 </a></li>';
  $output.='<li><a href="#">12:15 </a></li>';
  $output.='<li><a href="#">12:30 </a></li>';
  $output.='<li><a href="#">12:45 </a></li>';
  $output.='<li><a href=#">1:00 </a></li>';
  $output.='<li><a href=#">1:15 </a></li>';
  $output.='<li><a href=#">1:30 </a></li>';
  $output.='<li><a href=#">1:45 </a></li>';
  $output.='<li><a href=#">2:00 </a></li>';
  $output.='<li><a href=#">2:15 </a></li>';
  $output.='<li><a href=#">2:30 </a></li>';
  $output.='<li><a href=#">2:45 </a></li>';
  $output.='<li><a href=#">3:00 </a></li>';
  $output.='<li><a href=#">3:15 </a></li>';
  $output.='<li><a href=#">3:30 </a></li>';
  $output.='<li><a href=#">3:45 </a></li>';
  $output.='<li><a href=#">4:00 </a></li>';
  $output.='<li><a href=#">4:15 </a></li>';
  $output.='<li><a href=#">4:30 </a></li>';
  $output.='<li><a href=#">4:45 </a></li>';
  $output.='<li><a href=#">5:00 </a></li>';
  $output.='<li><a href=#">5:15 </a></li>';
  $output.='<li><a href=#">5:30 </a></li>';
  $output.='<li><a href=#">5:45 </a></li>';
  $output.='<li><a href=#">6:00 </a></li>';
  $output.='<li><a href=#">6:15 </a></li>';
  $output.='<li><a href=#">6:30 </a></li>';
  $output.='<li><a href=#">6:45 </a></li>';
  $output.='<li><a href=#">7:00 </a></li>';
  $output.='<li><a href=#">7:15 </a></li>';
  $output.='<li><a href=#">7:30 </a></li>';
  $output.='<li><a href=#">7:45 </a></li>';
  $output.='<li><a href=#">8:00 </a></li>';
  $output.='<li><a href=#">8:15 </a></li>';
  $output.='<li><a href="8-30-am">8:30 </a></li>';
  $output.='<li><a href=#">8:45 </a></li>';
  $output.='<li><a href=#">9:00 </a></li>';
  $output.='<li><a href=#">9:15 </a></li>';
  $output.='<li><a href=#">9:30 </a></li>';
  $output.='<li><a href=#">9:45 </a></li>';
  $output.='<li><a href="#">10:00 </a></li>';
  $output.='<li><a href="#">10:15 </a></li>';
  $output.='<li><a href="#">10:30 </a></li>';
  $output.='<li><a href="#">10:45 </a></li>';
  $output.='<li><a href="#">11:00 </a></li>';
  $output.='<li><a href="#">11:15 </a></li>';
  $output.='<li><a href="#">11:30 </a></li>';
  $output.='<li><a href="#">11:45 </a></li>';
$output.='</ul>';


return $output;
}


function selectDuration(){
$output = '';

$output.='<ul class="dropdown-menu scrollable-menu " role="menu">';

  $output.='<li><a href="#">30 Minutes         </a></li>';
  $output.='<li><a href="#">1 Hour             </a></li>';
  $output.='<li><a href="#">1 Hour 30 Minutes  </a></li>';
  $output.='<li><a href="#">2 Hours            </a></li>';
  $output.='<li><a href=#"> 2 Hours 30 Minutes </a></li>';
  $output.='<li><a href=#"> 3 Hours            </a></li>';

$output.='</ul>';


return $output;
}

    ?>';
