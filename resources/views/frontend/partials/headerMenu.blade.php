<nav class="nav-holder style-1">
    <div class="container">
        <div class="mega-dropdown-wrapper">

            <!-- Logo -->
            <div class="logo">
                <a href="{!! route('common.home') !!}"><img src="{!! asset('public/frontend/images/logo-1.png') !!}" alt=""></a>
            </div>
            <!-- Logo -->

            <!-- Search bar -->
            <div class="search-bar">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
            <!-- Search bar -->

            <!-- Responsive Button -->
            <div class="responsive-btn">
                <a href="#menu" class="menu-link circle-btn"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Responsive Button -->

            <!-- Navigation -->
            <div class="navigation">
                <ul>

                    @if(isset($menu_list))
                        @foreach($menu_list AS $menu)
                            @if(count($menu['sub_menu']) > 0)
                                @include("frontend.partials.partials.header-mega-menu", [ 'menu' => $menu ])
                            @else
                                <li>
                                    <a href="{!! $menu['slug'] !!}">
                                        {!! $menu['label'] !!}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif

                    <!-- <li>
                        <a href="#"><i class="fa fa-home"></i>Home</a>                    
                    </li>
                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-shopping-bag"></i>shop</a>
                        <ul>
                            <li><a href="#">shop</a></li>
                        </ul>
                    </li> -->

                    <!-- <li>
                        <a href="#"><i class="fa fa-pencil"></i>blog</a>        
                    </li>
                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-book"></i>categories</a>
                        <ul>
                            <li><a href="#">Home Cleaning & Repairs</a></li>
                            <li><a href="#">Beauty & Spa</a></li>
                            <li><a href="#">Weddings & Events</a></li>
                            <li><a href="#">Business Services</a></li>
                            <li><a href="#">Personal &  More</a></li>
                            <li><a href="#">Lessons & Hobbies</a></li>
                        </ul>   
                    </li>
                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-files-o"></i>Pages</a>
                        <ul>
                            <li><a href="#">about</a></li>
                            <li><a href="#">gallery</a></li>
                            <li><a href="#">event list</a></li>
                            <li><a href="#">event detail</a></li>
                            <li><a href="#">book list</a></li>
                            <li><a href="#">book detail</a></li>
                            <li><a href="#">404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-file-text"></i>author</a>
                        <ul>
                            <li><a href="#">author</a></li>
                            <li><a href="#">author detail</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-fax"></i>contact</a></li> -->
                </ul>
            </div>
            <!-- Navigation -->

        </div>
    </div>
</nav>