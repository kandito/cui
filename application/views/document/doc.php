<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
   <title><?php echo $title ?></title>
  </head>

  <body>
<?php
  header("Content-Type: application/vnd.ms-word");
  header("Expires: 0");
  header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
  header("Content-disposition: attachment; filename=" . $title . ".doc");
  echo $content;
?>
  </body>
</html>
