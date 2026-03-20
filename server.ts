import express from 'express';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();
const PORT = 3000;

// Serve the wordpress-theme directory as static files
// Note: This won't execute PHP, but it will allow viewing the files
app.use(express.static(path.join(__dirname, 'wordpress-theme')));

// Contact Us Page Preview
app.get('/contact-us', (req, res) => {
    const isSuccess = req.query.contact_success === '1';
    res.send(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Us - Digital Agency</title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
            <style>
                body { font-family: 'Inter', sans-serif; }
            </style>
        </head>
        <body class="bg-white text-slate-900">
            <!-- Navigation (Simplified for Contact Page) -->
            <nav class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-slate-100 px-6 py-5">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <a href="/" class="text-2xl font-black tracking-tighter text-slate-900">DIGITAL<span class="text-indigo-600">AGENCY</span></a>
                    <a href="/" class="bg-slate-950 text-white px-8 py-3 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-indigo-600 transition-all shadow-xl shadow-slate-900/10">Back to Home</a>
                </div>
            </nav>

            <main class="pt-32">
                <!-- Contact Hero -->
                <section class="py-20 bg-slate-50 border-b border-slate-100">
                    <div class="max-w-7xl mx-auto px-6">
                        <div class="max-w-3xl">
                            <h1 class="text-6xl md:text-8xl font-black text-slate-950 tracking-tighter leading-none mb-10">
                                LET'S START <br/>
                                <span class="text-indigo-600 italic">SOMETHING</span> <br/>
                                GREAT.
                            </h1>
                            <p class="text-xl text-slate-500 leading-relaxed font-medium">
                                Have a project in mind? We'd love to hear from you. Send us a message and our team will get back to you within 24 hours.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Contact Form & Info -->
                <section class="py-32 bg-white">
                    <div class="max-w-7xl mx-auto px-6">
                        <div class="grid lg:grid-cols-12 gap-24">
                            <!-- Contact Form -->
                            <div class="lg:col-span-7">
                                <div class="bg-slate-50 p-12 rounded-[3rem] border border-slate-100">
                                    <h2 class="text-3xl font-black text-slate-950 mb-10 tracking-tight">Send a Message</h2>
                                    
                                    ${isSuccess ? `
                                        <div class="bg-emerald-50 border border-emerald-100 text-emerald-700 px-8 py-6 rounded-2xl mb-10 font-bold">
                                            Thank you! Your message has been sent successfully. We'll get back to you soon.
                                        </div>
                                    ` : ''}

                                    <form action="/contact-us" method="POST" class="space-y-8">
                                        <div class="grid md:grid-cols-2 gap-8">
                                            <div class="space-y-2">
                                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Full Name</label>
                                                <input type="text" name="name" placeholder="John Doe" required class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Email Address</label>
                                                <input type="email" name="email" placeholder="john@example.com" required class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors">
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Subject</label>
                                            <select name="subject" class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors appearance-none">
                                                <option>New Project Inquiry</option>
                                                <option>Partnership Opportunity</option>
                                                <option>General Question</option>
                                            </select>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Message</label>
                                            <textarea name="message" rows="6" placeholder="Tell us about your project..." required class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors resize-none"></textarea>
                                        </div>
                                        <button type="submit" class="w-full bg-indigo-600 text-white py-6 rounded-2xl font-black text-lg hover:bg-indigo-700 transition-all shadow-2xl shadow-indigo-200">
                                            Send Message &rarr;
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Contact Info -->
                            <div class="lg:col-span-5 space-y-16">
                                <div>
                                    <h3 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-8">Contact Details</h3>
                                    <div class="space-y-8">
                                        <div class="flex gap-6">
                                            <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-xl">📧</div>
                                            <div>
                                                <div class="text-xs font-black uppercase tracking-widest text-slate-400 mb-1">Email Us</div>
                                                <div class="text-xl font-black text-slate-950">abiramvr9@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="flex gap-6">
                                            <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-xl">📞</div>
                                            <div>
                                                <div class="text-xs font-black uppercase tracking-widest text-slate-400 mb-1">Call Us</div>
                                                <div class="text-xl font-black text-slate-950">6369398051</div>
                                            </div>
                                        </div>
                                        <div class="flex gap-6">
                                            <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-xl">📍</div>
                                            <div>
                                                <div class="text-xs font-black uppercase tracking-widest text-slate-400 mb-1">Visit Us</div>
                                                <div class="text-xl font-black text-slate-950">Kolapally(p), <br/>Nilgiris</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-8">Follow Us</h3>
                                    <div class="flex gap-4">
                                        <a href="#" class="w-12 h-12 bg-slate-950 text-white rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all">TW</a>
                                        <a href="#" class="w-12 h-12 bg-slate-950 text-white rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all">IG</a>
                                        <a href="#" class="w-12 h-12 bg-slate-950 text-white rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all">LI</a>
                                        <a href="#" class="w-12 h-12 bg-slate-950 text-white rounded-xl flex items-center justify-center hover:bg-indigo-600 transition-all">BE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="py-32 bg-slate-950 text-white border-t border-white/5">
                <div class="max-w-7xl mx-auto px-6 text-center text-slate-500 text-xs font-bold uppercase tracking-widest">
                    <p>&copy; 2026 Digital Agency. All rights reserved.</p>
                </div>
            </footer>
        </body>
        </html>
    `);
});

app.post('/contact-us', (req, res) => {
    // Mock processing
    res.redirect('/contact-us?contact_success=1');
});

// Fallback to show a simple HTML preview of the theme
app.get('/', (req, res) => {
    res.send(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Digital Agency - High-End Preview</title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
            <style>
                body { font-family: 'Inter', sans-serif; }
                @keyframes marquee {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); }
                }
                .animate-marquee {
                    animation: marquee 30s linear infinite;
                }
                @keyframes bounce-slow {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-20px); }
                }
                .animate-bounce-slow {
                    animation: bounce-slow 4s ease-in-out infinite;
                }
            </style>
        </head>
        <body class="bg-white text-slate-900 selection:bg-indigo-100 selection:text-indigo-900">
            <!-- Navigation -->
            <nav class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-slate-100 px-6 py-5">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <div class="text-2xl font-black tracking-tighter text-slate-900">DIGITAL<span class="text-indigo-600">AGENCY</span></div>
                    <div class="hidden lg:flex gap-10 font-black text-[10px] uppercase tracking-[0.2em] text-slate-400">
                        <a href="/" class="text-indigo-600">Home</a>
                        <a href="#services" class="hover:text-indigo-600 transition-colors">Expertise</a>
                        <a href="#portfolio" class="hover:text-indigo-600 transition-colors">Portfolio</a>
                        <a href="#process" class="hover:text-indigo-600 transition-colors">Process</a>
                        <a href="#testimonials" class="hover:text-indigo-600 transition-colors">Partners</a>
                        <a href="/contact-us" class="hover:text-indigo-600 transition-colors">Contact</a>
                    </div>
                    <button id="menu-toggle" class="lg:hidden w-10 h-10 flex flex-col justify-center gap-1.5 items-end group z-50">
                        <span class="w-8 h-0.5 bg-slate-950 rounded-full group-hover:w-10 transition-all origin-right" id="line-1"></span>
                        <span class="w-10 h-0.5 bg-slate-950 rounded-full" id="line-2"></span>
                        <span class="w-6 h-0.5 bg-slate-950 rounded-full group-hover:w-10 transition-all origin-right" id="line-3"></span>
                    </button>
                </div>
            </nav>

            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu" class="fixed inset-0 bg-white z-40 translate-x-full transition-transform duration-500 flex flex-col items-center justify-center gap-8 lg:hidden">
                <a href="/" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Home</a>
                <a href="#services" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Expertise</a>
                <a href="#portfolio" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Portfolio</a>
                <a href="#process" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Process</a>
                <a href="/contact-us" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Contact</a>
            </div>

            <!-- Hero Section -->
            <section class="relative min-h-screen flex items-center pt-32 pb-20 overflow-hidden bg-slate-950 text-white">
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
                                <button class="bg-white/5 text-white border border-white/10 px-10 py-5 rounded-2xl font-black hover:bg-white/10 transition-all backdrop-blur-md">
                                    Our Expertise
                                </button>
                            </div>
                        </div>
                        <div class="lg:col-span-5 relative hidden lg:block">
                            <div class="relative group">
                                <div class="absolute -inset-4 bg-gradient-to-tr from-indigo-600 to-emerald-600 rounded-[3rem] blur-2xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                                <div class="relative rounded-[3rem] overflow-hidden border border-white/10 shadow-2xl aspect-[4/5]">
                                    <img src="https://picsum.photos/seed/agency-hero/800/1000" alt="Digital Excellence" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 scale-110 group-hover:scale-100">
                                </div>
                                <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-2xl max-w-[240px] border border-slate-100 animate-bounce-slow">
                                    <div class="text-slate-900 font-black text-4xl mb-1 tracking-tighter">98%</div>
                                    <div class="text-slate-500 text-[10px] font-black uppercase tracking-widest leading-tight">Client Satisfaction Rate Across 200+ Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Section -->
            <section id="portfolio" class="py-32 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-8">
                        <div class="max-w-2xl">
                            <h2 class="text-indigo-600 font-black text-sm uppercase tracking-[0.3em] mb-6">Selected Works</h2>
                            <h3 class="text-5xl md:text-7xl font-black text-slate-950 tracking-tighter leading-none">
                                CRAFTING <span class="text-slate-400 italic">DIGITAL</span> <br/>LANDMARKS.
                            </h3>
                        </div>
                        <button class="bg-slate-950 text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-indigo-600 transition-all">View All Projects</button>
                    </div>

                    <div class="grid md:grid-cols-2 gap-12">
                        <div class="group cursor-pointer">
                            <div class="relative aspect-[16/10] rounded-[3rem] overflow-hidden mb-8 border border-slate-100 shadow-xl">
                                <img src="https://picsum.photos/seed/project1/1200/800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-indigo-600/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white font-black text-xl uppercase tracking-widest border-2 border-white px-8 py-3 rounded-full">View Case</span>
                                </div>
                            </div>
                            <h4 class="text-2xl font-black text-slate-950 mb-2">NeoBank Mobile App</h4>
                            <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Fintech / UI/UX / Development</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="relative aspect-[16/10] rounded-[3rem] overflow-hidden mb-8 border border-slate-100 shadow-xl">
                                <img src="https://picsum.photos/seed/project2/1200/800" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-emerald-600/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white font-black text-xl uppercase tracking-widest border-2 border-white px-8 py-3 rounded-full">View Case</span>
                                </div>
                            </div>
                            <h4 class="text-2xl font-black text-slate-950 mb-2">EcoStore E-commerce</h4>
                            <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Retail / Web Design / Shopify</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Process Section -->
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
                        </div>
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

            <!-- Services Section -->
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
                        <div class="md:col-span-8 group relative bg-white rounded-[3rem] p-12 border border-slate-200 overflow-hidden hover:shadow-2xl transition-all duration-500">
                            <div class="relative z-10 max-w-md">
                                <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center mb-8 text-white text-3xl shadow-xl shadow-indigo-200">
                                    <span class="font-black">W</span>
                                </div>
                                <h4 class="text-3xl font-black text-slate-950 mb-6 tracking-tight">Enterprise Web <br/>Engineering</h4>
                                <p class="text-slate-500 text-lg leading-relaxed mb-8">Scalable, high-performance web applications built for the modern era. We specialize in React, Next.js, and complex API integrations.</p>
                                <button class="inline-flex items-center gap-2 text-indigo-600 font-black group-hover:gap-4 transition-all">Explore Service &rarr;</button>
                            </div>
                            <div class="absolute bottom-0 right-0 w-1/2 h-full opacity-10 group-hover:opacity-20 transition-opacity">
                                <img src="https://picsum.photos/seed/web/600/800" class="w-full h-full object-cover" alt="">
                            </div>
                        </div>

                        <div class="md:col-span-4 bg-slate-900 rounded-[3rem] p-12 text-white flex flex-col justify-between border border-white/5 hover:bg-indigo-600 transition-colors duration-500 group">
                            <div>
                                <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center mb-8 text-xl">📱</div>
                                <h4 class="text-2xl font-black mb-4 tracking-tight">Mobile First <br/>Experiences</h4>
                                <p class="text-slate-400 group-hover:text-white/80 transition-colors">Native and cross-platform apps designed for maximum engagement.</p>
                            </div>
                            <div class="pt-8 border-t border-white/10 mt-8">
                                <span class="text-sm font-black uppercase tracking-widest">Learn More</span>
                            </div>
                        </div>

                        <div class="md:col-span-4 bg-white rounded-[3rem] p-12 border border-slate-200 hover:shadow-2xl transition-all duration-500 group">
                            <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center mb-8 text-white text-xl">🎨</div>
                            <h4 class="text-2xl font-black text-slate-950 mb-4 tracking-tight">UI/UX <br/>Design Systems</h4>
                            <p class="text-slate-500 mb-6">User-centric design that balances aesthetic beauty with functional excellence.</p>
                            <button class="text-sm font-black uppercase tracking-widest text-emerald-600">View Case Studies</button>
                        </div>

                        <div class="md:col-span-4 bg-indigo-600 rounded-[3rem] p-12 text-white hover:bg-indigo-700 transition-colors duration-500">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-8 text-xl">🚀</div>
                            <h4 class="text-2xl font-black mb-4 tracking-tight">Growth & <br/>Marketing</h4>
                            <p class="text-indigo-100 mb-6">Data-driven strategies to scale your user base and maximize ROI.</p>
                            <button class="text-sm font-black uppercase tracking-widest text-white">Our Strategy</button>
                        </div>

                        <div class="md:col-span-4 bg-white rounded-[3rem] p-12 border border-slate-200 hover:shadow-2xl transition-all duration-500">
                            <div class="w-12 h-12 bg-slate-950 rounded-xl flex items-center justify-center mb-8 text-white text-xl">🤖</div>
                            <h4 class="text-2xl font-black text-slate-950 mb-4 tracking-tight">AI & Machine <br/>Learning</h4>
                            <p class="text-slate-500 mb-6">Integrating intelligent automation and predictive analytics into your workflow.</p>
                            <button class="text-sm font-black uppercase tracking-widest text-slate-950">Explore AI</button>
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
                    <div class="grid lg:grid-cols-2 gap-24 items-center text-white">
                        <div>
                            <h2 class="text-6xl md:text-8xl font-black text-white leading-none tracking-tighter mb-12">
                                LET'S MAKE <br/>
                                IT <span class="italic text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-emerald-400">REAL</span>.
                            </h2>
                            <p class="text-xl text-slate-400 mb-12 max-w-md font-medium">
                                Ready to transform your digital presence? Send us a message and let's start building the future together.
                            </p>
                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center text-xl border border-white/10">📧</div>
                                    <span class="font-bold">abiramvr9@gmail.com</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center text-xl border border-white/10">📞</div>
                                    <span class="font-bold">6369398051</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-xl p-10 rounded-[3rem] border border-white/10">
                            <form action="/contact-us" method="POST" class="space-y-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Full Name</label>
                                    <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-indigo-500 transition-colors">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Email Address</label>
                                    <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-indigo-500 transition-colors">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-500">Message</label>
                                    <textarea name="message" rows="4" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-indigo-500 transition-colors resize-none"></textarea>
                                </div>
                                <button type="submit" class="w-full bg-indigo-600 text-white py-5 rounded-2xl font-black text-lg hover:bg-indigo-700 transition-all shadow-2xl shadow-indigo-500/20">
                                    Send Message &rarr;
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer id="footer" class="py-32 bg-slate-950 text-white border-t border-white/5">
                <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-12 gap-16">
                    <div class="md:col-span-4">
                        <div class="text-2xl font-black tracking-tighter mb-6">DIGITAL<span class="text-indigo-600">AGENCY</span></div>
                        <p class="text-slate-400 max-w-sm mb-8">Building modern digital experiences that drive growth and innovation.</p>
                    </div>
                    <div class="md:col-span-2">
                        <h4 class="font-bold uppercase tracking-widest text-[10px] mb-6 text-indigo-400">Expertise</h4>
                        <ul class="space-y-4 text-slate-400 font-black text-[10px] uppercase tracking-widest">
                            <li>Web Engineering</li>
                            <li>Mobile Apps</li>
                            <li>UI/UX Design</li>
                            <li>AI Solutions</li>
                        </ul>
                    </div>
                    <div class="md:col-span-2">
                        <h4 class="font-bold uppercase tracking-widest text-[10px] mb-6 text-indigo-400">Company</h4>
                        <ul class="space-y-4 text-slate-400 font-black text-[10px] uppercase tracking-widest">
                            <li>Our Story</li>
                            <li>Careers</li>
                            <li>Press</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                    <div class="md:col-span-4">
                        <h4 class="font-bold uppercase tracking-widest text-[10px] mb-6 text-indigo-400">Newsletter</h4>
                        <div class="flex gap-2">
                            <input type="email" placeholder="Email" class="bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-xs w-full">
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-xl font-black text-[10px] uppercase tracking-widest">Join</button>
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto px-6 pt-12 mt-12 border-t border-white/5 text-center text-slate-500 text-xs font-bold uppercase tracking-widest">
                    <p>&copy; 2026 Digital Agency. All rights reserved.</p>
                </div>
            </footer>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const menuToggle = document.getElementById('menu-toggle');
                    const mobileMenu = document.getElementById('mobile-menu');
                    const line1 = document.getElementById('line-1');
                    const line2 = document.getElementById('line-2');
                    const line3 = document.getElementById('line-3');
                    let isOpen = false;

                    menuToggle.addEventListener('click', () => {
                        isOpen = !isOpen;
                        if (isOpen) {
                            mobileMenu.classList.remove('translate-x-full');
                            line1.style.transform = 'rotate(-45deg) translate(-2px, 6px)';
                            line2.style.opacity = '0';
                            line3.style.transform = 'rotate(45deg) translate(-2px, -6px)';
                        } else {
                            mobileMenu.classList.add('translate-x-full');
                            line1.style.transform = 'none';
                            line2.style.opacity = '1';
                            line3.style.transform = 'none';
                        }
                    });

                    // Close menu on link click
                    const mobileLinks = mobileMenu.querySelectorAll('a');
                    mobileLinks.forEach(link => {
                        link.addEventListener('click', () => {
                            isOpen = false;
                            mobileMenu.classList.add('translate-x-full');
                            line1.style.transform = 'none';
                            line2.style.opacity = '1';
                            line3.style.transform = 'none';
                        });
                    });
                });
            </script>
        </body>
        </html>
    `);
});

app.listen(PORT, '0.0.0.0', () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
