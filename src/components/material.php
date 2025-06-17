<?php
function getMaterial(string $header, string $description, string $link)
{

    return ' <div class="bg-primary-500 rounded-[38px] p-8 flex flex-col justify-between transition-all duration-300 hover:shadow  ">
            <div>
                <h3 class="text-xl font-semibold mb-4">'
        . htmlspecialchars($header) . '</h3>
                <p class="text-gray-600 mb-6">'
        . htmlspecialchars($description) . '</p>
            </div>
            <a href="' . $link
        . '" class="ring rounded-full flex w-fit items-center gap-2 transition-all duration-150 group ring-secondary-700 text-secondary-700 py-px px-4 lowercase">
                 <span>Перейти по ссылке</span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
         </div>';
}
