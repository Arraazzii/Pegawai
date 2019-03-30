<?php 
        if (isset($_GET['status'])) {
            $ambil = $_GET['status'];
            if ($ambil == 5) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DIAPPROVE');
                    });
                </script>
                ";
            } elseif ($ambil == 6) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.success('Success!', 'DATA BERHASIL DIREJECT');
                    });
                </script>
                ";
            } elseif ($ambil == 7) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Success!', 'DATA GAGAL DIAPPROVE');
                    });
                </script>
                ";
            } elseif ($ambil == 8) {
                echo "
                <script>
                    $(document).ready(function(){
                        toastr.error('Error!', 'DATA GAGAL DIREJECT');
                    });
                </script>
                ";  
            } 

        }
    ?> 