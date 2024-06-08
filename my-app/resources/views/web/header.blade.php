<header>
    <div class="header-container">
        <div class="logo-container">
        <img src="images/icons/logo1.png" alt="Logo" class="logo">
        </div>
        <div class="navigation-container">
            <div class="navigation">
                <ul class="menu">
                    <div class="close-btn">&times;</div>
                    <li class="menu-item">
                        <a href="/">Trang chủ</a>
                    </li>
                    @foreach($category as $item)
                        <li class="menu-item">
                            <a class="sub-btn" href="/duan/{{$item->slug}}/{{$item->id}}">{{$item->name}} &#9660;</a>
                            @if($item->categoryChildrent && $item->categoryChildrent->count() > 0)
                                <ul class="sub-menu">
                                    @foreach($item->categoryChildrent as $children)
                                        <li class="sub-item more">
                                            <a class="sub-btn" href="/duan/{{$children->slug}}/{{$children->id}}">{{$children->name}} </a>
                                            @if($children->categoryChildrent && $children->categoryChildrent->count() > 0)
                                                <ul class="more-menu">
                                                    @foreach($children->categoryChildrent as $grandChild)
                                                        <li class="more-item"><a href="/duan/{{$grandChild->slug}}/{{$grandChild->id}}">{{$grandChild->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    <li class="menu-item">
                        <a href="{{ url('/quytrinhthietke/' . Str::slug('Quy trình thiết kế')) }}" class="" title="Quy trình thiết kế">
                            <span>Quy trình thiết kế</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="extra-container">
            <a href="/admin/users/login" class="login-btn">Đăng nhập</a>
            <span class="contact-info">Liên hệ: 0123456789</span>
        </div>
        <div class="menu-btn">&#9776;</div>
    </div>
</header>

<script>
    $(document).ready(function() {
        $(".sub-btn").click(function() {
            $(this).next(".sub-menu").slideToggle();
        });

        $(".more-btn").click(function() {
            $(this).next(".more-menu").slideToggle();
        });

        var menu = document.querySelector(".menu");
        var menuBtn = document.querySelector(".menu-btn");
        var closeBtn = document.querySelector(".close-btn");
        menuBtn.addEventListener("click", () => {
            menu.classList.add('active');
        });
        closeBtn.addEventListener('click', () => {
            menu.classList.remove("active");
        });

      
    });
</script>
