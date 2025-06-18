<x-layouts.app>
    <div class="min-h-[80vh] relative flex items-center justify-center pt-20 lg:pt-32 pb-16 bg-white dark:bg-stone-900">
        <div class="digi-container flex flex-col items-center justify-center gap-10 relative w-full">
            <div class="relative z-10 flex flex-col text-center items-center justify-center">
                <h1 class="text-3xl md:text-5xl font-bold text-stone-900 dark:text-white mb-2 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <span>Request a Proposal</span>
                </h1>
                <p class="text-md text-stone-600 dark:text-stone-400 max-w-2xl aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="600">
                    Ready to bring your vision to life? Tell us about your project, and we'll craft a tailored proposal
                    to meet your needs and exceed your expectations.
                </p>
            </div>

            <div
                class="grid grid-cols-1 bg-white dark:bg-stone-800 border border-stone-200 dark:border-stone-800 rounded-xl w-full max-w-4xl p-6 sm:p-8 md:p-10">

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Section 1: Contact Information -->
                    <h2
                        class="text-2xl font-semibold text-stone-900 dark:text-white border-b pb-3 mb-6 border-stone-200 dark:border-stone-700">
                        Your Contact Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Full Name
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                            {{-- @error('name') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Email Address
                                <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                            {{-- @error('email') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Phone Number
                                (Optional)</label>
                            <input type="text" id="phone" name="phone"
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                            {{-- @error('phone') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                        <div>
                            <label for="company"
                                class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Company Name
                                (Optional)</label>
                            <input type="text" id="company" name="company"
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                            {{-- @error('company') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                    </div>

                    <!-- Section 2: Project Details -->
                    <h2
                        class="text-2xl font-semibold text-stone-900 dark:text-white border-b pb-3 pt-8 mb-6 border-stone-200 dark:border-stone-700">
                        Project Details</h2>

                    <div>
                        <label for="project_type"
                            class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">What type of
                            project are you looking for? <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select id="project_type" name="project_type" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg appearance-none focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white pr-10">
                                <option value="">Please Select</option>
                                <option value="new_website">New Website Development</option>
                                <option value="website_redesign">Website Redesign / Revamp</option>
                                <option value="digital_marketing_campaign">Digital Marketing Campaign</option>
                                <option value="seo_audit_strategy">SEO Audit & Strategy</option>
                                <option value="social_media_management">Social Media Management</option>
                                <option value="custom_web_app">Custom Web Application</option>
                                <option value="e_commerce_solution">E-commerce Solution</option>
                                <option value="branding_identity">Branding & Identity</option>
                                <option value="other">Other (Please specify below)</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-stone-700 dark:text-stone-300">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fillRule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clipRule="evenodd" />
                                </svg>
                            </div>
                            {{-- @error('project_type') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">Which services
                            are you interested in? (Select all that apply)</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Web Design" class="form-checkbox">
                                <span>Web Design</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Web Development" class="form-checkbox">
                                <span>Web Development</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="SEO (Search Engine Optimization)"
                                    class="form-checkbox">
                                <span>SEO</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Social Media Marketing"
                                    class="form-checkbox">
                                <span>Social Media Marketing</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Content Marketing"
                                    class="form-checkbox">
                                <span>Content Marketing</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Paid Advertising (PPC)"
                                    class="form-checkbox">
                                <span>Paid Advertising (PPC)</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Branding & Identity"
                                    class="form-checkbox">
                                <span>Branding & Identity</span>
                            </label>
                            <label class="flex items-center space-x-2 text-stone-700 dark:text-stone-300">
                                <input type="checkbox" name="services[]" value="Other" class="form-checkbox">
                                <span>Other</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="project_description"
                            class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Tell us about
                            your project or specific needs <span class="text-red-500">*</span></label>
                        <textarea id="project_description" name="project_description" rows="5" required
                            class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white"
                            placeholder="Describe your project, goals, target audience, and any features or functionalities you envision."></textarea>
                        {{-- @error('project_description') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                    </div>

                    <!-- Section 3: Budget & Timeline -->
                    <h2
                        class="text-2xl font-semibold text-stone-900 dark:text-white border-b pb-3 pt-8 mb-6 border-stone-200 dark:border-stone-700">
                        Budget & Timeline</h2>

                    <div>
                        <label for="budget_range"
                            class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">What is your
                            estimated budget range? <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select id="budget_range" name="budget_range" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg appearance-none focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white pr-10">
                                <option value="">Please Select</option>
                                <option value="under_1k">Under $1,000</option>
                                <option value="1k-5k">$1,000 - $5,000</option>
                                <option value="5k-10k">$5,000 - $10,000</option>
                                <option value="10k-25k">$10,000 - $25,000</option>
                                <option value="25k-50k">$25,000 - $50,000</option>
                                <option value="50k_plus">$50,000+</option>
                                <option value="flexible">Flexible / Not yet determined</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-stone-700 dark:text-stone-300">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fillRule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clipRule="evenodd" />
                                </svg>
                            </div>
                            {{-- @error('budget_range') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                    </div>

                    <div>
                        <label for="timeline"
                            class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">What is your
                            desired project timeline? <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select id="timeline" name="timeline" required
                                class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg appearance-none focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white pr-10">
                                <option value="">Please Select</option>
                                <option value="urgent">Urgent (Within 1-2 months)</option>
                                <option value="3-4_months">3 - 4 Months</option>
                                <option value="5-6_months">5 - 6 Months</option>
                                <option value="6_plus_months">6+ Months</option>
                                <option value="flexible">Flexible</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-stone-700 dark:text-stone-300">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fillRule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clipRule="evenodd" />
                                </svg>
                            </div>
                            {{-- @error('timeline') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                        </div>
                    </div>

                    <!-- Section 4: Additional Information -->
                    <h2
                        class="text-2xl font-semibold text-stone-900 dark:text-white border-b pb-3 pt-8 mb-6 border-stone-200 dark:border-stone-700">
                        Additional Information</h2>

                    <div>
                        <label for="how_heard"
                            class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">How did you hear
                            about us? (Optional)</label>
                        <input type="text" id="how_heard" name="how_heard"
                            class="block w-full px-4 py-2 border border-stone-300 dark:border-stone-700 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 bg-stone-50 dark:bg-stone-700 text-stone-900 dark:text-white">
                        {{-- @error('how_heard') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                    </div>

                    <div>
                        <label for="attachments"
                            class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-1">Upload any
                            relevant files (e.g., brief, wireframes) (Optional)</label>
                        <input type="file" id="attachments" name="attachments[]" multiple
                            class="block w-full text-sm text-stone-500  p-1 border border-stone-300 dark:border-stone-700 rounded-lg w-max
                                   file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 
                                   file:text-sm file:font-semibold
                                   hover:file:bg-green-500 
                                   file:bg-stone-700 file:text-white
                                   cursor-pointer">
                        {{-- @error('attachments') <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p> @enderror --}}
                    </div>

                    <div class="text-right pt-6">
                        <button type="submit"
                            class="primary-button
                            inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500
                            dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-400">
                            Submit Proposal Request
                            {{-- This SVG is a placeholder for your 'flux:icon.arrow-right' component --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
