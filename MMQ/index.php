<?php
require_once("vendor/autoload.php");
/**
 * Created by PhpStorm.
 * User: Kobayashi
 * Date: 12/11/2017
 * Time: 18:56
 */

//$X = [1,1,1,2,2,2,2,3,3,3,3,3,4,4,4,4,5,5,5,5,5,5,6,6,6,7,7,7,8,8,9,9,10,10,11,12,13,14];
//$Y = [5,4,3,9,10,8,7,14,12,16,11,9,18,13,21,11,23,13,26,15,19,11,14,23,11,15,26,12,16,15,16,18,19,21,22,26,17,31];

$mmq = new \Classes\MMQ();

$vectorA = new \NumPHP\Core\NumArray(
//    [-1,0,1,2]
    [1,1,1,2,2,2,2,3,3,3,3,3,4,4,4,4,5,5,5,5,5,5,6,6,6,7,7,7,8,8,9,9,10,10,11,12,13,14]
);

$vectorB = new \NumPHP\Core\NumArray(
//    [0,1,2,1]
    [5,4,3,9,10,8,7,14,12,16,11,9,18,13,21,11,23,13,26,15,19,11,14,23,11,15,26,12,16,15,16,18,19,21,22,26,17,31]
);

$ln = \NumPHP\Core\NumPHP::zeros($vectorB->getSize());
echo $ln;
for ($i = 0 ; $i < $vectorB->getSize(); $i++){
    echo $vectorB->get($i);
}
echo $ln;
echo "<br>";
echo $vectorB;
//$coef = $mmq->fazMMQ($vectorA,$vectorB,1);
//$mmq->geraPontosDaFuncao($coef,5);


