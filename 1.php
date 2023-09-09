<!DOCTYPE html>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $val = $_POST['number'];
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'schedule_db';
    $conn = new mysqli($host, $username, $password, $db_name);
    if($conn->connect_error){
      die("error");
    }
    else{
      if($val == 1){
        $value_1 = $_POST['timeline_1_1_input'];
        $value_2 = $_POST['timeline_1_2_input'];
        $query = "UPDATE schedule_table SET `timeline_1_1` = '$value_1' , `timeline_1_2` = '$value_2' WHERE `id`= '1'";
        $result = $conn->query($query);

      }
      elseif($val == 2){
        $value_1 = $_POST['timeline_2_1_input'];
        $value_2 = $_POST['timeline_2_2_input'];
        $query = "UPDATE schedule_table SET `timeline_2_1` = '$value_1' , `timeline_2_2` = '$value_2' WHERE `id`= '1'";
        $result = $conn->query($query);

      }
      elseif($val == 3){
        $value_1 = $_POST['timeline_3_1_input'];
        $value_2 = $_POST['timeline_3_2_input'];
        $query = "UPDATE schedule_table SET `timeline_3_1` = '$value_1' , `timeline_3_2` = '$value_2' WHERE `id`= '1'";
        $result = $conn->query($query);

      }
      elseif($val == 4){
        $value_1 = $_POST['timeline_4_1_input'];
        $value_2 = $_POST['timeline_4_2_input'];
        $query = "UPDATE schedule_table SET `timeline_4_1` = '$value_1' , `timeline_4_2` = '$value_2' WHERE `id`= '1'";
        $result = $conn->query($query);

      }
      elseif($val == 5){
        $value_1 = $_POST['timeline_5_1_input'];
        $value_2 = $_POST['timeline_5_2_input'];
        $query = "UPDATE schedule_table SET `timeline_5_1` = '$value_1' , `timeline_5_2` = '$value_2' WHERE `id`= '1'";
        $result = $conn->query($query);

      }
    }
  }
 ?>

<html lang="en" dir="ltr">
<style>
  body {
  background-color: #111010;
}
#img1 {
  position: absolute;
  width: 70px;
  height: 70px;
  object-fit: cover;
  border-radius: 50%;
  border: 2px dashed;
  border-color: white;
}
#img1:hover {
  border: 2px solid;
  animation: another-one;
  animation-duration: 2s;
  border-color: white;
  transition: 2s  ease;
}
#demo {
  position: absolute;
  top: 200px;
  color: white;
}

