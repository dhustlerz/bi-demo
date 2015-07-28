<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php
            $request_URI = "$_SERVER[REQUEST_URI]";

             // START PAGE SIDEBAR
             include 'sidebar.inc.php' ;
             echo sidebar();
             // END PAGE SIDEBAR -->

             // PAGE CONTENT -->
             echo'<div class="page-content">';
             if ($request_URI == '/bi-demo/index.php?concept=1' || $request_URI == '/bi-demo/index.php' || $request_URI == '/bi-demo/'  ) {
                include 'scheduler_concept_1.inc.php';
             }
             if ($request_URI == '/bi-demo/index.php?concept=2') {
                include 'scheduler_concept_2.inc.php';
             }
             // elseif ($request_URI == '/hc3-demo/needs-assessment.php') {
             //     include 'content-needs-assesment.inc.php';
             // }
             // elseif($request_URI == '/hc3-demo/program-evaluation.php?p=diabetes&t=all')
             // {
             //    include 'content-diabetes.inc.php';
             // }
             // elseif($request_URI == '/hc3-demo/program-evaluation.php?p=diabetes&t=accr')
             // {
             //    include 'content-diabetes-accr.inc.php';
             // }
             // elseif($request_URI == '/hc3-demo/program-evaluation.php?p=diabetes&t=non-accr')
             // {
             //    include 'content-diabetes-non-accr.inc.php';
             // }
             //include 'scheduler_concept_1.inc.php';
             echo '</div>';
             // END PAGE CONTENT -->


            ?>



        </div>
        <!-- END PAGE CONTAINER -->

        <!--
        *The message box is moved to in sidebar.inc.php so as to make a call from each page
        -->
        <?php
        include 'javascript.inc.php' ;
        $javascriptLoad = javascriptLoad();
        print($javascriptLoad);
        ?>
