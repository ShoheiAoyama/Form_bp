// 誕生日の日付バリデーション
//　存在しない年月日は選択出来ないようにする
function dateValidation( element, year, month, day ) {

    var y = document.getElementsByName( year )[0].value;
    var m = document.getElementsByName( month )[0].value;
    var d = document.getElementsByName( day )[0].value;

    if ( y && m && d ) {
        var ds = new Date( y, m-1, d );
        //　存在しない年月日の場合、選択肢を空白に戻す
        if ( ds.getFullYear() != y || ds.getMonth() != m-1 || ds.getDate() != d ) {
            return element.value = '';
        }
    }
}
