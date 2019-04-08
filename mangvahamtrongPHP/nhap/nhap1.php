<?php
if (isset($_POST['submit'])){
$data = $_POST['input'];
$Number = explode(",", $data);
$length = count($Number);
$max = $Number[0];
for ($i= 0; $i< $length ; $i++) {
	if ($Number[$i] > $max  )
		 $max = $Number[$i] ;
}
echo 'Max value in array input is ' .$max;
}
?>