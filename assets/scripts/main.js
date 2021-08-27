const toggleButton= document.getElementById('toggle__button');
const navbarLinks= document.getElementById('navbar__links');

/* toggleButton.addEventListener('click', () =>{
    navbarLinks.classList.toggle('active') */
    toggleButton.addEventListener('click', function () {     
        navbarLinks.classList.toggle('active');
})



window.addEventListener('scroll', function(){myFunction()})

let navbar = document.getElementById("container");
let sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

window.onclick = function(event) {
  if (event.target == navbar) {
    navbar.classList.display = "none";
  }
}


window.addEventListener('scroll', function(){
  let  a = document.documentElement.scrollTop; // Permet de voir le nombre de pixels qui ont défilé // 
  console.log("a="+ a); // combien on descend //
  let b = document.documentElement.scrollHeight;
  console.log("b="+ b); // la hauteur total qui nous reste à scroller //
  let c = document.documentElement.clientHeight;
  console.log("c="+c);
  let d = (b-c); // 
  console.log("d="+d);
  let e =(a/d)*100;
  console.log(e)

  document.getElementById("progress-bar").style.width=e+"%";
});

