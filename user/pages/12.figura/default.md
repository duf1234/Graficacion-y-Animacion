---
title: Figura
---

<html lang="es">
    <body>
<center>        
<script type="text/javascript">
    function myFunction() {
        var max = document.getElementById("valor").value;
        var dato = parseInt(max);

            if(Number.isInteger(dato)){
                var filas,columnas;
                var cadena = "";

                for (filas=0;filas<max;filas++){
                    for(columnas=0;columnas<=filas;columnas++){
                        cadena = cadena +"*";
                    }
                    cadena = cadena +"<br>"; 
                }
                for (filas=0;filas<max;filas++){
                    for(columnas=0;columnas<max;columnas++){
                        if(columnas<=filas){
                            cadena = cadena +"&nbsp";
                        }else{
                             cadena = cadena +"*";
                        }
                    }
                    cadena = cadena +"<br>"; 
                }
                document.getElementById("figura").innerHTML = cadena;
                document.getElementById("valor").value=" "; 
            }else{
                alert("El dato ingresado no es un numero entero");
                document.getElementById("valor").value=" "; 
            }
    }
</script>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <p><label for="valor">Ingrese un número:</label><br><input type="text" id="valor" onkeyup="myFunction()"><br><br><code id="figura" class="fig">*<br>**<br>***<br>****<br>*****<br>******<br>*******<br>********<br>&nbsp;*******<br>&nbsp;&nbsp;******<br>&nbsp;&nbsp;&nbsp;*****<br>&nbsp;&nbsp;&nbsp;&nbsp;****<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></code></p>
                           
        </div>
    </div>
    </center> 
</body>
</html>