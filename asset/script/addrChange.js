function addChange(data)
{
    let address=document.querySelector('#address').value;
    let msg=document.querySelector('#messageAdd');

    if(address!='' )
    {
        var json = {
            address:address
        }
        var data = JSON.stringify(json);
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/addrChngCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='fail')
                {
                    msg.innerHTML="Address Changing failed";
                    //msg.style='color red';
                }
                else if(obj.msg=='pass')
                {
                    msg.innerHTML="Address changed successfully.You will be redirected into index  within 3 seconds and re-log in";
                    setTimeout(function()
                    { 
                        location.assign('http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/controller/logoutCheck.php');
                    }, 3000);;
                }
            }
        }
    }
    else
    {
        msg.innerHTML="Chose a strong password";
    }

}