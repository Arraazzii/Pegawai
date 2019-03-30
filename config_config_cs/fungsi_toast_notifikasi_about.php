        <?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 1111) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DISIMPAN');
                    });
                </script>
                ";
            } elseif ($ambil == 2222) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DIHAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 3333) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'DATA GAGAL DIHAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 4444) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA GAGAL DISIMPAN');
                    });
                </script>
                ";  
            }

        }
    ?> 