<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="generator" content="Hugo 0.98.0" />
  <title>Luz Ingá</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />

  <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
  <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
  <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json" />
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9" />
  <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico" />
  <meta name="theme-color" content="#712cf9" />
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .opa:hover {
      background: rgb(0, 0, 0);
      transition: all 1s;
    }

    .opa {
      transition: all 1s;
    }

    .redendo {
      width: 100px;
    }
  </style>

  <link href="https://getbootstrap.com/docs/5.2/examples/carousel/carousel.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Luz Ingá</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active opa" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active opa" aria-current="page" href="#">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active opa" aria-current="page" href="#">Decorações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active opa" aria-current="page" href="#">Iluminação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active opa" aria-current="page" href="#">Moveis</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-outline-success" type="submit"><a href="/view/login.php">Login</a></button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.theodorahome.com.br/lojas/00019925/images/principal-1.jpg?cccfc=2a159e7d" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://www.theodorahome.com.br/lojas/00019925/images/principal-2.jpg?cccfc=2a0b8e14" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://www.theodorahome.com.br/lojas/00019925/images/principal-3.jpg?cccfc=2a0b8e27" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img alt="Oferta em Porta Retratos Varios Modelos" src="https://m.media-amazon.com/images/I/51gNf6GzazL._AC._SR360,460.jpg" class="octopus-pc-item-image octopus-pc-item-image-v3 redendo" data-a-hires="https://m.media-amazon.com/images/I/51gNf6GzazL._AC._SR360,460.jpg" data-a-manual-replacement="true" />
          <h2 class="fw-normal">Heading</h2>
          <p>
            Some representative placeholder content for the three columns of
            text below the carousel. This is the first column.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <div class="col-lg-4">
          <img alt="Oferta em Porta Retratos Varios Modelos" src="https://m.media-amazon.com/images/I/51gNf6GzazL._AC._SR360,460.jpg" class="octopus-pc-item-image octopus-pc-item-image-v3 redendo" data-a-hires="https://m.media-amazon.com/images/I/51gNf6GzazL._AC._SR360,460.jpg" data-a-manual-replacement="true" />
          <h2 class="fw-normal">Heading</h2>
          <p>
            Another exciting bit of representative placeholder content. This
            time, we've moved on to the second column.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <div class="col-lg-4">
          <img alt="Oferta em Porta Retratos Varios Modelos" src="https://m.media-amazon.com/images/I/51gNf6GzazL._AC._SR360,460.jpg" class="octopus-pc-item-image octopus-pc-item-image-v3 redendo" data-a-hires="https://m.media-amazon.com/images/I/51gNf6GzazL._AC._SR360,460.jpg" data-a-manual-replacement="true" />
          <h2 class="fw-normal">Heading</h2>
          <p>
            And lastly this, the third column of representative placeholder
            content.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">SERIES 7</h2>
          <p class="lead">
            Assento e encosto peça única em folhas de madeira moldadas e
            cortadas sob pressão, com pintura monocrome Lacquered.
          </p>
        </div>
        <div class="col-md-5">
          <img loading="lazy" alt="Series 7" class="w-100 h-100 dn absolute top-0 left-0 z-999 vtex-product-summary-2-x-image vtex-product-summary-2-x-image--hover vtex-product-summary-2-x-imageNormal vtex-product-summary-2-x-hoverImage vtex-render-runtime-8-x-lazyload ls-is-cached lazyloaded" crossorigin="anonymous" data-src="https://wtcmktplace.vtexassets.com/arquivos/ids/156320-300-300?v=637860763408800000&amp;width=400&amp;height=400&amp;aspect=true" style="
                width: 400px;
                height: 400px;
                object-fit: contain;
                max-height: unset;
              " src="https://wtcmktplace.vtexassets.com/arquivos/ids/156320-300-300?v=637860763408800000&amp;width=300&amp;height=300&amp;aspect=true" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">
            Oh yeah, it’s that good.
            <span class="text-muted">See for yourself.</span>
          </h2>
          <p class="lead">
            Tapete Sala, Quarto Peludo Felpudo Macio e Luxuoso 2,00m x 1,50m –
            Bege Mesclado
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="https://m.media-amazon.com/images/I/71f4zceJOiL._AC_SL1000_.jpg" class="fullscreen" style="
                margin-top: 93.5px;
                margin-left: 0px;
                height: 500px;
                width: 500px;
              " />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            And lastly, this one. <span class="text-muted">Checkmate.</span>
          </h2>
          <p class="lead">
            Quadro Decorativo Poster Arnold Schwarzenegger Vidro Anti-Reflexo
            & Paspatur 46x56cm
          </p>
        </div>
        <div class="col-md-5">
          <img src="https://m.media-amazon.com/images/I/51AXbAW30aL._AC_.jpg" class="fullscreen" style="
                margin-top: 139px;
                margin-left: 59px;
                height: 500px;
                width: 493px;
              " />
        </div>
      </div>

      <hr />

      <form>
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="myText" placeholder="Your Email" required />
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">
            Your message has been sent. Thank you!
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn-primary" onclick="sendMail(); return false">
            Enviar email
          </button>
        </div>
      </form>
      <hr />
    </div>

    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>
        &copy; 1970–2022 Luz Ingá, Inc. &middot;
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
      </p>
    </footer>
  </main>
  <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script>
  function sendMail() {
    var link =
      "mailto:me@example.com" +
      "?cc=myCCaddress@example.com" +
      "&subject=" +
      escape("This is my subject") +
      "&body=" +
      escape(document.getElementById("myText").value);
    window.location.href = link;
  }
</script>

</html>