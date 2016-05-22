<?php

$jetzt = time();

/*$memcache = new Memcached();
$memcache->addserver('memcache-php', 11211);


for ($i=0; $i < 50; $i++) {
    var_dump($memcache->set("sven$i", "seast$i", 20000));
}


var_dump($memcache->getAllKeys());

var_dump($memcache->getStats());*/




$db = new mysqli("mysql-connect", "root", 'test', 'testdb');
$db->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);

//$db->query("
//    create table testtable (
//      id int,
//      name VARCHAR(255)
//    );"
//);

//$db->query("
//    insert into testtable (id, name)
//    VALUES (1, 'Tim');
//        insert into testtable (id, name)
//    VALUES (2, 'Sven');
//        insert into testtable (id, name)
//    VALUES (3, 'Helge');
//        insert into testtable (id, name)
//    VALUES (4, 'Martin');
//        insert into testtable (id, name)
//    VALUES (5, 'Falk');
//
//");


$result = $db->query("
    select * from testtable;          
    
");

var_dump('rows: ' . $result->num_rows . PHP_EOL);

var_dump('Zeit: '. (time()-$jetzt) . PHP_EOL);