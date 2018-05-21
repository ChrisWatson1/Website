
        <nav class="nav">
<ul class="dropdown">

  <li><a href="home.php" <?php if($path_parts['filename'] == "home")
  { print 'class="sel"';} ?> >About</a></li>


  <li class="hover <?php if( ($path_parts['filename'] == "products") ||  ($path_parts['filename'] == "process-director")
  || ($path_parts['filename'] == "rapid-workplace") ||  ($path_parts['filename'] == "contact-director") || ($path_parts['filename'] == "industry-solutions") )
  {print ' sel';  }?>"> <a href="products.php">Products and Services</a>

    <ul class="hide">
      <li><a href="process-director.php" <?php if($path_parts['filename'] == "process-director")
      { print ' class ="sel"';}?> >Process Director</a></li>

      <li><a href="rapid-workplace.php" <?php if($path_parts['filename'] == "rapid-workplace")
      {print ' sel';}?> >RAPID Workplace</a></li>

      <li><a href="content-director.php" <?php if($path_parts['filename'] == "contact-director")
      { print ' class ="sel"';}?> >Content Director</a></li>

      <li><a href="industry-solutions.php" <?php if($path_parts['filename'] == "industry-solutions")
      {  print ' class ="sel"';}?> >Innovative Solutions</a></li>
    </ul>
  </li>

  <li><a href="public-sector.php" <?php if($path_parts['filename'] == "public-sector")
  { print 'class="sel"';}?> >Public Sector</a></li>

  <li><a href="partners.php" <?php if($path_parts['filename'] == "partners")
  { print 'class="sel"';}?> >Partners</a></li>

</ul>
</nav>
        <!-- /nav -->
