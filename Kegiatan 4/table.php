<html>
<head>

    <title>Halaman Utama</title>
    <?php echo '<b><h2>Data Yang Di Isi</b><br><br>' ?>

</head>
<body>

    <table width='80%' border=1>
        <?php
        $nama =$_POST['nama'];
        $email =$_POST['email'];
        $website =$_POST['website'];
        $comment =$_POST['comment'];
        $gender =$_POST['gender'];

        //foreach((array) $nama as $key => $val){

        ?>

        <tr>
            <td><?php echo 'Nama' ?></td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><?php echo 'Email' ?></td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td><?php echo 'Website' ?></td>
            <td><?php echo $website; ?></td>
        </tr>
        <tr>
            <td><?php echo 'Comment' ?></td>
            <td><?php echo $comment; ?></td>
        </tr>
        <tr>        
            <td><?php echo 'Gender' ?></td>
            <td><?php echo $gender; ?></td>
        </tr>
        <?php
       // }
        ?>
    </table>
    <?php
    echo "<br><a href='validasi.php'>Back</a>"
    ?>
</body>
</html>