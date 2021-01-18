// バリデーション
// 名前16文字の入力チェック
document.addEventListener('DOMContentLoaded', function () {

    var targets = document.getElementsByClassName('chars16');
    for (var i = 0; i < targets.length; i++) {
        targets[i].oninput = function () {
            var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if (this.value.trim().length > 17) {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "16文字以下で入力してください";
                }
                this.style.border = "2px solid red";
            } else {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "";
                }
                this.style.border = "1px solid black";
            }
        }
    }
});

// 電話番号数字入力チェック
document.addEventListener('DOMContentLoaded', function () {

    var targets = document.getElementsByClassName('number');
    for (var i = 0; i < targets.length; i++) {
        targets[i].oninput = function () {
            var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if ((this.value != '') && (this.value.match(/[^\d]+/))) {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = '電話番号はハイフンなし数字のみでご入力ください';
                }
                this.style.border = "2px solid red";
            } else {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "";
                }
                this.style.border = "1px solid black";
            }
        }
    }
});

// 電話番号数字入力チェック
document.addEventListener('DOMContentLoaded', function () {

    var targets = document.getElementsByClassName('number0');
    for (var i = 0; i < targets.length; i++) {
        targets[i].oninput = function () {
            var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if ((this.value != '') && (this.value.match(/^[^0]/))) {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = '固定電話か携帯電話の番号を入力してください';
                }
                this.style.border = "2px solid red";
            } else {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "";
                }
                this.style.border = "1px solid black";
            }
        }
    }
});

// メールアドレス 英字と特定の記号の入力チェック
document.addEventListener('DOMContentLoaded', function () {

    var targets = document.getElementsByClassName('alpha');
    for (var i = 0; i < targets.length; i++) {
        targets[i].oninput = function () {
            var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if ((this.value != '') && (this.value.match(/[^a-zA-Z0-9_@.\-]/))) {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = '入力には、英字と記号「._@-」だけが使えます。';
                }
                this.style.border = "2px solid red";
            } else {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "";
                }
                this.style.border = "1px solid black";
            }
        }
    }
});

// メールアドレス,住所 225文字の入力チェック
document.addEventListener('DOMContentLoaded', function () {

    var targets = document.getElementsByClassName('chars225');
    for (var i = 0; i < targets.length; i++) {
        targets[i].oninput = function () {
            var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if (this.value.trim().length > 226) {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "255文字以下で入力してください";
                }
                this.style.border = "2px solid red";
            } else {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "";
                }
                this.style.border = "1px solid black";
            }
        }
    }
});

// メッセージ上限1000文字
document.addEventListener('DOMContentLoaded', function () {

    var targets = document.getElementsByClassName('chars1000');
    for (var i = 0; i < targets.length; i++) {
        targets[i].oninput = function () {
            var alertelement = this.parentNode.getElementsByClassName('alertarea');
            if (this.value.trim().length > 1001) {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "1000文字以下で入力してください";
                }
                this.style.border = "2px solid red";
            } else {
                if (alertelement[0]) {
                    alertelement[0].innerHTML = "";
                }
                this.style.border = "1px solid black";
            }
        }
    }
});


document.addEventListener('DOMContentLoaded', function () {

    // 送信時のチェック（※規則に沿わない入力があれば送信しない）
    var targets = document.getElementsByClassName('checkform');
    for (var i = 0; i < targets.length; i++) {
        // 送信直前で全項目を再度チェックしてエラーを数える
        targets[i].onsubmit = function () {
            // フォームの中にあるinput要素とtextarea要素をすべて得る
            var inputelements = this.querySelectorAll('input,textarea');
            var alerts = this.getElementsByClassName('alertarea');
            var ret = 0;

            for (var j = 0; j < alerts.length; j++) {
                if (inputelements[j].oninput) {
                    inputelements[j].oninput();
                }
            }
            // エラーメッセージがなければ送信を許可
            for (var j = 0; j < alerts.length; j++) {
                if (alerts[j].innerHTML.length > 0) {
                    ret++;
                }
            }
            if (ret == 0) {
                return true;
            } else {
                alert(ret + "個のエラーがあります。");
                return false;
            }

        }
    }
});

