<?php 

$num = $_GET['card'];


$classdata = file_get_contents("./pages/data/guru.json");
$class = json_decode($classdata, true);


?>
<section class="container-cs-w">
    <div class="flex lg:flex-row gap-x-4 flex-col lg:items-start px-4 py-5">
        <div class="flex flex-col rounded-none lg:w-[70%]">
            <article class="flex flex-col items-start px-5 py-6 w-full bg-white rounded-3xl max-md:px-5 max-md:max-w-full">

            <header class="flex flex-wrap items-center gap-5 justify-between self-stretch font-semibold max-md:max-w-full">
                <h1 class="text-3xl text-[#273F5A] max-md:max-w-full"><?= $class[$num]["title"] ?></h1>
                <span class="self-start px-4 py-px mt-2.5 text-base text-white rounded-md bg-[#5386C0]"><?= $class[$num]["type"] ?></span>
            </header>

            <?php foreach ($class[$num]["expl"] as $value) { ?>
            <p class="mt-7 text-base text-stone-500 max-md:max-w-full"><?= $value ?></p>
            <?php } ?>
            
            <h2 class="mt-7 text-3xl font-semibold text-slate-700">Tools yang di gunakan :</h2>

            <?php foreach ($class[$num]["tools"] as $key => $value) { ?>
            <div class="flex gap-6 mt-5 text-xl font-medium text-slate-700">
                <span class="basis-auto"><?= $key ?></span>
                <img loading="lazy" src="../assets/details/blender-icon.png" class="object-contain shrink-0 self-start aspect-[1.17] w-[34px]" alt="Blender logo" />
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
                <img loading="lazy" src="<?= $class[$num]["image"] ?>" alt="Course preview image" class="object-contain rounded-xl">
            </div>
            <img loading="lazy" src="../assets/details/scedule-3darchitectural.jpg" alt="Course details image" class="object-contain mt-2.5 rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.25)]">
            <article class="flex flex-col items-center pt-5 mt-2.5 text-base bg-white rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.25)] text-neutral-500">
                <div class="flex gap-5 justify-between w-full leading-loose max-w-[361px]">
                    <p>Mulai Tanggal</p>
                    <p>18 September 2024</p>
                </div>
                <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                <div class="flex mt-2 gap-5 justify-between w-full leading-loose max-w-[361px]">
                    <p>Pertemuan</p>
                    <p>8x Pertemuan</p>
                </div>
                <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                <div class="flex mt-2 gap-5 justify-between w-full leading-loose max-w-[361px]">
                    <p>Kelas</p>
                    <p>Reguler</p>
                </div>
                <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                <div class="flex mt-2 gap-5 justify-between w-full leading-loose max-w-[361px]">
                    <p>Durasi Pertemuan</p>
                    <p>2 Jam</p>
                </div>
                <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                <div class="flex my-5">
                    <h3 class="relative mt-5 lg:text-[40px] text-2xl font-extrabold text-[#273F5A]">Rp. 899.000</h3>
                    <p class="relative mt-7 text-[#FF9999] h-auto lg:text-base text-sm">
                        <s>Rp. 1.800.000</s>
                    </p>
                </div>
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

<section class="relative mt-10">
    <div class="absolute top-0 left-0 right-0  max-w-[1250px] -z-10 mx-auto">
        <img src="../assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
    </div>
    <div class=""> 
        <h3 class="text-center text-[32px] font-bold text-[#273F5A]">Keunggulan Kelas <span class="text-[#5386C0]">Rupa Raya Academy</span></h3>
        <p class="text-center mt-4 text-[#666666] text-[15px]">Raih Hasil Terbaik dengan Bergabung di Kelas Kami</p>
    </div>
    <div class="flex gap-48 justify-center">
        <div class="my-20">
            <div class="flex mb-10">
                <div data-aos="flip-left" data-aos-duration="1000" class="relative flex py-7 px-7 bg-white shadow-xl w-[450px] rounded-[12px] overflow-hidden">
                    <div class="-right-16 -top-16 w-32 h-32 absolute z-20 bg-[#5386C0] opacity-10 rounded-full flex items-center justify-center"></div>
                    <div class="relative">
                        <div class="bg-[#F5AD97] w-[72px] h-[72px] rounded-full"></div>
                        <img src="../assets/details/ticket.png" class="absolute top-4 right-4" alt="">
                    </div>
                    <div class="ml-5">
                        <h3 class="text-[#273F5A] text-[24px] font-bold">Voucher discount</h3>
                        <p class="text-[15px] text-[#666666] mt-2">Nikmati diskon spesial untuk kelas tambahan, perluas keterampilan dengan biaya terjangkau</p>
                    </div>
                    <div class="-bottom-16 -left-16 w-32 h-32 absolute z-20 bg-[#5386C0] opacity-10 rounded-full flex items-center justify-center"></div>
                </div>
            </div>

            <div data-aos="flip-left" data-aos-duration="1000" class="relative flex py-7 px-7 w-[450px] rounded-[12px] overflow-hidden">
                <div class="relative">
                    <div class="bg-[#EBD889] w-[72px] h-[72px] rounded-full"></div>
                    <img src="../assets/details/award.png" class="absolute top-4 right-4" alt="">
                </div>
                <div class="ml-5">
                    <h3 class="text-[#273F5A] text-[24px] font-bold">Sertifikat Kelas</h3>
                    <p class="text-[15px] text-[#666666] mt-2">Dapatkan sertifikat resmi yang diakui untuk meningkatkan kredibilitas dan portofolio profesional Anda</p>
                </div>
            </div>
        </div>

        <div class="my-20">
            <div class="flex mb-10">
                <div data-aos="flip-right" data-aos-duration="1000" class="relative flex py-7 px-6 w-[450px] rounded-[12px] overflow-hidden">
                    <div class="relative">
                        <div class="bg-[#9EB9D7] w-[72px] h-[72px] rounded-full"></div>
                        <img src="../assets/details/users.png" class="absolute top-4 right-4" alt="">
                    </div>
                    <div class="ml-5">
                        <h3 class="text-[#273F5A] text-[24px] font-bold">Tergabung dengan kami</h3>
                        <p class="text-[15px] text-[#666666] mt-2">Bergabunglah dengan komunitas kami dan berkembang bersama para profesional di bidangnya</p>
                    </div>
                </div>
            </div>

            <div data-aos="flip-right" data-aos-duration="1000" class="relative flex py-7 px-7 w-[450px] rounded-[12px] overflow-hidden">
                <div class="relative">
                    <div class="bg-[#92D5F4] w-[72px] h-[72px] rounded-full"></div>
                    <img src="../assets/details/monitor.png" class="absolute top-4 right-4" alt="">
                </div>
                <div class="ml-5">
                    <h3 class="text-[#273F5A] text-[24px] font-bold">Kesempatan Magang</h3>
                    <p class="text-[15px] text-[#666666] mt-2">Peluang magang yang membuka pintu bagi pengalaman praktis dan jaringan industri yang berharga</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flex">
    <div class="flex relative justify-end align-middle px-20 py-11 w-full  overflow-hidden min-h-[453px] max-md:px-5 max-md:max-w-full">
        <img src="../assets/details/bg-instructor.jpg" class="object-cover absolute inset-0 size-full" alt="">
        <div data-aos="fade-left" data-aos-duration="1100" class="my-auto">
            <h2 class="relative text-xl font-medium text-white">Pengajar</h2>
            <h1 class="relative mt-2.5 text-3xl font-bold text-white">Aliem Arif Perkasa</h1>
            <p class="relative mt-2.5 mr-72 text-xl font-medium text-white max-md:mr-2.5">Manager Fullstack Web Development</p>
            <p class="relative font-light mt-8 text-[16px] text-white w-[700px] max-md:max-w-full">Aliem Arif Perkasa adalah seorang Fullstack Web Developer berpengalaman. Dalam kelas ini, Aliem akan membimbing kamu menguasai front-end dan back-end development dengan pendekatan yang praktis dan mudah dipahami.</p>
            <div class="relative mt-12 max-md:mt-10">
                <div class="flex">
                    <a href="https://www.instagram.com/programer_malas?igsh=MW41dmM5cHhoNml4Yw%3D%3D">
                        <img src="../assets/details/instagram 1.png" class="mr-2" alt="">
                        <a href="https://www.instagram.com/programer_malas?igsh=MW41dmM5cHhoNml4Yw%3D%3D" class="text-white font-light" target="_blank">@programer_malas</a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
