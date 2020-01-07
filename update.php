
<?php
    require_once("ayar.php");

    if(isset($_GET['isim']))
    {
        $isim = $_GET['isim'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $height = $_POST['height'];
        $typee = $_POST['typee'];
        $query = " UPDATE treeodev set isim ='".$isim."',latitude='".$latitude."', longitude='".$longitude."', height='".$height."', typee='".$typee."' WHERE isim ='".$isim."'";
        $result = mysqli_query($mysqli,$query);

        if($result)
        {
            header("location:indexx.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:indexx.php");
    }


?>