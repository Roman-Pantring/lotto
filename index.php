 <!DOCTYPE html>
<html>
<head>
<title>Play some Lotto</title>
<style>
body{  font-family: Arial,Helvetica Neue,Helvetica,sans-serif; }
#content{ margin:auto; width:70%;}
</style>
</head>
<body>
<?php 

function lottery(){
$numbers = array();
for($i = 1; $i <= 49; $i++ ){
	//echo($i);
	array_push($numbers,$i);
}
//print_r($numbers);
$pos = rand ( 0 , count($numbers)-1 );
//echo($pos.',');
$number_one = array_splice($numbers,$pos,1);
$pos = rand ( 0 , count($numbers)-1 );
//echo($pos.',');
$number_two = array_splice($numbers,$pos,1);
$pos = rand ( 0 , count($numbers)-1 );
//echo($pos.',');
$number_three = array_splice($numbers,$pos,1);
$pos = rand ( 0 , count($numbers)-1 );
//echo($pos.',');
$number_four = array_splice($numbers,$pos,1);
$pos = rand ( 0 , count($numbers)-1 );
//echo($pos.',');
$number_five = array_splice($numbers,$pos,1);
$pos = rand ( 0 , count($numbers)-1 );
//echo($pos);
$number_six = array_splice($numbers,$pos,1);
//echo('<br> ------------------------');

$number_one = $number_one[0];
$number_two = $number_two[0];
$number_three = $number_three[0];
$number_four = $number_four[0];
$number_five = $number_five[0];
$number_six = $number_six[0];

/*echo($number_one.',');
echo($number_two.',');
echo($number_three.',');
echo($number_four.',');
echo($number_five.',');
echo($number_six);
*/

//echo('<br> ------------------------');
//print_r($numbers);
//echo('<br> ------------------------');

$lotto_number = array($number_one,$number_two,$number_three,$number_four,$number_five,$number_six);
sort($lotto_number);
//print_r($lotto_number);
$lotto = join($lotto_number,',');
//echo($lotto);
//echo('<br>');

//print_r($numbers);
return ($lotto);
}

echo '<div id="content">';

echo('<h1>Play some Lotto!</h1>');

echo ('<p>');
echo (lottery());
echo ('</p>');
echo ('<p>');
echo (lottery());
echo ('</p>');
echo ('<p>');
echo (lottery());
echo ('</p>');
echo ('<p>');
echo (lottery());
echo ('</p>');
echo ('<p>');
echo (lottery());
echo ('</p>');
echo ('<p>');
echo (lottery());
echo ('</p>');
echo '</div>';
/*lottery();
lottery();
lottery();
lottery();*/
?>
</body>

</html> 