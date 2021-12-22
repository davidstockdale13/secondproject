<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;

            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .row {
            margin-left: 0px;
            margin-right: 0px;
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 0.5rem;
            padding-left: 0px;
            padding-right: 0px;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            /* padding-left: 1.5rem; */
            /* padding-right: 1.5rem */
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #1a202c;
        }

    </style>

    {{-- HEADER --}}
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between  bg-gray-100 dark:bg-gray-900" style="padding-right: 30px;
    padding-left: 30px;">

        <div class="text-center  text-gray-500 sm:text-left" style="border-width:3px; padding-right:5px;
        padding-left:5px; padding-bottom:0px; font-size:25px; color:lightgrey; border-color:lightgrey;">
            DEMO ONE
        </div>

        <div class="ml-4 text-center  text-gray-500 sm:text-right sm:ml-0">
            <div class="grid" style="grid-auto-flow: column; grid-gap: 30px;">
                <div class="text-left  text-gray-500">
                    Home
                </div>

                <div class="text-left  text-gray-500">
                    Buy
                </div>

                <div class="text-left  text-gray-500">
                    Rent
                </div>

                <div class="text-left  text-gray-500">
                    About Us
                </div>

                <div class="text-left  text-gray-500">
                    Latest News
                </div>

                <div class="text-center  text-gray-500 sm:text-left" style="border-width:3px; padding-right:10px; padding-left:10px; padding-bottom:0px;
                font-size:15px; color:lightgrey; border-color:lightgrey;">
                    Contact
                </div>

            </div>

        </div>

    </div>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- Title --}}
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center sm:text-left" style="font-size: 50px;
                color:white;">
                We can help you find your new home
            </div>

            {{-- grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2" style="grid-gap: 10px;">
                <div class="p-6">

                    <input type="text" placeholder="Full Name" name="name" style="width: 100%;
                        background-color: #1a202c;
                        border-bottom: revert;">

                </div>

                <div class="p-6">

                    <input type="text" placeholder="Email Address" name="email" style="width: 100%;
                        background-color: #1a202c;
                        border-bottom: revert;">

                </div>

                <div class="p-6">

                    <input type="text" placeholder="Telephone Number" name="telephone" style="width: 100%;
                        background-color: #1a202c;
                        border-bottom: revert;">

                </div>

                <div class="p-6">

                    <select name="size" style="width: 100%;
                        background-color: #1a202c;
                        color:gray;
                        border-color:#e2e8f0;
                        border-bottom: revert;
                        border-bottom-width: 2px;">
                        <option value="default">How can we help?</option>
                        <option value="one">Option 1</option>
                        <option value="two">Option 2</option>
                    </select>

                </div>
            </div>

            <div class="text-left  text-gray-500" style="word-wrap:break-word;
            color:gray;
            padding-top:20px;">
                Your message
            </div>

            <input type="text" name="name" style="width: 100%;
            background-color: #1a202c;
            border-bottom: revert;">
            <span>
                <button type="submit" class="btn btn-primary" style="background:blue;
                margin-top:20px;">
                    GET IN TOUCH <i class="fa fa-arrow-right"></i>
                </button>
            </span>

            {{-- After Button --}}

            <div class="grid" style="grid-auto-flow: column;
            grid-gap: 50px;
            margin-top:20px;
            margin-bottom:20px;">
                <div class="p-6">

                    <div class="row">
                        <span class="iconify" data-icon="bytesize:home" style="color: blue;
                        width:60px;
                        height:60px;"></span>
                        <div class="text-left " style="font-size: 25px;
                    color:lightgray;">
                            Office Address
                        </div>
                        <div class="text-left  text-gray-500">
                            The Street, London, Postcode
                        </div>
                    </div>


                </div>

                <div class="p-6">

                    <div class="row">
                        <span class="iconify" data-icon="bytesize:telephone" style="color: blue;
                        width:60px;
                        height:60px;"></span>
                        <div class="text-left " style="font-size: 25px;
                    color:lightgray;">
                            Telephone
                        </div>
                        <div class="text-left  text-gray-500">
                            +44 (0) 1234 567890
                        </div>
                    </div>

                </div>

                <div class="p-6">

                    <div class="row">
                        <span class="iconify" data-icon="simple-line-icons:envelope-open" style="color: blue;
                        width:60px;
                        height:60px;"></span>
                        <div class="text-left " style="font-size: 25px;
                    color:lightgray;">
                            Email Address
                        </div>
                        <div class="text-left  text-gray-500">
                            info@demoone.com
                        </div>
                    </div>

                </div>


            </div>

        </div>



    </div>


</body>
{{-- FOOTER --}}
<footer style="background: rgb(56, 49, 71);">
    <div class="col-md-12" style="background: rgb(56, 49, 71);">

        <div class="flex justify-center sm:items-center" style="padding-top: 20px;">

            <div class="grid" style="grid-auto-flow: column;
        grid-gap: 50px;">

                <div class="row" style="margin-inline-start: auto;">
                    <div class="text-center" style="border-width:3px; 
                    width:150px;
                    padding-right:5px;
                    padding-left:5px;
                    padding-bottom:0px;
                    font-size:25px;
                    color:lightgrey;
                    border-color:lightgrey;
                    text-align:center;">
                        DEMO ONE
                    </div>
                </div>
                <div class="row">
                    <div class="text-left " style="font-size: 25px;
                color:lightgray;">
                        Menu
                    </div>
                    <div class="text-left " style="
                color:gray;">
                        Buy
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Rent
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        About Us
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Testimonials
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Meet the Team
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Blog
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Contact Us
                    </div>
                </div>
                <div class="row">
                    <div class="text-left " style="font-size: 25px;
                color:lightgray;">
                        Social
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        <a href="#" class="fa fa-facebook"></a>
                        Facebook
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        <a href="#" class="fa fa-linkedin"></a>
                        Linked In
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        <a href="#" class="fa fa-instagram"></a>
                        Instagram
                    </div>
                </div>
                <div class="row">
                    <div class="text-left " style="font-size: 25px;
                color:lightgray;">
                        Company
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Privacy Policy
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        Terms & Conditions
                    </div>
                    <div class="text-left " style="font-size: 25px;
                color:lightgray;
                padding-top:20px;">
                        Get In Touch
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        <a href="#" class="fa fa-phone"></a>
                        +44 (0) 1234 67890
                    </div>
                    <div class="text-left  text-gray-500" style="
                color:gray;">
                        <span class="glyphicon glyphicon-envelope"></span>
                        info@demooneprops.com
                    </div>
                </div>
                <div class="row" style="max-width: 415px;
            margin-inline-end: auto;">
                    <div class="text-left " style="font-size: 25px;
                color:lightgray;
                padding-bottom:20px;">
                        <b>
                            Sign up for our newsletter
                        </b>
                    </div>
                    <form style="display: flex;">
                        <input type="text" placeholder="Enter Email Address" name="name" style="width: 100%;
                    background:none;
                        border-bottom: revert;">
                        <span>
                            <button type="submit" class="btn btn-primary" style="background:none;
                        border:none;
                        margin-left: -30px;">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </span>
                    </form>




                    <div class="text-left  text-gray-500" style="word-wrap:break-word;
                max-width:415px;
                color:gray;">
                        Loren ipsum dolor sit amet, consectetur adipiscing elit, se dolorem

                        elusmod tempor incidunt ut labore et dolore magna aliqua. Ut eni
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- Footer 2 --}}
    <div class="col-md-12" style="background: rgb(56, 49, 71);">
        <div class="col-md-10 col-md-offset-1">
            <div class="flex justify-center mx-auto sm:justify-between sm:items-center" style="
    margin-top:20px;
    border-top:groove;
    border-color:gray;">

                <div class="text-center  text-gray-500 sm:text-left">
                    @Copyright Demo One. All rights reserved 2021.
                </div>

                <div class="ml-4 text-center  text-gray-500 sm:text-right sm:ml-0">
                    Website by Property Webmasters
                </div>
            </div>
        </div>
    </div>

</footer>

</html>
