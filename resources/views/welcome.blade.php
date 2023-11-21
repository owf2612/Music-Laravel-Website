<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MUSIC SOUND</title>
        
        <!-- Fonts -->
       
            <!-- Google Font -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"/>

  <!-- Bootstrap css-->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <!-- Ionicon css-->
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />
  <!-- Font Awesome css-->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

  <!-- Style css-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <!-- Responsive css-->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  <!-- Modernizr js-->
  <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    </head>
    <body>
        <div class="preloader">
          <div class="loader">
            <div class="loader-inner line-scale-pulse-out">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
        <header class="musica-header home-page-header">
          <div class="menu-area desktop-menu">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="logo">
                    <a href="/" class="logo-brand">
                      Music Sound
                    </a>
                  </div>
    
                  <nav id="easy-menu">
                    <ul class="menu-list">

                      @if (Route::has('login'))
                          @auth
                          <li>
                              <a href="{{ url('/dashboard') }}" class="nav-link"><b>Dashboard</b></a>
                          </li>
                          @else
                          <li>
                              <a href="{{ route('login') }}" class="nav-link"><b>Login</b></a>
                          </li>
      
                          @if (Route::has('register'))
                          <li>
                              <a href="{{ route('register') }}" class="nav-link"><b>Register</b></a>
                          </li>
                          @endif
                          @endauth
                      @endif

                    </ul>
                  </nav>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
    
        </header>
        <section class="slider-section">
          <div class="slider-ovelay"></div>
          <div
            id="rev_slider_1052_1_wrapper"
            class="rev_slider_wrapper fullscreen-container"
            data-alias="web-product-dark122"
            data-source="gallery"
          >
            <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
            <div
              id="rev_slider_1052_1"
              class="rev_slider fullscreenbanner"
              style="display: none"
              data-version="5.3.0.2"
            >
              <ul>
                <!-- SLIDE  -->
                <li
                  data-index="rs-2946"
                  data-transition="fade"
                  data-slotamount="1"
                  data-hideafterloop="0"
                  data-hideslideonmobile="off"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1500"
                  data-rotate="0"
                  data-fstransition="fade"
                  data-fsmasterspeed="1500"
                  data-fsslotamount="7"
                  data-saveperformance="off"
                  data-title="Intro"
                >
                  <!-- MAIN IMAGE -->
                  <img
                    src="{{ asset('images/home/slider1.png') }}"
                    alt=""
                    data-bgposition="center center"
                    data-bgfit="cover"
                    data-bgrepeat="no-repeat"
                    class="rev-slidebg"
                    data-no-retina
                  />
                  <!-- LAYERS 1-->
                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-2946-layer-7"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-500','-500',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['-170','-100','-170','-170']"
                    data-fontsize="['75','75','60','60']"
                    data-lineheight="['75','75','60','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                    prepare to
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div
                    class="tp-caption slider-blod-text tp-resizeme"
                    id="slide-2946-layer-10"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-243','-243',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['-70','-70','-70','-70']"
                    data-fontsize="['100','100','80','60']"
                    data-lineheight="['130','130','80','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                    <span class="text-gradient-color">play music with</span>
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-2946-layer-9"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-405','-405',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['50','50','20','20']"
                    data-fontsize="['75','75','60','60']"
                    data-lineheight="['75','75','60','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                    MUSIC SOUND
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div
                    class="tp-caption tp-resizeme slider-arrow-button"
                    id="slide-2946-layer-8"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-562','-562',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['160','160','100','100']"
                    data-width="['48','48','150','150']"
                    data-height="['48','48','48','48']"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2947","delay":""}]'
                    data-responsive_offset="on"
                    data-responsive="off"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                  </div>
                </li>
                <li
                  data-index="rs-2947"
                  data-transition="fade"
                  data-slotamount="1"
                  data-hideafterloop="0"
                  data-hideslideonmobile="off"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1500"
                  data-rotate="0"
                  data-fstransition="fade"
                  data-fsmasterspeed="1500"
                  data-fsslotamount="7"
                  data-saveperformance="off"
                  data-title="Intro"
                >
                  <!-- MAIN IMAGE -->
                  <img
                    src="{{ asset('images/home/slider2.png') }}"
                    alt=""
                    data-bgposition="center center"
                    data-bgfit="cover"
                    data-bgrepeat="no-repeat"
                    class="rev-slidebg"
                    data-no-retina
                  />
                  <!-- LAYERS 1-->
                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-2947-layer-7"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-405','-405',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['-170','-170','-170','-170']"
                    data-fontsize="['75','75','60','60']"
                    data-lineheight="['75','75','60','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                    let the
                  </div>
                  <!-- LAYER NR. 2 -->
                  <div
                    class="tp-caption slider-blod-text tp-resizeme"
                    id="slide-2946-layer-6"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-300','-300',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['-70','-70','-70','-70']"
                    data-fontsize="['130','130','80','60']"
                    data-lineheight="['130','130','80','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                    <span class="text-gradient-color">music</span>
                  </div>
                  <!-- LAYER NR. 3 -->
                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-2946-layer-5"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-348','-348',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['50','50','20','20']"
                    data-fontsize="['75','75','60','60']"
                    data-lineheight="['75','75','60','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                    move you
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div
                    class="tp-caption tp-resizeme slider-arrow-button"
                    id="slide-2946-layer-4"
                    data-x="['middle','middle','middle','middle']"
                    data-hoffset="['-547','-547',0,'0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['160','160','100','100']"
                    data-width="['48','48','150','150']"
                    data-height="['48','48','48','48']"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2947","delay":""}]'
                    data-responsive_offset="on"
                    data-responsive="off"
                    data-fontfamily="['Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'Bebas Neue', 'sans-serif']"
                    data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                  >
                  </div>
                </li>
              </ul>
              <div
                class="tp-bannertimer tp-bottom"
                style="visibility: hidden !important"
              ></div>
            </div>
          </div>

        </section>
    
    
    {{-- model -> controller ->view --}}
    
        <footer class="black-bg musica-footer">
        </footer>
        <!-- == jQuery Librery == -->
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <!-- == Bootsrap js File == -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <!-- == nicescroll == -->
        <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        
        <!-- == Light Box == -->
        <script src="{{ asset('js/simple-lightbox.min.js') }}"></script>
        <!-- == Isotope == -->
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <!-- == Revolution Slider JS == -->
        <script
          type="text/javascript"
          src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"
        ></script>
        <script
          type="text/javascript"
          src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"
        ></script>
        <script
          type="text/javascript"
          src="{{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}"
        ></script>
        <script
          type="text/javascript"
          src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"
        ></script>
        <script
          type="text/javascript"
          src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"
        ></script>
        <script
          type="text/javascript"
          src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"
        ></script>
        <script type="text/javascript" src="{{ asset('js/revolution-active.js') }}"></script>
        <!-- == Custom Js == -->
        <script src="{{ asset('js/custom.js') }}"></script>

        
      </body>
</html>
