<?php
function getDiplom(string $pdfUrl, string $title, string $university, string $year): string
{
  $u = htmlspecialchars($pdfUrl, ENT_QUOTES);
  return <<<HTML
 
<a 
  href="$u" 
  target="_blank" 
  rel="noopener noreferrer"
  class="
    block w-80 shrink-0 snap-center
    bg-primary-500  rounded-[25px]
    overflow-hidden
    transition-transform duration-200
    hover:shadow-sm
  "
>
  <div class="relative w-full h-48 bg-[#2f2d2c] overflow-hidden group">
     <iframe
      src="$u#page=1&view=FitH"
      class="
        absolute top-1/2 left-1/2
        w-[110%] h-[110%]
        -translate-x-1/2 -translate-y-1/2
        border-0 pointer-events-none
      "
      loading="lazy"
    ></iframe>
    <div class="absolute bottom-3 right-3 bg-[#e9eae4] text-[#2f2d2c] text-xs px-3 py-1 rounded-full flex items-center gap-1.5">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
      </svg>
      PDF
    </div>
  </div>
  <div class="p-5">
    <h3 class="text-lg font-semibold text-[#2f2d2c] mb-2 line-clamp-2 leading-tight">
      {$title}
    </h3>
    <div class="flex items-center gap-2 mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#2f2d2c]/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
      </svg>
      <p class="text-sm text-[#2f2d2c]/80 truncate">
        {$university}
      </p>
    </div>
    <div class="flex items-center gap-2 text-[#2f2d2c]/70">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <span class="text-sm">
        {$year} год
      </span>
    </div>
  </div>
</a>
HTML;
}
