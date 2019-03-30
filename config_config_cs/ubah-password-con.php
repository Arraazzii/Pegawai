<?php
    if (isset($_POST['submit'])) {
        include "../config_config_cs/koneksi-data-peg-lr-com.php";

        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $nip = $_POST['id'];

        if ($password == $password2) {
            $mdpass = md5($password2);

            $ubahpass = mysqli_query($connect, "UPDATE tbl_user_lr SET password='$mdpass' WHERE nip='$nip'");
            if ($ubahpass) { ?>
                <script type="text/javascript">
                    window.location="../?view=profil-pribadi&id=9973860hupa&name=pegaaplication&profilPribadi&status=1111";
                </script>
        <?php
            } else {?>
                <script type="text/javascript">
                    window.location="../?view=profil-pribadi&id=9973860hupa&name=pegaaplication&profilPribadi&status=2222";
                </script>
        <?php
            }

        }
    }
?>