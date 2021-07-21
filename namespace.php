<?php
    $splAutoload = function($class){
        $class = explode("\\", $class);
        include $class[0].".php";
    };

    spl_autoload_register($splAutoload);


    use Html as H1;
    use Html2 as H2;


    $table1 = new H1\Table;
    $table1->title = "Html 1";
    $table1->numRows = 3;
    $table1->message();

    $table2 = new H2\Table;
    $table2->title = "Html 2";
    $table2->numRows = 3;
    $table2->message();
?>