    <!doctype html>
    <html lang="fa">
    <?php
    require('..//master/head.php');
    ?>
    <body class="min-h-screen flex flex-col">
    <?php
    require('../master/header.php');
    ?>
    <div class="flex-1 bg-zink-200">
        <div class=" rounded-lg overflow-hidden max-w-xl mx-auto">
            <p class="text-xl font-semibold text-center">ارتباط با ما</p>
            <span class="text-black-200 rounded font-light p-1 flex items-center justify-center text-sm text-center">هر مشکلی دارین با ما در میون بزارین</span>

        </div>
        <main class="max-w-2xl flex-1 max-h-full mx-auto px-4 mt-10 flex gap-10">
            <div class="mb-5 flex-col bg-gray-100 rounded-lg p-10 mx-auto ">
                <label id="name" class="block mb-2 text-xl font-bold text-gray-700">
                    نام
                </label>
                <input id="name" type="text" placeholder="نام خود را وارد کنید" class="border-gray-600 border w-100 rounded w-xs ">
                <label id="name" class="block mb-2 text-xl font-bold text-gray-700">
                    ایمیل
                </label>
                <input id="name" type="email" placeholder="ایمیل خود را وارد کنید" class="border rounded w-xs ">
                <label id="name"
                       class="block mb-2 text-xl font-bold text-gray-700">
                    متن
                </label>
                <input id="name" type="text" placeholder="متن خود را وارد کنید" class="h-30 border rounded w-xs ">

                <input id="name" type="submit" value="ارسال پیام" class="bg-blue-400 mt-2 flex items-center justify-center h-10 border rounded w-xs ">
            </div>
        </main>    </div>


    <?php
    require('../master/footer.php');
    ?>
    </body>
    <script src="assets/tailwind.js"></script>
    </html>
