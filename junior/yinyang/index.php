<?php 


class YinYang
{

	static function provera($a, $b)
	{
		if ($a > $b){
			die("Please check input values, make sure that start and end values are correct.");
		}else{
	
		while ($a <= $b) {
			$mod3 = $a % 3 === 0;
			$mod5 = $a % 5 === 0;

			if ($mod3 && $mod5){
				echo "Yin-Yang";
			}elseif ($mod3) {
				echo "Yin";
			}elseif ($mod5) {
				echo "Yang";
			}else{
				echo $a;
			}
			$a++;
			}
		}
	}
}














?>