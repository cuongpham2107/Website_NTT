@extends('pages.layouts.default')

@section('style')
@endsection

@section('content')
    {{-- @dd($pageMeta) --}}
    <!-- Breadcromb Wrapper Start -->
    <div class="breadcromb-wrapper">
        <div class="breadcromb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>{{ $pageMeta['title'] }}</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Về chúng tôi</li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>{{ $pageMeta['title'] }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-wrapper blog-single course-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 pull-left">
                    <div class="blog-single-img"> 
                        @if($about->image)
                        <img src="{{Voyager::image($about->image)}}" title="" style="height: 550px; object-fit: cover">
                        @endif  
                        <h2>{{$about->title}}</h2>
                        <ul class="list-inline list-blog-single">
                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="javascript:void(0)">Admin</a></li>
                            {{-- <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="javascript:void(0)">4
                                    Comments</a></li> --}}
                        </ul>
                        <p>{!! $about->body !!}</p>
                        <ul class="list-inline list-social-color">
                            <li><a href="{{setting('social-media.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{setting('social-media.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{setting('social-media.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{setting('social-media.youtube')}}"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Wrapper End -->
@endsection

@section('js')
@endsection