#form1 {
  display: none;
  position: fixed;
  bottom: 20px;
}
#shape1_2 {
  display: block;
  background: gray;
  position: relative;
  left: 80px;
  bottom: 30px;
  animation-name: ;
  animation-duration: 2s;
  height: 600px;
  width: 1000px;
  border-radius: 10px;
  padding: 10px;
}
#form2 {
  display: none;
  position: fixed;
  bottom: 20px;
}
#form3 {
  display: none;
  position: fixed;
  bottom: 20px;
}#form4 {
  display: none;
  position: fixed;
  bottom: 20px;
}#form5 {
  display: none;
  position: fixed;
  bottom: 20px;
}
#shape2_2 {
  display: block;
  background: gray;
  position: relative;
  left: 80px;
  bottom: 30px;
  animation-name: ;
  animation-duration: 2s;
  height: 600px;
  width: 1000px;
  border-radius: 10px;
  padding: 10px;
}
#title2_1 {
  display: block;
  position: absolute;
  top: 20px;
  right: 20px;
}
#input2_1_1 {
  color: black;
  position: absolute;
  font-size: 26px;
  top: 75px;
  right: 724px;
  font: 1.50rem  sans-serif;
}
#input2_2_1 {
  color: black;
  position: absolute;
  font-size: 26px;
  top: 220px;
  right: 805px;
  font: 1.50rem  sans-serif;
}
#input2_1 {
  position: absolute;
  top: 130px;
  right: 365px;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 50%;
  padding: 0.5rem 0.75rem;
}
#input2_2 {
  position: absolute;
  top:260px;
  right: 265px;
  border: 2px solid #333;
  background-color: white;
  border-radius: 0.25rem;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 60%;
  height: 35%;
  padding: 0.5rem 0.75rem;
}
#input3_1 {
  position: absolute;
  top: 130px;
  right: 365px;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 50%;
  padding: 0.5rem 0.75rem;
}
#input3_2 {
  position: absolute;
  top:260px;
  right: 265px;
  border: 2px solid #333;
  background-color: white;
  border-radius: 0.25rem;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 60%;
  height: 35%;
  padding: 0.5rem 0.75rem;
}
#input4_1 {
  position: absolute;
  top: 130px;
  right: 365px;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 50%;
  padding: 0.5rem 0.75rem;
}
#input4_2 {
  position: absolute;
  top:260px;
  right: 265px;
  border: 2px solid #333;
  background-color: white;
  border-radius: 0.25rem;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 60%;
  height: 35%;
  padding: 0.5rem 0.75rem;
}
#input5_1 {
  position: absolute;
  top: 130px;
  right: 365px;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 50%;
  padding: 0.5rem 0.75rem;
}
#input5_2 {
  position: absolute;
  top:260px;
  right: 265px;
  border: 2px solid #333;
  background-color: white;
  border-radius: 0.25rem;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 60%;
  height: 35%;
  padding: 0.5rem 0.75rem;
}
#input1_1_1 {
  color: black;
  position: absolute;
  font-size: 26px;
  top: 75px;
  right: 724px;
  font: 1.50rem  sans-serif;
}
#input1_2_1 {
  color: black;
  position: absolute;
  font-size: 26px;
  top: 220px;
  right: 805px;
  font: 1.50rem  sans-serif;
}
#input1_1 {
  position: absolute;
  top: 130px;
  right: 365px;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 50%;
  padding: 0.5rem 0.75rem;
}
#input1_2 {
  position: absolute;
  top:260px;
  right: 265px;
  border: 2px solid #333;
  background-color: white;
  border-radius: 0.25rem;
  font: 1.25rem / 1.5 sans-serif;
  display: block;
  box-sizing: border-box;
  width: 60%;
  height: 35%;
  padding: 0.5rem 0.75rem;
}
#enter {
  position: absolute;
  top: 500px;
  right: 815px;
  padding: 10px;
  border-radius: 10%;
  background-color: hsl(213, 73%, 50%);
  color: white;

}
#enter:hover {
  background-color: white;
  color: hsl(213, 73%, 50%);
}
@keyframes in2_2 {
  0% {
    opacity: 0%;
  }
  50% {
    opacity: 50%;
  }
  100% {
    opacity: 100%;
  }
}
#theme {
  position: absolute;
  top: 200px;
  right: 400px;
}
#button1:hover {
  background: #101011;
  border-radius: 8%;
  padding: 10px 35px 10px 35px;
  color: white;
  position: absolute;
  top: 200px;
}
#new1 {
  color: white;
  position: absolute;
  top: 200px;
  right: 500px;
}
#answer {
  color: white;
  position: absolute;
  top: 200px;
  right: 500px;

}
#timeline {
  display: block;
}
#button1 {
  background: white;
  border-radius: 8%;
  padding: 10px 35px 10px 35px;
  color: black;
  position: absolute;
  top: 200px;
}

