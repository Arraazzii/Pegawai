        <?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 1) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'USER BERHASIL DI APPROVE');
                    });
                </script>
                ";
            } elseif ($ambil == 2) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'USER BERHASIL DI REJECT');
                    });
                </script>
                ";
            } elseif ($ambil == 3) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'USER GAGAL DI APPROVE');
                    });
                </script>
                ";
            } elseif ($ambil == 4) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'USER GAGAL DI REJECT');
                    });
                </script>
                ";  
            } elseif ($ambil == 5) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA USER BERHASIL DI SIMPAN');
                    });
                </script>
                ";
            } elseif ($ambil == 6) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA USER GAGAL DI SIMPAN');
                    });
                </script>
                ";
            } elseif ($ambil == 7) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'NIP TIDAK TERDAFTAR');
                    });
                </script>
                ";
            } elseif ($ambil == 8) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'NIP SUDAH TERDAFTAR');
                    });
                </script>
                ";
            } elseif ($ambil == 9) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'USER BERHASIL DI HAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 10) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'USER GAGAL DI HAPUS');
                    });
                </script>
                ";
            } else{
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!');
                    });
                </script>
                ";
            } 

        }
    ?> 