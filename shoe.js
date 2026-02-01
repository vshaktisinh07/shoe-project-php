let scrollcontainer = document.querySelector(".gallary");
let backbtn = document.getElementById("left");
let forwardbtn = document.getElementById("right");

scrollcontainer.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  scrollcontainer.scrollLeft += evt.deltaX;
  scrollcontainer.style.scrollBehavior = "auto";

});

forwardbtn.addEventListener("click", ()=>{
  scrollcontainer.style.scrollBehavior = "smooth";
  scrollcontainer.scrollLeft += 900;
})

backbtn.addEventListener("click", ()=>{
  scrollcontainer.style.scrollBehavior = "smooth";
  scrollcontainer.scrollLeft -= 900;
})
