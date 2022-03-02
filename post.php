<?php

require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'eu',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    'b32674861d96dba51b59',
    '1b7e9050a8e0673c5e72',
    '1350562',
    $options);

$datos=[
  "usuario"=>$_POST['usuario'],
  "mensaje"=>$_POST['mensaje']
];

$pusher->trigger('chatApp', 'chatApp-event',$datos);
