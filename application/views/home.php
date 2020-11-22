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
  <link rel="stylesheet" href="<?php echo base_url().'assets/test.css'?>">
</head>
<body>
    <header>

      <div class="bg-img">
        <div class="atas">
            <div class="row">
                <div class="col-sm-1 pt-3"></div>
                <div class="col-sm-1 pt-3">
                <div id="bt">
                    <button class="btnshop">TEL - O</button>
                </div>
                </div>
                <div class="col-sm-3 pt-3" style="background-color:transparent;">
                  
                </div>
                <div class="col-sm-4 pt-3" style="background-color:transparent;">
                  <button class="buttonlogin" data-toggle="modal" data-target="#modalRegisterForm" >Register</button> 
                </div>
                <div class="col-sm-1 pt-3" style="background-color:transparent;">
                    <button class="buttonlogin" data-toggle="modal" data-target="#modallogin" >Login</button> 
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        
            
          
        </div>
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="<?php echo site_url().'/LoginController/register';?>" class="login100-form validate-form">  
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Register</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Input Username</label>
                            <input type="text" id="orangeForm-name" class="form-control validate" name="username" placeholder="Username" >
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Input Email</label>
                            <input type="email" id="orangeForm-email" class="form-control validate" name="email" placeholder="Email">
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Input Password</label>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password" placeholder="Password">
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <!--button-- class="btn btn-deep-orange">Sign up</button-->
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="<?php echo site_url().'/LoginController/cek_login';?>" class="login100-form validate-form">  
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Input Username</label>
                            <input type="text" id="orangeForm-name" class="form-control validate" name="username" placeholder="Username" >
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Input Password</label>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password" placeholder="Password">
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <!--button-- class="btn btn-deep-orange">Sign up</button-->
                            <input type="submit" name="login" id="login" class="form-submit" value="login"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
        

    </header>
    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
                <div class="col-sm-10" style="background-color:rgb(255, 255, 255);">

                </div>
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        <div class="row">
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
                <div class="col-sm-10" style="background-color:rgb(255, 255, 255);">
                    
                </div>
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
        
        
        
        <div class="row">
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
                <div class="col-sm-10" style="background-color:rgb(255, 255, 255);padding:0px;">
                    <img style="width:100%;height:600px;" src="<?php echo base_url().'assets/bajuhome.jpg'?>" alt="">
                </div>
                <div class="col-sm-1" style="background-color:#F0F0F0"></div>
        </div>
    </div>

    





    <footer>
        <div class="container-fluid" id="bawah">
            <div class="foterbawah">
                <div style = "background-color: black">
            <div class = "row">
                <div class = "col">
                    <a class = "col-2" href="">
                    </a>
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px">ABOUT</h6>
                    <a href = "<?php echo base_url('AboutController/index') ?>" class="head5">about</a>
                    <p></p>
                    <a href = "<?php echo base_url('carir/index') ?>" class="head5">careers</a>
                    <p></p>
                </div>
                <div class = "col">
                    
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px">SUPPORT</h6>
                    <p class = "mb-1" style = "color:white; margin-top:20px">Community Guidelines</p>
                    <p class = "mb-1" style = "color:white; margin-top:0px">Help Center</p>
                </div>
                <div class = "col">
                    <h6 class = "" style = "color:white; margin-top:40px">FOLLOW  </h6>
                    <div class = "row col">
                        <a class = "col" href="">
                            <img class = "py-0 border rounded-circle border-light" src="<?php echo base_url('assets/images/facebook.png')?>" width = "25x" height = "auto" alt="">
                        </a>
                        <a class = "col" href="">
                            <img class = "py-0 border rounded-circle border-light" src="<?php echo base_url('assets/images/twitter.png')?>" width = "25px" height = "auto" alt="">
                        </a>
                        <a class = "py-0 col" href="">
                            <img class = "border rounded-circle border-light" src="<?php echo base_url('assets/images/reddit.png')?>" width = "25px" height = "auto" alt="">
                        </a>
                    </div>
                </div>
                <div class = "col">
                    <h6 style = "color:white; margin-top:40px"></h6>
                </div>
            </div>
        </div>
            </div>
        </div>
        
        
    </footer>
</body>

</html>