/* Timeline Container */
.timeline {
  background: var(--primary-color);
  margin: 20px auto;
  padding: 20px;
  position: absolute;
  right: 300px;
  top: 200px;
}
#newbtn1 {
  position: absolute;
  right: 250px;
  top: 200px;
}
#resultBox {
  color: white;
}
/* Card container */
.card {
  position: relative;
  max-width: 400px;
  width: 400px;
}
#sasuke {
  display: none;
  position: absolute;
  top: 200px;
  right: 200px;
}
#naruto {
  display: none;
  position: absolute;
  top: 270px;
  right: 320px;
}
#fName {
  display: none;
  position: absolute;
  top: 200px;
  right: 200px;
}
#sakura {
  display: none;
  position: absolute;
  top: 300px;
  right: 200px;
}
#sposttd {
  display: block;
  position: absolute;

}
#button1_1 {
  display: block;
  position: absolute;
  right: 5px;
  top: 10px;
}
#button2 {
  display: block;
  position: absolute;
  top: 10px;

}
#button3 {
  display: block;
  position: absolute;
  top: 10px;
  right: 5px;
}
#button4 {
  display: block;
  position: absolute;
  top: 10px;
}
#button5 {
  display: block;
  position: absolute;
  top: 10px;
  right: 5px;
}
#sName {
  display: none;
  position: absolute;
  top: 300px;
  right: 200px;
}
/* setting padding based on even or odd */
.card:nth-child(odd) {
  padding: 30px 0 30px 30px;
}
.card:nth-child(even) {
  padding: 30px 30px 30px 0;
}
/* Global ::before */
.card::before {
  content: "";
  position: absolute;
  width: 50%;
  border: solid orangered;
}

/* Setting the border of top, bottom, left */
.card:nth-child(odd)::before {
  left: 0px;
  top: -4.5px;
  bottom: -4.5px;
  border-width: 5px 0 5px 5px;
  border-radius: 50px 0 0 50px;
}

/* Setting the top and bottom to "-5px" because earlier it was out of a pixel in mobile devices */
@media only screen and (max-width: 400px) {
  .card:nth-child(odd)::before {
    top: -5px;
    bottom: -5px;
  }
}

/* Setting the border of top, bottom, right */
.card:nth-child(even)::before {
  right: 0;
  top: 0;
  bottom: 0;
  border-width: 5px 5px 5px 0;
  border-radius: 0 50px 50px 0;
}

/* Removing the border if it is the first card */
.card:first-child::before {
  border-top: 0;
  border-top-left-radius: 0;
}

/* Removing the border if it is the last card  and it's odd */
.card:last-child:nth-child(odd)::before {
  border-bottom: 0;
  border-bottom-left-radius: 0;
}

/* Removing the border if it is the last card  and it's even */
.card:last-child:nth-child(even)::before {
  border-bottom: 0;
  border-bottom-right-radius: 0;
}

/* Information about the timeline */
.info {
  display: flex;
  flex-direction: column;
  background: #333;
  color: gray;
  border-radius: 10px;
  padding: 10px;
}

/* Title of the card */
.title {
  color: orangered;
  position: relative;
}

/* Timeline dot  */
.title::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  background: white;
  border-radius: 999px;
  border: 3px solid orangered;
}

/* text right if the card is even  */
.card:nth-child(even) > .info > .title {
  text-align: right;
}

/* setting dot to the left if the card is odd */
.card:nth-child(odd) > .info > .title::before {
  left: -45px;
}

/* setting dot to the right if the card is odd */
.card:nth-child(even) > .info > .title::before {
  right: -45px;
}

</style>
<script>
function submit1() {
let input1 = document.getElementById('input1_1').value
let input2 = document.getElementById('input1_2').value
document.getElementById('output1_1').innerHTML = "<b>"+input1+"<\/b>";
document.getElementById('output1_2').innerHTML = "<b>"+input2+"<\/b>";

document.getElementById('form1').style.display = "none";

}
function submit2() {
let input1 = document.getElementById('input2_1').value
let input2 = document.getElementById('input2_2').value
document.getElementById('output2_1').innerHTML = "<b>"+input1+"<\/b>";
document.getElementById('output2_2').innerHTML = "<b>"+input2+"<\/b>";

document.getElementById('form2').style.display = "none";

}
function submit3() {
let input1 = document.getElementById('input3_1').value
let input2 = document.getElementById('input3_2').value
document.getElementById('output3_1').innerHTML = "<b>"+input1+"<\/b>";
document.getElementById('output3_2').innerHTML = "<b>"+input2+"<\/b>";

document.getElementById('form3').style.display = "none";

}
function submit4() {
let input1 = document.getElementById('input4_1').value
let input2 = document.getElementById('input4_2').value
document.getElementById('output4_1').innerHTML = "<b>"+input1+"<\/b>";
document.getElementById('output4_2').innerHTML = "<b>"+input2+"<\/b>";

document.getElementById('form4').style.display = "none";

}
function submit5() {
let input1 = document.getElementById('input5_1').value
let input2 = document.getElementById('input5_2').value
document.getElementById('output5_1').innerHTML = "<b>"+input1+"<\/b>";
document.getElementById('output5_2').innerHTML = "<b>"+input2+"<\/b>";
document.getElementById('form5').style.display = "none";

}

