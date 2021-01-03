<?php
    session_start();
    include_once('../model/userService.php');
    include_once('../model/freelancerService.php');
    include_once('../model/buyerService.php');


    $data=$_REQUEST['mydata'];
    $reg=json_decode($data);
    
    if($reg->reg)
    {
        if($reg->name!=='' && $reg->dob!=='' && $reg->email!=='' && $reg->phone!=='' && $reg->password!=='')
        {
            $user=['email'=>$reg->email,'password'=>$reg->password,'type'=>$reg->type,'status'=>'1'];
            $status=insertUser($user);
            if($status)
            {
                $user1=['email'=>$reg->email,'password'=>$reg->password];
                $userInfo=userInfo($user1);
                if(count($userInfo)>0 && $userInfo['type']=='Freelancer')
                {
                    $photo='../asset/img/profile.png';
                    $freelancer=['id'=>$userInfo['id'],'name'=>$reg->name,'dob'=>$reg->dob,'email'=>$reg->email,'phone'=>$reg->phone,'photo'=>$photo];
                    $statusf=insertFreelancer($freelancer);
                    if($statusf)
                    {
                        $msg=json_encode(['msg'=>'success']);
                        echo $msg;
                    }
                    else
                    {
                        $msg=json_encode(['msg'=>'fail']);
                        echo $msg;
                    }
                }
                else if(count($userInfo)>0 && $userInfo['type']=='Buyer')
                {
                    $photo='../asset/img/profile.png';
                    $freelancer=['id'=>$userInfo['id'],'name'=>$reg->name,'dob'=>$reg->dob,'email'=>$reg->email,'phone'=>$reg->phone,'photo'=>$photo];
                    $statusf=insertBuyer($freelancer);
                    if($statusf)
                    {
                        $msg=json_encode(['msg'=>'success']);
                        echo $msg;
                    }
                    else
                    {
                        $msg=json_encode(['msg'=>'fail']);
                        echo $msg;
                    }

                }
            }
            else
            {
                echo json_encode(['msg'=>'fail']);
            }
        }
        else
        {
            echo json_encode(['msg'=>'null']);
        }
    }
    else
    {
        header('location: ../index.php');
    }
?>