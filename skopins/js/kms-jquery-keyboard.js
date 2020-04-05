$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
		  		  $("#a1")[0].click();
        break;

        case 38: // up
		   $("#a1")[0].click();
        break;

        case 39: // right
		  		  $("#a2")[0].click();
        break;
		
		case 32: // space
		  		  $("#a3")[0].click();
        break;

        case 40: // down
		  $("#a2")[0].click();
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});