function myFunction() {
  let btn2 = document.getElementById('button2');
if(document.getElementById('timeline').style.display == "block"){
  document.getElementById('timeline').style.display = "none";
  btn2.style.display = "none";
 }
else {
  document.getElementById('timeline').style.display = "block";
  btn2.style.display = "block";
}
}
function Open2() {
document.getElementById('form1').style.display = "block";
}
function Open3() {
document.getElementById('form2').style.display = "block";
}
function Open4() {
document.getElementById('form3').style.display = "block";
}
function Open5() {
document.getElementById('form4').style.display = "block";
}
function Open6() {
document.getElementById('form5').style.display = "block";
}


function showUserInput() {
let userInput = document.getElementById("fName").value;
document.getElementById("resultBox").innerHTML = "<b>"+userInput+"<\/b>";
document.getElementById("fName").style.display = "none";
document.getElementById("sasuke").style.display = "none";

}
function showUserInput1() {
let userInput = document.getElementById("sName").value;
document.getElementById("newone1").innerHTML = "<b>"+userInput+"<\/b>";
document.getElementById("sName").style.display = "none";
document.getElementById("sakura").style.display = "none";

}
</script>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <a href="home.html">
    <img src="3.jpeg" id="img1"></img>
    </a>
  <button onclick="myFunction()" type="button" id="button1">Timeline</button>

<div id="timeline">
	<div class="timeline">
  <div class="outer">
    <div class="card">
      <div class="info">
<?php
$host = "localhost";
$user_name = "root";
$pass = "";
$db_name = "schedule_db";
$conn = new mysqli($host, $user_name, $pass, $db_name);
$query = "SELECT * FROM schedule_table";
if($conn->connect_error){
  echo "error";
}
if($conn->query($query)){
  $result = $conn->query($query);
  if($result){
    $row = $result->fetch_assoc();
        $GLOBALS['1_1'] = $row['timeline_1_1'];
        $GLOBALS['2_1'] = $row['timeline_2_1'];
        $GLOBALS['3_1'] = $row['timeline_3_1'];
        $GLOBALS['4_1'] = $row['timeline_4_1'];
        $GLOBALS['5_1'] = $row['timeline_5_1'];
        $GLOBALS['1_2'] = $row['timeline_1_2'];
$GLOBALS['2_2'] = $row['timeline_2_2'];
$GLOBALS['3_2'] = $row['timeline_3_2'];
$GLOBALS['4_2'] = $row['timeline_4_2'];
$GLOBALS['5_2'] = $row['timeline_5_2'];
        $GLOBALS['yes'] = "newone";
      }
    }
    else {
       $GLOBALS['yes'] = "nothing";
    }
?>
<button id="button1_1" onclick="Open2()">edit</button>
        <h3 class="title" id="output1_1"> <?php echo $GLOBALS['1_1']; ?></h3>
        <p id="output1_2"><?php echo $GLOBALS['1_2']; ?></p>
      </div>
    </div>
    <div class="card">
      <div class="info">
      	<button id="button2" onclick="Open3()">edit</button>
        <h3 id="output2_1" class="title"><?php echo $GLOBALS['2_1']; ?></h3>
        <p id="output2_2"><?php echo $GLOBALS['2_2']; ?></p>
      </div>
    </div>
    <div class="card">
      <div class="info">
      	<button id="button3" onclick="Open4()">edit</button>

        <h3 id="output3_1" class="title"> <?php echo $GLOBALS['3_1']; ?> </h3>
        <p id="output3_2"><?php echo $GLOBALS['3_2']; ?></p>

      </div>
    </div>
    <div class="card">
      <div class="info">
      	<button id="button4" onclick="Open5()">edit</button>
        <h3 id="output4_1" class="title"><?php echo $GLOBALS['4_1']; ?></h3>
        <p id="output4_2"><?php echo $GLOBALS['4_2']; ?></p>
      </div>
    </div>
    <div class="card">
      <div class="info">
      	<button id="button5" onclick="Open6()">edit</button>
        <h3 id="output5_1" class="title"><?php echo $GLOBALS['5_1']; ?></h3>
        <p id="output5_2"><?php echo $GLOBALS['5_2']; ?></p>
      </div>
    </div>
  </div>
