function confirmar(evt){
    if (confirm("¿Estás seguro de querer eliminar ese archivo?")){
     return true;
    }else{
        evt.preventDefault();
    }
 }
 let linkdelete=document.querySelectorAll(".is-danger");
 for(var i=0; i<linkdelete.length;i++){
     linkdelete[i].addEventListener('click', confirmar);
 }