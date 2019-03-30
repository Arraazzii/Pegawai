        <?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 1) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DISIMPAN');
                    });
                </script>
                ";
            } elseif ($ambil == 2) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Error!', 'DATA GAGAL DISIMPAN');
                    });
                </script>
                ";
            } elseif ($ambil == 3) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'UKURAN FILE MAX 5 MB');
                    });
                </script>
                ";
            } elseif ($ambil == 4) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'EKSTENSI FILE TIDAK DI IZINKAN');
                    });
                </script>
                ";  
            }

        }
    ?> 