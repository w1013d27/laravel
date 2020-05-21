<?php

//require __DIR__ . '../vendor/autoload.php';
include_once '../vendor/autoload.php';

$options = array(
    'cluster' => 'ap3',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '2459de6d07cfe14fbb30',
    'a0548d3596c48606f515',
    '990469',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);

