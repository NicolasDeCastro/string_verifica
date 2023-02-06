<?php

$url='https://teste.com.br';
$nome='marcos castro';
// verifica se existe um string especifica dentro da string 
var_dump(str_contains($nome,'castro'));

$familia=str_contains($nome,'castro');

if($familia){

    echo"eh da minha familia".PHP_EOL;

}else{
    echo"n eh da minha familia";
};


str_starts_with($url,'https');


if(str_starts_with($url,'https')){

    echo 'é um link seguro'.PHP_EOL;


}else{

    echo'não é um link seguro'.PHP_EOL;
};

str_ends_with($url,'.br');


if(str_ends_with($url,'.br')){
    echo'é um endereço br'.PHP_EOL;

}else{
    echo'não é um endereço br';
};
















