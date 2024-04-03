<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    /* Estilos para las imágenes dentro del carousel */
    .carousel-inner .item img {
      width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    /* Cambiar el color de los indicadores con transparencia */
    .carousel-indicators li {
      background-color: rgba(51, 122, 183, 0.1); /* Color con transparencia */
      border-color: rgba(51, 122, 183, 0.5); /* Borde con transparencia */
    }

    /* Cambiar el color activo de los indicadores */
    .carousel-indicators .active {
      background-color: #337ab7; /* Cambiar el color de fondo del indicador activo */
      border-color: #337ab7; /* Cambiar el color del borde del indicador activo */
    }

    .container-carousel{
        background-color: rgba(242, 242, 242, 0.8);
    }
  </style>
</head>

<body>
  <div class="container-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/Producto2.jpg" alt="Producto1" style="width:40%;">
        </div>

        <div class="item">
          <img src="images/Producto3.jpg" alt="Producto2" style="width:40%;">
        </div>
      
        <div class="item">
          <img src="images/Producto4.jpg" alt="Producto3" style="width:40%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</body>
</html>
