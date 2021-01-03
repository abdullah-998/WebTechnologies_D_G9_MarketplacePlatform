function request()
{
    let msg=document.querySelector('#messagex');

    var json = {
        req:true
    }

    var data = JSON.stringify(json);
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/reqCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('mydata='+data);

    xhttp.onreadystatechange = function()
    {
        
        if (this.readyState == 4 && this.status == 200) 
        {
            let obj=JSON.parse(this.responseText);
            if(obj.msg=='fail')
            {
                msg.innerHTML="Request failed";
            }
            else if(obj.msg=='pass')
            {
                msg.innerHTML="Request successfully sent.Page will be redirected to home within 2 seconds";
                setTimeout(function()
                { 
                    location.assign('http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/home.php');
                }, 2000);
            }
            else if(obj.msg=='null')
            {
                msg.innerHTML="Null  submission";
            }
        }
    }
}