<?php
use Social\Twitter;

/*
 * Twitter OAuth settings
 * 
 * 1.) Register your application at https://dev.twitter.com/apps/new
 * 2.) From the 'Details' tab of the application page, copy/paste the 'Consumer key' and 'Consumer secret' settings
 */
$cfg = [
    'consumer_key' => '',
    'consumer_secret' => ''
];

return new Twitter\Connection($cfg['consumer_key'], $cfg['consumer_secret'], $_SESSION);
