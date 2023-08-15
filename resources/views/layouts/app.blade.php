<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <!-- Favicon-->
                <link rel="icon" type="image/x-icon" href="{{ asset('R.png') }}" />
                
                <title>@yield('title')</title>

                {{-- Login and Register Linkers --}}
                <link rel="stylesheet" href="{{ asset('Login_Container/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
                <link rel="stylesheet" href="{{ asset('Login_Container/css/style.css')}}">



                {{-- main of css --}}
                <link rel="stylesheet" href="{{ asset('css/style.css') }}">
               
                {{-- css of bootstrap --}}
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
                 {{-- javascript of bootstrap --}}
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
               
            </head>
            <body>
                {{-- include navbar --}}
                @include('Layouts.navigation')
        
                {{-- section of content --}}
                @yield('content')
        
                {{-- include the footer page --}}
                @include('Layouts.footer')
        
                
               


                {{-- this js script it's for welcom page --}}
                <script src="{{asset('js/main.js')}}"></script>


              
            </body>
        </html>