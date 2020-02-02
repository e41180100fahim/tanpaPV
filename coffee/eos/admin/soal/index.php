<?php
if (!isset($_SESSION['id_admin'])) {
   header('location: ../');
}

if (isset($_GET['action'])) {

   switch ($_GET['action']) {
      case 'addsoal':
         include('./soal/add.php');
         break;

      case 'edit':
         include('./soal/edit.php');
         break;
      case 'adds':
         include('./soal/addsoal.php');
         break;

      case 'hapus':

         if (isset($_GET['id'])) {

            $nis   = strip_tags(mysqli_real_escape_string($con, $_GET['id']));

            $sql   = $con->prepare("DELETE FROM quiz WHERE id_soal = ?");
            $sql->bind_param('s', $id_soal);
            $sql->execute();

            header('location: ?page=user');
         
         
      
         } else {

            header('location: ./');

         }
         break;
      default:
         include('./soal/list.php');
         break;
   }

} else {

   include('./soal/list.php');

}
?>
