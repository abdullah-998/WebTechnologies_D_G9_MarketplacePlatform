function request(data)
{
    let msg=document.querySelector('.messagexy')
    if(data=='accept')
    {
        var json = {
            'status' : 'Accept'
        }
    
        var data = JSON.stringify(json);
    
        //let data= document.getElementById('name').value;
    
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/manageReq.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='pass')
                {
                    msg.innerHTML="Accepted Request";
                }
                else if(obj.msg=='fail')
                {
                    
                }
            }
        }
        
    }
    else if(data=='reject')
    {
        var json = {
            'status' : 'Reject'
        }
    
        var data = JSON.stringify(json);
    
        //let data= document.getElementById('name').value;
    
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/manageReq.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('mydata='+data);

        xhttp.onreadystatechange = function()
        {
            
            if (this.readyState == 4 && this.status == 200) 
            {
                let obj=JSON.parse(this.responseText);
                if(obj.msg=='pass')
                {
                    msg.innerHTML="Rejected Request";
                }
                else if(obj.msg=='fail')
                {

                }
            }
        }
        
    }
}