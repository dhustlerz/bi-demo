<?php

require_once 'includes/functions-html.php';
require_once 'sample-tables.inc.php';


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

     require_once 'includes/functions-html.php';

     $output.= scheduler_concept_2();

    /**
     * END  Widgets 1
     */


 print($output);





?>
