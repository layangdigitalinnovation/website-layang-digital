@props([
    'question',
    'answer',
])

<details class="group bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-slate-900 font-outfit text-lg focus:outline-none focus-visible:bg-slate-50">
        <span class="pr-6">{{ $question }}</span>
        <span class="transition-transform duration-300 group-open:-rotate-180 flex-shrink-0 text-primary-500">
            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" w="24" xmlns="http://www.w3.org/2000/svg">
                <polyline points="6 9 12 15 18 9" />
            </svg>
        </span>
    </summary>
    <div class="px-6 pb-6 text-slate-600 leading-relaxed text-sm sm:text-base border-t border-slate-100 pt-4 bg-slate-50">
        {{ $answer }}
    </div>
</details>

<style>
details > summary::-webkit-details-marker {
  display: none;
}
</style>
