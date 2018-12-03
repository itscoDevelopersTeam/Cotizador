<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <h1 class="navbar-brand" href="#">Web Code</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contacto.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Catalogo</h1>
          <div class="list-group">
            <a href="Catalogo/Motherboard.php" class="list-group-item" name="Motherboard">Motherboard</a>
            <a href="#" class="list-group-item" name="Procesadores">Procesadores</a>
            <a href="#" class="list-group-item" name="Memorias Ram">Memorias Ram</a>
            <a href="#" class="list-group-item" name="Terjetasred">Terjetas de red</a>
            <a href="#" class="list-group-item" name="Memorias">Disco duro, Memorias usb, etc</a>
            <a href="#" class="list-group-item" name=Memorias>Asesorios</a>            
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/Disco_duros.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/MemoriasRam.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/Targeta_red.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          
            <?php
                include("conexion.php");
                $query="select * from productos";
                $link=mysqli_query($conexion,$query);                     
                while ($reg= mysqli_fetch_array($link))
                {
                    echo ("<div class=\"row\">");
                    echo ("<div class=\"col-lg-4 col-md-6 mb-4\">");
                    echo ("<div class=\"card h-100\">");
                    echo ("<a href=\"#\"><img class=\"card-img-top\" src=\"img/catalogoimg/$reg[clave].jpg\" alt=\"\"></a>");
                    echo ("<div class=\"card-body\">");
                    echo ("<h4 class=\"card-title\">");
                    echo ("<a href=\"#\">$reg[nombre]</a></h4>");
                    echo ("<h5>$reg[presio]</h5>");
                    echo ("<p class=\"card-text\">$reg[descripcion]</p></div>");
                    echo("<div class=\"card-footer\">");
                    echo("<small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>");
                    echo("</div> </div></div></div>");
                }
                  //$conexion.close();
            ?> 
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Web Code 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
