let inputs=document.querySelectorAll("input");
let formulario=document.querySelectorAll(".formulario")[0];
// console.log(inputs);
inputs[7].addEventListener("click",()=>{
    if(inputs[0].value==""||inputs[1].value==""||inputs[2].value==""|| inputs[3].value==""|| inputs[4].value==""|| inputs[5].value==""|| inputs[6].value==""){
        alert("ERROR LLENA TODOS LOS CAMPOS");
    }else{
        formulario.setAttribute("action","../../controlador/registrocontrolador.php");
    }
});

