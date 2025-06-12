 <?php
    $galleryItems = [
        [
            'id'    => '1',
            'title' => 'День числа Авагардо',
            'imgUrl' => 'q1'
        ],
        [
            'id'    => '2',
            'title' => 'День числа Авагардо',
            'imgUrl' => 'q2'
        ],
        [
            'id'    => '3',
            'title' => 'День числа Авагардо',
            'imgUrl' => 'q3'
        ],
        [
            'id'    => '4',
            'title' => 'День числа Авагардо',
            'imgUrl' => 'q4'
        ],
        [
            'id'    => '1',
            'title' => 'Математическая викторина «Своя игра»',
            'imgUrl' => 'g1'
        ],
        [
            'id'    => '2',
            'title' => 'Математическая викторина «Своя игра»',
            'imgUrl' => 'g2'
        ],
        [
            'id'    => '3',
            'title' => 'Математическая викторина «Своя игра»',
            'imgUrl' => 'g3'
        ],
        [
            'id'    => '4',
            'title' => 'Математическая викторина «Своя игра»',
            'imgUrl' => 'g4'
        ],
        [
            'id'    => '5',
            'title' => 'Математическая викторина «Своя игра»',
            'imgUrl' => 'g5'
        ],
        [
            'id'    => '11',
            'title' => 'Поездка в ОИЯИ г.Дубна',
            'imgUrl' => 't1'
        ],
        [
            'id'    => '12',
            'title' => 'Моя группа 2 ИСИП 1023',
            'imgUrl' => 'mg1'
        ],
        [
            'id'    => '13',
            'title' => 'Всероссийский съезд учителей и преподавателей математики',
            'imgUrl' => 'p2'
        ],
    ];
    ?>


 <div class="grid gap-8 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
     <?php foreach ($galleryItems as $item) : ?>
         <div class="relative group cursor-pointer active:scale-100 hover:scale-[1.02] transition-transform">
             <img src="assets/photo_gallery/<?php echo $item['imgUrl']; ?>.jpg" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-full bg-primary-500 rounded-[16px] z-10 transition relative group-hover:brightness-105">
             <div class="absolute duration-200 inset-0 group-hover:-inset-2 opacity-0 group-hover:opacity-100 rounded-[16px] bg-primary-500  transition"></div>
             <div class="relative mt-2  z-10">
                 <span class="flex text-sm text-secondary-700/50 group-hover:text-secondary-700 transition-colors">
                     <?php echo htmlspecialchars($item['title']); ?>
                 </span>

             </div>

         </div>
     <?php endforeach; ?>
 </div>