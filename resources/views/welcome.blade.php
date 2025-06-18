<x-layouts.app>

    <div class="min-h-[80vh] relative flex items-center justify-center pt-20 lg:pt-32 pb-16 bg-white dark:bg-stone-900">

        <div class="digi-container grid grid-cols-1 lg:grid-cols-2 gap-20 relative">
            <div class="relative z-10 flex flex-col text-center lg:text-left items-center lg:items-start justify-center">
                <div class="flex items-center bg-green-100 dark:bg-green-800 rounded-full border border-green-300 dark:border-green-600 px-4 py-2 space-x-2 mb-4 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span class="bg-green-500 dark:bg-green-400 rounded-full h-2 w-2 animate-pulse"></span>
                    <span class="text-sm font-medium text-stone-900 dark:text-white">Best Digital Marketing Agency in
                        Nepal</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-bold text-stone-900 dark:text-white mb-2 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <span>Lead the Market</span>
                    <br>
                    <span class="text-green-500 dark:text-green-400">
                        With Digipal Solutions
                    </span>
                </h1>

                <p class="text-md text-stone-600 dark:text-stone-400 max-w-2xl aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="600">
                    <span class="font-medium">Digipal Solutions</span> is a leading digital marketing agency in Nepal.
                    We
                    are
                    dedicated to helping businesses grow their online presence and achieve their digital marketing
                    goals.
                </p>

                <div class="flex items-center space-x-4 mt-8 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="800">
                    <a href="{{ route('proposal') }}" class="relative primary-button">
                        Request a proposal
                    </a>

                    <a href="#" class="relative secondary-button">
                        Our services
                    </a>
                </div>
            </div>

            <style>
                .orbit-container {
                    animation: orbit 20s linear infinite;
                    transform-origin: center;
                }

                @keyframes orbit {
                    0% {
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }

                .icon {
                    position: absolute;
                    transform: translate(-50%, -50%);
                    background-image: linear-gradient(to bottom, rgb(34, 197, 94), rgb(22, 163, 74));
                    color: #fff;
                    padding: 5px;
                    border-radius: 10px;
                    animation: counter-orbit 20s linear infinite;
                    transform-origin: center;
                }

                @keyframes counter-orbit {
                    0% {
                        transform: translate(-50%, -50%) rotate(0deg);
                    }

                    100% {
                        transform: translate(-50%, -50%) rotate(-360deg);
                    }
                }
            </style>

            <div class="relative z-10 flex items-center justify-center">
                <div class="w-[300px] h-[300px] relative rounded-full border border-stone-200 dark:border-stone-700">
                    <!-- Orbiting Icons Container -->
                    <div class="absolute orbit-container w-full h-full">
                        <div class="icon" style="top: 0%; left: 50%;">
                            <flux:icon.code class="w-8 h-8" />
                        </div>
                        <div class="icon" style="top: 25%; left: 93%;">
                            <flux:icon.rocket class="w-8 h-8" />
                        </div>
                        <div class="icon" style="top: 75%; left: 93%;">
                            <flux:icon.search class="w-8 h-8" />
                        </div>
                        <div class="icon" style="top: 100%; left: 50%;">
                            <flux:icon.megaphone class="w-8 h-8" />
                        </div>
                        <div class="icon" style="top: 75%; left: 7%;">
                            <flux:icon.at-sign class="w-8 h-8" />
                        </div>
                        <div class="icon" style="top: 25%; left: 7%;">
                            <flux:icon.globe-alt class="w-8 h-8" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
        <h2 class="text-lg font-medium text-stone-600 dark:text-stone-300 text-center">
            Trusted by leading brands
        </h2>

        <style>
            .scroll-wrapper {
                position: relative;
                overflow: hidden;
                width: 100%;
                mask-image: linear-gradient(to right, transparent, black 20%, black 80%, transparent);
                -webkit-mask-image: linear-gradient(to right, transparent, black 20%, black 80%, transparent);
            }

            .scroll-track {
                display: flex;
                gap: 3rem;
                /* equal to Tailwind's gap-12 */
                animation: scroll-left 30s linear infinite;
            }

            .scroll-wrapper:hover .scroll-track {
                animation-play-state: paused;
            }

            @keyframes scroll-left {
                0% {
                    transform: translateX(0%);
                }

                100% {
                    transform: translateX(-50%);
                }
            }
        </style>

        <div class="scroll-wrapper mt-10">
            <div class="scroll-track">
                <!-- Repeat the same logos twice for seamless loop -->
                @for ($i = 0; $i < 2; $i++)
                    <img src="{{ asset('assets/images/mv-dugar.png') }}" alt="MV Dugar"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('assets/images/westminster-college.png') }}" alt="The Westminster College"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('assets/images/new-okhati-.png') }}" alt="Okhati"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('assets/images/gwm-nepal.png') }}" alt="GWM Nepal"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('assets/images/aakarshan.png') }}" alt="Aakarshan Clinic"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('assets/images/cg-consultants.png') }}" alt="Career Guidance Consultants"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('assets/images/naesthetic.png') }}" alt="Naestetic Skin Care"
                        class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                @endfor
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-stone-900">
        <div class="digi-container py-10 sm:py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-4xl font-bold text-stone-800 dark:text-stone-200" data-aos="fade-up">
                    Services We Offer
                </h2>
                <p class="text-stone-500 dark:text-stone-400 dark mt-4" data-aos="fade-up">
                    We help businesses grow online by telling their unique story and sharing their message. From SEO to
                    social media, we offer a range of services to help you succeed.
                </p>
                <div class="mt-8">
                    <a href="#" data-aos="fade-up" class="relative primary-button">
                        All Services
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-12">
                <div class="primary-card" data-aos="fade-left" data-aos-duration="600">
                    <div class="primary-gradient rounded-lg p-3 w-max mb-4">
                        <flux:icon.globe-alt class="h-8 w-8 text-white" />
                    </div>
                    <flux:heading size="lg">360 Digital Marketing</flux:heading>
                    <flux:text>Boosting your online presence to reach a wider audience.</flux:text>
                    <a href="{{ route('services.marketing') }}"
                        class="inline-flex items-center space-x-2 mt-6 text-green-600 dark:text-green-300 hover:text-green-700 dark:hover:text-green-400 transition duration-300 group">
                        Learn More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
                <div class="primary-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="primary-gradient rounded-lg p-3 w-max mb-4">
                        <flux:icon.video-camera class="h-8 w-8 text-white" />
                    </div>
                    <flux:heading size="lg">Video Production</flux:heading>
                    <flux:text>Crafting visually appealing designs that tell your story.</flux:text>
                    <a href="{{ route('services.video-prod') }}"
                        class="inline-flex items-center space-x-2 mt-6 text-green-600 dark:text-green-300 hover:text-green-700 dark:hover:text-green-400 transition duration-300 group">
                        Learn More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
                <div class="primary-card" data-aos="fade-right" data-aos-duration="1000">
                    <div class="primary-gradient rounded-lg p-3 w-max mb-4">
                        <flux:icon.at-sign class="h-8 w-8 text-white" />
                    </div>
                    <flux:heading size="lg">Social Media Marketing</flux:heading>
                    <flux:text>Engaging your audience through powerful social media strategies.</flux:text>
                    <a href="{{ route('services.smm') }}"
                        class="inline-flex items-center space-x-2 mt-6 text-green-600 dark:text-green-300 hover:text-green-700 dark:hover:text-green-400 transition duration-300 group">
                        Learn More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
                <div class="primary-card" data-aos="fade-left" data-aos-duration="1200">
                    <div class="primary-gradient rounded-lg p-3 w-max mb-4">
                        <flux:icon.microphone class="h-8 w-8 text-white" />
                    </div>
                    <flux:heading size="lg"> Podcast Creation </flux:heading>
                    <flux:text>Producing engaging content that resonates with your audience.</flux:text>
                    <a href="{{ route('services.podcast') }}"
                        class="inline-flex items-center space-x-2 mt-6 text-green-600 dark:text-green-300 hover:text-green-700 dark:hover:text-green-400 transition duration-300 group">
                        Learn More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
                <div class="primary-card" data-aos="fade-up" data-aos-duration="1400">
                    <div class="primary-gradient rounded-lg p-3 w-max mb-4">
                        <flux:icon.code class="h-8 w-8 text-white" />
                    </div>
                    <flux:heading size="lg">Web Development</flux:heading>
                    <flux:text>Creating stunning websites that captivate and convert.</flux:text>
                    <a href="{{ route('services.web-dev') }}"
                        class="inline-flex items-center space-x-2 mt-6 text-green-600 dark:text-green-300 hover:text-green-700 dark:hover:text-green-400 transition duration-300 group">
                        Learn More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
                <div class="primary-card" data-aos="fade-right" data-aos-duration="1600">
                    <div class="primary-gradient rounded-lg p-3 w-max mb-4">
                        <flux:icon.search class="h-8 w-8 text-white" />
                    </div>
                    <flux:heading size="lg">SEO Optimization</flux:heading>
                    <flux:text>Boosting your online presence to reach a wider audience.</flux:text>
                    <a href="{{ route('services.seo') }}"
                        class="inline-flex items-center space-x-2 mt-6 text-green-600 dark:text-green-300 hover:text-green-700 dark:hover:text-green-400 transition duration-300 group">
                        Learn More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div class="digi-container py-10 sm:py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-4xl font-bold text-stone-800 dark:text-stone-200" data-aos="fade-up">
                    Our Work, Your Success
                </h2>
                <p class="text-stone-500 mt-4" data-aos="fade-up">
                    We're proud of the work we do and the impact it has on our clients. Browse through some of our most
                    recent projects to see how we can help you achieve your goals.
                </p>
                <div class="mt-8">
                    <a href="#" data-aos="fade-up" class="relative primary-button">
                        All Works
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-12">
                <div class="primary-card" data-aos="fade-left" data-aos-duration="600">
                    <div class="flex items-start justify-between gap-3 mb-6">
                        <div>
                            <flux:heading size="lg">Etsy Alternative</flux:heading>
                            <flux:text>Website for a small business owner selling handmade crafts online. Built with
                                Laravel and Tailwind CSS.</flux:text>
                        </div>
                        <div class="primary-gradient rounded-full p-2 w-max mb-4 hover:scale-103">
                            <flux:icon.arrow-up-right class="h-6 w-6 text-white" />
                        </div>
                    </div>

                    <img src="https://placehold.co/600x400/22c55e/ffffff?text=Etsy+Alternative"
                        alt="Placeholder Image" class="aspect-video w-full mt-4 rounded-2xl object-cover"
                        data-aos="fade-left">
                </div>
                <div class="primary-card" data-aos="fade-up" data-aos-duration="600">
                    <div class="flex items-start justify-between gap-3 mb-6">
                        <div>
                            <flux:heading size="lg">Portfolio</flux:heading>
                            <flux:text>A showcase of the websites and applications I've built. Includes e-commerce
                                sites, blogs, landing pages, and more.</flux:text>
                        </div>
                        <div class="primary-gradient rounded-full p-2 w-max mb-4 hover:scale-103">
                            <flux:icon.arrow-up-right class="h-6 w-6 text-white" />
                        </div>
                    </div>

                    <img src="https://placehold.co/600x400/22c55e/ffffff?text=Portfolio" alt="Placeholder Image"
                        class="aspect-video w-full mt-4 rounded-2xl object-cover" data-aos="fade-up">
                </div>
                <div class="primary-card" data-aos="fade-right" data-aos-duration="600">
                    <div class="flex items-start justify-between gap-3 mb-6">
                        <div>
                            <flux:heading size="lg">Mobile App Development</flux:heading>
                            <flux:text>Creating a mobile application to enhance customer engagement and streamline
                                services for a local business.</flux:text>
                        </div>
                        <div class="primary-gradient rounded-full p-2 w-max mb-4 hover:scale-103">
                            <flux:icon.arrow-up-right class="h-6 w-6 text-white" />
                        </div>
                    </div>

                    <img src="https://placehold.co/600x400/22c55e/ffffff?text=Mobile+App+Development"
                        alt="Placeholder Image" class="aspect-video w-full mt-4 rounded-2xl object-cover"
                        data-aos="fade-right">
                </div>
            </div>

        </div>
    </div>

    <!-- About Us Section -->
    <div class="bg-white dark:bg-stone-900">
        <div class="digi-container py-10 sm:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left Column: About Us Content -->
                <div class="max-w-3xl mx-auto md:mx-0 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-stone-800 dark:text-stone-200" data-aos="fade-up">
                        Discover Our Story
                    </h2>
                    <p class="text-stone-500 dark:text-stone-400 mt-4" data-aos="fade-up">
                        We are a team of passionate digital marketers with
                        years of experience in creating successful marketing campaigns for businesses of all sizes.
                        Our team is dedicated to helping you reach your target audience and grow your business through
                        digital marketing.
                    </p>
                    <div class="mt-8 space-x-4">
                        <a href="{{ route('about') }}" data-aos="fade-up" class="relative primary-button">
                            Know More
                        </a>

                        <a href="#" data-aos="fade-up" class="relative secondary-button">
                            Our Team
                        </a>
                    </div>
                </div>

                <!-- Right Column: Masonry Image Grid -->
                <div class="grid grid-cols-2 gap-4 w-full">
                    <!-- Image 1 -->
                    <img src="https://placehold.co/400x300/22c55e/ffffff?text=Team+1" alt="Team Image 1"
                        class="h-[150px] object-cover w-full rounded-2xl shadow-lg" data-aos="fade-right"
                        data-aos-delay="200">
                    <!-- Image 2 -->
                    <img src="https://placehold.co/400x300/22c55e/ffffff?text=Team+2" alt="Team Image 2"
                        class="h-[150px] object-cover w-full rounded-2xl shadow-lg" data-aos="fade-left"
                        data-aos-delay="200">
                    <!-- Image 3 (Spanning two columns) -->
                    <img src="https://placehold.co/800x600/22c55e/ffffff?text=Team+3" alt="Team Image 3"
                        class="h-[200px] object-cover col-span-2 w-full rounded-2xl shadow-lg" data-aos="fade-up"
                        data-aos-delay="200">
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="digi-container py-10 sm:py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-4xl font-bold text-stone-800 dark:text-stone-200" data-aos="fade-up">
                    Latest Blog Posts
                </h2>
                <p class="text-stone-500 dark:text-stone-400 mt-4" data-aos="fade-up">
                    Dive into our recent blog articles for a deeper understanding of our offerings and expert industry
                    analysis.
                </p>
                <div class="mt-8">
                    <a href="{{ route('blogs') }}" data-aos="fade-up" class="relative primary-button">
                        All Blogs
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-12">
                <div class="primary-card" data-aos="fade-left" data-aos-duration="1200">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/600x400/22c55e/ffffff?text=Video+Marketing"
                            alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>

                    <flux:heading size="lg" class="text-stone-800 dark:text-stone-200 mb-2 line-clamp-2">
                        Crafting Engaging Video Content for Your Brand
                    </flux:heading>
                    <flux:text class="text-stone-500 dark:text-stone-400 flex-grow line-clamp-3">
                        Video marketing is essential for modern businesses. Dive into our tips for creating compelling
                        video
                        content that resonates with your audience, from scriptwriting to post-production and
                        distribution
                        strategies that boost engagement and brand recall.
                    </flux:text>
                    <a href="#"
                        class="inline-flex items-center space-x-2 mt-4 text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-500 transition duration-300 group">
                        Read More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>

                <!-- Blog Post Card 5: Latest News -->
                <div class="primary-card" data-aos="fade-up" data-aos-duration="1400">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/600x400/22c55e/ffffff?text=AI+and+Marketing"
                            alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>

                    <flux:heading size="lg" class="text-stone-800 dark:text-stone-200 mb-2 line-clamp-2">
                        The Rise of AI in Digital Marketing
                    </flux:heading>
                    <flux:text class="text-stone-500 dark:text-stone-400 flex-grow line-clamp-3">
                        Artificial intelligence is transforming how businesses connect with customers. Explore the
                        benefits
                        and applications of AI in your marketing strategy.
                    </flux:text>
                    <a href="#"
                        class="inline-flex items-center space-x-2 mt-4 text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-500 transition duration-300 group">
                        Read More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>

                <!-- Blog Post Card 6: Latest News -->
                <div class="primary-card" data-aos="fade-right" data-aos-duration="1600">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/600x400/22c55e/ffffff?text=Social+Media+Marketing"
                            alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>

                    <flux:heading size="lg" class="text-stone-800 dark:text-stone-200 mb-2 line-clamp-2">
                        The Power of Social Media Marketing
                    </flux:heading>
                    <flux:text class="text-stone-500 dark:text-stone-400 flex-grow line-clamp-3">
                        Social media marketing is a powerful tool for business growth. Learn how to leverage social
                        media
                        platforms to connect with your audience and drive engagement.
                    </flux:text>
                    <a href="#"
                        class="inline-flex items-center space-x-2 mt-4 text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-500 transition duration-300 group">
                        Read More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class="bg-white dark:bg-stone-900">
        <div class="digi-container py-10 sm:py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-4xl font-bold text-stone-800 dark:text-stone-200" data-aos="fade-up">
                    Voices of Satisfaction
                </h2>
                <p class="text-stone-500 dark:text-stone-400 mt-4" data-aos="fade-up">
                    Don't just take our word for it - hear from our delighted clients who've
                    experienced the difference for themselves.
                </p>
                <div class="mt-8">
                    <a href="#" data-aos="fade-up" class="relative primary-button">
                        All Testimonials
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 items-stretch justify-center gap-5 mt-12">
                <div class="primary-card flex flex-col gap-4 items-start relative" data-aos="fade-left"
                    data-aos-duration="1200">
                    <div class="absolute -top-5 -left-4 hidden lg:block">
                        <img src="{{ asset('assets/icons/quote-left.png') }}" alt="Quote Left" class="w-8">
                    </div>
                    <div class="flex items-center gap-2">
                        <flux:avatar circle src="https://unavatar.io/x/calebporzio" />
                        <div>
                            <flux:heading size="lg">Caleb Porzio</flux:heading>
                            <flux:text>CEO, Digipal</flux:text>
                        </div>
                    </div>
                    <div>
                        <p class="text-stone-500 dark:text-stone-400 text-lg">
                            "I was skeptical about hiring a web developer, but the team at Digipal Solutions
                            exceeded my
                            expectations. They delivered a stunning website that perfectly captured my vision. Their
                            attention to detail and creativity were impressive."
                        </p>
                    </div>
                </div>

                <div class="primary-card flex flex-col gap-4 items-start relative" data-aos="fade-up"
                    data-aos-duration="1200">
                    <div class="absolute -top-5 -left-4 hidden lg:block">
                        <img src="{{ asset('assets/icons/quote-left.png') }}" alt="Quote Left" class="w-8">
                    </div>
                    <div class="flex items-center gap-2">
                        <flux:avatar circle src="https://unavatar.io/x/taylorotwell" />
                        <div>
                            <flux:heading size="lg">Taylor Otwell</flux:heading>
                            <flux:text>Creator, Laravel</flux:text>
                        </div>
                    </div>
                    <div>
                        <p class="text-stone-500 dark:text-stone-400 text-lg">
                            "The developers at Digipal Solutions are top-notch. They took the time to understand my
                            needs
                            and built a custom solution that helped me grow my business. Their communication and
                            professionalism were exceptional."
                        </p>
                    </div>
                </div>

                <div class="primary-card flex flex-col gap-4 items-start relative" data-aos="fade-right"
                    data-aos-duration="1200">
                    <div class="absolute -top-5 -left-4 hidden lg:block">
                        <img src="{{ asset('assets/icons/quote-left.png') }}" alt="Quote Left" class="w-8">
                    </div>
                    <div class="flex items-center gap-2">
                        <flux:avatar circle src="https://unavatar.io/x/jeffrey_way" />
                        <div>
                            <flux:heading size="lg">Jeffrey Way</flux:heading>
                            <flux:text>Creator, Laracasts</flux:text>
                        </div>
                    </div>
                    <div>
                        <p class="text-stone-500 dark:text-stone-400 text-lg">
                            "I was thoroughly impressed with the quality of work and the attention to detail
                            provided by
                            Digipal Solutions. Their developers were knowledgeable, friendly, and always willing to
                            help."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials.cta')

</x-layouts.app>
