console.log('The main.js file has loaded');
var element=document.getElementById('text');
element.innerHTML = 'Hey!';
var img=document.getElementById('madi');
img.onclick= function () {
  img.style.marginRight = '100px'  
};