<?php

$one = 0;
$two = 0;
$three = 0;
$four = 0; 
$five = 0;
$six = 0; 

for ($i=1;$i<=1000;$i++) {
	
	$roll = mt_rand(1,6);
	
	if ($roll == 1) {
		
		$one++;
	}
			elseif ($roll == 2) {
				$two++;
			}
			elseif ($roll == 3) {
				$three++;
			}
			elseif ($roll == 4) {
				$four++;
			}
			elseif ($roll == 5) {
				$five++;
			}
			else {
				$six++;
			}
}
			echo "1 was rolled $one times and the percentage is: " .$one/1000*100, "%<br>";
			echo "2 was rolled $two times and the percentage is: " .$two/1000*100, "%<br>";
			echo "3 was rolled $three times and the percentage is: " .$three/1000*100, "%<br>";
			echo "4 was rolled $four times and the percentage is: " .$four/1000*100, "%<br>";
			echo "5 was rolled $five times and the percentage is: " .$five/1000*100, "%<br>";
			echo "6 was rolled $six times and the percentage is: " .$six/1000*100, "%<br>";
			
			
?>