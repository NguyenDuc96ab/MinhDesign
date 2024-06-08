@extends('Web.main')

@section('content')

<div class="allcontent">

    <div class="mn">
        <div class="box1">
            <div class="title1">
                Mẫu {{$displaySlug}} đẹp
            </div>
            <div class="divider"></div>
            <div class="content1">
                Đối với khách hàng, chúng tôi luôn tận tâm tạo ra những giá trị cho Quý khách hàng thân yêu.
                Minh Desgin gồm đội ngũ kiến trúc sư, kỹ sư, chuyên gia trang trí nội thất có trên 5 năm kinh nghiệm hoạt động.
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row1">
            <!-- Left -->
            <div class="col-lg-9">
                <div class="row2">
                    @foreach($products as $post)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="product-card">
                            <form action="/add-cart" method="POST">
                                @csrf
                                @if ($post->firstImage)
                                <a href="/detail/{{$post->id}}-{{ Str::slug($post->name, '-') }}.html"
                                    title="{{ $post->name }}">
                                    <img alt="{{ $post->firstImage->name }}"
                                        src="{{ "/images/" . $post->firstImage->name }}"
                                        alt="{{ $post->firstImage->name }}" />
                                </a>
                                @endif
                                <div class="product-body">
                                    <div class="product-title">{{ $post->name }}</div>
                                    <div class="product-description">{{ $post->description }}</div>
                                    <a href="/detail/{{$post->id}}-{{ Str::slug($post->name, '-') }}.html" class="btn-explore">Khám phá <i class="fa-solid fa-house"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Right Sidebar -->
        </div>
    </div>

</div>

@endsection

@section('footer')
@include('Web.footer')
@endsection
