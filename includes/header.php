<?php 
$url = $_GET['p'];
?>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cv en ligne" />
    <meta name="author" content="Stephane Lenglet" />
	<meta name="copyright" content="© stephane@lenglet.pro" />
    <title>Stephane Lenglet</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Stéphane Lenglet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php if($url == "about"){?>
        <li class="active"><a href="/about?p=about">A propos<span class="sr-only">(current)</span></a></li>
        <li><a href="/skill?p=skill">Mes Compétences</a></li>
       <?php }else if($url == "skill"){?>
        <li><a href="/about?p=about">A propos</a></li>
        <li class="active"><a href="/skill?p=skill">Mes Compétences<span class="sr-only">(current)</span></a></li>
       <?php }else{?>
        <li class="active"><a href="/about?p=about">A propos<span class="sr-only">(current)</span></a></li>
        <li><a href="/skill?p=skill">Mes Compétences</a></li>
        <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>