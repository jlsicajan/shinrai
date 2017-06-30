<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shinrai systems">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="SHINRAI" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="SHINRAI SYSTEMS" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>SHINRAI</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="/css/particles/style.css">
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>SHINRAI</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">HOME</a></li>
                    <li><a href="#about" class="smoothScroll">ABOUT</a></li>
                    <li><a href="#showcase" class="smoothScroll">FEATURES</a></li>
                    <li><a href="#pricing" class="smoothScroll">PRICING</a></li>
                    <li><a href="#contact" class="smoothScroll">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="particles-js">
            <img class="img-responsive" id="img_logo" src="{{ asset('/img/logo/white.png') }}" alt="logo">
        </div><!--/ #particles-js -->
    </section>

    <section id="about" name="about">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.designed') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro01.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.community') }}</h3>
                        <p>{{ trans('adminlte_lang::message.see') }} <a href="https://github.com/acacha/adminlte-laravel">{{ trans('adminlte_lang::message.githubproject') }}</a>, {{ trans('adminlte_lang::message.post') }} <a href="https://github.com/acacha/adminlte-laravel/issues">{{ trans('adminlte_lang::message.issues') }}</a> {{ trans('adminlte_lang::message.and') }} <a href="https://github.com/acacha/adminlte-laravel/pulls">{{ trans('adminlte_lang::message.pullrequests') }}</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro02.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.schedule') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro03.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.monitoring') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <br>
                <hr>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

        <!-- FEATURES WRAP -->
        <div id="features">
            <div class="container">
                <div class="row">
                    <h1 class="centered">{{ trans('adminlte_lang::message.whatnew') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-6 centered">
                        <img class="centered" src="{{ asset('/img/mobile.png') }}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <h3>{{ trans('adminlte_lang::message.features') }}</h3>
                        <br>
                        <!-- ACCORDION -->
                        <div class="accordion ac" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        {{ trans('adminlte_lang::message.design') }}
                                    </a>
                                </div><!-- /accordion-heading -->
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        {{ trans('adminlte_lang::message.retina') }}
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        {{ trans('adminlte_lang::message.support') }}
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                        {{ trans('adminlte_lang::message.responsive') }}
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>
                        </div><!-- Accordion -->
                    </div>
                </div>
            </div><!--/ .container -->
        </div><!--/ #features -->
    </section>

    <section id="showcase" name="showcase">
        <div id="showcase">
            <div class="container">
                <div class="row text-center">
                    <div class="icon-wrapper">
                        <i class="fa fa-envelope-o custom-icon"><span class="fix-editor">&nbsp;</span>
                        </i>
                    </div>

                    <div class="icon-wrapper">
                        <i class="fa fa-comment custom-icon"><span class="fix-editor">&nbsp;</span>
                        </i>
                    </div>

                    <div class="icon-wrapper">
                        <i class="fa fa-bar-chart custom-icon">
                            <span class="fix-editor">&nbsp;</span>
                        </i>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div>
    </section>

    <section id="pricing" name="pricing">
        <div id="pricing">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <h2 class="text-center">Why Pay To Join This Site</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis nibh vitae neque ultricies eleifend. Mauris feugiat mollis dui non tempus. Duis turpis nibh, imperdiet nec eleifend vitae, maximus a orci. Suspendisse viverra interdum orci, eu tincidunt elit finibus eget. Suspendisse malesuada luctus felis, sit amet vehicula felis scelerisque at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vulputate ligula sit amet posuere condimentum. Fusce eget dui erat.</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="columns">
                                    <br>
                                    <ul class="price">
                                        <li class="header">Lorem ipsum</li>
                                        <li class="grey">$ 0.00 / Lorem</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li class="grey"><button href="#" class="button" data-toggle="modal" data-target="#modal">Lorem ipsum</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <div class="columns">
                                    <ul class="price">
                                        <li class="header">Lorem ipsum</li>
                                        <li class="grey">$ 0.00 / Lorem</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li class="grey"><button href="#" class="button" data-toggle="modal" data-target="#modal">Lorem ipsum</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <div class="columns">
                                    <ul class="price">
                                        <li class="header">Lorem ipsum</li>
                                        <li class="grey">$ 0.00 / Lorem</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li>Lorem ipsum</li>
                                        <li class="grey"><button href="#" class="button" data-toggle="modal" data-target="#modal">Lorem ipsum</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div>
    </section>

    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                    <p>
                        Av. Greenville 987,<br/>
                        New York,<br/>
                        90873<br/>
                        United States
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain">
                        <div class="form-group">
                            <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                        </div>
                        <div class="form-group">
                            <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>Pellentesque auctor neque nec urna. Vestibulum eu odio.. Curabitur vestibulum aliquam leo. Aenean commodo ligula eget dolor.
                    Morbi nec metus. Morbi mattis ullamcorper velit. Quisque malesuada placerat nisl. Maecenas egestas arcu quis ligula mattis placerat. Donec posuere vulputate arcu.
                    Fusce a quam. Mauris sollicitudin fermentum libero. Proin magna. Morbi nec metus. Aenean vulputate eleifend tellus.
                </p>
            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ mix('/js/app-landing.js') }}"></script>
<script src="/js/particles/particles.min.js"></script>
<script src="/js/particles/configuration_particles.js"></script>

<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
<script>
    var count_particles, stats, update;
    count_particles = 400;
    update = function() {
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
</body>
</html>
