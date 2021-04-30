@extends('layouts.master')

@section('content-title', "Daftar Artikel Teknologi Masa Kini di Madiun dan Sekitarnya")

@push('head')
    <style>
        .image-carousel-inner {
            filter: brightness(80%);
            max-height: 300px;
        }

        .carousel .carousel-indicators li {
            border-radius: 10px;
        }

        .img-box-caption {
            display: inline-flex;
        }
        .red-square {
            height: 70px;
            background-color: #ce2026;
            color: #FFFFFF;
            font-size: 20px;
            padding: 2px 4px 0;
        }
        .img-red-square {
            height: 70px!important;
        }
        .img-responsive {
            max-width: 100%;
            height: auto;
        }
        #custom-page .pagination {
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 0;
        }
        #custom-page .pagination li {
            padding: 0 10px;
        }

        @media screen and (min-width: 600px) {
            .carousel-caption .caption-wrapper {
                display: inline-flex;
                align-items: center;
            }

            .newer-news-wrapper .media {
                width: 100%;
                display: inline-flex;
            }
        }
    </style>
@endpush

@section('content')
    <section id="main-article" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 post-card-content">
                    <div class="card">
                        <div class="card-header p-sm" style="border-bottom: 1px solid lightgray;">
                            <div class="card-title" style="font-size: 20px;"><i class="fa fa-newspaper"></i> Artikel Terbaru</div>
                        </div>
                        <div class="card-body">
                            <div class="row p-b-lg" style="border-bottom: 2px solid gray">
                                <div class="col-xs-12">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach($posts as $key => $model)
                                                @if($key < 3)
                                                <div class="carousel-item {{ ($loop->first) ? "active" : " "}}">
                                                    <img class="d-block w-100" src="{{ ($model->image) ?? '/vesper/assets/img/more-services-'.($key+1).'.jpg' }}" alt="First slide">
                                                    <div class="carousel-caption">
                                                        <h2><b>{{ (strlen($model->title) > 40) ? substr($model->title, 0, 40)."..." : $model->title }}</b></h2>
                                                        <div class="caption-wrapper">
                                                            <div class="avatar">
                                                                <img src="{{ $model->author_id? '/storage/'.$model->author['avatar'] : "/storage/users/default.png" }}" alt="Avatar" class="img-circle" style="width: 40px;height: 40px;">
                                                            </div>
                                                            <div class="p-sm">
                                                                By {{ $model->author['name'] }} <i class="fa fa-clock"></i> {{ \Carbon\Carbon::parse($model->created_at)->diffForHumans() }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @foreach($posts as $post)
                                <div class="row" style="border-bottom: 1px dashed gray;padding: 15px 0;">
{{--                                        <a href="{{ route('posts.show', [ $post->slug ?? $post->getKey(), 'redirect' => request()->fullUrl() ]) }}" class="text-grey" title="{{$post->title}}">--}}
                                    <div class="col-md-4">
                                        <img src="{{ ($post->image) ?? '/images/shattered.png' }}" style="border-radius: 10px;" class="img-responsive">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 style="margin-top: 2px;"><b>{{ (strlen($post->title) > 46) ? substr($post->title, 0, 46)."..." : $post->title }}</b></h4>
                                        <p>{{ (strlen($post->excerpt) > 200) ? substr($post->excerpt, 0, 200)."..." : $post->excerpt }}</p>
                                        <div style="display: inline-flex;">
                                            <div class="avatar">
                                                <img src="{{ $post->author_id ? '/storage/'.$post->author['avatar'] : "/storage/users/default.png" }}" alt="Avatar" class="img-circle" style="width: 40px;height: 40px;">
                                            </div>
                                            <div class="p-sm">
                                                By <b>{{ $post->author['name'] }}</b> <i class="fa fa-clock"></i> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="custom-page">
                                        {{ $posts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 post-card-content">
                    <div class="card">
                        <div class="card-header p-sm" style="border-bottom: 1px solid lightgray;">
                            <div class="card-title" style="font-size: 20px;"><i class="fa fa-fire"></i> Artikel Populer</div>
                        </div>
                        <div class="card-body">
                            @foreach(\App\Article::query()->latest()->featured()->published()->limit(7)->get() as $key => $model)
                                <div class="row" style="margin-top: 10px;">
{{--                                        <a href="{{ route('posts.show', [ $model->slug ?? $model->getKey(), 'redirect' => request()->fullUrl() ]) }}" class="text-grey" title="{{$model->title}}">--}}
                                    <div class="col-xs-4">
                                        <div class="img-box-caption">
                                            <div class="red-square"><b>{{$key+1}}</b></div>
                                            <img class="img-red-square" src="{{ ($model->image) ?? '/images/shattered.png' }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <h5 style="margin: 5px 0 0 10px;"><b>{{ (strlen($model->title) > 55) ? substr($model->title, 0, 55)."..." : $model->title }}</b></h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('footer-script')
    <script>
        $(function () {
            $('#carousel1').carousel({
                interval: 1000 * 10
            });
            $('#header').addClass('header-scrolled');
        });
        $(window).scroll(function() {
            let scrollTop     = $(window).scrollTop(),
                elementOffset = $('#main-article').offset().top,
                distance      = (elementOffset - scrollTop);
            if (distance<60) $('#header').addClass('header-scrolled');
        });
    </script>
@endpush