</div>
</div>
<!--
<div id="form1">
	<div id="shape1_2">
	</div>
	<label id="input1_1_1">Enter Subject</label>
	<input type="text" name="" id="input1_1">
	<label id="input1_2_1">To do:</label>
	<textarea id="input1_2"> </textarea>
	<button onclick="submit1()" id="enter">Enter
	</button>
</div>



<div id="form2">
	<div id="shape2_2">
	</div>
	<label id="input2_1_1">Enter Subject</label>
	<input type="text" name="" id="input2_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input2_2"> </textarea>
	<button onclick="submit2()" id="enter">Enter
	</button>
</div>
!-->
<form id="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div id="shape1_2">
	</div>
	<label id="input1_1_1">Enter Subject</label>
	<input type="text" name="timeline_1_1_input" id="input1_1" required>
	<label id="input1_2_1">To do:</label>
	<textarea id="input1_2" name="timeline_1_2_input" required> </textarea>
  <button id="enter" type="submit">Enter
	</button>
  <input type="hidden" name="number" value="1">
</form>
<form id="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div id="shape2_2">
	</div>
  <label id="input2_1_1">Enter Subject</label>
	<input type="text" name="timeline_2_1_input" id="input2_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input2_2" name="timeline_2_2_input"> </textarea>
  <input type="hidden" name="number" value="2">
	<button id="enter" type="submit">Enter
	</button>
</form>
<form id="form3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <div id="shape2_2">
	</div>
	<label id="input2_1_1">Enter Subject</label>
	<input type="text" name="timeline_3_1_input" id="input3_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input3_2" name="timeline_3_2_input"> </textarea>
  <input type="hidden" name="number" value="3">
	<button id="enter" type="submit">Enter
	</button>
</form>
<form id="form4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <div id="shape2_2">
	</div>
	<label id="input2_1_1">Enter Subject</label>
	<input type="text" name="timeline_4_1_input" id="input4_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input4_2" name="timeline_4_2_input"> </textarea>
  <input type="hidden" name="number" value="4">
	<button type="submit" id="enter">Enter
	</button>
</form>

<form id="form5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div id="shape2_2">
  </div>
  <label id="input2_1_1">Enter Subject</label>
	<input type="text" name="timeline_5_1_input" id="input5_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input5_2" name="timeline_5_2_input"> </textarea>
  <input type="hidden" name="number" value="5">
  <button type="submit" id="enter">Enter
	</button>
</form>
<!--<div id="form3">
	<div id="shape2_2">
	</div>
	<label id="input2_1_1">Enter Subject</label>
	<input type="text" name="" id="input3_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input3_2"> </textarea>
	<button onclick="submit3()" id="enter">Enter
	</button>
</div>!-->
<!--<div id="form4">
	<div id="shape2_2">
	</div>
	<label id="input2_1_1">Enter Subject</label>
	<input type="text" name="" id="input4_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input4_2"> </textarea>
	<button onclick="submit4()" id="enter">Enter
	</button>
</div>
!-->
<!--<div id="form5">
	<div id="shape2_2">
	</div>
	<label id="input2_1_1">Enter Subject</label>
	<input type="text" name="" id="input5_1">
	<label id="input2_2_1">To do:</label>
	<textarea id="input5_2"> </textarea>
	<button onclick="submit5()" id="enter">Enter
	</button>
</div>
!-->
</body>
</html>
