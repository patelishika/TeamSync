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

<?php
$menuItems = ['Products', 'Solutions', 'Resources', 'Pricing'];
?>


<?php
$features = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" lucide lucide-zap w-8 h-8 text-purple-600"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>',
        'title' => 'Power Performance',
        'description' => "Boost your team's productivity with intelligent workflows that adapt to your needs."
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-purple-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
        'title' => 'Innovative Design',
        'description' => "An intuitive interface that makes complex project management feel effortless.",
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-purple-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
        'title' => 'Robust Security',
        'description' => "Enterprise-grade security measures to keep your team's data safe and secure.",

    ],
];

?>

<?php
$starsvg =
    ' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-yellow-400 fill-yellow-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>';

?>

<?php
$testimonials = [
    [
        'name' => 'Sarah Chen',
        'role' => 'Product Manager,',
        'company' => 'TechFlow',
        'content' =>
        '"TeamSync has been a game-changer for our team. The intuitive interface and powerful features have streamlined our workflow significantly."',
        'rating' => str_repeat($starsvg, 5),
    ],
    [
        'name' => 'Mike Rodriguez',
        'role' => 'Engineering Lead,',
        'company' => 'InnovateCorp',
        'content' =>
        '"We\'ve integrated TeamSync into our daily operations and seen a 40% improvement in project delivery times. Highly recommended!"',
        'rating' => str_repeat($starsvg, 5),
    ],
    [
        'name' => 'Emily Watson',
        'role' => 'Creative Director,',
        'company' => 'DesignStudio',
        'content' =>
        '"The collaboration features in TeamSync have transformed how our creative team works together. It\'s simply outstanding."',
        'rating' => str_repeat($starsvg, 5),
    ],
];
?>


