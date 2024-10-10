<?php foreach ($activeQna as $qna) {?>
    <section class="relative py-10">
        <div class="absolute top-0 left-0 right-0  max-w-[1250px] -z-10 mx-auto">
            <img src="./assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
        </div>

        <div class="text-center">
            <h1 data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" class="text-3xl font-bold mb-4 "><?= $qna["title"] ?><span class="text-[#5386C0]"><?= $qna["titles"] ?></span></h1>
        </div>

        <div class="max-w-[1032px] mx-auto relative flex flex-wrap gap-5 justify-between w-full text-base max-md:mr-2.5 max-md:max-w-full">
            
            <div class="ask w-full bg-gray-50 mb-2 shadow-md rounded-lg hdn">
                <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                    <h4 data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" class="text-base font-medium text-left"> <?= $qna["quest1"] ?></h4>
                    <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                </div>
                <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                    <p class="md:text-base p-4 text-sm text-[#747474]">
                        <?= $qna["answer1"] ?>
                    </p>
                </div>
            </div>
            <div class="ask w-full bg-gray-50 mb-2 shadow-md rounded-lg hdn">
                <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                    <h4 data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" class="text-base font-medium text-left"> <?= $qna["quest2"] ?></h4>
                    <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                </div>
                <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                    <p class="md:text-base p-4 text-sm text-[#747474]">
                        <?= $qna["answer2"] ?>
                    </p>
                </div>
            </div>
            <div class="ask w-full bg-gray-50 mb-2 shadow-md rounded-lg hdn">
                <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                    <h4 data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" class="text-base font-medium text-left"> <?= $qna["quest3"] ?></h4>
                    <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                </div>
                <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                    <p class="md:text-base p-4 text-sm text-[#747474]">
                        <?= $qna["answer3"] ?>
                    </p>
                </div>
            </div>
            <div class="ask w-full bg-gray-50 mb-2 shadow-md rounded-lg hdn">
                <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                    <h4 data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" class="text-base font-medium text-left"> <?= $qna["quest4"] ?></h4>
                    <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                </div>
                <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                    <p class="md:text-base p-4 text-sm text-[#747474]">
                        <?= $qna["answer4"] ?>
                    </p>
                </div>
            </div>
            <div class="ask w-full bg-gray-50 mb-2 shadow-md rounded-lg hdn">
                <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                    <h4 data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" class="text-base font-medium text-left"> <?= $qna["quest5"] ?></h4>
                    <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                </div>
                <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                    <p class="md:text-base p-4 text-sm text-[#747474]">
                        <?= $qna["answer5"] ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>