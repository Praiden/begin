$(document).ready(function(){
    $("button").submit(function(){
        alert('форма отправлена');
        return false
    })
});




function check(a,n){
    if(a==''){
        document.getElementById(n).innerHTML="Это важное поле";
    }else{
        document.getElementById(n).innerHTML="";
    }
}

function reg (a){
    for(i=0; i<4; i++){
            if(a.elements[i].value==''){
                alert ('Вы не заполнили форму');
                a.elements[i].focus();
                return false;
            }

            if(a.password.value != a.password_conf.value){
                alert('Пароли не совпадают');
                a.password.focus();
                return false;
            }

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Zа-яА-Я]{2,4}$/;
        var loginPattern = /^[a-zA-Z0-9._-]{3,20}$/;
        var passwordPattern = /^[a-zA-Z0-9]{6,20}$/;

        if (!emailPattern.test(a.email.value)){
            alert("Адресс почты не верный");
            a.email.focus();
            return false
        }

        if(!loginPattern.test(a.login.value)){
            alert('Логин не корректен');
            a.login.focus();
            return false
        }

        if(!passwordPattern.test(a.password.value)){
            alert('Пароль должен быть от 6 до 20 символов');
            a.password.focus();
            return false
        }
    }
    document.form.submit();
}

function auth (a){
    for(i=0; i<2; i++){
        if(a.elements[i].value==''){
            alert ('Вы не заполнили форму');
            a.elements[i].focus();
            return false;
        }

        var loginPattern =/^[a-zA-Z0-9._-]{3,20}$/;
        var passwordPattern =/^[a-zA-Z0-9]{6,20}$/;

        if(!loginPattern.test(a.login_auth.value)){
            alert('Не верный логин или пароль');
            a.login.focus();
            return false
        }

        if(!passwordPattern.test(a.password_auth.value)){
            alert('Пароль должен быть не меньше 6 и не больше 20 символов');
            a.password.focus();
            return false
        }
    }
    document.form.submit();
}
