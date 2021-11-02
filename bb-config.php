<?php 
return array (
  'debug' => false,
  'salt' => '555ac6eba5732d067751636805ffa67a',
  'url' => 'http://localhost/boxbilling/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => 'D:\\xampp\\htdocs\\boxbilling/bb-data',
  'path_logs' => 'D:\\xampp\\htdocs\\boxbilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => '',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => 'D:\\xampp\\htdocs\\boxbilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);