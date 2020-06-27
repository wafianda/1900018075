<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<?php
$name = $hobi = $agama = $komentar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $hobi = test_input($_POST["hobi"]);
  $agama = test_input($_POST["agama"]);
  $komentar = test_input($_POST["komentar"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
nama     :
<input type="text" name="nama">
<br />

hobi     : 
<input type="checkbox" name="hobi" value="sepak bola"> 
sepak bola
<input type="checkbox" name="hobi" value="badminton"> 
badminton
<input type="checkbox" name="hobi" value="bola voli">
bola voli
<br />

Agama    :
 <select name="agama">
     <option value="Islam">Islam</option>
     <option value="Kristen">Kristen</option>
     <option value="Khatolik">Khatolik</option>
     <option value="buddha">buddha</option>
     <option value="hindu">hindu</option>
     <option value="konghucu">konghucu</option>
 </select>
<br />

komentar :
<textarea name="komentar" rows="5" cols="35">
</textarea>
<br />

<input type="submit" name="submit" value="Submit">  
</form>
<?php

echo "<h2>VALIDASI DATA:</h2>";
echo $nama;
echo "<br>";
echo $hobi;
echo "<br>";
echo $agama;
echo "<br>";
echo $komentar;
echo "<br>";
?>
</body>
</html>