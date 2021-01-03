function passChange(data)
{
    let password=document.querySelector('#password').value;
    let newpassword=document.querySelector('#new_password').value;
    let msg=document.querySelector('#messageChngPass');

    if(password!='' && password.length>=8 && newpassword!='' && newpassword.length>=8 && data=="pass" )
    {
        var json = {
            password:password,
            newpassword:newpassword
        }
        var data = JSON.stringify(json);
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/passChngCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='fail')
                {
                    msg.innerHTML="Password Changing failed";
                    //msg.style='color red';
                }
                else if(obj.msg=='pass')
                {
                    msg.innerHTML="Password changed successfully.You will be redirected into index  within 3 seconds and re-log in";
                    setTimeout(function()
                    { 
                        location.assign('http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/controller/logoutCheck.php');
                    }, 3000);
                }
            }
        }
    }
    else
    {
        msg.innerHTML="Chose a strong password";
    }

}