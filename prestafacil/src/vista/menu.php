<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="../controlador/bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../controlador/bootstrap/css/style.css" />

</head>
<body>
    <nav class="navbar navbar-expand-md bg-success-subtle">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../vista/img/prestafacilcut.jpg" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white text-bg-success rounded-4 border border-dark-subtle m-1" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white text-bg-success rounded-4 border border-dark-subtle m-1" href="#">sobre nosotros</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-white text-bg-success rounded-4 border border-dark-subtle m-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ¡Ve nuestro planes de pago!
                </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled text-white text-bg-success rounded-4 border border-dark-subtle m-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col">
          <div class="card">
      <img src="assets/images/bs-images/img-2x1.png" class="card-img-top" alt="card-grid-image">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
        </div>
        <div class="col-6"> <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/menuu.jpg" width="100%" height="400px" class="d-block " alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/moneda.jpg" width="100%" height="400px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/prestafacilcut.jpg" width="100%" height="400px" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col">
          <div class="card">
      <img src="assets/images/bs-images/img-2x1.png" class="card-img-top" alt="card-grid-image">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
           
        </div>
       
      </div>
      <div class="row">
        <div class="col">
            <img src="../vista/img/menuu.jpg" >
        </div>




   <script src="/src/controlador/bootstrap/js/bootstrap.min.js"></script> 
</body>
</html>
