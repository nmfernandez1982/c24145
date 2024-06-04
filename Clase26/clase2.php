<?php

$variable=42;
$variable="Nicolas";
$variable=7.75;

//getType

$variable=42;
echo gettype($variable)."\n";

$variable="Nicolas";
echo gettype($variable)."\n";

$variable=true;
echo gettype($variable)."\n";

$variable=[1,2,3,4,5];
echo gettype($variable)."\n";

$variable=null;
echo gettype($variable)."\n";

echo("--------------")."\n";

//vardump()
$variable=42;
var_dump($variable)."\n";

$variable=" Nicolas ";
var_dump($variable)."\n";

$variable=false;
var_dump($variable)."\n";

$variable=[1,2,3,4];
var_dump($variable)."\n";

$variable=null;
var_dump($variable)."\n";

echo("--------------")."\n";


//is_

$variable=42;
echo is_int($variable)."\n";

$variable=true;
echo is_bool($variable)."\n";

$variable=[1,2,23,4];
echo is_array($variable)."\n";

$variable="42";
echo is_string($variable)."\n";





?>