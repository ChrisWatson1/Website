<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

$path_parts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // PATH SETUP
        //

     $domain = '//';

     $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');

     $domain .= $server;



  print '<title>';
  if ($path_parts['filename'] == "about")
  { print 'About Intellectus';

  }elseif($path_parts['filename'] == "contact")
  { print 'Contact';

  }elseif($path_parts['filename'] == "contact-director")
  { print 'Content Director';

  }elseif($path_parts['filename'] == "home")
  { print 'Intellectus';

  }elseif($path_parts['filename'] == "industry-solutions")
  { print 'Innovative Solutions';

  }elseif($path_parts['filename'] == "partners")
  { print 'Partners';

  }elseif($path_parts['filename'] == "process-director")
  { print 'Process Director';

  }elseif($path_parts['filename'] == "products")
  {print 'Products';

  }elseif($path_parts['filename'] == "public-sector")
  {print 'Public Sector';

  }elseif($path_parts['filename'] == "rapid-workplace")
  {print "RAPID workplace";

  }elseif($path_parts['filename'] == "services")
  { print 'services';
  }

  print '</title>';
    ?>

  <meta charset="UTF-8">
  <meta name="author" content="Zoe Watson">
  <meta name="description" content="Intellectus was founded as an On Demand, Business Solutions Company to help government agencies and commercial clients increase efficiency, reduce costs, and provide better services.
We have extensive experience helping agencies and companies solve company critical business requirements by providing products and services that deliver real-time, targeted business solutions.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png" type="image/png">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/intellectus.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
</head>

<?php
print '<body id="' . $path_parts['filename'] . '">';
?>
<article class="head">
<?php
include 'extra/header.php';
 ?>
</article>

<?php
include 'extra/nav.php';
?>
