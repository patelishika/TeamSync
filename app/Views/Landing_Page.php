<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">

    <link
        href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }
    </style>
    <title>Document</title>
</head>

<?php
$menuItems = ['Products', 'Solutions', 'Resources', 'Pricing'];
?>

<body>
    <div class="min-h-screen bg-gradient-to-br from-purple-50 via-white to-blue-50">
        <!-- Header -->
        <header class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white/80 backdrop-blur-md opacity-0 -translate-y-24 animate-slideDown">
            <div class="container px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center space-x-2 hover:scale-105">
                        <!-- Logo -->
                        <div class='flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-r from-purple-600 to-blue-600 transition-all ease-in-out'>
                            <span class='text-sm font-bold text-white'>TS</span>
                        </div>
                        <!-- Title -->
                        <span class='text-xl font-bold text-gray-900'>TeamSync</span>
                    </div>

                    <!-- desktop navigtaion-->
                    <nav class="items-center hidden space-x-8 md:flex">
                        <?php foreach ($menuItems as $item): ?>
                            <a
                                href="#"
                                class="font-medium text-gray-600 transition-all ease-in-out hover:text-purple-600 transform hover:-translate-y-0.5">
                                <?= $item ?>
                            </a>
                        <?php endforeach; ?>

                    </nav>

                    <!-- BUTTONS -->
                    <div class="flex flex-row justify-center items-center gap-4">


                        <div class="items-center hidden space-x-4 md:flex">
                            <button class="font-medium text-gray-600 hover:text-purple-600 hover:scale-105 <a href='<?= base_url('Sign-in') ?>'></a>">Log in</button>
                        </div>
                        <div class="hover:scale-105 active:scale-95 transition-all ease-in-out">
                            <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-md text-white  <a href='<?= base_url('Sign-up') ?>'>">Sign up</button>
                        </div>
                    </div>
                    <!--mobile menu button-->


                </div>
            </div>
        </header>

        <!-- hero section -->
        <section class="px-4 pt-24 pb-16 sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="mb-16 text-center">
                    <div class="inline-flex items-center px-4 py-2 mb-8 text-sm font-medium text-purple-700 bg-purple-100 rounded-full animate-fadeInUp hidden-before">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 mr-2">
                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                        </svg>
                        Streamline your workflow with ease
                    </div>


                    <h1 class="mb-6 text-4xl font-bold leading-tight text-gray-900 sm:text-5xl lg:text-6xl animate-fadeInUp hidden-before tracking-tighter">
                        All you need for seamless
                        <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 animate-fadeInUp hidden-before">
                            project management
                        </span>
                    </h1>


                    <p class="max-w-2xl mx-auto mb-8 text-xl text-gray-600 animate-fadeInUp hidden-before">
                        Empower your team with an intuitive project management tool that
                        keeps your work organized and your goals in sight.
                    </p>


                    <div class="  hover:scale-105 active:scale-95 inline-block ">
                        <button class="hover:scale-105  transition-all ease-in-out inline-flex justify-center items-center h-11 rounded-md px-8 text-white py-3 text-lg bg-purple-600 hover:bg-purple-700 animate-fadeInUp hidden-before">
                            Get started
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- dashboard mockup -->
                <div class="relative max-w-4xl mx-auto animate-fadeUpScale  hidden-before ">
                    <div class="relative overflow-hidden transition-transform duration-700 shadow-2xl rounded-2xl hover:scale-105">
                        <div class="w-[800px] h-[600px] bg-[url('dashboard.png')] "></div>
                        <div class='absolute inset-0 bg-gradient-to-t from-purple-900/10 to-transparent'></div>
                    </div>
                </div>
            </div>
        </section>

    </div>


</body>

</html>