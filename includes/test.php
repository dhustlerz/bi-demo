<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="CSS3 skins for jQuery UI datapicker" />
  <meta name="keywords" content="jquery datepicker themes, jquery datepicker skins, jquery ui datepicker themes, jquery ui datepicker skins, CSS3 jquery datepicker, CSS3 datepicker, CSS3 calendar, javascript datepicker, javascript calendar" />
  <meta property="twitter:card" content="summary"/>
  <meta property="twitter:site" content="@GitHub">
  <meta property="twitter:title" content="rtsinani/jquery-datepicker-skins"/>

  <title>jquery-datepicker-skins :: CSS3 skins for jQuery UI datepicker</title>
  <link href="css/jquery/jquery-ui.min.css" rel="stylesheet">
  <link type="text/css" href="../css/calender-date-picker/cangas.datepicker.css" rel="stylesheet">




  <script>
  $(function() {
    $( ".datepicker" ).datepicker({
      inline: true,
      showOtherMonths: true
    });
  });
  </script>

  <style>
    body {
      font: 100% "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, Verdana, sans-serif;
      margin: 0;
      background:fff;
    }
    .no-show {
      display: none;
    }
    h1 {
      width:900px;
      margin: .5em auto 0;
      padding: 10px 0 0;
      background: url('css/images/cal_logo.png') left center no-repeat;
      height: 43px;
      line-height: 30px;
      padding-left: 50px;
      color: #ed7474;
      font-size: 1.6em;
    }
    h2 {
      margin: 0 0 .5em;
      padding: 0;
      color: #555;
      font-size: 1.3em;
    }
    h2 a {
      font-size: .7em;
      font-weight: normal;
      color: #999;
      float: right;
      margin-right: .3em;
      margin-top: .3em;
      text-decoration: none;
      display: none;
    }
    h2 a:hover {
      color: #111;
    }
    .datepickers-cont td.part:hover h2 a {
      display: inline;
    }
    article {
      display: block;
      width: 960px;
      margin: 20px auto;
    }
    .datepickers-cont {
      margin: 0;
      padding: 0;
    }
    .datepickers-cont td.part {
      vertical-align: top;
      padding: 0 1.4em 0 0;
      height: 22em;
    }
    footer {
      width: 900px;
      display: block;
      margin: 5em auto;
      padding: 1em 2em;
      color: #888;
      font-size: .9em;
      background: #f0f0f0;
      border-radius: 1.5em;
    }
    footer a {
      color: #666;
      text-decoration: none;
    }
    footer a:hover {
      color: #000;
    }
    footer a:first-child {
      font-weight: bold;
    }
    /* clearfix short For modern browsers */
    .cf:before,
    .cf:after { content:""; display:table; }
    .cf:after { clear:both; }
    /* For IE 6/7 (trigger hasLayout) */
    .cf { zoom:1; }

  </style>
</head>
<body>

  <a href="https://github.com/rtsinani/jquery-datepicker-skins"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>

  <h1>jQuery datepicker skins</h1>

  <article>
    <table class="datepickers-cont">
      <tr>
        <td class="part">


        <td class="part">
          <h2>cangas
            <a target="_blank" href="http://365psd.com/day/227/">psd</a>
            <a target="_blank" href="https://github.com/rtsinani/jquery-datepicker-skins/blob/master/css/images/ui-icons_ffffff_256x240.png">img</a>
            <a target="_blank" href="https://github.com/rtsinani/jquery-datepicker-skins/raw/master/css/cangas.datepicker.css">css</a>
          </h2>
          <div class="datepicker ll-skin-cangas"></div>
        </td>


        <td></td>
      </tr>

    </table>
  </article>

  <footer>
    <a href="https://github.com/rtsinani">rtsinani</a>. Built with <a href="https://github.com/rtsinani/jquery-datepicker-skins/raw/master/js/jquery-1.9.1.js">jquery-1.9.1</a> and <a href="https://github.com/rtsinani/jquery-datepicker-skins/raw/master/js/jquery-ui-1.10.1.min.js">jquery-ui-1.10.1</a>. Designs by <a href="http://365psd.com/" target="_blank">365psd.com</a>
  </footer>


 <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
 <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
</body>
</html>
