<?php
        $connection = mysqli_connect("Sunucu_adi","kullanici_adi","sifre");
        if (!$connection)
        {
            die("Veritabanı Bağlantısı Hatası!!!".mysqli_connect_error());
        }
        $db_select = mysqli_select_db($connection,"opo_db");
        if(!$db_select)
        {
            die("Veritabanı Tablo Seçim Hatası: ".mysqli_connect_error());
        }    
?>