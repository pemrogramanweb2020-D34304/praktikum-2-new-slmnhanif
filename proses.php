<!DOCTYPE html>
<html>
<head>
    <title>Mencari Data</title>
</head>
<body>
    <form action="" method="get">
    Silahkan Masukan Nama : <input type="text" name="namaorangg">
    <input type="submit" name="tombol" value="kirim">
    </form>
<br><br>
<?php
if(isset($_GET['namaorangg'])){

$namaorangg = $_GET['namaorangg'];

echo "Nama Yang dicari $namaorangg <br>";

$user = array(
    array(
        "nama" => "Arsene Lupin",
        "nik" => "1234",
        "jenis_kelamin" => "male",
        "tgl_lahir" => "1902-03-23"
    ),
    array(
         "nama" => "Sherlock Holmes",
        "nik" => "4321",
        "jenis_kelamin" => "male",
        "tgl_lahir" => "1812-01-11"
    ),
    array(
         "nama" => "Irene Adler",
        "nik" => "7890",
        "jenis_kelamin" => "female",
        "tgl_lahir" => "1232-04-13"
    )
);

$y=0;
$n=0;

foreach($user as $u){
if(strtoupper($u["nama"]) == strtoupper($namaorangg)){
$y=1;
$n=$u;
} 
}

if($y){
echo "[".$namaorangg."] <b>Ketemu</b> <br>";
echo "<ul>";
echo "<li>NIK: ".$n["nik"]."</li>";
echo "<li>KELAMIN: ".$n["jenis_kelamin"]."</li>";
echo "<li>TGL LAHIR: ".$n["tgl_lahir"]."</li>";
echo "</ul>";
} else{
echo "[".$namaorangg."] <b>Tidak Ketemu</b> <br>";
}

}

?>
<br>


</body>
</html>
