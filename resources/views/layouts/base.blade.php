<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Name site</title>
    <meta name="description" content="1-2-3-senten.text about site">
    <meta name="keywords" content="mm,mm,mmm,mm,vv">
    <link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('media/css/main.css')}}" rel="stylesheet" type="text/css" />
    <script src = 'media/js/jquery.min.js'></script>
    <script src = 'media/js/Index.js'></script>
</head>

<body>
    <div id="header">
    
        <img src="media/img/logo.png" id="logo" />
        <h1 id="logotext">name</h1>
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </div>

    <div id="nav">
        <a href="#" data-title='Main' data-body = 'html клд для главной страницы' data-image = 'img1.jpg'>Main</a>
        <a href="#" data-title='About company' data-body = 'html клд компании' data-image = 'img2.jpg'>About company</a>
        <a href="#" data-title='Service' data-body = 'html клд для услуг' data-image = 'img3.jpg'>Service</a>
        <a href="#" data-title='Items' data-body = 'html клд для товаров' data-image = 'img4.jpg'>Items</a>
        <a href="#" data-title='Contacts' data-body = '+375 (29) 378 97 74' data-image = 'img5.jpg'>Contacts</a>
    </div>
    <div class="container my-cont">
        <div class="row">
            <div class="col-2">
                <a href="#" class="btn btn-light btn-block">Site development</a>
                <a href="#" class="btn btn-light btn-block">Website promotion</a>
                <a href="#" class="btn btn-light btn-block">Copyright</a>
            </div>
            <div class="col">
                <div>
                  @yield('content')
                <div id='blocks' class='blocks'>

                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img class='image_block' src='media/img/block1.jpg'>
                            </div>
                            <div class="back">
                                <p>Откуда пошла традиция вырезать на Хэллоуин тыкву?</p>
                                <p>Это не просто интересный предмет интерьера, который создает необходимую для праздника зловещую атмосферу. Cветильник Джека отгоняет всех злых духов.Традиция вырезать своеобразный фонарик пошла от кельтского обычая. Кельты
                                    верили, что подобные фонари помогают душам умерших людей найти путь в чистилище.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img class='image_block' src='media/img/block2.jpg'>
                            </div>
                            <div class="back">
                                <p>"Неприятность или угощение": почему на Хэллоуин просят сладости</p>
                                <p>В Великобритании и Ирландии дети традиционно выпрашивают сладости в шуточно-ультимативной форме. Такая традиция существует веками и связана с понятием Souling – пропевания детьми кельтских заупокойных молитв, после которых
                                    взрослые давали им конфеты. В Шотландии была подобная традиция – Guising. Дети, переодетые в карнавальные костюмы, ходили по домам, выпрашивая сладости и монеты. При этом они говорили: "Trick or treat", что буквально
                                    означает "Неприятность или угощение".
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img class='image_block' src='media/img/block3.jpg'>
                            </div>
                            <div class="back">
                                <p>Зачем надевать костюм на Хэллоуин?</p>
                                <p>Хэллоуин – это праздник суеверий, отгоняющий от людей злых духов. Он был создан древними кельтами в пору, когда осень переходит в зиму, а все живое умирает или погружается в долгую спячку. Древние кельты свято верили, что
                                    таким образом оградят себя на ближайший год от посягательств нечистой силы.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <!--http://www.pogoda.by-->
                <!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), http://www.pogoda.by снимает с себя ответственность за конечный результат.-->
                <table width="100%" height="180" style="background-color:#181717; border: #050505 1px solid; font-family:Tahoma; font-size:12px; color:#f5b916;" cellpadding="2" cellspacing="0">
                    <tr>
                        <td>
                            <a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#f5b916;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <table width=100% height=100% style="background-color:#3f3d3d; font-family:Tahoma; font-size:12px; color:#f5b916;" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <script type="text/javascript" charset="windows-1251" src="http://www.pogoda.by/meteoinformer/js/26850_3.js"></script>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#f8af26;">http://www.pogoda.by</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div id="footer">
        Parfinovich &copy;
    </div>
</body>

</html>