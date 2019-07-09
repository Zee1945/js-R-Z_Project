
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyWarkop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href=" mycss.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
<!--   last navbar place size -->

<!-- tombol navbar -->
  <!-- tombol 1(utama) -->
  <div class="navbar-brand"><a class="navbar-brand" href="index.html">MyWarkop</a></div>

  <!-- ---- -->
  <!-- anak tombol navbar utama -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <!-- tombol nav 2 -->
      <li class="nav-item">
        <a class="nav-link" href="meja.php">Menu</a>
      </li>
      <!-- tombol nav 3 -->
      <li class="nav-item">
        <a class="nav-link" href="#">Omzet</a>
      </li>
      <!-- tombol nav 4 -->
      <li class="nav-item">
        <div class="container h-100">
         <div class="d-flex justify-content-center h-100">
           <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
        </div>
      </div>
      </li>    
    </ul>
  </div>  
</nav>

    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Minuman</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <div id='submenu1' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Kopi</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Jus</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Sensasi</span>
                    </a>
                </div>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class=" fa-fw mr-3"></span>
                        <span class="menu-collapsed">Makanan</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Kebab</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Mie</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Sate</span>
                    </a>
                </div>            
               
            </ul>
        </div> <!-- End Sidebar -->

        <!-- MAIN -->
        <div class="col">
          <h1><center>Minuman</center></h1>
               
            <div class="card-group text-center">
  <div class="card">
    <img class="card-img-top" src="image/tehdingin.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title"><b>Teh Manis Dingin</b></h4>
      <p class="card-text">Larutan teh yang diberi pemanis, biasanya gula tebu, sebelum minuman ini siap disajikan. Untuk konteks Indonesia, teh manis yang diberi es biasa disebut es teh.</p>
      
    </div>
    <button type="button" class="btn btn-danger">Tambah</button>
  </div>
  <div class="card text-center">
    <img class="card-img-top" src="image/sanger.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title"><b>Sanger</b></h4>
      <p class="card-text">Kopi susu khas Aceh tidak diracik oleh barista yang menggunakan mesin, tetapi dengan saringan kopi khas untuk jenis robusta.</p>
     
    </div>
    <button type="button" class="btn btn-danger">Tambah</button>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/kopigayo.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title"><b>Kopi Gayo</b></h4>
      <p class="card-text">Kopi arabika yang menjadi salah satu komoditi unggulan yang berasal dari Dataran tinggi Gayo, Aceh Tengah, Indonesia.</p>
     
    </div>
    <button type="button" class="btn btn-danger">Tambah</button>
  </div>
</div>

        </div>
    </div>





<footer></footer>
</body>
</html>