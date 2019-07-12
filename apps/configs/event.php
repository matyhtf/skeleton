<?php
$event['master'] = array(
    'type' => SPF\Queue\Redis::class,
    'async' => true,
);
return $event;