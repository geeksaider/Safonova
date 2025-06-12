<?php
require_once __DIR__ . '/components/skills.php';
require_once __DIR__ . '/components/diplom.php';
require_once __DIR__ . '/components/material.php';
require_once __DIR__ . '/components/event.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Сафонова Наталья Николаевна</title>
    <link href="/style.css" rel="stylesheet">
    <style>
        #achievements-carousel {
            scrollbar-width: thin;
            scrollbar-color: #2f2d2c;
        }

        #achievements-carousel::-webkit-scrollbar {
            height: 6px;
        }
    </style>

</head>

<body class="font-manrope max-w-280 mx-auto ">
    <header class="flex  items-center justify-between py-9 ">
        <h1 class=" font-semibold text-xl tracking-wider">Наталья Николаевна Сафонова</h1>
        <nav class="flex gap-9 font-medium ">
            <a class="lowercase hover:scale-90 cursor-pointer transition-transform duration-150" href="#about">О себе</a>
            <a class="lowercase hover:scale-90 cursor-pointer transition-transform duration-150" href="#edu">Образование</a>
            <a class="lowercase hover:scale-90 cursor-pointer transition-transform duration-150" href="#win">Достижения</a>
            <a class="lowercase hover:scale-90 cursor-pointer transition-transform duration-150" href="#metod">Методички</a>
            <a class="lowercase hover:scale-90 cursor-pointer transition-transform duration-150" href="#events">СОбытия</a>
            <a class="lowercase hover:scale-90 cursor-pointer transition-transform duration-150" href="#gallery">Галерея</a>
        </nav>
    </header>

    <section class=" gap-12  flex bg-primary-500 rounded-[50px]">
        <div class="flex flex-col basis-1/2 gap-20 my-9 ml-9">
            <div class="flex justify-between items-center ">
                <h1 class="font-semibold tracking-wider">Контактная
                    <br>информация
                </h1>
                <div class="flex gap-6 bg-white py-2 px-4 rounded-full">
                    <a class="hover:scale-90 transition-transform duration-300" href="https://www.fa.ru/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 3.75C3.67157 3.75 3 4.42157 3 5.25V18.75C3 19.5784 3.67157 20.25 4.5 20.25H19.5C20.3284 20.25 21 19.5784 21 18.75V5.25C21 4.42157 20.3284 3.75 19.5 3.75H4.5ZM1.5 5.25C1.5 3.59315 2.84315 2.25 4.5 2.25H19.5C21.1569 2.25 22.5 3.59315 22.5 5.25V18.75C22.5 20.4069 21.1569 21.75 19.5 21.75H4.5C2.84315 21.75 1.5 20.4069 1.5 18.75V5.25Z" fill="#21272A" />
                            <path d="M18.6478 3H5.35219C3.64172 3 2.25 4.41328 2.25 6.15V8.25H3C3 7.5 3.75 6.75 4.5 6.75H19.5C20.25 6.75 21 7.5 21 8.25H21.75V6.15C21.75 4.41328 20.3583 3 18.6478 3Z" fill="#21272A" />
                        </svg>
                    </a>
                    <a class="hover:scale-90 transition-transform duration-300" href="https://t.me/Saf_NNM/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20.7097 3.6545C20.7097 3.6545 22.6523 2.897 22.4904 4.73664C22.4365 5.49415 21.9508 8.1454 21.573 11.0131L20.278 19.5079C20.278 19.5079 20.17 20.7524 19.1987 20.9688C18.2274 21.1852 16.7704 20.2113 16.5005 19.9949C16.2847 19.8326 12.4534 17.3977 11.1043 16.2074C10.7265 15.8827 10.2948 15.2334 11.1582 14.476L16.8244 9.06525C17.4719 8.41595 18.1194 6.90095 15.4213 8.7406L7.86655 13.8808C7.86655 13.8808 7.00315 14.4219 5.3843 13.9349L1.87671 12.8527C1.87671 12.8527 0.581605 12.0412 2.79408 11.2295C8.19035 8.68645 14.8278 6.0893 20.7097 3.6545Z" fill="#21272A" />
                        </svg>
                    </a>
                    <a class="hover:scale-90 transition-transform duration-300" href="mailto:NNSafonova@fa.ru">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_2836_17326)">
                                <path d="M24 0H0V24H24V0Z" fill="white" fill-opacity="0.01" />
                                <path d="M2 19.5H22V12V4.5H12H2V12V19.5Z" stroke="#21272A" stroke-width="2" stroke-linejoin="round" />
                                <path d="M2 4.5L12 12L22 4.5" stroke="#21272A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 4.5H2V12" stroke="#21272A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 12V4.5H12" stroke="#21272A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2836_17326">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>

                </div>

            </div>
            <div class="flex flex-col gap-6 justify-center items-center ">
                <h1 class="text-4xl text-left  ">Преподаватель математических дисциплин</h1>
                <div class="text-justify flex flex-col gap-2 text-sm text-secondary-700">
                    <span>
                        Место работы: Колледж Информатики и программирования Финансового университета при Правительстве РФ
                    </span>
                    <span>
                        Преподаваемые дисциплины: ЕН.01 Элементы высшей математики, ОП.10 Численные методы, Ен.03 Теория вероятностей и математическая статистика, МДК 02.03 Математическое моделирование специальность 09.02.07 Информационные системы и программирование, ЕН.01 Математика специальность 10.02.05 Обеспечение информационной безопасности автоматизированных систем
                    </span>
                    <span>
                        Председатель предметно-цикловой комиссии (ПЦК) естественно-научных и математических дисциплин
                    </span>
                    <span> Педагогический стаж – 25 лет.</span>

                </div>
                <a class="bg-secondary-700 py-3 px-10 text-center mt-2 text-sm text-white rounded-full transition-all duration-150 hover:-translate-y-[2px] hover:cursor-pointer" href="#about">узнать больше</a>
            </div>
        </div>
        <img src="assets/preview.jpg" class=" h-[750px] aspect-[6/8] rounded-[50px]"></img>
    </section>

    <section class=" my-12 flex gap-6">
        <img src="assets/personal_skill.jpg" class="h-[320px] basis-1/4 rounded-2xl"></img>
        <div class="rounded-3xl bg-primary-500 basis-1/4 py-8 px-4 flex flex-col justify-between">
            <h3 class="font-medium text-lg text-ptimary-700 mt-6 tracking-wider text-center">
                Личные навыки
            </h3>

            <ul class="flex flex-wrap justify-center gap-2">
                <?php echo getSkill('Креативность', 'black'); ?>
                <?php echo getSkill('Эмпатия ', 'black'); ?>
                <?php echo getSkill('Ответственность', 'black'); ?>
                <?php echo getSkill('Организованность', 'black'); ?>

            </ul>

        </div>
        <img src="assets/proff_skill.jpg" class=" rounded-2xl bg-stone-500 h-[320px] basis-1/4 "></img>
        <div class="rounded-3xl bg-secondary-700 basis-1/4 py-8 px-4 flex flex-col justify-between">
            <h3 class="font-medium text-white text-lg text-center mt-6">
                Профессиональные навыки
            </h3>
            <ul class="flex flex-wrap justify-center gap-2">
                <?php echo getSkill('Экспертность', 'white'); ?>
                <?php echo getSkill('Методика', 'white'); ?>
                <?php echo getSkill('Технологии ', 'white'); ?>
                <?php echo getSkill('Результаты ', 'white'); ?>

            </ul>
        </div>
    </section>

    <h2 class="text-left text-5xl font-semibold tracking-wider my-12 " id='about'>О себе</h2>

    <section class=" gap-5  flex bg-primary-500 rounded-[50px]">
        <img src="assets/about.jpg" class=" h-[750px] aspect-[6/8] rounded-[50px]"></img>
        <div class="flex flex-col basis-1/2  gap-3 mt-12 px-9 text-left ">
            <h3 class="text-[30px] font-medium">Краткая биография</h3>
            <div class="flex flex-col gap-4 mb-4">
                <p>
                    Я преподаватель математических дисциплин со стажем работы 25 лет.
                </p>
                <p>
                    Я убеждена, что математика — это не просто абстрактная наука, а универсальный язык, который открывает двери в мир высоких технологий, научных открытий и успешной карьеры. Она развивает критическое мышление, учит решать сложные задачи и находить нестандартные подходы в любой сфере жизни.
                </p>
                <p class="tracking-wider">
                    <em><b> «Математика — фундамент прогресса!»</b></em>
                </p>

            </div>

            <h3 class="text-[30px] font-medium">
                Принципы преподавания
            </h3>
            <ul class="flex  flex-wrap justify-left gap-3">
                <?php echo getSkill('Глубокое понимание вместо заучивания', 'black'); ?>
                <?php echo getSkill('	Современные методики ', 'black'); ?>
                <?php echo getSkill('Cвязь теории с реальными задачами ', 'black'); ?>
                <?php echo getSkill('Индивидуальный подход к каждому студенту', 'black'); ?>
                <?php echo getSkill('Поддержка и вдохновение на каждом этапе обучения', 'black'); ?>
            </ul>
        </div>
    </section>

    <h2 class="text-left text-5xl font-semibold tracking-wider my-12 " id="edu">Образование</h2>
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6  ">
        <div class="bg-primary-500 rounded-[38px] flex flex-col gap-4 p-8">
            <div class='flex flex-col gap-3'>
                <h3 class="text-xl font-semibold">Ивановский Государственный <br> Университет </h3>
                <ul class='flex'>
                    <?php echo getSkill('1997 г', 'black'); ?>
                </ul>
            </div>
            <div>
                <p>Высшее образование (специалитет).</p>
                <p><b>Специальность:</b> Математик. Преподаватель по специальности "Математика".</p>
            </div>
        </div>
        <div class="bg-primary-500 rounded-[38px] flex flex-col gap-4 p-8 ">
            <div class='flex flex-col gap-3'>
                <h3 class="text-xl font-semibold">Ивановская государственная сельскохозяйственная академия имени Д.К.Беляева </h3>
                <ul class='flex'>
                    <?php echo getSkill('2019 г', 'black'); ?>
                </ul>
            </div>
            <div>
                <p>Аспирантура по направлению подготовки 35.06.04.</p>
                <p><b>Специальность:</b> Исследователь. Преподаватель-исследователь.</p>
            </div>
        </div>
    </section>
    <h2 class="text-left text-5xl font-semibold tracking-wider my-12 " id="win">Достижения</h2>
    <div class="relative">
        <div id="achievements-carousel" class="mt-2 flex snap-x snap-mandatory overflow-x-auto scroll-smooth gap-4 px-4 py-4 cursor-grab">
            <?php
            echo getDiplom('assets/diploms/first_thank.pdf', 'Благодарственное Письмо', 'Финансовый университет', '2023');
            echo getDiplom('assets/diploms/second_thank.pdf', 'Благодарность от ректора', 'Финансовый университет', '2023');
            echo getDiplom('assets/diploms/third_thank.pdf', 'Благодарственное Письмо', 'Финансовый университет', '2023');
            echo getDiplom('assets/diploms/2024_thank.pdf', 'Благодарность', 'Финансовый университет', '2024');
            echo getDiplom('assets/diploms/sertification.pdf', 'Сертификат', 'Финансовый университет', '2025');
            echo getDiplom('assets/diploms/inovation.pdf', 'Повышение квалификации', 'Финансовый университет', '2023');
            echo getDiplom('assets/diploms/oib.pdf', 'Повышение квалификации', 'Финансовый университет', '2025');
            echo getDiplom('assets/diploms/spo_teach.pdf', 'Повышение квалификации', 'Финансовый университет', '2024');
            echo getDiplom('assets/diploms/oib.pdf', 'Повышение квалификации', 'Финансовый университет', '2025');
            echo getDiplom('assets/diploms/cool_teach.pdf', 'Повышение квалификации', 'Финансовый университет', '2025');
            echo getDiplom('assets/diploms/risk.pdf', 'Повышение квалификации', 'Финансовый университет', '2025');
            echo getDiplom('assets/diploms/ai.pdf', 'Повышение квалификации', 'Финансовый университет', '2025');
            echo getDiplom('assets/diploms/e_courses.pdf', 'Повышение квалификации', 'Финансовый университет', '2023');
            ?>
        </div>
    </div>

    <h2 class="text-left text-5xl font-semibold tracking-wider my-12" id="metod">Методические материалы</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6   ">
        <?php echo getMaterial('Методическая разработка открытого урока по теме:', '«Вычислительные методы уточнения корней»', 'https://infourok.ru/metodicheskaya-razrabotka-binarnogo-uroka-po-discipline-op-10-chislennye-metody-7881206.html'); ?>
        <?php echo getMaterial('Методическая разработка открытого урока по теме:', '«Вычисление эмпирических числовых характеристик»', 'https://infourok.ru/metodicheskaya-razrabotka-otkrytogo-uroka-na-temu-statistika-7880614.html'); ?>
        <?php echo getMaterial('Методическая разработка бинарного открытого урока по теме:', '«Вычисление определённого интеграла методом замены переменной. Вычисление интегралов методами численного интегрирования.»', 'https://infourok.ru/metodicheskaya-razrabotka-binarnogo-uroka-vychislenie-opredelennogo-integrala-metodom-zameny-peremennoj-vychislenie-integralov-m-7893209.html'); ?>
        <?php echo getMaterial('Статья ', '«Реализация принципов развивающего обучения на уроках математики» Педагогический альманах, Сборник публикаций №17-2025.', 'https://www.pedalmanac.ru/472889'); ?>
        <?php echo getMaterial('Методическая разработка по теме:', ' «Вычисление эмпирических числовых характеристик», Педагогический альманах,  Сборник публикаций №17-2025.', 'https://www.pedalmanac.ru/472905'); ?>
    </div>

    <h2 class="text-left text-5xl font-semibold tracking-wider my-12" id="events">События</h2>

    <div class="relative max-w-4xl mx-auto">
        <div id="events-carousel" class="overflow-hidden">
            <div class="flex transition-transform duration-500">
                <?php echo getEvent(
                    '18.05.2023',
                    'Всероссийская научно-практическая конференция «Новые реалии СПО: ценности, подходы, тенденции»',
                    '18 мая 2023 г. я выступила на Всероссийской научно-практической конференции «Новые реалии СПО: ценности, подходы, тенденции» с темой доклада «Современные технологии в обучении математике. ТРИЗ (из опыта работы предметной цикловой комиссии (ПЦК) математических дисциплин)». ',
                    'none',
                    'none',
                    'assets/pres_18.pptx'
                );
                echo getEvent(
                    '08.02.2024',
                    'Выступление на открытом заседании предметно цикловых комиссий ',
                    '08.02.2024 г я приняла участие в открытом задевании предметно цикловых комиссий
                    Тема доклада: «Применение Excel на уроках математики».
                    ',
                    'none',
                    'none',
                    'none'
                );
                echo getEvent(
                    '17.05.2024',
                    'Всероссийская научно-практическая конференция «Трансформация СПО: Взгляд с будущее» ',
                    '17 мая 2024 г. Сафонова Н.Н. и  Зорина О.А. выступили на Всероссийской научно-практической конференции «Трансформация СПО: Взгляд с будущее» с темой доклада «Бинарный урок как средство повышения качества образовательного процесса и формирования профессиональных компетенций у студентов». В рамках конференции был представлен видеоролик преподавателей предметно-цикловой комиссии (ПЦК) естественно-научных и математических дисциплин «Мы-мастера»',
                    'none',
                    'none',
                    'assets/pres_17.pptx',
                    'https://disk.yandex.ru/i/S-xY5HAJS5oTvQ'
                );
                echo getEvent(
                    '24.04.2024',
                    'Открытые уроки',
                    'Cовместно с Зориной О.А. проведен бинарный открытый урок по теме: «Вычисление определенного интеграла методами замены переменной. Вычисление определенных интегралов методами численного интегрирования».',
                    'assets/open.png',
                    'none',
                    'none'
                );
                echo getEvent(
                    '21.10.2025 ',
                    'Междисциплинарный квест «День числа Авогадро»',
                    'в нашем колледже проводился междисциплинарный квест для студентов 1 курса. Студенты активно погружались в мир науки, проходя 5 тематических станций, каждая из которых была посвящена разным предметам: физике, математике, химии, географии и информатике. На каждой станции студентов ждали различные задачи: от составления головоломок до экспериментов с атомами и молекулами и исследованием электрических цепей. Квест подарил ребятам возможность применить свои знания на практике и расширить кругозор.',
                    'assets/quest_temp.jpg',
                    'none',
                    'none'
                );
                echo getEvent(
                    '08.02.2025',
                    'Фестиваль Науки',
                    'В рамках Дня Российской науки проводился конкурс «Флешмоб с ученым». Студенты колледжа посетили и сфотографировались с памятниками, мемориальными табличками и бюстами, посвященными ученым, внесшим вклад в развитие российской науки.',
                    'assets/flashmob.jpg',
                    'none',
                    'none'
                );
                echo getEvent(
                    '14.03.2025',
                    'День числа Пи',
                    'Каждый год 14 марта в Колледже информатики и программирования проводится математический праздник «День числа Пи». В этот день студенты решают математические головоломки и задачи, Пи-ребусы и даже сочиняют стихи о числе Пи.',
                    'assets/pi.jpg',
                    'none',
                    'none'
                );
                echo getEvent(
                    '-',
                    'Математическая викторина «Своя игра»',
                    'Преподаватели ПЦК естественно-научных и математических дисциплин ежегодно проводят захватывающую викторину по математике «Своя игра». ',
                    'assets/my_game.jpg',
                    'none',
                    'none'
                ); ?>
            </div>

            <button id="events-prev" class="absolute -left-12 top-1/2 -translate-y-1/2 bg-primary-500/80 hover:bg-secondary-700 text-secondary-700 hover:text-white rounded-full p-3 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="events-next" class="absolute -right-12 top-1/2 -translate-y-1/2 bg-primary-500/80 hover:bg-secondary-700 text-secondary-700 hover:text-white rounded-full p-3 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div class="flex justify-center  mt-6 gap-2">
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="0"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="1"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="2"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="3"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="4"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="5"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="6"></div>
                <div class="events-indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300" data-index="7"></div>
            </div>
        </div>

    </div>
    <h2 class="text-left text-5xl font-semibold tracking-wider my-12">Внеучебеная деятельность</h2>

    <div class="flex gap-20">
        <div class="bg-primary-500 rounded-[38px] flex flex-col justify-center gap-4 p-8 basis-1/2">

            <h3 class="text-xl font-semibold mb-4">
                Всероссийская олимпиада по математике и алгоритмике.</h3>
            <p class="text-gray-600 mb-6"> В олимпиаде приняли участие 324 студента из разных колледжей, из них студенты нашего колледжа стали призерами и получили дипломы 2 и 3 степени, а также грамоты за участие.
            </p>
            <a href="' . $photoLink . ' " class="px-6 py-1 bg-secondary-700 text-white rounded-full flex w-fit items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Дипломы и грамоты
            </a>

        </div>
        <div class="bg-stone-800 h-[400px] aspect-[1.5/1] rounded-[50px]"></div>
    </div>

    <h2 class="text-left text-5xl font-semibold tracking-wider my-12" id="gallery">Фотогалерея</h2>

    <?php include __DIR__ . '/components/gallery.php'; ?>
    <div class="my-12"></div>

    <script src="script.js"></script>
</body>

</html>