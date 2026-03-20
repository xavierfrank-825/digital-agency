<?php get_header(); ?>

<main id="primary" class="site-main bg-white">
    <!-- Hero Section: Editorial Style -->
    <section class="relative min-h-screen flex items-center pt-32 pb-20 overflow-hidden bg-slate-950">
        <!-- Background Accents -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px]"></div>
            <div class="absolute top-1/2 -right-24 w-96 h-96 bg-emerald-600/10 rounded-full blur-[120px]"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="grid lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-3 py-2 px-4 rounded-full bg-white/5 text-indigo-400 text-xs font-black tracking-[0.2em] uppercase mb-10 border border-white/10 backdrop-blur-sm">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full animate-ping"></span>
                        Next-Gen Digital Solutions
                    </div>
                    <h1 class="text-6xl md:text-[120px] font-black text-white leading-[0.85] mb-10 tracking-tighter">
                        WE BUILD <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-white to-emerald-400">FUTURE</span> <br/>
                        BRANDS.
                    </h1>
                    <p class="text-xl md:text-2xl text-slate-400 mb-12 max-w-xl leading-relaxed font-medium">
                        A boutique digital agency crafting high-end experiences for the world's most ambitious companies.
                    </p>
                    <div class="flex flex-wrap gap-6">
                        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="bg-white/5 text-white border border-white/10 px-10 py-5 rounded-2xl font-black hover:bg-white/10 transition-all backdrop-blur-md">
                            Our Expertise
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 relative hidden lg:block">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-indigo-600 to-emerald-600 rounded-[3rem] blur-2xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="relative rounded-[3rem] overflow-hidden border border-white/10 shadow-2xl aspect-[4/5]">
                            <img src="https://picsum.photos/seed/agency-hero/800/1000" alt="Digital Excellence" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 scale-110 group-hover:scale-100">
                        </div>
                        <!-- Floating Card -->
                        <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-2xl max-w-[240px] border border-slate-100 animate-bounce-slow">
                            <div class="text-slate-900 font-black text-4xl mb-1 tracking-tighter">98%</div>
                            <div class="text-slate-500 text-xs font-bold uppercase tracking-widest leading-tight">Client Satisfaction Rate Across 200+ Projects</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By: Minimalist -->
    <section class="py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-slate-400 text-xs font-black uppercase tracking-[0.3em] mb-12">Trusted by Global Leaders</p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-40 grayscale">
                <div class="text-2xl font-black text-slate-900 tracking-tighter">MICROSOFT</div>
                <div class="text-2xl font-black text-slate-900 tracking-tighter">ADOBE</div>
                <div class="text-2xl font-black text-slate-900 tracking-tighter">SPOTIFY</div>
                <div class="text-2xl font-black text-slate-900 tracking-tighter">STRIPE</div>
                <div class="text-2xl font-black text-slate-900 tracking-tighter">AIRBNB</div>
            </div>
        </div>
    </section>

    <!-- Brands Marquee -->
    <section class="py-20 bg-slate-50 border-y border-slate-100 overflow-hidden">
        <div class="flex whitespace-nowrap animate-marquee group">
            <div class="flex gap-20 items-center px-10">
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Microsoft</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Google</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Amazon</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Meta</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Apple</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Netflix</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Tesla</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">SpaceX</span>
            </div>
            <div class="flex gap-20 items-center px-10">
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Microsoft</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Google</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Amazon</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Meta</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Apple</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Netflix</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">Tesla</span>
                <span class="text-4xl font-black text-slate-200 uppercase tracking-tighter">SpaceX</span>
            </div>
        </div>
    </section>

    <!-- Services: Expanded Bento Grid -->
    <section id="services" class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-24">
                <h2 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-6">Our Expertise</h2>
                <h3 class="text-5xl md:text-7xl font-black text-slate-950 leading-[0.95] tracking-tighter">
                    COMPREHENSIVE <br/>
                    <span class="text-slate-400 italic">DIGITAL</span> ECOSYSTEMS.
                </h3>
            </div>

            <div class="grid md:grid-cols-12 gap-8">
                <!-- Web Dev -->
                <div class="md:col-span-8 group relative bg-white rounded-[3rem] p-12 border border-slate-200 overflow-hidden hover:shadow-2xl transition-all duration-500">
                    <div class="relative z-10 max-w-md">
                        <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center mb-8 text-white text-3xl shadow-xl shadow-indigo-200">
                            <span class="font-black">W</span>
                        </div>
                        <h4 class="text-3xl font-black text-slate-950 mb-6 tracking-tight">Enterprise Web <br/>Engineering</h4>
                        <p class="text-slate-500 text-lg leading-relaxed mb-8">Scalable, high-performance web applications built for the modern era. We specialize in React, Next.js, and complex API integrations.</p>
                        <ul class="grid grid-cols-2 gap-4 mb-8 text-sm font-bold text-slate-400">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full"></span> Custom CMS</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full"></span> E-commerce</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full"></span> SaaS Platforms</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full"></span> Web3 Solutions</li>
                        </ul>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-black group-hover:gap-4 transition-all">Explore Service &rarr;</a>
                    </div>
                    <div class="absolute bottom-0 right-0 w-1/2 h-full opacity-10 group-hover:opacity-20 transition-opacity">
                        <img src="https://picsum.photos/seed/web/600/800" class="w-full h-full object-cover" alt="">
                    </div>
                </div>

                <!-- Mobile Apps -->
                <div class="md:col-span-4 bg-slate-900 rounded-[3rem] p-12 text-white flex flex-col justify-between border border-white/5 hover:bg-indigo-600 transition-colors duration-500 group">
                    <div>
                        <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center mb-8 text-xl">📱</div>
                        <h4 class="text-2xl font-black mb-4 tracking-tight">Mobile First <br/>Experiences</h4>
                        <p class="text-slate-400 group-hover:text-white/80 transition-colors mb-6">Native iOS and Android development that puts your brand in the palm of their hands.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] font-black uppercase tracking-widest py-1 px-3 bg-white/5 rounded-full">Swift</span>
                            <span class="text-[10px] font-black uppercase tracking-widest py-1 px-3 bg-white/5 rounded-full">Kotlin</span>
                            <span class="text-[10px] font-black uppercase tracking-widest py-1 px-3 bg-white/5 rounded-full">Flutter</span>
                        </div>
                    </div>
                    <div class="pt-8 border-t border-white/10 mt-8">
                        <span class="text-sm font-black uppercase tracking-widest">Learn More</span>
                    </div>
                </div>

                <!-- UI/UX Design -->
                <div class="md:col-span-4 bg-white rounded-[3rem] p-12 border border-slate-200 hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center mb-8 text-white text-xl">🎨</div>
                    <h4 class="text-2xl font-black text-slate-950 mb-4 tracking-tight">UI/UX <br/>Design Systems</h4>
                    <p class="text-slate-500 mb-6">User-centric design that balances aesthetic beauty with functional excellence.</p>
                    <a href="#" class="text-sm font-black uppercase tracking-widest text-emerald-600">View Case Studies</a>
                </div>

                <!-- Digital Marketing -->
                <div class="md:col-span-4 bg-indigo-600 rounded-[3rem] p-12 text-white hover:bg-indigo-700 transition-colors duration-500">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-8 text-xl">🚀</div>
                    <h4 class="text-2xl font-black mb-4 tracking-tight">Growth & <br/>Marketing</h4>
                    <p class="text-indigo-100 mb-6">Data-driven strategies to scale your user base and maximize ROI.</p>
                    <a href="#" class="text-sm font-black uppercase tracking-widest text-white">Our Strategy</a>
                </div>

                <!-- AI & Machine Learning -->
                <div class="md:col-span-4 bg-white rounded-[3rem] p-12 border border-slate-200 hover:shadow-2xl transition-all duration-500">
                    <div class="w-12 h-12 bg-slate-950 rounded-xl flex items-center justify-center mb-8 text-white text-xl">🤖</div>
                    <h4 class="text-2xl font-black text-slate-950 mb-4 tracking-tight">AI & Machine <br/>Learning</h4>
                    <p class="text-slate-500 mb-6">Integrating intelligent automation and predictive analytics into your workflow.</p>
                    <a href="#" class="text-sm font-black uppercase tracking-widest text-slate-950">Explore AI</a>
                </div>

                <!-- Cybersecurity -->
                <div class="md:col-span-6 bg-slate-100 rounded-[3rem] p-12 border border-slate-200 flex items-center gap-8 hover:bg-white transition-colors duration-500">
                    <div class="w-20 h-20 bg-white rounded-2xl flex-shrink-0 flex items-center justify-center text-3xl shadow-xl">🛡️</div>
                    <div>
                        <h4 class="text-2xl font-black text-slate-950 mb-2 tracking-tight">Cybersecurity</h4>
                        <p class="text-slate-500">Protecting your digital assets with advanced security protocols and monitoring.</p>
                    </div>
                </div>

                <!-- Cloud Infrastructure -->
                <div class="md:col-span-6 bg-slate-100 rounded-[3rem] p-12 border border-slate-200 flex items-center gap-8 hover:bg-white transition-colors duration-500">
                    <div class="w-20 h-20 bg-white rounded-2xl flex-shrink-0 flex items-center justify-center text-3xl shadow-xl">☁️</div>
                    <div>
                        <h4 class="text-2xl font-black text-slate-950 mb-2 tracking-tight">Cloud Infrastructure</h4>
                        <p class="text-slate-500">Optimizing your operations with scalable, secure cloud hosting and DevOps.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section: Horizontal Scroll / Grid -->
    <section id="portfolio" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-6">Selected Works</h2>
                    <h3 class="text-5xl md:text-7xl font-black text-slate-950 tracking-tighter leading-none">
                        CRAFTING <span class="text-slate-400 italic">DIGITAL</span> <br/>LANDMARKS.
                    </h3>
                </div>
                <a href="#" class="bg-slate-950 text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-indigo-600 transition-all">View All Projects</a>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Project 1 -->
                <div class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[3rem] overflow-hidden mb-8 border border-slate-100 shadow-xl">
                        <img src="https://picsum.photos/seed/project1/1200/800" alt="Project 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-indigo-600/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-white font-black text-xl uppercase tracking-widest border-2 border-white px-8 py-3 rounded-full">View Case</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="text-2xl font-black text-slate-950 mb-2">NeoBank Mobile App</h4>
                            <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Fintech / UI/UX / Development</p>
                        </div>
                        <div class="text-slate-300 font-black text-4xl italic">01</div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group cursor-pointer">
                    <div class="relative aspect-[16/10] rounded-[3rem] overflow-hidden mb-8 border border-slate-100 shadow-xl">
                        <img src="https://picsum.photos/seed/project2/1200/800" alt="Project 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-emerald-600/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-white font-black text-xl uppercase tracking-widest border-2 border-white px-8 py-3 rounded-full">View Case</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="text-2xl font-black text-slate-950 mb-2">EcoStore E-commerce</h4>
                            <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Retail / Web Design / Shopify</p>
                        </div>
                        <div class="text-slate-300 font-black text-4xl italic">02</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section: Step by Step -->
    <section id="process" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-24">
                <h2 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-6">Our Process</h2>
                <h3 class="text-5xl md:text-7xl font-black text-slate-950 tracking-tighter">HOW WE WORK.</h3>
            </div>

            <div class="grid md:grid-cols-4 gap-12">
                <div class="relative">
                    <div class="text-[120px] font-black text-slate-50 absolute -top-16 -left-4 leading-none select-none">01</div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black text-slate-950 mb-4">Discovery</h4>
                        <p class="text-slate-500">We dive deep into your business, goals, and audience to build a solid foundation.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="text-[120px] font-black text-slate-50 absolute -top-16 -left-4 leading-none select-none">02</div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black text-slate-950 mb-4">Strategy</h4>
                        <p class="text-slate-500">Crafting a roadmap that aligns technology with your long-term vision.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="text-[120px] font-black text-slate-50 absolute -top-16 -left-4 leading-none select-none">03</div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black text-slate-950 mb-4">Execution</h4>
                        <p class="text-slate-500">Our expert team brings the vision to life with precision and speed.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="text-[120px] font-black text-slate-50 absolute -top-16 -left-4 leading-none select-none">04</div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black text-slate-950 mb-4">Optimization</h4>
                        <p class="text-slate-500">Continuous monitoring and improvement to ensure peak performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-32 bg-slate-950 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div>
                    <h2 class="text-indigo-400 font-black text-sm uppercase tracking-[0.3em] mb-10">Testimonials</h2>
                    <h3 class="text-5xl md:text-7xl font-black leading-[0.95] tracking-tighter mb-12">
                        WHAT OUR <br/>
                        <span class="text-white/20 italic">PARTNERS</span> <br/>
                        SAY.
                    </h3>
                    <div class="flex gap-4">
                        <button class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center hover:bg-white hover:text-slate-950 transition-all">&larr;</button>
                        <button class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center hover:bg-white hover:text-slate-950 transition-all">&rarr;</button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white/5 backdrop-blur-xl p-12 rounded-[3rem] border border-white/10 relative z-10">
                        <div class="text-indigo-400 text-6xl font-serif mb-8">“</div>
                        <p class="text-2xl md:text-3xl font-medium leading-relaxed mb-12">
                            Digital Agency transformed our legacy systems into a modern, high-performance platform. Their attention to detail and technical expertise is unmatched in the industry.
                        </p>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 rounded-full bg-slate-800 overflow-hidden">
                                <img src="https://picsum.photos/seed/ceo/100/100" alt="CEO">
                            </div>
                            <div>
                                <div class="font-black text-lg">Sarah Jenkins</div>
                                <div class="text-slate-400 text-sm font-bold uppercase tracking-widest">CEO, TechFlow</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-indigo-600 rounded-full blur-[120px] opacity-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-24">
                <h2 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-6">FAQ</h2>
                <h3 class="text-5xl font-black text-slate-950 tracking-tighter">COMMON QUESTIONS.</h3>
            </div>

            <div class="space-y-6">
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100">
                    <h4 class="text-xl font-black text-slate-950 mb-4">How long does a typical project take?</h4>
                    <p class="text-slate-500">Project timelines vary based on complexity, but most enterprise web projects range from 8 to 16 weeks from discovery to launch.</p>
                </div>
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100">
                    <h4 class="text-xl font-black text-slate-950 mb-4">Do you provide ongoing support?</h4>
                    <p class="text-slate-500">Yes, we offer comprehensive maintenance and support packages to ensure your digital assets remain secure and up-to-date.</p>
                </div>
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100">
                    <h4 class="text-xl font-black text-slate-950 mb-4">What technologies do you specialize in?</h4>
                    <p class="text-slate-500">We are experts in modern JavaScript frameworks (React, Next.js), cloud infrastructure (AWS, GCP), and native mobile development.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About: Split Layout -->
    <section class="py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="relative">
                    <div class="absolute -top-10 -left-10 text-[200px] font-black text-slate-50 leading-none select-none">10</div>
                    <h2 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-10 relative z-10">Our Story</h2>
                    <h3 class="text-5xl md:text-7xl font-black text-slate-950 leading-[0.95] tracking-tighter mb-10 relative z-10">
                        A DECADE OF <br/>
                        <span class="text-indigo-600">DIGITAL</span> <br/>
                        MASTERY.
                    </h3>
                    <p class="text-xl text-slate-500 leading-relaxed mb-12 relative z-10">
                        Founded in 2016, we've spent the last 10 years at the intersection of design and technology. We don't just build websites; we build the engines that power modern businesses.
                    </p>
                    <div class="grid grid-cols-2 gap-12 relative z-10">
                        <div>
                            <div class="text-4xl font-black text-slate-950 mb-2">250+</div>
                            <div class="text-xs font-black uppercase tracking-widest text-slate-400">Projects Launched</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-slate-950 mb-2">15+</div>
                            <div class="text-xs font-black uppercase tracking-widest text-slate-400">Design Awards</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-[4rem] overflow-hidden shadow-2xl skew-y-3 hover:skew-y-0 transition-transform duration-700">
                        <img src="https://picsum.photos/seed/team/800/1000" alt="Our Team" class="w-full h-auto">
                    </div>
                    <div class="absolute top-1/2 -right-12 w-48 h-48 bg-emerald-500 rounded-full flex items-center justify-center text-white text-center p-6 shadow-2xl rotate-12">
                        <span class="font-black text-sm uppercase tracking-widest">Join Our Creative Journey</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section: Immersive Form -->
    <section id="contact" class="py-32 bg-slate-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-indigo-600 rounded-full blur-[150px]"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-emerald-600 rounded-full blur-[150px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div>
                    <h2 class="text-6xl md:text-8xl font-black text-white leading-none tracking-tighter mb-12">
                        LET'S MAKE <br/>
                        IT <span class="italic text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-emerald-400">REAL</span>.
                    </h2>
                    <p class="text-xl text-slate-400 mb-12 max-w-md font-medium">
                        Ready to transform your digital presence? Send us a message and let's start building the future together.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 text-white">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center text-xl border border-white/10">📧</div>
                            <span class="font-bold">abiramvr9@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-4 text-white">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center text-xl border border-white/10">📞</div>
                            <span class="font-bold">6369398051</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-xl p-10 rounded-[3rem] border border-white/10">
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="space-y-6">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <?php wp_nonce_field( 'contact_form_nonce', 'contact_form_nonce_field' ); ?>
                        
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Full Name</label>
                            <input type="text" name="contact_name" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-indigo-500 transition-colors">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Email Address</label>
                            <input type="email" name="contact_email" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-indigo-500 transition-colors">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Message</label>
                            <textarea name="contact_message" rows="4" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-indigo-500 transition-colors resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 text-white py-5 rounded-2xl font-black text-lg hover:bg-indigo-700 transition-all shadow-2xl shadow-indigo-500/20">
                            Send Message &rarr;
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
@keyframes bounce-slow {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}
.animate-bounce-slow {
    animation: bounce-slow 4s ease-in-out infinite;
}
</style>

<?php get_footer(); ?>
