<?php
    include_once('db.php');

    function requestInfo($id)
    {
        $conn=getConnection();

        $query="select * from requests where rid='{$id}'";
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

    function requestAll()
    {
        $conn=getConnection();

        $query="select * from requests";
        $result=mysqli_query($conn,$query);
        $reqs=[];

        while($data=mysqli_fetch_assoc($result))
        {
            array_push($reqs,$data);
        }

        return $reqs;
    }

    function requestByBuyerID($id)
    {
        $conn=getConnection();

        $query="select * from requests where bid='{$id}'";
        $result=mysqli_query($conn,$query);
        $reqs=[];

        while($data=mysqli_fetch_assoc($result))
        {
            array_push($reqs,$data);
        }

        return $reqs;
    }

    function requestByFreelancerID($id)
    {
        $conn=getConnection();

        $query="select * from requests where fid='{$id}'";
        $result=mysqli_query($conn,$query);
        $reqs=[];

        while($data=mysqli_fetch_assoc($result))
        {
            array_push($reqs,$data);
        }

        return $reqs;
    }


    function updateStatus($satus,$rid)
    {
        $conn=getConnection();
        $query="update requests set status='{$satus}' where rid='{$rid}'";

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

    function insertRequest($reqs)
    {
        $conn=getConnection();
        $query="insert into requests value('','{$reqs['fid']}','{$reqs['bid']}','{$reqs['pid']}','','{$reqs['price']}')";

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

    // function deleteUser($id)
    // {
    //     $conn=getConnection();
    //     $query="update users set status=0 where id='{$id}'";

    //     $satus= mysqli_query($conn,$query);
    //     if($satus)
    //     {
    //         return true;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }
    // function changeUserPassword($pass,$id)
    // {
    //     $conn=getConnection();
    //     $query="update users set password='{$pass}' where id='{$id}'";

    //     $satus= mysqli_query($conn,$query);
    //     if($satus)
    //     {
    //         return true;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }
?>