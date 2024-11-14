<!DOCTYPE html>
<html lang="en">

<head>
  <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/front/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="assets/front/css/animate.css">

  <link rel="stylesheet" href="assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/front/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/front/css/magnific-popup.css">

  <link rel="stylesheet" href="assets/front/css/aos.css">

  <link rel="stylesheet" href="assets/front/css/ionicons.min.css">

  <link rel="stylesheet" href="assets/front/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/front/css/jquery.timepicker.css">


  <link rel="stylesheet" href="assets/front/css/flaticon.css">
  <link rel="stylesheet" href="assets/front/css/icomoon.css">
  <link rel="stylesheet" href="assets/front/css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Car<span>Book</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/services' ? 'active' : ''); ?>"><a href="/services" class="nav-link">Services</a></li>
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/pricing' ? 'active' : ''); ?>"><a href="/pricing" class="nav-link">Pricing</a></li>
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/car' ? 'active' : ''); ?>"><a href="/car" class="nav-link">Cars</a></li>
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/blog' ? 'active' : ''); ?>"><a href="/blog" class="nav-link">Blog</a></li>
          <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>"><a href="/contact" class="nav-link">Contact</a></li>

          <?php if (!isset($_SESSION['user'])): ?>
            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/login' ? 'active' : ''); ?>"><a href="/login" class="nav-link">Login</a></li>
            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/register' ? 'active' : ''); ?>"><a href="/register" class="nav-link">Register</a></li>
          <?php endif; ?>

          <?php if (isset($_SESSION['user'])): ?>
            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/profile' ? 'active' : ''); ?>"><a href="/profile" class="nav-link">Profile</a></li>
            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/logout' ? 'active' : ''); ?>"><a href="/logout" class="nav-link">Logout</a></li>
          <?php endif; ?>
        </ul>

      </div>
    </div>
  </nav>
  <!-- END nav -->