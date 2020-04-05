<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Laracasts</title>
</head>
<body class="font-sans mt-10">
    <div id="app">
        <div class="container mx-auto">
            <header class="mb-8">
                <h1>
                    <img src="/images/logo.svg" alt="Laracasts">
                </h1>
            </header>

            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-6">
                        <h5 class="uppercase font-bold">The Brand</h5>
                        <ul>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/colors">Colors</router-link></li>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/typography">Typography</router-link></li>
                        </ul>
                    </section>

                    <section>
                        <h5 class="uppercase font-bold">Doodles</h5>
                        <ul>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/loaders-and-animations">Loaders and Animations</router-link></li>
                            <li class="text-sm mt-4"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                        </ul>
                    </section>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

