<!DOCTYPE html>
<html lang="en">
<head>
    <title>MBS login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png"       href="<?php echo base_url ('assets/images/favicon.ico'); ?>"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/font-awesome.min.cs'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/icon-font.min.css'); ?>" >
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/animate.css'); ?>" >
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/hamburgers.min.css'); ?>" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/animsition.min.css'); ?>" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/select2.min.css'); ?>"  />
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/daterangepicker.css'); ?>" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url ('assets/css/login.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" action="<?= base_url(); ?>login/doLogin" method="post">
                    <span class="login100-form-title p-b-51">
                        Login
                    </span>

                    <?php if ($this->session->flashdata()) { ?>
                        <div class="alert alert-warning">
                        <?= $this->session->flashdata('msg'); ?>
                        </div>
                    <?php } ?>

                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                        <input class="input100"  placeholder="Email" type="email" name="email"  id="email"">
                        <span class="focus-input100"></span>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100"  placeholder="Password" type="password" name="password"  id="pwd">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="flex-sb-m w-full p-t-3 p-b-24">

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                        
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-24">

                        <div>
                            <a href="<?= base_url() . 'register'; ?>" class="txt1">
                                create account
                            </a>
                        </div>
                        
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/animsition.min.js'); ?>" ></script>
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/popper.js'); ?>" ></script>
    <script  src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" ></script>
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/select2.min.js'); ?>" ></script>
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/moment.min.js'); ?>" ></script>
    <script  src="<?php echo base_url('assets/js/daterangepicker.js'); ?>" ></script>
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/countdowntime.js'); ?>" ></script>
<!--===============================================================================================-->
    <script  src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>