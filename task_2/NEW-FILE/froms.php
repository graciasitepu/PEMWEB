<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUK</title>

    <style>
        .box {
            width: 25vw;
            height: 50vh;
            background-color:darkgray;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        
        a:hover {
            color:red;
        }

        #header {
            color:darkslategray;
            padding: 10px;
        }

    </style>
</head>
<body>
    <header id="header">
        <h1>Form Produk</h1>
    </header>
    <form action="proses.php" method="get">
    <div class="box">
        <div>
            <label for="nama">Nama Produk</label><br>
            <input type="text" name="nama" placeholder="Input Nama Produk"><br>
        </div>
        <div>
            <label for="jumlah">Jumlah Produk</label><br>
            <input type="text" name="jumlah" placeholder="Input Jumlah Produk"><br>
        </div>
        <div>
            <label for="harga">Harga Produk</label><br>
            <input type="text" name="harga" placeholder="Input Harga"><br>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </div>
    </form>

</body>
</html>