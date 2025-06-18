<x-layouts.app>

    <div class="min-h-[80vh] relative flex items-center justify-center pt-20 lg:pt-32 pb-16 bg-white dark:bg-stone-900">

        <div class="digi-container grid grid-cols-1 lg:grid-cols-2 gap-20 relative">
            <div class="relative z-10 flex flex-col text-center lg:text-left items-center lg:items-start justify-center">
                <div class="flex items-center bg-green-100 dark:bg-green-800 rounded-full border border-green-300 dark:border-green-600 px-4 py-2 space-x-2 mb-4 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span class="bg-green-500 dark:bg-green-400 rounded-full h-2 w-2 animate-pulse"></span>
                    <span class="text-sm font-medium text-stone-900 dark:text-white">About Digipal Solutions</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-bold text-stone-900 dark:text-white mb-2 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <span>Making a Difference</span>
                    <br>
                    <span class="text-green-500 dark:text-green-400">
                        For Digital Future
                    </span>
                </h1>

                <p class="text-md text-stone-600 dark:text-stone-400 max-w-2xl aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="600">
                    At <span class="font-medium">Digipal Solutions</span>, we're more than just a
                    digital agency; we're your partners in transforming
                    ideas into powerful online realities.
                </p>

                <div class="flex items-center space-x-4 mt-8 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="800">
                    <a href="{{ route('proposal') }}" class="relative primary-button">
                        Request a proposal
                    </a>

                    <a href="#" class="relative secondary-button">
                        View Portfolio
                    </a>
                </div>
            </div>

            <div class="relative z-10 flex items-center justify-center">
                <img src="https://placehold.co/500x500/22c55e/ffffff?text=About+Digipal+Solutions"
                    alt="360 Digital Marketing Illustration" class="rounded-lg shadow-lg" data-aos="zoom-in"
                    data-aos-duration="1000">
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
                        Who We Are
                    </h2>
                    <p class="mt-4 text-stone-600 dark:text-stone-400">
                        Digipal Solutions is a leading digital agency dedicated to empowering businesses with
                        cutting-edge web development, impactful digital marketing, and innovative branding solutions.
                        Founded in 2020 in Kathmandu, Nepal, our journey began with a simple yet profound vision: to
                        bridge the gap between business aspirations and digital capabilities.
                    </p>
                    <p class="mt-4 text-stone-600 dark:text-stone-400">
                        We pride ourselves on a client-centric approach, understanding that every business has unique
                        challenges and opportunities. Our team of passionate experts leverages the latest technologies
                        and market insights to craft bespoke strategies that drive measurable growth, enhance online
                        visibility, and forge lasting connections with target audiences. From startups to established
                        enterprises, we are committed to delivering excellence and pushing the boundaries of what's
                        possible in the digital realm.
                    </p>
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

    <div class="bg-stone-50 dark:bg-stone-950">
        <div class="digi-container py-10 sm:py-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-stone-900 dark:text-white mb-4" data-aos="fade-up"
                    data-aos-duration="1000">
                    Why Choose Digipal Solutions?
                </h2>
                <p class="text-lg text-stone-600 dark:text-stone-400 max-w-2xl mx-auto" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="200">
                    We combine expertise, innovation, and dedication to deliver unparalleled results for your
                    business.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="primary-card text-center" data-aos="fade-left" data-aos-delay="500">
                    <div class="primary-gradient p-4 rounded-full inline-flex items-center justify-center mb-6">
                        <flux:icon.academic-cap class="h-8 w-8 text-white" />
                    </div>
                    <h3 class="text-xl font-semibold text-stone-900 dark:text-white mb-3">Expert Team</h3>
                    <p class="text-stone-700 dark:text-stone-300">
                        Our professionals bring years of experience and deep industry knowledge to every project.
                    </p>
                </div>

                <div class="primary-card text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="primary-gradient p-4 rounded-full inline-flex items-center justify-center mb-6">
                        <flux:icon.sparkles class="h-8 w-8 text-white" />
                    </div>
                    <h3 class="text-xl font-semibold text-stone-900 dark:text-white mb-3">Innovation Driven</h3>
                    <p class="text-stone-700 dark:text-stone-300">
                        We stay ahead of trends, incorporating the latest technologies and strategies for optimal
                        results.
                    </p>
                </div>

                <div class="primary-card text-center" data-aos="fade-right" data-aos-delay="500">
                    <div class="primary-gradient p-4 rounded-full inline-flex items-center justify-center mb-6">
                        <flux:icon.user-circle class="h-8 w-8 text-white" />
                    </div>
                    <h3 class="text-xl font-semibold text-stone-900 dark:text-white mb-3">Client-Centric</h3>
                    <p class="text-stone-700 dark:text-stone-300">
                        Your success is our priority. We work closely with you to achieve your business goals.
                    </p>
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
