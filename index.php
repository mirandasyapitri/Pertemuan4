<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dbPenjualanan</title>
</head>
<body>
    <table border="1">
        <caption>data stok barang</caption>
        <form action="" method="get">
                <select name="filter">
                    <option value="fashion">fashion</option>
                    <option value="food">food</option>
                    <option value="farmasi">farmasi</option>
                </select>
                <input type="submit" value="Filter" />
            </form>
        </caption>
        <tr>
            <th>no</th>
            <th>nama_barang</th>
            <th>harga</th>
            <th>stok_barang</th>
            <th>katagori</th>
        </tr>
        <?php
        $query="SELECT * FROM Barang where katagori='$_GET[filter]';";
        $result=$mysqli->query($query);
        $no=0;
        while($row=$result->fetch_assoc()){
        $no++;
    ?>
    <tr>
        <td><?=$no;?></td>
        <td><?=$row['nama_barang'];?></td>
        <td><?=FormatRupiah($row['harga']);?></td>
        <td><?=$row['stok_barang'];?></td>
        <td><?=$row['katagori'];?></td>

    </tr>
    <?php
        }
        ?>
        </table>
    </body>
    </html>