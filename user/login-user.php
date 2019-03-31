
<?php
include "../config_config_cs/koneksi-data-peg-lr-com.php";

$nip    = @$_POST['nip'];
$pass   = @md5($_POST['password']);


$login=mysqli_query($connect, "SELECT * FROM tbl_user_lr WHERE nip='$nip' AND password='$pass' and kode_approve='1' ") or die(mysqli_error($connect));
$ketemu = mysqli_num_rows($login);
$r      = mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['kode']     = $r['id'];
  $_SESSION['nip']     = $r['nip'];
  $_SESSION['passuser']     = $r['password'];
  $_SESSION['leveluser']    = $r['level_user'];
  $_SESSION['status']    = $r['status'];
  $_SESSION['w_login']    = $r['w_login'];
  $id_user=$_SESSION['kode'];



  if($_SESSION['leveluser'] == 'SUPER ADMIN'){
	  echo "<script>window.location ='../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=11'</script>";
	  mysqli_query($connect, "update tbl_user_lr set status='1', w_login=NOW() where id='$id_user'");
  } else if($_SESSION['leveluser'] == 'ADMIN'){
    echo "<script>window.location ='../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=11'</script>";
	  mysqli_query($connect, "update tbl_user_lr set status='1', w_login=NOW() where id='$id_user'");
  } else if($_SESSION['leveluser'] == 'ADMIN TEKNIS'){
    echo "<script>window.location ='../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=11'</script>";
    mysqli_query($connect, "update tbl_user_lr set status='1', w_login=NOW() where id='$id_user'");
  } else if($_SESSION['leveluser'] == 'ADMIN FINANCE'){
    echo "<script>window.location ='../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=11'</script>";
    mysqli_query($connect, "update tbl_user_lr set status='1', w_login=NOW() where id='$id_user'");
  } else if($_SESSION['leveluser'] == 'USER'){
    echo "<script>window.location ='../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=11'</script>";
	  mysqli_query($connect, "update tbl_user_lr set status='1', w_login=NOW() where id='$id_user'");
  } else if($_SESSION['leveluser'] == 'ADMIN GUDANG'){
    echo "<script>window.location ='../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=11'</script>";
	  mysqli_query($connect, "update tbl_user_lr set status='1', w_login=NOW() where id='$id_user'");
  }
}
else{

  echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=21'</script>";
}

?>
