<!-- Footer -->
<?php include "header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['student_id']))
    {
      $studentid = $_GET['student_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $studentid ";
      $view_students= mysqli_query($con,$query);

      while($row = mysqli_fetch_assoc($view_students))
        {
          $id = $row['id'];
          $car = $row['car'];
          $make = $row['make'];
          $year = $row['year'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $car = $_POST['car'];
      $make = $_POST['make'];
      $year = $_POST['year'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET car = '{$car}' , make = '{$make}' , year= '{$year}' WHERE id = $studentid";
      $update_student = mysqli_query($con, $query);
      echo "<script type='text/javascript'>alert('Student data updated successfully!')</script>";
    }             
?>
<!-- a BACK button to go to the home page -->
<div class="container mt-5" style="margin-top:-100px;">
      <a href="home.php" class="btn text-white bg-dark mt-5"> Back </a>
  </div>
<div style="margin-top:190px ;">
<h1 class="text-center">Update Student Details</h1>
  <div class="container " style="width: 500px;">
    <form action="" method="post">

    
      <div class="form-group">
        <label for="car" >Pin</label>
        <input type="text" name="car" class="form-control" value="<?php echo $car  ?>">
      </div>

      <div class="form-group">
        <label for="make" >Name</label>
        <input type="text" name="make"  class="form-control" value="<?php echo $make ?>">
      </div>
        
    
      <div class="form-group">
        <label for="year" >Time after shift - Hr/Min/Sec</label>
        <input type="text" name="year" placeholder="Hr/Min/Sec"  class="form-control" value="<?php echo $year  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="mt-2" style="border:solid 3px black;width:100px;height:40px;background:white;" value="update">
      </div>
    </form>    
  </div>

   
    </div>
<!-- Footer -->
<footer class="footer" style="margin-top:160px ; margin-left: 690px;">&copy;LondonBrigde Inc.</footer>