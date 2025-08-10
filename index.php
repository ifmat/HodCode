<!doctype html>
<html lang="fa">
<?php
require('core/master/head.php');
?>
<body class="min-h-screen">
<?php
require('core/master/header.php');
require('core/security.php');
?>
<main class="max-w-screen mx-auto">
    <div class="bg-stone-100  mt-4">

        <div class="bg-whit w-2/3 flex mx-auto gap-3  ">
            <button class="font-light mt-3 p-1 flex hover:bg-blue-300 border rounded-full max-w-40 item-center justify-center "
                    type="reset"
            >همه محصولات
            </button>
            <button class="p-1 flex mt-3  hover:bg-blue-300 border rounded-full max-w-40 item-center justify-center font-light "
                    value="as">دوربین
            </button>
            <button class="p-1 flex mt-3  hover:bg-blue-300 border rounded-full max-w-40 item-center justify-center font-light "
                    value="as">هدفون
            </button>
            <button class="p-1 flex mt-3  hover:bg-blue-300 border rounded-full max-w-40 item-center justify-center font-light "
                    value="as">کنسول بازی
            </button>
            <button class="p-1 flex mt-3  hover:bg-blue-300 border rounded-full max-w-40 item-center justify-center font-light "
                    value="as">وسایل گیمینگ
            </button>
            <button class="p-1 flex mt-3  hover:bg-blue-300 border rounded-full max-w-40 item-center justify-center font-light "
                    value="as">هدست
            </button>
        </div>
        <div class="w-2/3  grid grid-cols-4 mx-auto mt-4 gap-4">

            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="mx-auto my-auto w-screen h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hubusb.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هاب یو اس بی</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هاب </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                          <a href="detail.php">  مشاهده جزییات</a>
                        </button>
                    </div>

                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/Untitled.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">دوربین</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        دوربین </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/falshdisk.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">فلش 2TB</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        فلش مموری </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone_gaming.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون گیمینگ</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/airpod.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">ایرپاد pro2</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        ایرپاد </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/hedphone.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-zinc-200 p-4 mb-5 mxa-md">
                <img alt="عکس کحصول" class="w-full h-48 object-cover rounded hover:blur-sm"
                     src="assets/images/product/airpod.jpeg">

                <div class="mt-4">
                    <h2 class="text-lg font-semibold text-gary-800 ">هدفون P9</h2>
                    <P class="text-gary-600 mb-3 mt-1 text-sm">
                        هدفون </P>
                    <div class="flex gap-1">
                        <div class="max-w-10 max-h-10  my-auto mx-1">
                            <p class=" bg-red-600 max-w-10 w-8 h-8 text-center  mx-auto my-auto max-h-10 rounded  text-white  line-through font-light ">
                                4%</p>

                        </div>
                        <p class="text-sm line-through font-light mr-6 mx-1 my-auto">250/000 </p>
                        <span class="text-xl mx-5   text-black">25/000 تومان</span>

                    </div>

                    <div class="mt-4 flex gap-2">
                        <button class="bg-indigo-500 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                            افزودن به سبد خرید
                        </button>
                        <button class="bg-gray-400 w-1/2 h-10 text-white px-4 rounded hover:bg-indigo-700 truncate whitespace-nowrap overflow-hidden">
                                                     <a href="detail.php">  مشاهده جزییات</a>

                        </button>
                    </div>
                </div>

            </div>

        </div>
        <div class="flex justify-center items-center gap-2 my-auto item-center mx-auto max-w-full w-screen text-center mb-5  ">
            <div class="bg-blue-300 rounded p-1 px-3 text-center mb-5">
                <button>قبلی</button>
            </div>
            <div class="bg-blue-300 rounded p-1 px-3 text-center mb-5">
                <button>1</button>
            </div>
            <div class="bg-blue-300 rounded p-1 px-3 text-center mb-5">
                <button>2</button>
            </div>
            <div class="bg-blue-300 rounded p-1 px-3 text-center mb-5">
                <button>بعدی</button>
            </div>
        </div>
    </div>
</main>


<?php
require('core/master/footer.php');
?>

</body>
<script src="assets/tailwind.js"></script>
</html>
