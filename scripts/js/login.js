function autenticar(){
    location.href = "/sae/scripts/php/autenticador/login.php?nickname="+$("#nickname").val()+"&password="+$("#password").val();
 };