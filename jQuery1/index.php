<!DOCTYPE html>
<html>
<head>
	<title>Jquery uso de las funciones</title>
  
    <!--Importo el link del Query --> 
    <script 
		  src="https://code.jquery.com/jquery-3.6.0.min.js"
		  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		  crossorigin="anonymous">
    </script>
     
    <!-- Llamo a mi archivo -->
    <script src="jQuery.js"></script> 

	<style type="text/css"> 

	    h1{font-size: 20px; color: blue;} 
	    .clase-p-label{color: red; font-size: 20px;}
        .clase2-p-label{ color: black; font-size: 20px;};
	    }

    </style>

</head>
<body>  

<!--Envio datos lo recibo con un jQuey-->

 <form method="POST" action="dameDatos.php"> 

    <input type="text" name="nombre_" id="nombre" value="1127122753">  
    <label for="nombre">Nombre</label>
    <strong id="errorNombre"> </strong>

      <br><br>
    
    <input type="submit" name="enviar_" id="enviar">  
    <div id="mensajeError"></div>

 </form>


</body>
</html>