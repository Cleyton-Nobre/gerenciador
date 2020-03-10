 <?php 
  if(isset($_SESSION['ID_USUARIO'])){
    header("Location:".URL_HOME.'receber');
    }else {
      require_once PATH_PAGES.'home/homeOFF.php';
    }
 ?>
  