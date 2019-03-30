<?php     
  
  $kategori     = isset($_POST['tipe']) ? $_POST['tipe'] : "";

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Report Inventory Kategori - ". $kategori.".xls");
?>
<style type="text/css">
  table,th,td{
    border-collapse: collapse;
    padding: 15px;
    margin: 10px;
    color: #000;
    font-size: 16px;
  }
</style>
<div style="text-align: center;">
	<br>
	<span style="margin-left: 20px;font-size: 20px;"><b>REPORT INVENTORY</b></span>
</div>
<div style="text-align: center;">
  <span style="margin-left: 20px;font-size: 20px;"><b>PT. LUMBUNG RIANG COMMUNICATION</b></span>
</div>
<div style="text-align: center;">
  <span style="margin-left: 20px;font-size: 20px;"><b>KATEGORI : <?= $kategori; ?></b></span>
</div><br>
<table border="1">
  <thead>
    <tr>
      <th>NO</th>
      <th>NO INVENTORY</th>
      <th>NAMA BARANG</th>
      <th>SERIAL NUMBER</th>
      <th>TIPE</th>
      <th>DESKRIPSI</th>
      <th>LOKASI</th>
      <th>PENANGGUNG JAWAB</th>
      <th>KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(isset($_POST['export'])) {
        $kategori     = isset($_POST['tipe']) ? $_POST['tipe'] : "";
        $status     = isset($_POST['status']) ? $_POST['status'] : "";

        
        include('koneksi-data-peg-lr-com.php');

        if ($status == 'All') {
          if ($kategori == 'All') {

            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Elektronik') {

            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Non Elektronik') {
            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Indosat') {
            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          }
        } else if ($status == 'Ada') {
          if ($kategori == 'All') {

            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Elektronik') {

            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status' AND tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Non Elektronik') {
            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status' AND tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Indosat') {
            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status' AND tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          }
        } else if ($status == 'Dipinjam') {
          if ($kategori == 'All') {

            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Elektronik') {

            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status' AND tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Non Elektronik') {
            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status' AND tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          } else if ($kategori == 'Indosat') {
            $no = 1;
            $res = $connect->query("SELECT * FROM tbl_inventory WHERE stat='$status' AND tipe='$kategori'");
            while($row = $res->fetch_assoc()){ ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['no_inventory']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['serial_number']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pj']; ?></td>
                <td><?php echo $row['ket']; ?> </td>
              </tr>
      <?php 
            $no++;
            }
          }
        } 
      }
    ?>
  </tbody>
</table>