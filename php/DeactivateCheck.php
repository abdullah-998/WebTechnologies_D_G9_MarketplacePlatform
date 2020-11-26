<?php
    session_start();
    if($_SESSION['flag'])
    {
        if(isset($_REQUEST['submit']))
        {
            if(!$_REQUES['pass']="")
            {
                if($_SESSION['pass']==$_REQUEST['pass'])
                {
                    session_start();
                    $file=fopen('../asset/info/deactive.txt','a');
                    $data=$_COOKIE['uid'].'\r\n';
                    fwrite($file,$data);
                    fclose($file);
                    
                    session_destroy();
                    setcookie('uid',$user1[5],time()-3600,'/');
                    header('location: ../view/log.php?msg=de');
                }
                else
                {
                    header('location: ../view/Deactivate.php?msg=pass');
                }
            }
            else
            {
                header('location: ../view/Deactivate.php?msg=null');
            }
            
        }
        else
        {
            header('location: ../view/Deactivate.php');
        }
    }
    else
    {
        header('location: ../view/log.php');
    }
?>