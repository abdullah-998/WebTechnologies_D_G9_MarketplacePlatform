function aboutChange(data)
{
    let about=document.querySelector('#about_me').value;
    let msg=document.querySelector('#messageabt');

    if(about!='' )
    {
        var json = {
            about:about
        }
        var data = JSON.stringify(json);
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/abtChngCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='fail')
                {
                    msg.innerHTML="About Changing failed";
                    //msg.style='color red';
                }
                else if(obj.msg=='pass')
                {
                    msg.innerHTML="About changed successfully.You will be redirected into index  within 3 seconds and re-log in";
                    setTimeout(function()
                    { 
                        location.assign('http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/controller/logoutCheck.php');
                    }, 3000);;
                }
                else if(obj.msg=='null')
                {
                    msg.innerHTML="Null Submission";
                }
            }
        }
    }
    else
    {
        msg.innerHTML="Chose a strong password";
    }

}