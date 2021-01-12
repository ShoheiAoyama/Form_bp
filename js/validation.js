//バリデーション

// var aoyama = document.getElementById('aoyama').innerHTML('hage')


var elem = document.getElementById("aoyama");
console.log(elem)
elem.innerHTML = "<span style='color: red;'>バリデーションチェック</span>";


console.log('8文字以上入力してください')

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
        // console.log('8文字以上入力してください');
        window.alert('16文字以下で入力してください');
    }
    //名前(名)上限16文字
    if(mei.length > 16){
        // console.info('8文字以上入力してください');
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






// $(function(){
//     $('input[type=button]').click(function(){
//         $('form').submit();
//     });
// });

// function checkName(){
//     const name = document.getElementById('name_sei').value;
//     if(name.length < 8){
//         // console.info('8文字以上入力してください');
//         window.alert('8文字以上入力してください');
//     }
// }


// const form = document.querySelector('.form');
// const feedback = document.querySelector('.feedback');
// const usernamePattern = /^[a-zA-Z]{6,12}$/;
//
// form.addEventListener('submit', e => {
//     e.preventDefault();
//
//     const username = form.name_sei.value;
//
//
//     if(usernamePattern.test(name_sei)) {
//         feedback.textContent = 'ユーザー名は有効です。';
//     } else {
//         feedback.textContent = 'ユーザー名は 6 ~ 12 文字で構成されていなければいけません。';
//     }
// });


// const name_sei =document.getElementById('name_sei')
// const name_mei =document.getElementById('name_mei')
// const form =document.getElementById('form')
// const errorElement = document.getElementById('error')
//
// form.addEventListener('submit', (e) => {
//     let messages = []
//     if (name_sei.value === '' || name_sei.value == null){
//         messages.push('Name is required')
//     }
//     if (messages.length >0 ){
//         e.preventDefault()
//         errorElement.innerText = messages.join(', ')
//     }
// })
//
//
// //material contact form animation
// $('.contact-form').find('.form-control').each(function() {
//     var targetItem = $(this).parent();
//     if ($(this).val()) {
//         $(targetItem).find('label').css({
//             'top': '10px',
//             'fontSize': '14px'
//         });
//     }
// })
// $('.contact-form').find('.form-control').focus(function() {
//     $(this).parent('.input-block').addClass('focus');
//     $(this).parent().find('label').animate({
//         'top': '10px',
//         'fontSize': '14px'
//     }, 300);
// })
// $('.contact-form').find('.form-control').blur(function() {
//     if ($(this).val().length == 0) {
//         $(this).parent('.input-block').removeClass('focus');
//         $(this).parent().find('label').animate({
//             'top': '25px',
//             'fontSize': '18px'
//         }, 300);
//     }
// })