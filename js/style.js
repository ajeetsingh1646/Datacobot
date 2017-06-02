/* 
window.addEventListener('load', function () {
    function go() {
        i = i < width ? i + step : 0;
        m.style.marginLeft = i + 'px';

    }
    var i = 0,
        step = 1,
        space = '&nbsp;';
    var m = document.getElementById('anima');
    var t = m.innerHTML; //text
    m.innerHTML = t + space;
    m.style.display = 'inline';
    m.style.position = 'absolute';
    var width = (m.clientWidth);
    m.style.position = '';

    m.innerHTML = t + space;

    var x = setInterval(go, 20);
}, true);
*/
$(document).ready(function () {

    $(".player").mb_YTPlayer();

});
