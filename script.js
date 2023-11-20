let manu=document.querySelector('#manu-btn');
let navbar=document.querySelector('.header .navbar');

menu.onclick=() =>{
menu.classlist.toggel('fa-time');
navbar.classlist.toggel('active');

};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
  var swiper = new  swiper(".home-slider", {
        loop:true,
        navigation: {  
        nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
});

var swiper = new  swiper(".reviews-slider", {
  loop:true,
  spaceBetween:20,
  autoHeight:true,
  grabCursor:true,
   breakpoints:{
    640:{
      slidesPerview:1,
      
    },
    768:{
      slidesPerview:2,
      

    },
    1024:{
      slidesPerview:3,
      
    },
   },
});

let loadMoreBtn =document.querySelector('.packages .load-more .btn');
let currentItem=3;
loadMoreBtn.onclick=() =>{
  let boxes=[...Document.querySelectorAll('.packages .box-container .box')];
  for(var i=currentItem; i<currentItem +3;i++){
    boxes[i].style.display='inline-block';

  };
     currentItem += 3;
      if(currentItem >=boxes.length){
        loadMoreBtn.style.display='none';
      }
}
