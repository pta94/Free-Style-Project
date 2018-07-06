<?php
    class DataProvider {
        public static function ExecuteQuery($sql)
        {
            $connection = mysqli_connect('localhost','root','root','onlineshoes') or
                die ("couldn't connect to localhost");
            mysqli_query($connection, "set names 'utf8'");
            $result = mysqli_query($connection, $sql);
            mysqli_close($connection);
            return $result;
        }

        public static function ChangeURL($url){
            echo "<script type='text/javascript'> location='$url'; </script>";
        }
    }
?>