<?php 
$nama = $_POST['nama'] ;
$password = $_POST['password'];
$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];
$_SESSION['iduser'] = 1234;
$data = array(
			      array( 
			       	"nama" =>"anaya" ,
				      "password" =>"1234"),
			    array(  
				      "nama" =>"indah",
				      "password"=>"5678"),
			 array( 
				"nama" =>"kaila",
				"password"=>"9101"),
		);
if ($nama == $data[1]["nama"] && $password == $data[1]['password']||
	$nama == $data[2]["nama"] && $password == $data[2]['password']||
	$nama == $data[0]["nama"] && $password == $data[0]['password']) {
	echo "<center><h1>Data Diri</h1></center>";
}else{
	header("location: Form.html");
}
 ?>
<form action="proses.php" method="post" enctype="multipart/form-data">
  Genre Film : <br><br>
  <input type="checkbox" name="genre[]" value="Action">Action<br>
    <input type="checkbox" name="genre[]" value="Romance">Romance<br>
    <input type="checkbox" name="genre[]" value="Sci-fi">Sci-fi<br>
    <input type="checkbox" name="genre[]" value="DramaMusikal">Drama Musikal<br> 
  	<input type="checkbox" name="genre[]" value="Comedy">Comedy<br>
    <input type="checkbox" name="genre[]" value="Horror">Horror<br><br>
    
    	Wisata Liburan : <br><br>
    	<input type="checkbox" name="wisata[]" value="Sumbawa">Sumbawa<br>
      <input type="checkbox" name="wisata[]" value="DanauKalimutu">Danau Kalimutu<br>
      <input type="checkbox" name="wisata[]" value="Bromo">Bromo<br>
      <input type="checkbox" name="wisata[]" value="RajaAmpat">Raja Ampat<br>
      <input type="checkbox" name="wisata[]" value="Dufan">Dufan<br>
<br>
<input type="submit" name="" value="kirim">
</form>

