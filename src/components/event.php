<?php
function getEvent(string $data, string $header, string $description, string $preview, string $photoLink, string $presentationLink, string $video = 'none'): string
{
    $photoLink == 'none' ? $stylePhotoLink = 'hidden' : $stylePhotoLink = '';
    $preview == 'none' ? $stylePreview = 'hidden' : $stylePreview = '';
    $presentationLink == 'none' ? $stylePresentation = 'hidden' : $stylePresentation = '';
    $video == 'none' ? $styleVideo = 'hidden' : $styleVideo = '';
    return  '<div class="min-w-full flex justify-center items-center px-2 ">
                    <div class="bg-primary-500 rounded-[38px] p-8">
                        <div class="flex flex-col md:flex-row gap-8">
                            <div class="min-w-1/3 flex items-center justify-center ' . $stylePreview . '">
                            <img class="bg-secondary-700 rounded-[28px] " src="' . htmlspecialchars($preview) . '" alt="Event Preview">     
                                </img>
                            </div>
                                

                            <div class="">
                                <div class="flex items-center mb-4 text-secondary-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>' . htmlspecialchars($data) . '</span>
                                </div>
                                <h3 class="text-2xl font-semibold mb-4">' . htmlspecialchars($header) . '</h3>
                                <p class="mb-6">' . htmlspecialchars($description) . '</p>
                                <div class="flex flex-wrap gap-4">
                                    <a href="' . $photoLink . ' " class="px-6 py-1 bg-secondary-700 text-white rounded-full flex items-center ' . $stylePhotoLink . '">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Фото
                                    </a>
                                    <a href=" ' . $presentationLink . ' " class="px-6 py-1 border border-secondary-700 text-secondary-700 rounded-full text-sm flex items-center  ' . $stylePresentation . '" download>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Презентация
                                    </a>
                                    <a href="' . $video . ' " class="px-6 py-1 bg-secondary-700 text-white rounded-full flex items-center ' . $styleVideo . '">
                                       <svg xmlns="http://www.w3.org/2000/svg"  class="h-4 w-4 mr-2" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m160-800 80 160h120l-80-160h80l80 160h120l-80-160h80l80 160h120l-80-160h120q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800Zm0 240v320h640v-320H160Zm0 0v320-320Z"/></svg>
                                        Видео
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
}
