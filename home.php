            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <?php
                            if ($_SESSION['leveluser'] == 'SUPER ADMIN') {
                                include('_nav/button-admin-super.php');
                            } elseif ($_SESSION['leveluser'] == 'ADMIN') {
                                include('_nav/button-admin-super.php');
                            } elseif ($_SESSION['leveluser'] == 'ADMIN TEKNIS') {
                                include('_nav/button-user.php');
                            } elseif ($_SESSION['leveluser'] == 'ADMIN FINANCE') {
                                include('_nav/button-user.php');
                            } elseif ($_SESSION['leveluser'] == 'USER') {
                                include('_nav/button-user.php');
                            } elseif ($_SESSION['leveluser'] == 'ADMIN GUDANG') {
                                include('_nav/button-user.php');
                            }

                        ?>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="colmd-12">
                        <!-- card new -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">News Updates</h4>
                            </div>
                            <ul class="list-style-none">
                                <?php

                                    $view = mysqli_query($connect, "SELECT * FROM tbl_news ORDER BY tanggal DESC LIMIT 5");

                                    while ($row = mysqli_fetch_array($view)) {
                                ?>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="mdi mdi-newspaper w-30px m-t-5"></i>
                                    <div>
                                        <a href="#<?php echo $row['id']; ?>" class="m-b-0 font-medium p-0" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>" ><?php echo $row['judul']; ?></a>
                                        <span class="text-muted"><?php echo $row['deskripsi']; ?></span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0"><?php echo tgl_news($row['tanggal']); ?></h5>
                                            <span class="text-muted font-16"><?php echo bln_news($row['tanggal']); ?></span>
                                        </div>
                                    </div>
                                </li>
                                <!--modal-->
                                <div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                    <div class="modal-dialog modal-lg" role="document ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true ">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row['judul']; ?></h4>
                                <span class="text-muted"><?php echo tgl_indo($row['tanggal']); ?></span>
                            </div>
                            <style type="text/css">
                                .wrapper {
                                  column-count: 1;
                                  column-gap: 10px;
                                  padding: 10px;
                                }
                                .star {
                                  float: left;
                                  width: 250px;
                                  height: 220px
                                  shape-margin:20px;
                                  margin-right: 20px;
                                  margin-bottom: 20px;
                                }
                            </style>

                            <div class="comment-widgets scrollable">
                                
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="wrapper">
                                        <?php
                                            if ($row['gambar'] == NULL) { ?>
                                                <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use. </p>
                                        <?php
                                            } else { ?>
                                        <img src="<?php echo $row['gambar']; ?>" alt="" class="star">     
                                        <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use. </p>
                                    <?php } ?>
                                    </div>
                                    </div>
                                </div>
                            </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
            </div>
