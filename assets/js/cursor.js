// mouse cursor
let mouseCursor = document.querySelector('.cursor');
window.addEventListener('mousemove', cursor);
function cursor(e) {
    mouseCursor.style.top = e.pageY -20 + 'px' ;
    mouseCursor.style.left = e.pageX -20 + 'px';
}
window.addEventListener('click',()=>{
    mouseCursor.classList.add('click-cursor');
    setTimeout(()=>{
        mouseCursor.classList.remove('click-cursor');
    },500)
});
// mouse cursor