<!DOCTYPE html>
<html>
<head>
	<title>Tugas Percabangan</title>


</head>
<body>
	<h1>Tagihan Pemakaian Air</h1><br>
    <form method="post" action="">


       		 <div class="mb-3">
            		<label for="exampleInputEmail1" class="form-label">Masukan Total Penggunaan Air yang Terpakai</label>
            		<input type="text" class="form-control" name="guna" style="width: 50px;" autocomplete="off">
       		 </div>
       				 <button type="submit" class="btn btn-primary mb-4" name="proses" value="HITUNG">Hitung</button><br>
<?php

if(isset($_POST["proses"])){
	$guna = $_POST["guna"];
	if($guna<=30){
		$biaya = $guna * 150;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}elseif($guna<=60){
		$biaya = ($guna-30) * 170 + 4500;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}elseif($guna<=85){
		$biaya = ($guna-60) * 210 + 4500 + 5100;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}else{
		$biaya = ($guna-90) * 250 + 4500 + 5100+ 6300; 
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}		
}


?>
</body>
</html>