<!DOCTYPE html>
<html class="default" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script type="module" crossorigin="" src="http://rubick-vue.left4code.com/assets/index.20120bfc.js"></script>
    <link rel="stylesheet" href="http://rubick-vue.left4code.com/assets/index.68055fc5.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body class="login">
    <div id="app" data-v-app="">
      <div>
        <div class="container sm:px-10">
          <div class="block xl:grid grid-cols-2 gap-4">
            <div class="hidden xl:flex flex-col min-h-screen">
              <a href="" class="-intro-x flex items-center pt-5">
                <span class="text-white text-lg ml-3">SISTEM INFORMASI KLINIK</span>
              </a>
              <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('images/urban-928.png') }}" />
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                  Masuk ke aplikasi <br />
                  dengan sekali klik.
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Kelola semua dalam satu tempat</div>
              </div>
            </div>
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
              <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Masuk ke aplikasi dengan sekali klik. Kelola semua dalam satu tempat</div>
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form action="{{ url('login') }}" method="post">
                  @csrf
                  <div class="intro-x mt-8">
                    <input
                      type="text"
                      class="intro-x login__input form-control py-3 px-4 block"
                      placeholder="Username"
                      name="username"
                    />
                    <input
                      type="password"
                      class="intro-x login__input form-control py-3 px-4 block mt-4"
                      placeholder="Password"
                      name="password"
                    />
                  </div>
                  <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
