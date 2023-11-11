<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Attendance</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
                button{
                    padding: 0.75rem 1.5rem;
                    font-size: 1rem;
                    appearance: none;
                    border: 0;
                    background: 0;
                    position: relative;
                    color: white;
                    font-weight: 400;
                    border-radius: 0.5rem;
                    overflow: hidden;
                    font-family: inherit;
                    font-weight: 500;
                }
                button:after{
                    content: '';
                    position: absolute;
                    inset:0;
                    box-shadow: inset 0 0 0 2px rgba(255,255,255,1);
                    border-radius: inherit;
                    mix-blend-mode: overlay;
                }
                button iframe{
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%,-50%) scale(1.2) rotate(15deg);
                    opacity: 0.25;
                    filter: blur(5px);
                    transition: all 0.5s ease-in-out;
                }
                button span{
                    position: relative;
                    z-index: 1;
                    opacity: 0.75;
                    color: white;
                    transition: all 0.5s ease-in-out;
                }
                button:hover iframe{
                    transform: translate(-50%,-50%) scale(0.5);
                    opacity: 1;
                    filter: blur(0);
                }
                button:hover span{
                    opacity: 1;
                }
                html, body{
                    height: 100%;
                    width: 100%;
                    background: black;
                    font-size: 24px;
                    font-family: system-ui, sans-serif;
                }
                body{
                    display: flex;
                    align-items: center;
                    justify-content: center; 
                }
        </style>
    </head>
    <body class="antialiased">
        <div class="">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <!-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
 -->
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="text-center">
                <div style="font-weight: 600; color: white; padding: 20px 20px; font-family: system-ui, sans-serif;">Welcome to Attendance System </div>
                <a href="{{ route('login') }}">
                    <button>
                        <span>Login</span>  
                        <iframe src="data:text/html;base64,PGh0bWw+CiAgICAgICAgICAgIDxoZWFkPgogICAgICAgICAgICAgICAgPG1ldGEgbmFtZT0idmlld3BvcnQiIGNvbnRlbnQ9IndpZHRoPWRldmljZS13aWR0aCwgaW5pdGlhbC1zY2FsZT0xIj4KICAgICAgICAgICAgICAgIDxzdHlsZT4KICAgICAgICAgICAgICAgICAgICBodG1sLCBib2R5LCBpZnJhbWUsIGNhbnZhc3sKICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luOiAwOwogICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nOiAwOwogICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgICAgICAgICAgICAgICAgICBib3JkZXI6IDA7CiAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgPC9zdHlsZT4KICAgICAgICAgICAgICAgIDxzY3JpcHQgdHlwZT0ibW9kdWxlIj4KICAgICAgICAgICAgICAgICAgICBpbXBvcnQgUmVhY3QsIHt1c2VSZWZ9IGZyb20gJ2h0dHBzOi8vY2RuLnNreXBhY2suZGV2L3JlYWN0QDE4LjAuMic7CiAgICAgICAgICAgICAgICAgICAgaW1wb3J0IFJlYWN0RE9NIGZyb20gJ2h0dHBzOi8vY2RuLnNreXBhY2suZGV2L3JlYWN0LWRvbUAxOC4wLjInOwogICAgICAgICAgICAgICAgICAgIGltcG9ydCB7Q2FudmFzLCB1c2VGcmFtZX0gZnJvbSAnaHR0cHM6Ly9jZG4uc2t5cGFjay5kZXYvQHJlYWN0LXRocmVlL2ZpYmVyQDcuMC4yNCc7CgogICAgICAgICAgICAgICAgICAgIGNvbnN0IFRleHR1cmVNZXNoID0gKCkgPT4gewogICAgICAgICAgICAgICAgICAgICAgICBjb25zdCBtZXNoID0gdXNlUmVmKG51bGwpCiAgICAgICAgICAgICAgICAgICAgICAgIHVzZUZyYW1lKHN0YXRlID0+IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnN0IHsgY2xvY2ssIG1vdXNlLCBnbCwgc2NlbmUsIGNhbWVyYSB9ID0gc3RhdGUKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmKG1lc2guY3VycmVudCl7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzaC5jdXJyZW50Lm1hdGVyaWFsLnVuaWZvcm1zLnVfbW91c2UudmFsdWUgPSBbbW91c2UueCwgbW91c2UueV0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNoLmN1cnJlbnQubWF0ZXJpYWwudW5pZm9ybXMudV90aW1lLnZhbHVlID0gY2xvY2suZ2V0RWxhcHNlZFRpbWUoKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICB9KQogICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIFJlYWN0LmNyZWF0ZUVsZW1lbnQoJ21lc2gnLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlZjptZXNoLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBvc2l0aW9uOiBbMCwwLDBdLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNjYWxlOiAxLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJvdGF0aW9uOiBbMCwwLDBdCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LAogICAgICAgICAgICAgICAgICAgICAgICAgICAgUmVhY3QuY3JlYXRlRWxlbWVudCgncGxhbmVHZW9tZXRyeScse2FyZ3M6WzEwMjQsMTAyNF19KSwgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBSZWFjdC5jcmVhdGVFbGVtZW50KCdzaGFkZXJNYXRlcmlhbCcsewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZyYWdtZW50U2hhZGVyOiBgLy8gRnJhZ21lbnQgc2hhZGVyCgovLyBVbmlmb3Jtcwp1bmlmb3JtIHZlYzIgdV9yZXNvbHV0aW9uOwp1bmlmb3JtIHZlYzIgdV9tb3VzZTsKdW5pZm9ybSBmbG9hdCB1X3RpbWU7CnVuaWZvcm0gdmVjMyB1X2NvbG9yOwp1bmlmb3JtIGZsb2F0IHVfc2NhbGU7IAp1bmlmb3JtIGZsb2F0IHVfZGlzdG9ydF9zY2FsZTsKdW5pZm9ybSBmbG9hdCB1X3Bvd2VyOwp1bmlmb3JtIGZsb2F0IHVfc3BlZWQ7CnVuaWZvcm0gZmxvYXQgdV94Owp1bmlmb3JtIGZsb2F0IHVfeTsKdW5pZm9ybSBmbG9hdCB1X2l0ZXJhdGlvbnM7CiAgICAKI2RlZmluZSBwb3dlciAxLgojZGVmaW5lIHpvb21PdXQgMy4KI2RlZmluZSByb3QgMS4KI2RlZmluZSBpdGVyIDUwLgojZGVmaW5lIGh1ZVBvd2VyIDAuNwojZGVmaW5lIGdsb3cgMC41CiNkZWZpbmUgU3BlZWQgMS41CiNkZWZpbmUgV2F2ZVNwZWVkIDIuCiNkZWZpbmUgQnJpZ2h0bmVzcyAwLjUKCnZvaWQgbWFpbigpCnsKICAgIC8vIE5vcm1hbGl6ZWQgcGl4ZWwgY29vcmRpbmF0ZXMgKGZyb20gMCB0byAxKQogICAgdmVjMiB1diA9IGdsX0ZyYWdDb29yZC54eS91X3Jlc29sdXRpb24ueHk7CgoJdmVjMiBYWVNjYWxlID0gdmVjMigxLjAtdV9zY2FsZSwxLjAtdV9zY2FsZSk7Cgl2ZWMyIFhZTW92ZSA9IHZlYzIodV94LHVfeSk7CglmbG9hdCBpdGVyYXRpb25zID0gaXRlciAqIHVfaXRlcmF0aW9uczsKCiAgdXYgKj0gem9vbU91dDsKCXV2Lnh5ID0gdXYueHkgKiBYWVNjYWxlOwoJdXYueHkgPSB1di54eSArIFhZTW92ZTsKCXZlYzMgZmluYWxDb2wgPSB2ZWMzKDAsMCwwKTsKCWZsb2F0IGhhbGZEaXN0b3J0ID0gdV9kaXN0b3J0X3NjYWxlIC8gMC41OwoJZmxvYXQgZGlzdG9ydHNjMiA9IHVfZGlzdG9ydF9zY2FsZSAvIHVfZGlzdG9ydF9zY2FsZSArIGhhbGZEaXN0b3J0OwogICAgCglmb3IoZmxvYXQgaSA9IDEuMDsgaSA8IGl0ZXJhdGlvbnM7IGkrKyl7CgkJdXYueCArPSB1X3Bvd2VyIC8gaSAqIHNpbihpICogdV9kaXN0b3J0X3NjYWxlICogdXYueSAtICh1X3RpbWUgKiBTcGVlZCAqIHVfc3BlZWQpKTsKCQl1di55ICs9IHVfcG93ZXIgLyBpICogc2luKGkgKiBkaXN0b3J0c2MyICogdXYueCArICh1X3RpbWUgKiBTcGVlZCAqIHVfc3BlZWQpKTsKCX0KICAgIAoJdmVjMyBjb2wgPSB2ZWMzKHZlYzMoZ2xvdyxnbG93LGdsb3cpL3NpbigodV90aW1lKldhdmVTcGVlZCp1X3NwZWVkKS1sZW5ndGgodXYueXgpIC0gdXYueSkpOwoJZmluYWxDb2wgPSB2ZWMzKGNvbCpjb2wpOwogICAgdmVjMyBDb2xvciA9IHZlYzMoMS4sMS4sMS4pICogQnJpZ2h0bmVzczsKCQogICAgQ29sb3IgPSBDb2xvcipDb2xvciAqIDAuNSArIDAuNSpjb3MoKHVfdGltZSp1X3NwZWVkKSt1di54eXgrdmVjMygwLDIsNCkpICogaHVlUG93ZXI7CgoKICAgIC8vIE91dHB1dCB0byBzY3JlZW4KICAgIGdsX0ZyYWdDb2xvciA9IHZlYzQoZmluYWxDb2wucmdiICogQ29sb3IsIDEuMCkgKiBwb3dlcjsKfWAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmVydGV4U2hhZGVyOiBgLy8gVmVydGV4IHNoYWRlcgoKdm9pZCBtYWluKCkgewogIGdsX1Bvc2l0aW9uID0gcHJvamVjdGlvbk1hdHJpeCAqIG1vZGVsVmlld01hdHJpeCAqIHZlYzQocG9zaXRpb24sIDEuMCk7Cn1gLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHVuaWZvcm1zOiB7InVfY29sb3IiOnsidmFsdWUiOlsxLDAsMF19LCJ1X3NjYWxlIjp7InZhbHVlIjowLjIxfSwidV9kaXN0b3J0X3NjYWxlIjp7InZhbHVlIjowLjUzNX0sInVfcG93ZXIiOnsidmFsdWUiOjAuMTU3fSwidV9zcGVlZCI6eyJ2YWx1ZSI6MC4yMjJ9LCJ1X3giOnsidmFsdWUiOjAuNX0sInVfeSI6eyJ2YWx1ZSI6MC44NTl9LCJ1X2l0ZXJhdGlvbnMiOnsidmFsdWUiOjAuMTIyfSwidV90aW1lIjp7InZhbHVlIjowfSwidV9tb3VzZSI6eyJ2YWx1ZSI6WzAsMF19LCJ1X3Jlc29sdXRpb24iOnsidmFsdWUiOlsxMDI0LDEwMjRdfX0sCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2lyZWZyYW1lOiBmYWxzZSwgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2lyZWZyYW1lTGluZXdpZHRoOiAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRpdGhlcmluZzogZmFsc2UsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmxhdFNoYWRpbmc6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZG91YmxlU2lkZWQ6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZ2xzbFZlcnNpb246ICIxMDAiCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KQogICAgICAgICAgICAgICAgICAgICAgICApOyAgCiAgICAgICAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgICAgICBSZWFjdERPTS5yZW5kZXIoUmVhY3QuY3JlYXRlRWxlbWVudChDYW52YXMsewogICAgICAgICAgICAgICAgICAgICAgICAgICAgZ2w6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwcmVzZXJ2ZURyYXdpbmdCdWZmZXI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJlbXVsdGlwbGllZEFscGhhOiBmYWxzZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbHBoYTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0cmFuc3BhcmVudDogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbnRpYWxpYXM6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJlY2lzaW9uOiAiaGlnaHAiLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBvd2VyUHJlZmVyZW5jZTogImhpZ2gtcGVyZm9ybWFuY2UiCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LAogICAgICAgICAgICAgICAgICAgICAgICAgICAgZHByOiBbMiwyXSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhbWVyYTogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvdjogNzUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmVhcjogMC4xLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZhcjogMTAwMCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwb3NpdGlvbjogWzAsMCw1XQogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlOnsgaGVpZ2h0OiA1MTIsIHdpZHRoOiA1MTIgfQogICAgICAgICAgICAgICAgICAgICAgICB9LAogICAgICAgICAgICAgICAgICAgICAgICBSZWFjdC5jcmVhdGVFbGVtZW50KFRleHR1cmVNZXNoKSAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICksIGRvY3VtZW50LmJvZHkpOwogICAgICAgICAgICAgICAgPC9zY3JpcHQ+CiAgICAgICAgICAgIDwvaGVhZD4KICAgICAgICAgICAgPGJvZHk+CjwhLS0gQVNTRVQgTk9UIElOTElORUQ6IGFzc2V0cy9seWdpYS5mNzQ5MDU5NC5zdmcgLS0+Cgo8IS0tIEFTU0VUIE5PVCBJTkxJTkVEOiBhc3NldHMvYWRkLmE1NTI0MGRkLnN2ZyAtLT4KCjwhLS0gQVNTRVQgTk9UIElOTElORUQ6IGFzc2V0cy9ib29rLjVmYjExYjhkLnN2ZyAtLT4KCjwhLS0gQVNTRVQgTk9UIElOTElORUQ6IGFzc2V0cy9jb2RlLjQyOGIxOGY1LnN2ZyAtLT4KCjwhLS0gQVNTRVQgTk9UIElOTElORUQ6IGFzc2V0cy9vdmVyZmxvdy44ZDUwNDE1ZC5zdmcgLS0+Cgo8IS0tIEFTU0VUIE5PVCBJTkxJTkVEOiBhc3NldHMvY2xvc2UuNjRiODBkMDAuc3ZnIC0tPgoKPCEtLSBBU1NFVCBOT1QgSU5MSU5FRDogYXNzZXRzL3RyYXNoLjUyNGRiY2QzLnN2ZyAtLT4KPC9ib2R5PgogICAgICAgIDwvaHRtbD4=" style="border:0;margin:0;width: 512px;height:512px;" />
                    </button>
                </a>
            </div>
        </div>
    </body>
</html>
