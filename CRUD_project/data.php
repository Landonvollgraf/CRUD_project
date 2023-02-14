<?php
require 'connection.php';
?>

    <table >
      <?php 
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="test-create.php">Upload Image File</a>
 