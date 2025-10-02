const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector(".menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler=document.querySelector(".theme-toggler");
const body = document.querySelector("body")
body.classList.add("active")


const btn =document.querySelector(".theme-toggler");
const cliquer = () =>{
    body.classList.toggle("active")
}
btn.addEventListener("click",cliquer)


// show sidebar
menuBtn.addEventListener('click', () => {
sideMenu.style.display = 'block' 

});
// Close sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none'
});

 // changement des theme
// themeToggler.addEventListener('click', () =>{
  // document.body.classList.toggle ('dart-theme-variables');

//themeTogglery.querySelector('span:nth-child(1)').classList.toggle('active');
//themeTogglery.querySelector('span:nth-child(2)').classList.toggle('active');
// });
      

 