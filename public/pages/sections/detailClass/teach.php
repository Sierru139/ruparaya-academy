<?php foreach ($activeTeach as $teach) {?>
<section class="flex">
    <div class="flex relative justify-end align-middle px-20 py-11 w-full  overflow-hidden min-h-[453px] max-md:px-5 max-md:max-w-full">
        <img src="<?= $teach["bg"] ?>" class="object-cover absolute inset-0 size-full" alt="">
        <div data-aos="fade-left" data-aos-duration="1100" data-aos-once="true" class="my-auto max">
            <h2 class="relative text-xl font-medium text-white">Pengajar</h2>
            <h1 class="relative mt-2.5 text-3xl font-bold text-white"><?= $teach["teacher"] ?></h1>
            <p class="relative mt-2.5 mr-72 text-xl font-medium text-white max-md:mr-2.5"><?= $teach["job"] ?></p>
            <p class="relative font-light mt-8 text-[16px] text-white w-[700px] max-md:max-w-full"><?= $teach["about"] ?></p>
            <div class="relative mt-12 max-md:mt-10">
                <div class="flex">
                    <a href="<?= $teach["linkIg"] ?>" target="_blank"><img src="../assets/details/instagram 1.png" class="mr-2" alt=""></a>
                    <a href="<?= $teach["linkIg"] ?>" target="_blank" class="text-white font-light text-lg"><?= $teach["usrnmIg"] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>