<?php
   //sets the content type to javascript 
   header('Content-type: text/javascript');

   // includes all js files of the directory
   foreach(glob("*.js") as $file) {
      readfile($file);
   }
?>
