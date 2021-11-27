let opciones=document.querySelectorAll(".campo");
let valor=document.querySelectorAll("#seleccionar")[0];
opciones[0].addEventListener("click",()=>{
    if(opciones[0].checked){
        valor.value="";
        valor.value="SIN LIMITE";
        console.log("dfbvsgtbsrtbsrtb");
    }
})
opciones[1].addEventListener("click",()=>{

    if(opciones[1].checked){
        valor.value="";
        valor.value="5 AÑOS";
    }
})
 let redireccion=document.querySelectorAll("#redireccionar")[0];
 let formulario=document.querySelectorAll("#for")[0];
 let nicho=document.querySelectorAll("#nicho");
 let ci=document.querySelectorAll("#ci");
 let h2=document.querySelectorAll("h2");
 redireccion.addEventListener("click",()=>{
     if(valor.value==""||ci[0].value==""||nicho[0].value==""){
         if(!opciones[0].checked||!opciones[1].checked||!opciones[2].checked||!opciones[3].checked){
            alert("ERROR LLENA TODOS LOS DATOS")
         }
     }else {
        if(opciones[2].checked||opciones[3].checked){
            if(nicho[0].value=="12345"||nicho[0].value=="23456"||nicho[0].value=="34567"){
                formulario.setAttribute("action","../../controlador/compracontrolador.php")
            }else{
                alert("EL NICHO NO EXISTE");
            }
        }else{
            alert("ERROR LLENA TODOS LOS DATOS")
        }
     }
 })
/*------------------------------------------------------------ */