<?php

        require_once("ayar.php ");

        if(isset($_GET['Del']))
        {
            $isim = $_GET['Del'];
            $query = " DELETE from treeodev where isim = '".$isim."'";
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