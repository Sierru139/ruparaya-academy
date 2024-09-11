<?php 

$classdata = file_get_contents("./pages/data/class.json");
$class = json_decode($classdata, true);

?>


<section  class="flex flex-col items-center my-10">
    <div class="max-md:mx-4">
        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="z-10 mt-0 text-3xl font-extrabold text-slate-700">
            <span class="text-[#5386C0]">Kursus/Kelas</span>
            <span class="text-[#273F5A]">Terbaru</span>
        </h2>
        <p data-aos="fade-up" data-aos-duration="1200" data-aos-once="true" class="mt-3 text-base text-neutral-500">
            Pilih Kelas Yang Anda Butuhkan Untuk Belajar
        </p>
    </div>
    <div class="flex flex-wrap gap-4 items-stretch justify-center self-stretch mt-10 max-md:mt-10">
        <?php foreach ($class as $classes) { ?>
        <div class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
            <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="../public/assets/pg1/banner-uiux.jpg" alt="Course image"/>
            <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                <p class="font-semibold text-sm text-[#EDC423]"><?= $classes["date"] ?></p>
                <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
            </div>
            <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                <img class="object-cover absolute inset-0 size-full" loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt=""/>
                <a href="./pages/detailclass-uiux.html" class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline"><?= $classes["title"] ?></a>
                <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar mengenal dasar UI/UX, Hands-on Experience, Networking Opportunites. Cocok untuk pemula.</p>
            </div>
            <div class="flex px-5 items-center gap-4">
                <div>
                    <img class="w-[60px]" src="../public/assets/pg1/profile-instructor-uiux.jpg" alt="">
                </div>
                <div>
                    <p class="font-extrabold text-[#273F5A]">Abd. Rahim Saleh</p>
                    <p class="relative text-sm leading-5 text-neutral-600">UI/UX Designer at Kalla</p>
                </div>
            </div>
            <div class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                <div class="flex flex-col font-bold">
                    <p class="text-2xl text-white">Gratis</p>
                </div>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMPhFRoiJwAu1-sWDk6QjSWMK6_UBkVwHxaolK__sbkRn0Ew/viewform" target="_blank" class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                <div class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center"></div>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="mt-10">
        <a href="listing.php" class="text-white py-3 px-5 rounded-md bg-[#5386C0]">Kelas Lainnya</a>
    </div>
</section>