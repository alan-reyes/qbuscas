<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
  <script src="index.js"></script>
  <title>QBuscas</title>
</head>

<body>

  <header class="header">
    <img src="src/logo-PhotoRoom.png-PhotoRoom.png" alt="Logo QBuscas.com" class="header-logo">
    <nav>
      <ul class="navbar">
        <li class="item__navbar"><a href="Formulario.php">Ser en Vendedor</a></li>
        <li class="item__navbar"><a href="profile.php">Mi Perfil</a></li>
        <li class="item__navbar"><a href="underconstruction.php">Precios</a></li>
      </ul>
    </nav>
    <a href="Login.php" class="item__navbar">Registrarse</a>
  </header>

  <main class="search-section">
    <h1 class="page-name">QBuscas.com</h1>
    <form action="">
      <!-- <input onkeypress="buscar()" type="text" id="search" placeholder="Restaurante, taxista, doctor..."> -->
      <div class="group">
        <!-- <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg> -->
        <input id="search" type="search" class="input" onkeypress="buscar()" placeholder="Restaurante, taxista, doctor...">
      </div>
    </form>    
  </main>

  <section class="gallery-section">
    <h2 class="title-secciones">Secciones</h2>
    <nav>
      <ul class="navbar-secciones">
        <li class="item__navbar"><a href="">Todos</a></li>
        <li class="item__navbar"><a href="">Servicios</a></li>
        <li class="item__navbar"><a href="">Comida</a></li>
        <li class="item__navbar"><a href="">Belleza</a></li>
        <li class="item__navbar"><a href="">Salud</a></li>
        <li class="item__navbar"><a href="">Turismo</a></li>
      </ul>
    </nav>
    <!-- Cards -->
    <ul class="cards">
      <li class="cards__item">
        <div class="card">
          <img class="card__image" src="src/neg-gal/epocadeoro.jpeg"></img>
          <div class="card__content">
            <p class="card__category">Comida</p>
            <p class="card__title">Restaurante La Época de Oro</p>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless
              value that serves as a proportion. It dictates what amount of the available space inside the flex
              container the item should take up.</p>
            <div class="card__tags__section">
              <button class="btn btn--block card__btn">Restuarant</button>
              <button class="btn btn--block card__btn">Comida</button>
              <button class="btn btn--block card__btn">Café</button>
            </div>
          </div>
        </div>
      </li>
      <li class="cards__item">
        <div class="card">
          <img class="card__image" src="src/neg-gal/estetica.jpeg"></img>
          <div class="card__content">
            <p class="card__category">Belleza</p>
            <div class="card__title">Estética Kareny</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless
              value that serves as a proportion. It dictates what amount of the available space inside the flex
              container the item should take up.</p>
            <div class="card__tags__section">
              <button class="btn btn--block card__btn">Corte</button>
              <button class="btn btn--block card__btn">Estetica</button>
              <button class="btn btn--block card__btn">Belleza</button>
              <button class="btn btn--block card__btn">Cabello</button>
            </div>
          </div>
        </div>
      </li>
      <li class="cards__item">
        <div class="card">
          <img class="card__image" src="src/neg-gal/ropaamericana.jpeg"></img>
          <div class="card__content">
            <p class="card__category">Ropa</p>
            <div class="card__title">Ropa americana</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless
              value that serves as a proportion. It dictates what amount of the available space inside the flex
              container the item should take up.</p>
              <div class="card__tags__section">
                <button class="btn btn--block card__btn">ropa</button>
                <button class="btn btn--block card__btn">americana</button>
                <button class="btn btn--block card__btn">moda</button>
                <button class="btn btn--block card__btn">segunda</button>
              </div>
          </div>
        </div>
      </li>      
      <li class="cards__item">
        <div class="card">
          <img class="card__image" src="src/neg-gal/labuenavida.jpeg"></img>
          <div class="card__content">
            <p class="card__category">Comida</p>
            <div class="card__title">Restaurante Buena Vida</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless
              value that serves as a proportion. It dictates what amount of the available space inside the flex
              container the item should take up.</p>
              <div class="card__tags__section">
                <button class="btn btn--block card__btn">comida</button>
                <button class="btn btn--block card__btn">tipica</button>
                <button class="btn btn--block card__btn">Restuarant</button>
                <button class="btn btn--block card__btn">gastronomia</button>
              </div>
          </div>
        </div>
      </li>  
      <li class="cards__item">
        <div class="card">
          <img class="card__image" src="src/neg-gal/cafetales.jpeg"></img>
          <div class="card__content">
            <p class="card__category">Cafetería</p>
            <div class="card__title">Los Cafetales</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless
              value that serves as a proportion. It dictates what amount of the available space inside the flex
              container the item should take up.</p>
              <div class="card__tags__section">
                <button class="btn btn--block card__btn">cafe</button>
                <button class="btn btn--block card__btn">bebidas</button>
                <button class="btn btn--block card__btn">dulces</button>
                <button class="btn btn--block card__btn">comida</button>
              </div>
          </div>
        </div>
      </li>  
      <li class="cards__item">
        <div class="card">
          <img class="card__image" src="src/neg-gal/simi.jpeg"></img>
          <div class="card__content">
            <p class="card__category">Salud</p>
            <div class="card__title">Doctor Simi</div>
            <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless
              value that serves as a proportion. It dictates what amount of the available space inside the flex
              container the item should take up.</p>
              <div class="card__tags__section">
                <button class="btn btn--block card__btn">doctor</button>
                <button class="btn btn--block card__btn">consultas</button>
                <button class="btn btn--block card__btn">similar</button>
                <button class="btn btn--block card__btn">medico</button>
              </div>
          </div>
        </div>
      </li>  
    </ul>
  </section>
  <footer>

  </footer>
</body>

</html>