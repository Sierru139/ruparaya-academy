<section class="">
    <div class="h-screen relative overflow-hidden centered-xy bg-fixed bg-cover"
        style="background-image: url('./assets/pg1/PXL_20240330_033311754 1.png');">
        <div class="absolute top-0 bg-blue-rpr-prm-a2 z-10 w-full h-full"></div>
        <div class="absolute top-0 bg-[#00000042] z-10 w-full h-full"></div>
        <div class="max-w-[575px] absolute z-20 text-white text-center">
            <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                class="md:text-[32px] text-xl font-extralight mb-14">Seputar Rupa Raya Academy</h3>
            <!-- Tombol play -->
<<<<<<< HEAD
            <div id="openButton" class="play-button mx-auto cursor-pointer">
                <img src="assets/pg1/play-icon.png" alt="Play">
=======
            <div id="playButton" class="play-button mx-auto cursor-pointer">
                <img src="./assets/pg1/play-icon.png" alt="Play">
>>>>>>> a65f7931f707f3a71cf9587d808c4d6d1dce73c9
            </div>
        </div>
    </div>
</section>

<!-- Modal Pop-Up -->
<div id="videoModal"
    class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden opacity-0 scale-95 transition-all duration-300 ease-in-out">
    <div class="relative w-[90vw] h-[90vh] max-w-[800px] max-h-[450px]">
        <!-- Tombol close -->
        <button id="closeButton" class="absolute top-0 right-0 text-white text-3xl z-50">&times;</button>
        <!-- Video -->
        <video id="videoPlayer" controls class="w-full h-full object-contain rounded-lg">
            <source src="/public/assets/video/PXL_20240330_030657799.TS.mp4" type="video/mp4">
            Browser Anda tidak mendukung video tag.
        </video>
    </div>
</div>