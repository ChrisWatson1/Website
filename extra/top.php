<!DOCTYPE html>
<html lang="en">

<head>
  <link href="images/icon.png" rel="icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // PATH SETUP
        //

     $domain = '//';

     $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');

     $domain .= $server;

        if ($debug) {

            print '<p>php Self: ' . $phpSelf;
            print '<p>Path Parts<pre>';
            print_r($path_parts);
            print '</pre></p>';

  <?php
  print '<title>';
  About Intellectus
  print '</title>';
    ?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/intellectus.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
</head>

<?php
print '<body id="' . $path_parts['filename'] . '">';
include 'extra/header.php';
include 'extra/nav.php';
 ?>
