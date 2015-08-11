<?php

require_once 'includes/functions/functions-html.php';
require_once 'includes/functions/sample-tables.inc.php';
require_once 'includes/functions/scheduler.inc.php';

$request_URI = "$_SERVER[REQUEST_URI]";
$output = '';

   /**
     * START X-NAVIGATION VERTICAL 1
     *
     */

     $output = top_navigation();
    /**
     * START X-NAVIGATION VERTICAL 2
     *
     */

    /**
     * START BREADCRUMB
     */
    // $output.='<ul class="breadcrumb">';
      // $output.='<li><a href="#">Home</a></li>';
      // $output.='<li class="active">IPF Scheduler</li>';
    // $output.='</ul>';
/**
 * END BREADCRUMB
 */

/**
 * PAGE CONTENT WRAPPER
 */
$output.='<div class="page-content-wrap ">';

    /**
     * START  Widgets 1
     */

    if ($request_URI == '/bi-demo/index.php?concept=1' || $request_URI == '/bi-demo/index.php' || $request_URI == '/bi-demo/'  ) {
            $output.= scheduler_concept_1();
     }

     if ($request_URI == '/bi-demo/index.php?concept=2') {
        $output.= scheduler_concept_2();

     }
     if ($request_URI == '/bi-demo/index.php?concept=3') {
        $output.= event_scheduler();


     }

    /**
     * END  Widgets 1
     */


 print($output);





?>
