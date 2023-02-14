 <!-- Footer -->
 <?php  include "header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $student_id= $_GET['delete'];

         // SQL query to delete data from user table where id = $studentid
         $query = "DELETE FROM users WHERE id = {$student_id}"; 
         $delete_query= mysqli_query($con, $query);
         header("Location: home.php");
     }
     


              ?>


  <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
  <!-- Footer -->
  <footer class="footer">&copy;LondonBrigde Inc.</footer>