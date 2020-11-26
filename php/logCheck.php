<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['pass'];

        $flag=0;

        if(!$email=="" and !$pass=="")
        {
            $file=fopen('../asset/info/user.txt','r');
            while($data=fgets($file))
            {
                $user1=explode('|',$data);
                if($user1[1]==$email && $user1[2]==$pass)
                {
                    $_SESSION['name']=$user1[0];
                    $_SESSION['email']=$user1[1];
                    $_SESSION['pass']=$user1[2];
                    $_SESSION['type']=$user1[3];
                    $_SESSION['flag']=true;

                    setcookie('uid',$user1[5],time()+3600,'/');

                    

                    if($user1[4]==0)
                    {
                        header('location: ../view/log.php?msg=deactive');
                        $flag=$flag+1;
                        break;
                    }
                    else
                    {
                        header('location: ../view/home.php?msg=ok');
                        $flag=$flag+1;
                        break;
                    }
                }
            }
            if($flag==0)
            {
                header('location: ../view/log.php?msg=wrong');
            }
        }
        else
        {
            header('location: ../view/log.php?msg=null');
        }
    }
    else
    {
        header('location: ../view/log.php');
    }
?>