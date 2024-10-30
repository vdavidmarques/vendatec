function scrollTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

var body = document.querySelector("body");

function openMenu() {
  var element = document.querySelectorAll(".header-menu-itens .menu-items");
  element.forEach(function (el) {
    el.classList.add("openned");
  });
  scrollTop();
  body.classList.add("overflow-hidden");
}

function closeMenu() {
  var close = document.querySelectorAll(".header-menu-itens .menu-items");
  close.forEach(function (item) {
    item.classList.remove("openned");
  });
  body.classList.remove("overflow-hidden");
}

document.addEventListener('DOMContentLoaded', function() {
  var menuModal = document.querySelector('.header-menu-itens .menu-items');
  var menuItems = document.querySelectorAll('.header-menu-itens .menu-items .menu-item a');

  // Close the modal when any menu item is clicked
  menuItems.forEach(function(item) {
    item.addEventListener('click', function() {
      menuModal.classList.remove("openned");
      body.classList.remove("overflow-hidden");
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  
  var scrollToTopBtn = document.querySelector('#scrollToTopBtn');

  window.addEventListener('scroll', function() {
    if (window.scrollY > 20) {
      scrollToTopBtn.style.display = 'block';
    } else {
      scrollToTopBtn.style.display = 'none';
    }
  });

  scrollToTopBtn.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const blocks = document.querySelectorAll('.scroll-effect');

  const handleScroll = () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const windowHeight = window.innerHeight;

      blocks.forEach(block => {
          const blockTop = block.getBoundingClientRect().top + scrollTop;
          if (scrollTop + windowHeight > blockTop + 50) {
              block.classList.add('visible');
          } else {
              block.classList.remove('visible');
          }
      });
  };

  window.addEventListener('scroll', handleScroll);
  handleScroll();
});

function closeMessage(){
  var closeMessage = document.querySelectorAll(".alert");
  closeMessage.forEach(function(item){
    item.classList.remove("opened");
  })
}