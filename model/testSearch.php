<?php 

include('Dbh.php');
include('Vol.php');
$data = new Vol;
$table = 'vol';
$condition = ['statusV' => 'Active',
            'LieuDepart' => $_POST['LieuDepart'],
            'LieuArrive' => $_POST['LieuArrive']

];

$res = $data->selectAll($table, $condition);

echo "<pre>", print_r($res) ,"</pre>";