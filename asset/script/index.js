function nameCheck()
{
    let inf=document.querySelector('#info_name');

    let name=document.querySelector("#name_user");
    let nam=name.value;
    if(name.value.length<2)
    {
        inf.classList.add="error";
        inf.innerHTML="Name is too short or invalid";
        inf.style.fontSize="1.4rem";
        inf.style.color="red";
        name.style.border=".1rem solid red";
    }
    else if(name.value.length>=2)
    {
        inf.innerHTML="";
        name.style.border=".1rem solid rgba(18, 236, 91, 0.856)";
        console.log()
    }
}

function dateCheck(para)
{
    let inf=document.querySelector('#info_date');
    inf.classList.add="error";

    console.log(para)

    if(para=='day')
    {
        let day=document.querySelector("#day_user");
        console.log(day.value)
        if(day.value>0 && day.value<=31 && typeof(day.value)!==NaN)
        {
            inf.innerHTML='';
        }
        else
        {
            inf.innerHTML='invalid date';
            inf.style.fontSize="1.6rem";
            inf.style.color="red"
        }
    }
    else if(para=='month')
    {
        let month=document.querySelector("#month_user");
        inf.classList.add="error";
        console.log(month.value)
        if(month.value>0 && month.value<=12 && typeof(month.value)!==NaN)
        {
            inf.innerHTML='';
        }
        else
        {
            inf.innerHTML='invalid date';
            inf.style.fontSize="1.6rem";
            inf.style.color="red";
        }

    }
    else if(para=='year')
    {
        let year=document.querySelector("#year_user");
        inf.classList.add="error";
        if(year.value>=1900 && year.value<=2010 && typeof(year.value)!==NaN)
        {
            inf.innerHTML='';
        }
        else
        {
            inf.innerHTML='invalid date';
            inf.style.fontSize="1.6rem";
            inf.style.color="red";
        }

    }
    else
    {
        inf.innerHTML='';
    }
}

function emailCheck()
{
    let inf=document.querySelector('#info_email');
    
    let email=document.querySelector('#email_user');
    console.log(email)

    if(email.value.includes('@'))
    {
        email.style.border=".1rem solid rgba(18, 236, 91, 0.856)";
        inf.innerHTML='';
    }
    else
    {
        email.style.border=".1rem solid red";
        inf.innerHTML='Invalid email';
        inf.style.fontSize="1.6rem";
        inf.style.color="red";
    }
}

function phoneCheck()
{
    let inf=document.querySelector('#info_number');

    let phone=document.querySelector('#phone_user');

    if(phone.value[0]==0 && phone.value[1]==1 && typeof(phone.value)!=NaN && phone.value.length==11)
    {
        phone.style.border=".1rem solid rgba(18, 236, 91, 0.856)";
        inf.innerHTML="";
    }
    else
    {
        phone.style.border=".1rem solid red";
        inf.innerHTML="Invalid number";
        inf.style.fontSize="1.6rem";
        inf.style.color="red";
    }
}

function passCheck()
{
    let inf=document.querySelector('#info_password');
    let pass=document.querySelector('.pass_field');

    if(pass.value.length>=8)
    {
        pass.style.border=".1rem solid rgba(18, 236, 91, 0.856)";
        inf.innerHTML="";
    }
    else
    {
        pass.style.border=".1rem solid red";
        inf.innerHTML="Please a chose a strong password";
        inf.style.fontSize="1.6rem";
        inf.style.color="red";

    }
}



//Registration...
let reg_form=document.querySelector('.reg_form');
reg_form.addEventListener('submit',e=>
{
    e.preventDefault();
    e.stopPropagation();

    let name=document.querySelector('#name_user').value;
    let day=document.querySelector('#day_user').value;
    let month=document.querySelector('#month_user').value;
    let year=document.querySelector('#year_user').value;

    let email=document.querySelector('#email_user').value;
    let phone=document.querySelector('#phone_user').value;
    let password=document.querySelector('.pass_field').value;
    let type=document.querySelector('#type_user').value;
    let msg=document.querySelector('.register_info');
    console.log(name);
    console.log(email);
    console.log(phone);
    console.log(password);
    console.log(type);

    console.log('working')
    if((name.length>2) && email.includes('@') && phone[0]==0 && phone[1]==1 && phone.length==11 && password.length>=8 )
    {
        let reg_info={
            name:name,
            dob:year+'/'+month+'/'+day,
            email:email,
            phone:phone,
            password:password,
            type:type,
            reg:true
        }

        let regs=JSON.stringify(reg_info);
        var req=new XMLHttpRequest();
        req.open('POST','controller/regCheck.php',true);
        console.log('working 2');
        req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        req.send('mydata='+regs);
        console.log('working 3');

        console.log(req.readyState);
        req.onreadystatechange=function()
        {
            console.log('working 4.3');
            if(req.readyState==4 && req.status==200)
            {
                console.log('working 4');
                let msgtxt=JSON.parse(this.responseText)
                if(msgtxt.msg=='null')
                {
                    msg.style.color='red';
                    msg.style.fontSize='1.4rem';
                    msg.innerHTML='Please enter all values..';
                }
                else if(msgtxt.msg=='fail')
                {
                    msg.style.color='red';
                    msg.style.fontSize='1.4rem';
                    msg.innerHTML='Account creation failed..';
                }
                else if(msgtxt.msg=='success')
                {
                    msg.style.color='rgba(18, 236, 91, 0.856)';
                    msg.style.fontSize='1.5rem';
                    msg.innerHTML='Account have created.Please Log in';
                    msg.style.marginTop='1rem';
                }  
            }
        }
    }
    else
    {
        msg.style.color='red';
        msg.style.fontSize='1.4rem';
        msg.innerHTML='Please enter all values properly';
    }
})
       