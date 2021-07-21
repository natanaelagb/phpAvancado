<?php

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));
// Retorna um array no lugar de um objeto
?>