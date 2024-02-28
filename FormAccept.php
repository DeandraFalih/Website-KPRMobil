<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Confirmation</title>
    <link rel="icon" href="../html/images/icon.ico" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/FormAccept.css" rel="stylesheet" />
    </head>

    <body>
    <?php
    error_reporting(0);
    if(isset($_POST['submit'])) {
    $pembeli = $_POST['pembeli'];
    $jenismbl = $_POST['jenismbl'];
    $wilayah = $_POST['wilayah'];
    $bunga = $_POST['bunga'];
    $lmangsuran = $_POST['lmangsuran'];
    $dp = $_POST['dp'];
    
    //percabangan
		if ($jenismbl == 'Civic') 
		{
		$harga = 200000000;
		$mobil ="Civic";
		}

		elseif ($jenismbl == 'Jeep') 
		{
		$harga = 250000000;
		$mobil ="Jeep";
		}

		elseif ($jenismbl == 'Terios')
		{
		$harga = 200000000;
		$mobil ="Terios";
		}

		elseif ($jenismbl == 'Pajero')
		{
        $harga = 300000000;
		$mobil ="Pajero";
		}

		elseif ($jenismbl == 'Luxury')
		{
        $harga = 150000000;
		$mobil ="Luxury";
		}

		else 
		{
		$harga = 0;
		$mobil = "Tidak ada pilihan";
		}
		
		$hrgkredit = $harga + ($harga * ($bunga / 12 / 100) * $lmangsuran);
		$angsuran  = $hrgkredit / $lmangsuran;
	//=============================================================
	if ($pembeli=='' || $jenismbl=='' || $bunga=='' || $lmangsuran=='')
	{
	?><script language="javascript">alert('Data gagal proses? data ada yang kosong')</script><?php
	?><script language="javascript">document.location.href="form.php"</script><?php
	}
    $tanggal=date('dmY');	
    ?>	

    <table class="table table-hover">

        <tr align="center">
            <td colspan="2">
                <img class="mb-4" src="../html/Images/icon.ico" alt="" width="57" height="57" />
                <h1 class="h3 mb-3 fw-normal">Cek Data</h1>
            </td>
        </tr>
        <tr>
            <td class="name"> Nama Pembeli </td>
            <td class="value"><?php echo $pembeli ?></td>
        </tr>
        <tr>
            <td class="name">Zona Wilayah </td>
            <td class="value"><?php echo $wilayah ?></td>
        </tr>
        <tr>
            <td class="name">Jenis Mobil </td>
            <td class="value"><?php echo $jenismbl ?></td>
        </tr>
        <tr >
            <td class="name">Lama Angsuran </td>
            <td class="value"><?php echo $lmangsuran ?></td>
        </tr>
        <tr>
            <td class="name">Bunga (%) </td>
            <td class="value"><?php echo $bunga ?></td>
        </tr>
        <tr>
            <td class="name">Harga mobil </td>
            <td class="value"><?php echo $harga ?></td>
        </tr>
        <tr>
            <td class="name">Harga Kredit </td>
            <td class="value"><?php echo $hrgkredit ?></td>
        </tr>
        <tr>
            <td class="name">Angsuran </td>
            <td class="value"><?php echo $angsuran ?></td>
        </tr>
        
    </table>
<?php
}
?>
 <div class="content">
    <table>
			<tr>
				<th>Angsuran Bulan Ke-</th>
				<th>Angsuran (Rp.)</th>
			</tr>
 <!--perulangan-->
		<?php  for ($bln = 1; $bln <= $lmangsuran; $bln++) { ?>
			<tr>
				<td> <?php echo $bln; ?></td>
				<td><?php echo $angsuran; ?></td>
			</tr>
        <?php } ?>
    </table>
    </div>
    <table>
    <tr>
            <td id="button" colspan="2" align="center">

                <br/>
                <a class="w-100 btn btn-lg btn-primary" href="../html/Homepages.html">Submit</a>
                <br/>
                <br/>
                <a class="mt-5 mb-3 text-muted">&copy;2017-2021</a>
            </td>
        </tr>
    </table>
    </body>
</html>