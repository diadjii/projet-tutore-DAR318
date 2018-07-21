<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Analyse des Hastags </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="node_modules/datamaps/dist/datamaps.world.min.js"></script>
<script src="Chart.min.js"></script>
<link rel="stylesheet" href="adminlte.min.css">
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand text text-primary center">Data Visualisation</h3>
        </div>
      </header>
      </div>
          <div class="container">
        <div class="row">
          <div class="col-sm">
            <span id="nbreUser" class="border text-primary"></span>
          </div>
          <div class="col-sm">
            <span id="nbreTweets" class="border text-primary"></span>
          </div>
          <div class="col-sm">
            <span id="porte" class="border text-primary"></span>
          </div>
        </div>
        </div>
        <section class="content">
            <!-- <div class="container-fluid">
            <span id="nbreUser" class="border border-primary"></span>
            <span id="nbreUser" class="border border-primary"></span>
            <span id="porte" class="border border-primary"></span>
            <div class="element" style="padding:5px;margin:5%;"></div> -->
            <div class="row">
              
              <div class="form-group col-md-12">
                <div class="col-md-2">
                    <button class="btn btn-success"id="btn">Envoyer</button>
                </div>
                <div class="col-md-6">
                  <select class="form-control" name="hastag" id="tags">
                    <option value="">Selectionner un Tag</option>
                  </select>
                </div>
              </div>
            </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" id="title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="table">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom</th>
                    <th>Nombre de Followers</th>
                    <th>Nombre de Tweets</th>
                    <th>Impact ou Portée</th>
                  </tr>
                  
                  
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <canvas id="traitement" width=300 height=400></canvas>
      </div>
    </div>
</section>
<script src="script.js"></script>
<script>

</script>
</body>
</html>