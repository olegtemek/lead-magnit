import './bootstrap';

import.meta.glob([
  '../assets/**',
]);



if (document.querySelector('.header__burger')) {
  let burger_btn = document.querySelector('.header__burger')

  burger_btn.addEventListener('click', () => {
    let wrapper = document.querySelector('.header__wrapper')
    wrapper.classList.add('active')

    window.addEventListener('click', (e) => {
      if (e.target.tagName != 'UL' && e.target.tagName != 'svg' && e.target.tagName != 'use' && e.target.classList != 'header__burger') {
        wrapper.classList.remove('active')
      }
    })
  })
}

if (document.querySelector('.faq__item')) {
  let faqs = document.querySelectorAll('.faq__item-title')

  faqs.forEach(faq => {
    faq.addEventListener('click', function () {
      faq.parentNode.classList.toggle('active')
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + 'px';
      }

    })
  });
}


if (document.querySelector('header')) {
  document.querySelector('header').addEventListener("mousemove", parallax);
  function parallax(event) {
    this.querySelectorAll(".parallax-wrap").forEach((shift) => {
      const position = shift.getAttribute("value");
      const x = (window.innerWidth - event.pageX * position) / 90;
      const y = (window.innerHeight - event.pageY * position) / 90;

      shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
  }
}