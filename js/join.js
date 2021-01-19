// 誕生日データ結合
function birth(f) {
    f.elements['birthday'].value = f.elements['year'].value + f.elements['month'].value + f.elements['day'].value;
}