<?php
$faqs = [
    [
        'question' => 'How does the platform scale with growing teams?',
        'answer' =>
        'TeamSync is designed to grow with your team, from small startups to enterprise organizations with thousands of users.',
    ],
    [
        'question' => 'What advanced security measures do you have in place?',
        'answer' =>
        'We implement enterprise-grade security including end-to-end encryption, SSO integration, and compliance with SOC 2 and GDPR standards.',
    ],
    [
        'question' =>
        'What analytics and reporting capabilities does the platform offer?',
        'answer' =>
        'Our platform provides comprehensive analytics including project progress tracking, team performance metrics, and customizable reporting dashboards.',
    ],
    [
        'question' => 'How do integrations work with third-party service providers?',
        'answer' =>
        'TeamSync integrates seamlessly with over 100+ popular tools including Slack, GitHub, Figma, and more through our robust API.',
    ],
    [
        'question' => 'Can I customize workflows to match our unique processes?',
        'answer' =>
        "TeamSync offers flexible workflow customization to match your team's specific processes and requirements.",
    ],
];

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


                    <div class="  hover:scale-105 0.3s active:scale-95 transition-all  inline-block ">
                        <button class="flex justify-center items-center bg-[#9333EA] text-white hover:bg-primary/90 h-11 rounded-md  px-8 py-3 text-lg  hover:bg-purple-700">
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


        <!-- marquee -->
        <div class="w-full bg-white py-16 overflow-hidden animate-fadeInUp hidden-before">
            <div class="container mx-auto">
                <p class="mb-8 text-center text-gray-500">Trusted by teams at</p>

                <div class="relative w-full overflow-hidden">
                    <div class="flex w-max animate-marquee whitespace-nowrap">
                        <?php
                        $companies = ["Google", "Meta", "Netflix", "Amazon", "Microsoft", "Adobe", "Salesforce", "Spotify", "Slack", "Shopify", "Dropbox", "Zoom", "Airbnb", "Stripe", "PayPal", "Twilio"];
                        //  duplicate for seamless loop
                        $companies = array_merge($companies, $companies);
                        foreach ($companies as $company): ?>
                            <span class="mx-8 text-lg font-medium text-gray-400"><?= $company ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- feature section -->
        <div class="animate-fadeUp hidden-before px-4 py-20 sm:px-6 lg:px-8">
            <div class='container mx-auto'>
                <div class='mb-16 text-center'>
                    <h2 class='mb-4 text-3xl font-bold text-gray-900 sm:text-4xl tracking-tighter'>
                        Experience the Difference
                    </h2>
                    <p class='max-w-2xl mx-auto text-xl text-gray-600'>
                        Discover the benefits that make our platform the top choice for
                        teams striving for excellence.
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-3 ">
                    <?php foreach ($features as $key => $value): ?>
                        <div class="animate-fadeUp hidden-before  ">
                            <div class="h-full p-8 text-center transition-all duration-700 border-0 shadow-lg hover:shadow-xl rounded-lg hover:-translate-y-2 ease-in-out">
                                <div class="p-0 pt-0">
                                    <div class="flex justify-center mb-6 transform hover:rotate-[360deg] transition duration-500">
                                        <?= $value['icon'] ?>
                                    </div>
                                    <div>
                                        <h3 class="mb-4 text-xl font-semibold text-gray-900">
                                            <?= esc($value['title']) ?>
                                        </h3>
                                        <p class="text-gray-600"><?= esc($value['description']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <!-- product showcase -->
        <div class="animate-fadeUp hidden-before px-4 py-20 sm:px-6 lg:px-8 bg-gray-50">
            <div class='container mx-auto'>
                <div class='mb-16 text-center'>
                    <h2 class='mb-4 text-3xl font-bold text-gray-900 sm:text-4xl'>
                        Streamline Your Workflow
                    </h2>
                    <p class='max-w-2xl mx-auto text-xl text-gray-600'>
                        Powerful tools designed to simplify task management and boost team
                        productivity.
                    </p>
                </div>
            </div>

            <div class="flex  flex-row justify-between items-center">
                <!-- real-time collaboration -->
                <div class="flex   w-1/2 ">
                    <div class="animate-slideLeft  w-full ">
                        <div class='mb-2 text-sm font-semibold text-purple-600'>
                            WORKFLOW TOOLS
                        </div>
                        <h3 class='mb-4 text-2xl font-bold text-gray-900 sm:text-3xl'>
                            Real-Time Collaboration
                        </h3>
                        <p class='mb-6 text-gray-600 w-[95%]'>
                            Stay everyone on the same page with instant updates and sharedworkspaces. Keep everyone
                            on the same page with instat updates and shared workspaces.
                        </p>
                        <div class="hover:scale-105 active:scale-95">
                            <button class="h-10 px-4 py-2 border rounded-md border-input bg-background hover:bg-accent hover:text-accent-foreground text-purple-600 bg-transparent border-purple-600 hover:bg-purple-600 hover:text-white">
                                Learn more
                            </button>
                        </div>
                    </div>
                </div>

                <div class=" animate-slideRight w-[710px] ">
                    <div class='p-6 bg-white rounded-lg shadow-lg'>
                        <div class='flex items-center justify-between mb-4'>
                            <h4 class='font-semibold'>Project Dashboard</h4>
                            <div class='flex space-x-2'>
                                <div class='w-3 h-3 bg-red-400 rounded-full'></div>
                                <div class='w-3 h-3 bg-yellow-400 rounded-full'></div>
                                <div class='w-3 h-3 bg-green-400 rounded-full'></div>
                            </div>
                        </div>
                        <div class='space-y-3'>
                            <div class='flex items-center space-x-3'>
                                <div class='flex items-center justify-center w-8 h-8 bg-purple-100 rounded-full'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4 text-purple-600">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                </div>
                                <div class='flex-1'>
                                    <div class='h-2 bg-gray-200 rounded-full'>
                                        <div class='w-3/4 h-2 bg-purple-600 rounded-full'></div>
                                    </div>
                                </div>
                            </div>
                            <div class='flex items-center space-x-3'>
                                <div class='flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column w-4 h-4 text-blue-600">
                                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                        <path d="M18 17V9"></path>
                                        <path d="M13 17V5"></path>
                                        <path d="M8 17v-3"></path>
                                    </svg>
                                </div>
                                <div class='flex-1'>
                                    <div class='h-2 bg-gray-200 rounded-full'>
                                        <div class='w-1/2 h-2 bg-blue-600 rounded-full'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- easy task management -->
            <div class="flex  flex-row justify-between items-center mt-20">

                <div class="flex w-1/2 ">
                    <div class="animate-slideLeft">
                        <div class='mb-2 text-sm font-semibold text-purple-600'>
                            TASK ORGANIZATION
                        </div>
                        <h3 class='mb-4 text-2xl font-bold text-gray-900 sm:text-3xl'>
                            Easy Task Management
                        </h3>
                        <p class='mb-6 text-gray-600'>
                            Create, assign, and track tasks with intuitive drag-and-drop
                            functionality. Set priorities, deadlines, and dependencies to
                            keep your projects moving forward smoothly.
                        </p>
                        <div class="hover:scale-105 active:scale-95">
                            <button class="h-10 px-4 py-2 border rounded-md border-input bg-background hover:bg-accent hover:text-accent-foreground text-purple-600 bg-transparent border-purple-600 hover:bg-purple-600 hover:text-white">
                                Learn more
                            </button>
                        </div>
                    </div>
                </div>

                <div class="relative animate-slideRight w-[710px]">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-between mb-6">
                            <h4 class='font-semibold'>Task Board</h4>
                            <button class="bg-primary text-primary-foreground text-white hover:bg-primary/90 h-9 rounded-md px-3 text-xs bg-purple-600 hover:bg-purple-70">
                                + Add Task
                            </button>
                        </div>
                        <div class='flex flex-row gap-4'>
                            <div class='space-y-3 flex flex-col w-1/3'>
                                <div class='text-xs font-semibold tracking-wide text-gray-500 uppercase'>
                                    To Do
                                </div>
                                <div class='p-3 border-l-4 border-red-400 rounded-lg bg-gray-50'>
                                    <div class='mb-1 text-sm font-medium'>
                                        Design Review
                                    </div>
                                    <div class='mb-2 text-xs text-gray-500'>
                                        Due: Today
                                    </div>
                                    <div class='flex items-center space-x-1'>
                                        <div class='w-4 h-4 bg-red-400 rounded-full'></div>
                                        <span class='text-xs text-gray-600'>High</span>
                                    </div>
                                </div>
                                <div class='p-3 border-l-4 border-yellow-400 rounded-lg bg-gray-50'>
                                    <div class='mb-1 text-sm font-medium'>
                                        User Testing
                                    </div>
                                    <div class='mb-2 text-xs text-gray-500'>
                                        Due: Tomorrow
                                    </div>
                                    <div class='flex items-center space-x-1'>
                                        <div class='w-4 h-4 bg-yellow-400 rounded-full'></div>
                                        <span class='text-xs text-gray-600'>Medium</span>
                                    </div>
                                </div>
                            </div>
                            <div class='space-y-3 flex flex-col w-1/3'>
                                <div class='text-xs font-semibold tracking-wide text-gray-500 uppercase'>
                                    In Progress
                                </div>
                                <div class='p-3 border-l-4 border-blue-400 rounded-lg bg-blue-50'>
                                    <div class='mb-1 text-sm font-medium'>
                                        API Integration
                                    </div>
                                    <div class='mb-2 text-xs text-gray-500'>
                                        Due: Friday
                                    </div>
                                    <div class='flex items-center space-x-1'>
                                        <div class='w-4 h-4 bg-blue-400 rounded-full'></div>
                                        <span class='text-xs text-gray-600'>High</span>
                                    </div>
                                </div>
                            </div>
                            <div class='space-y-3 flex flex-col w-1/3'>
                                <div class='text-xs font-semibold tracking-wide text-gray-500 uppercase'>
                                    Done
                                </div>
                                <div class='p-3 border-l-4 border-green-400 rounded-lg bg-green-50'>
                                    <div class='mb-1 text-sm font-medium'>
                                        Database Setup
                                    </div>
                                    <div class='mb-2 text-xs text-gray-500'>
                                        Completed
                                    </div>
                                    <div class='flex items-center space-x-1'>
                                        <div class='w-4 h-4 bg-green-400 rounded-full'></div>
                                        <span class='text-xs text-gray-600'>Medium</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- testimonials -->
        <div class="px-4 py-20 sm:px-6 lg:px-8 animate-fadeUp hidden-before ">
            <div class="container mx-auto ">
                <div class="mb-16 text-center">
                    <h2 class='mb-4 text-3xl font-bold text-gray-900 sm:text-4xl'>
                        Trusted by Teams
                    </h2>
                    <p class='max-w-2xl mx-auto text-xl text-gray-600'>
                        See what our customers have to say about their experience with
                        TeamSync and discover what makes us special.
                    </p>
                </div>

                <div class="flex gap-8 md:flex-row ">
                    <?php foreach ($testimonials as $key => $testimonial): ?>
                        <div class="animate-fadeUp hidden-before delay-[0.2s] w-1/3  ">
                            <div class="rounded-lg bg-card text-card-foreground h-full p-6 transition-all duration-700 border-0 shadow-lg hover:shadow-xl hover:-translate-y-2 ease-in-out ">
                                <div class="flex items-start  pt-0 p-0 flex-col ">
                                    <div class="flex mb-4">
                                        <?= $testimonial['rating'] ?>

                                    </div>
                                    <p class="mb-6 text-gray-600">
                                        <?= esc($testimonial['content']) ?>
                                    </p>
                                    <div class="flex items-center">

                                    </div>
                                    <div class="font-semibold text-gray-900">
                                        <?= $testimonial['name'] ?>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        <?= $testimonial['role'] ?>
                                        <?= $testimonial['company'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <!-- FAQ section -->
        <div class="px-4 py-20 sm:px-6 lg:px-8 bg-gray-50 animate-fadeUp hidden-before">
            <div class="container max-w-3xl mx-auto">
                <div class='mb-16 text-center'>
                    <h2 class='mb-4 text-3xl font-bold text-gray-900 sm:text-4xl'>
                        Need Help?
                    </h2>
                    <p class='text-xl text-gray-600'>
                        Find answers to the most common questions to help you navigate our
                        platform.
                    </p>
                </div>

                <div class="space-y-2 ">
                    <!-- Hidden radio to allow all closed initially -->
                    <input type="radio" name="accordion" id="none" class="hidden" checked>

                    <?php foreach ($faqs as $i => $faq): ?>
                        <div class="border rounded-lg overflow-hidden bg-white">
                            <!-- Radio for this item -->
                            <input type="radio" name="accordion" id="faq<?= $i ?>" class="hidden peer">

                            <!-- Header: closed state -->
                            <label for="faq<?= $i ?>" class="flex justify-between p-4 cursor-pointer bg-gray-50 hover:bg-gray-100 peer-checked:hidden">
                                <span class="font-medium"><?= esc($faq['question']) ?></span>
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </label>

                            <!-- Header: open state -->
                            <label for="none" class="hidden peer-checked:flex justify-between p-4 cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <span class="font-medium"><?= esc($faq['question']) ?></span>
                                <svg class="w-5 h-5 text-gray-600 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </label>

                            <!-- Content -->
                            <div class=" max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-[1000px] text-gray-700">
                                <div class="px-4 pb-4">
                                    <?= nl2br(esc($faq['answer'])) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- final CTA -->
        <div class="px-4 py-20 sm:px-6 lg:px-8 animate-fadeUp hidden-before">
            <div class="container mx-auto">
                <div class="p-12 text-center text-white bg-gradient-to-r from-purple-900 to-blue-900 rounded-2xl transition-transform duration-300 hover:scale-[1.02]">
                    <h2 class='mb-4 text-3xl font-bold sm:text-4xl'>
                        Elevate Your Work Today
                    </h2>
                    <p class='max-w-2xl mx-auto mb-8 text-xl opacity-90'>
                        Join thousands of teams already using TeamSync to streamline their
                        workflow and achieve their goals faster.
                    </p>
                    <div class="hover:scale-105 active:scale-95 transition-all  inline-block">
                        <button class="flex justify-center items-center bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 py-3 text-lg text-purple-900 bg-white hover:bg-gray-100">
                            Get started
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->
        <footer class="px-4 py-12 bg-white border-t border-gray-200 sm:px-6 lg:px-8">
            <div class='container mx-auto '>
                <div class='grid gap-8 md:grid-cols-4'>
                    <div>
                        <div class="flex items-center mb-4 space-x-2">
                            <div class='flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-r from-purple-600 to-blue-600 transition-all ease-in-out'>
                                <span class='text-sm font-bold text-white'>TS</span>
                            </div>
                            <span class='text-xl font-bold text-gray-900'>TeamSync</span>
                        </div>
                        <p class='mb-4 text-gray-600'>
                            Empower your team with intuitive project management that scales
                            with your ambitions.
                        </p>
                    </div>

                    <div>
                        <h4 class='mb-4 font-semibold text-gray-900'>General</h4>
                        <ul class='space-y-2 text-gray-600'>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Careers
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Press
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    News
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class='mb-4 font-semibold text-gray-900'>Support</h4>
                        <ul class='space-y-2 text-gray-600'>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Guides
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    API Status
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class='mb-4 font-semibold text-gray-900'>Company</h4>
                        <ul class='space-y-2 text-gray-600'>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href='#' class='hover:text-purple-600'>
                                    Press
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-between pt-8 mt-12 border-t border-gray-200 sm:flex-row">
                    <p class="text-sm text-gray-600">
                        © <?= date('Y'); ?> TeamSync. All rights reserved.
                    </p>
                    <div class='flex mt-4 space-x-6 sm:mt-0'>
                        <a href='#' class='text-gray-400 hover:text-purple-600'>
                            <span class='sr-only'>Twitter</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg>
                        </a>
                        <a href='#' class='text-gray-400 hover:text-purple-600'>
                            <span class='sr-only'>LinkedIn</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href='#' class='text-gray-400 hover:text-purple-600'>
                            <span class='sr-only'>GitHub</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-5 h-5">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </footer>
    </div>
</body>

</html>