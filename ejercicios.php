
<?php 
$arreglo = [
  'keyStr1' => 'lado',
  0 => 'ledo',
  'keyStr2' => 'lido',
  1 => 'lodo',
  2 => 'ludo'
];

echo '<br>';
foreach($arreglo as $value) {
  echo ucfirst($value .',');
};

echo '<br> decirlo al revés lo dudo. <br>';

$arreglo_reverse = array_reverse($arreglo);
foreach($arreglo_reverse as $valueReverse){
  echo ucfirst($valueReverse . ','); 
};
echo '<br> ¡Que trabajo me ha costado! <br>';
//echo($jobs[0]['title'] .'<br>');
//var_dump($jobs);

$country_cities = [
  'Peru' => ['Lima', 'Lambayeque', 'Piura'],
  'Colombia' => ['Bogota', 'Ciudad2', 'Ciudad3'],
  'Agentina' => ['Buenos aires', 'Ciudad2', 'Ciudad3'],
];
foreach($country_cities as $contry => $value){
  echo "<br/><strong>$contry : </strong>" . implode(" ", $value). '';
}

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);

echo '</br></br>';
foreach ($valores as $key1 => $value1) {
  echo $key1 .' => ' .$value1 .'</br>';
}

echo '</br>';
echo 'Los 3 numeros menores son : ';
numeros($valores);

rsort($valores);
echo '</br>';
echo 'Los 3 numeros mayores son : ';
numeros($valores);

function numeros($variable){
for ($i=0; $i < 3 ; $i++) { 
     echo $variable[$i] . ' ';
}
}
?>