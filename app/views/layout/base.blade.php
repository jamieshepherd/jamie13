<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jamie Shepherd; Designer, developer</title>
        <meta name="description" content="Jamie is a web designer and developer from Plymouth (UK)">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/forms.css') }}" />
        <!--[if lt IE 9]>
            <script type="text/javascript"
                src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
            </script>
        <![endif]-->
        <!-- Analytics -->
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-47659042-1', 'jamieshepherd.me');
              ga('require', 'linkid', 'linkid.js');
              ga('send', 'pageview');
            </script>
        <!-- end analytics -->
    </head>
<body>
    <div id="menu">
        @include('layout.menu')
    </div>
    <main>
        @yield('body')
    </main>
</body>
</html>