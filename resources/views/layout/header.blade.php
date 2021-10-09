<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - MyStoreApp -</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><strong>MyStoreApp</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" myNav navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav1 nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav1 nav-link" href="/customer">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav1 nav-link" href="/supplier">Supplier</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myNav");
        var btns = header.getElementsByClassName("nav1");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
