<style>
    /*CSS*/
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
}

html {
  font-size: 10px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  scroll-behavior: smooth;
}

a {
  display: block;
  text-decoration: none;
}

.container {
  max-width: 98rem;
  margin: 0 auto;
  padding: 0 2.2rem;
}

/* header section */

header {
  position: fixed;
  top: 0;
  z-index: 1400;
  width: 100%;
  height: 4.4rem;
  background-color: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(1.5rem);
}
.nav-item {
    position: relative;
}
.nav-list {
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 0 -1rem;
}

.nav-list-mobile {
  display: none;
}

.nav-link {
  font-size: 1.4rem;
  color: #fff;
  padding: 0 1rem;
  transition: opacity 0.5s;
}



.nav-link:hover {
  opacity: 0.7;
}

.nav-link-apple {
  width: 1.6rem;
  height: 4.4rem;
  background: url("images/icons/apple.svg") center no-repeat;
}

.nav-link-search {
  width: 1.6rem;
  height: 4.4rem;
  background: url("images/icons/search.svg") center no-repeat;
}

.nav-link-bag {
  width: 1.4rem;
  height: 4.4rem;
  background: url("images/icons/bag.svg") center no-repeat;
}

.imac {
  margin-top: 0;
  background: url("images/hero/iMac/imac_large.jpg");
}

/* iphone11pro section */

.iphone-12-pro {
  background: url("images/hero/iphone-12-pro/iphone_12_pro_large.jpg");
}

.title {
  color: #fff;
  text-align: center;
  padding-top: 5.5rem;
}

.title-heading {
  font-size: 5.6rem;
  line-height: 1.08;
  letter-spacing: 0.005rem;
}

.title-sub-heading {
  font-size: 2.65rem;
  margin-top: 0.6rem;
  letter-spacing: 0.008rem;
  font-weight: 400;
}

.sub-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #333;
    padding: 10px 0;
    display: none;
}

.sub-menu li {
    margin: 0;
}

.sub-menu li a {
    padding: 10px 20px;
    display: block;
    color: #fff;
    text-decoration: none;
}

.nav-item:hover .sub-menu {
    display: block;
}

.title-price {
  font-size: 1.7rem;
  color: #888;
  margin-top: 0.68rem;
}

.cta {
  text-align: center;
  margin-top: 1.8rem;
}

.cta-link {
  color: #66bbff;
  font-size: 2.1rem;
  display: inline-block;
}

.cta-link:nth-child(2) {
  margin-left: 2.6rem;
}

.cta-link:hover {
  border-bottom: 2px solid #66bbff;
}

/* iphone 11 section */

.iphone-12 {
  background: url("images/hero/iphone-12/hero_iphone_12_large.jpg");
}

.title-dark {
  color: black;
}

.cta-link-darker {
  color: #0070c9;
}

.cta-link-darker:hover {
  border-bottom-color: #0070c9;
}

/* apple watch */

.watch {
  background: url("images/hero/watch/watch_large.jpg");
}

.title-heading-watch {
  height: 7.8rem;
  background: url("images/hero/watch/logo_watch_medium.png") center no-repeat;
  background-size: auto 7.8rem;
  margin-top: 1.6rem;
}

/* Move this to bottom of style.css file always */
.hero {
  height: 69.2rem;
  background-size: auto 74;
  background-position: center;
  background-repeat: no-repeat;
  border-top: 0.6rem solid #fff;
  border-bottom: 0.6rem solid #fff;
}

.imac {
  border-top: none;
}


.mainpage1 {
    background-image: url("https://www.apple.com/in/home/images/heroes/iphone-14-pro/hero_iphone14pro_spring__9xo85pm6sbmm_largetall.jpg");
    height: 588px;
    background-position: center -35px;
    background-position-x: center;
}

.mp1-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
}

.mp1-title1 {
    margin-top: 30px;
    font-size: 50px;
    font-weight: bolder;
}

.mp1-title2 {
    font-size: 25px;
}

.mainpagelink {
    font-size: 20px;
}

/* Main page - 2 -> iPhone 14 */

.mainpage2 {
    background-image: url("https://www.apple.com/in/home/heroes/iphone-14/images/hero_iphone14_yellow__eun20sn4imi6_largetall.jpg");
    background-position-x: center;
    height: 82vh;
    width: 100vw;
}

