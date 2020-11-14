<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bunda fashion</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body id="home">
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">BUNDA FASHION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#product">PRODUCT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrasi.php">REGISTER</a>
      </li>
    </ul>
  </div>
  </div>
</nav>



<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/5.png" class="d-block w-100" alt="assets/img/1.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/4.jpg" class="d-block w-100" alt="assets/img/1.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/6.jpg" class="d-block w-100" alt="assets/img/1.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="feature">
    <h2 class="title-feature">FITUR</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-feature">
                <i class="material-icons">person</i>
                <span class="feature-name">LEBIH DARI 1000 PELANGGAN</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, culpa.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-feature">
                <i class="material-icons">access_time</i>
                <span class="feature-name">WAKTU PENGIRIMAN CEPAT</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, culpa.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-feature">
                <i class="material-icons">attach_money</i>
                <span class="feature-name">BIAYA TERJANGKAU</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, culpa.</p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="feature" id="product">
    <h2 class="title-feature">PRODUK</h2>
    <div class="container">
    <div class="row">
      <?php 
        include 'admin/koneksi.php';
        $mysql = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($data = mysqli_fetch_array($mysql)) {
       ?>
        <div class="col-md-4">
            <div class="card card-product">
            <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['nama_produk'] ?></h5>
                    <h4 class="card-title"><?php echo number_format($data['harga_produk']) ?></h4>
                    <p class="card-text"><?php echo $data['keterangan_produk'] ?></p>
                    <a href="#notifikasi" class="btn btn-primary" data-toggle="modal">Add to card</a>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
    </div>
</section>




<!-- Modal -->
<div class="modal fade" id="notifikasi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Maaf anda belum login</h5>

      </div>
      <div class="modal-body">
        Untuk dapat memesan produk di sistem ini, silahkan login dahulu, atau bagi yang belum memiliki akun silahkan registrasikan akun anda
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Mengerti</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>