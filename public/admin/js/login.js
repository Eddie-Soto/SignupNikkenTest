
$(document).ready(function () {
    console.log("En cards");
});



function logear(){
    if($('#email').val() == 'master@gmail.com'){
        if($('#password').val() == 'password'){
            location.href = 'http://fhtools.test/vacancy';
        }else{
            alert('Datos incorrectos');
        }
    }else{
        alert('Por favor llene los campos');
    }
}