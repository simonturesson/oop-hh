<!DOCTYPE HTML>
<html>
<head>
    <title>Simon's Coffee Log</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/css/main.css" />
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="/" class="logo"><strong>Simon's</strong> <span>Coffee Log</span></a>
        <!-- Menu -->
        <nav class="menu-links">
            <li><a href="/">Home</a></li>
            <li><a href=/brews>Brews</a></li>
            <li><a href=/recipes>Recipes</a></li>
            <li><a href=/contact>Contact</a></li>
        </nav>
    </header>

    <!--- return the Content -->
    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <ul class="copyright">
                <li>&copy; Simon's Coffee Log</li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/jquery.scrollex.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->

</body>
</html>