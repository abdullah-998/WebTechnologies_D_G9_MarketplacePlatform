<?php
    require_once('db.php');
    
    //function to registration Buyer
    function insertBuyer($user)
    {
        $conn=getConnection();
        $query="insert into buyers value('{$user['id']}','{$user['name']}','{$user['dob']}','{$user['email']}','{$user['phone']}','','','','','{$user['photo']}')";        
        $status=mysqli_query($conn,$query);

        if($status)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //getting information from freelancer
    function buyerInfo($id)
    {
        $conn=getConnection();
        $query = "select * from buyers where id='{$id}'";
        $result= mysqli_query($conn,$query);

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
?>