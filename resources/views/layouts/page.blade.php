@extends('layouts.master')

@section('page')
   <!-- HEADER MOBILE-->
   <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('assets/images/logo.gif')}}"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{{ route('clients.index') }}}">
                                <i class="fas fa-users"></i>Clientes</a>
                        </li>
                        <li>
                        <a href="{{{ route('providers.index') }}}">
                                <i class="fas fa-users"></i>Fornecedores</a>
                        </li>
                        <li>
                        <a href="{{{ route('extracts.index') }}}">
                                <i class="fas fa-chart-bar"></i>Extratos</a>
                        </li>
                        <li>
                        <a href="{{{ route('categories.index') }}}">
                                <i class="fas fa-table"></i>Categorias</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Conta</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                <a href="{{{ route('accounts.index') }}}">
                                <i class="fas fa-table"></i>Contas</a>
                                </li>

                                <li>
                                <a href="{{{ route('accountpays.index') }}}">
                                <i class="fas fa-table"></i>Contas a pagar</a>
                                </li>
                                <li>
                                <a href="{{{ route('accountreceives.index') }}}">
                                <i class="fas fa-table"></i>Contas a receber</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                    <img src="{{asset('assets/images/logo.gif')}}"/>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{{ route('clients.index') }}}">
                                <i class="fas fa-users"></i>Clientes</a>
                        </li>
                        <li>
                            <a href="{{{ route('providers.index') }}}">
                                <i class="fas fa-users"></i>Fornecedores</a>
                        </li>
                        <li>
                        <a href="{{{ route('extracts.index') }}}">
                                <i class="fas fa-chart-bar"></i>Extratos</a>
                        </li>
                        <li>
                        <a href="{{{ route('categories.index') }}}">
                                <i class="fas fa-table"></i>Categorias</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Conta</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{{ route('accounts.index') }}}">
                                <i class="fas fa-table"></i>Contas</a>
                                </li>

                                <li>
                                <a href="{{{ route('accountpays.index') }}}">
                                <i class="fas fa-table"></i>Contas a pagar</a>
                                </li>
                                <li>
                                <a href="{{{ route('accountreceives.index') }}}">
                                <i class="fas fa-table"></i>Contas a receber</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                               
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('assets/images/user.png')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('assets/images/user.png')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Auth::user()->email}}</a>
                                                    </h5>
                                                    <span class="email"></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Conta</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Configuração</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i> Sair </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}</form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                 @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
@endsection
