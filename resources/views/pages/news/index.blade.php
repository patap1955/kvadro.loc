@extends("master")
@section('title', 'Квадро - Новости')
@section("description", "Новости компании Квадро")
@section("content")
    <section id="newsList">
        <div class="containers news-list">
            <h1 class="news-list__title">Новости</h1>
            <div class="news-list__container">
                @foreach($news as $new)
                    <div class="news-list__item">
                        <div class="news-list__item-header">
                            <img src="{{ asset("storage/" . $new->img) }}">
                        </div>
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-info">
                                <h2 class="news-list__item-content-info-title">{{ $new->title }}</h2>
                                <p class="news-list__item-content-info-desc">{{ $new->description }}</p>
                            </div>
                            <div class="news-list__item-content-info-link">
                                <a href="{{ route("show-news", ["news" => $new->slug]) }}">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
{{--    <section id="news">--}}
{{--        <div class="containers news">--}}
{{--            <h2 class="news__title">Новости</h2>--}}
{{--            --}}
{{--            <div class="newsSwiper">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    @foreach($news as $new)--}}
{{--                        <div class="swiper-slide swiper-slide-news">--}}
{{--                            <div class="news__item">--}}
{{--                                <div class="news__item-header">--}}
{{--                                    <img src="{{ asset("storage/" . $new->img) }}">--}}
{{--                                </div>--}}
{{--                                <div class="news__item-content">--}}
{{--                                    <div class="news__item-info">--}}
{{--                                        <h3 class="news__item-info-title">{{ $new->title }}</h3>--}}
{{--                                        <p class="news__item-info-text">{{ $new->description }}</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="news__item-link">--}}
{{--                                        <a href="{{ route("show-news", ["news" => $new->slug]) }}">Подробнее</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection

