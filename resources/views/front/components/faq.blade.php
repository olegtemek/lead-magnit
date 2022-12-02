<section class="faq">
  <div class="container">
    <h2 class="title">
      причины, <span>по которым чаще всего откладывают внедрение crm</span>
    </h2>
    <div class="faq__wrapper">
     
      @foreach ($data['questions'] as $key => $item)
      <div class="faq__item
      @if ($key == 0)
      active
      @endif
      ">
        <div class="faq__item-title">
          <p>{{$item->question}}</p>
          <img src="{{Vite::asset('resources/assets/arrow.png')}}" alt="Стрелка {{$item->question}}">
        </div>
        <div class="faq__item-content"
        @if ($key == 0)
        style="max-height: 600px"
        @endif
        >
          <p>{{$item->answer}}</p>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</section>