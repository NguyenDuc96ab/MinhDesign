<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    header {
        z-index: 999;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #23252B;
        box-shadow: 0 5px 25px rgb(0, 0, 0 /20%);
        padding: 0 50px;
        transition: 0.6s;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-container {
        flex: 2;
    }

 
.logo {
    width: 20%;
    height: auto;
    /* Điều chỉnh kích thước logo nếu cần */
    /* Ví dụ: width: 150px; height: auto; */
}

    .navigation-container {
        flex: 8;
        display: flex;
        justify-content: space-around;
        
    }

    .navigation {
        line-height: 75px;
        transition: 0.6s;
        transition-property: line-height;
    }

    .sticky .navigation {
        line-height: 60px;
    }

    .menu {
        display: flex;
        justify-content: center;
        list-style: none;
        user-select: none;
    }

    .menu-item > a {
        color: #fff;
        font-size: 1.5rem;
        text-decoration: none;
        margin: 40px;
        padding: 25px 0;
    }

    .menu-item > a:hover {
        color: #469DFF;
        transition: 0.3s;
    }

    .menu-item .sub-menu, .more .more-menu {
        position: absolute;
        background: #23252B;
        top: 74px;
        line-height: 40px;
        list-style: none;
        border-radius: 0 0 8px 8px;
        box-shadow: 0 5px 25px rgb(0, 0, 0 /25%);
        pointer-events: none;
        transform: translateY(20px);
        opacity: 0;
        transition: 0.3s;
        transition-property: transform, opacity;
    }

    .menu-item:hover .sub-menu {
        pointer-events: all;
        transform: translateY(0);
        opacity: 1;
        transition: 0.3s;
        transition-property: transform, opacity;
    }

    .sub-item, .more-item {
        position: relative;
        padding: 7px 0;
        cursor: pointer;
        box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
    }

    .sub-item a, .more-item a {
        color: #fff;
        font-size: 1em;
        text-decoration: none;
        padding: 15px 30px;
    }

    .sub-item:hover, .more-item:hover {
        background: #4080EF;
    }

    .sub-item:last-child:hover {
        border-radius: 0 0 8px 8px;
    }

    .more .more-menu {
        top: 0;
        left: 100%;
        white-space: nowrap;
        border-radius: 0 8px 8px 8px;
        overflow: hidden;
        transform: translateX(-20px);
    }

    .menu-item:hover .sub-menu, .sub-item:hover .more-menu {
        pointer-events: all;
        transform: translateX(0);
        opacity: 1;
        transition: 0.3s;
        transition-property: transform, opacity;
    }

    .extra-container {
        flex: 2;
        display: flex;
        align-items: center;
    }

    .login-btn {
        background: #4080EF;
        padding: 10px 20px;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
        margin-right: 15px;
    }

    .login-btn:hover {
        background: #3577D4;
        transition: 0.3s;
    }

    .contact-info {
        color: #fff;
        font-size: 1rem;
    }

    .menu-btn {
        display: none;
        cursor: pointer;
        color: #fff;
        font-size: 1.8rem;
    }
    .close-btn{
        display: none;
    }

    @media (max-width: 1060px) {
        header {
            padding: 15px 20px;
        }

        .header-container {
            flex-direction: row;
        }

        .logo-container, .navigation-container, .extra-container {
            flex: 1 1 100%;
        }

        .navigation .menu {
            flex-direction: column;
        }

        .extra-container {
            display: none;
        }

        .sticky {
            padding: 10px 20px;
        }

        .navigation .menu {
            position: fixed;
            background: #23252b;
            min-width: 350px;
            height: 100vh;
            top: 0;
            right: -100%;
            padding: 90px 50px;
            overflow-y: auto;
            transition: 0.5s;
            transition-property: right, visibility;
            visibility: hidden;
        }

        .sticky .navigation {
            line-height: 75px;
        }

        .navigation .menu.active {
            right: 0;
            visibility: visible;
        }

        .menu-item {
            position: relative;
        }

        .menu-item .sub-menu {
            opacity: 1;
            position: relative;
            top: 0;
            transform: translateY(10px);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            overflow: hidden;
            display: none;
        }

        .sticky .menu-item .sub-menu {
            top: 0;
        }

        .menu-item:hover .sub-menu {
            transform: translateY(10px);
        }

        .menu-item .sub-menu .sub-item {
            box-shadow: none;
        }

        .menu-item .sub-menu .sub-item:hover {
            background: none;
        }

        .menu-item .sub-menu .sub-item a:hover {
            color: #4080EF;
            transition: 0.3s;
        }

        .more .more-menu {
            opacity: 1;
            position: relative;
            left: 0;
            transform: translateX(10px);
            border-radius: 5px;
        }

        .menu-item:hover .sub-menu, .sub-item:hover .more-menu {
            pointer-events: all;
            transform: translateX(10px);
            opacity: 1;
            transition: 0.3s;
            transition-property: transform, opacity;
        }

        .menu-btn {
            display: block;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .close-btn {
            display: block;
            color: #fff;
            font-size: 2rem;
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .extra-container-mobile {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .extra-container-mobile .login-btn {
            margin-right: 10px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fff;
            cursor: pointer;
        }
    }
</style>











<style>
    
/* iphone11pro section */

.iphone-12-pro {
    margin-top: 0;
  background: url("images/noithat/hinhanh11.jpg") no-repeat ;
  background-size: cover;
  width: 100%;

 
}

.title {
    color: #fff;
    text-align: center;
    padding-top: 5.5rem;
}

.title-heading {
    font-size: 36px;
    line-height: 1.08;
    letter-spacing: 0.005rem;
    color: #fff;
    font-family: 'Times New Roman', Times, serif;
}

.title-sub-heading {
    font-size: 2.65rem;
    margin-top: 0.6rem;
    letter-spacing: 0.008rem;
    font-weight: 400;
    font-family: 'Times New Roman', Times, serif;
    color: #fff;
}




.title-price {
  font-size: 1.7rem;
  color: #fff;
  margin-top: 0.68rem;
  font-family: 'Times New Roman', Times, serif;
}

.cta {
  text-align: center;
  margin-top: 1.8rem;
  font-family: 'Times New Roman', Times, serif;
}

.cta {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.cta a {
  text-decoration: none;
}

.cta-button {
  color: #fff;
  background: #4080EF;
  padding: 15px 30px; /* Adjust padding for button size */
  border: none;
  border-radius: 20px; /* Make the button slightly rounded */
  cursor: pointer;
  font-size: 16px;
  transition: background 0.3s;
}

.cta-button:hover {
  background: #3577D4;
}

.cta-button-ver {
  color: #fff;
  background: black;
  padding: 15px 30px; /* Adjust padding for button size */
  border: none;
  border-radius: 20px; /* Make the button slightly rounded */
  cursor: pointer;
  font-size: 16px;
  transition: background 0.3s;
}

.cta-button-ver:hover {
  background: #3577D4;
}
/* iphone 11 section */

.iphone-12 {
    margin-top: 0;
  background: url("images/noithat/hinhanh12.jpg") no-repeat ;
  background-size: cover;
  width: 100%;

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
    margin-top: 0;
  background: url("images/noithat/hinhanh5.jpg") no-repeat center center fixed;
  background-size: cover;
  width: 100%;
 
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
    justify-content: center;
    align-items: center;
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
  background: url("images/noithat/hinhanh4.jpg");
    background-position-x: center;
    height: 560px;

}

.promo2 {
    background-image: url("images/noithat/hinhanh13.png");
    background-position-x: center;
    background-size: cover;
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
    margin-top: 190px;
    color: white;
    font-family: 'Times New Roman', Times, serif;
}



.wwdc23text {
    color: white;
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
}

footer {
    background-color: rgb(243, 243, 243);
    height: 100%;
    width:100%;
    display: flex;
    justify-content: center;
}

.footertext1 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    margin: 25px;
    width: 820px; /* Kích thước cố định cho footer */
}

.footer-column {
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
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    height: 100%;
    padding: 5px;
    margin-top: 10px;
}

.flexitem {
    position: relative; /* Cần thiết để vị trí tuyệt đối hoạt động */
    font-weight: bold;
    overflow: hidden; /* Thêm dòng này để đảm bảo các nội dung thừa bị ẩn */
}

.overlay {
    position: absolute;
    bottom: 0; /* Điều chỉnh để nằm sát đáy của phần tử cha */
    left: 0; /* Điều chỉnh để nằm sát trái của phần tử cha */
    width: 100%; /* Đảm bảo overlay chiếm toàn bộ chiều rộng của phần tử cha */
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    padding: 10px; /* Giảm padding để tránh tràn nội dung */
    box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước tổng thể */
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
    background: url("images/noithat/hinhanh11.jpg");
  }
  .iphone-12 {
    background: url("images/hero/iphone-12/hero_iphone_12_small.jpg");
  }
  .watch {
    background: url("images/noithat/hinhanh5.jpg");
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
    .mainpage4 {
        display: none;
    }
  .imac{
    background: url("images/hero/iMac/imac_small.jpg");
  }
  .iphone-12-pro {
    background: url("images/noithat/hinhanh11.jpg");
  }
  .iphone-12 {
    background: url("images/noithat/hinhanh4.jpg");
  }
  .watch {
    background: url("images/noithat/hinhanh5.jpg");
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
     background-image: url("images/noithat/hinhanh5.jpg");
     height: 490px;
 }

 .promo2 {
     /* background-image: url("https://www.apple.com/v/home/az/images/promos/wwdc23-announce/promo_wwdc23__b68ptht3mro2_medium.jpg"); */
 }

 .promo3 {

     /* height: 590px; */
 }

 .promo4 {
     background-image: url("https://www.apple.com/v/home/az/images/promos/macbook-pro-14-and-16/promo_mbp__ek7p477bkp6q_medium.jpg");
     height: 500px;
 }

 .promo6 {
     background-image: url("https://www.apple.com/in/home/promos/apple-watch-ultra/images/promo_apple_watch_ultra__gnsqulvdc4a6_small.jpg");
 }
}

.imac {
  margin-top: 0;
  background: url("images/noithat/hinhanh8.jpg") no-repeat center center fixed;
  background-size: cover;
  width: 100%;
}







.mn {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.box1 {
    width: 40%; /* Default width */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
    overflow: hidden; /* Ensure rounded corners are applied to children */
}

.title1 {
    font-size: 24px;
    font-weight: bold;
    padding: 20px;
    background-color: #FFBA00; /* Yellow background for the title */
    color: #333;
    text-align: center;
    margin-top: 60px;
}

.divider {
    height: 2px;
    background-color: #ccc; /* Gray color for the divider */
}

.content1 {
    font-size: 16px;
    color: #666;
    background-color: #fff; /* White background for the content */
    padding: 20px;
    line-height: 1.5;
    text-align: center;
}

/* Media queries for responsiveness */
@media (max-width: 991px) {
    .box1 {
        width: 90%; /* Adjust width for tablets */
    }
    .title1, .content1 {
        padding: 15px; /* Adjust padding for tablets */
    }
    .title1 {
        font-size: 22px; /* Adjust font size for tablets */
    }
    .content1 {
        font-size: 15px; /* Adjust font size for tablets */
    }
}

@media (max-width: 767px) {
    .box1 {
        width: 95%; /* Adjust width for mobile phones */
    }
    .title1, .content1 {
        padding: 10px; /* Adjust padding for mobile phones */
    }
    .title1 {
        font-size: 20px; /* Adjust font size for mobile phones */
    }
    .content1{
        font-size: 14px; /* Adjust font size for mobile phones */
    }
}


.allcontent {
            background-color: #161616; /* Đặt màu nền đen cho allcontent */
            color: #fff; /* Đặt màu chữ trắng */
            padding: 20px; /* Thêm khoảng cách padding nếu cần */
        }

        .row1 {
            display: flex;
            justify-content: center;
            margin-left: 0; /* Loại bỏ margin-left nếu không cần thiết */
            gap: 20px; /* Khoảng cách giữa các sản phẩm */
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            margin-bottom: 20px;
            background-color: #FFFFFF; /* Đặt màu nền cho thẻ sản phẩm */
            color: black; /* Đặt màu chữ cho thẻ sản phẩm */
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .product-body {
            padding: 20px;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .product-description {
            font-size: 16px;
            color: black; /* Đặt màu chữ mô tả sản phẩm */
        }

       
        .btn-explore {
    position: relative;
    display: inline-block;
    padding: 5px 30px;
    margin-top: 10px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    font-size: 14px;
}

.btn-explore::after {
    content: "";
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

/* Điều chỉnh kích thước và màu sắc của icon */
.btn-explore i {
    margin-left: 5px; /* Khoảng cách giữa chữ và icon */
    font-size: 14px;
    color: #fff;
}



.container3 {
    padding: 20px;
}

.main-content {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.breadcrumb-arrow {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 5px;
    list-style: none;
    margin-top: 72px;
}

.breadcrumb-arrow li {
    list-style: none;
    display: inline;
    margin-right: 5px;
}

.breadcrumb-arrow li a {
    text-decoration: none;
    color: #007bff;
}

.breadcrumb-arrow li.active span {
    color: #6c757d;
}

.product-detail {
    margin-top: 20px;
}

.product-detail h1 {
    font-size: 24px;
    margin-bottom: 15px;
}

.product-detail p {
    font-size: 16px;
    margin-bottom: 20px;
}

.product-content img {
    max-width: 100%;
    height: auto;
}

.sidebar {
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    height: fit-content;
    margin-left: auto; /* Ensure the sidebar is always on the right */
    margin-bottom: 20px;
}

@media (max-width: 992px) {
    .main-content {
        margin-bottom: 20px;
    }
    .sidebar {
        margin-top: 20px;
    }
}
.abc {
   
    background-color: #dc3545; /* Màu nền đỏ */
    color: #ffffff; /* Màu chữ trắng */
    border-radius: 10px; /* Bo góc */
    display: flex; /* Sử dụng flexbox */
    justify-content: center; /* Căn giữa theo chiều dọc */
    align-items: center; /* Căn giữa theo chiều ngang */
    margin-bottom: 10px; /* Khoảng cách với phần dưới */
    text-align: center; /* Căn giữa theo chiều ngang */
    height: 60px; /* Chiều cao của box */
    padding: 0 10px; /* Khoảng cách giữa viền và nội dung theo chiều ngang */
}

.abc h2 {
    font-size: 22px; /* Giảm kích thước font chữ */
    margin: 0; /* Bỏ khoảng cách trên dưới của thẻ h2 */
    line-height: 1; /* Giảm khoảng cách giữa các dòng */
}


.form-box {
    background-color: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

.form-container {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-weight: bold;
}

.checkbox-inline {
    margin-right: 10px;
}

.form-control {
    margin-top: 5px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.btn-block {
    width: 100%;
}


.abcd {
    background-color: #dc3545; /* Màu nền đỏ */
    color: #ffffff; /* Màu chữ trắng */
    border-radius: 10px; /* Bo góc */
    display: flex; /* Sử dụng flexbox */
    justify-content: center; /* Căn giữa theo chiều dọc */
    align-items: center; /* Căn giữa theo chiều ngang */
    text-align: center; /* Căn giữa theo chiều ngang */
    height: 60px; /* Chiều cao của box */
    padding: 0 10px; /* Khoảng cách giữa viền và nội dung theo chiều ngang */
}

.abcd h2 {
    font-size: 22px; /* Giảm kích thước font chữ */
    margin: 0; /* Bỏ khoảng cách trên dưới của thẻ h2 */
    line-height: 1; /* Giảm khoảng cách giữa các dòng */
}

.news-list {
    list-style: none; /* Bỏ dấu chấm đầu dòng */
    padding: 0; /* Bỏ khoảng cách mặc định */
    margin: 0; /* Bỏ khoảng cách mặc định */
    width: 100%; /* Chiều rộng 100% */
}

.news-item {
    display: flex; /* Sử dụng flexbox */
    align-items: center; /* Căn giữa theo chiều dọc */
    margin-top: 10px; /* Khoảng cách giữa các mục */
    padding: 10px; /* Khoảng cách bên trong */
    background-color: #ffffff; /* Màu nền trắng */
    color: #000000; /* Màu chữ đen */
    border-radius: 10px; /* Bo góc */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng */
}

.news-item img {
    width: 50px; /* Chiều rộng của ảnh */
    height: 50px; /* Chiều cao của ảnh */
    border-radius: 5px; /* Bo góc ảnh */
    margin-right: 10px; /* Khoảng cách giữa ảnh và tiêu đề */
}

</style>