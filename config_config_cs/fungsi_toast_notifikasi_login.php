        <?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 11) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Login Success!', 'SELAMAT DATANG ". $_SESSION['leveluser'] ."');
                    });
                </script>
                "; 
            } elseif ($ambil == 21) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Login Failed!', 'Kombinasi NIP Dan Password Tidak Tepat!');
                    });
                </script>
                ";
            } elseif ($ambil == 31) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success', 'Berhasil! Silahkan Tunggu Konfirmasi HRD');
                    });
                </script>
                ";
            } elseif ($ambil == 41) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Regristration Failed!', 'NIP Sudah Terdaftar!');
                    });
                </script>
                ";
            } elseif ($ambil == 51) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Regristration Failed!', 'NIP Tidak Terdaftar!');
                    });
                </script>
                ";
            } elseif ($ambil == 61) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Regristration Failed!', 'Email Anda Tidak Terdaftar!');
                    });
                </script>
                ";
            } elseif ($ambil == 71) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Regristration Failed!', 'Konfirmasi Password Tidak Sesuai!');
                    });
                </script>
                ";
            } elseif ($ambil == 81) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Regristration Failed!', 'Data Tidak Sesuai!');
                    });
                </script>
                ";
            } elseif ($ambil == 91) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Check In Success!', 'Anda Berhasil Check In');
                    });
                </script>
                ";
            } elseif ($ambil == 101) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Check In Failed!', 'Harap Coba Lagi!');
                    });
                </script>
                ";
            } elseif ($ambil == 102) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Check Out Success!', 'Anda Berhasil Check Out');
                    });
                </script>
                ";
            } elseif ($ambil == 103) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Check Out Failed!', 'Harap Coba Lagi!');
                    });
                </script>
                ";
            }
        }
    ?> 