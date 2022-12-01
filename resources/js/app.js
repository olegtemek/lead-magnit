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