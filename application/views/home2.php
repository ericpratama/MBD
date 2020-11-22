<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url().'assets/hal2.css'?>">
</head>
<body>
  <header>
        <nav class="py-0 pl-4 m-0 sticky-top navbar navbar-expand-lg navbar-light border-bottom" style = "background-color:#FFFFFF">
                <button class="navbar-toggler navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="m-0 pr-4 py-0 navbar-brand" href="#">
                    <img src="<?php echo base_url().'assets/cloth.png'?>" width="70" height="60" alt="">
                </a>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="px-4 nav-item active text-center" style="font-weight:700;color: black">
                            <a class="nav-link" href="#contohbaju">Contoh Baju <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="px-4 nav-item active text-center" style="font-weight:700; color: black">
                            <a class="nav-link" href="#bahan">Contoh Bahan</a>
                        </li>
                    </ul>
                </div>
                <nav class="navbar navbar-light">
                    <a class="nav-link" href="<?php echo site_url().'/LoginController/Logout';?>"><i class="fa fa-power -off"></i>Logout</a>
                </nav>
                <nav class="navbar navbar-light">
                    <a class="nav-link" href="<?php echo site_url().'/LoginController/delete/';?>"><i class="fa fa-power -off"></i>Delete Account</a>
                </nav>
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url().'assets/iconbell.png'?>" width="40" height="40" alt="">
                    </a>
                </nav>
                
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url().'assets/tigatitik.png'?>" width="40" height="40" alt="">
                    </a>
                </nav>
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="" width="40" height="40" alt="">
                    </a>
                </nav>
            </nav>

        <div class="bg-img">
            <div class="atas">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 pt-3" style="background-color:transparent;"></div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 pt-3" style="background-color:transparent;">
                        <div class="petak rounded">
                            <div class="petakisi">
                                <div class="text1">
                                    <p>Tel-O </p>
                                
                                </div>
                                <div class="text1 pt-1">
                                    <p>Pingin buat baju banyak ?</p>
                                
                                </div>
                                <div class="text2">
                                    <p clas>pesan di Tel-O saja :)</p>
                                </div>
                                <div class="text3">
                                    <div id="bt">
                                    <a href="<?php echo site_url('pesanct/index') ?>  ">
                                             
                                                 
                                                <button class="btnshop">PESAN SEKARANG</button>
                                            </a>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 pt-3" style="background-color:transparent;"></div>
                    <div class="col-sm-1""></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 pt-3" style="background-color:transparent;"> </div>
                <div class="col-sm-1""></div>
            </div>
        </div>

  </header>

  <div class="container-fluid">
    
    
    <div class="row pt-3">
        <div class="col-sm-1" style="background-color: #FFFFFF" ></div>
        <div class="col-sm-10" style="background-color:#FFFFFF">
            <div class="shoprated text-left"  id="contohbaju">Contoh Baju</div>
            <div class="shopall text-right"></div>
        </div>
        <div class="col-sm-1" style="background-color: #FFFFFF" ></div>
    </div>
    <div class="row" id="listcard">
        <div class="col-sm-1" style="background-color: #FFFFFF" ></div>
        <div class="col-sm-10 pb-3 " style="background-color:#FFFFFF">
            <div class="card-deck">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo base_url().'assets/contoh1.png'?>" class="card-img-top" alt="...">
                    <div class="cardbawah card-body">
                        <p class="ct card-text text-left">Kaos Polo</p>
                        <small class="cs text-muted">Rp. 80.000 /pcs</small></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo base_url().'assets/contoh2.png'?>" class="card-img-top" alt="...">
                    <div class="cardbawah card-body">
                        <p class="ct card-text text-left">Kaos polos</p>
                        <small class="cs text-muted">Rp. 50.000 /pcs</small></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo base_url().'assets/contoh3.png'?>" class="card-img-top" alt="...">
                    <div class="cardbawah card-body">
                        <p class="ct card-text text-left">Kemaja</p>
                        <small class="cs text-muted">Rp. 120.000 /pcs</small></p>
                    </div>
                </div>
                <div class="cardbawah card" style="width: 18rem;">
                    <img src="<?php echo base_url().'assets/contoh4.png'?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="ct card-text text-left">Jaket</p>
                        <small class="cs text-muted">Rp. 150.000 /pcs</small></p>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="col-sm-1" style="background-color: #FFFFFF" ></div>
    </div>
    <div class="row" style="padding-top:300px;">
        <div class="col-sm-1" style="background-color: FFFFFF" ></div>
        <div class="col-sm-10" style="background-color:FFFFFF">
            <div class="text-left"></div>
            
        </div>
        <div class="col-sm-1" style="background-color: FFFFFF" ></div>
    </div>
    <div class="row pb-3">
        <div class="col-sm-1" style="background-color: FFFFFF" ></div>
        <div class="col-sm-5" id="madekiri" style="background-color:white">
            <div class="kiri" style="background-color:FFFFFF">
                <div>
                    <h4 class="head4">COTTON COMBED 30s</h4>
                </div>
                <div id="bahan">
                    <p class="p4">Ini dia bahan favorit anak-anak muda di daerah perkotaan. 
                        Bahan ini biasa diandalkan clothing line dan distro karena tipis dan tidak panas.
                        Bahan Combed 30s menggunakan gramasi yang berkisar antara 140 – 160 gr/m2 dengan untuk jenis rajutan Single Knitt.
                    <p>
                </div>
                <div>
                    <button class="btnshop2">SHOP DROP</button>
                </div>
            </div>
        </div>
        <div class="col-sm-5" id="madekanan" style="background-color:white">
            <img src="<?php echo base_url().'assets/bahan1.jpg'?>" id="gambarmade">
        </div>
        <div class="col-sm-1" style="background-color: FFFFFF" ></div>
    </div>
    
    
    
   

    <footer>
        <div class="container-fluid" id="bawah">
            <div class="row" id="barisbawah2">
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
                <div class="col-sm-1" id="colbawah" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"><a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"></a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">

                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a href = "<?php echo site_url('carir/index') ?>" class="head5">about</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">help center</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">privacy</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">terms</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5">sitemap</a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"></a>
                </div>
                <div class="col-sm-1" style="background-color:rgb(255, 255, 255);">
                    <a class="head5"></a>
                </div>
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
            </div>
            <div class="row" id="rowbawah">
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
                <div class="col-sm-10" id="colbawah" style="background-color:#FFFFFF;">
                    <div class="text-center">
                        <img src="<?php echo base_url().'assets/iconfb.png'?>" alt="icon" class="icon">
                        <img src="<?php echo base_url().'assets/icontwitter.png'?>" alt="icon" class="icon">
                        <img src="<?php echo base_url().'assets/iconig.png'?>" alt="icon" class="icon">     
                    </div>
                </div>
                <div class="col-sm-1" style="background-color:#FFFFFF"></div>
            </div>
        </div>
        
        
    </footer>
    

</body>

</html>
