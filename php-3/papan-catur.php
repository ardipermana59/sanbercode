<?php 

function papan_catur($angka)
{
	for( $baris = 1; $baris <= $angka; $baris++ ){
		for( $kolom = 1; $kolom <= $angka; $kolom++ ){
			if ($baris%2 != 0) {
				echo "#&nbsp";
			} else if ($baris%2 == 0 && $kolom > 1) {
				echo "&nbsp#";
			}
		}
		echo "<br>";
	}
}

papan_catur(8);