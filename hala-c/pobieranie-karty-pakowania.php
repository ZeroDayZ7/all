<?php

$file = htmlentities($_POST['z1']);

if(empty($file)){
	echo 'brak karty pakowania';
}
$filename = '../logistyka/karty_pakowania/'.$file;


if (file_exists($filename)) {
    echo '1';
} else {
    echo 'Nie ma takiej karty pakowania na Hali C, lub nie została jeszcze dodana<BR><BR>
	
	<button>Dodaj kartę</button>';
}

?>