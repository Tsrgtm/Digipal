<x-layouts.app>
    <div
        class="min-h-[80vh] relative flex items-center justify-center pt-20 lg:pt-32 sm:pb-16 pb-10 bg-white dark:bg-stone-900">

        <div class="digi-container flex flex-col items-center justify-center gap-10 relative w-full">
            <div class="relative z-10 flex flex-col text-center items-center justify-center">
                <h1 class="text-3xl md:text-5xl font-bold text-stone-900 dark:text-white mb-2 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <span>Insights & Innovations</span>
                    {{-- <br>
                    <span class="text-green-500 dark:text-green-400">
                        With Digipal Solutions
                    </span> --}}
                </h1>

                <p class="text-md text-stone-600 dark:text-stone-400 max-w-2xl aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="600">
                    Dive deep into the world of digital marketing, web development, and industry trends with expert
                    articles and thought leadership from Digipal Solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Blog Post Card 1: Standard Layout -->
                <div class="primary-card" data-aos="fade-up" data-aos-duration="600">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/600x400/22c55e/ffffff?text=SEO+Tips" alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>
                    <div class="flex items-center text-sm text-stone-500 dark:text-stone-400 mb-2">
                        <flux:icon.calendar class="w-4 h-4 mr-1" />
                        <span>June 17, 2025</span>
                        <span class="mx-2">|</span>
                        <flux:icon.tag class="w-4 h-4 mr-1" />
                        <span>SEO, Content</span>
                    </div>
                    <flux:heading size="lg" class="text-stone-800 dark:text-stone-200 mb-2 line-clamp-2">
                        Mastering SEO in 2025: What You Need to Know
                    </flux:heading>
                    <flux:text class="text-stone-500 dark:text-stone-400 flex-grow line-clamp-3">
                        Discover the latest algorithm updates and strategies to boost your search engine rankings and
                        drive
                        organic traffic to your website.
                    </flux:text>
                    <a href="#"
                        class="inline-flex items-center space-x-2 mt-4 text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-500 transition duration-300 group">
                        Read More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>

                <!-- Blog Post Card 2: No Image, Focus on Text -->
                <div class="primary-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/400x600/22c55e/ffffff?text=Social+Media+Trends"
                            alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>
                    <div class="flex items-center text-sm text-stone-500 dark:text-stone-400 mb-2">
                        <flux:icon.calendar class="w-4 h-4 mr-1" />
                        <span>June 15, 2025</span>
                        <span class="mx-2">|</span>
                        <flux:icon.tag class="w-4 h-4 mr-1" />
                        <span>Social Media</span>
                    </div>
                    <flux:heading size="lg" class="text-stone-800 dark:text-stone-200 mb-2 line-clamp-2">
                        5 Social Media Trends Shaping 2025
                    </flux:heading>
                    <flux:text class="text-stone-500 dark:text-stone-400 flex-grow line-clamp-3">
                        Stay ahead of the curve with our insights into the most impactful social media trends that are
                        revolutionizing online engagement.
                    </flux:text>
                    <a href="#"
                        class="inline-flex items-center space-x-2 mt-4 text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-500 transition duration-300 group">
                        Read More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>

                <!-- Blog Post Card 3: Vertical Image, Shorter Text -->
                <div class="primary-card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/400x600/22c55e/ffffff?text=UX+Design" alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>
                    <div class="flex items-center text-sm text-stone-500 dark:text-stone-400 mb-2">
                        <flux:icon.calendar class="w-4 h-4 mr-1" />
                        <span>June 10, 2025</span>
                        <span class="mx-2">|</span>
                        <flux:icon.tag class="w-4 h-4 mr-1" />
                        <span>Web Dev</span>
                    </div>
                    <flux:heading size="lg" class="text-stone-800 dark:text-stone-200 mb-2 line-clamp-2">
                        The Importance of UX in Web Development
                    </flux:heading>
                    <flux:text class="text-stone-500 dark:text-stone-400 flex-grow line-clamp-3">
                        User experience (UX) is crucial for website success. Learn how good UX design can lead to higher
                        conversions and customer satisfaction.
                    </flux:text>
                    <a href="#"
                        class="inline-flex items-center space-x-2 mt-4 text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-500 transition duration-300 group">
                        Read More
                        <flux:icon.arrow-right
                            class="opacity-0 group-hover:opacity-100 group-hover:translate-x-2 w-4 transition-all duration-300" />
                    </a>
                </div>

                <!-- Blog Post Card 4: Longer Description -->
                <div class="primary-card" data-aos="fade-up" data-aos-duration="1200">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/600x400/22c55e/ffffff?text=Video+Marketing" alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>
                    <div class="flex items-center text-sm text-stone-500 dark:text-stone-400 mb-2">
                        <flux:icon.calendar class="w-4 h-4 mr-1" />
                        <span>June 05, 2025</span>
                        <span class="mx-2">|</span>
                        <flux:icon.tag class="w-4 h-4 mr-1" />
                        <span>Video Production</span>
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
                    <div class="flex items-center text-sm text-stone-500 dark:text-stone-400 mb-2">
                        <flux:icon.calendar class="w-4 h-4 mr-1" />
                        <span>May 28, 2025</span>
                        <span class="mx-2">|</span>
                        <flux:icon.tag class="w-4 h-4 mr-1" />
                        <span>AI, Marketing</span>
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
                <div class="primary-card" data-aos="fade-up" data-aos-duration="1600">
                    <div class="overflow-hidden rounded-2xl mb-6 shadow-md">
                        <img src="https://placehold.co/600x400/22c55e/ffffff?text=Social+Media+Marketing"
                            alt="Blog Post Image"
                            class="w-full aspect-video object-cover blog-card-image dark:brightness-75">
                    </div>
                    <div class="flex items-center text-sm text-stone-500 dark:text-stone-400 mb-2">
                        <flux:icon.calendar class="w-4 h-4 mr-1" />
                        <span>May 21, 2025</span>
                        <span class="mx-2">|</span>
                        <flux:icon.tag class="w-4 h-4 mr-1" />
                        <span>Social Media</span>
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

            <div class="text-center">
                <a href="#" class="primary-button">
                    Load More
                </a>
            </div>
        </div>
    </div>

    @include('partials.cta')
</x-layouts.app>
