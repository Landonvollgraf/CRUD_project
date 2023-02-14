<?php include "header.php" ?>

<?php 
if(isset($_POST['create'])) 
{

$car = $_POST['car'];
$make = $_POST['make'];
$year = $_POST['year'];


$query= "INSERT INTO users( car, make, year) VALUES('{$car}','{$make}','{$year}')";
$add_student = mysqli_query($con,$query);

if(!$add_student) {
    echo "something went wrong" . mysqli_error($con);
}

else{
    echo "<script type='text/javascript'>alert('student added successfully!')</script>";
}
}
?>

<h1 class="">Add student details</h1>
<div class="">
<form action="" method="post">

    <div class="form-group">
        <label for="car" class="">Last 4 of phone #</label>
        <input type="text" name="car" class="form-control">
    </div>

    <div class="form-group">
    <label for="make" class="form-label">Firstname</label>
    <input type="text" name="make" class="form-control">
</div>


<div class="form-group">
    <input type="submit" name="create" class="btn btn-primary mt-2" value="submit">
</div>
</form>
</div>

<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
</div>

<footer class="footer" style="margin-top: 300px; margin-left: 690px;">&copy;LondonBrigde Inc.</footer>