.mp-default-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: rgb(34, 34, 34);
    line-height: 30px;
}

.mp2-title1 {
    margin-top: 60px;
    font-size: 50px;
    font-weight: bolder;
    margin-bottom: 15px;
}

.mp2-desc {
    font-size: 23px;
}

.mainpagelink {
    font-size: 20px;
}

/* Main page - 3 -> Apple watch */

.mainpage3 {
    background-image: url("https://www.apple.com/in/home/images/heroes/apple-watch-series-8/hero_apple_watch_series_8_spring__b1y8wb7xjc9y_largetall.jpg");
    height: 78vh;
    background-position-x: center;
}

.mp3desc {
    font-size: 23px;
    color: white;
    margin-bottom: 15px;
}

/* Main page - 4 -> grid items */

.mainpage4 {
    background-color: white;
    display: flex;
    flex-wrap: wrap;
}

.grid-item {
    flex-basis: 49%;
    margin: 5px;
}

.applewatchlogo {
    margin-top: 60px;
}

.applewatchcontainer {
    margin-top: 50px;
}

.motherday {
    margin-top: 50px;
    font-size: 35px;
    font-weight: bold;
    width: 350px;
    text-align: center;
    line-height: 40px;
}

.motherday2 {
    margin-top: 10px;
    width: 250px;
    text-align: center;
    line-height: 20px;
    font-size: 18px;
    margin-bottom: 10px;
}

.promo1 {
    background-image: url("https://www.apple.com/v/home/az/images/promos/iphone-tradein/iphone_tradein_promo__d5au3rkw5kuq_large.jpg");
    background-position-x: center;
    height: 560px;

}

.promo2 {
    background-image: url("https://www.apple.com/v/home/az/images/promos/wwdc23-announce/promo_wwdc23__b68ptht3mro2_large.jpg");
    background-position-x: center;
    height: 560px;
}

.promo3 {
    background-image: url("https://www.apple.com/v/home/az/images/promos/ipad/promo_ipad__fioegapg12qi_large.jpg");
    background-position-x: center;
    height: 560px;
}

.promo4 {
    background-image: url("https://www.apple.com/v/home/az/images/promos/macbook-pro-14-and-16/promo_mbp__ek7p477bkp6q_large.jpg");
    background-position-x: center;
    height: 560px;
}

.promo5 {
    background-image: url("https://www.apple.com/v/home/az/images/promos/mothers-day-2023/airpods/promo__sw58lbodkmqq_large.jpg");
    background-position-x: center;
    height: 560px;
}

.promo6 {
    background-image: url("https://www.apple.com/in/home/promos/apple-watch-ultra/images/promo_apple_watch_ultra__gnsqulvdc4a6_large.jpg");
    background-position-x: center;
    height: 560px;
}


#ipadtitle {
    margin-top: 50px;
    font-size: 36px;
    font-weight: bolder;
}

#mactitle {
    margin-top: 50px;
    font-size: 36px;
    font-weight: bolder;
    color: white;
}

#macdescription {
    margin-top: 10px;
    color: white;
    font-size: 19px;
}

.appletradein {
    margin-top: 50px;
}

.wwdc23 {
    margin-top: 350px;
    color: white;
}

.wwdc23text {
    color: white;
}

footer {
    background-color: rgb(243, 243, 243);
    height: 100%;
    width:100%;
    display: flex;
    justify-content: center;
}

.footertext1 {
    margin: 25px;
    width: 820px;
    font-size: 13px;
    color: rgb(71, 71, 71);
}



.container1 {
    width: 100%; /* Adjust as needed */
}

.f-grid {
  margin-top: 15px;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 10px;
}

.f-grid-col {
    background-color: rgba(255, 255, 255, 0.5); /* Adjust background color as needed */
    padding: 20px;
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Căn chỉnh trên dưới */
}

/* CSS cho máy tính */
@media screen and (min-width: 1025px) {
    .f-grid-col {
        grid-column: span 1 / span 3; /* Chiếm 3 cột */
        justify-self: center; /* Căn đều theo chiều ngang */
        align-self: center; /* Căn đều theo chiều dọc */
    }
}

/* CSS cho điện thoại */
@media screen and (max-width: 640px) {
    .f-grid-col {
        grid-column: span 1 / span 1; /* Chiếm 1 cột */
        justify-self: center; /* Căn đều theo chiều ngang */
        align-self: center; /* Căn đều theo chiều dọc */
    }
}

