<header id="header">
        <div class="header-top">
            <div class="bs-container">
                <div class="top-content bs-row">
                    <div class="header-social">
                        <!-- <div class="language-wrapper">
                            {!! apply_filters('language_switcher') !!}
                        </div> -->
                        <div class="social-item" data-aos="fade-right" data-aos-delay="200">
                            <a href="{{ theme_option('facebook') }}" class="link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="social-item" data-aos="fade-right" data-aos-delay="400">
                            <a href="{{ theme_option('facebook') }}" class="link"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="social-item" data-aos="fade-right" data-aos-delay="600">
                            <a href="{{ theme_option('facebook') }}" class="link"><i class="fab fa-vimeo-v"></i></a>
                        </div>
                        <div class="social-item" data-aos="fade-right" data-aos-delay="800">
                            <a href="{{ theme_option('facebook') }}" class="link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="header-conect">
                        <span class="show__top" title="menu top"><i class="far fa-caret-square-down" data-aos="fade-left" data-aos-delay="800"></i></span>
                        <div class="menu-top">
                            <span class="close__top" title="close"><i class="far fa-caret-square-left"></i></span>
                            <ul class="conect-list bs-row">
                                <li class="conect-list__item">
                                    <a href="#" class="conect-list__link" data-aos="fade-left" data-aos-delay="800">Chia sẻ design</a>
                                </li>
                                <li class="conect-list__item">
                                    <a href="#" class="conect-list__link" data-aos="fade-left" data-aos-delay="600">Chia sẻ code</a>
                                </li>
                                <li class="conect-list__item">
                                    <a href="#" class="conect-list__link" data-aos="fade-left" data-aos-delay="400">Vệ tinh blockchain</a>
                                </li>
                                <li class="conect-list__item">
                                    <a href="#" class="conect-list__link" data-aos="fade-left" data-aos-delay="200">Vệ tinh code</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="bs-container">
                <div class="nav-content bs-row">
                    <div class="logo">
                        @if (!theme_option('logo'))
                        <span>Bytesoft</span>
                    @else
                    <a href="/"><img src="{{ url(theme_option('logo')) }}" alt="{{ setting('site_title') }}" data-aos="zoom-out" data-aos-delay="1000"></a>
                    @endif
                        
                    </div>
                    <div class="nav">
                        <span class="show__menu"><i class="fas fa-bars" data-aos="zoom-out" data-aos-delay="1200"></i></span>
                        <div class="menu">
                            {!!
                            Menu::generateMenu([
                                'slug' => 'menu',
                                'options' => [],
                                'view' => 'main-menu',
                            ])
                        !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>