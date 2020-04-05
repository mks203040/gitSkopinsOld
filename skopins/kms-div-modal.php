<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Документ без названия</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<style>
{
        position:absolute;
        top: 0%;
        left: 0%;
        width:1600px;
        height:2000px;
        margin-top: -800px; /*set to a negative number 1/2 of your height*/
        margin-left: -500px; /*set to a negative number 1/2 of your width*/
        /*
        z- index must be lower than pop up box
       */
        z-index: 99;
       background-color:Black;
       //for transparency
       opacity:0.6;
    }

    #popup_box  
    {

    position:absolute;
        top: 50%;
        left: 50%;
        width:10em;
        height:10em;
        margin-top: -5em; /*set to a negative number 1/2 of your height*/
        margin-left: -5em; /*set to a negative number 1/2 of your width*/
        border: 1px solid #ccc;
        border:  2px solid black;
        z-index:100; 

    }

</style>




<script>
  $(document).ready(function () {
        //hide hider and popup_box
        $("#hider").hide();
        $("#popup_box").hide();

        //on click show the hider div and the message
        $("#showpopup").click(function () {
            $("#hider").fadeIn("slow");
            $('#popup_box').fadeIn("slow");
        });
        //on click hide the message and the
        $("#buttonClose").click(function () {

            $("#hider").fadeOut("slow");
            $('#popup_box').fadeOut("slow");
        });

        });

</script>



</head>

<body>


<div id="hider"></div>


<div id="popup_box">
    Message<br />
    <a id="buttonClose">Close</a>
</div>    


<div id="content">
    Page's main content.<br />
    <a id="showpopup">ClickMe</a>
</div>


</body>
</html>