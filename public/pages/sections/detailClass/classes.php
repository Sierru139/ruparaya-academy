

<?php foreach ($activeClass as $activeClasses) { ?>
    <header class="">
    <div class="h-fit relative overflow-hidden centered-xy">
        <img class="img-cover object-top -z-10" src="<?= $activeClasses["banner"]?>" alt="">
        <div class="max-w-[525px] absolute z-20 text-white text-center">
            <h3 data-aos="fade-up" data-aos-duration="1100" class="md:text-[48px] font-bold text-[#273F5A] mb-4 leading-snug text-stroke"><?= $activeClasses["title"] ?></h3>
            <h3 data-aos="fade-up" data-aos-duration="1500"><a href="../index.html">Beranda > </a><a href="./listing.html">Program/Kelas > </a><a href="#" class="text-[#EDC423]">Kelas Detail</a></h3>
        </div>
    </div>
</header>

<section class="container-cs-w">
    <div class="flex lg:flex-row gap-x-4 flex-col lg:items-start px-4 py-5">
        <div class="flex flex-col rounded-none lg:w-[70%]">
            <article class="flex flex-col items-start px-5 py-6 w-full bg-white rounded-3xl max-md:px-5 max-md:max-w-full">

            <header class="flex flex-wrap items-center gap-5 justify-between self-stretch font-semibold max-md:max-w-full">
                <h1 class="text-3xl text-[#273F5A] max-md:max-w-full"><?= $activeClasses["title"] ?></h1>
                <span class="self-start px-4 py-px mt-2.5 text-base text-white rounded-md bg-[#5386C0]"><?= $activeClasses["type"] ?></span>
            </header>

            <?php foreach ($activeClasses["expl"] as $value) { ?>
            <p class="mt-7 text-base text-stone-500 max-md:max-w-full"><?= $value ?></p>
            <?php } ?>
            
            <h2 class="mt-7 text-3xl font-semibold text-slate-700">Tools yang di gunakan :</h2>

            <?php foreach ($activeClasses["tools"] as $key => $value) { ?>
            <div class="flex gap-6 mt-5 text-xl font-medium text-slate-700">
                <span class="basis-auto"><?= $key ?></span>
                <!-- <img loading="lazy" src="./assets/details/blender-icon.png" class="object-contain shrink-0 self-start aspect-[1.17] w-[34px]" alt="Blender logo" /> -->
            </div>
            <p class="mt-4 text-base text-stone-500 max-md:max-w-full"><?= $value ?></p>
            <?php } ?>

            <h2 class="mt-7 text-3xl font-semibold text-slate-700">Lokasi Kelas :</h2>
            <div class="flex relative flex-col flex-wrap gap-1.5 items-start self-stretch px-7 pt-96 pb-4 mt-8 text-base text-white rounded-md min-h-[477px] max-md:px-5 max-md:pt-24">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.467545816472!2d119.42170527426846!3d-5.143194652003857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee30045e23b87%3A0xb428b7d955e91c29!2sPT%20Rupa%20Raya%20Indonesia!5e1!3m2!1sid!2sid!4v1724295033623!5m2!1sid!2sid" class="object-cover absolute inset-0 size-full rounded-2xl shadow-inner-md  " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7474d593853be44913854e05e4d5857087c17491bd8fb7a5c8ba0f9ff0cde1c5?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" class="object-contain shrink-0 mt-1 w-3.5 aspect-[0.78]" alt="Location pin icon" />
            </div>
            </article>
        </div>

        <div class="flex flex-col rounded-none lg:w-[30%]">
            <div class="flex flex-col justify-center items-center px-4 rounded-3xl shadow-lg aspect-square bg-[linear-gradient(257deg,#273F5A_-50.35%,#5386C0_142.97%)]">
                <img loading="lazy" src="<?= $activeClasses["image"] ?>" alt="Course preview image" class="object-contain rounded-xl">
            </div>
            <img loading="lazy" src="<?= $activeClasses["details-img"] ?>" alt="Course details image" class="object-contain mt-2.5 rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.25)]">
            <article class="flex flex-col items-center pt-5 mt-2.5 text-base bg-white rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.25)] text-neutral-500">
                <?php foreach ($activeClasses['details'] as $key => $value) { ?>
                <div class="flex gap-5 px-5 justify-between w-full leading-loose max-w-[361px]">
                    <p><?= $key?></p>
                    <p><?= $value?></p>
                </div>
                <?php } ?>
                <div class="relative overflow-hidden flex flex-col justify-center rounded-b-3xl self-stretch px-10 py-6 mt-5 w-full text-xl font-semibold text-white rounded-none bg-[#5386C0]">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScWQS2TQw8ZG3zEOZ57wRKU5pg-BVj5zT-NS4kae-MesmSRlg/viewform" target="_blank" class="btn px-16 py-3.5 rounded-xl z-10 border border-white border-solid text-center">Daftar Sekarang</a>
                    <div class="w-32 h-32 absolute -bottom-[75%] -left-[2%] bg-white opacity-10 rounded-full flex items-center justify-center">                        
                    </div>
                    <div class="w-28 h-28 absolute -bottom-[10%] -left-[10%] bg-white opacity-10 rounded-full flex items-center justify-center">                        
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<?php } ?>
