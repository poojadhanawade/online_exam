<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="shortcut icon" href="<?= base_url();?>assets/img/favicon.png">

  <title>Online exam</title>

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

<body >

  <div class="container">


    <form class="login-form" action="<?= base_url();?>start_exam" method="POST">
      <div class="login-wrap">
        <!-- <p class="login-img"><i class="icon_lock_alt"></i></p> -->
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
          <h3><center>Student Registration</center></h3>
        
        <div class="input-group1"> Name
          <input type="text" name="student_name" class="form-control" placeholder="Name" required="">
        </div>
        <div class="input-group1">
          Email Id
          <input type="email" class="form-control" name="username"   placeholder="Email Id" value="" required="">
        </div>
        <br>
        <button class="btn btn-info btn-lg btn-block" type="submit">Submit</button>
      </div>
    </form>

  </div>


</body>

</html>
