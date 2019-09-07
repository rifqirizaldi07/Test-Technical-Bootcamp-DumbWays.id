
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Soal Nomor 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
 
  <body>

    <div class="container">
      <div class="row">
        <h2 style="margin-left: :30px; margin-top:80px; text-align: center;">Jawaban Soal 7</h2>
        <?php
        $koneksi = mysqli_connect('localhost','root','');
        $database = "db_gudang";
        $pilihdatabase = mysqli_select_db($koneksi,$database);
        ?> 
        <div class="panel panel-default">
        <div class="panel-body">
        <div class="table-responsive">
        <?php
        $sql = "SELECT categories.id AS idcategory, categories.name AS namakategori, GROUP_CONCAT(products.name) AS namaproduk FROM products INNER JOIN categories ON categories.id = products.categories_id GROUP BY categories.name ORDER BY categories.id";
        $query = mysqli_query($koneksi,$sql);
        ?>
        <table align="center" class="table table-bordered table-hover">
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
        </div>
</div>
</div>

<!-- Mohon maaf untuk soal nomor 7 hanya ini yang saya tau, dan saya akan terus belajar -->