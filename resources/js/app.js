import './bootstrap';

import.meta.glob([
  '../assets/**',
]);

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox.css";




import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import axios from 'axios';


const swiper = new Swiper('.mySwiper', {
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  modules: [Navigation]
})


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

[].forEach.call(document.querySelectorAll('input[name="number"]'), function (input) {
  let keyCode;
  function mask(event) {
    event.keyCode && (keyCode = event.keyCode);
    let pos = this.selectionStart;
    if (pos < 3) event.preventDefault();
    let matrix = "+7 (___) ___-__-__",
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, ""),
      newValue = matrix.replace(/[_\d]/g, function (a) {
        return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
      });
    i = newValue.indexOf("_");
    if (i != -1) {
      i < 5 && (i = 3);
      newValue = newValue.slice(0, i);
    }
    let reg = matrix.substr(0, this.value.length).replace(/_+/g,
      function (a) {
        return "\\d{1," + a.length + "}";
      }).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
    if (event.type == "blur" && this.value.length < 5) this.value = "";
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false);
});



if (document.querySelector('.open-modal')) {
  let buttons = document.querySelectorAll('.open-modal');
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelector('.modal').classList.add('active')
      window.addEventListener('click', (e) => {
        if (e.target.classList[1] == 'active' || e.target.classList == 'cross') {
          document.querySelector('.modal').classList.remove('active')
        }
      })
    })
  });
}


if (document.querySelector('.send_data')) {
  let buttons = document.querySelectorAll('.send_data')
  buttons.forEach(btn => {
    btn.addEventListener('click', async () => {
      let parent = btn.parentNode;

      if (parent.classList == 'modal__wrapper') {
        let name = parent.querySelector('input[name="name"]')
        let number = parent.querySelector('input[name="number"]')


        if (validate(name, number) == 0) {

          let res = await axios.post('/send-data', { name: name.value, number: number.value })
          name.value = ''
          number.value = ''
          document.querySelector('.modal').classList.remove('active')
          alert(res.data.status)
        }

      } else {
        let parent = btn.parentNode.parentNode
        let name = parent.querySelector('input[name="name"]')
        let number = parent.querySelector('input[name="number"]')


        if (validate(name, number) == 0) {
          let res = await axios.post('/send-data', { name: name.value, number: number.value })

          name.value = ''
          number.value = ''

          alert(res.data.status)

        }
      }

    })
  });

  function validate(name, number) {
    name.parentNode.querySelector('span').classList.remove('active')
    number.parentNode.querySelector('span').classList.remove('active')
    let error = 0
    if (name.value == '') {
      name.parentNode.querySelector('span').classList.add('active')
      error++
    }
    if (number.value == '') {
      number.parentNode.querySelector('span').classList.add('active')
      error++
    }

    return error
  }
}

function alert(status) {


  if (status == 200) {
    let text_alert = 'Ваша заявка успешно отправлена'
    document.querySelector('.alert').classList.add('good')
    document.querySelector('.alert').innerText = text_alert
  } else {
    let text_alert = 'Ошибка, попробуйте позднее'
    document.querySelector('.alert').innerText = text_alert
    document.querySelector('.alert').classList.add('bad')
  }
  document.querySelector('.alert').classList.add('active')
  setTimeout(() => {
    if (status == 200) {
      document.querySelector('.alert').classList.remove('good')
    } else {
      document.querySelector('.alert').classList.remove('bad')
    }
    document.querySelector('.alert').classList.remove('active')

  }, 3000);


}


const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}