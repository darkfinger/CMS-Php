<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 5/29/2018
 * Time: 4:45 PM
 */
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','cms_php');

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
