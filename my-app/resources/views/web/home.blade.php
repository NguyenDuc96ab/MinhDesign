@extends('Web.main')

@section('content')





<section class="duan">
    
<div class="title">
            <h2 class="title-heading">Dự án hoàn thành</h2>
    
        </div>
    <div class="containerflex">
    
    <div class="flexitem">
        <video width="500" height="300" controls>
        <source src="{{ asset('images/video/154511-807726725_small.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay">
            <p>Tên video</p>
            <p>Mô tả cho video</p>
        </div>
    </div>
    <div class="flexitem">
        <img src="https://dailammocfurniture.com/watermark/news/365x295x1/upload/news/project-1-1495.png" alt="Image 1">
        <div class="overlay">
            <p>Tên hình ảnh 1</p>
            <p>Mô tả cho hình ảnh 1</p>
        </div>
    </div>
    <div class="flexitem">
        <img src="https://dailammocfurniture.com/watermark/news/365x295x1/upload/news/project-1-1495.png" alt="Image 1">
        <div class="overlay">
            <p>Tên hình ảnh 1</p>
            <p>Mô tả cho hình ảnh 1</p>
        </div>
    </div>
    <div class="flexitem">
        <img src="https://dailammocfurniture.com/watermark/news/365x295x1/upload/news/project-1-1495.png" alt="Image 1">
        <div class="overlay">
            <p>Tên hình ảnh 1</p>
            <p>Mô tả cho hình ảnh 1</p>
        </div>
    </div>
    </div>
</section> 
 



<section class="hero iphone-12-pro" id="iphone12pro">
    <div class="container">
        <div class="title">
            <h2 class="title-heading">Thiết kế </h2>
            <h3 class="title-sub-heading">Kiến trúc-Nội thất</h3>
            <p class="title-price">Giá chỉ từ 99.000/1m2</p>
        </div>
        <div class="cta">
        <a href="#"><button class="cta-button">Tìm hiểu thêm</button></a>
        <a href="#"><button class="cta-button-ver">Đặt lịch</button></a>
        </div>
    </div>
</section>



<section class="hero imac" id="iMac">
    <div class="container">
        <div class="title title-dark">
            <h2 class="title-heading">Xây dựng trọn gói</h2>
            <h3 class="title-sub-heading">Hiện đại-Tân cổ</h3>
            <p class="title-price">Giá chỉ từ 3.200000/1m2</p>
        </div>
        <div class="cta">
        <a href="#"><button class="cta-button">Tìm hiểu thêm</button></a>
        <a href="#"><button class="cta-button-ver">Lên khai toán</button></a>
          
        </div>
    </div>
</section>

<section class="hero iphone-12">
    <div class="container">
        <div class="title title-dark">
            <h2 class="title-heading">Thi công nội thất</h2>
            <h3 class="title-sub-heading">An cường-Thanh thùy-Ba thanh</h3>
          
        </div>
        <div class="cta">
            <a href="#"><button class="cta-button">Quy trình thi công</button></a>
            <a href="#"><button class="cta-button-ver">Báo giá</button></a>
        </div>
    </div>
</section>

<section class="hero watch" id="watch">
    <div class="container">
        <div class="title title-dark">
        <h2 class="title-heading">Nội thất nhập khẩu</h2>
            
            <h3 class="title-sub-heading">Sofa-Đèn-Bàn ăn</h3>
        </div>
        <div class="cta">
        <a href="#"><button class="cta-button">Xem sản phẩm</button></a>
           
        </div>
    </div>
</section>



<div class="mainpage4">
    <div class="promo1 grid-item">
        <div class="mp-default-text">
        <h2 class="title-heading">Thiết kế </h2>
            <h3 class="title-sub-heading">Kiến trúc-Nội thất</h3>
            <p class="title-price">Giá chỉ từ 99.000/1m2</p>
        </div>
        <div class="cta">
        <a href="#"><button class="cta-button">Tìm hiểu thêm</button></a>
        <a href="#"><button class="cta-button-ver">Đặt lịch</button></a>
         
        </div>
    </div>
    <div class="promo2 grid-item">
        <div class="mp-default-text">
            <span class="wwdc23">   <h2 class="title-heading">Xây dựng trọn gói</h2></span>
            <span class="wwdc23text">Hiện đại-Tân cổ</span>
            <span class="wwdc23text">Giá chỉ từ 3.200000/1m2</span>
            <div class="cta">
        <a href="#"><button class="cta-button">Tìm hiểu thêm</button></a>
        <a href="#"><button class="cta-button-ver">Lên khai toán</button></a>
         
        </div>
        </div>
    </div>
    <div class="promo3 grid-item">
        <div class="mp-default-text">
            <span id="ipadtitle" style="font-family: 'Times New Roman', Times, serif;">Thi công nội thất</span>
            <span style="font-family: 'Times New Roman', Times, serif; margin-top: 20px;font-size:18px">An cường-Thanh thùy-Ba thanh</span>
            <div class="mainpagelink"> <div class="cta">
        <a href="#"><button class="cta-button">Quy trình thi công</button></a>
        <a href="#"><button class="cta-button-ver">Báo giá</button></a>
         
        </div></div>
        </div>
    </div>
    <div class="promo4 grid-item">
        <div class="mp-default-text">
            <span id="mactitle"style="font-family: 'Times New Roman', Times, serif; ">Nội thất nhập khẩu</span>
            <span id="macdescription"style="font-family: 'Times New Roman', Times, serif;margin-top: 20px;">Sofa-Đèn-Bàn ăn</span>
            <div class="mainpagelink"> <div class="cta">
        <a href="#"><button class="cta-button">Xem sản phẩm</button></a>
       
         
        </div> </div>
        </div>
    </div>

</div>

@endsection



@section('footer')
@include('web.footer')
@endsection