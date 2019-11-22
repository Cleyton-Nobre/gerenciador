 <?php 
  if(isset($_SESSION['ID_USUARIO'])){
    require_once PATH_PAGES.'home/homeON.php';
    }else {
      require_once PATH_PAGES.'home/homeOFF.php';
    }
 ?>
  