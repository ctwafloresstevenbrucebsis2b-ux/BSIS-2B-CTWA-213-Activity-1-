<?php
session_start();
$host='localhost'; $db='inventory_system'; $user='root'; $pass='';
try{$pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);}
catch(PDOException $e){exit('Database connection failed. Check config.php and import database.sql.');}
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function csrf(){if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf'];}
function verify_csrf(){if(!hash_equals($_SESSION['csrf']??'',$_POST['csrf']??'')){http_response_code(419);exit('Invalid form token.');}}
function login_required(){if(empty($_SESSION['user'])){header('Location:index.php');exit;}}
function admin_required(){login_required();if($_SESSION['user']['role']!=='admin'){http_response_code(403);exit('Admin only.');}}
