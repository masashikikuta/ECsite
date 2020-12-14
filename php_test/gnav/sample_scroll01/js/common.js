function js1(){
// 進捗が100%の場合、0%に戻す
var gage = document.getElementById('prg1');
if (num.value == 100) {
num.value = 0;}
// 関数js2()を100ミリ秒間隔で呼び出す
timer1=setInterval("js2()",100);
}
function js2(){
var bar = document.getElementById('prg1');
var txt = document.getElementById('pct');
// 進捗が100%未満の場合、１ずつカウントアップ
if (bar.value < bar.max) {
bar.value++;
txt.value = bar.value;
} else{
clearInterval(timer1);
}}