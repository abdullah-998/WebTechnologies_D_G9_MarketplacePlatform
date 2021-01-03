function deleteAccount()
{
    let password=document.querySelector('#password').value;
    let msg=document.querySelector('#msg');

    if(password!='')
    {
        var json = {
            password:password
        }
        var data = JSON.stringify(json);
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/DeactivateCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='fail')
                {
                    msg.innerHTML="Deletion failed";
                }
                else if(obj.msg=='pass')
                {
                    msg.innerHTML="Deletion successful.You will be redirected into index  within 3 seconds";
                    setTimeout(function()
                    { 
                        location.assign('http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/controller/logoutCheck.php');
                    }, 3000);
                }
            }
        }
    }

}