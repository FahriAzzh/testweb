<!doctype html>
<html lang="en" class="dark scroll-smooth" id="root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="farideghbali">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">

    <style>
        .number-group {
            overflow: hidden;
            height: 2em;
        }
        .number {
            display: block;
            height: 2em;
        }
    </style>
    <title>Startup Landing Page - Tailwind</title>
    <!-- Develoop By: Farideghbali / Farideghbali.com / Farideghbali.dev@gmail.com   -->
</head>
<body class="bg-white dark:bg-dark seceltion font-Inter">
<div class="fixed top-0 left-0 z-50 w-full">
    <div class="px-4 py-4 lg:px-8 lg:py-1" id="header">
        <div class="flex items-center justify-between">
            <div class="logo">
                <img src="./img/logo-light.svg" alt="logo" class="hidden dark:block w-44">
                <img src="./img/logo.svg" alt="logo" class="block dark:hidden w-44">
            </div>
            {{-- HAMBURGER --}}
            <div class="navigation hidden lg:block">
                <nav>
                    <ul class="flex items-center justify-between">
                        <li class="px-6 py-4"><a href="#slider" class="menu-item">Home</a></li>
                        <li class="px-6 py-4"><a href="#features" class="menu-item">Features</a></li>
                        <li class="px-6 py-4"><a href="#support" class="menu-item">Support</a></li>
                        <li class="px-6 py-4"><a href="#pricing" class="menu-item">Pricing</a></li>
                        <li class="px-6 py-4"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            {{-- HAMBURGER END --}}
            <div class="panel flex items-center">
                <a href="{{ route('login') }}" class="btn cursor-pointer text-neutral-900 py-3 px-2 hidden lg:block">sign in</a>
                <a href="{{ route('register') }}" class="btn cursor-pointer bg-[#4a6cf7] mr-6 py-3 hidden lg:block">sign Up</a>
                <button type="button" class="cursor-pointer" id="change-mood">
                    <svg viewBox="0 0 23 23" class="cursor-pointer block dark:hidden" fill=""
                         xmlns="http://www.w3.org/2000/svg" width="30px">
                        <path d="M9.55078 1.5C5.80078 1.5 1.30078 5.25 1.30078 11.25C1.30078 17.25 5.80078 21.75 11.8008 21.75C17.8008 21.75 21.5508 17.25 21.5508 13.5C13.3008 18.75 4.30078 9.75 9.55078 1.5Z"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30px"
                         class="cursor-pointer dark:block hidden">
                        <mask id="path-1-inside-1_977:1934" fill="white">
                            <path d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z"></path>
                        </mask>
                        <path d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z"
                              fill="black" stroke="white" stroke-width="2" mask="url(#path-1-inside-1_977:1934)"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="main" id="main">
    <div class="relative flex items-center h-screen px-4 lg:px-0 bg-white dark:bg-dark" id="slider">
        <div class="sticky z-10 w-full lg:w-2/5 2xl:w-1/2 mx-auto text-center mt-20">
            <h1 class="heading text-3xl lg:text-5xl !leading-normal">Startup
                Focused Tailwind CSS Template
            </h1>
            <p class="text-neutral-600 dark:text-gray-400 text-xl font-medium leading-normal my-4">A Complete Tailwind
                CSS Web Template Crafted for - Startup, SaaS, Business, Software and Agencies. Comes with high-quality
                design and everything you need!
            </p>
            <div class="flex flex-col lg:flex-row items-center justify-center mt-8 p-6">
                <a href="#pricing" class="btn bg-[#4a6cf7]">Get Started</a>
                <a href="#features"
                   class="btn bg-[#090E34] text-neutral-900 bg-opacity-20 hover:bg-opacity-30 dark:bg-[#ffff64] dark:bg-opacity-10 dark:hover:bg-opacity-5">Learn
                    More</a>
            </div>
        </div>
        <div class="absolute top-0 right-0">
            <svg width="450" height="556" viewBox="0 0 450 556" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="277" cy="63" r="225" fill="url(#paint0_linear_25:217)"></circle>
                <circle cx="17.9997" cy="182" r="18" fill="url(#paint1_radial_25:217)"></circle>
                <circle cx="76.9997" cy="288" r="34" fill="url(#paint2_radial_25:217)"></circle>
                <circle cx="325.486" cy="302.87" r="180" transform="rotate(-37.6852 325.486 302.87)"
                        fill="url(#paint3_linear_25:217)"></circle>
                <circle opacity="0.8" cx="184.521" cy="315.521" r="132.862" transform="rotate(114.874 184.521 315.521)"
                        stroke="url(#paint4_linear_25:217)"></circle>
                <circle opacity="0.8" cx="356" cy="290" r="179.5" transform="rotate(-30 356 290)"
                        stroke="url(#paint5_linear_25:217)"></circle>
                <circle opacity="0.8" cx="191.659" cy="302.659" r="133.362" transform="rotate(133.319 191.659 302.659)"
                        fill="url(#paint6_linear_25:217)"></circle>
                <defs>
                    <linearGradient id="paint0_linear_25:217" x1="-54.5003" y1="-178" x2="222" y2="288"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                    <radialGradient id="paint1_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(17.9997 182) rotate(90) scale(18)">
                        <stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08"></stop>
                    </radialGradient>
                    <radialGradient id="paint2_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(76.9997 288) rotate(90) scale(34)">
                        <stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08"></stop>
                    </radialGradient>
                    <linearGradient id="paint3_linear_25:217" x1="226.775" y1="-66.1548" x2="292.157" y2="351.421"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:217" x1="184.521" y1="182.159" x2="184.521" y2="448.882"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="paint5_linear_25:217" x1="356" y1="110" x2="356" y2="470"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="paint6_linear_25:217" x1="118.524" y1="29.2497" x2="166.965" y2="338.63"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="absolute bottom-0 left-0">
            <svg width="364" height="201" viewBox="0 0 364 201" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.88928 72.3303C33.6599 66.4798 101.397 64.9086 150.178 105.427C211.155 156.076 229.59 162.093 264.333 166.607C299.076 171.12 337.718 183.657 362.889 212.24"
                      stroke="url(#paint0_linear_25:218)"></path>
                <path d="M-22.1107 72.3303C5.65989 66.4798 73.3965 64.9086 122.178 105.427C183.155 156.076 201.59 162.093 236.333 166.607C271.076 171.12 309.718 183.657 334.889 212.24"
                      stroke="url(#paint1_linear_25:218)"></path>
                <path d="M-53.1107 72.3303C-25.3401 66.4798 42.3965 64.9086 91.1783 105.427C152.155 156.076 170.59 162.093 205.333 166.607C240.076 171.12 278.718 183.657 303.889 212.24"
                      stroke="url(#paint2_linear_25:218)"></path>
                <path d="M-98.1618 65.0889C-68.1416 60.0601 4.73364 60.4882 56.0734 102.431C120.248 154.86 139.905 161.419 177.137 166.956C214.37 172.493 255.575 186.165 281.856 215.481"
                      stroke="url(#paint3_linear_25:218)"></path>
                <circle opacity="0.8" cx="214.505" cy="60.5054" r="49.7205" transform="rotate(-13.421 214.505 60.5054)"
                        stroke="url(#paint4_linear_25:218)"></circle>
                <circle cx="220" cy="63" r="43" fill="url(#paint5_radial_25:218)"></circle>
                <defs>
                    <linearGradient id="paint0_linear_25:218" x1="184.389" y1="69.2405" x2="184.389" y2="212.24"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#4A6CF7"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_25:218" x1="156.389" y1="69.2405" x2="156.389" y2="212.24"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#4A6CF7"></stop>
                    </linearGradient>
                    <linearGradient id="paint2_linear_25:218" x1="125.389" y1="69.2405" x2="125.389" y2="212.24"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#4A6CF7"></stop>
                    </linearGradient>
                    <linearGradient id="paint3_linear_25:218" x1="93.8507" y1="67.2674" x2="89.9278" y2="210.214"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#4A6CF7"></stop>
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:218" x1="214.505" y1="10.2849" x2="212.684" y2="99.5816"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                    <radialGradient id="paint5_radial_25:218" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(220 63) rotate(90) scale(43)">
                        <stop offset="0.145833" stop-color="white" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="white" stop-opacity="0.08"></stop>
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </div>
    <div class="py-20 md:py-24 bg-[#efefef] dark:bg-[#0b113a]" id="features">
        <div class="container px-4 mx-auto">
            <div class="w-full lg:w-1/2 2xl:w-1/2 mx-auto text-center">
                <h2 class="heading text-3xl lg:text-5xl !leading-normal">Main
                    Features
                </h2>
                <p class="text-gray-500 dark:text-gray-400 text-xl">There are many variations of passages of Lorem Ipsum
                    available but the majority have suffered alteration in some form.
                </p>
            </div>
            <div class="mt-10">
                <div class="flex flex-col lg:flex-row items-center justify-center flex-wrap">
                    <div class="features-box">
                        <div class="py-4 px-1">
                            <div class="icon-box mb-6">
                                <svg width="50" height="51" class="mx-auto svg-fill">
                                    <path opacity="0.5"
                                          d="M37.7778 40.2223H24C22.8954 40.2223 22 39.3268 22 38.2223V20.0001C22 18.8955 22.8954 18.0001 24 18.0001H37.7778C38.8823 18.0001 39.7778 18.8955 39.7778 20.0001V38.2223C39.7778 39.3268 38.8823 40.2223 37.7778 40.2223Z"></path>
                                    <path d="M23.2222 0C22.6699 0 22.2222 0.447715 22.2222 1V12.3333C22.2222 12.8856 22.6699 13.3333 23.2222 13.3333H39C39.5523 13.3333 40 12.8856 40 12.3333V0.999999C40 0.447714 39.5523 0 39 0H23.2222ZM0 39C0 39.5523 0.447715 40 1 40H16.7778C17.3301 40 17.7778 39.5523 17.7778 39V27.6667C17.7778 27.1144 17.3301 26.6667 16.7778 26.6667H1C0.447716 26.6667 0 27.1144 0 27.6667V39ZM0 21.2222C0 21.7745 0.447715 22.2222 1 22.2222H16.7778C17.3301 22.2222 17.7778 21.7745 17.7778 21.2222V0.999999C17.7778 0.447714 17.3301 0 16.7778 0H1C0.447716 0 0 0.447715 0 1V21.2222Z"></path>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="heading text-2xl mb-2 leading-normal">
                                    Crafted for Startups
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">Tuae nam ex similique
                                    incidunt expedita exerci tationem laudantium. Repellendus quisquam numquam
                                    perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="py-4 px-1">
                            <div class="icon-box mb-6">
                                <svg width="60" height="60" viewBox="0 0 40 40" class="mx-auto svg-fill">
                                    <path opacity="0.5"
                                          d="M20.5914 34.2584C20.2394 34.5172 19.7603 34.5175 19.408 34.2593L4.19163 23.1079C3.8395 22.8498 3.36065 22.85 3.00873 23.1084L1.09802 24.5111C0.553731 24.9107 0.553731 25.7237 1.09802 26.1233L19.4082 39.5655C19.7604 39.824 20.2396 39.824 20.5918 39.5655L38.9029 26.1226C39.4469 25.7232 39.4473 24.9107 38.9036 24.5109L36.9701 23.0889C36.6177 22.8298 36.1378 22.8297 35.7854 23.0888L20.5914 34.2584Z"></path>
                                    <path d="M19.408 28.931C19.7603 29.1896 20.2396 29.1894 20.5918 28.9306L36.3556 17.3466L38.8979 15.4883C39.4437 15.0894 39.4446 14.275 38.8996 13.8749L20.5918 0.43445C20.2396 0.175911 19.7604 0.175913 19.4082 0.434452L1.09706 13.8774C0.553051 14.2767 0.552712 15.0892 1.09638 15.4891L3.62222 17.3466L19.408 28.931Z"></path>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="heading text-2xl mb-2 leading-normal">
                                    High-quality Design
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">Tuae nam ex similique
                                    incidunt expedita exerci tationem laudantium. Repellendus quisquam numquam
                                    perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box ">
                        <div class="py-4 px-1">
                            <div class="icon-box mb-6">
                                <svg width="50" height="50" viewBox="0 0 40 40" class="mx-auto svg-fill">
                                    <path opacity="0.5"
                                          d="M20 30C22.75 30 25 32.25 25 35C25 37.75 22.75 40 20 40C17.25 40 15 37.75 15 35C15 32.25 17.25 30 20 30ZM35 30C37.75 30 40 32.25 40 35C40 37.75 37.75 40 35 40C32.25 40 30 37.75 30 35C30 32.25 32.25 30 35 30ZM35 15C37.75 15 40 17.25 40 20C40 22.75 37.75 25 35 25C32.25 25 30 22.75 30 20C30 17.25 32.25 15 35 15Z"></path>
                                    <path d="M20 15C22.75 15 25 17.25 25 20C25 22.75 22.75 25 20 25C17.25 25 15 22.75 15 20C15 17.25 17.25 15 20 15ZM20 0C22.75 0 25 2.25 25 5C25 7.75 22.75 10 20 10C17.25 10 15 7.75 15 5C15 2.25 17.25 0 20 0ZM5 30C7.75 30 10 32.25 10 35C10 37.75 7.75 40 5 40C2.25 40 0 37.75 0 35C0 32.25 2.25 30 5 30ZM5 15C7.75 15 10 17.25 10 20C10 22.75 7.75 25 5 25C2.25 25 0 22.75 0 20C0 17.25 2.25 15 5 15ZM5 0C7.75 0 10 2.25 10 5C10 7.75 7.75 10 5 10C2.25 10 0 7.75 0 5C0 2.25 2.25 0 5 0ZM35 0C37.75 0 40 2.25 40 5C40 7.75 37.75 10 35 10C32.25 10 30 7.75 30 5C30 2.25 32.25 0 35 0Z"></path>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="heading text-2xl mb-2 leading-normal">All
                                    Essential Components
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">Tuae nam ex similique
                                    incidunt expedita exerci tationem laudantium. Repellendus quisquam numquam
                                    perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box">
                        <div class="py-4 px-1">
                            <div class="icon-box mb-6">
                                <svg width="60" height="62" viewBox="0 0 40 42" class="mx-auto svg-fill">
                                    <path opacity="0.5"
                                          d="M31.8943 25.3303C34.1233 25.3303 36.1497 26.1409 37.5682 27.762L39.1464 26.1839C39.4614 25.8689 39.9999 26.092 39.9999 26.5374V32.936C39.9999 33.2121 39.7761 33.436 39.4999 33.436H33.1014C32.6559 33.436 32.4328 32.8974 32.7478 32.5825L35.5418 29.7885C34.5286 28.9779 33.3128 28.37 31.8943 28.37C29.0573 28.37 26.8282 30.599 26.8282 33.436C26.8282 36.273 29.0573 38.5021 31.8943 38.5021C33.3549 38.5021 34.6511 37.844 35.6345 36.8244C35.8406 36.6107 36.1187 36.4756 36.4155 36.4756H38.6535C39.0072 36.4756 39.2477 36.833 39.0881 37.1487C37.7427 39.8107 35.0781 41.5417 31.8943 41.5417C27.4361 41.5417 23.7886 37.8941 23.7886 33.436C23.7886 28.9779 27.4361 25.3303 31.8943 25.3303Z"></path>
                                    <path d="M18.7226 33.436C18.7226 31.3572 19.2513 29.4548 19.9799 27.7285C20.0541 27.5529 19.9264 27.3567 19.7358 27.3567C15.8856 27.3567 12.6433 24.1144 12.6433 20.2642C12.6433 16.414 15.8856 13.1717 19.7358 13.1717C23.586 13.1717 26.8283 16.414 26.8283 20.2642C26.8283 20.5105 27.3897 21.0054 27.6246 20.9313C28.9274 20.5206 30.2827 20.2642 31.8943 20.2642C32.775 20.2642 33.6557 20.4173 34.5364 20.5905C34.7422 20.6309 34.9339 20.4739 34.9339 20.2642C34.9339 19.8699 34.9339 19.3904 34.8787 18.9362C34.827 18.5117 34.9599 18.0636 35.3001 17.8045L38.9868 14.9955C39.3921 14.5902 39.3921 14.1849 39.1894 13.7797L35.1857 6.77316C35.153 6.71599 35.1272 6.65499 35.1021 6.59411C34.9143 6.13895 34.5848 6.08618 34.1135 6.08007C33.9863 6.07841 33.86 6.10354 33.7419 6.15079L29.3957 7.88927C29.0613 8.02302 28.6829 7.96367 28.3887 7.75599C27.6155 7.21023 26.7521 6.75466 25.8752 6.31262C25.5838 6.16573 25.3813 5.88702 25.3335 5.56423L24.6729 1.10574C24.6265 0.792572 24.6613 0.389935 24.3993 0.212245C24.2235 0.0930361 23.9828 0 23.7886 0H15.6829C15.3021 0 14.7424 0.35783 14.6762 0.73726C14.6678 0.785579 14.6661 0.834927 14.6589 0.883445L13.9492 5.67408C13.894 6.04692 13.6313 6.35205 13.2873 6.50604C12.4439 6.88359 11.673 7.42345 10.8193 7.89265C10.5647 8.03264 10.26 8.04143 9.99178 7.92966L5.73545 6.15619C5.61358 6.10541 5.48273 6.07832 5.35072 6.08016C4.8506 6.08715 4.49147 6.1485 4.13234 6.68719L0.0794975 13.7797C-0.123145 14.1849 0.0794976 14.5902 0.484782 14.9955L4.34631 17.9376C4.59456 18.1268 4.74261 18.4216 4.7079 18.7317C4.65068 19.243 4.53762 19.8101 4.53762 20.2642C4.53762 20.6648 4.53762 21.1534 4.59561 21.614C4.64767 22.0276 4.52563 22.4644 4.20164 22.7267L0.484782 25.7355C0.0794976 26.1408 0.0794978 26.5461 0.28214 26.9514L4.33498 34.0439C4.5154 34.4047 4.85644 34.4443 5.35811 34.4486C5.48532 34.4497 5.61152 34.4249 5.72964 34.3776L10.0758 32.6392C10.4102 32.5054 10.7887 32.5648 11.0829 32.7724C11.8561 33.3182 12.7195 33.7738 13.5964 34.2158C13.8878 34.3627 14.0903 34.6414 14.1381 34.9642L14.8616 39.8476C14.8688 39.8961 14.871 39.9453 14.8768 39.994C14.9222 40.3734 15.3145 40.7311 15.8856 40.7311H19.13C19.9191 40.7311 20.4065 39.8523 20.0627 39.1421C19.1998 37.3593 18.7226 35.4573 18.7226 33.436Z"></path>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="heading text-2xl mb-2 leading-normal">
                                    Speed Optimized
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">Tuae nam ex similique
                                    incidunt expedita exerci tationem laudantium. Repellendus quisquam numquam
                                    perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box ">
                        <div class="py-4 px-1">
                            <div class="icon-box mb-6">
                                <svg width="60" height="60" viewBox="0 0 40 40" class="mx-auto svg-fill">
                                    <path opacity="0.5"
                                          d="M39 12C39.5523 12 40 12.4477 40 13V39C40 39.5523 39.5523 40 39 40H13C12.4477 40 12 39.5523 12 39V33C12 32.4477 12.4477 32 13 32H31C31.5523 32 32 31.5523 32 31V13C32 12.4477 32.4477 12 33 12H39Z"></path>
                                    <rect width="28" height="28" rx="1"></rect>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="heading text-2xl mb-2 leading-normal">
                                    Fully Customizable
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">Tuae nam ex similique
                                    incidunt expedita exerci tationem laudantium. Repellendus quisquam numquam
                                    perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="features-box ">
                        <div class="py-4 px-1">
                            <div class="icon-box mb-6">
                                <svg width="60" height="65" viewBox="0 0 40 45" class="mx-auto svg-fill">
                                    <path opacity="0.5"
                                          d="M31.579 37.8948C28.6737 37.8948 26.3158 35.5369 26.3158 32.6317C26.3158 31.9159 26.4527 31.2306 26.7135 30.6015C26.7959 30.4027 26.7605 30.1711 26.6083 30.019L24.9997 28.4103C24.7766 28.1872 24.4043 28.2238 24.2487 28.4983C23.5588 29.7145 23.1579 31.125 23.1579 32.6317C23.1579 37.2843 26.9263 41.0527 31.579 41.0527V43.0035C31.579 43.449 32.1175 43.6721 32.4325 43.3571L35.9622 39.8273C36.1575 39.6321 36.1575 39.3155 35.9622 39.1202L32.4325 35.5905C32.1175 35.2755 31.579 35.4986 31.579 35.9441V37.8948ZM31.579 24.2106V22.2598C31.579 21.8144 31.0404 21.5913 30.7254 21.9063L27.1957 25.436C27.0004 25.6313 27.0004 25.9479 27.1957 26.1431L30.7254 29.6729C31.0404 29.9879 31.579 29.7648 31.579 29.3193V27.3685C34.4842 27.3685 36.8421 29.7264 36.8421 32.6317C36.8421 33.3474 36.7052 34.0328 36.4444 34.6618C36.362 34.8606 36.3974 35.0922 36.5496 35.2444L38.1582 36.853C38.3813 37.0762 38.7536 37.0396 38.9092 36.7651C39.5991 35.5488 40 34.1384 40 32.6317C40 27.9791 36.2316 24.2106 31.579 24.2106Z"></path>
                                    <path d="M18.9474 32.6316C18.9474 35.4705 19.8099 38.0969 21.2941 40.2796C21.7904 41.0094 21.3054 42.1053 20.4229 42.1053H4.21053C1.87368 42.1053 0 40.2316 0 37.8947V4.21053C0 1.89474 1.87368 0 4.21053 0H6.31579H16.8421H29.4737C31.7895 0 33.6842 1.87368 33.6842 4.21053V17.9544C33.6842 18.5032 33.1804 18.9474 32.6316 18.9474C25.0737 18.9474 18.9474 25.0737 18.9474 32.6316Z"></path>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="heading text-2xl mb-2 leading-normal">
                                    Regular Updates
                                </h3>
                                <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">Tuae nam ex similique
                                    incidunt expedita exerci tationem laudantium. Repellendus quisquam numquam
                                    perferendis earum sapiente non tempore? Fugit repellat ut maiores.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-20 md:py-24 bg-dark dark:bg-dark bg-[url('/img/bg-help.svg')] bg-no-repeat bg-left-bottom bg-contain lg:bg-auto 2xl:bg-cover"
         id="help">
        {{-- Countdown --}}
        {{-- <div class="container mx-auto px-4">
            <div class="lg:w-1/2 2xl:w-1/2 mx-auto text-center">
                <h2 class="heading text-white text-3xl lg:text-5xl !leading-normal">We are
                    ready to help
                </h2>
                <p class="text-gray-500 dark:text-gray-400 opacity-90 text-xl">There are many variations of passages of
                    Lorem Ipsum available but the majority have suffered alteration in some form.
                </p>
            </div> --}}

            <div class="container mx-auto px-4">
                <div class="lg:w-1/2 2xl:w-1/2 mx-auto text-center">
                    <h2 class="heading text-white text-3xl lg:text-5xl !leading-normal">COUNTDOWN
                    </h2>
            </div>

            <div class="flex items-center justify-center font-sans">
            <div class="countdown flex gap-x-20 gap-y-6 text-9xl">
                <div class="text-center">
                    <span id="days" class="block text-white font-bold"></span>
                    <span class="block text-sm text-slate-300">Hari</span>
                </div>
                <div class="text-center">
                    <span id="hours" class="block text-white font-bold"></span>
                    <span class="block text-sm text-slate-300">Jam</span>
                </div>
                <div class="text-center">
                    <span id="minutes" class="block text-white font-bold"></span>
                    <span class="block text-sm text-slate-300">Menit</span>
                </div>
                <div class="text-center">
                    <span id="seconds" class="block text-white font-bold"></span>
                    <span class="block text-sm text-slate-300">Detik</span>
                </div>
            </div>
        
            <script>
                function startCountdown(targetDate) {
                    const daysEl = document.getElementById('days');
                    const hoursEl = document.getElementById('hours');
                    const minutesEl = document.getElementById('minutes');
                    const secondsEl = document.getElementById('seconds');
        
                    function updateCountdown() {
                        const now = new Date().getTime();
                        let remainingTime = Math.floor((targetDate - now) / 1000);
        
                        if (remainingTime <= 0) {
                            clearInterval(timerInterval);
                            daysEl.textContent = 0;
                            hoursEl.textContent = 0;
                            minutesEl.textContent = 0;
                            secondsEl.textContent = 0;
                            return;
                        }
        
                        const days = Math.floor(remainingTime / (60 * 60 * 24));
                        remainingTime %= (60 * 60 * 24);
        
                        const hours = Math.floor(remainingTime / (60 * 60));
                        remainingTime %= (60 * 60);
        
                        const minutes = Math.floor(remainingTime / 60);
                        const seconds = remainingTime % 60;
        
                        daysEl.textContent = days;
                        hoursEl.textContent = hours;
                        minutesEl.textContent = minutes;
                        secondsEl.textContent = seconds;
                    }
        
                    updateCountdown();
                    const timerInterval = setInterval(updateCountdown, 1000);
                }
        
                // Set the countdown target date to your desired date
                const targetDate = new Date('February 1, 2025 00:00:00').getTime();
                startCountdown(targetDate);
            </script>
            </div>
            {{-- <div class="relative pt-16 mt-8 lg:mt-4">
                <img src="./img/home-vector-2.png" class="absolute w-32 top-0 left-4 lg:left-48" alt="Icon Image">
                <video src="./img/help-video.mp4" controls loop poster="img/help-video-bg.png" preload="metadata"
                       height="400" class="mx-auto rounded md:w-[600px] lg:w-[740px] sticky">
                </video>
            </div> --}}
        </div>
    </div>
    <div class="bg-white dark:bg-[url('/img/bg-support-dark.svg')] bg-center bg-cover bg-no-repeat dark:bg-dark pt-24 pb-10 md:py-32"
         id="support">
        <div class="container flex flex-col lg:flex-row items-center justify-around px-4 mx-auto">
            <div class="lg:w-1/2 2xl:w-1/2 mr-8 basis-1/2">
                <div class="mx-auto my-4 px-4">
                    <h2 class="heading !leading-normal text-xl">
                        Fast internet
                        support
                    </h2>
                    <p class="text-gray-500 dark:text-gray-400 opacity-90 text-base">There are many variations of
                        passages of Lorem Ipsum
                        available but the majority have suffered alteration in some form.
                    </p>
                </div>
                <div class="flex items-center justify-between mt-12">
                    <div class="mx-3">
                        <h3 class="heading leading-normal text-xl mb-2">Dynamic
                            Structure
                        </h3>
                        <p class="text-base text-gratext-gray-500 dark:text-gray-400 opacity-90">we have 120+ smart
                            unique features
                        </p>
                    </div>
                    <div class="mx-3">
                        <h3 class="heading font-black text-xl mb-2 leading-normal	">Smart
                            Features
                        </h3>
                        <p class="text-base text-gray-500 dark:text-gray-400 opacity-90">we have 120+ smart unique
                            features
                        </p>
                    </div>
                </div>
            </div>
            <div class="img mt-24 lg:mt-0 ml-8 basis-1/2">
                <div class="">
                    <img src="img/iPad-Pro-Design-Mockup.png" class="w-full" alt="Ipad">
                </div>
            </div>
        </div>
    </div>
    <div class="py-16 pt-10 md:py-20 bg-white dark:bg-dark" id="workflow">
        <div class="container flex flex-col-reverse lg:flex-row items-center justify-between gap-12 px-4 md:px-8 mx-auto ">
            <div class="relative px-4 lg:px-16 basis-1/2 ">
                <img src="./img/team-workflow.png" alt="img" style="border-radius: 50%100px" class="sticky z-10">
                <img src="./img/vector1.svg" alt=""
                     class="absolute bottom-1 right-2 md:right-7 w-40 md:w-60 -rotate-[190deg]">
            </div>
            <div class="relative mt-0 md:mt-16 lg:mt-0 basis-1/2 ">
                <div class="mx-auto my-4 pr-8">
                    <h2 class="heading !leading-normal text-3xl lg:text-4xl">
                        Fits Into Any Workflow.
                    </h2>
                    <p class="text-gray-500 dark:text-gray-400 opacity-90 text-base">our system goes with almost any
                        kind of integrations and supports almost every platform.
                    </p>
                </div>
                <div class="my-4">
                    <div class="flex items-center justify-between my-4">
                        <div class="tools-box">
                            <div class="basis-1/3">
                                <img src="./img/slack-logo.png" alt="img" class="w-2/3">
                            </div>
                            <div class="basis-2/3">
                                <h4 class="workflow-title">Slack</h4>
                                <p class="workflow-text">communication</p>
                            </div>
                        </div>
                        <div class="tools-box">
                            <div class="basis-1/3">
                                <img src="./img/dropbox-logo.png" alt="img" class="w-2/3">
                            </div>
                            <div class="basis-2/3">
                                <h4 class="workflow-title">DropBox</h4>
                                <p class="workflow-text">Productivity</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between my-4">
                        <div class="tools-box">
                            <div class="basis-1/3">
                                <img src="./img/hubstaff-logo.png" alt="img" class="w-2/3">
                            </div>
                            <div class="basis-2/3">
                                <h4 class="workflow-title">Slack</h4>
                                <p class="workflow-text">communication</p>
                            </div>
                        </div>
                        <div class="tools-box">
                            <div class="basis-1/3">
                                <img src="./img/Sketch_Logo.png" alt="img" class="w-2/3">
                            </div>
                            <div class="basis-2/3">
                                <h4 class="workflow-title">DropBox</h4>
                                <p class="workflow-text">Productivity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <a href="#" class="font-bold text-sky-400">View All Integrations -></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white dark:bg-dark py-20 md:py-24" id="pricing">
        <div class="container px-4 md:px-10 lg:px-0 mx-auto">
            <div class="lg:w-1/2 2xl:w-1/2 mb-16 text-center mx-auto">
                <h2 class="heading !leading-normal text-3xl lg:text-4xl">Simple
                    and Affordable Pricing
                </h2>
                <p class="text-gray-500 dark:text-gray-400 opacity-90 text-lg">There are many variations of passages of
                    Lorem Ipsum available but the majority have suffered alteration in some form.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 mt-8 ">
                <div class="price-table ml-0 lg:ml-8">
                    <div class="price-title">
                        <div class="flex justify-between mb-4">
                            <h3 class="text-neutral-900 dark:text-white font-bold text-3xl">$40 <span
                                    class="text-gray-500">/mo</span></h3>
                            <h4 class="text-right text-neutral-900 dark:text-white font-medium text-2xl">Lite</h4>
                        </div>
                        <p class="text-gray-400 text-opacity-90 text-base font-medium">Lorem ipsum dolor sit amet
                            adiscing elit Mauris egestas enim.
                        </p>
                        <button type="submit" class="btn price-btn bg-[#4a6cf7]">Start Free Trial</button>
                        <hr class="my-10 bg-gray-600 text-gray-600 w-full opacity-30">
                    </div>
                    <div class="price-description">
                        <ul>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                All UI Components
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                All UI Components
                                Use with Unlimited
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Commercial Use
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Email Support
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Lifetime Access
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Free Lifetime Updates
                            </li>
                        </ul>
                    </div>
                    <div class="absolute bottom-0 right-0">
                        <svg width="179" height="158" viewBox="0 0 179 158" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                  d="M75.0002 63.256C115.229 82.3657 136.011 137.496 141.374 162.673C150.063 203.47 207.217 197.755 202.419 167.738C195.393 123.781 137.273 90.3579 75.0002 63.256Z"
                                  fill="url(#paint0_linear_70:153)"></path>
                            <path opacity="0.3"
                                  d="M178.255 0.150879C129.388 56.5969 134.648 155.224 143.387 197.482C157.547 265.958 65.9705 295.709 53.1024 246.401C34.2588 174.197 100.939 83.7223 178.255 0.150879Z"
                                  fill="url(#paint1_linear_70:153)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_70:153" x1="69.6694" y1="29.9033" x2="196.108"
                                                y2="83.2919" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
                                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_70:153" x1="165.348" y1="-75.4466" x2="-3.75136"
                                                y2="103.645" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
                                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="price-table">
                    <div class="price-title">
                        <div class="flex justify-between mb-4">
                            <h3 class="text-neutral-900 dark:text-white font-bold text-3xl">$40 <span
                                    class="text-gray-500">/mo</span></h3>
                            <h4 class="text-right text-neutral-900 dark:text-white font-medium text-2xl">Lite</h4>
                        </div>
                        <p class="text-gray-400 text-opacity-90 text-base font-medium">Lorem ipsum dolor sit amet
                            adiscing elit Mauris egestas enim.
                        </p>
                        <button type="submit" class="btn price-btn bg-[#4a6cf7]">Start Free Trial</button>
                        <hr class="my-10 bg-gray-600 text-gray-600 w-full opacity-30">
                    </div>
                    <div class="price-description">
                        <ul>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                All UI Components
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                All UI Components
                                Use with Unlimited
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Commercial Use
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Email Support
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Lifetime Access
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Free Lifetime Updates
                            </li>
                        </ul>
                    </div>
                    <div class="absolute bottom-0 right-0">
                        <svg width="179" height="158" viewBox="0 0 179 158" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                  d="M75.0002 63.256C115.229 82.3657 136.011 137.496 141.374 162.673C150.063 203.47 207.217 197.755 202.419 167.738C195.393 123.781 137.273 90.3579 75.0002 63.256Z"
                                  fill="url(#paint0_linear_70:153)"></path>
                            <path opacity="0.3"
                                  d="M178.255 0.150879C129.388 56.5969 134.648 155.224 143.387 197.482C157.547 265.958 65.9705 295.709 53.1024 246.401C34.2588 174.197 100.939 83.7223 178.255 0.150879Z"
                                  fill="url(#paint1_linear_70:153)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_70:153" x1="69.6694" y1="29.9033" x2="196.108"
                                                y2="83.2919" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
                                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_70:153" x1="165.348" y1="-75.4466" x2="-3.75136"
                                                y2="103.645" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
                                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="price-table mr-0 lg:mr-8">
                    <div class="price-title">
                        <div class="flex justify-between mb-4">
                            <h3 class="text-neutral-900 dark:text-white font-bold text-3xl">$40 <span
                                    class="text-gray-500">/mo</span></h3>
                            <h4 class="text-right text-neutral-900 dark:text-white font-medium text-2xl">Lite</h4>
                        </div>
                        <p class="text-gray-400 text-opacity-90 text-base font-medium">Lorem ipsum dolor sit amet
                            adiscing elit Mauris egestas enim.
                        </p>
                        <button type="submit" class="btn price-btn bg-[#4a6cf7]">Start Free Trial</button>
                        <hr class="my-10 bg-gray-600 text-gray-600 w-full opacity-30">
                    </div>
                    <div class="price-description">
                        <ul>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                All UI Components
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                All UI Components
                                Use with Unlimited
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Commercial Use
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Email Support
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Lifetime Access
                            </li>
                            <li class="price-option">
                              <span class="price-list-style">
                                 <svg width="12" height="10" viewBox="0 0 8 6" class="fill-[#4a6cf7]">
                                    <path d="M2.90567 6.00024C2.68031 6.00024 2.48715 5.92812 2.294 5.74764L0.169254 3.43784C-0.0560926 3.18523 -0.0560926 2.78827 0.169254 2.53566C0.39461 2.28298 0.74873 2.28298 0.974086 2.53566L2.90567 4.66497L7.02642 0.189715C7.25175 -0.062913 7.60585 -0.062913 7.83118 0.189715C8.0566 0.442354 8.0566 0.839355 7.83118 1.09198L3.54957 5.78375C3.32415 5.92812 3.09882 6.00024 2.90567 6.00024Z"></path>
                                 </svg>
                              </span>
                                Free Lifetime Updates
                            </li>
                        </ul>
                    </div>
                    <div class="absolute bottom-0 right-0">
                        <svg width="179" height="158" viewBox="0 0 179 158" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                  d="M75.0002 63.256C115.229 82.3657 136.011 137.496 141.374 162.673C150.063 203.47 207.217 197.755 202.419 167.738C195.393 123.781 137.273 90.3579 75.0002 63.256Z"
                                  fill="url(#paint0_linear_70:153)"></path>
                            <path opacity="0.3"
                                  d="M178.255 0.150879C129.388 56.5969 134.648 155.224 143.387 197.482C157.547 265.958 65.9705 295.709 53.1024 246.401C34.2588 174.197 100.939 83.7223 178.255 0.150879Z"
                                  fill="url(#paint1_linear_70:153)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_70:153" x1="69.6694" y1="29.9033" x2="196.108"
                                                y2="83.2919" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
                                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_70:153" x1="165.348" y1="-75.4466" x2="-3.75136"
                                                y2="103.645" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
                                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us py-16 bg-white dark:bg-dark" id="contact-us">
        <div class="container flex flex-col lg:flex-row items-stretch justify-center gap-8 px-4 md:px-10 lg:px-0 mx-auto">
            <div class="ticket basis-2/3 ml-0 lg:ml-8 bg-gray-dark dark:bg-slate-800 rounded">
                <div class="py-16 px-6 lg:px-12">
                    <div class="form-title">
                        <h2 class="heading text-2xl lg:text-3xl font-bold !leading-normal">
                            Need Help? Open a Ticket
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400 text-opacity-90 text-base font-bold">Our support team
                            will get back to you ASAP via email.
                        </p>
                    </div>
                    <div class="form-contact mt-10">
                        <form action="#">
                            <div class="flex flex-col lg:flex-row justify-center items-center mt-2 mb-6">
                                <div class="flex flex-col basis-full w-full lg:basis-1/2 mr-0 lg:mr-3 my-3 lg:my-0">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" id="name" class="form-input" required
                                           placeholder="Enter Your Name">
                                </div>
                                <div class="flex flex-col basis-full w-full lg:basis-1/2 ml-0 lg:ml-3 my-3 lg:my-0">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" id="email" class="form-input" required
                                           placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="flex flex-col my-4">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea name="message" id="message" cols="30" rows="5"
                                          placeholder="Enter Your Message" class="resize-none form-input"
                                          required></textarea>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn bg-[#4a6cf7] opacity-90 py-3">Submit Ticket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="subscribe basis-1/3 mr-0 lg:mr-8 rounded bg-gray-dark">
                <div class="py-16 px-6 lg:px-12">
                    <div class="form-title">
                        <h2 class="heading text-2xl lg:text-3xl !leading-normal">
                            Subscribe to receive future updates
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400 text-opacity-90 text-base font-bold">Lorem ipsum
                            dolor sited Sed ullam corper consectur adipiscing Mae ornare massa quis lectus.
                        </p>
                        <hr class="w-full my-12 bg-gray-600 text-gray-600 opacity-30">
                    </div>
                    <div class="form-contact mt-10">
                        <form action="#">
                            <div class="mt-2 mb-3">
                                <input type="text" id="phone" class="block w-[100%] my-3 form-input" required
                                       placeholder="Enter Your Name">
                                <input type="email" id="address" class="block w-[100%] my-3 form-input" required
                                       placeholder="Enter Your Email">
                                <button type="submit"
                                        class="btn bg-[#4a6cf7] opacity-90 py-3 block w-full border border-transparent">
                                    Subscribe
                                </button>
                            </div>
                            <p class="text-gray-400 text-opacity-90 text-base font-bold mt-6 text-center">No spam
                                guaranteed, So please don’t send any spam mail.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" id="footer">
        <div class="top-content py-16 bg-[#4A6CF7] bg-opacity-5">
            <div class="container flex md:flex-row flex-wrap lg:flex-nowrap items-start justify-between px-4 mx-auto">
                <div class="basis-full lg:basis-1/3 mb-6 lg:mb-0">
                    <div class="footer-logo mb-7">
                        <img src="./img/logo-light.svg" alt="logo" class="hidden dark:block">
                        <img src="./img/logo.svg" alt="logo" class="block dark:hidden">
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 opacity-90 text-lg">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. A alias atque aut, consequatur
                    </p>
                    <div class="mt-8">
                        <a href="" class="social">
                            <svg width="21" height="16" viewBox="0 0 19 14">
                                <path d="M16.3024 2.26027L17.375 1.0274C17.6855 0.693493 17.7702 0.436644 17.7984 0.308219C16.9516 0.770548 16.1613 0.924658 15.6532 0.924658H15.4556L15.3427 0.821918C14.6653 0.282534 13.8185 0 12.9153 0C10.9395 0 9.3871 1.48973 9.3871 3.21062C9.3871 3.31336 9.3871 3.46747 9.41532 3.57021L9.5 4.0839L8.90726 4.05822C5.29435 3.95548 2.33065 1.13014 1.85081 0.642123C1.06048 1.92637 1.5121 3.15925 1.99194 3.92979L2.95161 5.36815L1.42742 4.5976C1.45565 5.67637 1.90726 6.52397 2.78226 7.14041L3.54435 7.65411L2.78226 7.93665C3.2621 9.24658 4.33468 9.78596 5.125 9.99144L6.16935 10.2483L5.18145 10.8647C3.60081 11.8921 1.625 11.8151 0.75 11.738C2.52823 12.8682 4.64516 13.125 6.1129 13.125C7.21371 13.125 8.03226 13.0223 8.22984 12.9452C16.1331 11.25 16.5 4.82877 16.5 3.54452V3.36473L16.6694 3.26199C17.629 2.44007 18.0242 2.00342 18.25 1.74658C18.1653 1.77226 18.0524 1.82363 17.9395 1.84932L16.3024 2.26027Z"></path>
                            </svg>
                        </a>
                        <a href="" class="social">
                            <svg width="11" height="20" viewBox="0 0 9 18">
                                <path d="M8.13643 7H6.78036H6.29605V6.43548V4.68548V4.12097H6.78036H7.79741C8.06378 4.12097 8.28172 3.89516 8.28172 3.55645V0.564516C8.28172 0.254032 8.088 0 7.79741 0H6.02968C4.11665 0 2.78479 1.58064 2.78479 3.92339V6.37903V6.94355H2.30048H0.65382C0.314802 6.94355 0 7.25403 0 7.70564V9.7379C0 10.1331 0.266371 10.5 0.65382 10.5H2.25205H2.73636V11.0645V16.7379C2.73636 17.1331 3.00273 17.5 3.39018 17.5H5.66644C5.81174 17.5 5.93281 17.4153 6.02968 17.3024C6.12654 17.1895 6.19919 16.9919 6.19919 16.8226V11.0927V10.5282H6.70771H7.79741C8.11222 10.5282 8.35437 10.3024 8.4028 9.96371V9.93548V9.90726L8.74182 7.95968C8.76604 7.7621 8.74182 7.53629 8.59653 7.31048C8.54809 7.16935 8.33016 7.02823 8.13643 7Z"></path>
                            </svg>
                        </a>
                        <a href="" class="social">
                            <svg width="20" height="16" viewBox="0 0 18 14">
                                <path d="M17.5058 2.07119C17.3068 1.2488 16.7099 0.609173 15.9423 0.395963C14.5778 7.26191e-08 9.0627 0 9.0627 0C9.0627 0 3.54766 7.26191e-08 2.18311 0.395963C1.41555 0.609173 0.818561 1.2488 0.619565 2.07119C0.25 3.56366 0.25 6.60953 0.25 6.60953C0.25 6.60953 0.25 9.68585 0.619565 11.1479C0.818561 11.9703 1.41555 12.6099 2.18311 12.8231C3.54766 13.2191 9.0627 13.2191 9.0627 13.2191C9.0627 13.2191 14.5778 13.2191 15.9423 12.8231C16.7099 12.6099 17.3068 11.9703 17.5058 11.1479C17.8754 9.68585 17.8754 6.60953 17.8754 6.60953C17.8754 6.60953 17.8754 3.56366 17.5058 2.07119ZM7.30016 9.44218V3.77687L11.8771 6.60953L7.30016 9.44218Z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social">
                            <svg width="19" height="17" viewBox="0 0 17 16">
                                <path d="M15.2196 0H1.99991C1.37516 0 0.875366 0.497491 0.875366 1.11936V14.3029C0.875366 14.8999 1.37516 15.4222 1.99991 15.4222H15.1696C15.7943 15.4222 16.2941 14.9247 16.2941 14.3029V1.09448C16.3441 0.497491 15.8443 0 15.2196 0ZM5.44852 13.1089H3.17444V5.7709H5.44852V13.1089ZM4.29899 4.75104C3.54929 4.75104 2.97452 4.15405 2.97452 3.43269C2.97452 2.71133 3.57428 2.11434 4.29899 2.11434C5.02369 2.11434 5.62345 2.71133 5.62345 3.43269C5.62345 4.15405 5.07367 4.75104 4.29899 4.75104ZM14.07 13.1089H11.796V9.55183C11.796 8.7061 11.771 7.58674 10.5964 7.58674C9.39693 7.58674 9.222 8.53198 9.222 9.47721V13.1089H6.94792V5.7709H9.17202V6.79076H9.19701C9.52188 6.19377 10.2466 5.59678 11.3711 5.59678C13.6952 5.59678 14.12 7.08925 14.12 9.12897V13.1089H14.07Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="basis-1/2 md:basis-1/3 lg:basis-[15%] my-6 lg:my-0">
                    <h4 class="heading text-xl mb-7">Useful Links</h4>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">Blog</a></p>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">Pricing</a></p>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">About</a></p>
                </div>
                <div class="basis-1/2 md:basis-1/3 lg:basis-[15%] my-6 lg:my-0">
                    <h4 class="heading text-xl mb-7">Terms</h4>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">TOS</a></p>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">Privacy Policy</a>
                    </p>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">Refund Policy</a>
                    </p>
                </div>
                <div class="basis-1/2 md:basis-1/3 lg:basis-[15%] my-6 lg:my-0">
                    <h4 class="heading text-xl mb-7">Support & Help</h4>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">Open Support
                        Ticket</a>
                    </p>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">Terms of Use</a></p>
                    <p class="my-3"><a href="" class="text-gray-500 dark:text-gray-400 font-medium">About</a></p>
                </div>
            </div>
        </div>
        <div class="copy-right bg-[#4A6CF7] bg-opacity-10 p-8">
            <div class="container mx-auto text-gray-500 dark:text-gray-400 text-center text-base font-bold">
                <p>© by Farideghbali for You! - <a href="https://farideghbali.com">Developer: Farideghbali.com</a></p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('https://cdn.tailwindcss.com') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js') }}"></script>
</body>
</html>