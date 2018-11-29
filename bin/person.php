#!/usr/bin/env php
<?php
require_once __DIR__."/../src/Person.php";
require_once __DIR__."/../src/console_helper.php";
require_once __DIR__."/../src/PersonAgeValidationException.php";

$john =new Person('john', 'ex@i.ua', '12');
$john->setAge(16);

writeln($john);

$alisa = new Person('alisa123', 'bubu@i.ua', '16');
$alisa->setAge(16);
writeln($alisa);

$mark = new Person('mark','mark@i.ua', '63');
try{
    $mark->setAge(63);
}catch (PersonAgeValidationException $e){
    echo writeln('[ERROR] ' . $e->getMessage());
}

writeln(Person::getOldest());