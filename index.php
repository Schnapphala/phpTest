<?php


/*$memcache = new Memcached();
$memcache->addserver('memcache-php', 11211);


for ($i=0; $i < 50; $i++) {
    var_dump($memcache->set("sven$i", "seast$i", 20000));
}


var_dump($memcache->getAllKeys());

var_dump($memcache->getStats());*/




$db = new mysqli("mysql-connect", "root", 'test', 'testtable');
$db->query('
    inset into testtable
    (
      id int,
      name VARCHAR(255)
    );'
);




echo 'test';