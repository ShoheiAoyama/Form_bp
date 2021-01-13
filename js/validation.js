//バリデーション(Label横コメント)

// var elem = document.getElementById("sei_vali");
// console.log(elem)
// elem.innerHTML = "<span style='color: red;'>バリデーションチェック</span>";

//バリデーション
//修正中 ×送信ボタン時→○入力リアルタイム時
function checkName(){
    const sei = document.getElementById('name_sei').value;
    const mei = document.getElementById('name_mei').value;
    // const birthday = document.getElementById('birthday').value;
    // const license = document.getElementById('license').value;
    // const number = document.getElementById('number').value;
    const eadr = document.getElementById('email').value;
    const adr = document.getElementById('address').value;
    const mes = document.getElementById('msg').value;


    //名前(姓)上限16文字
    if(sei.length > 16){
        window.alert('16文字以下で入力してください');

    }
    //名前(名)上限16文字
    if(mei.length > 16){
        window.alert('16文字以下で入力してください');
    }
    //電話番号
    // var num = document.getElementById('number').value.replace(/[━.*‐.*―.*－.*\-.*ー.*\-]/gi,'');
    // if (!num.match(/^(0[5-9]0[0-9]{8}|0[1-9][1-9][0-9]{7})$/)) {
	// error.innerText = 'エラーメッセージ';
    // }

    //メールアドレス上限255文字
    if(eadr.length > 255){
        // console.info('8文字以上入力してください');
        window.alert('255文字以下で入力してください');
    }
    //住所上限255文字
    if(adr.length > 255){
        // console.info('8文字以上入力してください');
        window.alert('255文字以下で入力してください');
    }
    //メッセージ上限1000文字
    if(mes.length > 1000){
        // console.info('8文字以上入力してください');
        window.alert('1000文字以下で入力してください');
    }

}

//Enterキーバリデーション
// document.getElementById("form").onkeypress = (e) => {
//     // form1に入力されたキーを取得
//     const key = e.keyCode || e.charCode || 0;
//     // 13はEnterキーのキーコード
//     if (key == 13) {
//         // アクションを行わない
//         e.preventDefault();
//     }
// }
//
// $(function(){
//     $("input").on("keydown", function(e) {
//         if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
//             return false;
//         } else {
//             return true;
//         }
//     });
// });

