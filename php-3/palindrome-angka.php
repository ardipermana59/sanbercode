<?php 


function palindrome($data) {

	$dataString = strval($data);
	$panjangString = strlen($dataString);
	$banding = "";
	for ($i = $panjangString - 1; $i >= 0 ; $i--) { 
		$banding .= $dataString[$i];
	}

	if ( $banding === $dataString) {
		return true;
	} else {
		return false;
	}
	

}


function palindrome_angka($angka)
{

	if( !is_int($angka) ) {
		echo "Masukan 1 angka atau lebih";
		exit;
	}

	$angkaKeString = strval($angka);
	$isPalindrome = palindrome($angka);

	$kondisi = true;
	while ( $kondisi ) {
		
		if ( $isPalindrome > 0 ) {
			$angkaResult = ++$angka;

			if ( palindrome($angkaResult) == true ) {
				$kondisi = false;
				return $angkaResult;
				
			}
		} else {
			$angkaResult = ++$angka;
			if ( palindrome($angkaResult) == true ) {
				$kondisi = false;
				return $angkaResult;
				
			}
		}
	}

}

echo palindrome_angka(1); // 9
echo "<br/>";
echo palindrome_angka(10); // 11
echo "<br/>";
echo palindrome_angka(117); // 121
echo "<br/>";
echo palindrome_angka(175); // 181
echo "<br/>";
echo palindrome_angka(1000); // 1001
echo "<br/>";
