let inputsValidacion=document.querySelectorAll("input");
let form=document.querySelectorAll("form")[0];
inputsValidacion[2].addEventListener("click",()=>{
    if(inputsValidacion[0].value==""||inputsValidacion[1].value==""){
        alert("ERROR LLENA TODOS LOS CAMPOS");
    }else{
        form.setAttribute("action","../../controlador/adminControlador.php");
    }
});