.duan{
  background: url("images/hero/iphone-12-pro/iphone_12_pro_large.jpg") center/cover;
  margin-top: 50px;
}

.containerflex {
  
    display: flex;                  /* Kích hoạt flexbox cho phần tử chứa */
    gap: 20px;
    flex-direction: row;            /* Thiết lập hướng chính */
    flex-wrap: nowrap;              /* Thiết lập chế độ wrap, khi các phần tử vượt qua kích thước hướng chính*/
    justify-content: center;      /* Căn chỉnh nội dung bên trong container có flexbox*/
    align-items: center;           /* Căn chỉnh phần tử con theo hướng vuông góc hướng chính*/
    align-content: center;         /* Căn chỉnh hàng (cột) theo hướng vuông góc (chỉ hiệu lực khi nhiều hàng hoặc cột)*/
    height: 100%;
    padding:    5px;
    margin-top: 10px;
  
}

.flexitem {
    padding: 20px;
    background: lightblue;
    margin: 1px;
    font-weight: bold;
}

@media screen and (max-width: 640px) {
    .containerflex {
        flex-direction: column;  /* Thay đổi thành hướng dọc */
        background-size: cover;
    }
}

@media screen and (max-width: 1024px) {
    /* Điều chỉnh cho tablet */
    .containerflex {
        flex-direction: column;  /* Thay đổi thành hướng dọc */
        background-size: cover;
    }
}


/* end  */

/* TABLET view */

@media screen and (max-width: 1024px) {
  .imac{
    background: url("images/hero/iMac/imac_medium.jpg");
  }
  .iphone-12-pro {
    background: url("images/hero/iphone-12-pro/iphone_12_pro_medium.jpg");
  }
  .iphone-12 {
    background: url("images/hero/iphone-12/hero_iphone_12_small.jpg");
  }
  .watch {
    background: url("images/hero/watch/watch_medium.jpg");
  }
  .hero {
    height: 65rem;
    background-size: auto;
    background-position: bottom center;
    background-repeat: no-repeat;
  }

  .title-heading {
    font-size: 4.4rem;
  }

  .title-sub-heading {
    font-size: 2.4rem;
  }

  .cta-link:nth-child(2) {
    margin-left: 2rem;
  }

  .title-heading-watch {
    height: 6.2rem;
    background: url("images/hero/watch/logo_watch_medium.png") center no-repeat;
    background-size: auto 6.2rem;
  }
}

/* MOBILE VIEW  */

