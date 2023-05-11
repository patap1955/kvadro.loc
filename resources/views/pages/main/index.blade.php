@extends("master")
@section('title', 'Квадро')
@section("description", "Все виды инженерных коммуникаций в Борисоглебске, Воронежской области точно в срок и с гарантией")
@section("content")
    <section id="first-screen">
        <div class="containers first-screen">
            <div class="first-screen__info">
                <h1 class="first-screen__info-title">Строительство наружных сетей водоснабжения и водоотведения</h1>
                <p class="first-screen__info-text">Все виды инженерных коммуникаций в Борисоглебске, Воронежской области точно в срок и с гарантией</p>
                <div class="first-screen__info-button">
                    <button class="popAp">Оставить заявку</button>
                </div>
            </div>
            <div class="first-screen__slide">
                <div class="firstScreenSwiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/slide-header-1.jpg') }}">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/slide-header-3.jpg') }}">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/slide-header-2.jpg') }}">
                        </div>
                    </div>
                    <div class="swiper__nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                {{--                <div class="sliders">--}}
                {{--                    <div class="sliders__list">--}}
                {{--                        <div class="sliders__item active"><img src="{{ asset("assets/img/slide-header-1.jpg") }}"></div>--}}
                {{--                        <div class="sliders__item sliders__item-next"><img src="{{ asset("assets/img/slide-header-3.jpg") }}"></div>--}}
                {{--                        <div class="sliders__item sliders__item-prev"><img src="{{ asset("assets/img/slide-header-2.jpg") }}"></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="sliders__nav">--}}
                {{--                        <div class="sliders__nav-prev slideIndex">--}}
                {{--                            <svg width="25" height="44" viewBox="0 0 25 44" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                <path d="M23 2L3 22L23 42" stroke="#B3B6BC" stroke-width="3"/>--}}
                {{--                            </svg>--}}
                {{--                        </div>--}}
                {{--                        <div class="sliders__nav-next slideIndex">--}}
                {{--                            <svg width="25" height="44" viewBox="0 0 25 44" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                <path d="M2 2L22 22L2 42" stroke="#BD172E" stroke-width="3"/>--}}
                {{--                            </svg>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
        <div class="first-screen__mask">
            <img src="{{ asset("assets/img/first-screen-mask.svg") }}">
        </div>
    </section>
    <section id="pluses">
        <div class="containers pluses">
            <div class="pluses__list">
                <div class="pluses__item">
                    <div class="pluses__item-img"><img src="{{ asset("assets/img/pluses-icom-1.svg") }}"></div>
                    <p class="pluses__item-text">Большой опыт в работе с крупными заказчиками</p>
                </div>
                <div class="pluses__item">
                    <div class="pluses__item-img"><img src="{{ asset("assets/img/pluses-icom-2.svg") }}"></div>
                    <p class="pluses__item-text">В наличии все лицензии для проведения работ</p>
                </div>
                <div class="pluses__item">
                    <div class="pluses__item-img"><img src="{{ asset("assets/img/pluses-icom-3.svg") }}"></div>
                    <p class="pluses__item-text">Гарантия на оборудование и работы 5 лет</p>
                </div>
            </div>
        </div>
    </section>
    <div class="section-mask">
        <section id="services">
            <div class="containers services">
                <h2 class="services__title">Услуги</h2>
                <div class="services__list">
                    <div class="services__item">
                        <div class="services__item-header">
                            <img src="{{ asset("assets/img/services-item-1.jpg") }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-info">
                                <h3 class="services__item-title">Канализация</h3>
                                <p class="services__item-text">Сети самотечной канализации</p>
                                <p class="services__item-text">Сети напорной канализации</p>
                            </div>
                            <div class="services__item-button"><button class="popAp">Оставить заявку</button></div>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-header">
                            <img src="{{ asset("assets/img/services-item-2.jpg") }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-info">
                                <h3 class="services__item-title">Водопровод</h3>
                                <p class="services__item-text">Проектирование и монтаж</p>
                                <p class="services__item-text">Сети хозяйственно-питьевого водоснабжения</p>
                                <p class="services__item-text">Промывка и гидравлические испытания </p>
                            </div>
                            <div class="services__item-button"><button class="popAp">Оставить заявку</button></div>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-header">
                            <img src="{{ asset("assets/img/services-item-3.jpg") }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-info">
                                <h3 class="services__item-title">ГНБ</h3>
                                <p class="services__item-text">Горизонтально направленное бурение диаметром до 900мм</p>
                                <p class="services__item-text">Любые виды коммуникаций</p>
                            </div>
                            <div class="services__item-button"><button class="popAp">Оставить заявку</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="containers about">
                <div class="about__info">
                    <h2 class="about__title">О компании</h2>
                    <div class="about__block-text">
                        <p class="about__text">Наша компания работает с 2015 года. Мы предоставляем полный комплекс услуг по строительству наружных сетей водоснабжения и водоотведения любого масштаба и сложности.</p>
                        <p class="about__text">У нас работают только лучшие мастера, которые имеют колоссальный опыт в строительной сфере. Мы всегда готовы прийти на помощь в решении любых вопросов, начиная с подбора материала и заканчивая монтажом.</p>
                        <a href="{{ route('cert') }}" class="about__link">Больше сертификатов</a>
                    </div>
                </div>
                <div class="about__slide">
                    <div class="aboutSwiper">
                        <div class="swiper-wrapper">
                            @foreach($certificates as $certificate)
                                <div class="swiper-slide">
                                <a
                                    data-fancybox="gallery"
                                    href="{{ asset("storage/" . $certificate->img) }}"
                                >
                                    <img src="{{ asset("storage/" . $certificate->img) }}">
                                </a>
                            </div>
                            @endforeach
{{--                            <div class="swiper-slide">--}}
{{--                                <a--}}
{{--                                    data-fancybox="gallery"--}}
{{--                                    href="{{ asset('assets/img/about-img-1.jpg') }}"--}}
{{--                                >--}}
{{--                                    <img src="{{ asset('assets/img/about-img-1.jpg') }}">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <a--}}
{{--                                    data-fancybox="gallery"--}}
{{--                                    href="{{ asset('assets/img/about-img-2.jpg') }}"--}}
{{--                                >--}}
{{--                                    <img src="{{ asset('assets/img/about-img-2.jpg') }}">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <a--}}
{{--                                    data-fancybox="gallery"--}}
{{--                                    href="{{ asset('assets/img/about-img-3.jpg') }}"--}}
{{--                                >--}}
{{--                                    <img src="{{ asset('assets/img/about-img-3.jpg') }}">--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="swiper__nav">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    {{--                    <div class="sliders">--}}
                    {{--                        <div class="sliders__list">--}}
                    {{--                            <div class="sliders__item-about active"><img src="{{ asset("assets/img/about-img-1.jpg") }}"></div>--}}
                    {{--                            <div class="sliders__item-about sliders__item-next-about"><img src="{{ asset("assets/img/about-img-2.jpg") }}"></div>--}}
                    {{--                            <div class="sliders__item-about sliders__item-prev-about"><img src="{{ asset("assets/img/about-img-3.jpg") }}"></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="sliders__nav">--}}
                    {{--                            <div class="sliders__nav-prev-about slideIndex">--}}
                    {{--                                <svg width="25" height="44" viewBox="0 0 25 44" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                    <path d="M23 2L3 22L23 42" stroke="#B3B6BC" stroke-width="3"/>--}}
                    {{--                                </svg>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="sliders__nav-next-about slideIndex">--}}
                    {{--                                <svg width="25" height="44" viewBox="0 0 25 44" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                    <path d="M2 2L22 22L2 42" stroke="#BD172E" stroke-width="3"/>--}}
                    {{--                                </svg>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </section>
        <section id="project">
            <div class="containers project">
                <h2 class="project__title">Наши проекты</h2>
                <div class="projectSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-project">
                            <img src="{{ asset("assets/img/project-1.jpg") }}">
                        </div>
                        <div class="swiper-slide swiper-slide-project">
                            <img src="{{ asset("assets/img/project-2.jpg") }}">
                        </div>
                        <div class="swiper-slide swiper-slide-project">
                            <img src="{{ asset("assets/img/project-3.jpg") }}">
                        </div>
                    </div>
                </div>
                <div class="project__button">
                    <a href="{{ route("portfolio") }}" class="project__button-link">Больше работ</a>
                </div>
            </div>
        </section>
        <div class="section-mask-bg"></div>
    </div>
    <section id="news">
        <div class="containers news">
            <h2 class="news__title">Новости</h2>
            <div class="newsSwiper">
                <div class="swiper-wrapper">
                    @foreach($news as $new)
                        <div class="swiper-slide swiper-slide-news">
                            <div class="news__item">
                                <div class="news__item-header">
                                    <img src="{{ asset("storage/" . $new->img) }}">
                                </div>
                                <div class="news__item-content">
                                    <div class="news__item-info">
                                        <h3 class="news__item-info-title">{{ $new->title }}</h3>
                                        <p class="news__item-info-text">{{ $new->description }}</p>
                                    </div>
                                    <div class="news__item-link">
                                        <a href="{{ route("show-news", ["news" => $new->slug]) }}">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="news__button">
                <a class="news__button-link" href="{{ route("news-index") }}">Смотреть больше</a>
            </div>
        </div>
    </section>
@endsection
