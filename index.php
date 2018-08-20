<?php
/**
 * Created by PhpStorm.
 * User: mihailvysochin
 * Date: 20.08.2018
 * Time: 14:27
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'MetaTaskResolver.php';

$taskResolve = new MetaTaskResolver();

$text = '10-123*(a-f/(12+22))';
echo "task 1 " . PHP_EOL;
echo $text . PHP_EOL;

$taskResolve->task1($text);


echo "task 2 " . PHP_EOL;
$taskResolve->task2();
?>
