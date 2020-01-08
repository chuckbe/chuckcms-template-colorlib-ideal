<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>@yield('title')</title>
    
    @yield('meta')

    @if(array_key_exists('raw', $template->fonts))
    <link href="https://fonts.googleapis.com/css?family={{ $template->fonts['raw'] }}" rel="stylesheet" type="text/css" />
    @endif
    
    @foreach($template->css as $cssKey => $cssValue)
    @if($cssValue['asset'] == 'true')
    <link rel="stylesheet" href="{{ asset($cssValue['href']) }}" type="text/css" />
    @endif
    @if($cssValue['asset'] == 'false')
    <link rel="stylesheet" href="{{ $cssValue['href'] }}" type="text/css" />
    @endif
    @endforeach
    
    @yield('css')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include($template->hintpath.'::templates.' . $template->slug . '.includes.header')    
    
        @yield('content')
    
        @include($template->hintpath.'::templates.' . $template->slug . '.includes.footer')

    </div>

    @foreach($template->js as $jsKey => $jsValue)
        @if($jsValue['asset'] == 'true')
            <script src="{{ asset($jsValue['href']) }}"></script>
        @endif
        @if($jsValue['asset'] == 'false')
            <script src="{{ $jsValue['href'] }}"></script>
        @endif
    @endforeach

    <script type="text/javascript">
        var path = window.location.pathname.split('/');
        path = path[path.length-1];
        if (path !== undefined) {
          $("ul.navbar-nav").find("a[href$='" + path + "']").parents('li').addClass('active');
        }
        if (window.location =='http://www.chuck.be/' || window.location =='http://beta.chuck.be/'){
            $("ul.navbar-nav").find('li').first().addClass('active');
        }
        (function($){
            $(document).ready(function(){
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                    event.preventDefault(); 
                    event.stopPropagation(); 
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>

    @yield('scripts')

</body>
</html>