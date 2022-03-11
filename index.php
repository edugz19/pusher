<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'eu',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '7d675295ea5fe6973ac3',
    '3786f082bfecd67b0659',
    '1360535',
    $options
  );

while (true) {
    $pusher->trigger('price-btcusd', 'new-price', array(
        'value' => rand(0, 5000),
    ));
    sleep(1);
}