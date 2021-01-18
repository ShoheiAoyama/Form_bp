<?php
require 'function/db.php';

$file_path = "form_test.csv"; //ファイル名
$export_csv_title = ["id", "姓", "名", "性別"]; //ヘッダー項目
$export_sql = "SELECT id, sei, mei, sex FROM form_test"; //SQL文


// encoding title into SJIS-win ヘッダーの文字コードをSJIS-winにエンコード
//foreach( $export_csv_title as $key => $val ){
//    $export_header[] = mb_convert_encoding($val, "SJIS-win", "UTF-8");
//}

// HTTPヘッダを設定
header('Content-Type: application/octet-stream');
header('Content-Length: '.filesize($file_path));
header('Content-Disposition: attachment; filename=form_test.csv');

try {
//CSV書き込み出力
    if (touch($file_path)) {
        $file = new SplFileObject($file_path, "w");

        // 出力するCSVにヘッダーを書き込む
        $file->fputcsv($export_csv_title);

        // データベース検索
//    $sql = "SELECT * FROM form_test";
        $stmt = $pdo->query($export_sql);

        // 検索結果をCSVに書き込む（SJIS-winに変換するコードに後々更新します。）
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $file->fputcsv($row);
        }
    }
}
catch(RuntimeException $e){
    echo '接続失敗' .$e->getMessage();
}
readfile($file_path);

    // データベース接続の切断
    $pdo = null;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CSV出力</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/validation.js"></script>
    <link rel="icon" type="image/x-icon" href="https://blog.autumnblue.net/wp-content/uploads/2021/01/form.jpg">
</head>
<body>
<!--タイトル部分-->
<div class="bc-color1">
    <div class="container">
        <h2>CSV Download<small>Please check the csv file.</small></h2>
    </div>
</div>
<!--完了画面-->
<div class="bc-color2">
    <div class="container pt-5 pb-5">
CSVダウンロード完了
    </div>
</div>
</body>
</html>
