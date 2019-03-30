<?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 1) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DIAJUKAN');
                    });
                </script>
                ";
            } elseif ($ambil == 2) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DIAPPROVE');
                    });
                </script>
                ";
            } elseif ($ambil == 3) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA GAGAL DIAJUKAN');
                    });
                </script>
                ";
            } elseif ($ambil == 4) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA GAGAL DIAPPROVE');
                    });
                </script>
                ";  
            } elseif ($ambil == 5) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'BARANG BERHASIL DIKEMBALIKAN');
                    });
                </script>
                ";  
            } elseif ($ambil == 6) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'BARANG GAGAL DIKEMBALIKAN');
                    });
                </script>
                ";  
            } elseif ($ambil == 7) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'PEMINJAMAN BERHASIL DICANCEL');
                    });
                </script>
                ";
            } elseif ($ambil == 8) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'PEMINJAMAN BERHASIL DICANCEL');
                    });
                </script>
                ";  
            }



        }
    ?> 