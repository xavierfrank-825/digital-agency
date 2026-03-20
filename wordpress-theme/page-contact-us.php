<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

<main id="primary" class="site-main bg-white pt-32">
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
                        
                        <?php if ( isset($_GET['contact_success']) && $_GET['contact_success'] == '1' ) : ?>
                            <div class="bg-emerald-50 border border-emerald-100 text-emerald-700 px-8 py-6 rounded-2xl mb-10 font-bold">
                                Thank you! Your message has been sent successfully. We'll get back to you soon.
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="space-y-8">
                            <input type="hidden" name="action" value="submit_contact_form">
                            <?php wp_nonce_field( 'contact_form_nonce', 'contact_form_nonce_field' ); ?>
                            
                            <div class="grid md:grid-cols-2 gap-8">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Full Name</label>
                                    <input type="text" name="contact_name" placeholder="John Doe" required class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Email Address</label>
                                    <input type="email" name="contact_email" placeholder="john@example.com" required class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Subject</label>
                                <select name="contact_subject" class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors appearance-none">
                                    <option value="New Project">New Project Inquiry</option>
                                    <option value="Partnership">Partnership Opportunity</option>
                                    <option value="General">General Question</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Message</label>
                                <textarea name="contact_message" rows="6" placeholder="Tell us about your project..." required class="w-full bg-white border border-slate-200 rounded-2xl px-6 py-4 focus:outline-none focus:border-indigo-600 transition-colors resize-none"></textarea>
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

<?php get_footer(); ?>
