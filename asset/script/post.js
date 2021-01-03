function post()
{
    let pname=document.querySelector('#pname').value;
    let description=document.querySelector('#description').value;
    let price=document.querySelector('#price').value;
    let msg=document.querySelector('#messagex');

    if(pname!='' && description!='' && price!='')
    {
        var json = {
            pname:pname,
            descr:description,
            price:price
        }

        var data = JSON.stringify(json);
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/postCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='fail')
                {
                    msg.innerHTML="Posting failed";
                }
                else if(obj.msg=='pass')
                {
                    msg.innerHTML="Posting successful.Page will reload within 2 seconds";
                    setTimeout(function()
                    { 
                        location.assign('http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/post.php');
                    }, 2000);
                }
                else if(obj.msg=='null')
                {
                    msg.innerHTML="Null  submission";
                }
            }
        }
    }


}