<?php 
//nama
    $namadepan ="rayhan";
    $namatengah ="maulana";
    $namabelakang ="lisman";
    $namalengkap = $namadepan . " " . $namatengah . " " . $namabelakang . " " ;    
//noTelpon
    $nomortelpon = "082112810335";    
//usia
    $usia = 18;
//tempat,tanggal lahir
    $tempatlahir ="Jakarta";
    $tanggallahir = 19;
    $bulanlahir ="febuari";
    $tahunlahir =2003;
    $ttl =$tempatlahir . ","  .  $tanggallahir . " " . $bulanlahir . " " . 
            $tahunlahir; 
//Alamat 
    $namajalan ="Jl.Kemiri";
    $namakelurahan ="kelurahan pondok cabe udik";
    $namakecamatan ="Pamulang";
    $namakota ="Tanggerang selatan";
    $alamat =$namajalan . " " . $namakelurahan . " " . $namakecamatan . " " . $namakota;
//status
    $status = false;
 //kabisat   
    $tahun_kabisat = $tahunlahir % 4 ;
//target
    $target = 3.4; 

?>
<html>

<body>
<center>    <h1>BIODATA SAYA</h1>
</body>


<table>
    <tr>
    <td>Nama Lenkap     </td><td>:</td> <td><?php echo $namalengkap ?></td>    
    </tr>
    <td>No tlp </td><td>:</td> <td><?php echo $nomortelpon ?></td>
    <tr>
    <td>Usia </td><td>:</td> <td><?php echo $usia ?></td>
    </tr>
    <td>Tempat/tanggal lahir </td><td>:</td> <td><?php echo $ttl ?></td>
    <tr>
    <td>Alamat</td> <td>:</td> <td><?php echo $alamat ?></td>
    </tr>
    <tr>
    <td>Status </td><td>:</td> <td><?php var_dump($status) ?></td>
    </tr>
    <td>Tahun kabisat </td><td>:</td> <td><?php var_dump($tahun_kabisat == 0) ?></td>
    <tr>
    <td>Target IPK </td><td>:</td> <td><?php echo $target ?></td>
    </tr>
    </center>

</table>