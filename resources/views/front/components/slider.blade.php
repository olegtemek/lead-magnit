
<section class="slider" id="cases">
  <div class="container">
    <div class="slider__wrapper">
      <h2 class="title">Наши кейсы</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        
        @foreach ($data['portfolio'] as $port)
        <div class="swiper-slide">
          <div class="swiper-slide-left">
            <img src="/{{$port->image}}" alt="{{$port->task}}">
          </div>
          <div class="swiper-slide-right">
            <div class="swiper-slide-right-item">
              <h4>Задача:</h4>
              <p>{{$port->task}}</p>
            </div>
            <div class="swiper-slide-right-item">
              <h4>Результат:</h4>
              <a href="{{$port->link}}" target="_blank" class="btn">Смотреть отзыв</a>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    </div>
  </div>
</section>