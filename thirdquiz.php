<?php
$T=29;

if ($T<=20) {
    echo "It is really cold today.";
}
elseif ($T>20 || $T<30) {
    echo "The weather is just perfect.";
}
elseif ($T>=30 || $T<40) {
    echo "It's so hot today.";
}
elseif ($T>=40) {
    echo "Am I in the Sahara Desert?!";
}
else{
    echo "I love the temperature";
}