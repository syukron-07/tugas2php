<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<CENTER><h1 style="background-color: blueviolet; color:antiquewhite" >FORM BELANJA</h1>
<form method="POST" action="tugas2_form-belanja.php">
  <div class="form-group row">
    <label for="nama" class="col-5 col-form-label">NAMA PELANGGAN :</label> 
    <div class="col-5">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk" class="col-5 col-form-label">PRODUK PILIHHAN :</label> 
    <div class="col-5">
      <select id="produk" name="produk" class="custom-select">
        <option value="">--PILIHAN PRODUK--</option>
        <option value="TV">TV</option>
        <option value="KULKAS">KULKAS</option>
        <option value="MESIN CUCI">MESIN CUCI</option>
        <option value="AC">AC</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="jmlhbeli" class="col-5 col-form-label">JUMLAH BELI :</label> 
    <div class="col-5">
      <input id="jmlhbeli" name="jmlhbeli" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-7 col-5">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</CENTER>
<?php
$nama = $_POST['nama'];
$jmlhbeli = $_POST['jmlhbeli'];
$harga;


switch($produk= $_POST['produk']){
case 'TV': $harga='1000000';break;
case 'AC': $harga='2000000';break;
case 'MESIN CUCI': $harga='3000000';break;
case 'KULKAS': $harga='5000000';break;

};

$totalbelanja = $jmlhbeli * $harga ;
$diskon= 15/100 * $totalbelanja;
$PPN = 10/100 * ($totalbelanja - $diskon);
$hargabersih = ($totalbelanja-$diskon)+$PPN;


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BELAJAR PHP</title>
</head>
<body style="background-color:cadetblue;">

<table border="1" align="center" cellpadding="10" width="75%" style="text-align: center;">
        <thead style="background-color: yellow;">
        <tr>
          <th colspan="7" align="center" style="background-color:blueviolet; color:antiquewhite">NOTA PEMBELIAN</th>
        </tr>
        
            <tr>
                <th>NAMA PELANGGAN</th>
                <th>PRODUK</th>
                <th>JUMLAH BELI</th>
                <th>HARGA SATUAN</th>
                <th>TOTAL BELANJA</th>
                <th>POTONGAN/DISKON</th>
                <th>PPN</th>
            </tr>
        <tbody>
            <tr>
                <td> <?= $nama?> </td>
                <td> <?= $produk?> </td>
                <td> <?= $jmlhbeli?> </td>
                <td> <?= $harga?> </td>
                <td> <?= $totalbelanja?> </td>
                <td> <?= $diskon?> </td>
                <td> <?= $PPN?> </td>
               
                
            </tr>
        </tbody>
        <tfoot style="background-color:aqua;">
        <th> HARGA BERSIH</th>
        <th colspan="6"> <?= $hargabersih?> </th>
        </tfoot>
        </thead>



</table>
</body>
</html>