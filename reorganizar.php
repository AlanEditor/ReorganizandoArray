<?php

//Declaração da variavel
$numero = [];
$quantidadeDeNumeros = rand(2,10);


//Populando o array
for($i = 0; $i < $quantidadeDeNumeros; $i++)
{
    array_push($numero, rand(-17,100));
}


function sequenciaCrescente($arr)
{
    sort($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

}

echo '<pre>';
print_r($numero);
echo '<br>';

echo '====================';
sequenciaCrescente($numero);







?>