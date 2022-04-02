const logo = document.querySelectorAll('#logo path');
for (var i = 0; i < logo.length; i++) {
    console.log(`Letter is ${i} has ${logo[i].getTotalLength()}`);
}
const reducer = (accumulator, currentValue) => accumulator + currentValue;


// background - use cdn tweenTime
const hero = document.querySelectorAll('.hero');
const slider = document.querySelectorAll('.slider');
const tl = new TimelineMax();
tl.fromTo(hero, 1.5, { height: '0%' }, { height: '80%', ease: Power2.easeInOut })
    .fromTo(hero, 1.8, { width: '60%' }, { width: '100%', ease: Power2.easeInOut })
    .fromTo(slider, 1.5, { x: '-100%' }, { x: '0%', ease: Power2.easeInOut });
//background - use cdn tweenTime

