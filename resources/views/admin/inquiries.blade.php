@extends('layouts.admin')

@section('title', 'Project Inquiries')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="p-6 border-b border-slate-200">
        <h3 class="font-bold text-slate-800 font-outfit">Semua Project Inquiries</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                    <th class="p-4 font-medium">Nama / Perusahaan</th>
                    <th class="p-4 font-medium">Kontak</th>
                    <th class="p-4 font-medium">Detail Project</th>
                    <th class="p-4 font-medium">Pesan</th>
                    <th class="p-4 font-medium">Tanggal</th>
                    <th class="p-4 font-medium text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse($inquiries as $inquiry)
                <tr x-data="{ showModal: false }" class="hover:bg-slate-50 transition-colors align-top">
                    <td class="p-4 whitespace-nowrap">
                        <div class="font-bold text-slate-800">{{ $inquiry->name }}</div>
                        <div class="text-slate-500 text-xs">{{ $inquiry->company }}</div>
                    </td>
                    <td class="p-4 whitespace-nowrap">
                        <div class="text-slate-700 flex items-center mb-1">
                            <svg class="w-4 h-4 mr-1 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->whatsapp) }}" target="_blank" class="hover:text-primary-600 hover:underline">{{ $inquiry->whatsapp }}</a>
                        </div>
                        <div class="text-slate-500 text-xs flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            {{ $inquiry->email ?? '-' }}
                        </div>
                    </td>
                    <td class="p-4 whitespace-nowrap">
                        <div class="text-slate-700 font-medium">{{ $inquiry->business_type }}</div>
                        <div class="mt-1">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                Budget: {{ $inquiry->budget }}
                            </span>
                        </div>
                    </td>
                    <td class="p-4 min-w-[250px] max-w-[300px]">
                        <p class="text-slate-600 line-clamp-2 text-xs leading-relaxed">
                            {{ $inquiry->message }}
                        </p>
                    </td>
                    <td class="p-4 text-slate-500 whitespace-nowrap">
                        {{ $inquiry->created_at->format('d M Y, H:i') }}
                    </td>
                    <td class="p-4 text-center whitespace-nowrap">
                        <button @click="showModal = true" class="inline-flex items-center justify-center p-2 rounded-lg text-primary-600 hover:bg-primary-50 hover:text-primary-700 transition-colors tooltip-trigger" title="Lihat Detail Pesan">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </button>
                        
                        <!-- Modal Detail -->
                        <template x-teleport="body">
                            <div x-show="showModal" class="fixed inset-0 z-[100] overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;">
                                <!-- Backdrop -->
                                <div x-show="showModal" 
                                     x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                     x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                     class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" @click="showModal = false"></div>

                                <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                                    <!-- Modal Panel -->
                                    <div x-show="showModal" 
                                         x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                         x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                         class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 w-full sm:max-w-2xl border border-slate-100">
                                        
                                        <!-- Header -->
                                        <div class="px-6 py-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                                            <h3 class="text-lg font-bold text-slate-900 font-outfit flex items-center gap-2" id="modal-title">
                                                <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                Detail Project Inquiry
                                            </h3>
                                            <button @click="showModal = false" class="text-slate-400 hover:text-slate-600 transition-colors p-1 rounded-md hover:bg-slate-100 outline-none">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                            </button>
                                        </div>

                                        <!-- Body -->
                                        <div class="px-6 py-6 space-y-6">
                                            <!-- Info Grid -->
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-slate-50 p-5 rounded-xl border border-slate-100">
                                                <div>
                                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Pengirim</p>
                                                    <p class="font-semibold text-slate-900">{{ $inquiry->name }}</p>
                                                    <p class="text-sm text-slate-600">{{ $inquiry->company }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Project & Budget</p>
                                                    <p class="font-semibold text-slate-900">{{ $inquiry->business_type }}</p>
                                                    <p class="text-sm text-emerald-600 font-medium">{{ $inquiry->budget }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">WhatsApp</p>
                                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->whatsapp) }}" target="_blank" class="text-sm font-semibold text-primary-600 hover:underline flex items-center gap-1">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                                        {{ $inquiry->whatsapp }}
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Email</p>
                                                    <a href="mailto:{{ $inquiry->email }}" class="text-sm font-semibold text-slate-700 hover:text-primary-600 flex items-center gap-1">
                                                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                        {{ $inquiry->email ?? '-' }}
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Full Message -->
                                            <div>
                                                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-3">Detail Kebutuhan / Masalah</p>
                                                <div class="bg-white p-5 rounded-xl border border-slate-200 text-slate-700 text-sm leading-relaxed whitespace-pre-wrap shadow-inner">{{ $inquiry->message }}</div>
                                            </div>
                                        </div>

                                        <!-- Footer -->
                                        <div class="bg-slate-50 px-6 py-4 border-t border-slate-100 flex items-center justify-between sm:flex-row-reverse">
                                            <button type="button" @click="showModal = false" class="mt-3 inline-flex w-full justify-center rounded-lg bg-white px-5 py-2.5 text-sm font-semibold text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 hover:bg-slate-50 sm:mt-0 sm:w-auto transition-colors">Tutup</button>
                                            <span class="text-xs text-slate-500 hidden sm:block">Diterima pada: {{ $inquiry->created_at->format('d M Y, H:i') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-8 text-center text-slate-500">
                        Belum ada project inquiry yang masuk.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($inquiries->hasPages())
    <div class="p-4 border-t border-slate-200">
        {{ $inquiries->links() }}
    </div>
    @endif
</div>
@endsection
