function isvalid(){
    var user = document.form.user.value;
    var pass = document.form.pass.value;
    if(user.length=="" && pass.length==""){
        alert(" Username and password field is empty!!!");
        return false;
    }
    else if(user.length==""){
        alert(" Username field is empty!!!");
        return false;
    }
    else if(pass.length==""){
        alert(" Password field is empty!!!");
        return false;
    }
    
}
