<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="jquery.superbox.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/jquery.superbox-min.js"></script>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script>

$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
		  alert( "left pressed" );
        break;

        case 38: // up
		  alert( "up pressed" );
		  $("#a")[0].click();
	
	
  function a_onClick() {
   alert('a_onClick');
  }
		  
        break;

        case 39: // right
		  alert( "left pressed" );
		  $
        break;

        case 40: // down
		  alert( "left pressed" );
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});


</script>


</head>
<body>

Enter your name: <input type="text">
<p>When you type in the field above, the div element below will display the key number.</p>
<div />

<a id="a" href="www.google.com" onClick="a_onClick()">CLICKME </a>

</body>
</html>
