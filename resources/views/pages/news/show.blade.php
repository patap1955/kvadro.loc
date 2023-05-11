@extends("master")
@section('title', $news->title)
@section("description", $news->description)
@section("content")
    <section id="newsItem">
        <div class="containers news-item">
            <h1 class="news-item-title">{{ $news->title }}</h1>
            <div class="news__show">
                {!! $news->text  !!}
            </div>
        </div>
    </section>
@endsection


