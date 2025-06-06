<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Petronas PICAR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            html {
                -ms-overflow-style: none;  /* Internet Explorer 10+ */
                scrollbar-width: none;  /* Firefox */
            }
            ::-webkit-scrollbar { 
                display: none;  /* Safari and Chrome */
            }

        </style>

        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/style2.css" rel="stylesheet">
    </head>
    <body class="antialiased">


        <div class="justify-center min-h-screen sm:items-center sm:pt-0" style="background-color:#17A99C;">

            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a href="#" class="navbar-brand">
                    <img src="/images/petronas.png" height="56">
                </a>
            </nav>
            
            @foreach ($AR as $ARS)
            <div class="container">
                <div class="col-md-12 px-0">
                    
                    <div class="col-md-12 video-selected">
                        <div class="video-iframe">
                            <iframe width="640" height="352" src="{{ $ARS->ytlink3 }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="row" id="test">
                        <div class="col-md-1 video-thumbnails2">
                            <img id="left-button" src="/images/left.png" style="height:270px;">
                        </div>
                        
                        <div class="col-md-10 video-thumbnails" id="content">
                            @if($ARS->ytlink1 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink1 }}#t=15"></video>
                                <p class="name">PIC - Facts & Figures</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink1 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink2 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink2 }}#t=15"></video>
                                <p class="name">#FORPENGERANG</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink2 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif
                        
                            @if($ARS->ytlink3 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink3 }}#t=15"></video>
                                <p class="name">PIC - HOPE</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink3 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink4 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink4 }}#t=15"></video>
                                <p class="name">PIC - PETCHEM</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink4 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink5 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink5 }}#t=15"></video>
                                <p class="name">PIC Former President and Group CEO</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink5 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink6 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink6 }}#t=15"></video>
                                <p class="name">PIC - The Lab</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink6 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink7 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink7 }}#t=15"></video>
                                <p class="name">PIC - The Megastructures</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink7 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink8 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink8 }}#t=15"></video>
                                <p class="name">PIC - Suistainability</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink8 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink9 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink9 }}#t=15"></video>
                                <p class="name">PIC - The People</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink9 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                            @if($ARS->ytlink10 != '')   
                            <div class="video-thumb col-md-3">
                                <video src="{{ $ARS->ytlink10 }}#t=15"></video>
                                <p class="name">Sound of PIC</p>
                                <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink10 }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <div class="video-thumb col-md-3"></div>
                            @endif

                        </div>

                        <div class="col-md-1 video-thumbnails2" style="text-align:right;">
                            <img id="right-button" src="/images/right.png" style="height:270px;">
                        </div>
                    </div>

                    <div class="row" id="test2">
                        <div class="col-md-12 video-thumbnails">

                            <div class="d-flex p-3">
                                @if($ARS->ytlink1 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink1 }}#t=15"></video>
                                    <p class="name">PIC - Facts & Figures</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink1 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif

                                @if($ARS->ytlink2 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink2 }}#t=15"></video>
                                    <p class="name">#FORPENGERANG</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink2 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif
                            </div>

                            <div class="d-flex p-3">
                                @if($ARS->ytlink3 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink3 }}#t=15"></video>
                                    <p class="name">PIC - HOPE</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink3 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif

                                @if($ARS->ytlink4 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink4 }}#t=15"></video>
                                    <p class="name">PIC - PETCHEM</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink4 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif
                            </div>

                            <div class="d-flex p-3">
                                @if($ARS->ytlink5 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink5 }}#t=15"></video>
                                    <p class="name">PIC Former President and Group CEO</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink5 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif

                                @if($ARS->ytlink6 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink6 }}#t=15"></video>
                                    <p class="name">PIC - The Lab</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink6 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif
                            </div>

                            <div class="d-flex p-3">
                                @if($ARS->ytlink7 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink7 }}#t=15"></video>
                                    <p class="name">PIC - The Megastructures</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink7 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif

                                @if($ARS->ytlink8 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink8 }}#t=15"></video>
                                    <p class="name">PIC - Suistainability</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink8 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif
                            </div>

                            <div class="d-flex p-3">
                                @if($ARS->ytlink9 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink9 }}#t=15"></video>
                                    <p class="name">PIC - The People</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink9 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif

                                @if($ARS->ytlink10 != '')   
                                <div class="video-thumb col-md-3">
                                    <video src="{{ $ARS->ytlink10 }}#t=15"></video>
                                    <p class="name">Sound of PIC</p>
                                    <iframe class="iframe" width="640" height="352" src="{{ $ARS->ytlink10 }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="video-thumb col-md-3"></div>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="/js/script.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script>
            $('#right-button').click(function() {
                event.preventDefault();
                $('#content').animate({
                    scrollLeft: "+=423px"
                }, "slow");
            });
            
                $('#left-button').click(function() {
                event.preventDefault();
                $('#content').animate({
                    scrollLeft: "-=423px"
                }, "slow");
            });
        </script>
        <script>
            $("iframe").each(function() { 
                    var src= $(this).attr('src');
                    $(this).attr('src',src);  
            });
        </script>
    </body>
</html>
