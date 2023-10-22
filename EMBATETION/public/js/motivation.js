const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: "",
    autoplay: {
        delay: 5000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
     
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
   // scrollbar: {
    //  el: '.swiper-scrollbar',
    //  draggable: true,
    //},
  });

const items = document.querySelectorAll('.item');

const textos = document.querySelectorAll('.texto');

   items[0].classList.add('active');
   textos[0].style.display = 'block';

  items.forEach((item, index) => {
    item.addEventListener('click', () => {
      textos.forEach((texto) => {
        texto.style.display = 'none';
      });
      
      item.classList.add('active');
      textos[index].style.display = 'block';

    items.forEach((el) => {
      el.classList.remove('active');
    });

    item.classList.add('active');
    });
  });