<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>
  <!-- Google Tag Manager (noscript) -->

  <!-- End Google Tag Manager (noscript) -->
  <div class="loader" id="loader">
    <img src="img/loader.svg" alt="Loading...">
  </div>
  <?php require_once('blocks/header.php'); ?>
  <section class="mainWrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
            <?php require_once('blocks/menu.php'); ?>
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <?php if(!isset($_REQUEST['content'])){
              require_once('blocks/home.php');
            }elseif($_REQUEST['content']=='gracias'){
              require_once('blocks/gracias.php');
            }else{
              require_once('blocks/404.php');
            } 
            ?>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
            <?php require_once('blocks/sidebar.php'); ?>
        </div>
      </div>
    </div>
  </section>
  <?php require_once('blocks/footer.php'); ?>
  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/bootbox.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.7/hammer.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
