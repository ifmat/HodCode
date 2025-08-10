<!doctype html>
<html lang="fa">
<?php
require('..//master/head.php');
?>
<body class="min-h-screen">
<?php
require('../master/header.php');
?>

<main class="max-w-7xl mx-auto px-4 mt-10 flex gap-10">
    <aside class="w-80 bg-white rounded-lg shadow p-4 top-20 h-fit">
        <h3 class="font-bold mb-4 border-b border-gray-200 pb-2">محصولات مشابه</h3>
        <ul class="space-y-4 text-sm">
            <li class="flex items-center gap-3">
                <img src="assets/images/product/Untitled.jpeg" alt="دوربین دیجیتال" class="w-10 h-10 object-cover rounded" />
                <div>
                    <p>دوربین دیجیتال اکسیون مدل AX6062</p>
                </div>
            </li>
            <li class="flex items-center gap-3">
                <img src="assets/images/product/Untitled.jpeg" alt="دوربین دیجیتال" class="w-10 h-10 object-cover rounded" />
                <div>
                    <p>دوربین دیجیتال اکسیون مدل AX6062</p>
                </div>
            </li>
            <li class="flex items-center gap-3">
                <img src="assets/images/product/Untitled.jpeg" alt="دوربین دیجیتال" class="w-10 h-10 object-cover rounded" />
                <div>
                    <p>دوربین دیجیتال اکسیون مدل AX6062</p>
                </div>
            </li>
        </ul>
    </aside>

    <div class="mb-5 flex-1 bg-gray-100 rounded-lg p-6">
        <div class="bg-gray-300 rounded-lg overflow-hidden max-w-xl mx-auto">
            <img src="assets/images/product/Untitled.jpeg" alt="دوربین دیجیتال کانن مدل EOS 250D" class="w-full object-cover" />
        </div>
        <div class="mt-4 flex items-center gap-3 top-200">
            <p class="text-xl font-semibold">دوربین دیجیتال کانن مدل EOS 250D</p>
            <div class="flex mx-auto gap-3 mr-60">
                <span class="text-white rounded text-center p-1 font-bold text-lg bg-red-600">4٪</span>

                <div class="mt-2 flex items-center gap-2 text-sm font-light line-through">
                    <span>30/000/000</span>
                </div>
                <div class="mt-1 text-1xl font-bold">
27/400/000      تومان          </div>
            </div>
        </div>



        <p class="mt-6 text-sm leading-relaxed text-gray-700">
            دوربین کانن EOS 250D یک دوربین همه کاره است که هم در عکاسی و هم در فیلمبرداری خوب عمل می‌کند. این دوربین
            دارای حسگر APS-C CMOS با رزولوشن ۲۴/۲ مگاپیکسل است که از پردازشگر DIGIC 8 بهره می‌برد ...
        </p>

        <button class="mt-8 bg-blue-400 hover:bg-blue-800 text-white rounded px-3 py-3  flex gap-2  max-w-xs ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">

                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>

            </svg>
            افزودن به سبد
        </button>

        <div class="mt-10">
            <h3 class="text-lg font-semibold mb-3">ویژگی‌ها</h3>
            <ul class="text-sm text-gray-700 space-y-2">
                <li><strong>. نوع حسگر:</strong> CMOS</li>
                <li><strong>. قطع حسگر:</strong> APS-C / Crop Frame (کراپ فریم)</li>
            </ul>
        </div>
    </div>
</main>
<?php
require('../master/footer.php');
?>
</body>
<script src="assets/tailwind.js"></script>
</html>
