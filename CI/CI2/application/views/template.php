<!DOCTYPE html>
<html> 
<head> 
	<title>Lolipop</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/style.css">

	<script type="text/javascript" src="<?= base_url()?>asset/js/jquery-3.2.1.js"></script>

	<script type="text/javascript" src="<?= base_url()?>asset/js/bootstrap.js"></script>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
		  <div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>


			<a class="navbar-brand" href="#">
				<img src="<?= base_url()?>asset/img/foto.jpeg">
			</a>
		  </div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
	        <li class="active"><a href="#">HOME</a></li>
	        <li><a href="#">PROFIL</a></li>
	         <li><a href="#">LOGOUT</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">LOGIN</a></li>
	        <li><a href="#">DAFTAR</a></li>
        </ul>
	</div>
	  </div>
	</nav>

<!-- slider carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?= base_url()?>asset/img/1.jpg" alt="...">
      <div class="carousel-caption">
        <h2>Tempat Terindah</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?= base_url()?>asset/img/2.jpg" alt="...">
      <div class="carousel-caption">
        Tempat Terpesona
      </div>
    </div>
     <div class="item">
      <img src="<?= base_url()?>asset/img/3.jpg" alt="...">
      <div class="carousel-caption">
        Tempat Tertua
      </div>
    </div>
     <div class="item">
      <img src="<?= base_url()?>asset/img/4.jpg" alt="...">
      <div class="carousel-caption">
        Tempat Tersegar
      </div>
    </div>
     <div class="item">
      <img src="<?= base_url()?>asset/img/5.jpg" alt="...">
      <div class="carousel-caption">
        Tempat TerLena
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<div class="container jarak-atas">
<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">KATEGORI</h3>
      </div>
      <div class="panel-body">

        <?php 
          $this->load->view($konten);
         ?>

      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="gambar1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">DETAIL PRODUK</h4>
      </div>
      <div class="modal-body">
        <img src="img/1.jpg" style="width:100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="lol">
  <p>Ini Footer</p>
</div>

</body>
</html>

