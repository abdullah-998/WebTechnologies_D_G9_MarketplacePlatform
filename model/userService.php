<?php
    include_once('db.php');

    function userInfo($user)
    {
        $conn=getConnection();

        $query="select * from users where email='{$user['email']}' and password='{$user['password']}'";

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

    function userInfoByID($id)
    {
        $conn=getConnection();

        $query="select * from users where id='{$id}'";
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

    function insertUser($user)
    {
        $conn=getConnection();
        $query="insert into users value('','{$user['email']}','{$user['password']}','{$user['type']}','{$user['status']}')";

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

    function deleteUser($id)
    {
        $conn=getConnection();
        $query="update users set status=0 where id='{$id}'";

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
    function changeUserPassword($pass,$id)
    {
        $conn=getConnection();
        $query="update users set password='{$pass}' where id='{$id}'";

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
    function changeUserAddress($ad,$id)
    {
        $conn=getConnection();
        if($_SESSION['type']=='Freelancer')
            $query="update freelancers set address='{$ad}' where id='{$id}'";
        else if($_SESSION['type']=='Buyer')
            $query="update buyers set address='{$ad}' where id='{$id}'";

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
    function changeUserAbout($about,$id)
    {
        $conn=getConnection();
        if($_SESSION['type']=='Freelancer')
            $query="update freelancers set about='{$about}' where id='{$id}'";
        else if($_SESSION['type']=='Buyer')
            $query="update buyers set about='{$about}' where id='{$id}'";

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