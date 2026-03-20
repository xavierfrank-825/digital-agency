    <footer class="py-32 bg-slate-950 text-white border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-12 gap-16">
            <div class="md:col-span-4">
                <div class="text-3xl font-black tracking-tighter mb-8">DIGITAL<span class="text-indigo-600">AGENCY</span></div>
                <p class="text-slate-400 max-w-sm mb-10 text-lg leading-relaxed">Building modern digital experiences that drive growth and innovation for the world's most ambitious brands.</p>
                <div class="flex gap-6">
                    <a href="#" class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center hover:bg-indigo-600 transition-all cursor-pointer border border-white/10">FB</a>
                    <a href="#" class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center hover:bg-indigo-600 transition-all cursor-pointer border border-white/10">TW</a>
                    <a href="#" class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center hover:bg-indigo-600 transition-all cursor-pointer border border-white/10">IG</a>
                </div>
            </div>
            <div class="md:col-span-2">
                <h4 class="font-black uppercase tracking-[0.3em] text-[10px] mb-8 text-indigo-400">Expertise</h4>
                <ul class="space-y-4 text-slate-400 font-black text-[10px] uppercase tracking-widest">
                    <li><a href="#" class="hover:text-white transition-colors">Web Engineering</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Mobile Apps</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">UI/UX Design</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">AI Solutions</a></li>
                </ul>
            </div>
            <div class="md:col-span-2">
                <h4 class="font-black uppercase tracking-[0.3em] text-[10px] mb-8 text-indigo-400">Company</h4>
                <ul class="space-y-4 text-slate-400 font-black text-[10px] uppercase tracking-widest">
                    <li><a href="#" class="hover:text-white transition-colors">Our Story</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Press</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div class="md:col-span-4">
                <h4 class="font-black uppercase tracking-[0.3em] text-[10px] mb-8 text-indigo-400">Newsletter</h4>
                <p class="text-slate-400 text-sm mb-6">Stay updated with the latest digital trends and insights.</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Email Address" class="bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm w-full focus:outline-none focus:border-indigo-500">
                    <button class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest">Join</button>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 pt-16 mt-16 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8 text-slate-600 text-[10px] font-black uppercase tracking-[0.2em]">
            <p>&copy; <?php echo date('Y'); ?> Digital Agency. All rights reserved.</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
