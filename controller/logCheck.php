<?php
    session_start();
    include_once('../model/userService.php');
    include_once('../model/freelancerService.php');
    include_once('../model/buyerService.php');

    if(isset($_REQUEST['login']))
    {
        if($_REQUEST['log_email']!=='' and $_REQUEST['log_password']!=='')
        {
            $email=$_REQUEST['log_email'];
            $pass=$_REQUEST['log_password'];

            $user=['email'=>$email,'password'=>$pass];
            $row=userInfo($user);

            if($row==-1)
            {
                header('location: ../index.php?msg=invalid');
            }
            else
            {
                if($row['status']==1 and $row['type']=='Freelancer')
                {
                    $id=$row['id'];
                    $freelancerinf=freelancerInfo($id);
                    if($freelancerinf==-1)
                    {
                        //not getting info from freelancer table
                        header('location: ../index.php?msg=wrong');
                    }
                    else
                    {
                        $_SESSION['id']=$row['id'];
                        $_SESSION['email']=$freelancerinf['email'];
                        $_SESSION['password']=$row['password'];
                        $_SESSION['type']=$row['type'];
                        $_SESSION['name']=$freelancerinf['name'];
                        $_SESSION['dob']=$freelancerinf['dob'];
                        $_SESSION['phone']=$freelancerinf['phone'];
                        $_SESSION['address']=$freelancerinf['address'];
                        $_SESSION['about']=$freelancerinf['about'];
                        $_SESSION['link']=$freelancerinf['link'];
                        $_SESSION['git']=$freelancerinf['git'];
                        $_SESSION['photo']=$freelancerinf['photo'];
                        $_SESSION['log']=true;


                        setcookie('email',$freelancerinf['email'],time()+3600,'/');
                        setcookie('id',$row['id'],time()+3600,'/');
                        setcookie('password',$freelancerinf['password'],time()+3600,'/');
                        
                        header('location: ../view/home.php');
                
                    }
                }
                else if($row['status']==1 and $row['type']=='Buyer')
                {
                    $id=$row['id'];
                    $freelancerinf=buyerInfo($id);
                    if($freelancerinf==-1)
                    {
                        //not getting info from freelancer table
                        header('location: ../index.php?msg=wrong');
                    }
                    else
                    {
                        $_SESSION['id']=$row['id'];
                        $_SESSION['email']=$freelancerinf['email'];
                        $_SESSION['password']=$row['password'];
                        $_SESSION['type']=$row['type'];
                        $_SESSION['name']=$freelancerinf['name'];
                        $_SESSION['dob']=$freelancerinf['dob'];
                        $_SESSION['phone']=$freelancerinf['phone'];
                        $_SESSION['address']=$freelancerinf['address'];
                        $_SESSION['about']=$freelancerinf['about'];
                        $_SESSION['link']=$freelancerinf['link'];
                        $_SESSION['git']=$freelancerinf['git'];
                        $_SESSION['photo']=$freelancerinf['photo'];
                        $_SESSION['log']=true;


                        setcookie('email',$freelancerinf['email'],time()+3600,'/');
                        setcookie('id',$row['id'],time()+3600,'/');
                        setcookie('password',$freelancerinf['password'],time()+3600,'/');

                        
                        header('location: ../view/home.php');
                
                    }

                }//sajjad bhai start here 23-53
                else if($row['status']==0)
                {
                    header('location: ../index.php?msg=deactive');
                }
                
            }
        }
        else
        {
            header('location: ../index.php?msg=null');
        }

    }
    else
    {
        header('location: ../index.php');
    }
?>