<?php
require 'function/db.php';


//DB接続情報
//$dsn = 'mysql:host=localhost;dbname=testdb';
//$id = 'root';
//$pw = 'pass';

//画面からパラメータ取得
$val = filter_input(INPUT_POST, "busyo_cd");

if (isset($_POST["dlbtn"])) {
    try {
        //DB検索処理
        $pdo = new PDO($dsn, $id, $pw,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $sql = "SELECT * FROM mst_syain WHERE busyo_cd  = :busyocd ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':busyoco', $val, PDO::PARAM_STR);
        $stmt->execute();

        //CSV文字列生成
        $csvstr = "";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $csvstr .= $row['syain_id'] . ",";
            $csvstr .= $row['syain_name'] . ",";
            $csvstr .= $row['busyo_cd'] . "\r\n";
        }

        //CSV出力
        $fileNm = "syain.csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=' . $fileNm);
        echo mb_convert_encoding($csvstr, "SJIS", "UTF-8"); //Shift-JISに変換したい場合のみ
        exit();

    } catch (ErrorException $ex) {
        print('ErrorException:' . $ex->getMessage());
    } catch (PDOException $ex) {
        print('PDOException:' . $ex->getMessage());
    }
}