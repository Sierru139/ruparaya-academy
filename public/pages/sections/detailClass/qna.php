<?php foreach ($activeClass as $activeClasses) {?>
    <section class="relative py-10">
        <div class="absolute top-0 left-0 right-0  max-w-[1250px] -z-10 mx-auto">
            <img src="./assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
        </div>
        <div class="max-w-[1032px] mx-auto relative flex flex-wrap gap-5 justify-between w-full text-base max-md:mr-2.5 max-md:max-w-full">
            
            <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                    <h4 data-aos="fade-up" data-aos-duration="1100" class="text-base font-bold text-center"> <?= $qna["quest1"] ?></h4>
                    <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                </div>
                <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                    <p class="md:text-base p-4 text-sm text-[#747474]">
                        <?= $qna["answer1"] ?>
                    </p>
                </div>
            </div>

            <!-- <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                < ?php foreach ($activeClasses["q"] as $key) { ?>
                    <h4 data-aos="fade-up" data-aos-duration="1100" class="text-base font-bold text-center"><?= $key ?></h4>
                < ?php } ?>
            </div> -->
            
            <!-- <div class="text-center">
            </div>  
            <div class="relative flex flex-wrap gap-5 justify-between w-full text-base max-md:mr-2.5 max-md:max-w-full">

                <div class="mt-5 flex flex-wrap gap-10 items-start max-md:max-w-full">
                    <div class="">
                        <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                            <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                                <h4 class="md:text-base text-sm font-medium">Apa itu Fullstack Web Development?</h4>
                                <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                            </div>
                            <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                                <p class="md:text-base p-4 text-sm text-[#747474]">
                                    <b>Fullstack Web Development</b> adalah pendekatan di mana seorang developer menangani pengembangan baik pada sisi frontend (antarmuka pengguna) menggunakan HTML, CSS, dan JavaScript, maupun pada sisi backend (server dan database) menggunakan teknologi seperti Node.js, Python, atau MySQL, untuk menciptakan aplikasi web yang berfungsi penuh dari tampilan hingga pengolahan data.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
        </div>
    </section>
<?php } ?>