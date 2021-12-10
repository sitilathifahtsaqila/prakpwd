<?php
    // memasukkan koneksi database melalui koneksi.php
    include_once("koneksi.php");

    // Function untuk mengambil semua data dari database
    $result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>

<html>
<head>
<title>Halaman Utama</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="card">
 	<div id="card-content">
  		<div id="card-title">
            <h1>Data Mahasiswa</h1>
            <div class="underline-title"></div>
  	    </div>
    </div>
<div class="content" >

<a href="tambah.php">Tambah Data Baru</a><br/><br/>

<table width='80%' border=1>

<tr>
<th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th>
<th>tgl lahir</th> <th>Update</th>
</tr>
<?php
    //memasukkan data yang tadi sudah di ambil pada variable result ke dalam mysqli_fetch_array
    //dan mengubahnya menjadi array dengan perulangan while untuk di tampilkan pada website
    while($user_data = mysqli_fetch_array($result)) { 
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>"; 
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['jkel']."</td>"; 
        echo "<td>".$user_data['alamat']."</td>"; 
        echo "<td>".$user_data['tgllhr']."</td>";

        //link yang akan di proses untuk menuju ke edit.php dan delete.php dengan parameter nim
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a 
        href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
    }
?>
</table>

<br><br>
<a href="lap_mhs.php">Cetak Data Mahasiswa</a><br/><br/>

</div>
</div>
</body>
</html>
