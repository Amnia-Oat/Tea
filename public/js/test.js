var show_btn = document.getElementById("link_show");
var hide_btn = document.getElementById("link_hide");
var circle_btn = document.getElementById("show_area");

// 診断ボタンを表示
function show() {
    show_btn.style.display = "none";
    hide_btn.style.display = "";
    circle_btn.style.display = "block";
}

// 診断ボタンを隠す
function hide() {
    show_btn.style.display = "";
    hide_btn.style.display = "none";
    circle_btn.style.display = "none";
}