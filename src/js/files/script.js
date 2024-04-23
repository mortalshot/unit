// Подключение функционала 
import { isMobile, bodyLockToggle } from "./functions.js";
// Подключение списка активных модулей
import { flsModules } from "./modules.js";

function showHeaderHeight() {
  setTimeout(() => {
    const header = document.querySelector('.header');

    if (header) {
      let headerHeight = getComputedStyle(header).height;
      let calcHeight = parseFloat(headerHeight);

      document.documentElement.style.setProperty('--header-height', `${calcHeight}px`);
    }
  }, 300);
}
window.addEventListener('DOMContentLoaded', showHeaderHeight);
window.addEventListener('resize', showHeaderHeight);


function gsapAnimations() {
  const template4 = document.querySelectorAll('.template4');
  if (template4.length > 0) {
    template4.forEach(element => {
      const title = element.querySelector('.template4__title');

      const template4Timeline = gsap.timeline({
        scrollTrigger: {
          trigger: title,
          start: "top 80%",
          end: "bottom center",
          // markers: true,
          // scrub: 1,
        },
      })

      const h1 = element.querySelector('h1');
      if (h1) {
        template4Timeline.from(h1, {
          opacity: 0,
          duration: 1,
          ease: 'power2.out',
        })
      }

      const img = element.querySelector('img');
      if (img) {
        template4Timeline.from(img, {
          // rotate: '180deg',
          yPercent: 30,
          duration: 1,
          ease: 'power2.out',
        }, "-=1")
      }
    });
  }

  const template8Caption = document.querySelector('.template8__caption');
  if (template8Caption) {
    gsap.from(template8Caption, {
      scrollTrigger: {
        trigger: template8Caption,
        start: "top 80%",
        end: "bottom center",
        scrub: 1,
        // markers: true,
      },

      yPercent: 100,
      duration: 2,
      ease: 'power2.out',
    })
  }
}
window.addEventListener('DOMContentLoaded', gsapAnimations);

// Закрываем меню при клике на ссылку
const menuItems = document.querySelectorAll('.header__menu a');
if (menuItems.length > 0) {
  menuItems.forEach(element => {
    element.addEventListener('click', function (e) {
      if (document.documentElement.classList.contains('menu-open')) {
        bodyLockToggle();
        document.documentElement.classList.toggle("menu-open");
      }
    })
  });
}