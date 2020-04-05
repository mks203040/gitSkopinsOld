<?php

/* 
 * Redirect to a different page in the current directory that was requested 
 */
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'skopins/index.php?view=5&content=1';  // change accordingly

header("Location: http://$host$uri/$extra");
exit;