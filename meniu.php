<?php
$elemente_meniu = [
    'element1_site'=>['link'=>'element1.php'],
    'element2_site'=>['link'=>'element2.php'],
    'element3_site'=>['link'=>'element3.php'],
    'element4_site'=>['link'=>'element4.php']
];

$meniu ='<div>              "Site 2 Garla  Eugeniu" <ul>';
foreach ($elemente_meniu as $button => $date_button) {
$meniu .='<li><a href="'.$date_button ['link'].'">'.$button.'</a></li>';
}
$meniu .='</ul></div>';

?>