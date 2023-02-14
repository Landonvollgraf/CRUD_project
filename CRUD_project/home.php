<?php include "header.php" ?>

<div class="container" style="margin-left:120px;">
    <br>
    <h1 class="text-center">Employee Time-Clock For A Bi-Weekly Schedule </h1>
    <a href="create.php" class="btn btn-outline-dark mb-2"> <i class="bi bi-person-plus"></i>Add Employee</a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark" style="border: 2px solid black;">
            <tr > 
                <th class="text-center" style="background:crimson;" >Pin</th>
                <th class="text-center" style="background:crimson;" >Name</th>
                <th class="text-center" style="background:crimson; " >Time clocked in after shift - Hr/Min/Sec</th>
                <th class="text-center" style="background:crimson;" >Time worked bi weekly </th>
                <th class="text-center" style="background:crimson;"  colspan="3" class="text-center">CRUD Operations</th>
            </tr>
        </thead>
    
        <tbody>
        <tr>
        <?php 
        $query="SELECT * FROM users";
        $view_students = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($view_students)){
            $id = $row['id'];
            $car = $row['car'];
            $make = $row['make'];
            $year = $row['year'];

            
        
            echo '<tr  >';
            echo "<td class=text-center >{$car}</td>";
            echo "<td class=text-center >{$make}</td>";
            echo "<td class=text-center >{$year}</td>";
            echo '<td class=text-center >
            <body>
    <div class="container">
        <div id="time">
            <span class="digit" id="hr">00</span>
            <span class="txt">Hr</span>
            <span class="digit" id="min">00</span>
            <span class="txt">Min</span>
            <span class="digit" id="sec">00</span>
            <span class="txt">Sec</span>
            <span class="digit" id="count">00</span>
        </div>
        <div id="buttons">
            <button class="btn" id="start">Clock in</button>
            <button class="btn" id="stop">Clock out</button>
            <button class="btn" id="reset">Reset</button>
        </div>
            </td>';
            echo "<td class='text-center'> <a href='view.php?student_id={$id}' class='btn'> <i class='bi bi-eye'></i> View </a></td>";
            echo "<td class='text-center'> <a href='update.php?edit&student_id={$id}' class='btn'> <i class='bi bi-pencil'></i> EDIT </a></td>";
            echo "<td class='text-center'> <a href='delete.php?delete={$id}' class='btn'> <i class='bi bi-trash'></i> DELETE </a></td";
            echo "</tr>";
        }
        ?> 

        </tr>
    </tbody>
    </table>
</div>




 <div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
</div>
<footer class="footer" style="margin-top: 280px; margin-left: 690px;">&copy;LondonBrigde Inc.</footer>

<script>
    let startBtn = document.getElementById('start');
let stopBtn = document.getElementById('stop');
let resetBtn = document.getElementById('reset');

let hour = 00;
let minute = 00;
let second = 00;
let count = 00;

startBtn.addEventListener('click', function () {
	timer = true;
	stopWatch();
});

stopBtn.addEventListener('click', function () {
	timer = false;
});

resetBtn.addEventListener('click', function () {
	timer = false;
	hour = 0;
	minute = 0;
	second = 0;
	count = 0;
	document.getElementById('hr').innerHTML = "00";
	document.getElementById('min').innerHTML = "00";
	document.getElementById('sec').innerHTML = "00";
	document.getElementById('count').innerHTML = "00";
});

function stopWatch() {
	if (timer) {
		count++;

		if (count == 60) {
			second++;
			count = 0;
		}

		if (second == 60) {
			minute++;
			second = 0;
		}

		if (minute == 60) {
			hour++;
			minute = 0;
			second = 0;
		}

		let hrString = hour;
		let minString = minute;
		let secString = second;
		let countString = count;

		if (hour < 10) {
			hrString = "0" + hrString;
		}

		if (minute < 10) {
			minString = "0" + minString;
		}

		if (second < 10) {
			secString = "0" + secString;
		}

		if (count < 10) {
			countString = "0" + countString;
		}

		document.getElementById('hr').innerHTML = hrString;
		document.getElementById('min').innerHTML = minString;
		document.getElementById('sec').innerHTML = secString;
		document.getElementById('count').innerHTML = countString;
		setTimeout(stopWatch, 10);
	}
}

</script>

     
  
 