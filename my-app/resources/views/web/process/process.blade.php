@extends('Web.main')

@section('content')


<div class="container my-5">
    <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pd5 main-content">
         

        <div class="product-description">
                @foreach($postObject as $post)
                <h1 style="text-align: left; font-size: 30px; font-weight: bold; margin-bottom: 10px;">{{$post->name}}</h1>

                <div class="post-content">
                    {!! $post->content !!}
                </div>
                @endforeach
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
