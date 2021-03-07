

<!DOCTYPE html>
<html>
  <head>
    
    <title>Simple Quiz</title>

   
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    .full
    {
      background-color: #419D78;
    color: #EFD0CA;
    text-align: center;
    margin-top: 20px;
    font-size: 2rem;
    }
    .full h3,ul li{
      font-size: 0.75rem;
      text-align: left;
    }
    .full ul{
      list-style-position: inside;
    }
    .button {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 10px;
    cursor: pointer;
    margin-top: 40px;
    font-weight: 500;
}
.full
{
  position: static;
  background: #fff;
  border: 1px solid #000;
}
.logos>img
{
  padding-top: 30px;
}
.exams>h3
{
  color: #000;
  font-weight: 700;
  font-size: 20px;
  padding-left: 60px;
  margin-top: 10px;
}
.instuc>li
{
  color: #000;
  font-weight: 500;
  font-size: 15px;
}
.card
{
  margin-top: 50px;
}
.rights
{
  color: #000;
  font-weight: 500;
  font-size: 20px;
}
  </style>
  </head>

  <body>
<div class="container-fluid sticky-top full">
  <div class="row">
    <div class="col-md-4 logos">
     
   
    </div>
    <div class="col-md-4 exams">
      <h3><ins>Exam Instuctions</ins></h3>
      <ul class="instuc">
        <li>No Negative Marking.</li>
        <li>Exam Time is 10:00 min</li>
      </ul>
    </div>
    
  </div>
</div>


 <?php if(isset($result) && !empty($result))
  {
    ?>
<div id="myDIV" style="padding: 10px 30px; background-color: #e9ecef;">
  <div class="rights">
  <label style="float: right;">Time left :<span id="timer"></span></label>
</div>
  <form id="form_sub" action="<?= base_url();?>check_ans" method="post" >
 <?php
    $k=1;
    ?><input type="hidden" name="result" value="<?php print_r($result);?>"><?php
    foreach ($result as $key => $value)
    {
      
      ?> <div class="card">
               <h4 class="card-header">
                <?php echo $key+1; echo " . ";?>
                <?php echo $value->question;?>
               </h4>
                <div class="card-body">
                    <input type="radio" name="quizcheck[<?php echo $k;?>]" value="<?php echo $value->correct_answer;?>">
                    <input type="hidden" readonly="" name="check_ans[<?php echo $k;?>]" value="<?= $value->correct_answer;?>">
                      <?php echo $value->correct_answer;?>
                </div>
               <?php
               
                foreach ($value->incorrect_answers as $key1 => $value1)
                {
                  ?>
                  <div class="card-body">
                    <input type="radio" name="quizcheck[<?php echo $k;?>]" value="<?php echo $value1;?>">
                      <?php echo $value1;?>
                  </div>
                  <?php
                }
              ?>
          </div>
          <?php
          $k++;
    }
  
   if(isset($id) && !empty($id))
   {
    ?><input type="hidden" name="id" id="stud_id" value="<?= $id;?>"><?php
   }
  ?>
   <input type="submit" class="btn btn-success" name="submit" value="submit">

      </form>
</div>
<?php
}
else
{
  ?><h3 style="color: red">Somthing Went Wrong</h3><?php
}?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

window.onload = function() 
{
  startTimer();
};
</script>

 <script type="text/javascript">

document.getElementById('timer').innerHTML = '10:00';
  //03 + ":" + 00 ;


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0)
  {
   $.ajax({
        url  : "<?= base_url();?>check_ans?type=ajx",
        type : "POST",
         data :$('#form_sub').serialize(),
        dataType:'json',
        success : function(data)
        {
          if(data.status==true)
          {
             location.replace('<?= base_url();?>result_show?id='+$('#stud_id').val());

          }
          else
          {
             location.replace('<?= base_url();?>student_reg');
          }
        
        }
      });
}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  // if(sec == 0 && h == 0){ alert('stop it')};
}
</script>


</body>
</html>




