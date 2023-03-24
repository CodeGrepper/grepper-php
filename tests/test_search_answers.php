<?php
require_once '../init.php';

$grepper = new \Grepper\GrepperClient('your_api_key_here');
$answers = $grepper->answers->search([
    'query' => 'javascript loop array backwords'
]);
print_r($answers);
