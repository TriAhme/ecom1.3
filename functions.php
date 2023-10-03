<?php

function nameLengthIsValid($nametovaild){
$length = strlen($nametovaild);
$reponses=[
    'isValid'=>true,
    'msg'=>''
];
if ($length <2){
    $reponses=[
        'isValid'=>false,
        'msg'=>'non trop court'
    ];
}elseif ($length >10){
    $reponses=[
        'isValid'=>false,
        'msg'=>'non trop long'
    ];
}
return $reponses;

}