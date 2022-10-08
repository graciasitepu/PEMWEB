<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi Produk</title>

    <style>
        .box {
            background-color:darkgray;
            border: 1px solid black;
            width: 40vw;
            height: 50vh;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        
        a:hover {
            color:darkgreen;
        }

        #header {
            color:darkslategray;
            padding: 10px;
        }

        table {
            font-style: normal;
            color:black;
        }

    </style>
</head>
<body>
    <?php
    if (isset ($_GET['submit'])) {
        $nama = $_GET['nama'];
        $jumlah = $_GET['jumlah'];
        $harga = $_GET['harga'];
    }
    ?>
    <header id="header">
        <h1>Detail Informasi Produk</h1>
    </header>
    <div class="box">
    <table border="1">
        <tr>
            <td width="100px">Nama Produk</td>
            <td width="100px">Jumlah Produk</td>
            <td width="100px">Harga Produk</td>
        </tr>
        <tr>
            <td><?php echo $nama;?></td>
            <td><?php echo $jumlah;?></td>
            <td><?php echo $harga;?></td>
        </tr>
    </table>
    </div>

</body>
</html>

<!-- <?php
    echo $_GET['nama'];
    echo "<br />";
    echo $_GET['jumlah'];
    echo "<br />";
    echo $_GET['harga'];
    echo "<br />";
?> -->