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
                        toastr.success('Success!', 'DATA BERHASIL DIHAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 3) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'DATA GAGAL DIHAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 4) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA GAGAL DISIMPAN');
                    });
                </script>
                ";  
            } elseif ($ambil == 5) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'NIP PEGAWAI TIDAK TERSEDIA');
                    });
                </script>
                ";  
            } elseif ($ambil == 6) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'NIP PEGAWAI SUDAH TERSEDIA');
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