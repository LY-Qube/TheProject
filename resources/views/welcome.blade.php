<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <title>The Project</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500"></div>

<!-- component -->
<div class="bg-purple-800 p-6">
    <div class="bg-white flex flex-col font-sans">
        <div class="container mx-auto px-8">
            <header class="flex flex-col sm:flex-row items-center justify-between py-6 relative">
                <img class="text-1xl font-bold uppercase text-purple-100"
                     src="{{ asset('images/logo.webp') }}"
                     width="50"
                     height="10"/>
                <nav class="hidden md:flex text-lg">
                    <a href="#" class="text-gray-800 hover:text-purple-300 py-3 px-6">Home</a>
                    <a href="#" class="text-gray-800 hover:text-purple-300 py-3 px-6">Services</a>
                    <a href="#" class="text-gray-800 hover:text-purple-300 py-3 px-6">About</a>
                    <a href="#" class="text-gray-800 hover:text-purple-300 py-3 px-6">Contact</a>
                    <a href="#"
                       class="bg-green-200 hover:bg-green-300 rounded-full uppercase text-green-700 mr-5 py-3
                           px-6">
                        Sign In
                    </a>
                    <a href="#"
                       class="bg-purple-200 hover:bg-purple-300 rounded-full uppercase text-purple-700 py-3 px-6">
                        Sign Up
                    </a>
                </nav>
                <button class="flex md:hidden flex-col absolute top-0 right-0 p-4 mt-5">
                    <span class="w-5 h-px mb-1 bg-orange-500"></span>
                    <span class="w-5 h-px mb-1 bg-orange-500"></span>
                    <span class="w-5 h-px mb-1 bg-orange-500"></span>
                </button>
            </header>
            <main class="flex flex-col-reverse sm:flex-row jusitfy-between items-center py-12">
                <div class="sm:w-2/5 flex flex-col items-center sm:items-start text-center sm:text-left">
                    <h1 class="uppercase text-6xl text-purple-900 font-bold leading-none tracking-wide mb-2">
                        Digital</h1>
                    <h2 class="uppercase text-4xl text-orange-500 text-secondary tracking-widest mb-6">Marketing</h2>
                    <p class="text-gray-600 leading-relaxed mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing.
                        Vestibulum rutrum metus at enim congue scelerisque. Sed suscipit metu non iaculis semper
                        consectetur adipiscing elit.</p>
                    <a href="#" class="bg-purple-300 hover:bg-purple-400 py-3 px-6 uppercase text-lg font-bold
                        text-white rounded-full">Learn more</a>
                </div>
                <div class="mb-16 sm:mb-0 mt-8 sm:mt-0 sm:w-3/5 sm:pl-12">
                    <svg class="w-full h-64 sm:h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 342.69 264.39"
                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                         width="997" height="628.5">
                        <g id="Background" class="animable" style="transform-origin: 171.341px 132.195px;">
                            <path
                                d="M339.9,158.21C334,141.67,324.64,136.64,315.76,126c-10.85-13-18.17-22.36-15.35-39C305,59.8,307-8.08,234.92.79c-25.82,3.18-46.23,23-61.08,42.73-12.63,16.81-35.36,18.3-53.65,22.21C97.71,70.55,74.82,77.82,54,88.48,11.2,110.43-1.59,142,.15,182.36c.53,12.2,2.26,31.41,22.86,53.89,27.81,30.35,68.23,34.41,116.87,20.48,11.13-3.19,21.65-8.2,32.61-12a153.58,153.58,0,0,1,35.19-7.65c27.94-2.7,56.9,2.19,83.7-6.15a88.26,88.26,0,0,0,37.43-23.22C341.61,194.35,346.16,175.65,339.9,158.21Z"
                                style="fill: rgb(234, 230, 255); transform-origin: 171.341px 132.195px;"
                                id="elhp3hly0pou8" class="animable"></path>
                        </g>
                        <g id="Shadow3" class="animable" style="transform-origin: 136px 220.48px;">
                            <path
                                d="M23,220.48c0,4,50.6,7.22,113,7.22s113-3.23,113-7.22-50.59-7.22-113-7.22S23,216.49,23,220.48Z"
                                style="fill: rgb(205, 204, 255); transform-origin: 136px 220.48px;" id="elw6osj2d5h7"
                                class="animable"></path>
                        </g>
                        <path id="Shadow2"
                              d="M92,229.4c0,2.49-12.85,4.52-28.69,4.52s-28.69-2-28.69-4.52,12.84-4.52,28.69-4.52S92,226.9,92,229.4Z"
                              style="fill: rgb(205, 204, 255); transform-origin: 63.31px 229.4px;"
                              class="animable"></path>
                        <ellipse id="Shadow" cx="282.83" cy="230.34" rx="48.14" ry="3.58"
                                 style="fill: rgb(205, 204, 255); transform-origin: 282.83px 230.34px;"
                                 class="animable"></ellipse>
                        <g id="Cart" class="animable" style="transform-origin: 66.7131px 185.55px;">
                            <polygon points="34.3 170.88 32.45 196.76 57.14 196.76 55.44 170.83 34.3 170.88"
                                     style="fill: rgb(215, 215, 255); transform-origin: 44.795px 183.795px;"
                                     id="elgg27thfx8vs" class="animable"></polygon>
                            <path
                                d="M39.2,173.15h0a.79.79,0,0,1,.84-.72h0a.73.73,0,1,1,0,1.44h0A.79.79,0,0,1,39.2,173.15Zm.84-.44a.52.52,0,0,0-.57.44.52.52,0,0,0,.57.44h0a.53.53,0,0,0,.58-.44c0-.25-.26-.44-.58-.44Zm-.71.44Z"
                                style="fill: rgb(234, 230, 255); transform-origin: 40.0452px 173.15px;"
                                id="elonbfv7rnwi" class="animable"></path>
                            <path
                                d="M47.61,173.13h0a.65.65,0,0,1,.2-.46.93.93,0,0,1,.65-.26h0a.79.79,0,0,1,.85.72.63.63,0,0,1-.26.51.92.92,0,0,1-.59.21h0A.8.8,0,0,1,47.61,173.13Zm.85-.44a.63.63,0,0,0-.45.17.38.38,0,0,0-.12.27h0a.52.52,0,0,0,.57.44h0a.66.66,0,0,0,.42-.14.39.39,0,0,0,.16-.3.53.53,0,0,0-.58-.44Z"
                                style="fill: rgb(234, 230, 255); transform-origin: 48.46px 173.13px;" id="eldb3b7fe1bcw"
                                class="animable"></path>
                            <path
                                d="M44,178.36h.24a4.54,4.54,0,0,0,3.51-1.48,5.21,5.21,0,0,0,1-3.78.27.27,0,0,0-.31-.23.27.27,0,0,0-.23.31,4.8,4.8,0,0,1-.86,3.35,4,4,0,0,1-3.11,1.29,3.67,3.67,0,0,1-3-1.05,5,5,0,0,1-.91-3.57.27.27,0,0,0-.23-.31.28.28,0,0,0-.31.23,5.5,5.5,0,0,0,1,4A4.09,4.09,0,0,0,44,178.36Z"
                                style="fill: rgb(234, 230, 255); transform-origin: 44.2641px 175.618px;"
                                id="elqvy44z0nehb" class="animable"></path>
                            <polygon points="45.91 178.13 42.96 197.38 69.77 197.32 67.06 178.08 45.91 178.13"
                                     style="fill: rgb(189, 198, 249); transform-origin: 56.365px 187.73px;"
                                     id="el68lwh6icj55" class="animable"></polygon>
                            <path
                                d="M36,210.63a5.44,5.44,0,1,0,5.44,5.44A5.45,5.45,0,0,0,36,210.63Zm0,8a2.53,2.53,0,1,1,2.54-2.53A2.52,2.52,0,0,1,36,218.6Z"
                                style="fill: rgb(135, 132, 239); transform-origin: 36px 216.07px;" id="elwyelhwgdt3o"
                                class="animable"></path>
                            <path
                                d="M35.09,210.63a5.44,5.44,0,1,0,5.44,5.44A5.44,5.44,0,0,0,35.09,210.63Zm0,8a2.53,2.53,0,1,1,2.53-2.53A2.53,2.53,0,0,1,35.09,218.6Z"
                                style="fill: rgb(154, 163, 244); transform-origin: 35.09px 216.07px;" id="el58b3mslslrc"
                                class="animable"></path>
                            <path
                                d="M66.71,210.63a5.44,5.44,0,1,0,5.43,5.44A5.44,5.44,0,0,0,66.71,210.63Zm0,8a2.53,2.53,0,1,1,2.53-2.53A2.53,2.53,0,0,1,66.71,218.6Z"
                                style="fill: rgb(135, 132, 239); transform-origin: 66.7px 216.07px;" id="ely2m1tlgbny"
                                class="animable"></path>
                            <path
                                d="M65.81,210.63a5.44,5.44,0,1,0,5.44,5.44A5.45,5.45,0,0,0,65.81,210.63Zm0,8a2.53,2.53,0,1,1,2.54-2.53A2.52,2.52,0,0,1,65.81,218.6Z"
                                style="fill: rgb(154, 163, 244); transform-origin: 65.81px 216.07px;" id="elhbyezlfvsp"
                                class="animable"></path>
                            <path d="M107.75,149.59H91.41a5,5,0,0,0-4.23,2.35l-9.87,15.85"
                                  style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 92.53px 158.69px;"
                                  id="elvv489apqig" class="animable"></path>
                            <path
                                d="M33.41,196.94H69.92a4,4,0,0,0,3.91-3.33L77.61,170a4,4,0,0,0-3.91-4.59H29.63A4,4,0,0,0,25.72,170l3.78,23.57A4,4,0,0,0,33.41,196.94Z"
                                style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 51.665px 181.175px;"
                                id="elki0d6d0yano" class="animable"></path>
                            <line x1="51.66" y1="165.45" x2="51.66" y2="196.94"
                                  style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 51.66px 181.195px;"
                                  id="elnjhykuec2ch" class="animable"></line>
                            <line x1="75.82" y1="181.2" x2="27.51" y2="181.2"
                                  style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 51.665px 181.2px;"
                                  id="elkhho53rjv19" class="animable"></line>
                            <line x1="66.08" y1="165.45" x2="62.96" y2="196.94"
                                  style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 64.52px 181.195px;"
                                  id="elkrtg1alnuap" class="animable"></line>
                            <line x1="37.96" y1="165.45" x2="40.85" y2="196.94"
                                  style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 39.405px 181.195px;"
                                  id="eluyifac5q9x" class="animable"></line>
                            <path d="M73,195.51l5.91,8.79a3.6,3.6,0,0,1-3,5.62H27.51"
                                  style="fill: none; stroke: rgb(154, 163, 244); stroke-miterlimit: 10; stroke-width: 1.5px; transform-origin: 53.5201px 202.715px;"
                                  id="eljrpzhvb3vj8" class="animable"></path>
                        </g>
                        <g id="Monitor" class="animable" style="transform-origin: 175.34px 149.825px;">
                            <rect x="150.03" y="199.68" width="50.09" height="13.47"
                                  style="fill: rgb(74, 65, 163); transform-origin: 175.075px 206.415px;"
                                  id="el502wpw1myxc" class="animable"></rect>
                            <rect x="88.52" y="79.16" width="173.64" height="124.92" rx="9.39"
                                  style="fill: rgb(88, 81, 188); transform-origin: 175.34px 141.62px;"
                                  id="elfrhs3gqx0ou" class="animable"></rect>
                            <rect x="93.37" y="83.72" width="163.41" height="108.38" rx="5.77"
                                  style="fill: rgb(196, 195, 252); transform-origin: 175.075px 137.91px;"
                                  id="elcbydy10wd99" class="animable"></rect>
                            <path
                                d="M135.82,212h78.5a7.32,7.32,0,0,1,7.32,7.32v1.17a0,0,0,0,1,0,0H128.5a0,0,0,0,1,0,0v-1.17a7.32,7.32,0,0,1,7.32-7.32Z"
                                style="fill: rgb(88, 81, 188); transform-origin: 175.07px 216.245px;" id="el7p52x2a60f"
                                class="animable"></path>
                            <g id="elh52e03qx3g9">
                                <g style="opacity: 0.35; transform-origin: 189.56px 129.625px;" class="animable">
                                    <rect x="132.39" y="91.2" width="114.34" height="76.85" rx="5.01"
                                          style="fill: rgb(255, 255, 255); transform-origin: 189.56px 129.625px;"
                                          id="ell8zeyttzrpc" class="animable"></rect>
                                </g>
                            </g>
                            <g id="el5ogutyiiwgm">
                                <g style="opacity: 0.25; mix-blend-mode: multiply; transform-origin: 189.565px 127.245px;"
                                   class="animable">
                                    <rect x="143.26" y="147.35" width="4.98" height="12.5"
                                          style="fill: rgb(252, 167, 12); transform-origin: 145.75px 153.6px;"
                                          id="eltfumweun049" class="animable"></rect>
                                    <rect x="154.48" y="136.37" width="4.98" height="23.48"
                                          style="fill: rgb(177, 175, 253); transform-origin: 156.97px 148.11px;"
                                          id="el7hiyc0r84lw" class="animable"></rect>
                                    <rect x="165.71" y="138.8" width="4.98" height="21.05"
                                          style="fill: rgb(252, 167, 12); transform-origin: 168.2px 149.325px;"
                                          id="elogb2feffcgk" class="animable"></rect>
                                    <rect x="176.93" y="126.91" width="4.98" height="32.94"
                                          style="fill: rgb(177, 175, 253); transform-origin: 179.42px 143.38px;"
                                          id="eluv5gnkqkq0j" class="animable"></rect>
                                    <g id="elpd91h6rypmn">
                                        <g style="opacity: 0.15; mix-blend-mode: multiply; transform-origin: 155.625px 148.11px;"
                                           class="animable">
                                            <g id="eluom1zgt9qr">
                                                <rect x="154.48" y="136.37" width="2.29" height="23.48"
                                                      style="opacity: 0.26; transform-origin: 155.625px 148.11px;"
                                                      class="animable"></rect>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="elhey01ezvf6">
                                        <g style="opacity: 0.15; mix-blend-mode: multiply; transform-origin: 144.405px 153.6px;"
                                           class="animable">
                                            <g id="elnkghmbvwqvj">
                                                <rect x="143.26" y="147.35" width="2.29" height="12.5"
                                                      style="opacity: 0.26; transform-origin: 144.405px 153.6px;"
                                                      class="animable"></rect>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="el6k8mb2pvv1w">
                                        <g style="opacity: 0.62; mix-blend-mode: multiply; transform-origin: 178.075px 143.38px;"
                                           class="animable">
                                            <g id="eldv1gn94pxcf">
                                                <rect x="176.93" y="126.91" width="2.29" height="32.94"
                                                      style="opacity: 0.26; transform-origin: 178.075px 143.38px;"
                                                      class="animable"></rect>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="elsb4c6jfiby8">
                                        <g style="opacity: 0.15; mix-blend-mode: multiply; transform-origin: 166.855px 149.325px;"
                                           class="animable">
                                            <g id="elbpslcc9ybob">
                                                <rect x="165.71" y="138.8" width="2.29" height="21.05"
                                                      style="opacity: 0.26; transform-origin: 166.855px 149.325px;"
                                                      class="animable"></rect>
                                            </g>
                                        </g>
                                    </g>
                                    <polygon
                                        points="184.55 163.29 139.97 163.29 139.97 115.83 140.65 115.83 140.65 162.61 184.55 162.61 184.55 163.29"
                                        style="fill: rgb(213, 219, 218); transform-origin: 162.26px 139.56px;"
                                        id="elfa3ca1m28ij" class="animable"></polygon>
                                    <polygon
                                        points="144.55 141.49 144.1 140.98 155.76 130.51 166.56 132.86 178.25 119.84 178.76 120.3 166.8 133.61 155.95 131.25 144.55 141.49"
                                        style="fill: rgb(213, 219, 218); transform-origin: 161.43px 130.665px;"
                                        id="elajsifzmul5o" class="animable"></polygon>
                                    <polygon points="179.67 122.22 176.38 119.06 180.63 117.92 179.67 122.22"
                                             style="fill: rgb(213, 219, 218); transform-origin: 178.505px 120.07px;"
                                             id="elabrvipf6928" class="animable"></polygon>
                                    <rect x="188.77" y="146.46" width="3.42" height="3.42"
                                          style="fill: rgb(177, 175, 253); transform-origin: 190.48px 148.17px;"
                                          id="elx91ycr4s47j" class="animable"></rect>
                                    <rect x="188.77" y="152.45" width="3.42" height="3.42"
                                          style="fill: rgb(252, 167, 12); transform-origin: 190.48px 154.16px;"
                                          id="elohmhwkui52" class="animable"></rect>
                                    <rect x="193.13" y="153.93" width="10.84" height="1.94"
                                          style="fill: rgb(239, 239, 239); transform-origin: 198.55px 154.9px;"
                                          id="elhlbje42e39s" class="animable"></rect>
                                    <rect x="193.13" y="147.94" width="10.84" height="1.94"
                                          style="fill: rgb(239, 239, 239); transform-origin: 198.55px 148.91px;"
                                          id="elm48lqvedj9i" class="animable"></rect>
                                    <rect x="208.88" y="146.46" width="3.42" height="3.42"
                                          style="fill: rgb(177, 175, 253); transform-origin: 210.59px 148.17px;"
                                          id="elw9mi6n2u26" class="animable"></rect>
                                    <rect x="208.88" y="152.45" width="3.42" height="3.42"
                                          style="fill: rgb(252, 167, 12); transform-origin: 210.59px 154.16px;"
                                          id="elyvxdivnzln" class="animable"></rect>
                                    <rect x="213.24" y="153.93" width="10.84" height="1.94"
                                          style="fill: rgb(239, 239, 239); transform-origin: 218.66px 154.9px;"
                                          id="elg11ck1qmws" class="animable"></rect>
                                    <rect x="213.24" y="147.94" width="10.84" height="1.94"
                                          style="fill: rgb(239, 239, 239); transform-origin: 218.66px 148.91px;"
                                          id="el1rjvllvcxsj" class="animable"></rect>
                                    <rect x="226.99" y="146.46" width="3.42" height="3.42"
                                          style="fill: rgb(177, 175, 253); transform-origin: 228.7px 148.17px;"
                                          id="el6xwsk7ky0lm" class="animable"></rect>
                                    <rect x="226.99" y="152.45" width="3.42" height="3.42"
                                          style="fill: rgb(252, 167, 12); transform-origin: 228.7px 154.16px;"
                                          id="el8vll64lbya5" class="animable"></rect>
                                    <rect x="231.36" y="153.93" width="7.13" height="1.94"
                                          style="fill: rgb(239, 239, 239); transform-origin: 234.925px 154.9px;"
                                          id="eludg2hp0rntf" class="animable"></rect>
                                    <rect x="231.36" y="147.94" width="7.13" height="1.94"
                                          style="fill: rgb(239, 239, 239); transform-origin: 234.925px 148.91px;"
                                          id="elkwkdqsz489q" class="animable"></rect>
                                    <rect x="189.41" y="113.78" width="49.08" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.95px 114.225px;"
                                          id="elv9bkmxngr5" class="animable"></rect>
                                    <rect x="139.97" y="102.83" width="98.52" height="2.04"
                                          style="fill: rgb(239, 239, 239); transform-origin: 189.23px 103.85px;"
                                          id="elfcp34gdk05j" class="animable"></rect>
                                    <rect x="189.26" y="116.55" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 116.995px;"
                                          id="el9e3n78h58z" class="animable"></rect>
                                    <rect x="189.26" y="111" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 111.445px;"
                                          id="el85f94feplel" class="animable"></rect>
                                    <rect x="189.26" y="119.33" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 119.775px;"
                                          id="el7ue2n040nsg" class="animable"></rect>
                                    <rect x="189.26" y="122.11" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 122.555px;"
                                          id="el0aupo98h5rd" class="animable"></rect>
                                    <rect x="189.26" y="124.88" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 125.325px;"
                                          id="eljn8sqxam0is" class="animable"></rect>
                                    <rect x="189.26" y="127.66" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 128.105px;"
                                          id="elh8x7t66lm8" class="animable"></rect>
                                    <rect x="189.26" y="130.43" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 130.875px;"
                                          id="eli48k2zx2ewl" class="animable"></rect>
                                    <rect x="189.26" y="133.21" width="49.23" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 213.875px 133.655px;"
                                          id="elo9tlrbggbn" class="animable"></rect>
                                    <rect x="195.29" y="135.98" width="43.2" height="0.89"
                                          style="fill: rgb(239, 239, 239); transform-origin: 216.89px 136.425px;"
                                          id="ell8jub8yf0q" class="animable"></rect>
                                    <path d="M241.72,91.2H137.4a5,5,0,0,0-5,5v4.39H246.73V96.21A5,5,0,0,0,241.72,91.2Z"
                                          style="fill: rgb(122, 122, 229); transform-origin: 189.565px 95.895px;"
                                          id="el5ucup5uckko" class="animable"></path>
                                    <path d="M232,96.07a1.45,1.45,0,1,1-1.45-1.44A1.45,1.45,0,0,1,232,96.07Z"
                                          style="fill: rgb(207, 207, 255); transform-origin: 230.55px 96.08px;"
                                          id="elw5pth0k2i88" class="animable"></path>
                                    <circle cx="236.47" cy="96.07" r="1.44"
                                            style="fill: rgb(207, 207, 255); transform-origin: 236.47px 96.07px;"
                                            id="el7xj0lz1dobo" class="animable"></circle>
                                    <circle cx="242.36" cy="96.07" r="1.44"
                                            style="fill: rgb(207, 207, 255); transform-origin: 242.36px 96.07px;"
                                            id="el4qiygm535fk" class="animable"></circle>
                                </g>
                            </g>
                            <g id="elj9te317ncf">
                                <rect x="102.02" y="108.2" width="114.34" height="76.85" rx="5.01"
                                      style="fill: rgb(196, 195, 252); opacity: 0.55; mix-blend-mode: multiply; transform-origin: 159.19px 146.625px;"
                                      class="animable"></rect>
                            </g>
                            <rect x="104.34" y="105.21" width="114.34" height="76.85" rx="5.01"
                                  style="fill: rgb(255, 255, 255); transform-origin: 161.51px 143.635px;"
                                  id="el9enot4kuut" class="animable"></rect>
                            <rect x="115.21" y="161.35" width="4.98" height="12.5"
                                  style="fill: rgb(252, 167, 12); transform-origin: 117.7px 167.6px;" id="elfkv0r8dtnb4"
                                  class="animable"></rect>
                            <rect x="126.43" y="150.38" width="4.98" height="23.48"
                                  style="fill: rgb(177, 175, 253); transform-origin: 128.92px 162.12px;"
                                  id="el0v9gbvzvpmj" class="animable"></rect>
                            <rect x="137.65" y="152.8" width="4.98" height="21.05"
                                  style="fill: rgb(252, 167, 12); transform-origin: 140.14px 163.325px;"
                                  id="el3glmtji661z" class="animable"></rect>
                            <rect x="148.88" y="140.92" width="4.98" height="32.94"
                                  style="fill: rgb(177, 175, 253); transform-origin: 151.37px 157.39px;"
                                  id="elywempdss7a" class="animable"></rect>
                            <g id="elmt1xeqii2d">
                                <g style="opacity: 0.15; mix-blend-mode: multiply; transform-origin: 127.575px 162.12px;"
                                   class="animable">
                                    <g id="elyr5nl4wo67o">
                                        <rect x="126.43" y="150.38" width="2.29" height="23.48"
                                              style="opacity: 0.26; transform-origin: 127.575px 162.12px;"
                                              class="animable"></rect>
                                    </g>
                                </g>
                            </g>
                            <g id="elbyp0rbyu8b6">
                                <g style="opacity: 0.15; mix-blend-mode: multiply; transform-origin: 116.355px 167.6px;"
                                   class="animable">
                                    <g id="elptq0f2mlceh">
                                        <rect x="115.21" y="161.35" width="2.29" height="12.5"
                                              style="opacity: 0.26; transform-origin: 116.355px 167.6px;"
                                              class="animable"></rect>
                                    </g>
                                </g>
                            </g>
                            <g id="eloiz3q9v0yh">
                                <g style="opacity: 0.62; mix-blend-mode: multiply; transform-origin: 150.025px 157.39px;"
                                   class="animable">
                                    <g id="el6rxnss4t6m6">
                                        <rect x="148.88" y="140.92" width="2.29" height="32.94"
                                              style="opacity: 0.26; transform-origin: 150.025px 157.39px;"
                                              class="animable"></rect>
                                    </g>
                                </g>
                            </g>
                            <g id="eli3k610l2fgc">
                                <g style="opacity: 0.15; mix-blend-mode: multiply; transform-origin: 138.795px 163.325px;"
                                   class="animable">
                                    <g id="elpzwyv01edr">
                                        <rect x="137.65" y="152.8" width="2.29" height="21.05"
                                              style="opacity: 0.26; transform-origin: 138.795px 163.325px;"
                                              class="animable"></rect>
                                    </g>
                                </g>
                            </g>
                            <polygon
                                points="156.49 177.3 111.92 177.3 111.92 134.07 112.6 134.07 112.6 176.62 156.49 176.62 156.49 177.3"
                                style="fill: rgb(213, 219, 218); transform-origin: 134.205px 155.685px;"
                                id="elujqhovrlic" class="animable"></polygon>
                            <polygon
                                points="116.5 155.5 116.04 154.99 127.7 144.52 138.5 146.87 150.2 133.85 150.71 134.3 138.75 147.62 127.9 145.26 116.5 155.5"
                                style="fill: rgb(213, 219, 218); transform-origin: 133.375px 144.675px;"
                                id="eljjs7xa0qanf" class="animable"></polygon>
                            <polygon points="151.62 136.23 148.32 133.06 152.58 131.93 151.62 136.23"
                                     style="fill: rgb(213, 219, 218); transform-origin: 150.45px 134.08px;"
                                     id="elxoh99hu5cf" class="animable"></polygon>
                            <rect x="160.71" y="160.47" width="3.42" height="3.42"
                                  style="fill: rgb(177, 175, 253); transform-origin: 162.42px 162.18px;"
                                  id="el8hr5ss2g2v2" class="animable"></rect>
                            <rect x="160.71" y="166.46" width="3.42" height="3.42"
                                  style="fill: rgb(252, 167, 12); transform-origin: 162.42px 168.17px;"
                                  id="elyvd7u0wkem" class="animable"></rect>
                            <rect x="165.08" y="167.94" width="10.84" height="1.94"
                                  style="fill: rgb(239, 239, 239); transform-origin: 170.5px 168.91px;"
                                  id="eli6x8dm2nmpa" class="animable"></rect>
                            <rect x="165.08" y="161.94" width="10.84" height="1.94"
                                  style="fill: rgb(239, 239, 239); transform-origin: 170.5px 162.91px;"
                                  id="ely9cqqd8fnp" class="animable"></rect>
                            <rect x="180.83" y="160.47" width="3.42" height="3.42"
                                  style="fill: rgb(177, 175, 253); transform-origin: 182.54px 162.18px;"
                                  id="elzu9m4ntokp" class="animable"></rect>
                            <rect x="180.83" y="166.46" width="3.42" height="3.42"
                                  style="fill: rgb(252, 167, 12); transform-origin: 182.54px 168.17px;"
                                  id="el88qy7jkl7zd" class="animable"></rect>
                            <rect x="185.19" y="167.94" width="10.84" height="1.94"
                                  style="fill: rgb(239, 239, 239); transform-origin: 190.61px 168.91px;"
                                  id="elok3vt4ksmkd" class="animable"></rect>
                            <rect x="185.19" y="161.94" width="10.84" height="1.94"
                                  style="fill: rgb(239, 239, 239); transform-origin: 190.61px 162.91px;"
                                  id="el4g0nm1i6ijc" class="animable"></rect>
                            <rect x="198.94" y="160.47" width="3.42" height="3.42"
                                  style="fill: rgb(177, 175, 253); transform-origin: 200.65px 162.18px;"
                                  id="eln9ymw0esycr" class="animable"></rect>
                            <rect x="198.94" y="166.46" width="3.42" height="3.42"
                                  style="fill: rgb(252, 167, 12); transform-origin: 200.65px 168.17px;"
                                  id="el1t7kgnjx7n7" class="animable"></rect>
                            <rect x="203.3" y="167.94" width="7.13" height="1.94"
                                  style="fill: rgb(239, 239, 239); transform-origin: 206.865px 168.91px;"
                                  id="elbjr6imjylsd" class="animable"></rect>
                            <rect x="203.3" y="161.94" width="7.13" height="1.94"
                                  style="fill: rgb(239, 239, 239); transform-origin: 206.865px 162.91px;"
                                  id="elpepbtxalky" class="animable"></rect>
                            <rect x="161.35" y="127.79" width="49.08" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.89px 128.235px;"
                                  id="elm151nfjxjup" class="animable"></rect>
                            <rect x="111.92" y="116.83" width="98.52" height="2.04"
                                  style="fill: rgb(239, 239, 239); transform-origin: 161.18px 117.85px;"
                                  id="el68qrbexwpgp" class="animable"></rect>
                            <rect x="161.21" y="130.56" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 131.005px;"
                                  id="elfcwk63qn3nt" class="animable"></rect>
                            <rect x="161.21" y="125.01" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 125.455px;"
                                  id="ellunoumr43lf" class="animable"></rect>
                            <rect x="161.21" y="133.34" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 133.785px;"
                                  id="elikzts16g75" class="animable"></rect>
                            <rect x="161.21" y="136.11" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 136.555px;"
                                  id="eldkbaa49f3xp" class="animable"></rect>
                            <rect x="161.21" y="138.89" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 139.335px;"
                                  id="ellpjrie7a4w" class="animable"></rect>
                            <rect x="161.21" y="141.66" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 142.105px;"
                                  id="elfuhtf0cu979" class="animable"></rect>
                            <rect x="161.21" y="144.44" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 144.885px;"
                                  id="elutzoqsxix6n" class="animable"></rect>
                            <rect x="161.21" y="147.21" width="49.23" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 185.825px 147.655px;"
                                  id="elgdlqtczburj" class="animable"></rect>
                            <rect x="167.23" y="149.99" width="43.2" height="0.89"
                                  style="fill: rgb(239, 239, 239); transform-origin: 188.83px 150.435px;"
                                  id="elnnqlezegve" class="animable"></rect>
                            <path d="M213.67,105.21H109.35a5,5,0,0,0-5,5v4.39H218.68v-4.39A5,5,0,0,0,213.67,105.21Z"
                                  style="fill: rgb(164, 164, 247); transform-origin: 161.515px 109.905px;"
                                  id="el2x1m3qt0csy" class="animable"></path>
                            <path d="M204,110.08a1.45,1.45,0,1,1-1.44-1.44A1.44,1.44,0,0,1,204,110.08Z"
                                  style="fill: rgb(207, 207, 255); transform-origin: 202.55px 110.09px;"
                                  id="elhq4bws303tp" class="animable"></path>
                            <path d="M209.86,110.08a1.45,1.45,0,1,1-1.44-1.44A1.45,1.45,0,0,1,209.86,110.08Z"
                                  style="fill: rgb(207, 207, 255); transform-origin: 208.41px 110.09px;"
                                  id="elu7ny0nlzkq8" class="animable"></path>
                            <path d="M215.75,110.08a1.45,1.45,0,1,1-1.45-1.44A1.45,1.45,0,0,1,215.75,110.08Z"
                                  style="fill: rgb(207, 207, 255); transform-origin: 214.3px 110.09px;"
                                  id="ellbs3c3dsyfm" class="animable"></path>
                        </g>
                        <g id="Calculator" class="animable" style="transform-origin: 288.095px 192.255px;">
                            <rect x="254.34" y="153.22" width="67.51" height="78.07" rx="6.95"
                                  style="fill: rgb(162, 167, 244); transform-origin: 288.095px 192.255px;"
                                  id="el7gqfi9hqt0m" class="animable"></rect>
                            <rect x="260.58" y="161.39" width="57.09" height="16.04" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 289.125px 169.41px;"
                                  id="el3am44glz475" class="animable"></rect>
                            <rect x="260.58" y="183.11" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 267.92px 188.2px;"
                                  id="elrkhhxawescd" class="animable"></rect>
                            <rect x="281.79" y="183.11" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 289.13px 188.2px;"
                                  id="elr4dcejsd2z" class="animable"></rect>
                            <rect x="303" y="183.11" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(82, 82, 250); transform-origin: 310.34px 188.2px;" id="elqtdpvc8me6g"
                                  class="animable"></rect>
                            <rect x="260.58" y="199.47" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 267.92px 204.56px;"
                                  id="elahbars6629o" class="animable"></rect>
                            <rect x="281.79" y="199.47" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 289.13px 204.56px;"
                                  id="el2bvtzt1kkoh" class="animable"></rect>
                            <rect x="260.58" y="215.84" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 267.92px 220.93px;"
                                  id="el3irk5deh2g" class="animable"></rect>
                            <rect x="281.79" y="215.84" width="14.68" height="10.18" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 289.13px 220.93px;"
                                  id="elef8b276icui" class="animable"></rect>
                            <rect x="303" y="199.47" width="14.68" height="26.54" rx="1.77"
                                  style="fill: rgb(144, 144, 244); transform-origin: 310.34px 212.74px;"
                                  id="el4743riom60f" class="animable"></rect>
                            <g id="elrgetqexlqf">
                                <g style="opacity: 0.45; transform-origin: 288.095px 192.665px;" class="animable">
                                    <path
                                        d="M259.55,162.12a1.77,1.77,0,0,1,1.77-1.77h53.55a1.77,1.77,0,0,1,1.77,1.77v12.49a1.77,1.77,0,0,1-1.77,1.77H261.32"
                                        style="fill: rgb(226, 222, 255); transform-origin: 288.095px 168.365px;"
                                        id="el5e9yz2quja3" class="animable"></path>
                                    <rect x="259.55" y="182.07" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 266.89px 187.16px;"
                                          id="el3phdbbffl7e" class="animable"></rect>
                                    <rect x="280.75" y="182.07" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 288.09px 187.16px;"
                                          id="elewdtwxw6mcb" class="animable"></rect>
                                    <rect x="301.96" y="182.07" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 309.3px 187.16px;"
                                          id="elqbdpdbfi5it" class="animable"></rect>
                                    <rect x="259.55" y="198.43" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 266.89px 203.52px;"
                                          id="elfgv0buy46ft" class="animable"></rect>
                                    <rect x="280.75" y="198.43" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 288.09px 203.52px;"
                                          id="elo7jpnttp3wp" class="animable"></rect>
                                    <rect x="259.55" y="214.8" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 266.89px 219.89px;"
                                          id="elj5d1klqz4e" class="animable"></rect>
                                    <rect x="280.75" y="214.8" width="14.68" height="10.18" rx="1.77"
                                          style="fill: rgb(226, 222, 255); transform-origin: 288.09px 219.89px;"
                                          id="eloiknfb1owm9" class="animable"></rect>
                                </g>
                            </g>
                            <rect x="301.96" y="198.43" width="14.68" height="26.54" rx="1.77"
                                  style="fill: rgb(252, 167, 12); transform-origin: 309.3px 211.7px;" id="eln3fvucke59m"
                                  class="animable"></rect>
                            <path
                                d="M303,224.24v-23a1.78,1.78,0,0,1,1.77-1.78h11.14a1.79,1.79,0,0,1,.61.12,1.77,1.77,0,0,0-1.65-1.16H303.73a1.78,1.78,0,0,0-1.77,1.78v23a1.76,1.76,0,0,0,1.15,1.66A1.8,1.8,0,0,1,303,224.24Z"
                                style="fill: rgb(249, 193, 16); transform-origin: 309.24px 211.64px;" id="elihoncv2xa6p"
                                class="animable"></path>
                        </g>
                        <g id="Bag" class="animable" style="transform-origin: 116.985px 206.965px;">
                            <polygon points="103.18 188.72 99.66 225.27 134.31 225.27 130.96 188.66 103.18 188.72"
                                     style="fill: rgb(252, 167, 12); transform-origin: 116.985px 206.965px;"
                                     id="elgrruey9lcr6" class="animable"></polygon>
                            <path
                                d="M109.23,192.07h0a1.21,1.21,0,0,1,1.29-1.1h0a1.22,1.22,0,0,1,1.3,1.09,1.21,1.21,0,0,1-1.3,1.1h0A1.21,1.21,0,0,1,109.23,192.07Zm1.29-.69a.8.8,0,0,0-.87.69.79.79,0,0,0,.88.67h0a.7.7,0,1,0,0-1.36Zm-1.09.69h0Z"
                                style="fill: rgb(88, 81, 188); transform-origin: 110.525px 192.065px;"
                                id="elaeqtq2my2mw" class="animable"></path>
                            <path
                                d="M122.14,192h0a1,1,0,0,1,.31-.71,1.38,1.38,0,0,1,1-.39h0a1.21,1.21,0,0,1,1.3,1.09,1,1,0,0,1-.39.79,1.4,1.4,0,0,1-.9.31h0A1.22,1.22,0,0,1,122.14,192Zm1.3-.68a1,1,0,0,0-.69.26.59.59,0,0,0-.19.42h0a.8.8,0,0,0,.88.67h0a1,1,0,0,0,.63-.21.59.59,0,0,0,.24-.47.79.79,0,0,0-.88-.67Z"
                                style="fill: rgb(88, 81, 188); transform-origin: 123.445px 191.995px;"
                                id="elrzlcmfazuul" class="animable"></path>
                            <path
                                d="M116.6,200.05H117a7,7,0,0,0,5.38-2.27,8.08,8.08,0,0,0,1.51-5.8.42.42,0,0,0-.47-.36.42.42,0,0,0-.36.47,7.31,7.31,0,0,1-1.33,5.15,6.14,6.14,0,0,1-4.76,2,5.61,5.61,0,0,1-4.6-1.61c-1.85-2.06-1.4-5.44-1.39-5.48a.42.42,0,0,0-.83-.12c0,.16-.52,3.8,1.59,6.16A6.24,6.24,0,0,0,116.6,200.05Z"
                                style="fill: rgb(88, 81, 188); transform-origin: 117.023px 195.84px;" id="elcq6iwkri8l"
                                class="animable"></path>
                        </g>
                        <g id="Character3" class="animable" style="transform-origin: 53.555px 164.241px;">
                            <g id="elol2grpq0krf">
                                <path
                                    d="M99.43,127.44a22.45,22.45,0,0,0-2.58,4.34,4.28,4.28,0,0,1-2.41,2.16c-1.91.88-4,1.71-5.92,2.49v5.07c4-2.41,7.62-4.65,7.68-4.67,3.06,1.16,5.62-1.38,6.44-3.21.36-.82-.19-1.16-.21-1.55,0-.2.25-1.39.21-1.55-.24-1.07-3.12-.13-2.88-.64a3.71,3.71,0,0,1,1.2-1.8c1.41-1,2.49-2,2.48-2.43C103.44,125,99.77,127.08,99.43,127.44Z"
                                    style="fill: rgb(88, 81, 188); opacity: 0.35; mix-blend-mode: multiply; transform-origin: 95.98px 133.513px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M69.11,106.37c1.34,2.31.18,5.48,1.54,7.79.54.92,1.46,1.65,1.72,2.69A2.35,2.35,0,0,1,69,119.49a3.16,3.16,0,0,0-.52-.26c-.67-.19-1.27.4-1.85.79a2.79,2.79,0,0,1-2.43.43,3.6,3.6,0,0,1-2-2.43c-1-2.91-.28-6.09.61-9,.45-1.46,1.11-3.09,2.55-3.62"
                                style="fill: rgb(80, 69, 175); transform-origin: 67.0762px 112.98px;" id="elceddepin03m"
                                class="animable"></path>
                            <path
                                d="M100.26,131c0,.32.52.6.19,1.28-.73,1.51-3,3.6-5.71,2.64-.12,0-15,8.64-16.14,8.64S69.65,136.18,67.1,127c-.61-2.18-.38-4.74,1.67-5.85a4.88,4.88,0,0,1,2.81,2.5c1.69,3.2,6.75,13.77,7.87,14.17,1.4-.94,8.21-3,13.73-5.3a3.76,3.76,0,0,0,2.14-1.79,17.6,17.6,0,0,1,2.29-3.57c.29-.31,3.56-2,3.56-1.48,0,.33-1,1.21-2.21,2a3,3,0,0,0-1.06,1.48c-.21.42,2.34-.35,2.55.53C100.49,129.86,100.25,130.84,100.26,131Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 83.987px 132.355px;"
                                id="elgzos172399h" class="animable"></path>
                            <path
                                d="M68.17,120.93a6.7,6.7,0,0,1,4.44,3.44,14.28,14.28,0,0,1,.61,1.39c.79,2,1.88,3.84,2.67,5.85a11.68,11.68,0,0,1-3.49,1.69,7.4,7.4,0,0,1-3.26.44,1.69,1.69,0,0,1-.55-.12,1.91,1.91,0,0,1-.57-.49c-.34-.39-.67-.79-1-1.19a3.27,3.27,0,0,1-.66-1.14,3.46,3.46,0,0,1,.15-1.77"
                                style="fill: rgb(119, 98, 239); transform-origin: 71.0986px 127.35px;" id="elr6aj6a12h1"
                                class="animable"></path>
                            <g id="elyrgqd2quk3">
                                <g style="opacity: 0.35; mix-blend-mode: multiply; transform-origin: 71.5265px 129.976px;"
                                   class="animable">
                                    <path
                                        d="M70.12,126.43a.68.68,0,0,0-.26-.22.47.47,0,0,0-.53.24,1.11,1.11,0,0,0-.11.62,8.2,8.2,0,0,0,.38,2.41l-.26,4.26h0a7.37,7.37,0,0,0,3.05-.44c.45-.17.95-.35,1.45-.55C73.34,130.35,71.71,128.33,70.12,126.43Z"
                                        style="fill: rgb(119, 98, 239); transform-origin: 71.5265px 129.976px;"
                                        id="el8xo1ljpwhgj" class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M63.53,116.7s-.06,2.67.35,2.84a9.77,9.77,0,0,0,1.72.53l0,5.51-7.34-1.11-5.05-2.81s5.25-1.74,5.3-2.26-.29-3.47-.29-3.47"
                                style="fill: rgb(255, 185, 176); transform-origin: 59.405px 120.755px;"
                                id="elaq6dznl7t9" class="animable"></path>
                            <path
                                d="M52.24,196.41v0c-2,9.53-1.05,22.61-1.5,29.78.1,0,2.73.36,2.73.36s6.21-30.23,7.34-36a7.09,7.09,0,0,0,.14-1.13c.27-4.35-3.65-4.57-5.86-1a15.36,15.36,0,0,0-1,1.94c-.12.29-.24.57-.36.88h0a28.58,28.58,0,0,0-1,3l0,.11c-.09.31-.16.62-.24.93v.07C52.38,195.75,52.31,196.08,52.24,196.41Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 55.8516px 206.241px;"
                                id="el837cx41rijv" class="animable"></path>
                            <path
                                d="M64,162.22c-.08.79-.5,4.54-1,9-.43,3.72-.9,7.91-1.27,11.23-.28,2.5-.48,4.48-.56,5.42a12.61,12.61,0,0,1-.22,1.6v0c-1,4.35-4,4.6-5.78,3.59a4.4,4.4,0,0,1-.69-.47,2.31,2.31,0,0,1-.78-1.29h0c-.12-.89-.23-2.11-.34-3.56v-.07c-.22-2.83-.41-6.46-.58-10-.2-4.35-.32-8.54-.35-10.9,0-.14,0-.27,0-.39,0-7.25,6.63-11.9,10.77-9.65l.14.07.16.1c.47.31.63,1.4.64,2.64C64.13,160.41,64.07,161.4,64,162.22Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 58.285px 174.856px;"
                                id="el625cy5a1gaq" class="animable"></path>
                            <path
                                d="M53.87,189.58l-.51-1.9v0a30.41,30.41,0,0,1-.63,6.63l0,.11c-.07.3-.15.62-.24.93v.07a5,5,0,0,0-.22,1v0c0,.86,1.83-3,2.25-3.86l.08-.18-.5-2Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 53.435px 192.112px;"
                                id="eleb1rcroe6ij" class="animable"></path>
                            <path
                                d="M68.22,198.23v0c-.19,10,2.89,21.7,3.71,28.95.1,0,2.51-.33,2.51-.33s.46-30.55.49-36.59a8.16,8.16,0,0,0-.06-1.15c-.49-4.4-4.06-3.65-5.44.48a18.35,18.35,0,0,0-.58,2.19l-.18,1h0q-.24,1.54-.36,3.27v.11c0,.33,0,.66-.06,1v.08Q68.23,197.71,68.22,198.23Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 71.5715px 206.657px;"
                                id="el06y7me1wu4m6" class="animable"></path>
                            <path
                                d="M70.29,194.16a2.76,2.76,0,0,1-.7-.31,2,2,0,0,1-.91-1.08h0c-.26-.86-.58-2.06-.92-3.47v-.06c-.68-2.75-1.48-6.32-2.22-9.8-.92-4.27-1.75-8.41-2.17-10.76,0-.13-.4-1.84-.43-2-1.28-7.29,4.41-12,8.54-10.64l.16.05c.83.33,1.06,3.26,1.24,5.23s1.6,22.43,2,26.13a16.14,16.14,0,0,1,.07,1.66C74.78,193.7,72.11,194.71,70.29,194.16Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 68.8536px 175.051px;"
                                id="el15pi1uklxny" class="animable"></path>
                            <path
                                d="M68.53,191l-.78-1.76v0a33.06,33.06,0,0,1,.56,6.75v.11c0,.32,0,.66-.06,1v.08a6.55,6.55,0,0,0,0,1v0c.14.86,1.14-3.4,1.37-4.4,0-.12,0-.19,0-.19l-.78-1.86Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 68.685px 193.767px;"
                                id="elvdsb7hyty1a" class="animable"></path>
                            <path
                                d="M55.86,148.22s-5.34,6.8-4.8,13.62c.23,2.84.59,5.35.91,8.21.05.41.69,6.41.51,6.42,0,0,11,3.4,21.66-1.06,0-.73.85-14.7-4.9-28A92.68,92.68,0,0,1,55.86,148.22Z"
                                style="fill: rgb(81, 70, 175); transform-origin: 62.603px 162.56px;" id="eljqromez7ncj"
                                class="animable"></path>
                            <path
                                d="M72.61,132.54c0,1.94-1.08,3.13-2.56,4.77a57.87,57.87,0,0,0-.81,7.51c-.08,1.5.56,2.45,0,2.57-2.14,1.86-9.84,3.37-13.37.83.37-3.14-1-10.05-2-13.56-.14-.54-.27-1-.39-1.35-.89-2.67-2.48-11.23-1.3-11.6l1-.3c1.85-.56,4.58-1.52,4.58-1.52s1.6,4.74,5.76,5.31c2.27-.93,2.07-3.81,2-5.13.74.21,1.07.41,3.37,1.09.65.93.09,2.88,1.13,5.77C70.36,127.65,72.66,130.17,72.61,132.54Z"
                                style="fill: rgb(119, 98, 239); transform-origin: 62.1855px 134.727px;"
                                id="elw2btuw37vae" class="animable"></path>
                            <path
                                d="M68.84,105.83s.42,5.15-.46,7.85a6.4,6.4,0,0,1-5.55,3.83c-6.14,0-7.24-8.34-7.21-8.75s9.06-3.9,9.06-3.9Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 62.2798px 111.185px;"
                                id="elmurd0d8cluf" class="animable"></path>
                            <path d="M69.48,156.59"
                                  style="fill: rgb(242, 242, 242); transform-origin: 69.48px 156.59px;"
                                  id="elqpqt7f4011c" class="animable"></path>
                            <path
                                d="M80.54,230.08c-2.19.4-4.53-.22-5.48-.05-.8.13-2.83.65-3.59,0s-.64-3.1.24-3.43a3,3,0,0,0,.56.14,6.1,6.1,0,0,0,2.59-.21,14.36,14.36,0,0,0,3.62,1.37,11.79,11.79,0,0,1,2.41.73C81.71,229,81.77,229.86,80.54,230.08Z"
                                style="fill: rgb(80, 69, 175); transform-origin: 76.2276px 228.44px;" id="el55xwfy2werj"
                                class="animable"></path>
                            <path
                                d="M56.93,231.05c-2.19-.37-3.58-1.58-4.53-1.75-.8-.14-2.79-.53-3-1.35-.15-.6.45-3.13,1.38-3.14a3.68,3.68,0,0,0,.49.32,5.92,5.92,0,0,0,2.51.68,13.62,13.62,0,0,0,2.94,2.51,11.4,11.4,0,0,1,2,1.5C59.38,230.45,58.17,231.25,56.93,231.05Z"
                                style="fill: rgb(80, 69, 175); transform-origin: 54.1417px 227.946px;"
                                id="el5mnnd8r21iv" class="animable"></path>
                            <path
                                d="M25,128.87l2-2.4,12.28,11s6-8,7.64-10.47c1.81-2.74,3.45-5.08,6.1-5.54.61.38-.21,10.21-.53,10.45-3.7,2.77-10.91,11.71-13.2,12.18C36.65,144.6,25,128.87,25,128.87Z"
                                style="fill: rgb(255, 185, 176); transform-origin: 39.1199px 132.781px;"
                                id="eljdpjysmuor" class="animable"></path>
                            <path
                                d="M53.94,121s-2.51,0-3.59.92S44.12,131,44.12,131a3.63,3.63,0,0,0,1.35,2.83,7.47,7.47,0,0,0,3.71,1.61s2.59-2.57,4-3.74c.91-.73,1,1.07,1,1.07l4.56-4.45Z"
                                style="fill: rgb(119, 98, 239); transform-origin: 51.43px 128.22px;" id="el9pwm8v9qcmt"
                                class="animable"></path>
                            <path
                                d="M52.42,121.1c-.14-.07-.27-.15-.4-.23a3.41,3.41,0,0,1-1.65-1.66,5.53,5.53,0,0,1,0-4A15.28,15.28,0,0,1,52,113.24a6,6,0,0,0,1-3.36,22.06,22.06,0,0,1,.24-3.55c.42-2,1-3.87,2.51-5.14,2.45-2,7.36-3.26,10-1,.49.41.58.75,1.24.81a4.85,4.85,0,0,1,2.24.66c.87.5,1.94,1.21,1.81,2.36a4.06,4.06,0,0,1-1.67,2.43,1.88,1.88,0,0,1-.94.21c-1,0-1.9-.65-2.92-.54a1.91,1.91,0,0,0-1.28.71c-.37.45-.32,1.08-.75,1.51-.69.68-1.76.62-2.57,1.06a.84.84,0,0,0-.35.29.83.83,0,0,0-.09.44l0,1.29c-.41-.18-.45-.75-.78-1a.92.92,0,0,0-1.17.07,2,2,0,0,0-.57,1.12,3.3,3.3,0,0,0,.23,1.54c.27.88,1,1.67,1.62,1.09.44.65,0,1.73,0,2.46,0,.58,0,1.73.54,2.11s1.29.08,1.32,1A1.75,1.75,0,0,1,60,121.35a6.23,6.23,0,0,1-2.43-.42,3.77,3.77,0,0,0-2.43-.12,7.17,7.17,0,0,1-1.36.61A2.08,2.08,0,0,1,52.42,121.1Z"
                                style="fill: rgb(80, 69, 175); transform-origin: 60.5232px 110.209px;"
                                id="elj0ubpngrulk" class="animable"></path>
                            <path
                                d="M30.11,129.26S27.23,127,27,126.31s-.24-1.31-.48-1.93a3.59,3.59,0,0,0-2-2c-.72-.3-.37-.54-1.14-.39-1.17.23-1.73,1.37-2.19,2.27-2,3.82,3.46,4.54,3.65,4.55.4,0,2.43,2.32,2.43,2.32"
                                style="fill: rgb(255, 185, 176); transform-origin: 25.4301px 126.537px;"
                                id="elluwiwptroh" class="animable"></path>
                            <path
                                d="M21,127.42l2,1.32a.55.55,0,0,0,.77-.18l4.34-7.27-2.58-1.45-4.66,6.82A.55.55,0,0,0,21,127.42Z"
                                style="fill: rgb(132, 132, 239); transform-origin: 24.4408px 124.334px;"
                                id="ellnc6327il0m" class="animable"></path>
                            <path
                                d="M13.94,112l.68.46,2.75-4-.68-.47a2.31,2.31,0,0,0-3.13.81h0A2.28,2.28,0,0,0,13.94,112Z"
                                style="fill: rgb(196, 196, 247); transform-origin: 15.221px 110.071px;"
                                id="elnld1v6ykzh" class="animable"></path>
                            <polygon points="11.43 116.87 24.08 118.79 26.96 114.58 20.58 103.52 11.43 116.87"
                                     style="fill: rgb(196, 196, 247); transform-origin: 19.195px 111.155px;"
                                     id="el4h9g5ccuunt" class="animable"></polygon>
                            <polygon points="12.23 117.04 24.08 118.79 25.23 117.11 15.26 112.63 12.23 117.04"
                                     style="fill: rgb(187, 187, 242); transform-origin: 18.73px 115.71px;"
                                     id="el78q57x5zi5i" class="animable"></polygon>
                            <path
                                d="M29.28,121.85h0a1.61,1.61,0,0,0,2.19-.57l.51-.75a1.6,1.6,0,0,0-.26-2.23h0a1.61,1.61,0,0,0-2.19.56l-.52.75A1.6,1.6,0,0,0,29.28,121.85Z"
                                style="fill: rgb(196, 196, 247); transform-origin: 30.4945px 120.074px;"
                                id="elpws4sedie5" class="animable"></path>
                            <path
                                d="M29.53,118.86l-.51.75a1.59,1.59,0,0,0,.26,2.24,1.61,1.61,0,0,0,2.19-.57l.51-.75a1,1,0,0,0,.1-.17,1.47,1.47,0,1,1-2.42-1.66A1.83,1.83,0,0,0,29.53,118.86Z"
                                style="fill: rgb(187, 187, 242); transform-origin: 30.3768px 120.383px;"
                                id="elnuh1a4t2nc" class="animable"></path>
                            <path
                                d="M11,117.28h0A1,1,0,0,0,12.3,117L21,104.3a.93.93,0,0,0-.16-1.31h0a.94.94,0,0,0-1.28.33L10.86,116A.94.94,0,0,0,11,117.28Z"
                                style="fill: rgb(164, 164, 247); transform-origin: 15.9352px 110.136px;"
                                id="elucyws2k94lg" class="animable"></path>
                            <path
                                d="M21,103.23l-7.22,10.53a.94.94,0,0,1-1.29.33.73.73,0,0,1-.22-.24L10.86,116a.94.94,0,0,0,.15,1.31A1,1,0,0,0,12.3,117L21,104.3A1,1,0,0,0,21,103.23Z"
                                style="fill: rgb(132, 132, 239); transform-origin: 15.9079px 110.329px;"
                                id="elwzju6yprt" class="animable"></path>
                            <path
                                d="M25.19,121l.82.56a2.88,2.88,0,0,0,3.91-1l.81-1.19a2.84,2.84,0,0,0-.47-4l-.82-.56a2.87,2.87,0,0,0-3.9,1L24.72,117A2.85,2.85,0,0,0,25.19,121Z"
                                style="fill: rgb(164, 164, 247); transform-origin: 27.727px 118.185px;"
                                id="el7tm01pj66t" class="animable"></path>
                            <path
                                d="M24.77,116.94l-1.22,1.78A.9.9,0,0,0,23.7,120l3.81,2.6a.91.91,0,0,0,1.23-.32L30,120.48a.9.9,0,0,1-1.23.32l-3.81-2.59A.9.9,0,0,1,24.77,116.94Z"
                                style="fill: rgb(132, 132, 239); transform-origin: 26.6745px 119.83px;"
                                id="el5qfsqzl6aqh" class="animable"></path>
                            <path
                                d="M21.42,125.59a4,4,0,0,1,.7-3,6.39,6.39,0,0,1,.71-.76,1,1,0,0,1,.43-.29,1.4,1.4,0,0,1,.92.21,1.69,1.69,0,0,1,.76.76,1,1,0,0,1-.56,1.2s-.09.06-.1.1a.39.39,0,0,0,.07.24,1.72,1.72,0,0,1,.29,1,.57.57,0,0,1-.68.5c-.15,0-.34-.08-.39,0s0,.08,0,.13a1.05,1.05,0,0,1-.23.83.28.28,0,0,1-.18.11.41.41,0,0,1-.19,0,3.13,3.13,0,0,1-.68-.3"
                                style="fill: rgb(255, 185, 176); transform-origin: 23.1729px 124.081px;"
                                id="el4jryn9vmmx8" class="animable"></path>
                            <path
                                d="M27,126.47a13.47,13.47,0,0,1-.23-1.55,3.54,3.54,0,0,0-1.67-2.9.41.41,0,0,0-.27-.08.29.29,0,0,0-.22.26.75.75,0,0,0,.05.36c.12.36.64,1,.48,1.43a4.2,4.2,0,0,0-.42,1.8c0,.55.28,1.44.93,1.53"
                                style="fill: rgb(255, 185, 176); transform-origin: 25.8029px 124.63px;"
                                id="el0m3caxkpwon" class="animable"></path>
                            <line x1="12.34" y1="97.4" x2="14.89" y2="103.41"
                                  style="fill: none; stroke: rgb(196, 196, 247); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 13.615px 100.405px;"
                                  id="elhj2940b4v1f" class="animable"></line>
                            <line x1="7.03" y1="102.74" x2="12.25" y2="106.65"
                                  style="fill: none; stroke: rgb(196, 196, 247); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 9.64px 104.695px;"
                                  id="elx73yn4vidpg" class="animable"></line>
                            <line x1="3.67" y1="110.01" x2="10.15" y2="110.65"
                                  style="fill: none; stroke: rgb(196, 196, 247); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 6.91px 110.33px;"
                                  id="elj65t8xgh0xb" class="animable"></line>
                        </g>
                        <g id="Character2" class="animable" style="transform-origin: 229.144px 70.7587px;">
                            <g id="elmcmjxvvt1t">
                                <path
                                    d="M252.26,79.25H225.48q.28,13,.45,26.05a10.38,10.38,0,0,1-.49,3.93h0c-.35,0-.2.1-.32.73a0,0,0,0,1,0,0c-1.08,1.77-3.19,2.73-5.25,3.19a.56.56,0,0,0,0,.29.64.64,0,0,0-.2.81c.12.29,1.66.68,3.75.45a9.86,9.86,0,0,0,2.32-.64,3.63,3.63,0,0,0,.85-.58,2.94,2.94,0,0,0,.79-.19l.08.08,2.4-1s-.26-1.52-.47-2.3a1.42,1.42,0,0,0-.16-.37A109.14,109.14,0,0,0,233.91,93c-.43,7-3,21.38-3.16,21.87a3.67,3.67,0,0,1-3,2.14c-.57,0-3.36-.11-3.06,1.17.08.3,1.52,1,3.62,1.1a10.18,10.18,0,0,0,2.4-.23,4.53,4.53,0,0,0,1.49-.81l.32.43L235,118s0-.66,0-1.45a3.17,3.17,0,0,0-.54-1.55l0-1.45,1.41-.16s2.83-9.15,4.17-12.26a26.46,26.46,0,0,0,1.52-3.9,27.35,27.35,0,0,0,.59-4.87,42.61,42.61,0,0,1,1.63-8.81,1.33,1.33,0,0,1,.24-.51,1.35,1.35,0,0,1,.93-.32c3.6-.33,5.25.28,7.5-.42,3-.92,3.28-2.27,3.43-2.33A9.26,9.26,0,0,0,252.26,79.25Z"
                                    style="fill: rgb(88, 81, 188); opacity: 0.35; mix-blend-mode: multiply; transform-origin: 237.741px 99.2663px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M211.49,46.86s-2.33-1.64-2.41-2.33a16.3,16.3,0,0,0-2.23-4.05A12.59,12.59,0,0,0,203,38.9c-.59-.09-3.93.2-3.51.65s2.58.29,3,.54l.42.25s-.42.57-.25.91-.72.87-.38,1.45-.14.54.16,1.15c.49,1,1.75,1.56,2.08,1.29.25.59,1.21,1.8,2.1,1.72s3.08,2,3.08,2"
                                style="fill: rgb(255, 185, 176); transform-origin: 205.472px 43.8718px;"
                                id="elnbd8v93t7d" class="animable"></path>
                            <path
                                d="M247,35.17c.07,1.56,0,4.29.41,4.69s1.9.34,1.9.34-5.17,6.54-5.64,6.18-6.57-5.34-5.2-5.6,2.72-.2,2.68-.91l-.12-2.14"
                                style="fill: rgb(255, 185, 176); transform-origin: 243.79px 40.7822px;"
                                id="elk7p6u94h0c" class="animable"></path>
                            <path
                                d="M252.91,70.08s-10.09,1.14-12.41,1.19-2.2-1.16-2.2-1.16a92.78,92.78,0,0,0-1-10.62c-.44-1.91-.64-2.61-1-4.42-.87-4-.83-4.8-1.75-9.77l6-4.84a3.2,3.2,0,0,0,3.15,1.89A4.6,4.6,0,0,0,248.08,40l8.22,5.46.77,13.27-1,10.93"
                                style="fill: rgb(252, 167, 12); transform-origin: 245.81px 55.6358px;"
                                id="el6p2gzc2gnid" class="animable"></path>
                            <path
                                d="M247.13,33.75a17.24,17.24,0,0,1-.71,2.32A2.64,2.64,0,0,1,243.64,38l-3.09.07a3.57,3.57,0,0,1-2.42-.51c-.63-.55-.64-1.48-.78-2.24-.18-1-.33-2-.44-2.94a43.31,43.31,0,0,1-.27-5.81,3.52,3.52,0,0,1,.07-.79.49.49,0,0,1,.13-.29.61.61,0,0,1,.37-.15,31.73,31.73,0,0,1,5.84-.37A6.66,6.66,0,0,1,247,26a7.4,7.4,0,0,1,2.09,3.54c.07.21.13.49,0,.62"
                                style="fill: rgb(255, 185, 176); transform-origin: 242.899px 31.5323px;"
                                id="elxy1lcyxd6uq" class="animable"></path>
                            <path
                                d="M224.5,106.06a21.61,21.61,0,0,0,.61,2.69c.26.69,2.51.06,2.66-.39a20.46,20.46,0,0,0-.71-3.7"
                                style="fill: rgb(237, 156, 128); transform-origin: 226.135px 106.858px;"
                                id="el50vr752bm4p" class="animable"></path>
                            <path
                                d="M228.56,108.93c.19.74.44,2.16.44,2.16l-2.25,1-.37-.35a4.19,4.19,0,0,1-1.25,1,9.65,9.65,0,0,1-2.18.6c-2,.21-3.41-.16-3.52-.43-.49-1.14,2.12-1.44,2.63-1.58a3.45,3.45,0,0,0,2.47-2.47c.12-.6,0-.7.3-.68a.77.77,0,0,1,.56.26,1.43,1.43,0,0,0,1.6.37,1.67,1.67,0,0,0,.8-.66A1,1,0,0,1,228.56,108.93Z"
                                style="fill: rgb(56, 40, 124); transform-origin: 224.185px 110.776px;"
                                id="elvskq3hkzqe8" class="animable"></path>
                            <path
                                d="M234.45,79.84a38.16,38.16,0,0,1-11.49.27c.5,1.42,1.72,3.25,2.18,5.25,1.53,6.63,2.07,15.53,2.45,21,0,0-.73,1.41-3.09.34C221,98,214.83,80.4,214.89,76.57c.07-4.87,12.22-6,21.13-7.24"
                                style="fill: rgb(69, 48, 135); transform-origin: 225.455px 88.2155px;"
                                id="elb000cup3iw7" class="animable"></path>
                            <path
                                d="M250,70.09c2.8,2-15.52,9.75-15.52,9.75a30.94,30.94,0,0,1-6,.57,4.3,4.3,0,0,1-.45-1.14c-.1-.53-.05-1.08-.14-1.62A3.74,3.74,0,0,0,226,75.19a8,8,0,0,0-3-1,40.12,40.12,0,0,0-6.8-.12c5.51-4.06,16.78-4.6,22-4.93C239.25,70.83,249.57,69.79,250,70.09Z"
                                style="fill: rgb(56, 40, 124); transform-origin: 233.246px 74.7751px;"
                                id="el8emih3ayiu5" class="animable"></path>
                            <path
                                d="M230.31,110.69a23.18,23.18,0,0,0,.13,2.76c.14.72,2.47.48,2.69.07a20,20,0,0,0,0-3.77"
                                style="fill: rgb(237, 156, 128); transform-origin: 231.764px 111.831px;"
                                id="el5ghpa65s406" class="animable"></path>
                            <path
                                d="M233.81,114.22c.06.76.06,2.2.06,2.2l-2.39.58-.3-.41a4.15,4.15,0,0,1-1.4.76,9,9,0,0,1-2.25.22c-2-.13-3.33-.75-3.4-1-.28-1.21,2.33-1.06,2.87-1.1a3.47,3.47,0,0,0,2.86-2c.21-.57.09-.7.41-.62a.82.82,0,0,1,.51.36,1.43,1.43,0,0,0,1.51.64,1.73,1.73,0,0,0,.9-.51A1,1,0,0,1,233.81,114.22Z"
                                style="fill: rgb(56, 40, 124); transform-origin: 228.99px 115.201px;" id="el8id6umhx6tn"
                                class="animable"></path>
                            <path
                                d="M256.08,69.68a112.72,112.72,0,0,1-12.41.4c-1.59,0-13.58,2.25-14.73,4.28-1.88,3.34,1.23,22.88.94,36.87,0,0,1.44,1.2,4,.07.63-6.87,4.69-23.08,1.89-30.65,6.61.88,11.94,1.75,18-.24a4.79,4.79,0,0,0,3.09-3.28C257.44,75.31,257.11,71.31,256.08,69.68Z"
                                style="fill: rgb(69, 48, 135); transform-origin: 242.738px 90.7323px;"
                                id="elil8mkj5doqk" class="animable"></path>
                            <path
                                d="M240.5,40.46l-1.72.1a13.51,13.51,0,0,0-3.56.68c-1.64.6-2.79,2.12-4.12,3.31s-7.92,7.47-9.16,7.7S209.84,45,209.84,45l-2.66,2.65s11.8,10.9,15.31,10.92c1.71,0,11.13-5,14.14-6.88Z"
                                style="fill: rgb(252, 167, 12); transform-origin: 223.84px 49.515px;" id="elxl7jlq47zjr"
                                class="animable"></path>
                            <g id="el983kvfk6976">
                                <path
                                    d="M222.52,56.51c-2.42.14-13.53-8.34-14.82-9.33l-.52.51s11.8,10.9,15.31,10.92c1.43,0,8.2-3.43,12.16-5.7l1-.59-.62-3.67S225.1,56.37,222.52,56.51Z"
                                    style="fill: rgb(206, 74, 48); opacity: 0.25; mix-blend-mode: multiply; transform-origin: 221.415px 52.895px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M211.21,71.86h27l-4.84-15.78a2.07,2.07,0,0,0-2-1.46H207.74a1.34,1.34,0,0,0-1.29,1.74Z"
                                style="fill: rgb(164, 164, 247); transform-origin: 222.299px 63.2399px;"
                                id="elutnwinr1ku" class="animable"></path>
                            <path
                                d="M210.87,71.86h26.59l-4.84-15.78a2.08,2.08,0,0,0-2-1.46H207a1.35,1.35,0,0,0-1.29,1.74l4.64,15.11A.54.54,0,0,0,210.87,71.86Z"
                                style="fill: rgb(122, 116, 209); transform-origin: 221.556px 63.24px;"
                                id="elhp5tjdfj5vh" class="animable"></path>
                            <g id="el13rt9gdtkt4k">
                                <g style="opacity: 0.25; mix-blend-mode: multiply; transform-origin: 246.963px 56.02px;"
                                   class="animable">
                                    <path
                                        d="M252.38,48.07a104.63,104.63,0,0,0-2,15.17c-4.72,1.83-6.64,4.56-11.26,6.61,0,0-3.64-.6-4,.77-.23.79,4.26,1.42,4.26,1.42,4.28,0,15.56-3.1,16.33-3.31s3-14.55,3.07-22.34a4.83,4.83,0,0,0-.72-3.16,4,4,0,0,0-1.39-1A19.48,19.48,0,0,0,248.08,40"
                                        style="fill: rgb(206, 74, 48); transform-origin: 246.963px 56.02px;"
                                        id="elwfsqbqjiauh" class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M239.8,70.79a2.7,2.7,0,0,0-2.25-.71c-.6,0-1.2.06-1.8.14-.27,0-.59.11-.61.4s1.32,0,2,.2a36.48,36.48,0,0,1-4.18.12,1.11,1.11,0,0,0-.48,0,.39.39,0,0,0-.27.36.51.51,0,0,0,.19.32,2.83,2.83,0,0,0,1.44.58,11.05,11.05,0,0,0,6.34-.56"
                                style="fill: rgb(255, 185, 176); transform-origin: 236.195px 71.2401px;"
                                id="elo67cbh8r69" class="animable"></path>
                            <path
                                d="M252.08,48c-.11,6.5-.57,9.47-.44,16-3.26.7-7.77,4.39-12.39,6.45A2.45,2.45,0,0,0,239.4,72c.35.13,15.57-3.57,16.78-4.69s2.53-13.17,2.62-21a4.83,4.83,0,0,0-.72-3.16,4,4,0,0,0-1.39-1A19.48,19.48,0,0,0,248.08,40"
                                style="fill: rgb(252, 167, 12); transform-origin: 249.01px 56.0017px;"
                                id="el0xrnyq8a9x2k" class="animable"></path>
                            <g id="elyiki61y0h4p">
                                <path
                                    d="M224.59,63.51c.1,1.38-1.54,2.51-3.65,2.51s-3.91-1.13-4-2.51,1.54-2.5,3.66-2.5S224.49,62.13,224.59,63.51Z"
                                    style="fill: none; stroke: rgb(164, 164, 247); stroke-miterlimit: 10; opacity: 0.45; transform-origin: 220.765px 63.515px;"
                                    class="animable"></path>
                            </g>
                            <g id="elhz3dduff8t8">
                                <ellipse cx="220.76" cy="63.51" rx="1.39" ry="2.43"
                                         style="fill: rgb(164, 164, 247); transform-origin: 220.76px 63.51px; transform: rotate(-87.77deg);"
                                         class="animable"></ellipse>
                            </g>
                            <path
                                d="M242.37,29.6c-.05-.25-.59-.29-1.13-.23a8.37,8.37,0,0,0-2.28.49c-.3.23-.28.39-.44.41s-.16-.14-.51-.3a4.56,4.56,0,0,0-1.72,0c-.54.07-1,.19-1,.43a1.4,1.4,0,0,0,.21.75c.11.07.11.06.54,1a1,1,0,0,0,1.3.71c.9-.2.95-1.21,1-1.64s.13-.48.27-.5.23,0,.4.42.29,1.3,1.21,1.35c1.19.07,1.71-.34,1.88-1.11.22-1,.17-1,.26-1.13a5,5,0,0,1,.89.07l0-.31A7.4,7.4,0,0,1,242.37,29.6ZM238,31.69a1,1,0,0,1-.88,1.09c-.54.07-.8-.22-1.09-.93a1.81,1.81,0,0,1-.18-1.26c.09-.17.39-.16,1.07-.21s.91-.05,1,.25A3.69,3.69,0,0,1,238,31.69Zm3.9-.57c-.11.75-.39,1.11-1.14,1.2-1.06.13-1.27-.29-1.43-.8a3.57,3.57,0,0,1-.19-1.05c0-.31.25-.36.92-.48s1.57-.28,1.7-.14A1.81,1.81,0,0,1,241.93,31.12Z"
                                style="fill: rgb(72, 58, 153); transform-origin: 239.27px 31.1304px;" id="el43e4yst16wg"
                                class="animable"></path>
                            <path
                                d="M249.59,27.94a10.29,10.29,0,0,0-.3-1.6,5.06,5.06,0,0,0-2.49-3.27,8,8,0,0,0-5.64-.56c-1,.29-1.42.83-1.95.81a5.76,5.76,0,0,1-1.45-.47c-4-1.45-3.36,2.5-2.93,3.58.19.48,1.11.83,1.23,1a13,13,0,0,1,.19,1.61.88.88,0,0,0,.5.6s0-1.28,0-1.45a1.65,1.65,0,0,1,.6-1.19,3.79,3.79,0,0,1,1.45-.41,11,11,0,0,1,3,.49c.76.65.95,2.13,1.16,3,.1.41.2.68.37.68.12-1.2.54-1.23,1.25-.82a2.07,2.07,0,0,1,.61,1.61,1.71,1.71,0,0,1-1.2,1.77c-.29.06.57,1.69,1,2.1a2.47,2.47,0,0,0,.42.37,2.6,2.6,0,0,0,.49.18l.57.15a1.57,1.57,0,0,0,.8.07c.42-.12.65-.57.84-1,.31-.65.68-1.29.94-2A11.75,11.75,0,0,0,249.59,27.94Z"
                                style="fill: rgb(72, 58, 153); transform-origin: 242.095px 29.2238px;" id="ellao11uw29a"
                                class="animable"></path>
                        </g>
                        <g id="Card2" class="animable" style="transform-origin: 298.455px 72.785px;">
                            <path
                                d="M322.33,87.77H271.24l6.12-4.53V61.14a3.34,3.34,0,0,1,3.33-3.34h41.64a3.34,3.34,0,0,1,3.34,3.34V84.43A3.34,3.34,0,0,1,322.33,87.77Z"
                                style="fill: rgb(213, 210, 255); transform-origin: 298.455px 72.785px;"
                                id="el0h8danyutb9" class="animable"></path>
                            <g id="el174vrw9jopm">
                                <rect x="297.88" y="62.11" width="23.35" height="2.23"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 309.555px 63.225px;"
                                      class="animable"></rect>
                            </g>
                            <g id="el2s1v9mraxqf">
                                <rect x="297.88" y="65.45" width="23.35" height="2.23"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 309.555px 66.565px;"
                                      class="animable"></rect>
                            </g>
                            <g id="el6ja6czu2o7o">
                                <rect x="297.88" y="68.79" width="23.35" height="2.23"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 309.555px 69.905px;"
                                      class="animable"></rect>
                            </g>
                            <g id="elgbkfis4cew9">
                                <rect x="297.88" y="72.04" width="23.35" height="2.23"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 309.555px 73.155px;"
                                      class="animable"></rect>
                            </g>
                            <g id="el6e2ssyceg4">
                                <rect x="297.88" y="75.93" width="16.29" height="2.23"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 306.025px 77.045px;"
                                      class="animable"></rect>
                            </g>
                            <rect x="281.38" y="62.11" width="14.67" height="17.15" rx="3.39"
                                  style="fill: rgb(169, 173, 255); transform-origin: 288.715px 70.685px;"
                                  id="eljcm50wma6q" class="animable"></rect>
                            <g id="elibxva8naiw">
                                <rect x="281.38" y="81.4" width="14.67" height="1.84"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 288.715px 82.32px;"
                                      class="animable"></rect>
                            </g>
                            <path
                                d="M290.16,73.24h-5.32a.65.65,0,0,1-.64-.49l-1-3.78a.67.67,0,0,1,.64-.84h7.37a.66.66,0,0,1,.64.84l-1,3.78A.66.66,0,0,1,290.16,73.24Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 287.527px 70.686px;"
                                id="elpybpo4bgg6o" class="animable"></path>
                            <path
                                d="M291.1,74.09h-6.41a.13.13,0,1,1,0-.26H291l2.23-7.78a.13.13,0,0,1,.13-.1h1.39a.13.13,0,0,1,.13.13.13.13,0,0,1-.13.14h-1.29L291.22,74A.12.12,0,0,1,291.1,74.09Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 289.72px 70.02px;" id="el482uq6oxknl"
                                class="animable"></path>
                            <path d="M285.67,75.14a.78.78,0,0,1-.78.77.78.78,0,0,1,0-1.55A.78.78,0,0,1,285.67,75.14Z"
                                  style="fill: rgb(255, 255, 255); transform-origin: 284.934px 75.135px;"
                                  id="el80bfrkqiwo" class="animable"></path>
                            <circle cx="290.53" cy="75.14" r="0.78"
                                    style="fill: rgb(255, 255, 255); transform-origin: 290.53px 75.14px;"
                                    id="elmaocn062mb8" class="animable"></circle>
                        </g>
                        <g id="Card" class="animable" style="transform-origin: 162.935px 34.08px;">
                            <path
                                d="M132.51,56.9h65.1l-7.79-5.76V15.52a4.26,4.26,0,0,0-4.26-4.26H132.51a4.25,4.25,0,0,0-4.25,4.26V52.65A4.25,4.25,0,0,0,132.51,56.9Z"
                                style="fill: rgb(213, 210, 255); transform-origin: 162.935px 34.08px;" id="el3ko7mt5tbh"
                                class="animable"></path>
                            <g id="elisagcrsxhh">
                                <g style="opacity: 0.45; transform-origin: 159.3px 33.7px;" class="animable">
                                    <g id="el7t6gqpt9n7j">
                                        <rect x="133.91" y="17.87" width="29.75" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 148.785px 19.295px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                    <g id="ely2e03ilegv">
                                        <rect x="133.91" y="22.12" width="29.75" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 148.785px 23.545px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                    <g id="elp1u1bw3gcli">
                                        <rect x="133.91" y="26.37" width="29.75" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 148.785px 27.795px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                    <g id="elp1onlv9mlts">
                                        <rect x="133.91" y="30.52" width="29.75" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 148.785px 31.945px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                    <g id="elbz8beq6rooi">
                                        <rect x="133.91" y="34.66" width="29.75" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 148.785px 36.085px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                    <g id="elyyehv8g8o4">
                                        <rect x="133.91" y="42.19" width="29.75" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 148.785px 43.615px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                    <g id="el0rtvm0q4pbke">
                                        <rect x="133.91" y="46.68" width="50.78" height="2.85"
                                              style="fill: rgb(255, 255, 255); transform-origin: 159.3px 48.105px; transform: rotate(180deg);"
                                              class="animable"></rect>
                                    </g>
                                </g>
                            </g>
                            <g id="el52lc2k819oq">
                                <rect x="166" y="17.87" width="18.69" height="21.85" rx="4.31"
                                      style="fill: rgb(196, 196, 247); transform-origin: 175.345px 28.795px; transform: rotate(180deg);"
                                      class="animable"></rect>
                            </g>
                            <g id="el8k081luqvv6">
                                <rect x="166" y="42.44" width="18.69" height="2.35"
                                      style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 175.345px 43.615px; transform: rotate(180deg);"
                                      class="animable"></rect>
                            </g>
                            <path
                                d="M173.5,32.05h6.79a.84.84,0,0,0,.81-.63l1.31-4.81a.85.85,0,0,0-.82-1.07H172.2a.85.85,0,0,0-.82,1.07l1.31,4.81A.84.84,0,0,0,173.5,32.05Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 176.895px 28.795px;"
                                id="elzsdug5eg01" class="animable"></path>
                            <path
                                d="M172.31,33.13h8.17a.17.17,0,0,0,.17-.17.17.17,0,0,0-.17-.16h-8l-2.85-9.92a.16.16,0,0,0-.16-.12h-1.78a.17.17,0,0,0,0,.34h1.65L172.15,33A.16.16,0,0,0,172.31,33.13Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 174.085px 27.945px;"
                                id="elhzsnullzwm" class="animable"></path>
                            <path d="M179.23,34.46a1,1,0,1,0,1-1A1,1,0,0,0,179.23,34.46Z"
                                  style="fill: rgb(255, 255, 255); transform-origin: 180.23px 34.46px;"
                                  id="elxreka2zxdk" class="animable"></path>
                            <path d="M172,34.46a1,1,0,1,0,1-1A1,1,0,0,0,172,34.46Z"
                                  style="fill: rgb(255, 255, 255); transform-origin: 173px 34.46px;" id="elytcwri3z2c"
                                  class="animable"></path>
                        </g>
                        <g id="Character" class="animable" style="transform-origin: 276.864px 172.095px;">
                            <g id="el6rpch0iw06e">
                                <path
                                    d="M254.34,171.63l1.81,4.75h7.57s-.53,20.58-.56,24.44,3.17,30.47,3.17,30.47h4.38l-.45-33.55,6.21-17.22s4.68,23,6.61,26.9,12.35,23.87,12.35,23.87h4l-10.33-44.13-4.43-15.33-22.34-10.44-8,.79"
                                    style="fill: rgb(88, 81, 188); opacity: 0.35; mix-blend-mode: multiply; transform-origin: 276.88px 196.34px;"
                                    class="animable"></path>
                            </g>
                            <g id="el5jmlks3xicm">
                                <g style="opacity: 0.35; mix-blend-mode: multiply; transform-origin: 252.059px 124.819px;"
                                   class="animable">
                                    <path
                                        d="M262.16,139.18V108.13c-4.63,6.06-9.22,11.5-13.85,17.56-2,2.63-9.88,11.34-4.51,14.84,1.37.89,3.76.85,4.95.93,4.28.3,8.53-.88,12.69-2.06Z"
                                        style="fill: rgb(88, 81, 188); transform-origin: 252.059px 124.819px;"
                                        id="elquzm095tn0r" class="animable"></path>
                                </g>
                            </g>
                            <g id="elz4o8vvkyt2">
                                <path
                                    d="M262.16,145.86l-2.58.2-.05-.15-2,.16-.6-1.71a2.58,2.58,0,0,0-2.53-1.6,1.38,1.38,0,0,0-1.28,1.91c.1.3.4,1.13.6,1.69l-2.11.17,0,.14-4.35.34c-.68,0-1.7.89-1.48,1.51l0,.09a.78.78,0,0,0,0,.16l3.76,10.62-.1,44.69h4.37l8.26-32.1Zm-6.79-.33a1.46,1.46,0,0,1-1.42-.9.78.78,0,0,1,.72-1.08,1.47,1.47,0,0,1,1.42.9A.78.78,0,0,1,255.37,145.53Z"
                                    style="fill: rgb(88, 81, 188); opacity: 0.35; mix-blend-mode: multiply; transform-origin: 253.955px 173.418px;"
                                    class="animable"></path>
                            </g>
                            <ellipse cx="283.08" cy="241.37" rx="28.69" ry="3.02"
                                     style="fill: rgb(234, 230, 255); transform-origin: 283.08px 241.37px;"
                                     id="elvv8r33qntyr" class="animable"></ellipse>
                            <path
                                d="M267.69,237.08a7.26,7.26,0,0,1-3,2.27c-1.59.71-5,1-3.1,1.67a11.24,11.24,0,0,0,5.19.07,22.48,22.48,0,0,1,3.5-.21c1.72,0,1.74-.12,1.51-2.07C271.46,236.13,268.46,235.56,267.69,237.08Z"
                                style="fill: rgb(154, 163, 244); transform-origin: 266.461px 238.806px;"
                                id="elf12gs83jh2" class="animable"></path>
                            <path
                                d="M299,236.11c-.1.54.67,2.18-.7,3.38s-4.5,2.47-2.43,2.52a12,12,0,0,0,5.11-.95c1.05-.52.21-1.34,1.51-1.75,1.72-.54,1.37-1.81.47-2.59C301.83,234.14,299.32,234.35,299,236.11Z"
                                style="fill: rgb(154, 163, 244); transform-origin: 299.445px 238.401px;"
                                id="el5ggaaoah6l" class="animable"></path>
                            <path
                                d="M292.42,181.5s4.12-12.12-7.57-22.1c0,0-6.26,2.5-11.28,2.8a27.49,27.49,0,0,1-6-.13s-.33,10.76-.34,16.56Z"
                                style="fill: rgb(74, 65, 163); transform-origin: 280.177px 170.45px;" id="elds2lcwgqy2s"
                                class="animable"></path>
                            <path
                                d="M266.32,201.61c-.23-5.41,5.65-4.7,7.81-.66,4.48,8.37-1.65,27.64-2.46,36.77a4.67,4.67,0,0,1-3.1.19,2.16,2.16,0,0,1-.9-1C267.8,225.72,266.56,207.41,266.32,201.61Z"
                                style="fill: rgb(74, 65, 163); transform-origin: 271.033px 217.913px;"
                                id="elccri4y1ad2a" class="animable"></path>
                            <path
                                d="M273.93,202.43c-.68,2.22-8.17,4.54-7.56-3.51.26-3.57,1-23.28,1.12-25.18s.46-4.68,1.38-5c4.59-1.73,12.71,4.28,11.5,11.41C279.57,184.89,275.33,197.85,273.93,202.43Z"
                                style="fill: rgb(74, 65, 163); transform-origin: 273.413px 186.49px;" id="el69biz761yp"
                                class="animable"></path>
                            <path
                                d="M285.73,205.51c-1.82-5.11,4.07-6,7.41-2.87,7.82,7.37,8.12,24.74,10,33.7a6.81,6.81,0,0,1-3.42,1,1.21,1.21,0,0,1-.93-.47C295.65,226.11,287.66,211,285.73,205.51Z"
                                style="fill: rgb(74, 65, 163); transform-origin: 294.264px 219.082px;"
                                id="elkidrhwx4ewn" class="animable"></path>
                            <path
                                d="M293.46,203.84c.2,2.3-6,7.06-8.5-.62-1.09-3.41-5.76-23.56-6.35-25.38s-.42-5.55.3-6.22c3.6-3.33,11.74-.4,13.3,6.67C293.26,183,293,199.07,293.46,203.84Z"
                                style="fill: rgb(74, 65, 163); transform-origin: 285.859px 188.834px;"
                                id="elq3nuxod8j3q" class="animable"></path>
                            <path
                                d="M261.28,115.62c.21-.23.42-.45.61-.7,1.49-1.89,1.7-3.57,3.07-5.77a19,19,0,0,1,1-1.9,8,8,0,0,1,2.23-1.83c.64-.34.09,1.08.09,1.08s.54-.79,1.07-.74c.2,0,.24,1.23.24,1.44a10.07,10.07,0,0,1-1.12,4.78,2.61,2.61,0,0,0-.39,1.09,2.46,2.46,0,0,0,1.3-.64,1.54,1.54,0,0,1,1.35-.39,3.57,3.57,0,0,1-.26.56,5.89,5.89,0,0,1-2.37,2.8c-.67.32-1.45.38-2.1.73-1.19.63-1.76,2.09-3,2.68"
                                style="fill: rgb(242, 161, 129); transform-origin: 266.005px 112.089px;"
                                id="el2y04snollz8" class="animable"></path>
                            <g id="elzeb45svdskf">
                                <rect x="265.81" y="106.25" width="5.12" height="9.42" rx="0.65"
                                      style="fill: rgb(94, 93, 187); transform-origin: 268.37px 110.96px; transform: rotate(22.7deg);"
                                      class="animable"></rect>
                            </g>
                            <g id="elgd64bsqwtco">
                                <rect x="266.35" y="106.8" width="4.29" height="8.41"
                                      style="fill: rgb(180, 180, 219); transform-origin: 268.495px 111.005px; transform: rotate(22.7deg);"
                                      class="animable"></rect>
                            </g>
                            <path
                                d="M272.1,123.28a28.07,28.07,0,0,0-5.72,1c-4.07,1.22-5.47,3.1-6.88,3.88,2.73-3.47,5.78-10.83,5.78-10.83s-3.68-3-4.1-2.3-15.83,18.75-15.35,21.67c.2,1.2,2,2.39,3.56,2.34,4.37-.15,9.45-1.74,14.77-3.48,2.34-.77,3.06.88,3.06.88"
                                style="fill: rgb(122, 116, 209); transform-origin: 258.959px 126.983px;"
                                id="elh6o94i16vel" class="animable"></path>
                            <path
                                d="M259.5,128.13S257.56,132,257,132.3s1.41-.82,2.5-1.94a22.71,22.71,0,0,0,2.59-4.1A23.38,23.38,0,0,0,259.5,128.13Z"
                                style="fill: rgb(105, 96, 196); transform-origin: 259.496px 129.305px;"
                                id="elciy78g3n416" class="animable"></path>
                            <path
                                d="M265.59,109.18a.85.85,0,0,1,.27.61,4.77,4.77,0,0,1-.07,2.6,3.94,3.94,0,0,1-1,1.33,8.57,8.57,0,0,1-1.59,1.08"
                                style="fill: rgb(242, 161, 129); transform-origin: 264.604px 111.99px;"
                                id="elmk3ukyphgaf" class="animable"></path>
                            <path
                                d="M272.19,102.67c-1,.3-1.57,1.62-1.92,2.53a14.33,14.33,0,0,0-.77,3.43,4.54,4.54,0,0,0,.17,2.4,4.67,4.67,0,0,0,.67,1,2.12,2.12,0,0,0,.48.51.74.74,0,0,0,.67.11c.32-.12.45-.5.54-.83a22.07,22.07,0,0,1,2.46-6.22"
                                style="fill: rgb(23, 13, 84); transform-origin: 271.951px 107.678px;" id="el036918b5ogx"
                                class="animable"></path>
                            <path
                                d="M271.05,109.51c0-.69-.75-1.14-1.37-.42a4.4,4.4,0,0,0-.69,2.53c0,1,.73,1.19,1.36,1.33"
                                style="fill: rgb(242, 161, 129); transform-origin: 270.019px 110.837px;"
                                id="elukzw1xg33v7" class="animable"></path>
                            <path
                                d="M264.17,126.83c1.27-1.46,5.31-3.86,10.7-3.69,3.71.12,13.82.73,14.95,3.22.58,1.27,1.2,14.27.35,18.75-.63,3.38-2.26,11.73-2.26,13.74s1.08,2.88.58,3.47c-1.13,1.31-8.87,1.86-12.5,1.86-3.24,0-8.74-.86-9-1.9-.41-1.54.63-1.48.77-3.09s.55-12.08,0-13.79c-1.07-3.09-1.59-8.13-2.44-10.42C264.61,133.25,262.9,128.29,264.17,126.83Z"
                                style="fill: rgb(122, 116, 209); transform-origin: 277.15px 143.656px;"
                                id="elo8kgy7e63c" class="animable"></path>
                            <path
                                d="M287.33,137.35c.39.8,3,5,3,5l.11.51a18.35,18.35,0,0,1-.27,2.24c-.63,3.38-2.26,11.73-2.26,13.74s1,2.85.58,3.47c-.89,1.21-15.48,3.93-14.77.55.07-.3,12.25-9.6,12.31-9.91.57-2.67,1.06-4.59,1.3-6.53C287.92,141.74,287,136.55,287.33,137.35Z"
                                style="fill: rgb(105, 96, 196); transform-origin: 282.067px 150.881px;"
                                id="eli20sqwrgi2" class="animable"></path>
                            <path
                                d="M271.93,118.49a40,40,0,0,1-.21,4.4,6.81,6.81,0,0,1-1,.57s.59,3.67,1.52,3.4,7-3.34,7-3.34-.86-.36-.86-.7.82-7,.82-7"
                                style="fill: rgb(255, 190, 157); transform-origin: 274.98px 121.347px;"
                                id="elh1tubg4cd6h" class="animable"></path>
                            <path
                                d="M276.15,103.13c-.88.24-3.22-.25-3.86.72a22.28,22.28,0,0,0-1.46,4,41.21,41.21,0,0,0-1.14,4c-.46,1.72-1.21,4.88.48,6.32a2.23,2.23,0,0,0,1.3.66c.8.15,1.59.31,2.39.45a8.05,8.05,0,0,0,3.84.09c1.64-.54,2.54-2.8,3-4.33l2.41-8.78Z"
                                style="fill: rgb(255, 190, 157); transform-origin: 276.115px 111.345px;"
                                id="elhja8gxuqpq8" class="animable"></path>
                            <path
                                d="M271.78,128.51s-.36,16.51-1,26.55l2.43,3.34,1.67-4.19a127.92,127.92,0,0,0-1.58-25.58Z"
                                style="fill: rgb(59, 46, 122); transform-origin: 272.878px 143.455px;"
                                id="elf4ifexlkm58" class="animable"></path>
                            <path
                                d="M271.22,127.06l.06.23a4.19,4.19,0,0,0,.5,1.22h0l1.49.12s1-.54,1.14-1.11-1.66-1.5-1.66-1.5l-.22.09a3.12,3.12,0,0,0-1.29.93Z"
                                style="fill: rgb(59, 46, 122); transform-origin: 272.819px 127.325px;"
                                id="elv5ygcrtznf8" class="animable"></path>
                            <path
                                d="M278.48,121.79a6.4,6.4,0,0,1,1.7,1.73c-.77,1.75-2.5,4.86-4.4,6.28a8.67,8.67,0,0,0-3-3.78S278,125.1,278.48,121.79Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 276.48px 125.795px;"
                                id="elckcascpjde6" class="animable"></path>
                            <path
                                d="M272.75,126a6.4,6.4,0,0,0-3,2.82,14.14,14.14,0,0,1,.4-5.23s1.22-1.56,1.64-1.59A8.22,8.22,0,0,0,272.75,126Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 271.207px 125.41px;"
                                id="el1g5qr5qsmgf" class="animable"></path>
                            <path
                                d="M273,162.87a5.48,5.48,0,0,0-3.57,2,.41.41,0,0,0-.16.31c0,.15.2.21.35.23.86.14,1-.41,1.8-.74L273,164"
                                style="fill: rgb(242, 161, 129); transform-origin: 271.135px 164.151px;"
                                id="el9l8x2r5y5so" class="animable"></path>
                            <path
                                d="M266.72,149.43l6.54,20.95a.75.75,0,0,1-.69,1.05l-13.64,1.2a1.28,1.28,0,0,1-1.15-.88l-7-20.64c-.17-.56.64-1.36,1.19-1.37l13.64-1.19A1.23,1.23,0,0,1,266.72,149.43Z"
                                style="fill: rgb(233, 230, 255); transform-origin: 262.04px 160.59px;"
                                id="ellakq3f6gblr" class="animable"></path>
                            <path
                                d="M266.27,150l6.45,20.63a.75.75,0,0,1-.69,1.06l-13.64,1.19a1.27,1.27,0,0,1-1.15-.88l-6.44-20.63a.75.75,0,0,1,.69-1.05l13.64-1.2A1.26,1.26,0,0,1,266.27,150Z"
                                style="fill: rgb(224, 217, 255); transform-origin: 261.762px 161px;" id="elkb4mkapxzv8"
                                class="animable"></path>
                            <polygon points="255.38 149.3 255.86 151.11 262.24 150.55 261.72 148.75 255.38 149.3"
                                     style="fill: rgb(255, 255, 255); transform-origin: 258.81px 149.93px;"
                                     id="el3bgzz5ddqwf" class="animable"></polygon>
                            <path
                                d="M256.59,147.62l.63,2,3-.28-.64-2a2.07,2.07,0,0,0-2-1.45A1.23,1.23,0,0,0,256.59,147.62Zm.67,0a.7.7,0,0,1,.57-1,1.16,1.16,0,0,1,1.14.81.7.7,0,0,1-.58,1A1.16,1.16,0,0,1,257.26,147.58Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 258.35px 147.755px;"
                                id="elnytgbhi6vp" class="animable"></path>
                            <path
                                d="M278.18,161.41c-1.43.3-5.24,1.43-5.64,1.62a17.16,17.16,0,0,0-2.43,1.8c-1.44,1.44-.7,2.11-1.27,4.06a1.65,1.65,0,0,0,0,.31c0,.21.28.38.56.19.15.25.59.1.8-.18,0,.2.27.32.71.08.24-.13.2-.12.75-.61a5.45,5.45,0,0,1,1.55-.94,11.51,11.51,0,0,0,1.51-.7c.58-.38,1.62-.47,2.12-2.12a1.72,1.72,0,0,1,.8-.8l2.33-1.46"
                                style="fill: rgb(255, 190, 157); transform-origin: 274.401px 165.464px;"
                                id="el0u9hdpcy17tm" class="animable"></path>
                            <path
                                d="M287,134.57c.61,2.16,3.13,17.15,3.13,17.15L275.89,162l1.18,3.11s17-5.71,18.36-9.61S296.7,134,292,127.78a10.73,10.73,0,0,0-4.52-3"
                                style="fill: rgb(122, 116, 209); transform-origin: 286.04px 144.945px;"
                                id="el2p84nxzbuif" class="animable"></path>
                            <path
                                d="M272.39,166.81l-.35.32a5,5,0,0,0-.74.73c-.24.29-.47.59-.68.8a2.57,2.57,0,0,1-.36.32,6.64,6.64,0,0,1,.86-1.28A3.22,3.22,0,0,1,272,167Z"
                                style="fill: rgb(242, 161, 129); transform-origin: 271.325px 167.895px;"
                                id="elev51bu4h4w" class="animable"></path>
                            <path
                                d="M271.61,165.86a2.19,2.19,0,0,0-.4.46,6,6,0,0,0-.35.5l-.19.29a2.85,2.85,0,0,0-.16.3,7.21,7.21,0,0,1-1,1.68s.08-.24.23-.57.35-.77.56-1.2a4.3,4.3,0,0,1,.82-1.09A2.24,2.24,0,0,1,271.61,165.86Z"
                                style="fill: rgb(242, 161, 129); transform-origin: 270.56px 167.475px;"
                                id="elhu7j4zxy93o" class="animable"></path>
                            <path
                                d="M270.71,165.1a4.5,4.5,0,0,1-.34.49,4.8,4.8,0,0,0-.36.47,5.82,5.82,0,0,0-.28.61c-.17.43-.33.87-.46,1.2s-.21.55-.21.55a3.87,3.87,0,0,1,.06-.59,5.13,5.13,0,0,1,.4-1.25,3.51,3.51,0,0,1,.34-.63,6.09,6.09,0,0,1,.43-.44A3.81,3.81,0,0,0,270.71,165.1Z"
                                style="fill: rgb(242, 161, 129); transform-origin: 269.885px 166.76px;"
                                id="el3ruzlolsru7" class="animable"></path>
                            <path
                                d="M281.57,113.45c-.55-.33-1-.67-1.34-.14-.2.29-.31.68-.64.77a.65.65,0,0,1-.75-.52,1.86,1.86,0,0,1,.13-1c.22-.72.44-1.44.67-2.16a3.23,3.23,0,0,0,.15-2.16,2.43,2.43,0,0,0-.68-.88,7.28,7.28,0,0,0-3.32-1.42,33.21,33.21,0,0,1-3.57-.73,3.87,3.87,0,0,1-1.36-.68,3,3,0,0,1-1-2.2,4.48,4.48,0,0,1,.7-2.35,3.49,3.49,0,0,0,.35.82,3.12,3.12,0,0,1,.65-1c.35,1.93,8.5,1.29,10.4,2.14,1.32.59,2.41,1,2.37,3.12a.84.84,0,0,0,.26.34,5.91,5.91,0,0,1,1.82,4.32c.18,2.37-1.2,4.94-2.55,6.9a4.7,4.7,0,0,1-1,1.2,2.7,2.7,0,0,1-1.89.43c-.59-.12-1.75-.07-1.76-.66,0-.43.91-1.19,1.16-1.54"
                                style="fill: rgb(59, 46, 122); transform-origin: 278.143px 109.039px;"
                                id="elyy8d46mtwro" class="animable"></path>
                            <path
                                d="M279.44,115.69a.89.89,0,0,0,.15.71.9.9,0,0,0,1,.14,2.58,2.58,0,0,0,1.62-2c.19-1-.36-2.05-1.3-1.78a1.37,1.37,0,0,0-.88,1.35"
                                style="fill: rgb(255, 190, 157); transform-origin: 280.834px 114.675px;"
                                id="el72qkx5ew5pu" class="animable"></path>
                            <path d="M271.93,118.85l2.62.48a3.66,3.66,0,0,1-2.65,1"
                                  style="fill: rgb(242, 161, 129); transform-origin: 273.225px 119.591px;"
                                  id="el8lpy4dajqsn" class="animable"></path>
                        </g>
                        <g id="Play" class="animable" style="transform-origin: 63.2886px 68.9586px;">
                            <polyline points="66.75 74.05 70.25 75.81 68.5 71.51"
                                      style="fill: rgb(196, 196, 247); transform-origin: 68.5px 73.66px;"
                                      id="el8hiif2phti2" class="animable"></polyline>
                            <path d="M55.89,68.55a7.41,7.41,0,1,0,7.4-7A7.2,7.2,0,0,0,55.89,68.55Z"
                                  style="fill: rgb(196, 196, 247); transform-origin: 63.2886px 68.9586px;"
                                  id="eln9u20jpgir8" class="animable"></path>
                            <path
                                d="M61.48,66.26v5a.52.52,0,0,0,.78.45l4.32-2.49a.53.53,0,0,0,0-.91l-4.32-2.49A.52.52,0,0,0,61.48,66.26Z"
                                style="fill: rgb(254, 254, 254); transform-origin: 64.1591px 68.765px;"
                                id="elzsw2377ehk" class="animable"></path>
                        </g>
                        <g id="Like2" class="animable" style="transform-origin: 312.411px 122.059px;">
                            <polyline points="308.95 127.15 305.45 128.91 307.2 124.61"
                                      style="fill: rgb(196, 196, 247); transform-origin: 307.2px 126.76px;"
                                      id="el95ich343c" class="animable"></polyline>
                            <path d="M319.81,121.65a7.41,7.41,0,1,1-7.4-7A7.2,7.2,0,0,1,319.81,121.65Z"
                                  style="fill: rgb(196, 196, 247); transform-origin: 312.411px 122.059px;"
                                  id="els5uw2u1krhl" class="animable"></path>
                            <path
                                d="M311.09,125c1.61,0,3.24,0,4.73,0,.47,0,.87-.74.3-1a1,1,0,0,0,.59-.48.47.47,0,0,0-.29-.63c.56.13.78-.71.35-1a1.22,1.22,0,0,0,.47-.71.7.7,0,0,0-.34-.74,1.24,1.24,0,0,0-.58-.09l-2,0a4.19,4.19,0,0,0-.3-2.94c-.16-.26-.59-.57-.94-.37s-.23.66-.21,1A3.32,3.32,0,0,1,311,121S311.11,123.66,311.09,125Z"
                                style="fill: rgb(254, 254, 254); transform-origin: 314.126px 120.988px;"
                                id="elkned9oshxdq" class="animable"></path>
                            <rect x="308.07" y="121.04" width="2.44" height="3.96"
                                  style="fill: rgb(254, 254, 254); transform-origin: 309.29px 123.02px;"
                                  id="el7lvim6s3oks" class="animable"></rect>
                        </g>
                        <g id="Like" class="animable" style="transform-origin: 193.491px 67.4889px;">
                            <polyline points="196.95 66.54 199.5 63.78 196 64.47"
                                      style="fill: rgb(196, 196, 247); transform-origin: 197.75px 65.16px;"
                                      id="elwf5qis7mroj" class="animable"></polyline>
                            <path d="M187.49,67.18a5.37,5.37,0,1,0,5.36-5.06A5.21,5.21,0,0,0,187.49,67.18Z"
                                  style="fill: rgb(196, 196, 247); transform-origin: 192.851px 67.4889px;"
                                  id="eldn5k9u4rfib" class="animable"></path>
                            <path
                                d="M191.82,69.61c1.06,0,2.13,0,3.1,0,.31,0,.58-.53.2-.69a.74.74,0,0,0,.39-.35.36.36,0,0,0-.19-.46c.37.1.51-.51.23-.71a.86.86,0,0,0,.3-.52.5.5,0,0,0-.22-.53.7.7,0,0,0-.38-.07h-1.32a3.29,3.29,0,0,0-.19-2.13c-.11-.19-.39-.42-.61-.27s-.16.47-.15.69a2.44,2.44,0,0,1-1.19,2.21S191.84,68.64,191.82,69.61Z"
                                style="fill: rgb(254, 254, 254); transform-origin: 193.826px 66.7208px;"
                                id="el7g6u5spia3l" class="animable"></path>
                            <rect x="189.84" y="66.73" width="1.6" height="2.87"
                                  style="fill: rgb(254, 254, 254); transform-origin: 190.64px 68.165px;"
                                  id="el8bd9a543mpb" class="animable"></rect>
                        </g>
                        <g id="Love" class="animable" style="transform-origin: 215.756px 24.7701px;">
                            <path d="M221.94,29.52a7.89,7.89,0,1,0-1.8,1.66l3.06,1.63Z"
                                  style="fill: rgb(196, 196, 247); transform-origin: 215.756px 24.7701px;"
                                  id="eld5o9nar8uj7" class="animable"></path>
                            <path
                                d="M212.41,22.42a1.94,1.94,0,0,1,2.73,0l.5.51.5-.5a1.93,1.93,0,1,1,2.72,2.75L217,27.06l0,0a1.92,1.92,0,0,1-2.73,0l-1.85-1.89A1.94,1.94,0,0,1,212.41,22.42Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 215.64px 24.7441px;"
                                id="el8em3t931qwg" class="animable"></path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                              radius="2"></feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                              radius="2"></feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                               values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>
            </main>
        </div>
    </div>
</div>
</body>
</html>
