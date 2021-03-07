

<!DOCTYPE html>
<html>
  <head>
    
    <title>Online Exam</title>

   
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
      <h3><ins>Result</ins></h3>
      <ul class="instuc">
        <li>Your Score  is : <b><?php if(isset($score)) echo $score;?></b> out of 10</li>
      </ul>
    </div>
    
  </div>
</div>

</body>
</html>


  


