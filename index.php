<?php 
$conn = mysqli_connect("localhost", "root", "","emp");
if(!$conn){
  echo 'Connection error: ' . mysqli_connect();}
else{
  $Employee_id=0; $First_name = "";$Middle_name = "";$Last_name = "";$Contact_number = "";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>

   <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Employee</h2>
              <p class="text-white-50 mb-5">Please enter your information</p>
              <form method="post" action="#"method="post">
              
              <input type="text" name="First_name" id="$First_name" placeholder="Input firstname"><br><br>
              <input type="text" name="Middle_name" id="$Middle_name" placeholder="Input Middlename"><br><br>
              <input type="text" name="Last_name"  id="$Last_name"placeholder="Input Lastname"><br><br>
              <input type="text" name="Contact_number" id="$Contact_number" placeholder="Input Contact Number"><br><br>
              <input type="submit" value="Submit" name="add" value="true">
<?php
if((isset($_POST['add'])))

$First_name = $_POST['First_name'];
$Middle_name = $_POST['Middle_name'];
$Last_name = $_POST['Last_name'];
$Contact_number = $_POST['Contact_number'];


$sql = "INSERT INTO information (Employee_id, First_name, Middle_name, Last_name, Contact_number) 
        VALUES ('$Employee_id','$First_name', '$Middle_name','$Last_name','$Contact_number')";

?>
              
            </div>

            </div>

            <div>
          </div>
        </div>
        </form>

</section>
  <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
</body>
  
</body>
</html>
