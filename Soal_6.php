<?php
$koneksi = mysqli_connect('localhost','root','');
$database = "db_gudang";
$pilihdatabase = mysqli_select_db($koneksi,$database);
?>
<h2 style="margin-left:30px; margin-top:80px;">Jawaban Soal 6</h2>


        <?php
        // query memanggil data di tabel category dan product soal 6(A)
        //$result = mysqli_query($conn, "SELECT * FROM category");
        //$result2 = mysqli_query($conn,"SELECT * FROM product");


        // kodingan ini saya mempelajarinya di google untuk soal nomor 6B 
        $sql = "SELECT categories.id AS idcategory, categories.name AS namakategori, GROUP_CONCAT(products.name) AS namaproduk FROM products INNER JOIN categories ON categories.id = products.categories_id GROUP BY categories.name ORDER BY categories.id";
        $query = mysqli_query($koneksi,$sql);
        ?>

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <th style="text-align:center;">Id</th>
                <th style="text-align:center;">Kategori</th>
                <th style="text-align:center;">Produk</th>
            </thead>
          <tbody>
            <?php while ($list = mysqli_fetch_assoc($query)) : ?>
            <tr>
            <form action="" method="POST">
                <td align="center"><?php echo $list['idcategory']; ?></td>
                <td align="center"><?php echo $list['namakategori']; ?></td>
                <td align="center"><?php echo $list['namaproduk']; ?></td>
            </form>
            </tr>
            <?php endwhile; ?>
        </tbody>
        </table>