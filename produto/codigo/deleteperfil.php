<?php
include "config/config.php";
if(isset($_GET['d'])):
     $stmt = $mysqli->prepare("DELETE FROM perfil WHERE IdPerfil=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['d'];
 
     if($stmt->execute()):
          echo "<script>location.href='perfil.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>