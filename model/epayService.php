<?php
    include_once('db.php');

    function epayInfo($id)
    {
        $conn=getConnection();

        $query="select * from epays where id='{$id}'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);

        if(count($row)>0)
        {
            return $row;
        }
        else
        {
            return -1;
        }
    }

    function insertEpay($user)
    {
        $conn=getConnection();
        $query="insert into epays value('{$user['id']}','{$user['balance']}')";

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