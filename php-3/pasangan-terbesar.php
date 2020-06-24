<?php 

function pasangan_terbesar($angka)
{
	if( !is_int($angka) ) {
		echo "masukan Angka";
	}
	$angkaString = strval($angka);
	$tempatSementara = [];

	for($a = 0; $a < strlen($angkaString) - 1; $a++) {
		$tempatSementara[] = $angkaString[$a].$angkaString[$a+1];
	}

	$result = max($tempatSementara);
	$result = (int)$result;

	return $result;
}



echo pasangan_terbesar(641573); // 73
echo "<br/>";
echo pasangan_terbesar(12783456); // 83
echo "<br/>";
echo pasangan_terbesar(910233); // 91
echo "<br/>";
echo pasangan_terbesar(71856421); // 85
echo "<br/>";
echo pasangan_terbesar(79918293); // 99