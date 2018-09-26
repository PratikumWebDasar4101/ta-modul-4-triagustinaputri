<?php 
session_start();
$nama = $_POST['nama'] ;
$password = $_POST['password'];

$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];
$_SESSION['iduser'] = 1234;

if(isset($_GET['ancur'])){
	session_destroy();
	header("Location: loginno2.php");
}

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
	echo "<center><h1> Toko Belanja Online</h1></center>";
}else{
	header("location: loginno2.php");
}
 ?>
	<form action="proses2.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
  		<td>Daftar Barang Belanjaan :</td>
  		<td><input type="checkbox" name="belanjaan[]" value="AC">AC<br></td>
  	</tr>
  	<tr>
  		<td></td>
  		<td colspan="2"><input type="checkbox" name="belanjaan[]" value="MesinCuci">Mesin Cuci<br></td>
    </tr>
    <tr>
  		<td></td>
  		<td><input type="checkbox" name="belanjaan[]" value="Televisi">Televisi</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="belanjaan[]" value="Kulkas">Kulkas</td>
    </tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr>
    	<td>Jenis Pengiriman : </td>
    	<td><input type="radio" name="pengiriman" value="JNE">JNE<br></td>
    <tr>
    	<td></td>
    	<td><input type="radio" name="pengiriman" value="TIKI"> TIKI</td>
    </tr>
    <tr>	
  		<td></td>
  		<td><input type="radio" name="pengiriman" value="Gojek"> Gojek</td>
  	</tr>
  	<tr>
    	<td>Alamat	: </td>
    	<td><input type="text" name="alamat"></td>
    </tr>
</table>
<br>
<input type="submit" style="width: 200px" name="" value="Kirim">
</form>
<?php 

 ?>