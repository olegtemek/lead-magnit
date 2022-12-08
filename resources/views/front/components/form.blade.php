<section class="form">
  <div class="container">
    <div class="form__wrapper">
      <div class="form__left">
        <img src="{{Vite::asset('resources/assets/form_middle.png')}}" alt="Форма заявка">
      </div>
      <div class="form__right">
        <h2>Оставляйте <span>заявку</span></h2>
        <p>и мы покажем возможности crm</p>
        <div class="form__right-form">
          <div class="form__right-form-wrapper">
            <div class="form__right-form-item">
              <span class="error">Это обязательное поле</span>
              <input type="text" placeholder="Имя" name="name">
            </div>
            <div class="form__right-form-item">
              <span class="error">Это обязательное поле</span>
              <input type="text" placeholder="Телефон" name="number">
            </div>
          </div>
          <div class="form__right-form-bottom">
            <button class="btn send_data"><span>отправить</span></button>
            <p>Нажимая кнопку "отправить", вы соглашаетесь на сбор информации и с условиями конфидециальности</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>