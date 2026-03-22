const header= document.querySelector("header");

 window.addEventListener("scroll", function() {
 header.classList.toggle("sticky", window.scrollY > 150);
});
let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');
 
menu.onclick =()=> {
      menu.classList.toggle('bx-x');
      navlist.classList.toggle('open');
};
window.onscroll=()=>{
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
};
let heartIcon = document.getElementById("heart-icon");
let heartContainer = document.getElementById("heart-container");

heartIcon.onclick = function(){

    for(let i=0;i<6;i++){

        let heart = document.createElement("div");
        heart.innerHTML = "❤️";
        heart.classList.add("floating-heart");

        heart.style.left = Math.random()*100 + "vw";
        heart.style.top = "70vh";

        heartContainer.appendChild(heart);

        setTimeout(()=>{
            heart.remove();
        },2000);

    }

};