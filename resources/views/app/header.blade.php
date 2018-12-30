<header class="header">
                <div class="navigation-trigger" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <a href="{{ env('APP_URL') }}/"><img style="height:20px;" src="{{ env('APP_URL') }}/img/logo.png"></a>
                </div>

                <form method="GET" action="{{ env('APP_URL') }}/search/" class="search">
                    <div class="search__inner">
                        <form">
                        <input name='s' type="text" class="search__text" placeholder="Search" value="{{ isset($s) ? $s : ''  }}">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                        </form>
                    </div>
                

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a type='submit' data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                </ul>
            </form>
            </header>

            @include('app.sidebar')

            <div class="themes">
    <div class="scrollbar-inner">
        <a href="" class="themes__item active" data-sa-value="1"><img src="img/bg/1.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="2"><img src="img/bg/2.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="3"><img src="img/bg/3.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="4"><img src="img/bg/4.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="5"><img src="img/bg/5.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="6"><img src="img/bg/6.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="7"><img src="img/bg/7.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="8"><img src="img/bg/8.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="9"><img src="img/bg/9.jpg" alt=""></a>
        <a href="" class="themes__item" data-sa-value="10"><img src="img/bg/10.jpg" alt=""></a>
    </div>
</div>