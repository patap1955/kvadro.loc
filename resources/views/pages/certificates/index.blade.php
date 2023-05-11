@extends("master")
@section('title', 'Портфолио')
@section("description", "Работы компании Квадро")
@section("content")
    <section id="portfolio">
        <div class="containers portfolio">
            <h1 class="portfolio__title">@yield('title')</h1>
            <div class="portfolio__list">
                @foreach($certificates as $portfolio)
                    <div class="portfolio__item">
                        <a
                            data-fancybox="gallery"
                            href="{{ asset('storage/' . $portfolio->img) }}"
                        >
                            <img class="portfolio__item-img-cert" alt="{{ $portfolio->alt }}" src="{{ asset('storage/' . $portfolio->img) }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



