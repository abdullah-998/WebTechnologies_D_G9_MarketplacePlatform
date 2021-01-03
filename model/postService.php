<?php
    include_once('db.php');

    function postInfo($id)
    {
        $conn=getConnection();

        $query="select * from posts where pid='{$id}'";
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

    function postAll()
    {
        $conn=getConnection();

        $query="select * from posts";
        $result=mysqli_query($conn,$query);
        $posts=[];

        while($data=mysqli_fetch_assoc($result))
        {
            array_push($posts,$data);
        }

        return $posts;
    }

    function insertPost($post)
    {
        $conn=getConnection();
        $query="insert into posts value('','{$post['uid']}','{$post['pname']}','{$post['descr']}','{$post['price']}')";

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