<?php
function getSkill(string $skillName, string $style)
{
    $color = $style == 'white' ? 'white' : 'secondary-700';
    $ringColor = $style == 'white' ? 'ring-white' : 'ring-secondary-700';


    return '<li class="ring rounded-full transition-all duration-150  hover:-translate-y-px max-md:text-xs'
        . ' ' . $ringColor
        . ' text-' . $color
        . ' py-px px-4 lowercase w-fit">'
        . htmlspecialchars($skillName) . '</li>';
}