@media screen and (max-width: 640px) {
  header {
    height: 4.8rem;
    transition: background 0.36s cubic-bezier(0.32, 0.08, 0.24, 1),
      height 0.56s cubic-bezier(0.32, 0.08, 0.24, 1);
  }

  header .container {
    padding: 0;
  }

  .imac {
    margin-top: 4.8rem;
  }

  .nav-list {
    margin-top: 0;
  }

  .nav-list-mobile {
    display: flex;
  }

  .nav-item {
    width: 4.8rem;
    height: 4.8rem;
    display: flex;
    justify-content: center;
  }

  .nav-item-hidden {
    display: none;
  }

  .mobile-menu {
    position: relative;
    z-index: 1500;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }

  .line {
    position: absolute;
    width: 1.7rem;
    height: 1px;
    background-color: white;
    transition: margin-top 0.3192s cubic-bezier(0.04, 0.04, 0.12, 0.96);
  }

  .line-top {
    margin-top: 3px;
  }

  .line-bottom {
    margin-top: -0.4rem;
  }

  .active .line-top {
    margin-top: 0;
    transform: rotate(45deg);
    transition: transform 0.3192s 0.1s cubic-bezier(0.04, 0.04, 0.12, 0.96);
  }
  .active .line-bottom {
    margin-top: 0;
    transform: rotate(-45deg);
    transition: transform 0.3192s 0.1s cubic-bezier(0.04, 0.04, 0.12, 0.96);
  }

  header.active {
    height: 100%;
    background-color: black;
  }

  .nav-link-apple {
    width: 1.8rem;
    height: 4.8rem;
    position: relative;
    z-index: 1500;
  }

  .nav-link-bag {
    width: 1.6rem;
    height: 4.8rem;
    transition: opacity 3s;
  }

  .nav {
    position: relative;
  }

  .nav-link {
    font-size: 1.7rem;
    padding: 0;
    margin: auto;
  }

  .nav-list-larger {
    position: fixed;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    display: block;
    padding: 10.5rem 5rem;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    box-sizing: border-box;
    transition: opacity 0.3s;
  }

  .active .nav-list-larger {
    width: 100%;
    height: 100vh;
    opacity: 1;
    visibility: visible;
  }

  .active .nav-list-bag {
    opacity: 0;
    transition: opacity 0.3s;
  }

  .nav-list-larger .nav-item {
    width: 100%;
    justify-content: flex-start;
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
  }

  .nav-list-larger .nav-item:nth-child(9) {
    border-bottom: none;
  }
  .active .nav-list-larger .nav-item {
    animation: fadeIn 1s ease-in;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
}

@media screen and (max-width: 640px) {
  .imac{
    background: url("images/hero/iMac/imac_small.jpg");
  }
  .iphone-12-pro {
    background: url("images/hero/iphone-12-pro/iphone_12_pro_small.jpg");
  }
  .iphone-12 {
    background: url("images/hero/iphone-12/hero_iphone_12_small.jpg");
  }
  .watch {
    background: url("images/hero/watch/watch_small.jpg");
  }
  .hero {
    height: 54rem;
    background-size: auto 55rem;
    background-position: bottom center;
    background-repeat: no-repeat;
  }
  .title {
    padding: 3.7rem;
  }

  .title-heading {
    font-size: 3.2rem;
  }
  .title-sub-heading {
    font-size: 1.9rem;
  }
  .title-heading-watch {
    margin-top: -0.5rem;
    margin-bottom: 0;
  }

  .title-price {
    font-size: 1.4rem;
  }

  .cta {
    margin-top: 0.7rem;
  }

  .cta-link {
    font-size: 1.9rem;
  }
}


@media (max-width: 1022px) {

/* Navbar Styles */

 nav {
     height: 6.5vh;
 }

 .navicon {
     display: block;
 }

 .respnavbar {
     display: block;
 }

 .responsivediv {
     display: flex;
     position: absolute;
     top: 25%;
     right: 3%;
 }

 .navlinks {
     display: block;
 }

 .navlink {
     display: none;
 }

 /* The info box below the Navbar */

 .infobartext {
     flex-direction: column;
 }

 /* Main page - 1 -> iPhone 14 Pro */

 .mainpage1 {
     background-image: url("https://www.apple.com/in/home/images/heroes/iphone-14-pro/hero_iphone14pro_spring__9xo85pm6sbmm_small.jpg");
     height: 515px;
 }

 .mp1-title1 {
     font-size: 32px;
 }

 .mp1-title2 {
     font-size: 20px;
     margin-bottom: 15px;
 }
 
 .mainpagelink {
     font-size: 16px;
 }

 /* Main page - 2 -> iPhone 14 */

 .mainpage2 {
     background-image: url("https://www.apple.com/in/home/heroes/iphone-14/images/hero_iphone14_yellow__eun20sn4imi6_small.jpg");
     height: 550px;
 }

 /* Main page - 3 -> Apple watch */

 .mainpage3 {
     background-image: url("https://www.apple.com/in/home/images/heroes/apple-watch-series-8/hero_apple_watch_series_8_spring__b1y8wb7xjc9y_small.jpg");
     height: 545px;
 }

 /* Main page - 4 -> grid items */

 .grid-item {
     flex-basis: 100%;
     margin: 0px;
 }

 .promo1 {
     background-image: url("https://www.apple.com/v/home/az/images/promos/iphone-tradein/iphone_tradein_promo__d5au3rkw5kuq_medium.jpg");
     height: 490px;
 }

 .promo2 {
     background-image: url("https://www.apple.com/v/home/az/images/promos/wwdc23-announce/promo_wwdc23__b68ptht3mro2_medium.jpg");
 }

 .promo3 {

     height: 590px;
 }

 .promo4 {
     background-image: url("https://www.apple.com/v/home/az/images/promos/macbook-pro-14-and-16/promo_mbp__ek7p477bkp6q_medium.jpg");
     height: 500px;
 }

 .promo6 {
     background-image: url("https://www.apple.com/in/home/promos/apple-watch-ultra/images/promo_apple_watch_ultra__gnsqulvdc4a6_small.jpg");
 }
}

</style>