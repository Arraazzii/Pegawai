<?php  

  include('koneksi-data-peg-lr-com.php');
  include "fungsi_indo_tgl.php";   
  
  $nip         = isset($_POST['nip']) ? $_POST['nip'] : "";
  $bulan       = isset($_POST['bulan']) ? $_POST['bulan'] : "";
  $tahun       = isset($_POST['tahun']) ? $_POST['tahun'] : "";
  $status      = isset($_POST['status']) ? $_POST['status'] : "";

  $query = mysqli_query($connect, "SELECT * FROM tbl_pegawai WHERE nik='$nip'");
    $row = mysqli_fetch_array($query);

    $nik    = $row['nik'];
    $nama   = $row['nama'];


  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Absensi - ". $nik." - ". $nama.".xls");
?>
<style type="text/css">
table,
th,
td {
    border-collapse: collapse;
    padding: 7px;
    margin: 10px;
    color: #000;
    font-size: 16px;
}
</style>
<div style="text-align: center;">
    <br>
    <span style="margin-left: 20px;font-size: 20px;"><b>REPORT ABSENSI PEGAWAI</b></span>
</div>
<div style="text-align: center;">
    <span style="margin-left: 20px;font-size: 20px;"><b>PT. LUMBUNG RIANG COMMUNICATION</b></span>
</div><br /><br /><br />

<table border="0" align="">
  <tr>
    <th width="1%"></th>
    <th width="15%" style="text-align: left; font-size: 20px;"><span>NIP Pegawai</span></th>
    <th style="text-align: left; font-size: 20px;"><span>:</span></th>
    <th width="84%" style="text-align: left; font-size: 20px;"><span></span><?= $nik; ?></th>
  </tr>
  <tr>
    <th width="1%"></th>
    <th width="15%" style="text-align: left; font-size: 20px;"><span>Nama Pegawai</span></th>
    <th style="text-align: left; font-size: 20px;"><span>:</span></th>
    <th width="84%" style="text-align: left; font-size: 20px;"><span></span><?= $nama; ?></th>
  </tr>
  <tr>
    <th width="1%"></th>
    <th width="15%" style="text-align: left; font-size: 20px;"><span>Periode</span></th>
    <th style="text-align: left; font-size: 20px;"><span>:</span></th>
    <th width="84%" style="text-align: left; font-size: 20px;"><span></span><?= getBulan($bulan); ?> <?= $tahun; ?></th>
  </tr>
  <tr>
    <th width="1%"></th>
    <th width="15%" style="text-align: left; font-size: 20px;"><span>Status Absen</span></th>
    <th style="text-align: left; font-size: 20px;"><span>:</span></th>
    <th width="84%" style="text-align: left; font-size: 20px;"><span></span><?= $status; ?></th>
  </tr>
</table>
<br>
<table border="1" class="table1">
    <thead>
        <tr>
            <th>NO</th>
            <th>TANGGAL ABSEN</th>
            <th>CHECK IN</th>
            <th>CHECK OUT</th>
            <th>KETERANGAN CI (WO)</th>
            <th>KETERANGAN CO (WO)</th>
            <th>GEOTAG CI</th>
            <th>GEOTAG CO</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <?php
      if(isset($_POST['export'])) {
        $nip         = isset($_POST['nip']) ? $_POST['nip'] : "";
        $bulan       = isset($_POST['bulan']) ? $_POST['bulan'] : "";
        $tahun       = isset($_POST['tahun']) ? $_POST['tahun'] : "";
        $status      = isset($_POST['status']) ? $_POST['status'] : "";

        if ($status == 'All') {
          $no = 1;
            $res = $connect->query("SELECT * FROM tbl_absen WHERE MONTH(tgl_absen) = '$bulan' AND YEAR(tgl_absen) = '$tahun' AND nip = '$nip' ");
            while($row = $res->fetch_assoc()){ ?>
        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $row['tgl_absen']; ?>
            </td>
            <td>
                <?php echo $row['check_in']; ?>
            </td>
            <td>
                <?php echo $row['check_out']; ?>
            </td>
            <td>
                <?php echo $row['keterangan_ci']; ?>
            </td>
            <td>
                <?php echo $row['keterangan_co']; ?>
            </td>
            <td>
                <a href="https://www.google.com/maps/place/<?= $row['geotag_ci']; ?>" target="_blank"><?= $row['geotag_ci']; ?></a>
            </td>
            <td>
              <a href="https://www.google.com/maps/place/<?= $row['geotag_co']; ?>" target="_blank"><?= $row['geotag_co']; ?></a>
            </td>
            <td>
                <?php echo $row['status']; ?>
            </td>
        </tr>
        <?php 
            $no++;
            }
          
        } else if ($status == 'Hadir') {
          $no = 1;
            $res = $connect->query("SELECT * FROM tbl_absen WHERE MONTH(tgl_absen) = '$bulan' AND YEAR(tgl_absen) = '$tahun' AND nip = '$nip' AND status = 'Hadir' ");
            while($row = $res->fetch_assoc()){ ?>
        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $row['tgl_absen']; ?>
            </td>
            <td>
                <?php echo $row['check_in']; ?>
            </td>
            <td>
                <?php echo $row['check_out']; ?>
            </td>
            <td>
                <?php echo $row['keterangan_ci']; ?>
            </td>
            <td>
                <?php echo $row['keterangan_co']; ?>
            </td>
            <td>
                <a href="https://www.google.com/maps/place/<?= $row['geotag_ci']; ?>" target="_blank"><?= $row['geotag_ci']; ?></a>
            </td>
            <td>
              <a href="https://www.google.com/maps/place/<?= $row['geotag_co']; ?>" target="_blank"><?= $row['geotag_co']; ?></a>
            </td>
            <td>
                <?php echo $row['status']; ?>
            </td>
        </tr>
        <?php 
            $no++;
            }
        } else if ($status == 'Terlambat') {
          $no = 1;
            $res = $connect->query("SELECT * FROM tbl_absen WHERE MONTH(tgl_absen) = '$bulan' AND YEAR(tgl_absen) = '$tahun' AND nip = '$nip' AND status = 'Terlambat' ");
            while($row = $res->fetch_assoc()){ ?>
        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $row['tgl_absen']; ?>
            </td>
            <td>
                <?php echo $row['check_in']; ?>
            </td>
            <td>
                <?php echo $row['check_out']; ?>
            </td>
            <td>
                <?php echo $row['keterangan_ci']; ?>
            </td>
            <td>
                <?php echo $row['keterangan_co']; ?>
            </td>
            <td>
                <a href="https://www.google.com/maps/place/<?= $row['geotag_ci']; ?>" target="_blank"><?= $row['geotag_ci']; ?></a>
            </td>
            <td>
              <a href="https://www.google.com/maps/place/<?= $row['geotag_co']; ?>" target="_blank"><?= $row['geotag_co']; ?></a>
            </td>
            <td>
                <?php echo $row['status']; ?>
            </td>
        </tr>
        <?php 
            $no++;
            }
        } 
      }
    ?>
    </tbody>
</table>