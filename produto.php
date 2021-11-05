<?php
$array = $_POST;
echo "<h1>{$array["valor1"]} X {$array["valor2"]} = ".intval($array["valor1"])*intval($array["valor2"])."</h1>";