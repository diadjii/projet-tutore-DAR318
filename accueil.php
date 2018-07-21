
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="typed.min.js"></script>

  <style>
    #intro{
        background-image:url("f5.jpeg");
        height:650px;
        padding:15%;
        color:#fff;
    };
    #text{
        font-size:2em;

    }
  </style>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand text text-primary">Data Visualisation</h3>
        </div>
      </header>

      <main role="main" class="inner cover" id="intro">
        <h1 class="cover-heading " id="text">Twitter <span class="element"></span></h1>
        <br>
        <br>
        <p class="lead">
          <a href="home.php" class="btn btn-lg btn-success"><strong>Commencer ici</strong></a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>DAR@318 <a href="https://getbootstrap.com/">ESMT</a>, by <a href="https://twitter.com/mdo">DAF</a>.</p>
        </div>
      </footer>
    </div>

    <script>
        var typed = new Typed('.element', {
    strings: ["une autre maniere ", "de voir les choses"],
    typeSpeed: 100,
    loop:true,
    showCursor: false
  });
    </script>
  </body>
</html>
