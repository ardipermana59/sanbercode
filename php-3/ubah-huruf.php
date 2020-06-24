<?php 


function ubah_huruf($string)
{

	$alfabet =['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
	$result = $string;


	$panjangString = strlen($string);

	for($i = 0; $i < $panjangString; $i++) {
		$nextStr = array_search($string[$i], $alfabet) + 1;

		if ($result[$i] == 'z') {
			$result[$i] = $alfabet[0];
		} else {
			$result[$i] = $alfabet[$nextStr];
		}

		
	}
	return $result;
}


echo ubah_huruf('wow'); // xpx
echo "<br/>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br/>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br/>";
echo ubah_huruf('keren'); // lfsfo
echo "<br/>";
echo ubah_huruf('semangat');
