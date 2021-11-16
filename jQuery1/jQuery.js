
console.log("Estado ok");

//----

$( document ).ready(function() { //Etiqueta por defecto


   $('#enviar').click(function(){
      
  
       //var nombre = document.getElementById('nombre').value; 
      var nombre = $('#nombre').val();
       
       if(nombre == ""){
            
           $('#errorNombre').html('Campo nombre vacio');
          
           event.preventDefault(); 
           
       }else{
          
       	  alert("Nombre " + nombre);

         

       }
     });
 });
