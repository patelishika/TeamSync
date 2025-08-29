<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <script src="https://unpkg.com/lucide@latest"></script>
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

<body>
    <div class="min-h-screen bg-gradient-to-br from-purple-50 via-white to-blue-50">
        <!-- Header -->
        <header class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white/80 backdrop-blur-md opacity-0 -translate-y-24 animate-slideDown">
            <div class="container px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center space-x-2 hover:scale-105">
                        <!-- Logo -->
                        <div class='flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-r from-purple-600 to-blue-600'>
                            <span class='text-sm font-bold text-white'>TS</span>
                        </div>
                        <!-- Title -->
                        <span class='text-xl font-bold text-gray-900'>TeamSync</span>
                    </div>

                    <!-- desktop navigtaion-->
                    <nav class="items-center hidden space-x-8 md:flex">
                        <?php
                        $menuItems = ['Products', 'Solutions', 'Resources', 'Pricing'];
                        ?>

                        <?php foreach ($menuItems as $item): ?>
                            <a
                                href="#"
                                class="font-medium text-gray-600 transition-colors hover:text-purple-600 transform hover:-translate-y-0.5">
                                <?= $item ?>
                            </a>
                        <?php endforeach; ?>

                    </nav>

                    <!-- BUTTONS -->
                    <div class="flex flex-row justify-center items-center gap-4">


                        <div class="items-center hidden space-x-4 md:flex">
                            <button class="font-medium text-gray-600 hover:text-purple-600 hover:scale-105 <a href='<?= base_url('Sign-in') ?>'></a>">Log in</button>
                        </div>
                        <div class="scale-on-hover">
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
                        <i data-lucide="Zap" class="w-4 h-4 mr-2"></i>
                        Streamline your workflow with ease
                    </div>
                </div>

            </div>

        </section>

    </div>
    <script>
        lucide.createIcons(); // render icons
    </script>

</body>

</html>