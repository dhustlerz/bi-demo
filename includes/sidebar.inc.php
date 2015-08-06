<?php
function sidebar() {
$sidebar_output = '';
//$sidebar_output.='<div  class="page-container">';
$sidebar_output.='<div class="page-sidebar bg-ffffff" style="height: 50px;">';

    /**
     * START X-NAVIGATION
     */
    $sidebar_output.='<ul class="x-navigation page-navigation-top-fixed bf-ffffff x-navigation-minimized" >';

      $sidebar_output.='<li class="xn-logo">';

          $sidebar_output.='<a href="#">Flexxia</a>';
          $sidebar_output.='<a href="#" class="x-navigation-control" ></a>';
          //$sidebar_output.='<a href="#" class="reportrange x-navigation-datepicker"></a>';
      $sidebar_output.='</li>';


        /**
         * START USER PROFILE
         */
        $sidebar_output.='<li class="xn-profile">';
        /*
         * The comments in xn-profile block are intensional please do not remove them
         */
            // $sidebar_output.='<a href="#" class="profile-mini">';
            //     $sidebar_output.='<img  src="assets/images/users/user0.png" alt="Chris "/>';
            // $sidebar_output.='</a>';
          $sidebar_output.='<div class= "profile">';
              // $sidebar_output.='<div class="profile-image">';
              //     $sidebar_output.='<img style="width: 60px;" src="assets/images/users/user0.png" alt="Chris Dodd"/>';
              // $sidebar_output.='</div>';
              $sidebar_output.='<div class="profile-data">';
                  $sidebar_output.='<div class="profile-data-name"><span>Chris Dodd</span><a href="#" class="mb-control padding-left-12 " data-box="#mb-signout"><span class="fa fa-gear"></span></a></div>';
                  //$sidebar_output.='<div class="profile-data-title">Administrator</div>';
              $sidebar_output.='</div>';
              // $sidebar_output.='<div class="profile-controls">';
              //     $sidebar_output.='<a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>';
              //     $sidebar_output.='<a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>';
              // $sidebar_output.='</div>';
          $sidebar_output.='</div>';
        $sidebar_output.='</li>';
        /**
         * END USER PROFILE
         */

        //$sidebar_output.='<li class="xn-title">Navigation</li>';
        $sidebar_output.='<li class="menu active xn-openable ">';
            $sidebar_output.='<a href="index.php"><span class="fa fa-clock-o"></span><span class="xn-text">Scheduler</span></a>';

              // $sidebar_output.='<ul>';
              //   $sidebar_output.='<li class="menu"><a href="index.php?concept=1">Concept 1</a></li>';
              //   $sidebar_output.='<li class="menu"><a href="index.php?concept=2">Concept 2</a></li>';
              // $sidebar_output.='</ul>';

        $sidebar_output.='</li>';

        $sidebar_output.='<li class="menu ">';
          $sidebar_output.='<a href="#"><span class="fa fa-calendar"></span><span class="xn-text">Calendar</span></a>';
        $sidebar_output.='</li>';

        $sidebar_output.='<li class="menu">';
          $sidebar_output.='<a href="#"><span class="fa  fa-user"></span><span class="xn-text">Speakers</span></a>';
        $sidebar_output.='</li>';


        $sidebar_output.='<li class="">';
          $sidebar_output.='<a href="#"><span class="fa fa-bar-chart-o"></span><span class="xn-text">Activity log</span></a>';
        $sidebar_output.='</li>';

        $sidebar_output.='<li class="">';
          $sidebar_output.='<a href="#"><span class="fa fa-users"></span><span class="xn-text">Adobe Connect </span></a>';
        $sidebar_output.='</li>';

        $sidebar_output.='<li>';
            $sidebar_output.='<a href="#"><span class="fa fa-map-marker"></span><span class="xn-text">Support</span></a>';
        $sidebar_output.='</li>';

    $sidebar_output.='</ul>';


            //$sidebar_output.='</ul>';

    /**
     * END X-NAVIGATION
     */
  $sidebar_output.='</div>';
//$sidebar_output.='</div>';
return($sidebar_output);

}


?>
