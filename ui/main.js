console.log('The main.js file has loaded');
var element=document.getElementById('text');
element.innerHTML = 'Hey!';
var img=document.getElementById('madi');
var marginLeft = 0;
function moveRight () {
    marginLeft = marginLeft + 5;
    img.style.marginLeft = marginLeft + 'px';
}
img.onclick= function () {
    var interval = setInterval(moveRight, 50);
};