<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Bitrix24 {{env('APP_NAME')}}">
  <title>{{env('APP_NAME')}}</title>
  <link rel="icon" type="image/x-icon" href="/favicon.png">
  @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>
<body>
  <header class="header">
    <img src="{{Vite::asset('resources/assets/bg-header.png')}}" alt="">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__left">
          <h1>{{env('APP_NAME')}}</h1>
          <nav>
            <ul>
              <li>
                <a href="#cases">Кейсы</a>
              </li>
              <li>
                <button class="open-modal">Оставить заявку</button>
              </li>
              <li>
                <a href="#contacts">Контакты</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__right">
          <a href="tel:{{$data['setting']->number}}">{{$data['setting']->number}}</a>
        </div>
        <div class="header__burger">
          <svg class="icon">
            <use xlink:href="#burger"></use>
          </svg>

          <ul>
            <span>&#9587;</span>
            <li>
              <a href="#cases">Кейсы</a>
            </li>
            <li>
              <button  class="open-modal">Оставить заявку</button>
            </li>
            <li>
              <a href="#contacts">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header__intro">
        <div class="header__intro__text">
          <h2>Настройка <span>bitrix24</span></h2>
          <button class="open-modal btn"><span>Оставить заявку</span></button>
        </div>
        <div class="header__intro__image parallax-wrap" value="-4">
          <img src="{{Vite::asset('resources/assets/intro.png')}}" alt="">
        </div>
      </div>

    </div>
  </header>

  <section class="benefits">
    <div class="container">
      <div class="benefits__wrapper">
        <div class="benefits-item">
          <div class="benefits-item-image">
            <svg class="icon">
              <use xlink:href="#header1"></use>
            </svg>
          </div>
          <p>менеджеры помнят про каждого клиента</p>
        </div>
        <div class="benefits-item">
          <div class="benefits-item-image">
            <svg class="icon">
              <use xlink:href="#header2"></use>
            </svg>
          </div>
          <p>собственник все контролирует</p>
        </div>
        <div class="benefits-item">
          <div class="benefits-item-image">
            <svg class="icon">
              <use xlink:href="#header3"></use>
            </svg>
          </div>
          <p>бизнес работает<br>как часы</p>
        </div>
      </div>
    </div>
  </section>

  @include('front.components.problem')
  @include('front.components.slider')
  @include('front.components.form')
  @include('front.components.step')
  @include('front.components.cert')
  @include('front.components.faq')
  @include('front.components.question')

  <footer class="footer" id="contacts">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__item">
          <h2>{{env("APP_NAME")}}</h2>
        </div>
        <div class="footer__item">
          <a href="{{$data['setting']->map}}" target="_blank">{!! $data['setting']->address !!}</a>
        </div>
        <div class="footer__item">
          <a href="tel:{{$data['setting']->number}}">{{$data['setting']->number}}</a>
        </div>
      </div>
    </div>
  </footer>


  <div class="alert">
    Ваша заявка успешно отправлена
  </div>
  @include('front.components.modal')


  <a href="https://wa.me/{{$data['setting']->number_whatsapp}}?text=Здравствуйте" class="whatsapp" target="_blank">
    <img src="{{Vite::asset('resources/assets/whatsapp.png')}}" alt="Whatsapp {{$data['setting']->number_whatsapp}}">
  </a>

  <svg width="0" height="0" class="hidden" style="display: none">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1337 1014" id="header1">
      <path d="M793.114 147.499L573.116 400.584C567.373 407.193 566.015 416.547 569.641 424.513C573.266 432.494 581.202 437.611 589.959 437.641L712.392 437.969L521.216 626.236C512.415 634.918 512.31 649.075 520.978 657.892C525.349 662.338 531.137 664.56 536.925 664.56C542.594 664.56 548.263 662.412 552.634 658.131L782.582 431.689C789.041 425.319 791.025 415.681 787.594 407.283C784.178 398.884 776.018 393.379 766.933 393.364L639.025 393.021L826.918 176.857C835.019 167.534 834.034 153.391 824.71 145.291C815.387 137.175 801.229 138.175 793.114 147.499Z"></path>
      <path d="M1250.1 0.271622H534.434C486.502 0.271622 447.506 38.5963 447.506 85.6927V291.369L87.7109 291.787C39.779 291.787 0.783051 330.111 0.783051 377.208V752.473C0.783051 799.524 39.779 837.819 87.7109 837.819H164.226V991.163C164.226 999.964 169.388 1007.95 177.414 1011.57C180.352 1012.9 183.485 1013.54 186.588 1013.54C191.959 1013.54 197.255 1011.62 201.432 1007.92L393.547 837.819H787.922C835.839 837.819 874.835 799.539 874.835 752.473V546.29H944.249L1136.36 716.386C1142.94 722.219 1152.37 723.666 1160.38 720.041C1168.41 716.431 1173.57 708.449 1173.57 699.633V546.29H1250.07C1298 546.29 1337 508.01 1337 460.958V85.6927C1337.01 38.5963 1298.03 0.271622 1250.1 0.271622ZM1292.26 460.958C1292.26 483.335 1273.34 501.535 1250.09 501.535H1151.21C1138.84 501.535 1128.83 511.545 1128.83 523.912V649.941L967.566 507.159C963.479 503.534 958.198 501.535 952.738 501.535H852.458C840.091 501.535 830.081 511.545 830.081 523.912V752.473C830.081 774.85 811.165 793.065 787.922 793.065H385.059C379.599 793.065 374.318 795.064 370.23 798.689L208.965 941.455V815.442C208.965 803.075 198.955 793.065 186.588 793.065H87.696C64.4386 793.065 45.5225 774.85 45.5225 752.473V377.223C45.5225 354.801 64.4386 336.556 87.7258 336.556L459.097 336.123H469.883C482.25 336.123 492.26 326.113 492.26 313.746V85.7077C492.26 63.2858 511.176 45.0409 534.434 45.0409H1250.1C1273.36 45.0409 1292.27 63.2858 1292.27 85.7077L1292.26 460.958Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 942 942" id="header2">
      <path d="M813.7 477.406C813.7 477.406 813.7 476.558 814.171 476.181C814.195 475.71 814.195 475.239 814.171 474.768C814.171 474.768 814.171 473.92 814.171 473.543C814.171 473.167 814.171 472.601 814.171 472.13C814.171 471.659 814.171 471.283 814.171 470.812C814.171 470.341 814.171 469.964 814.171 469.493C814.192 469.053 814.192 468.613 814.171 468.174C814.171 468.174 814.171 467.326 813.7 466.855L813.134 465.631L812.287 464.312L811.721 463.464C782.336 427.756 749.278 395.235 713.094 366.438C633.212 302.288 551.164 268.47 475.71 268.47C275.158 268.47 135.742 455.74 129.902 463.652V464.312L129.148 465.536L128.583 466.761V467.986C128.559 468.456 128.559 468.928 128.583 469.399C128.583 469.399 128.583 470.246 128.583 470.717C128.583 471.188 128.583 471.659 128.583 472.13C128.583 472.601 128.583 473.072 128.583 473.449C128.583 473.826 128.583 474.297 128.583 474.768C128.562 475.207 128.562 475.647 128.583 476.087V477.406L129.148 478.63L129.902 479.949V480.514C135.742 488.427 275.158 673.624 475.71 673.624C551.07 673.624 633.212 640.183 713.188 576.881C749.366 548.286 782.425 515.954 811.816 480.42L812.381 479.478L813.229 478.253L813.7 477.406ZM475.71 645.27C312.932 645.27 188.4 507.644 159.292 471.942C188.4 435.958 312.65 296.73 475.71 296.73C621.72 296.73 750.774 435.392 781.86 472.036C750.774 508.68 621.72 645.27 475.71 645.27Z"></path>
      <path d="M471 324.99C442.122 324.99 413.892 333.553 389.881 349.597C365.87 365.641 347.155 388.445 336.104 415.124C325.053 441.804 322.162 471.162 327.796 499.485C333.429 527.808 347.335 553.825 367.755 574.245C388.175 594.665 414.192 608.571 442.515 614.204C470.838 619.838 500.196 616.947 526.876 605.896C553.555 594.844 576.359 576.13 592.403 552.119C608.447 528.108 617.01 499.878 617.01 471C616.96 432.291 601.561 395.182 574.19 367.81C546.818 340.439 509.709 325.04 471 324.99V324.99ZM471 588.75C447.711 588.75 424.945 581.844 405.582 568.906C386.218 555.967 371.125 537.577 362.213 516.061C353.301 494.545 350.969 470.869 355.513 448.028C360.056 425.187 371.271 404.206 387.738 387.738C404.206 371.271 425.187 360.056 448.028 355.513C470.869 350.969 494.545 353.301 516.061 362.213C537.577 371.125 555.967 386.218 568.906 405.582C581.844 424.945 588.75 447.711 588.75 471C588.7 502.214 576.278 532.135 554.207 554.207C532.135 576.278 502.214 588.7 471 588.75V588.75Z"></path>
      <path d="M150.72 296.73C154.467 296.73 158.061 295.241 160.711 292.591C163.361 289.942 164.85 286.348 164.85 282.6V164.85H282.6C286.347 164.85 289.941 163.361 292.591 160.711C295.241 158.062 296.73 154.468 296.73 150.72C296.73 146.972 295.241 143.378 292.591 140.729C289.941 138.079 286.347 136.59 282.6 136.59H150.72C146.972 136.59 143.378 138.079 140.729 140.729C138.079 143.378 136.59 146.972 136.59 150.72V282.6C136.59 286.348 138.079 289.942 140.729 292.591C143.378 295.241 146.972 296.73 150.72 296.73Z"></path>
      <path d="M659.4 164.85H777.15V282.6C777.15 286.348 778.639 289.942 781.289 292.591C783.938 295.241 787.533 296.73 791.28 296.73C795.028 296.73 798.622 295.241 801.271 292.591C803.921 289.942 805.41 286.348 805.41 282.6V150.72C805.41 146.972 803.921 143.378 801.271 140.729C798.622 138.079 795.028 136.59 791.28 136.59H659.4C655.653 136.59 652.058 138.079 649.409 140.729C646.759 143.378 645.27 146.972 645.27 150.72C645.27 154.468 646.759 158.062 649.409 160.711C652.058 163.361 655.653 164.85 659.4 164.85Z"></path>
      <path d="M791.28 645.27C787.533 645.27 783.938 646.759 781.289 649.409C778.639 652.058 777.15 655.653 777.15 659.4V777.15H659.4C655.653 777.15 652.058 778.639 649.409 781.289C646.759 783.938 645.27 787.533 645.27 791.28C645.27 795.028 646.759 798.622 649.409 801.271C652.058 803.921 655.653 805.41 659.4 805.41H791.28C795.028 805.41 798.622 803.921 801.271 801.271C803.921 798.622 805.41 795.028 805.41 791.28V659.4C805.41 655.653 803.921 652.058 801.271 649.409C798.622 646.759 795.028 645.27 791.28 645.27Z"></path>
      <path d="M282.6 777.15H164.85V659.4C164.85 655.653 163.361 652.058 160.711 649.409C158.061 646.759 154.467 645.27 150.72 645.27C146.972 645.27 143.378 646.759 140.729 649.409C138.079 652.058 136.59 655.653 136.59 659.4V791.28C136.59 795.028 138.079 798.622 140.729 801.271C143.378 803.921 146.972 805.41 150.72 805.41H282.6C286.347 805.41 289.941 803.921 292.591 801.271C295.241 798.622 296.73 795.028 296.73 791.28C296.73 787.533 295.241 783.938 292.591 781.289C289.941 778.639 286.347 777.15 282.6 777.15Z"></path>
      <path d="M471 400.35C457.027 400.35 443.367 404.494 431.749 412.257C420.131 420.02 411.075 431.054 405.728 443.963C400.381 456.873 398.981 471.078 401.708 484.783C404.434 498.488 411.162 511.077 421.043 520.957C430.923 530.838 443.512 537.566 457.217 540.292C470.922 543.019 485.127 541.619 498.037 536.272C510.946 530.925 521.98 521.869 529.743 510.251C537.506 498.633 541.65 484.973 541.65 471C541.625 452.27 534.174 434.315 520.93 421.07C507.686 407.826 489.73 400.375 471 400.35V400.35ZM471 513.39C462.616 513.39 454.42 510.904 447.449 506.246C440.478 501.588 435.045 494.968 431.837 487.222C428.628 479.476 427.789 470.953 429.425 462.73C431.06 454.507 435.097 446.954 441.026 441.026C446.954 435.097 454.507 431.06 462.73 429.425C470.953 427.789 479.476 428.628 487.222 431.837C494.968 435.045 501.588 440.478 506.246 447.449C510.904 454.42 513.39 462.616 513.39 471C513.39 482.243 508.924 493.025 500.974 500.974C493.025 508.924 482.243 513.39 471 513.39Z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1056 1056" id="header3">
      <path d="M852.669 208.439C766.572 123.013 652.505 76.0284 531.283 76.0284C530.673 76.0284 530.062 76.0284 529.452 76.0284C277.801 77.0175 73.8802 282.541 74.8483 534.198C75.3218 656.107 123.242 770.523 209.771 856.38C295.879 941.815 409.935 988.8 531.157 988.79C531.767 988.79 532.388 988.79 532.998 988.79C784.639 987.811 988.57 782.287 987.592 530.631C987.129 408.733 939.208 294.306 852.669 208.439ZM532.883 957.221C419.7 957.642 312.568 913.909 232.016 833.976C151.464 754.044 106.858 647.541 106.417 534.072C105.512 299.831 295.331 108.513 529.568 107.597C530.147 107.597 530.694 107.597 531.273 107.597C644.108 107.597 750.293 151.331 830.434 230.853C910.986 310.775 955.592 417.277 956.034 530.757C956.939 764.998 767.108 956.306 532.883 957.221Z"></path>
      <path d="M697.858 413.9C701.741 407.07 700.015 398.431 693.807 393.611C687.598 388.792 678.812 389.276 673.151 394.737L539.638 524.054C537.27 523.843 534.756 523.843 532.567 523.738C490.602 523.907 456.593 558.18 456.74 600.145C456.814 620.476 464.811 639.554 479.248 653.876C493.601 668.124 512.616 675.953 532.809 675.953C532.914 675.953 533.03 675.953 533.146 675.953C553.476 675.879 572.564 667.882 586.885 653.455C601.196 639.017 609.036 619.876 608.962 599.556C608.93 591.717 607.678 583.993 605.226 576.479L697.858 413.9ZM573.406 581.625C576.026 587.476 577.373 593.548 577.394 599.672C577.446 611.573 572.848 622.77 564.472 631.22C556.085 639.67 544.931 644.342 533.019 644.384C521.118 644.152 509.922 639.849 501.472 631.462C493.022 623.085 488.35 611.921 488.308 600.019C488.213 575.469 508.122 555.412 532.661 555.307C532.693 555.307 532.735 555.307 532.767 555.307C535.766 555.307 538.828 555.623 541.869 556.254C546.962 557.285 552.265 555.76 556.033 552.119L615.665 494.369L574.079 567.356C571.596 571.723 571.343 577.026 573.406 581.625Z"></path>
      <path d="M534.04 785.034C533.977 785.034 533.914 785.034 533.84 785.034C506.449 785.139 484.257 807.511 484.352 834.902C484.404 848.172 489.613 860.631 499.041 869.975C508.417 879.278 520.834 884.381 534.03 884.381C534.093 884.381 534.156 884.381 534.229 884.381C561.62 884.276 583.813 861.904 583.718 834.513C583.623 807.185 561.357 785.034 534.04 785.034ZM534.114 852.812C534.093 852.812 534.072 852.812 534.04 852.812C529.221 852.812 524.696 850.95 521.286 847.561C517.856 844.162 515.951 839.616 515.93 834.776C515.899 824.79 523.98 816.634 533.966 816.592C533.987 816.592 534.008 816.592 534.04 816.592C543.995 816.592 552.108 824.674 552.15 834.629C552.202 844.625 544.1 852.77 534.114 852.812Z"></path>
      <path d="M531.399 188.887C530.957 188.887 530.494 188.887 530.062 188.887C438.83 189.234 353.196 225.097 288.934 289.855C224.682 354.613 189.483 440.523 189.83 531.757C190.199 623.064 226.102 708.742 290.944 773.027C293.911 775.953 297.899 777.605 302.056 777.605C302.234 777.605 302.403 777.605 302.582 777.594C306.928 777.447 311.021 775.521 313.894 772.259L385.406 691.222C391.173 684.687 390.552 674.722 384.017 668.945C377.483 663.199 367.507 663.82 361.741 670.344L301.593 738.512C250.073 681.73 221.714 608.911 221.409 531.651C221.094 448.846 253.03 370.882 311.358 312.111C369.685 253.34 447.396 220.793 530.199 220.477C530.61 220.477 531.01 220.477 531.409 220.477C701.773 220.477 840.726 358.749 841.378 529.273C841.673 606.796 813.703 680.078 762.268 737.344L701.52 677.058C695.322 670.902 685.336 670.944 679.201 677.142C673.056 683.329 673.098 693.326 679.286 699.461L751.514 771.144C754.471 774.079 758.469 775.732 762.636 775.732C762.657 775.732 762.678 775.732 762.699 775.732C766.877 775.711 770.886 774.037 773.843 771.07C838.105 706.312 873.304 620.402 872.957 529.158C872.199 341.228 719.125 188.887 531.399 188.887Z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="burger">
      <path d="M28,10H4A1,1,0,0,1,4,8H28a1,1,0,0,1,0,2Z"></path>
        <path d="M28,17H4a1,1,0,0,1,0-2H28a1,1,0,0,1,0,2Z"></path>
        <path d="M28,24H4a1,1,0,0,1,0-2H28a1,1,0,0,1,0,2Z"></path>
    </symbol>
  </svg>
</body>
</html>