<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
<script>

    function llamarAjax() {
        var http = new XMLHttpRequest();
        var url = "respuesta?nombre=" + document.getElementById("formulario").elements["nombre"].value;
        http.open("GET", url, true);
        http.onreadystatechange = function () {
            if (
                http.readyState == 4) {
        // Se ha recibido la respuesta.
                if (http.status == 200) {
        // Aquí escribiremos lo que queremos que
        // se ejecute tras recibir la respuesta
                    var datosDoc = http.responseText;
                    //alert(datosDoc);
                    var par = document.getElementById('parrafito');
                    par.textContent = datosDoc;

                    // version appendChild
                    //var contenido = document.createTextNode(datosDoc);
                    //par.appendChild(contenido);
                } else {
        // Ha ocurrido un error
                    alert("Error:" + http.statusText);
                }
            }
        };
        http.send(null);

    }

</script>
<body>

<form id="formulario" >
    <p>Nombre: <input name="nombre" type="text"/> </p>
    <input onclick="llamarAjax()" value="click"/>
</form>

<p id="parrafito"></p>


</body>
</html>
