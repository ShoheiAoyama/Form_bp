<?php
//DB接続
function insertContact($request){
require 'db.php';

//入力・保存

$params = [
    'id' => null,
    'sei' => $request['name_sei'],
    'mei' => $request['name_mei'],
    'sex' => $request['sex'],
    'birthday' => $request['birthday'],
    'car_licence' => $request['license'],
    'tel' => $request['number'],
    'mail_address' => $request['email'],
    'pref' => $request['pref'],
    'address' => $request['address'],
    'message' => $request['msg'],
];

$count = 0;
$columus = '';
$values = '';

foreach (array_keys($params) as $key){
    if ($count++>0){
        $columus .= ',';
        $values .= ',';
    }
    $columus .= $key;
    $values .= ':'.$key;
}

$sql = 'insert into form_test ('. $columus .')values('. $values .')';

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

}