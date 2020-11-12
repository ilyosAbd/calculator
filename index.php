<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <!---->
 <div class="container">
  <div class="row">
    <div class="col-10 mx-auto col-sm-5">
	<div style="border: 30px solid 	#47476b; margin-top: 50px;">
	  <h2>Calculator</h2>
    <form action="" method="post">
	<div style="border: 5px solid #85adad; ">
        <input type="text" style="width: 100%; height: 70px;" name="num1" value="" placeholder="Enter the first number"><br>
	</div>	
	<div style="border: 5px solid #85adad; ">	
	    <input type="text" style="width: 100%; height: 70px;" name="num2" value="" placeholder="Enter the second number">
    </div>	
		<br>
		<br>
		<div class="container">
  <div class="row">
    <div class="col"><input type="submit" class="operator btn btn-info" style="font-size: 40px;" name="a" value=" + "></div>
    <div class="col"><input type="submit" class="operator btn btn-info" style="font-size: 50px;" name="s" value=" - "></div>
	   <br><br><br><br>
    <div class="w-100"></div>
    <div class="col"><input type="submit" class="operator btn btn-info" style="font-size: 50px;" name="m" value=" * "></div>
    <div class="col"><input type="submit" class="operator btn btn-info" style="font-size: 50px;"name="d" value=" / "></div>
  </div>
</div>
    </form>
<div style="border: 5px solid #85adad; font-size: 30px;">
<?php

if(isset($_POST['a'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$add = $num1 + $num2;
    echo "Result is " .$add;
}

if(isset($_POST['s'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$s = $num1 - $num2;
    echo "Result is " .$s;
}

if(isset($_POST['m'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$mult = $num1 * $num2;
    echo "Result is " .$mult;
}

if(isset($_POST['d'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$div = $num1 / $num2;
    echo "Result is " .$div;
}
?>
</div>
</div>
    </div>
  </div>
