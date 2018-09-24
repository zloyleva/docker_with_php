<?php
/**
 * Created by PhpStorm.
 * User: zloyleva
 * Date: 08.09.18
 * Time: 19:47
 */


$db = new PDO("mysql:host=mysql;dbname=forge", "root", "123456");


echo "<pre>";
foreach ($db->query('SELECT * FROM forge.articles') as $row){
    print_r($row);
}
echo "</pre>";