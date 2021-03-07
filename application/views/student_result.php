<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view('header');?>
  
</head>

<body>
 
<?php $this->load->view('sidebar');?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       
        <br>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
            <form action="<?= base_url();?>student_result" method="post">
              <div class="row">
                <div class="col-md-1">
                  Filter BY:
                </div>
                <div class="col-md-3">
                  Name:
                  <input type="text" name="name">
                </div>
                <div class="col-md-3">
                  Score: 
                  <input type="num" name="score">
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit">
                </div>
              </div>
            </form>
            <br>
            <br>
              <header class="panel-heading">
               Student Result
              </header>

              <div class="">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if(isset($student_result) && !empty($student_result))
                         {
                          foreach ($student_result as $key => $student_result_val) 
                          {
                            ?> <tr>
                                <td><?= $key+1;?></td>
                                <td><?= $student_result_val['student_name'];?></td>
                                <td><?= $student_result_val['username'];?></td>
                                <td><?= $student_result_val['score'];?></td>
                                
                              </tr>
                            <?php
                          }
                           
                          }
                          else
                          {
                            ?><tr><td colspan="4">No Data Found</td></tr><?php
                          }
                    ?>
                    <tr>

                  </tbody>
                </table>
                <?php if(isset($links))
              {
                echo $links;
              }?>
              </div>

            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>

    </section>
    <!--main content end-->
  </section>

    <?php $this->load->view('footer');?>

   
    

    </body>
    </html>