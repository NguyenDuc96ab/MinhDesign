@extends('Web.main')

@section('content')

<div class="container my-5">
    <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pd5 main-content">
            <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                <li><a href="/" target="_self">Trang chủ</a></li>
                <li><a href="/duan/{{$categories}}/{{$postObject->category_id}}" target="_self">{{$categories}}</a></li>
                <li class="active"><span>{{$displaySlug}}</span></li>
            </ol>

            <div class="product-detail">
                <h1>{{ $postObject->name }}</h1>
                <p>{{ $postObject->description }}</p>
                <div class="product-content">
                    {!! $postObject->content !!}
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div >
            @include('Web.sidebar')
        </div>
    </div>
</div>

@endsection

@section('footer')
@include('Web.footer')
@endsection
