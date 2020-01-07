
<?php
$mysqli = new mysqli('localhost', 'root', '', 'berkayodev');

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Success... '."<br>" . $mysqli->host_info . "\n";

$sql = "CREATE TABLE treeodev (
    isim VARCHAR(45) PRIMARY KEY,
    latitude FLOAT NOT NULL,
    longitude FLOAT NOT NULL,
    height FLOAT NOT NULL,
    typee VARCHAR(45) NOT NULL
    )";
if (mysqli_query($mysqli, $sql)) {
    echo "Table treeodev created successfully","<br>";
} else {
    echo "Error creating table: ","<br>" . mysqli_error($mysqli);

$isim = $_POST['isim'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$height = $_POST['height'];
$typee = $_POST['typee'];


{
$query = " INSERT INTO treeodev (isim, latitude,longitude,height,typee) values ('$isim','$latitude','$longitude','$height','$typee')";
$sonuç=mysqli_query($mysqli, $query);
if ($sonuç==0)
    echo "Eklenemedi, kontrol ediniz";
else
    echo "Başarıyla eklendi","<br>";

    echo "Isım:",$_POST['isim'],"<br>","Latitude:", $_POST['latitude'],"<br>","Longitude:", $_POST['longitude'],"<br>","Height:", $_POST['height'],"<br>","Type:" ,$_POST['typee'];
}
}
if($sonuç)

    {
    header("location:indexx.php");
    }
else
    {
    echo ' Please Check Your Query ';
    }



$mysqli->close();
?>
