# tp-openclass
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La maison de l'architecte</title>
    <meta name="description" content="Le site de la maison de l'architecture">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css"> 

      /* Styles de base */
      body {
        font-family: 'Bitter', serif;
        background-color: #eef;
        color: #259;
      }
      nav img {
        width: 100%;
      }

      /* Styles pour les smartphones */
      #left, #side1, #side2 {
        padding: 10px 10px 0 10px;
      }

      /* Styles pour les tablettes */
      @media (min-width: 768px) {
        #left{
          padding: 0;
        } 
        #side1 {
          padding: 10px 5px 0 0;
        } 
        #side2 {
          padding: 10px 0 0 5px;
        }
      }

      /* Styles pour les écrans moyens et grands */
      @media (min-width: 992px) {
        #side1, #side2 {
          padding: 0 0 10px 10px;
        } 
      }
 
    </style>

  </head>

  <body>
    
    <header class="container-fluid">
      <div class="row">
        <figure class="hidden-xs col-md-2 col-lg-2">
        <a href="#"><img src="img/maison.png" alt="logo"></a>
        </figure>
        <figure class="col-md-8 col-lg-8 text-center">
        <h1>La maison de l'architecte</h1> 
        </figure>
      </div>
    </header>
  
        
    <nav class="jumbotron">
      <div id="left">
        <figure class="col-xs-12 col-md-12 col-lg-8">
        <a href="#"><img src="img/city1.jpg" alt="Nos réalisations"></a>
        </figure>
      </div>

    <aside class="col-xs-12 col-md-6 col-lg-4">
      <div class="row">
        <div id="side1">
        <a href="#"><img src="img/side1.jpg" alt="Nos projets"></a>
        <div id="side2">
        <a href="#"><img src="img/side2.jpg" alt="Notre ambition"></a>
        </div>
        </div>
      </div>
    </aside>
    
    </nav>

    <footer class="row text-center">
      <a class="btn btn-primary" href="#"><i class="fa fa-twitter fa-2x"></i></a>
      <a class="btn btn-primary" href="#"><i class="fa fa-facebook fa-2x"></i></a>
      <a class="btn btn-primary" href="#"><i class="fa fa-google-plus fa-2x"></i></a>
      <a class="btn btn-primary" href="#"><i class="fa fa-flickr fa-2x"></i></a>
      <a class="btn btn-primary" href="#"><i class="fa fa-spotify fa-2x"></i></a>
    </footer>

  </body>

</html>
