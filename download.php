<?php

$filepath = $_SERVER['DOCUMENT_ROOT']."/.php_files/acme_brochure.pdf";
if (file_exists($filepath)) {
   header("Content-Type: application/force-download");
   header("Content-Disposition:filename=\"fourfacts.php\"");
   $fd = fopen($filepath, 'rb');
   fpassthru($fd);
   fclose($fd);
  
  }
  
?>