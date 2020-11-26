<?php
    session_start();
    if(isset($_REQUEST['reg']))
    {
        $name=$_REQUEST['sname'];
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['pass'];
        $cpass=$_REQUEST['cpass'];
        $cat=$_REQUEST['ac_type'];

        $uid=10000;
        $count=0;
        $ut;
        if(!$name=="" and !$email=="" and !$pass=="" and !$cpass=="" and !$cat=="" and isset($_REQUEST['checkreg']))
        {
            if(strlen($name)>=2)
            {
                if($pass==$cpass)
                {
                    if(strlen($pass)>=8)
                    {
                        $file=fopen('../asset/info/user.txt','r');
                        while($data=fgets($file))
                        {
                            $user1=explode('|',$data);
                            if($user1[1]==$email)
                            {
                                $count=$count+1;
                            }
                        }
                        fclose($file);
                        if($count==0)
                        {
                            $file=fopen('../asset/info/user.txt','r');
                            while($data=fgets($file))
                            {
                                $user1=explode('|',$data);
                                $uid=$user1[5];
                            }
                            $uid=$uid+1;
                            fclose($file);

                            $type=$cat[0];
                            if($type=="buyer")
                            {
                                $ut=0;  
                            }
                            else if($type=="freelancer")
                            {
                                $ut=1;
                            }
                            else
                            {
                                $ut=2;
                            }  
    
                            $file=fopen('../asset/info/user.txt','a');
                            $data=$name."|".$email."|".$pass."|".$ut."|"."1|".$uid." \r\n";
                            fwrite($file,$data);
                            fclose($file);
    
     
                            header('location: ../view/reg.php?msg=create');
                        }
                        else
                        {
                            header('location: ../view/reg.php?msg=mail');
                        }
                       
                    }
                    else
                    {
                        header('location: ../view/reg.php?msg=pass_short');
                    }
                }
                else
                {
                    header('location: ../view/reg.php?msg=pass_match');
                }
            }
            else
            {
                header('location: reg.php?msg=invalid_name');
            }
        }
        else
        {
            header('location: ../view/reg.php?msg=null');  
        }
    }
    else
    {
        header('location: ../index.php');
    }
?>