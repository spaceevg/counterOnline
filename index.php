<?php

require_once __DIR__ . '/vendor/autoload.php';

$online = new CounterOnline\Online();

$online->addVisitor('155f1fe3714d8bb');
$online->getOnlineCount();

$online->clear();

print_r($visitor->id);
