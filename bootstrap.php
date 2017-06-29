<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/6/29
 * Time: 11:17
 */
require 'vendor/autoload.php';

$database = [
    'driver'    => 'mysql',
    'host'      => '192.168.1.17',
    'database'  => 'mlm_test',
    'username'  => 'root',
    'password'  => 'meilimei',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];


use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as DB;//如果你不喜欢这个名称，as DB;就好

$capsule = new DB;

// 创建链接
$capsule->addConnection($database);

// 设置全局静态可访问
$capsule->setAsGlobal();

// 启动Eloquent
$capsule->bootEloquent();