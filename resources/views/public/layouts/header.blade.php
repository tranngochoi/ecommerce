<div>
    <header>
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop">
                    <div class="left-header">
                        <!-- Logo desktop -->
                        <div class="logo">
                            <a href="{{ route('trang-chu') }}"><img src="source/images/icons/logochau.png" alt="IMG-LOGO"></a>
                        </div>
                    </div>
                    <div class="center-header">
                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li>
                                    <a href="{{ route('san-pham') }}">@lang('index.label_product')</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-sidebar-grid.html">RAU CỦ</a></li>
                                        <ul class="sub-menu">
                                            <li><a href="shop-sidebar-grid.html">RAU</a></li>
                                            <li><a href="shop-sidebar-grid.html">CỦ</a></li>
                                        </ul>
                                        <li><a href="shop-sidebar-grid.html">TRÁI CÂY ĐẶC SẢN VIỆT NAM</a></li>
                                        <li><a href="shop-sidebar-grid.html">TRÁI CÂY NHẬP KHẨU</a></li>
                                        <li><a href="shop-sidebar-grid.html">ĐỒ KHÔ</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('lien-he') }}">@lang('index.label_contact')</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="right-header">
                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                            <!--Search -->
                            <div class="h-full flex-m">
                                <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                                    <img src="source/images/icons/icon-search.png" alt="SEARCH">
                                </div>
                            </div>
                            <!--...-->
                            @guest
                            <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                                <div id="icon-login" class="icon-header-item flex-c-m trans-04" >
                                    <img src="source/images/icons/icon-login.png" alt="login">
                                </div>
                                <div id="form-login" class="cart-header menu-click-child trans-04">
                                    {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
                                    <div class="p-b-24">
                                        {{ Form::text('email', old('email'), ['class' => ['txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'name', 'required' => 'required', 'autofocus' => 'autofocus','placeholder'=>'Email đăng nhập','id'=>'email']) }}
                                    </div>
                                    <div class="p-b-24">
                                        {{ Form::password('password', ['class' => ['txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1', $errors->has('password') ? ' is-invalid' : ''], 'id' => 'password', 'required' => 'required','id'=>'password', 'placeholder'=>'Mật khẩu']) }}
                                    </div>
                                    <div class="flex-w flex-m p-t-15 p-b-10">
                                        {!! Form::submit(trans('index.btn_login'), ['class' => 'flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18']) !!}
                                        <div class="flex-w flex-m p-tb-8">
                                            {{ Form::checkbox('remember', old('remember') ? 'checked' : '', true, ['class' => ['size-a-35 m-r-10'] ,'id' => 'remember'] )}}
                                            {{ Form::label('remember', trans('index.label_remember_me'), ['class' => 'txt-s-101 cl9']) }}
                                        </div>
                                    </div>
                                    <a href="account-lost-pass.html" class="txt-s-101 cl9 hov-cl10 trans-04">
                                    @lang('index.label_forgot_password')
                                    </a>
                                    {!! Form::close() !!}
                                    <a href="account.html" class="txt-s-101 cl9 hov-cl10 trans-04">
                                    @lang('index.btn_register')
                                    </a>
                                    <div class="social">
                                        <div class="social-inner">
                                            <a class="fa fa-2x fa-google btn btn-danger" href="#"></a>
                                            <a class="fa fa-2x fa-twitter btn btn-info" href="#"></a>
                                            <a class="fa fa-2x fa-facebook btn btn-primary" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                                <div class="icon-header-item flex-c-m trans-04" id="icon-user">
                                    <img src="source/images/icons/icon-user.png" alt="user">
                                </div>
                                <div class="cart-header menu-click-child trans-04">
                                    <a href="myaccount.html" class="txt-s-101 cl9 hov-cl10 trans-04">@lang('index.welcome_name'): {{ Auth::user()->name }} </a><br/>
                                    <a href="myaccount.html" class="txt-s-101 cl9 hov-cl10 trans-04">Chi Tiết</a><br/>

                                    <div class="flex-w flex-m p-t-15 p-b-10">
                                        <button class="dropdown-item flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
                                            @lang('index.btn_logout')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endguest
                            <!--....-->
                            @include('public.page.cart')
                        </div>
                    </div>
                </nav>
                <!--Edit Search-->
                <div class="container-search-header" id="container-search-header" style="display:none;">
                    {!! Form::open(['method'=>'POST', 'class'=>'wrap-search-header flex-w']) !!}
                    <button class="flex-c-m trans-04">
                    <span class="lnr lnr-magnifier"></span>
                    </button>
                    {!! Form::text('search', '', ['placeholder'=>'Search','class' => 'plh1']) !!}
                    {!! Form::close() !!}
                </div>
                <!--Edit Search-->
            </div>
        </div>
    </header>
</div>
