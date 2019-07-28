
<style type="text/css">
	.board{
		text-align: center;
	}
span{
	font-size: 35px;
}
</style>
<body>
<div class="board">

<h1>Temperature Convertor</h1>

<form method="post" action="<?= $_SERVER['PHP_SELF']?>">
	
	<div>
		<input type="number" name="variable" placeholder="Degree Celcuis &#8451" style="width:300px;margin:20px;height:35px;font-size: 20px">
	</div>
	
	<div>
		<input type="submit" name="convert" value="convert to  degree fahrenheit" style="width: 300px;font-size: 20px;">
	</div>
</form>

<?php
	
    $degree_celcuis =  $_POST['variable'];
  
  	$degree_fahrenheit = (1.8*$degree_celcuis)+32;
  	$degree_fahrenheit =round($degree_fahrenheit);

  	if (empty($degree_celcuis)):
  		echo "<span> 0&#x2109</span>";
   else:
   	echo "<span>$degree_fahrenheit &#x2109</span>";
   endif;

?>

</div>

</body>