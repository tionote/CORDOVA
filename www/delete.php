<?php
 include "db.php";
 if(isset($_GET['nip']))
 {
 $nip=$_GET['nip'];
 $q=mysqli_query($con,"delete from `progdi` where `nip`='$nip'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
