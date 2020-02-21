<?php

$not = $_POST['not'];
if ($not<=44) {
	echo "Başarısız Öğrenci";
}else if ($not>=45 && $not<=54) {
	echo "Geçer bu çocuk";
}else if ($not>=55 && $not<=69) {
	echo "Ortalama bu çocuk";
}else if ($not>=70 && $not<=84) {
	echo "İyi bu çocuk";
}else if ($not>=85 && $not<=100) {
	echo "HARİKA";
}

?>