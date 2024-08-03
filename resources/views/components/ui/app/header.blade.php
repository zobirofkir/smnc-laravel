<header class="cs_site_header cs_style1 cs_sticky_header cs_heading_color">
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="/">
                        <img src="{{ asset('img/logo-smn-v1.png') }}" alt="Logo" id="logo-smn" style="width: 90px">

                    </a>
                    <nav class="cs_nav" id="nav-smn-nav">
                        <ul class="cs_nav_list" id="nav-smn-ul">

                            <li id="nav-smn-li"><a href="/apropos">À propos</a></li>
                            <li><a href="/actualites">Actualités</a></li>
                            <li><a href="/jmn">JMN</a></li>
                            <li class="menu-item-has-children">
                                <a href="">Agenda </a>
                                <ul>
                                    <li><a href="/congrès-internationaux">Congrès Internationaux </a></li>
                                    <li><a href="/congrès-nationaux">Congrès Nationaux </a></li>
                                </ul>
                            </li>
                            <li><a href="/cenem">CENeM</a></li>
                            <li class="menu-item-has-children">
                                <a href="">Événements SMN </a>
                                <ul>
                                    <li><a href="/cnn2024">CNN-2024</a></li>
                                    <li><a href="/jpn2023">JAN-2023</a></li>
                                    <li><a href="/jpn2023">JPN-2023</a></li>
                                    <li><a href="/jan2022">JAN-2022</a></li>
                                    <li><a href="/enmg2022">ENMG-2022</a></li>
                                    <li><a href="/jan2021">JAN-2021</a></li>
                                    <li><a href="/jpn2021">JPN-2021</a></li>
                                    <li><a href="/jan2020">JAN-2020</a></li>
                                    <li><a href="/jan2019">JAN-2019</a></li>
                                    <li><a href="/jpn2019">JPN-2019</a></li>
                                    <li><a href="/cm2018">CMN-2018</a></li>
                                    <li><a href="/cn2018">CNN-2018</a></li>
                                    <li><a href="/jan2017">JAN-2017</a></li>
                                    <li><a href="/jpn2017">JPN-2017</a></li>
                                    <li><a href="/jan2016">JAN-2016</a></li>
                                </ul>
                            </li>
                            {{-- @if(!auth()->user() || !auth()->user()->inscription)
                            <li><a href="{{ route('inscription.index') }}" id="smn-notify">Inscription CNN 2024</a></li>
                        @endif --}}
                        
                            @if(!Route::is('login') && !auth()->user()?->id)
                                <li><a href="identification">Identification</a></li>
                            @endif
                            <li><a href="/galerie">Galerie</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="cs_main_header_right">
                    <div class="cs_toolbox">
                        <button class="cs_toolbox_btn cs_sidebar_toggle_btn" type="button">
                            <svg width="35" height="30" viewBox="0 0 35 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.483887 2.46544C0.483887 1.10383 1.14618 0 1.96315 0H33.5208C34.3377 0 35 1.10383 35 2.46544C35 3.82708 34.3377 4.93088 33.5208 4.93088H1.96315C1.14618 4.93088 0.483887 3.82708 0.483887 2.46544Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.483887 14.6694C0.483887 13.3074 1.14618 12.2039 1.96315 12.2039H33.5208C34.3377 12.2039 35 13.3074 35 14.6694C35 16.0309 34.3377 17.1348 33.5208 17.1348H1.96315C1.14618 17.1348 0.483887 16.0309 0.483887 14.6694Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.483887 26.6267C0.483887 25.2648 1.14618 24.1613 1.96315 24.1613H33.5208C34.3377 24.1613 35 25.2648 35 26.6267C35 27.9883 34.3377 29.0922 33.5208 29.0922H1.96315C1.14618 29.0922 0.483887 27.9883 0.483887 26.6267Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="cs_sidenav">
    <div class="cs_sidenav_overlay"></div>
    <div class="cs_sidenav_in">
        <button class="cs_close" type="button"><img src="{{ asset('img/icons/close.svg') }}" alt="Close"></button>
        <div class="cs_logo_box">

            <div class="cs_height_15"></div>
            <h3 class="cs_fs_24 cs_semibold mb-0">La Société Marocaine de Neurologie</h3>
        </div>
        <div class="cs_height_35"></div>
        <hr>
        <div class="cs_height_70 cs_height_lg_50"></div>
        <div class="cs_iconbox cs_style_11 cs_radius_25">
            <div class="cs_iconbox_icon">
                <img src=" {{ asset('img/contact/icon_1.svg') }}" alt="Icon">


            </div>
            <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title cs_fs_24 mb-0">Téléphone</h3>
                <p class="cs_iconbox_subtitle mb-0 cs_heading_color"> 06 08 43 59 85</p>
            </div>
        </div>
        <div class="cs_height_30"></div>
        <div class="cs_iconbox cs_style_11 cs_radius_25">
            <div class="cs_iconbox_icon">
                <img src="{{ asset('img/contact/icon_2.svg') }}" alt="Icon">

            </div>
            <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title cs_fs_24 mb-0">Email</h3>
                <p class="cs_iconbox_subtitle mb-0 cs_heading_color"> smneurologie.contact@gmail.com</p>

            </div>
        </div>
        <div class="cs_height_30"></div>
        <div class="cs_iconbox cs_style_11 cs_radius_25">
            <div class="cs_iconbox_icon">
                <img src="{{ asset('img/contact/icon_3.svg') }}" alt="Icon">

            </div>
            <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title cs_fs_24 mb-0">Adresse</h3>
                <p class="cs_iconbox_subtitle mb-0 cs_heading_color"> Hôpital des spécialités - Rabat </p>
            </div>
        </div>
        <div class="cs_height_60"></div>
        <div class="cs_hero_info_col">
            <a href="/contact" class="cs_btn cs_style_1">
              <span>Contacter Nous</span>
              <i>
                <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
              </i>
            </a>
          </div>
        {{-- <div class="cs_newsletter cs_style1">
        <h2 class="cs_newsletter_title">  Membres du bureau de la SMN </h2>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr Hicham EL OTMANI :  Président <br>(06 61 33 99 34 , otmani.neuro@gmail.com)</span>
        </div>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr Faouzi BELAHSEN : Vice-président <br> (06 70 05 72 37 , belahsenfaouzi@gmail.com)</span>
        </div>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr YASSINE	MEBROUK : Vice-président <br>	(06 61 63 26 71 , mebrouky@gmail.com) </span>
        </div>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr Nazha BIROUK : Trésorière  <br> (06 61 21 63 27 , nazha.birouk@gmail.com)</span>
        </div>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr Sadia AIDI : Trésorière adjoint <br>	(06 63 48 72 61 , aidi_sadia@yahoo.fr)</span>
        </div>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr Wadii BNOUHANA :Secrétaire général <br> (06 63 82 56 96 , w.bnouhanna@gmail.com)</span>
        </div>
        <div class="cs_newsletter_subTitle  ">
          <span style="font-size: 16px;">- Pr Siham BOUCHAL : Secrétaire général adjoint <br>  (06 39 17 69 43 , bouchalsiham@gmail.com)</span>
        </div>


      </div> --}}

    </div>
</div>
