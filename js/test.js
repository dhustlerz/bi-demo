google.load("visualization", '1', {packages:['corechart']});
    google.setOnLoadCallback(drawChart);
    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Element', 'Density', { role: 'style' }],
        ['Copper', 8.94, '#b87333', ],
        ['Silver', 10.49, 'silver'],
        ['Gold', 19.30, 'gold'],
        ['Platinum', 21.45, 'color: #e5e4e2' ]
      ]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        bar: {groupWidth: '95%'},
        legend: 'none',
        'width':700,
        'height':700,
      };

      var chart_div = document.getElementById('google_chart_div');
      var chart = new google.visualization.ColumnChart(chart_div);

      // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(chart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        console.log("google chart: "+  chart.getImageURI());
      });

      chart.draw(data, options);

  }


/*----------------------------------------------------------canvas-----------------------------------------------------------*/

var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};

var options = {

    ///Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines : true,
    onAnimationComplete: mycustomchart,
    animationSteps: 5,



    //String - A legend template
    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

};



  var ctx = document.getElementById("chartjs_chart_div");
  var ctxContext = ctx.getContext("2d");
  var myLineChart = new Chart(ctxContext).Line(data, options);


  var ctx2 = document.getElementById("chart_header");
  var ctxContext2 = ctx2.getContext("2d");
   ctxContext2.fillStyle = '#000000';
   ctxContext2.font = 'italic  20px sans-serif';
   ctxContext2.textBaseline = 'top';
   ctxContext2.textAlign="top";
   ctxContext2.fillText('This is line chart', 10, 100);






  function mycustomchart() {

    var ctx3 = document.getElementById("chart_wrapper");
    var ctxContext3 = ctx3.getContext("2d");

    ctxContext3.drawImage(ctx2, 10, 30);
    ctxContext3.drawImage(ctx, 1, 180);

    //var img1 = myLineChart.toBase64Image();
    var img2    = chart_wrapper.toDataURL("image/png");
    //console.log(img1);
    console.log(img2);
  }
