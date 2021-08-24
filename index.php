<?php

$categories = [];
$categories[] = 'infantil';
$categories[] = 'adolescente';
$categories[] = 'adulto';

$name = 'Talita';
$age = 27;

if($age >= 6 && $age <=12)
{
    for($i = 0; $i <= count($categories); $i++)
    {
        if($categories[$i] == 'infantil')
        echo "O nadador ".$name." irá competir na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categories); $i++)
    {
        if($categories[$i] == 'adolescente')
        echo "O nadador ".$name." irá competir na categoria de adolescente";
    }
}
else
{
    for($i = 0; $i <= count($categories); $i++)
    {
        if($categories[$i] == 'adulto')
        echo "O nadador ".$name." irá competir na categoria de adulto";
    }
}