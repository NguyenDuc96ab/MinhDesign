@extends('Web.main')

@section('content')



<section class="hero imac" id="iMac">
        <div class="container">
            <div class="title title-dark">
                <h2 class="title-heading">iMac</h2>
                <h3 class="title-sub-heading">Say hello</h3>
                <p class="title-price">Order 4.30 | Available second half of May</p>
            </div>
            <div class="cta">
                <a href="#" class="cta-link">Learn More</a>
                <a href="#" class="cta-link">Buy</a>
            </div>
        </div>
    </section>

    <section class="hero iphone-12-pro" id="iphone12pro">
        <div class="container">
            <div class="title">
                <h2 class="title-heading">iPhone 12 Pro</h2>
                <h3 class="title-sub-heading">It's a leap year</h3>
                <p class="title-price">From $41.62/mo. for 24 mo. or $999 before trade‑in</p>
            </div>
            <div class="cta">
                <a href="#" class="cta-link">Learn More</a>
                <a href="#" class="cta-link">Buy</a>
            </div>
        </div>
    </section>

    <section class="hero iphone-12">
        <div class="container">
            <div class="title title-dark">
                <h2 class="title-heading">iPhone 12</h2>
                <h3 class="title-sub-heading">Purple. Now in season</h3>
                <p class="title-price">From $29.12/mo. for 24 mo. or $699 before trade‑in<br>
                    Purple available 4.30

                </p>
            </div>
            <div class="cta">
                <a href="#" class="cta-link">Learn More</a>
                <a href="#" class="cta-link">Buy</a>
            </div>
        </div>
    </section>

    <section class="hero watch" id="watch">
        <div class="container">
            <div class="title title-dark">
                <h2 class="title-heading-watch"></h2>
                <h3 class="title-sub-heading">The future of health is on your wrist</h3>
            </div>
            <div class="cta">
                <a href="#" class="cta-link">Learn More</a>
                <a href="#" class="cta-link">Buy</a>
            </div>
        </div>
    </section>

    <div class="mainpage4">
    <div class="promo1 grid-item">
      <div class="mp-default-text">
        <span class="appletradein"><img
            src="https://www.apple.com/v/home/az/images/logos/iphone-tradein/logo_tradein__d1fpktgipvki_large.png"
            alt="apple tradein"></span>
        <span>Upgrade and save. It's that easy.</span>
        <div class="mainpagelink"><a href="">See what your device is worth ></a></div>
      </div>

    </div>
    <div class="promo2 grid-item">
      <div class="mp-default-text">
        <span class="wwdc23"><img
            src="https://www.apple.com/v/home/az/images/logos/wwdc23-announce/promo_logo_wwdc23__gcsmmrgbhlme_large.png"
            alt="wwdc23"></span>
        <span class="wwdc23text">Apple Worldwide Developers Conference.</span>
        <span class="wwdc23text">Join us online from 5 to 9 June.</span>
        <div class="mainpagelink"><a href="">Learn more ></a></div>
      </div>
    </div>
    <div class="promo3 grid-item">
      <div class="mp-default-text">
        <span id="ipadtitle">iPad</span>
        <span>Loveable. Drawable. Magical.</span>
        <div class="mainpagelink"><a href="">Learn More ></a> <a href="">Buy ></a></div>
      </div>

    </div>
    <div class="promo4 grid-item">
      <div class="mp-default-text">
        <span id="mactitle">MacBook Pro</span>
        <span id="macdescription">Supercharged by M2 Pro and M2 Max.</span>
        <div class="mainpagelink"><a href="">Learn More ></a> <a href="">Buy ></a></div>
      </div>

    </div>
    <div class="promo5 grid-item">
      <div class="mp-default-text">
        <span class="motherday">Take your pic of Mother Day's gifts.</span>
        <span class="motherday2">So many ways to thank whoever you call mom.</span>
        <div class="mainpagelink"><a href="">Shop the gift guide ></a></div>
      </div>

    </div>
    <div class="promo6 grid-item">
      <div class="mp-default-text">
        <span class="applewatchcontainer"><img
            src="https://www.apple.com/v/home/az/images/logos/apple-watch-ultra/promo_logo_apple_watch_ultra__ebzaahharnue_large.png"
            alt="apple watch ultra"></span>
        <span>Adventure awaits.</span>
        <div class="mainpagelink"><a href="">Learn More ></a> <a href="">Buy ></a></div>
      </div>

    </div>
@endsection



@section('footer')
@include('web.footer')
@endsection