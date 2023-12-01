<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">

    <header>
        <div class="navbar">
            <a class="logo" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#185abd" d="M24.48,29.316l-9.505,9.505L1.588,25.434c-0.784-0.784-0.784-2.054,0-2.838l6.667-6.667	c0.784-0.784,2.054-0.784,2.838,0L24.48,29.316z"></path><linearGradient id="5qKAcydctVb3hkGT27jhwa_HpPqCqynotVp_gr1" x1="14.572" x2="43.188" y1="38.199" y2="9.583" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4191fd"></stop><stop offset="1" stop-color="#55acfd"></stop></linearGradient><path fill="url(#5qKAcydctVb3hkGT27jhwa_HpPqCqynotVp_gr1)" d="M17.797,41.642l-6.667-6.667c-0.784-0.784-0.784-2.054,0-2.838L36.907,6.358	c0.784-0.784,2.054-0.784,2.838,0l6.667,6.667c0.784,0.784,0.784,2.054,0,2.838L20.634,41.642	C19.851,42.425,18.58,42.425,17.797,41.642z"></path>
            </svg>
            </a>
            <div class="right-side">
                <a href="/">Добавить задачу</a>
                <a href="/list">Список задач</a>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Footer</p>
    </footer>
</div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>