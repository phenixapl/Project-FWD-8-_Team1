<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Regna Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

<link rel="stylesheet" href="../fontawesome-free-5.1.1-web/css/all.css">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="../index.html"><img src="../img/logo.png" alt="" title="" /></img></a>
       
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../rooms.html">Номери</a></li>
          <li><a href="../restaurant.html">Ресторан</a></li>
          <li><a href="../spa.html">SPA</a></li>
          <li><a href="../conferencehall.html">Конференц зала</a></li>
          <li><a href="../childrenroom.html">Дитяча кімната</a></li>
          <li><a href="../gallery.html">Галерея</a></li>
          <li><a href="../prices.html">Ціни</a></li>
          <li><a href="index.php">Контакти</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <main id="main">
     <!--==========================
      Services Section
    ============================-->
    

  <section id="services"> <!-- #contacForm-->
      <div class="container wow fadeIn">
        <div class="section-header">
         <center>
          <div class="col-md-6 ">
              <h1 class="section-title">КОНТАКТНА ФОРМА</h1>
              <div class="alert alert-primary" role="alert">
  Поля з зiрочкою ОБОВ'ЯЗКОВІ для заповнення *
</div>
    <form action="contactform.php" method="POST">
        <input type="text" name="name" placeholder="Ваше Ім'я *" >
        
        <input type="text" name="mail" placeholder="Ваша електронна адреса*" >
        
        <input type="text" name="subject" placeholder="Тема">
        <textarea name="message" placeholder="Повідомлення... *" ></textarea> 
       
        <button type="submit" class="btn btn-success" name="submit">Відправити</button>
      </form>
      
        </div>
       </center>
          </div>
      </div>
    </section>
    
     </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
 

  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
