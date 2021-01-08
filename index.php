<?php

//CSRF
session_start();

//クロスサイトスクリプティング（XSS）対策
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//画面変更
$pageFlag = 0;//入力画面
if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;//確認画面
}
if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;//登録画面
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力フォーム</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
<!--タイトル部分-->
<div class="bc-color1">
    <div class="container">
        <h2>Please fill out the form<small>Please fill out the form below and press the submit button.</small></h2>
    </div>
</div>
<!--入力画面-->
<?php if ($pageFlag === 0) : ?>
    <!--CSRF-->
    <?php
    if (!isset($_SESSION['csrfToken'])) {
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $csrfToken;
    }
    $token = $_SESSION['csrfToken'];
    ?>
    <div id="error"></div>
    <div class="bc-color2">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6">
                    <form id="form" method="post" action="index.php">
                        <div class="form-group">
                            <label for="formGroupExampleInput">氏名</label>
                            </br>
                            <!--姓-->
                            <input class="form-control" placeholder="姓" class="form-control" id="name_sei" type="text"
                                   name="name_sei" value="<?php if (!empty($_POST['name_sei'])) {
                                echo h($_POST['name_sei']);
                            } ?>">
                            </br>
                            <!--名-->
                            <input class="form-control" placeholder="名" id="name_mei" type="text" name="name_mei"
                                   value="<?php if (!empty($_POST['name_mei'])) {
                                       echo h($_POST['name_mei']);
                                   } ?>">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">性別</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex"
                                   value="1" <?php if (!empty($_POST['sex']) && $_POST['sex'] === '1') {
                                echo 'checked';
                            } ?> required><label class="form-check-label" for="exampleRadios1">男性</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex"
                                   value="2" <?php if (!empty($_POST['sex']) && $_POST['sex'] === '2') {
                                echo 'checked';
                            } ?>><label class="form-check-label" for="exampleRadios1">女性</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">誕生日</label>

                            <div class="form-row">
                                <div class="col">

                                    <select class="form-control" name="year" value="<?php if (!empty($_POST['year'])) {
                                        echo h($_POST['year']);
                                    } ?>" required>
                                        <option value="">年</option>
                                        <option value="1900"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1900') {
                                                echo 'selected';
                                            } ?>
                                        >1900
                                        </option>
                                        <option value="1901"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1901') {
                                                echo 'selected';
                                            } ?>
                                        >1901
                                        </option>
                                        <option value="1902"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1902') {
                                                echo 'selected';
                                            } ?>
                                        >1902
                                        </option>
                                        <option value="1903"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1903') {
                                                echo 'selected';
                                            } ?>
                                        >1903
                                        </option>
                                        <option value="1904"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1904') {
                                                echo 'selected';
                                            } ?>
                                        >1904
                                        </option>
                                        <option value="1905"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1905') {
                                                echo 'selected';
                                            } ?>
                                        >1905
                                        </option>
                                        <option value="1906"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1906') {
                                                echo 'selected';
                                            } ?>
                                        >1906
                                        </option>
                                        <option value="1907"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1907') {
                                                echo 'selected';
                                            } ?>
                                        >1907
                                        </option>
                                        <option value="1908"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1908') {
                                                echo 'selected';
                                            } ?>
                                        >1908
                                        </option>
                                        <option value="1909"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1909') {
                                                echo 'selected';
                                            } ?>
                                        >1909
                                        </option>
                                        <option value="1910"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1910') {
                                                echo 'selected';
                                            } ?>
                                        >1910
                                        </option>
                                        <option value="1911"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1911') {
                                                echo 'selected';
                                            } ?>
                                        >1911
                                        </option>
                                        <option value="1912"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1912') {
                                                echo 'selected';
                                            } ?>
                                        >1912
                                        </option>
                                        <option value="1913"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1913') {
                                                echo 'selected';
                                            } ?>
                                        >1913
                                        </option>
                                        <option value="1914"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1914') {
                                                echo 'selected';
                                            } ?>
                                        >1914
                                        </option>
                                        <option value="1915"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1915') {
                                                echo 'selected';
                                            } ?>
                                        >1915
                                        </option>
                                        <option value="1916"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1916') {
                                                echo 'selected';
                                            } ?>
                                        >1916
                                        </option>
                                        <option value="1917"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1917') {
                                                echo 'selected';
                                            } ?>
                                        >1917
                                        </option>
                                        <option value="1918"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1918') {
                                                echo 'selected';
                                            } ?>
                                        >1918
                                        </option>
                                        <option value="1919"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1919') {
                                                echo 'selected';
                                            } ?>
                                        >1919
                                        </option>
                                        <option value="1920"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1920') {
                                                echo 'selected';
                                            } ?>
                                        >1920
                                        </option>
                                        <option value="1921"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1921') {
                                                echo 'selected';
                                            } ?>
                                        >1921
                                        </option>
                                        <option value="1922"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1922') {
                                                echo 'selected';
                                            } ?>
                                        >1922
                                        </option>
                                        <option value="1923"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1923') {
                                                echo 'selected';
                                            } ?>
                                        >1923
                                        </option>
                                        <option value="1924"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1924') {
                                                echo 'selected';
                                            } ?>
                                        >1924
                                        </option>
                                        <option value="1925"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1925') {
                                                echo 'selected';
                                            } ?>
                                        >1925
                                        </option>
                                        <option value="1926"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1926') {
                                                echo 'selected';
                                            } ?>
                                        >1926
                                        </option>
                                        <option value="1927"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1927') {
                                                echo 'selected';
                                            } ?>
                                        >1927
                                        </option>
                                        <option value="1928"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1928') {
                                                echo 'selected';
                                            } ?>
                                        >1928
                                        </option>
                                        <option value="1929"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1929') {
                                                echo 'selected';
                                            } ?>
                                        >1929
                                        </option>
                                        <option value="1930"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1930') {
                                                echo 'selected';
                                            } ?>
                                        >1930
                                        </option>
                                        <option value="1931"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1931') {
                                                echo 'selected';
                                            } ?>
                                        >1931
                                        </option>
                                        <option value="1932"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1932') {
                                                echo 'selected';
                                            } ?>
                                        >1932
                                        </option>
                                        <option value="1933"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1933') {
                                                echo 'selected';
                                            } ?>
                                        >1933
                                        </option>
                                        <option value="1934"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1934') {
                                                echo 'selected';
                                            } ?>
                                        >1934
                                        </option>
                                        <option value="1935"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1935') {
                                                echo 'selected';
                                            } ?>
                                        >1935
                                        </option>
                                        <option value="1936"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1936') {
                                                echo 'selected';
                                            } ?>
                                        >1936
                                        </option>
                                        <option value="1937"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1937') {
                                                echo 'selected';
                                            } ?>
                                        >1937
                                        </option>
                                        <option value="1938"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1938') {
                                                echo 'selected';
                                            } ?>
                                        >1938
                                        </option>
                                        <option value="1939"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1939') {
                                                echo 'selected';
                                            } ?>
                                        >1939
                                        </option>
                                        <option value="1940"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1940') {
                                                echo 'selected';
                                            } ?>
                                        >1940
                                        </option>
                                        <option value="1941"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1941') {
                                                echo 'selected';
                                            } ?>
                                        >1941
                                        </option>
                                        <option value="1942"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1942') {
                                                echo 'selected';
                                            } ?>
                                        >1942
                                        </option>
                                        <option value="1943"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1943') {
                                                echo 'selected';
                                            } ?>
                                        >1943
                                        </option>
                                        <option value="1944"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1944') {
                                                echo 'selected';
                                            } ?>
                                        >1944
                                        </option>
                                        <option value="1945"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1945') {
                                                echo 'selected';
                                            } ?>
                                        >1945
                                        </option>
                                        <option value="1946"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1946') {
                                                echo 'selected';
                                            } ?>
                                        >1946
                                        </option>
                                        <option value="1947"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1947') {
                                                echo 'selected';
                                            } ?>
                                        >1947
                                        </option>
                                        <option value="1948"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1948') {
                                                echo 'selected';
                                            } ?>
                                        >1948
                                        </option>
                                        <option value="1949"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1949') {
                                                echo 'selected';
                                            } ?>
                                        >1949
                                        </option>
                                        <option value="1950"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1950') {
                                                echo 'selected';
                                            } ?>
                                        >1950
                                        </option>
                                        <option value="1951"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1951') {
                                                echo 'selected';
                                            } ?>
                                        >1951
                                        </option>
                                        <option value="1952"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1952') {
                                                echo 'selected';
                                            } ?>
                                        >1952
                                        </option>
                                        <option value="1953"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1953') {
                                                echo 'selected';
                                            } ?>
                                        >1953
                                        </option>
                                        <option value="1954"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1954') {
                                                echo 'selected';
                                            } ?>
                                        >1954
                                        </option>
                                        <option value="1955"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1955') {
                                                echo 'selected';
                                            } ?>
                                        >1955
                                        </option>
                                        <option value="1956"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1956') {
                                                echo 'selected';
                                            } ?>
                                        >1956
                                        </option>
                                        <option value="1957"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1957') {
                                                echo 'selected';
                                            } ?>
                                        >1957
                                        </option>
                                        <option value="1958"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1958') {
                                                echo 'selected';
                                            } ?>
                                        >1958
                                        </option>
                                        <option value="1959"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1959') {
                                                echo 'selected';
                                            } ?>
                                        >1959
                                        </option>
                                        <option value="1960"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1960') {
                                                echo 'selected';
                                            } ?>
                                        >1960
                                        </option>
                                        <option value="1961"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1961') {
                                                echo 'selected';
                                            } ?>
                                        >1961
                                        </option>
                                        <option value="1962"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1962') {
                                                echo 'selected';
                                            } ?>
                                        >1962
                                        </option>
                                        <option value="1963"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1963') {
                                                echo 'selected';
                                            } ?>
                                        >1963
                                        </option>
                                        <option value="1964"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1964') {
                                                echo 'selected';
                                            } ?>
                                        >1964
                                        </option>
                                        <option value="1965"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1965') {
                                                echo 'selected';
                                            } ?>
                                        >1965
                                        </option>
                                        <option value="1966"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1966') {
                                                echo 'selected';
                                            } ?>
                                        >1966
                                        </option>
                                        <option value="1967"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1967') {
                                                echo 'selected';
                                            } ?>
                                        >1967
                                        </option>
                                        <option value="1968"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1968') {
                                                echo 'selected';
                                            } ?>
                                        >1968
                                        </option>
                                        <option value="1969"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1969') {
                                                echo 'selected';
                                            } ?>
                                        >1969
                                        </option>
                                        <option value="1970"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1970') {
                                                echo 'selected';
                                            } ?>
                                        >1970
                                        </option>
                                        <option value="1971"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1971') {
                                                echo 'selected';
                                            } ?>
                                        >1971
                                        </option>
                                        <option value="1972"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1972') {
                                                echo 'selected';
                                            } ?>
                                        >1972
                                        </option>
                                        <option value="1973"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1973') {
                                                echo 'selected';
                                            } ?>
                                        >1973
                                        </option>
                                        <option value="1974"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1974') {
                                                echo 'selected';
                                            } ?>
                                        >1974
                                        </option>
                                        <option value="1975"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1975') {
                                                echo 'selected';
                                            } ?>
                                        >1975
                                        </option>
                                        <option value="1976"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1976') {
                                                echo 'selected';
                                            } ?>
                                        >1976
                                        </option>
                                        <option value="1977"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1977') {
                                                echo 'selected';
                                            } ?>
                                        >1977
                                        </option>
                                        <option value="1978"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1978') {
                                                echo 'selected';
                                            } ?>
                                        >1978
                                        </option>
                                        <option value="1979"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1979') {
                                                echo 'selected';
                                            } ?>
                                        >1979
                                        </option>
                                        <option value="1980"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1980') {
                                                echo 'selected';
                                            } ?>
                                        >1980
                                        </option>
                                        <option value="1981"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1981') {
                                                echo 'selected';
                                            } ?>
                                        >1981
                                        </option>
                                        <option value="1982"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1982') {
                                                echo 'selected';
                                            } ?>
                                        >1982
                                        </option>
                                        <option value="1983"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1983') {
                                                echo 'selected';
                                            } ?>
                                        >1983
                                        </option>
                                        <option value="1984"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1984') {
                                                echo 'selected';
                                            } ?>
                                        >1984
                                        </option>
                                        <option value="1985"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1985') {
                                                echo 'selected';
                                            } ?>
                                        >1985
                                        </option>
                                        <option value="1986"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1986') {
                                                echo 'selected';
                                            } ?>
                                        >1986
                                        </option>
                                        <option value="1987"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1987') {
                                                echo 'selected';
                                            } ?>
                                        >1987
                                        </option>
                                        <option value="1988"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1988') {
                                                echo 'selected';
                                            } ?>
                                        >1988
                                        </option>
                                        <option value="1989"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1989') {
                                                echo 'selected';
                                            } ?>
                                        >1989
                                        </option>
                                        <option value="1990"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1990') {
                                                echo 'selected';
                                            } ?>
                                        >1990
                                        </option>
                                        <option value="1991"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1991') {
                                                echo 'selected';
                                            } ?>
                                        >1991
                                        </option>
                                        <option value="1992"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1992') {
                                                echo 'selected';
                                            } ?>
                                        >1992
                                        </option>
                                        <option value="1993"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1993') {
                                                echo 'selected';
                                            } ?>
                                        >1993
                                        </option>
                                        <option value="1994"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1994') {
                                                echo 'selected';
                                            } ?>
                                        >1994
                                        </option>
                                        <option value="1995"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1995') {
                                                echo 'selected';
                                            } ?>
                                        >1995
                                        </option>
                                        <option value="1996"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1996') {
                                                echo 'selected';
                                            } ?>
                                        >1996
                                        </option>
                                        <option value="1997"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1997') {
                                                echo 'selected';
                                            } ?>
                                        >1997
                                        </option>
                                        <option value="1998"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1998') {
                                                echo 'selected';
                                            } ?>
                                        >1998
                                        </option>
                                        <option value="1999"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '1999') {
                                                echo 'selected';
                                            } ?>
                                        >1999
                                        </option>
                                        <option value="2000"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2000') {
                                                echo 'selected';
                                            } ?>
                                        >2000
                                        </option>
                                        <option value="2001"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2001') {
                                                echo 'selected';
                                            } ?>
                                        >2001
                                        </option>
                                        <option value="2002"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2002') {
                                                echo 'selected';
                                            } ?>
                                        >2002
                                        </option>
                                        <option value="2003"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2003') {
                                                echo 'selected';
                                            } ?>
                                        >2003
                                        </option>
                                        <option value="2004"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2004') {
                                                echo 'selected';
                                            } ?>
                                        >2004
                                        </option>
                                        <option value="2005"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2005') {
                                                echo 'selected';
                                            } ?>
                                        >2005
                                        </option>
                                        <option value="2006"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2006') {
                                                echo 'selected';
                                            } ?>
                                        >2006
                                        </option>
                                        <option value="2007"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2007') {
                                                echo 'selected';
                                            } ?>
                                        >2007
                                        </option>
                                        <option value="2008"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2008') {
                                                echo 'selected';
                                            } ?>
                                        >2008
                                        </option>
                                        <option value="2009"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2009') {
                                                echo 'selected';
                                            } ?>
                                        >2009
                                        </option>
                                        <option value="2010"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2010') {
                                                echo 'selected';
                                            } ?>
                                        >2010
                                        </option>
                                        <option value="2011"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2011') {
                                                echo 'selected';
                                            } ?>
                                        >2011
                                        </option>
                                        <option value="2012"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2012') {
                                                echo 'selected';
                                            } ?>
                                        >2012
                                        </option>
                                        <option value="2013"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2013') {
                                                echo 'selected';
                                            } ?>
                                        >2013
                                        </option>
                                        <option value="2014"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2014') {
                                                echo 'selected';
                                            } ?>
                                        >2014
                                        </option>
                                        <option value="2015"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2015') {
                                                echo 'selected';
                                            } ?>
                                        >2015
                                        </option>
                                        <option value="2016"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2016') {
                                                echo 'selected';
                                            } ?>
                                        >2016
                                        </option>
                                        <option value="2017"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2017') {
                                                echo 'selected';
                                            } ?>
                                        >2017
                                        </option>
                                        <option value="2018"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2018') {
                                                echo 'selected';
                                            } ?>
                                        >2018
                                        </option>
                                        <option value="2019"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2019') {
                                                echo 'selected';
                                            } ?>
                                        >2019
                                        </option>
                                        <option value="2020"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2020') {
                                                echo 'selected';
                                            } ?>
                                        >2020
                                        </option>
                                        <option value="2021"
                                            <?php if (!empty($_POST['year']) && $_POST['year'] === '2021') {
                                                echo 'selected';
                                            } ?>
                                        >2021
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="month" required>
                                        <option value="">月</option>
                                        <option value="1"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '1') {
                                                echo 'selected';
                                            } ?>
                                        >1
                                        </option>
                                        <option value="2"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '2') {
                                                echo 'selected';
                                            } ?>
                                        >2
                                        </option>
                                        <option value="3"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '3') {
                                                echo 'selected';
                                            } ?>
                                        >3
                                        </option>
                                        <option value="4"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '4') {
                                                echo 'selected';
                                            } ?>
                                        >4
                                        </option>
                                        <option value="5"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '5') {
                                                echo 'selected';
                                            } ?>
                                        >5
                                        </option>
                                        <option value="6"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '6') {
                                                echo 'selected';
                                            } ?>
                                        >6
                                        </option>
                                        <option value="7"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '7') {
                                                echo 'selected';
                                            } ?>
                                        >7
                                        </option>
                                        <option value="8"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '8') {
                                                echo 'selected';
                                            } ?>
                                        >8
                                        </option>
                                        <option value="9"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '9') {
                                                echo 'selected';
                                            } ?>
                                        >9
                                        </option>
                                        <option value="10"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '10') {
                                                echo 'selected';
                                            } ?>
                                        >10
                                        </option>
                                        <option value="11"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '11') {
                                                echo 'selected';
                                            } ?>
                                        >11
                                        </option>
                                        <option value="12"
                                            <?php if (!empty($_POST['month']) && $_POST['month'] === '12') {
                                                echo 'selected';
                                            } ?>
                                        >12
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="day" required>
                                        <option value="">日</option>
                                        <option value="1"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '1') {
                                                echo 'selected';
                                            } ?>
                                        >1
                                        </option>
                                        <option value="2"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '2') {
                                                echo 'selected';
                                            } ?>
                                        >2
                                        </option>
                                        <option value="3"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '3') {
                                                echo 'selected';
                                            } ?>
                                        >3
                                        </option>
                                        <option value="4"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '4') {
                                                echo 'selected';
                                            } ?>
                                        >4
                                        </option>
                                        <option value="5"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '5') {
                                                echo 'selected';
                                            } ?>
                                        >5
                                        </option>
                                        <option value="6"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '6') {
                                                echo 'selected';
                                            } ?>
                                        >6
                                        </option>
                                        <option value="7"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '7') {
                                                echo 'selected';
                                            } ?>
                                        >7
                                        </option>
                                        <option value="8"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '8') {
                                                echo 'selected';
                                            } ?>
                                        >8
                                        </option>
                                        <option value="9"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '9') {
                                                echo 'selected';
                                            } ?>
                                        >9
                                        </option>
                                        <option value="10"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '10') {
                                                echo 'selected';
                                            } ?>
                                        >10
                                        </option>
                                        <option value="11"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '11') {
                                                echo 'selected';
                                            } ?>
                                        >11
                                        </option>
                                        <option value="12"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '12') {
                                                echo 'selected';
                                            } ?>
                                        >12
                                        </option>
                                        <option value="13"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '13') {
                                                echo 'selected';
                                            } ?>
                                        >13
                                        </option>
                                        <option value="14"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '14') {
                                                echo 'selected';
                                            } ?>
                                        >14
                                        </option>
                                        <option value="15"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '15') {
                                                echo 'selected';
                                            } ?>
                                        >15
                                        </option>
                                        <option value="16"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '16') {
                                                echo 'selected';
                                            } ?>
                                        >16
                                        </option>
                                        <option value="17"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '17') {
                                                echo 'selected';
                                            } ?>
                                        >17
                                        </option>
                                        <option value="18"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '18') {
                                                echo 'selected';
                                            } ?>
                                        >18
                                        </option>
                                        <option value="19"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '19') {
                                                echo 'selected';
                                            } ?>
                                        >19
                                        </option>
                                        <option value="20"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '20') {
                                                echo 'selected';
                                            } ?>
                                        >20
                                        </option>
                                        <option value="21"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '21') {
                                                echo 'selected';
                                            } ?>
                                        >21
                                        </option>
                                        <option value="22"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '22') {
                                                echo 'selected';
                                            } ?>
                                        >22
                                        </option>
                                        <option value="23"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '23') {
                                                echo 'selected';
                                            } ?>
                                        >23
                                        </option>
                                        <option value="24"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '24') {
                                                echo 'selected';
                                            } ?>
                                        >24
                                        </option>
                                        <option value="25"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '25') {
                                                echo 'selected';
                                            } ?>
                                        >25
                                        </option>
                                        <option value="26"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '26') {
                                                echo 'selected';
                                            } ?>
                                        >26
                                        </option>
                                        <option value="27"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '27') {
                                                echo 'selected';
                                            } ?>
                                        >27
                                        </option>
                                        <option value="28"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '28') {
                                                echo 'selected';
                                            } ?>
                                        >28
                                        </option>
                                        <option value="29"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '29') {
                                                echo 'selected';
                                            } ?>
                                        >29
                                        </option>
                                        <option value="30"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '30') {
                                                echo 'selected';
                                            } ?>
                                        >30
                                        </option>
                                        <option value="31"
                                            <?php if (!empty($_POST['day']) && $_POST['day'] === '31') {
                                                echo 'selected';
                                            } ?>
                                        >31
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">運転免許証</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="license"
                                   value="1" <?php if (!empty($_POST['license']) && $_POST['license'] === '1') {
                                echo 'checked';
                            } ?>>
                            <label class="form-check-label" for="defaultCheck1">(持っている方のみチェック)</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">電話番号</label>
                            <input class="form-control" placeholder="000-0000-0000" type="text" name="number"
                                   value="<?php if (!empty($_POST['number'])) {
                                       echo h($_POST['number']);
                                   } ?>" required>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">メールアドレス</label>
                            <input class="form-control" placeholder="example@example.com" type="text" name="email"
                                   value="<?php if (!empty($_POST['email'])) {
                                       echo h($_POST['email']);
                                   } ?>" required>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">住所(都道府県)</label>
                            <select class="form-control" name="pref" value="<?php if (!empty($_POST['pref'])) {
                                echo h($_POST['pref']);
                            } ?>" required>
                                <option value="">都道府県</option>
                                <option value="1"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '1') {
                                        echo 'selected';
                                    } ?>
                                >北海道
                                </option>
                                <option value="2"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '2') {
                                        echo 'selected';
                                    } ?>
                                >青森県
                                </option>
                                <option value="3"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '3') {
                                        echo 'selected';
                                    } ?>
                                >岩手県
                                </option>
                                <option value="4"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '4') {
                                        echo 'selected';
                                    } ?>
                                >宮城県
                                </option>
                                <option value="5"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '5') {
                                        echo 'selected';
                                    } ?>
                                >秋田県
                                </option>
                                <option value="6"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '6') {
                                        echo 'selected';
                                    } ?>
                                >山形県
                                </option>
                                <option value="7"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '7') {
                                        echo 'selected';
                                    } ?>
                                >福島県
                                </option>
                                <option value="8"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '8') {
                                        echo 'selected';
                                    } ?>
                                >茨城県
                                </option>
                                <option value="9"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '9') {
                                        echo 'selected';
                                    } ?>
                                >栃木県
                                </option>
                                <option value="10"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '10') {
                                        echo 'selected';
                                    } ?>
                                >群馬県
                                </option>
                                <option value="11"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '11') {
                                        echo 'selected';
                                    } ?>
                                >埼玉県
                                </option>
                                <option value="12"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '12') {
                                        echo 'selected';
                                    } ?>
                                >千葉県
                                </option>
                                <option value="13"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '13') {
                                        echo 'selected';
                                    } ?>
                                >東京都
                                </option>
                                <option value="14"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '14') {
                                        echo 'selected';
                                    } ?>
                                >神奈川県
                                </option>
                                <option value="15"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '15') {
                                        echo 'selected';
                                    } ?>
                                >新潟県
                                </option>
                                <option value="16"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '16') {
                                        echo 'selected';
                                    } ?>
                                >富山県
                                </option>
                                <option value="17"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '17') {
                                        echo 'selected';
                                    } ?>
                                >石川県
                                </option>
                                <option value="18"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '18') {
                                        echo 'selected';
                                    } ?>
                                >福井県
                                </option>
                                <option value="19"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '19') {
                                        echo 'selected';
                                    } ?>
                                >山梨県
                                </option>
                                <option value="20"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '20') {
                                        echo 'selected';
                                    } ?>
                                >長野県
                                </option>
                                <option value="21"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '21') {
                                        echo 'selected';
                                    } ?>
                                >岐阜県
                                </option>
                                <option value="22"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '22') {
                                        echo 'selected';
                                    } ?>
                                >静岡県
                                </option>
                                <option value="23"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '23') {
                                        echo 'selected';
                                    } ?>
                                >愛知県
                                </option>
                                <option value="24"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '24') {
                                        echo 'selected';
                                    } ?>
                                >三重県
                                </option>
                                <option value="25"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '25') {
                                        echo 'selected';
                                    } ?>
                                >滋賀県
                                </option>
                                <option value="26"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '26') {
                                        echo 'selected';
                                    } ?>
                                >京都府
                                </option>
                                <option value="27"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '27') {
                                        echo 'selected';
                                    } ?>
                                >大阪府
                                </option>
                                <option value="28"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '28') {
                                        echo 'selected';
                                    } ?>
                                >兵庫県
                                </option>
                                <option value="29"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '29') {
                                        echo 'selected';
                                    } ?>
                                >奈良県
                                </option>
                                <option value="30"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '30') {
                                        echo 'selected';
                                    } ?>
                                >和歌山県
                                </option>
                                <option value="31"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '31') {
                                        echo 'selected';
                                    } ?>
                                >鳥取県
                                </option>
                                <option value="32"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '32') {
                                        echo 'selected';
                                    } ?>
                                >島根県
                                </option>
                                <option value="33"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '33') {
                                        echo 'selected';
                                    } ?>
                                >岡山県
                                </option>
                                <option value="34"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '34') {
                                        echo 'selected';
                                    } ?>
                                >広島県
                                </option>
                                <option value="35"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '35') {
                                        echo 'selected';
                                    } ?>
                                >山口県
                                </option>
                                <option value="36"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '36') {
                                        echo 'selected';
                                    } ?>
                                >徳島県
                                </option>
                                <option value="37"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '37') {
                                        echo 'selected';
                                    } ?>
                                >香川県
                                </option>
                                <option value="38"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '38') {
                                        echo 'selected';
                                    } ?>
                                >愛媛県
                                </option>
                                <option value="39"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '39') {
                                        echo 'selected';
                                    } ?>
                                >高知県
                                </option>
                                <option value="40"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '40') {
                                        echo 'selected';
                                    } ?>
                                >福岡県
                                </option>
                                <option value="41"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '41') {
                                        echo 'selected';
                                    } ?>
                                >佐賀県
                                </option>
                                <option value="42"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '42') {
                                        echo 'selected';
                                    } ?>
                                >長崎県
                                </option>
                                <option value="43"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '43') {
                                        echo 'selected';
                                    } ?>
                                >熊本県
                                </option>
                                <option value="44"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '44') {
                                        echo 'selected';
                                    } ?>
                                >大分県
                                </option>
                                <option value="45"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '45') {
                                        echo 'selected';
                                    } ?>
                                >宮崎県
                                </option>
                                <option value="46"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '46') {
                                        echo 'selected';
                                    } ?>
                                >鹿児島県
                                </option>
                                <option value="47"
                                    <?php if (!empty($_POST['pref']) && $_POST['pref'] === '47') {
                                        echo 'selected';
                                    } ?>
                                >沖縄県
                                </option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">住所(都道府県以下)</label>
                            <input class="form-control" placeholder="市町村 番地 建物名" type="text" name="address"
                                   value="<?php if (!empty($_POST['address'])) {
                                       echo h($_POST['address']);
                                   } ?>" required>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">メッセージ</label>
                            </br>
                            <textarea class="form-control" id="msg" name="msg" rows="3" required>
                            <?php if (!empty($_POST['msg'])) {
                                echo h($_POST['msg']);
                            } ?>
                            </textarea>
                        </div>
                        </br>
                        <button class="btn btn-outline-light mb-5" type="submit" onclick="checkName()"
                                name="btn_confirm"
                                value="確認画面へ">確認画面へ
                        </button>
                        <input type="hidden" name="csrf" value="<?php echo $token; ?>">
                    </form>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container pt-5-->
    </div><!--bc-color2-->
