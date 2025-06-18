<x-layouts.app>
    <div class="min-h-[80vh] relative flex items-center justify-center pt-20 lg:pt-32 pb-16 bg-white dark:bg-stone-900">

        <div class="digi-container flex flex-col items-center justify-center gap-10 relative w-full">
            <div class="relative z-10 flex flex-col text-center items-center justify-center">
                <h1 class="text-3xl md:text-5xl font-bold text-stone-900 dark:text-white mb-2 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <span>Get in Touch</span>
                    {{-- <br>
                    <span class="text-green-500 dark:text-green-400">
                        With Digipal Solutions
                    </span> --}}
                </h1>

                <p class="text-md text-stone-600 dark:text-stone-400 max-w-2xl aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="600">
                    Have questions or ready to start a project? We'd love to hear from you. Fill out the form below or
                    reach out directly.
                </p>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-white dark:bg-stone-950 border border-stone-200 dark:border-stone-800 rounded-xl w-full overflow-hidden">
                <!-- Contact Info -->
                <div class="p-4 sm:p-8 space-y-8">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="primary-gradient text-white p-3 rounded-lg dark:bg-stone-700">
                                    <flux:icon.map-pin class="w-6 h-6" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-stone-300">Our Office</h3>
                                <p class="text-gray-600 mt-1 dark:text-stone-400">
                                    Kalika Marg 4-32,<br>
                                    Kathmandu 44600
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="primary-gradient text-white p-3 rounded-lg dark:bg-stone-700">
                                    <flux:icon.phone class="w-6 h-6" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-stone-300">Call Us</h3>
                                <p class="text-gray-600 mt-1 dark:text-stone-400">
                                    {{-- +977 9841 234567<br> --}}
                                    +977 01-5912819
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="primary-gradient text-white p-3 rounded-lg dark:bg-stone-700">
                                    <flux:icon.envelope class="w-6 h-6" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-stone-300">Email Us</h3>
                                <p class="text-gray-600 mt-1 dark:text-stone-400">
                                    hello@digipalsolutions.com.np
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="rounded-lg overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.393321818564!2d85.3274953!3d27.705139799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ee9a63911f%3A0xdf64d2a0058c159b!2sDigipal%20Solutions%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1747280991135!5m2!1sen!2snp"
                            class="w-full
                            h-64 border-0" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-stone-50 dark:bg-stone-800">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Full
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">
                                Email</label>
                            <input type="email" id="email" name="email" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                        </div>
                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">
                                Phone Number
                            </label>
                            <input type="text" id="phone" name="phone" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                        </div>
                        <div>
                            <label for="subject"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">
                                Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="primary-button">
                                Send Message
                                <flux:icon.arrow-right class="w-4 h-4 ml-2" />
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="py-12 bg-white dark:bg-stone-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">FAQ</h2>
                <p
                    class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-stone-900 dark:text-white sm:text-4xl">
                    Frequently Asked Questions
                </p>
                <p class="mt-4 max-w-2xl text-xl text-stone-500 dark:text-stone-400 lg:mx-auto">
                    Discover more about how Digipal Solutions can power your digital growth.
                </p>
            </div>

            <div class="mt-10" x-data="{ open: null }">
                <dl class="space-y-6">
                    <div class="border-b border-stone-200 dark:border-stone-700 pb-6" x-cloak>
                        <dt class="text-lg">
                            <button @click="open === 1 ? open = null : open = 1"
                                class="flex items-center justify-between w-full text-left focus:outline-none py-2 transition-all duration-300"
                                :class="{
                                    'text-green-600 dark:text-green-400': open ===
                                        1,
                                    'hover:text-green-600 dark:hover:text-green-400 text-stone-900 dark:text-white': open !==
                                        1
                                }"
                                :aria-expanded="open === 1">
                                <span class="font-medium">What is your core approach to digital marketing
                                    strategy?</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-300"
                                        :class="{ '-rotate-180 text-green-600 dark:text-green-400': open === 1 }"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" x-show="open === 1" x-collapse>
                            <p class="text-base text-stone-600 dark:text-stone-400">
                                Our approach is data-driven and highly personalized. We start with a deep dive into your
                                business, industry, and target audience. Then, we craft a comprehensive strategy
                                utilizing <strong>SEO, content marketing, social media management, paid advertising, and
                                    analytics</strong> to achieve your specific business objectives and deliver
                                measurable ROI.
                            </p>
                        </dd>
                    </div>

                    <div class="border-b border-stone-200 dark:border-stone-700 pb-6" x-cloak>
                        <dt class="text-lg">
                            <button @click="open === 2 ? open = null : open = 2"
                                class="flex items-center justify-between w-full text-left focus:outline-none py-2 transition-all duration-300"
                                :class="{
                                    'text-green-600 dark:text-green-400': open ===
                                        2,
                                    'hover:text-green-600 dark:hover:text-green-400 text-stone-900 dark:text-white': open !==
                                        2
                                }"
                                :aria-expanded="open === 2">
                                <span class="font-medium">What specific SEO strategies do you employ for
                                    clients?</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-300"
                                        :class="{ '-rotate-180 text-green-600 dark:text-green-400': open === 2 }"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" x-show="open === 2" x-collapse>
                            <p class="text-base text-stone-600 dark:text-stone-400">
                                We implement a full spectrum of SEO strategies, including <strong>on-page optimization
                                    (keyword research, content optimization), technical SEO (site speed,
                                    mobile-friendliness, schema markup), off-page SEO (link building, local SEO), and
                                    continuous performance monitoring.</strong> Our goal is to improve your organic
                                search rankings and drive qualified traffic.
                            </p>
                        </dd>
                    </div>

                    <div class="border-b border-stone-200 dark:border-stone-700 pb-6" x-cloak>
                        <dt class="text-lg">
                            <button @click="open === 3 ? open = null : open = 3"
                                class="flex items-center justify-between w-full text-left focus:outline-none py-2 transition-all duration-300"
                                :class="{
                                    'text-green-600 dark:text-green-400': open ===
                                        3,
                                    'hover:text-green-600 dark:hover:text-green-400 text-stone-900 dark:text-white': open !==
                                        3
                                }"
                                :aria-expanded="open === 3">
                                <span class="font-medium">How do you measure the success of digital marketing
                                    campaigns?</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-300"
                                        :class="{ '-rotate-180 text-green-600 dark:text-green-400': open === 3 }"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" x-show="open === 3" x-collapse>
                            <p class="text-base text-stone-600 dark:text-stone-400">
                                We use various key performance indicators (KPIs) relevant to your objectives, such as
                                <strong>website traffic, conversion rates, lead generation, search engine rankings,
                                    social media engagement, and return on ad spend (ROAS).</strong> We provide regular,
                                transparent reports to show you the impact of our efforts.
                            </p>
                        </dd>
                    </div>

                    <div class="border-b border-stone-200 dark:border-stone-700 pb-6" x-cloak>
                        <dt class="text-lg">
                            <button @click="open === 4 ? open = null : open = 4"
                                class="flex items-center justify-between w-full text-left focus:outline-none py-2 transition-all duration-300"
                                :class="{
                                    'text-green-600 dark:text-green-400': open ===
                                        4,
                                    'hover:text-green-600 dark:hover:text-green-400 text-stone-900 dark:text-white': open !==
                                        4
                                }"
                                :aria-expanded="open === 4">
                                <span class="font-medium">What types of web development projects do you specialize
                                    in?</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-300"
                                        :class="{ '-rotate-180 text-green-600 dark:text-green-400': open === 4 }"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" x-show="open === 4" x-collapse>
                            <p class="text-base text-stone-600 dark:text-stone-400">
                                We excel in building various web solutions, including <strong>responsive business
                                    websites, e-commerce platforms, custom web applications, and CMS-driven sites (like
                                    WordPress).</strong> We focus on user-centric design and robust, scalable
                                development tailored to your specific functional requirements.
                            </p>
                        </dd>
                    </div>

                    <div class="pb-6" x-cloak>
                        <dt class="text-lg">
                            <button @click="open === 5 ? open = null : open = 5"
                                class="flex items-center justify-between w-full text-left focus:outline-none py-2 transition-all duration-300"
                                :class="{
                                    'text-green-600 dark:text-green-400': open ===
                                        5,
                                    'hover:text-green-600 dark:hover:text-green-400 text-stone-900 dark:text-white': open !==
                                        5
                                }"
                                :aria-expanded="open === 5">
                                <span class="font-medium">Do you offer ongoing support and maintenance after project
                                    completion?</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-300"
                                        :class="{ '-rotate-180 text-green-600 dark:text-green-400': open === 5 }"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" x-show="open === 5" x-collapse>
                            <p class="text-base text-stone-600 dark:text-stone-400">
                                Absolutely. We believe in long-term partnerships. We offer various post-launch support
                                and maintenance packages, including <strong>technical assistance, security monitoring,
                                    performance optimization, and content updates</strong> to ensure your digital assets
                                continue to perform optimally.
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-layouts.app>
