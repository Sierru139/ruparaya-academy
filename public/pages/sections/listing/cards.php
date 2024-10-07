<div class="flex items-center justify-between mx-16 max-md:mx-6 max-lg:flex-wrap"> 
    <div>
        <h2 class="z-10 mt-0 text-3xl font-extrabold text-slate-700">
            <span class="text-[#273F5A]">Daftar</span>
            <span class="text-[#5386C0]">Kursus/Kelas</span>
        </h2>
        <p class="mt-3 text-base text-neutral-500">
            Pilih Kursus/Kelas Yang Anda Butuhkan Untuk Belajar
        </p>
    </div>
    <div class="flex gap-5 max-lg:mt-10 mb-5 max-md:flex-wrap max-md:mt-5 max-md:mb-0 max-md:gap-x-3">
        <div class="btnn">
            <a onclick="showAllClasses()" class="btn-bg btn-paket btn-bg-click py-2 px-4 text-[#5386C0] rounded-md cursor-pointer border border-[#5386C0]">Semua Kelas</a>
        </div>
        <div>
            <a onclick="filterClasses('Offline')" class="btn-bg btn-paket py-2 px-4 text-[#5386C0] rounded-md cursor-pointer border border-[#5386C0] ">Kelas Offline</a>
        </div>
        <div class="max-md:mt-3">
            <a onclick="filterClasses('Online')" class="btn-bg btn-paket py-2 px-4 text-[#5386C0] rounded-md cursor-pointer border border-[#5386C0]">Kelas Online</a>
        </div>
    </div>
    </div>

    <div class="flex flex-wrap gap-4 items-stretch justify-center self-stretch mt-10 max-md:mt-10 max-w-[1280px] mx-auto">

    <?php foreach ($cards as $card) { ?>
    <div id="class-item <?= $card['type'] ?>" class=" overflow-hidden flex flex-col grow bg-white rounded-2xl shadow-xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
        <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="<?= $card['banner'] ?>" alt="Course image"/>
        <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
            <p class="font-semibold text-sm text-[#EDC423]"> <?= $card['date'] ?></p>
            <p class="font-semibold text-sm" style="color: <?= ($card["type"] === "Online") ? '#EDC423' : '#5FBBF8' ; ?>;">Kelas <?= $card['type'] ?></p>
        </div>
        <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full overflow-hidden max-md:pr-5 grow">
            <img class="object-cover absolute inset-0 size-full" loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385" alt=""/>
            <a href="detailclass.php?class=<?= $card['detail-id'] ?> grow" class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline"><?= $card['title'] ?></a>
            <p class="relative mt-3 text-sm leading-5 text-neutral-600 grow"><?= $card['expl'] . ""?></p>
        </div>
        <div class="flex px-5 items-center gap-4 mb-5">
            <div>
                <img class="w-[60px]" src="<?= $card['teach']['img']?>" alt="">
            </div>
            <div>
                <p class="font-extrabold text-[#273F5A]"><?= $card['teach']['name']?></p>
                <p class="relative text-sm leading-5 text-neutral-600"><?= $card['teach']['proffession']?></p>
            </div>
        </div>
        <div class="relative flex justify-between items-center p-4 rounded-none bg-[#5386C0] overflow-hidden">
            <div class="flex flex-col font-bold">
                <p class="text-2xl text-white"><?= $card['price']?></p>
            </div>
            <a href="<?= $card['form']?>" target="_blank" class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
            <div class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center"></div>
        </div>
    </div>
    <?php } ?>
</div>