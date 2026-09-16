<section id="contact" class="py-24 bg-white relative overflow-hidden">
    
    <!-- Background Element -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/2 w-[40rem] h-[40rem] bg-primary-50 rounded-full blur-3xl opacity-60"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl flex flex-col lg:flex-row">
            
            <!-- Left: CTA Text -->
            <div class="lg:w-5/12 p-10 lg:p-16 flex flex-col justify-center relative overflow-hidden text-white">
                <div class="absolute inset-0 bg-primary-900/20 z-0"></div>
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary-500/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 z-0"></div>
                
                <div class="relative z-10">
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-6 font-outfit leading-tight">
                        Ada Proses Bisnis yang Ingin Anda Digitalisasi?
                    </h2>
                    <p class="text-slate-300 text-lg leading-relaxed mb-10">
                        Ceritakan masalah atau proses bisnis Anda kepada kami. Kami akan membantu menemukan solusi digital yang paling sesuai dan efisien.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center text-slate-300">
                            <svg class="w-6 h-6 mr-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            cs@layangdigital.com
                        </div>
                        <div class="flex items-center text-slate-300">
                            <svg class="w-6 h-6 mr-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                            0821-1692-5851 (WhatsApp)
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right: Form -->
            <div class="lg:w-7/12 bg-white p-10 lg:p-16">
                <h3 class="text-2xl font-bold text-slate-900 mb-6 font-outfit">Mari Diskusikan Project Anda</h3>
                
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-center">
                        <svg class="w-5 h-5 mr-3 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow" required>
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-slate-700 mb-1">Nama Perusahaan <span class="text-red-500">*</span></label>
                            <input type="text" id="company" name="company" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow" required>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="whatsapp" class="block text-sm font-medium text-slate-700 mb-1">WhatsApp <span class="text-red-500">*</span></label>
                            <input type="tel" id="whatsapp" name="whatsapp" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow">
                        </div>
                    </div>
                    
                    <div>
                        <label for="business_type" class="block text-sm font-medium text-slate-700 mb-1">Jenis Bisnis <span class="text-red-500">*</span></label>
                        <input type="text" id="business_type" name="business_type" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow" required>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700 mb-1">Ceritakan kebutuhan / masalah Anda <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow" required></textarea>
                    </div>
                    
                    <div>
                        <label for="budget" class="block text-sm font-medium text-slate-700 mb-1">Estimasi Budget</label>
                        <select id="budget" name="budget" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-shadow bg-white">
                            <option value="Belum tahu">Belum tahu</option>
                            <option value="< Rp5 juta">&lt; Rp5 juta</option>
                            <option value="Rp5–10 juta">Rp5–10 juta</option>
                            <option value="Rp10–25 juta">Rp10–25 juta</option>
                            <option value="Rp25–50 juta">Rp25–50 juta</option>
                            <option value="> Rp50 juta">&gt; Rp50 juta</option>
                        </select>
                    </div>
                    
                    <div class="pt-4 flex flex-col sm:flex-row gap-4">
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center rounded-lg px-8 py-3.5 font-semibold bg-primary-600 text-white hover:bg-primary-700 hover:-translate-y-0.5 shadow-md hover:shadow-lg transition-all duration-200">
                            Kirim Konsultasi
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>
</section>
