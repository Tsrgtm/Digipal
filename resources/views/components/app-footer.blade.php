<footer class="bg-stone-950 dark:bg-stone-950 text-stone-300 py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

            <!-- Footer Section 1: Company Info -->
            <div class="flex flex-col items-start text-left">
                <a href="#" class="inline-flex items-center space-x-2 mb-4">
                    <img src="{{ asset('assets/images/logo.png') }}" class="h-10" alt="Digipal Logo">
                </a>
                <p class="text-stone-400 leading-relaxed max-w-sm">
                    Empowering businesses with innovative digital solutions to thrive in the online world.
                </p>
                <div class="flex space-x-4 mt-6">
                    <a href="https://www.facebook.com/digipalsolution" target="_blank" aria-label="Facebook"
                        class="text-stone-400 hover:text-green-500 transition transform hover:scale-110">
                        <flux:icon.facebook class="w-6 h-6" />
                    </a>
                    {{-- <a href="#" target="_blank" aria-label="Twitter"
                        class="text-stone-400 hover:text-green-500 transition transform hover:scale-110">
                        <flux:icon.twitter class="w-6 h-6" />
                    </a> --}}
                    <a href="https://www.instagram.com/diigipal/" target="_blank" aria-label="Instagram"
                        class="text-stone-400 hover:text-green-500 transition transform hover:scale-110">
                        <flux:icon.instagram class="w-6 h-6" />
                    </a>
                    <a href="https://www.linkedin.com/company/digipalsolutions/" target="_blank" aria-label="LinkedIn"
                        class="text-stone-400 hover:text-green-500 transition transform hover:scale-110">
                        <flux:icon.linkedin class="w-6 h-6" />
                    </a>
                </div>
            </div>

            <!-- Footer Section 2: Quick Links -->
            <div class="flex flex-col items-start text-left">
                <h4 class="text-xl font-bold text-white mb-4">Company</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('about') }}" class="text-stone-400 hover:text-green-400 transition">About
                            Us</a></li>
                    <li><a href="#" class="text-stone-400 hover:text-green-400 transition">Our Team</a></li>
                    <li><a href="#" class="text-stone-400 hover:text-green-400 transition">Careers</a></li>
                    <li><a href="{{ route('blogs') }}" class="text-stone-400 hover:text-green-400 transition">Blogs</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                            class="text-stone-400 hover:text-green-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Footer Section 3: Services -->
            <div class="flex flex-col items-start text-left">
                <h4 class="text-xl font-bold text-white mb-4">Services</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('services.marketing') }}"
                            class="text-stone-400 hover:text-green-400 transition">
                            360 Digital Marketing
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.video-prod') }}"
                            class="text-stone-400 hover:text-green-400 transition">
                            Video Production
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.smm') }}" class="text-stone-400 hover:text-green-400 transition">
                            Social Media Marketing
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.podcast') }}"
                            class="text-stone-400 hover:text-green-400 transition">
                            Podcast Creation
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.web-dev') }}"
                            class="text-stone-400 hover:text-green-400 transition">
                            Web Development
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.seo') }}" class="text-stone-400 hover:text-green-400 transition">
                            SEO Optimization
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Footer Section 4: Contact & Social -->
            <div class="flex flex-col items-start text-left">
                <h4 class="text-xl font-bold text-white mb-4">Contact Us</h4>
                <ul class="space-y-3">
                    <li class="flex items-center justify-start space-x-2">
                        <flux:icon.envelope class="w-5 h-5 text-green-400" />
                        <a href="mailto:hello@digipalsolutions.com.np"
                            class="text-stone-400 hover:text-green-400 transition">hello@digipalsolutions.com.np</a>
                    </li>
                    <li class="flex items-center justify-start space-x-2">
                        <flux:icon.phone class="w-5 h-5 text-green-400" />
                        <a href="tel:+977 01-5912819" class="text-stone-400 hover:text-green-400 transition">
                            +977 01-5912819
                        </a>
                    </li>
                    <li class="flex items-center justify-start space-x-2">
                        <flux:icon.map-pin class="w-5 h-5 text-green-400" />
                        <a href="https://maps.app.goo.gl/jvy4yUnWNXja1cpCA" target="_blank"
                            class="text-stone-400 hover:text-green-400 transition">Kathmandu, Nepal</a>
                    </li>
                </ul>
            </div>

        </div>

        <hr class="border-stone-800 my-10">

        <!-- Bottom Bar: Copyright & Links -->
        <div
            class="flex md:flex-row flex-col-reverse items-center justify-center gap-2 md:justify-between text-stone-500 text-sm">
            <p>&copy; {{ date('Y') }} Digipal Solutions. All rights reserved.</p>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms & Conditions</a>
                {{-- <a href="#" class="hover:underline">Cookies</a> --}}
            </div>
        </div>
    </div>
</footer>
