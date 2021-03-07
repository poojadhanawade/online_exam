<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="shortcut icon" href="<?= base_url();?>assets/img/favicon.png">

  <title>Online Exam</title>

  <!-- Bootstrap CSS -->
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?= base_url();?>assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?= base_url();?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?= base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/css/style-responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="container">


    <form class="login-form" action="<?= base_url();?>login" method="POST">
      <div class="login-wrap">

        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <?php if($this->session->flashdata('response'))
          {
            $response=$this->session->flashdata('response');
           ?> <div class="alert alert-block alert-<?= $response['alert_type'];?> fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                  <strong style="color:red"><?= $response['msg'];?></strong>
                </div>
           <?php
          }?>
          <h3><center>Admin Login</center></h3>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" name="user_email" placeholder="Email Id" autofocus required="">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="user_pass" class="form-control" placeholder="Password" required="">
        </div>
       
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
  </div>


</body>

</html>
