        <?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 111) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'FILE BERHASIL DI UPLOAD');
                    });
                </script>
                ";
            } elseif ($ambil == 222) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Error!', 'FILE GAGAL DI UPLOAD');
                    });
                </script>
                ";
            } elseif ($ambil == 333) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'UKURAN FILE MAX 5 MB');
                    });
                </script>
                ";
            } elseif ($ambil == 444) {
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