<?php endif; ?>

<!--確認画面-->
<?php if ($pageFlag === 1) : ?>
    <!--csrf-->
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>

        <div class="bc-color2">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">姓</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['name_sei']); ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">名</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['name_mei']); ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">性別</label>
                                </br>
                                <div class="title2-f1">
                                    <?php
                                    if ($_POST['sex'] === '1') {
                                        {
                                            echo '男性';
                                        }
                                    }
                                    if ($_POST['sex'] === '2') {
                                        {
                                            echo '女性';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">誕生日</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['year']); ?>年
                                    <?php echo h($_POST['month']); ?>月
                                    <?php echo h($_POST['day']); ?>日
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">運転免許証</label>
                                </br>
                                <div class="title2-f1">
                                    <?php
                                    if (!empty($_POST['license'])) {
                                        {
                                            echo '有';
                                        }
                                    }
                                    if (empty($_POST['license'])) {
                                        {
                                            echo '無';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">電話番号</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['number']); ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">メールアドレス</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['email']); ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">住所</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['pref']); ?>
                                    <?php echo h($_POST['address']); ?>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="title-f1" for="formGroupExampleInput">メッセージ</label>
                                </br>
                                <div class="title2-f1">
                                    <?php echo h($_POST['msg']); ?>
                                </div>
                            </div>
                            </br>
                            <button class="btn btn-outline-light mb-5" type="submit" name="back" value="入力画面へ">入力画面へ
                            </button>
                            <button class="btn btn-outline-light mb-5" type="submit" name="btn_submit" value="登録">登録
                            </button>
                            <input type="hidden" name="name_sei" value="<?php echo h($_POST['name_sei']); ?>">
                            <input type="hidden" name="name_mei" value="<?php echo h($_POST['name_mei']); ?>">
                            <input type="hidden" name="sex" value="<?php echo h($_POST['sex']); ?>">
                            <input type="hidden" name="year" value="<?php echo h($_POST['year']); ?>">
                            <input type="hidden" name="month" value="<?php echo h($_POST['month']); ?>">
                            <input type="hidden" name="day" value="<?php echo h($_POST['day']); ?>">
                            <input type="hidden" name="license" value="<?php echo h($_POST['license']); ?>">
                            <input type="hidden" name="number" value="<?php echo h($_POST['number']); ?>">
                            <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
                            <input type="hidden" name="pref" value="<?php echo h($_POST['pref']); ?>">
                            <input type="hidden" name="address" value="<?php echo h($_POST['address']); ?>">
                            <input type="hidden" name="msg" value="<?php echo h($_POST['msg']); ?>">
                            <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
                        </form>
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container pt-5-->
        </div><!--bc-color2-->
    <?php endif; ?>
<?php endif; ?>

<!--登録画面-->
<?php if ($pageFlag === 2) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        <div class="bc-color2">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-f2">
                            登録しました。
                        </div><!--complete-->
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container pt-5-->
        </div><!--bc-color2-->
        <?php unset($_SESSION['csrfToken']); ?>
    <?php endif; ?>
<?php endif; ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
