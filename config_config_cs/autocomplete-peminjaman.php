<?php
    $dns 		= "mysql:host=localhost;dbname=db_pegawai";
	$db_user 	= "root";
	$db_pass 	= "";
 
	try {
        $pdo = new PDO($dns, $db_user, $db_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));      
    } catch (PDOException $e) {
        echo "Koneksi ke database gagal: ".$e->getMessage();
        die();
    }
 
    $term = $_GET['term'];
    
    $query = $pdo->prepare("SELECT * from tbl_inventory where nama_barang like '%".$term."%' AND stat='Approved'");
    $query->execute();
    $json = array();
    while($datacust = $query->fetch()) {
        $json[] = array(
            'label' => $datacust['nama_barang'], // text sugesti saat user mengetik di input box
            'value' => $datacust['nama_barang'], // nilai yang akan dimasukkan diinputbox saat user memilih salah satu sugesti
            'nama' => $datacust['nama_barang'],
            'nomor' => $datacust['no_inventory'],
        );
    }
    header("Content-Type: text/json");
    echo json_encode($json);
?>