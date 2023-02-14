<?php  include 'header.php'?>
<br>
<h1 class="text-center">Student Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>

              <th class="text-center" style="background-color:crimson ; border:solid 2px black; width:100px;"  scope="col">Pin</th>
              <th class="text-center" style="background-color:crimson ; border:solid 2px black; width:100px;"  scope="col">Name</th>
              <th class="text-center" style="background-color:crimson ; border:solid 2px black; width:100px;"  scope="col">Time after shift - Hr/Min/Sec</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['student_id'])) {
                  $student_id = $_GET['student_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM users WHERE id = {$student_id} ";  
                  $view_students= mysqli_query($con,$query);            

                  while($row = mysqli_fetch_assoc($view_students))
                  {
                    $id = $row['id'];              
                    $car = $row['car'];        
                    $make = $row['make'];         
                    $year = $row['year'];     

                        echo "<tr >";
                        echo " <td class='text-center'  > {$car}</td>";
                        echo " <td class='text-center'  > {$make}</td>";
                        echo " <td class='text-center'  >{$year} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<footer class="footer" style="margin-top: 430px;" >&copy;LondonBrigde Inc.</footer>