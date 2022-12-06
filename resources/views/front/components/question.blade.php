<section class="question">
  <div class="container">
    <div class="question__wrapper">
      <div class="question__left">
        <h2>Остались <span>вопросы?</span></h2>
        <p>Заполните форму и наши менеджеры проведут бесплатную консультацию</p>
        <div class="question__left-form">
          <div class="question__left-form-wrapper">
            <div class="question__left-form-item">
              <span class="error">Это обязательное поле</span>
              <input type="text" placeholder="Имя" name="name">
            </div>
            <div class="question__left-form-item">
              <span class="error">Это обязательное поле</span>
              <input type="text" placeholder="Телефон" name="number">
            </div>
          </div>
          <div class="question__left-form-bottom">
            <button class="btn send_data">отправить</button>
            <p>Нажимая кнопку "отправить", вы соглашаетесь на сбор информации и <a href="#" target="_blank">условиями конфидециальности</a></p>
          </div>
        </div>
      </div>
      <div class="question__right">
        <img src="{{Vite::asset('resources/assets/form-footer.png')}}" alt="Форма заявки, подвал">
      </div>
    </div>
  </div>
</section>