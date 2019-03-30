        <?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 1) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA PEGAWAI BERHASIL DISIMPAN');
                    });
                </script>
                ";
            } elseif ($ambil == 2) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA PEGAWAI BERHASIL DIHAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 3) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'DATA PEGAWAI GAGAL DIHAPUS');
                    });
                </script>
                ";
            } elseif ($ambil == 4) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA PEGAWAI GAGAL DISIMPAN');
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
            } elseif ($ambil == 7) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'PEGAWAI BERHASIL DI NONAKTIFKAN');
                    });
                </script>
                ";  
            } elseif ($ambil == 8) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'PEGAWAI BERHASIL DI AKTIFKAN');
                    });
                </script>
                ";  
            } elseif ($ambil == 9) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'PEGAWAI GAGAL DI AKTIFKAN');
                    });
                </script>
                ";  
            } elseif ($ambil == 10) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'PEGAWAI GAGAL DI NONAKTIFKAN');
                    });
                </script>
                ";  
            }

        }
    ?> 