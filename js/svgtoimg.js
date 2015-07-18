// var svgText = document.getElementById("chart_div");
// var myCanvas = document.getElementById("canvas");
// var ctxt = myCanvas.getContext("2d");

// function drawInlineSVG(ctx, rawSVG, callback) {

//     var svg = new Blob([rawSVG], {type:"image/svg+xml;charset=utf-8"}),
//         domURL = self.URL || self.webkitURL || self,
//         url = domURL.createObjectURL(svg),
//         img = new Image;

//     img.onload = function () {
//         ctx.drawImage(this, 0, 0);
//         domURL.revokeObjectURL(url);
//         callback(this);
//     };

//     img.src = url;
// }

// // usage:
// drawInlineSVG(ctxt, svgText, function() {
//     console.log(canvas.toDataURL());  // -> PNG
//     alert("see console for output...");
// });
// var canvas = document.getElementById("canvas");
// var context = canvas[0].getContext('2d');
// var img    = canvas[0].toDataURL("image/png");
// document.write('<img src="'+img+'"/>');
