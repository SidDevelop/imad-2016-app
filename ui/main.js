console.log('The main.js file has loaded');
var element=document.getElementById('text');
element.innerHTML = 'Hey!';
var img=document.getElementById('madi');
var marginLeft = 0;
function moveRight () {
    marginLeft = marginLeft + 1;
    img.style.marginLeft = marginLeft + 'px';
}
img.onclick= function () {
    var interval = setInterval(moveRight, 50);
};
var commInput = document.getElementById('comment');
var comm = commInput.value;
var submit = document.getElementById('submit');
submit.onclick = function () {

    var comms = ['comm1', 'comm2', 'comm3'];
    var list = "";
    for (var i=0; i<comms.length; i++){
        list += '<li>' + comms[i] + '</li>';
        
    }
    var ul = document.getElementById('commlist');
        ul.innerHTML = list;
};