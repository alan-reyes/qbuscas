<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/estilo2.css">
    <title>Formulario de registro</title>

    <script>
        function mostrarCampoOtra() {
          var opcion = document.getElementById("categoria").value;
          var campoOtra = document.getElementById("campo-otra");
    
          if (opcion === "otra") {
            campoOtra.style.display = "block";
          } else {
            campoOtra.style.display = "none";
          }
        }
      </script>

  </head>
  <body>
    <section class="form_section">
        <form action="functions/formulariosend.php" method="POST" enctype="multipart/form-data">
        <h3 class="form_header">Formulario de registro</h3>
      <input class="input_forms" type="text" name="nombreNegocio"
        placeholder="Ingrese el nombre de su negocio" required>

      <input class="input_forms" type="text" name="alias"
        placeholder=" Ingrese un alias de su persona o negocio">

        <p>Agrega la imagen principal que se mostrara de tu producto/servicio</p>
      <input type="file" name="image_uno" id="image_uno">
      <p>Test imagen</p>
      <input type="file" name="imagen" id="imagen">
      <hr>

      <p>DATOS DE CONTACTO:</p>

      <input class="input_forms" type="tel" name="telefono"
        placeholder="Ingrese un numero telefonico">

      <input class="input_forms" type="email" name="correo"
        placeholder="Ingrese un correo electronico">

      <input class="input_forms" type="text" name="direccion"
        placeholder="Ingrese la direccion de su establecimiento">

      <hr>
      
      <p>DESCRIBE BREVEMENTE TU NEGOCIO:</p>
      <input class="input_forms" type="text" name="Descripcion"
        placeholder="Descripcion" required>

      <p>CARACTERISTICAS DE SU NEGOCIO:</p>
      <input class="input_forms" type="text" name="Caracteristica1"
        placeholder="Caracteristica 1">
      <input class="input_forms" type="text" name="Caracteristica2"
        placeholder="Caracteristica 2">
      <input class="input_forms" type="text" name="Caracteristica3"
        placeholder="Caracteristica 3">
      <input class="input_forms" type="text" name="Caracteristica4"
        placeholder="Caracteristica 4">
        
      <hr>
    
      <p>CATEGORIA DE SU NEGOCIO:</p>
      <label for="categoria">Categoría:</label>
      <select id="categoria" onchange="mostrarCampoOtra()" required name="categoria">
        <option value="opcion1">Comida</option>
        <option value="opcion2">Belleza</option>
        <option value="opcion2">Salud</option>
        <option value="opcion2">Turismo</option>
        <option value="otra">Otra</option>
      </select>

      <div id="campo-otra" style="display: none;">
        <label for="otra-categoria">Ingresa la categoría:</label>
        <input type="text" id="otra-categoria">
      </div>

      <p>Garantia:</p>
      <input class="input_forms" type="text" name="garantia"
        placeholder="Cuenta con algún documento que avale su servicio/producto">
      <p>Agrega una imagen de tu constancia o certificado de su oficio, profesión o negocio</p>
      <input type="text" name="contancia">

      <input class="input_button" type="submit" value="Registrar">
        </form>
    </section>

  </body>
</html>