<?php
    include('db.php');

    function insertOrder($order)
    {
        $conn=getConnection();
        $query="insert into orders value('','{$order['pid']}','{$order['fid']}','{$order['bid']}','{$order['project_status']}','{$order['payment_status']}')";

        $satus= mysqli_query($conn,$query);
        if($satus)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>