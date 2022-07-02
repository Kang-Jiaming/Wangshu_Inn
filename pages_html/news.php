<!doctype html>
<html>
<head>
    <!-- ... -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/tailwind.css" rel="stylesheet">
    <script src='//unpkg.com/valine/dist/Valine.min.js'></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">
        <div class="h-screen hidden lg:block shadow-lg relative w-80">
            <div class="bg-white h-full dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <img src="../assets/paimon_faq.png" class="max-h-16">
                </div>
                <nav class="mt-6 ml-4">
                    <div>
                        <a
                            class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="../index.html"
                        >
                            <span class="mx-4 text-sm font-normal">主页</span>
                        </a>
                        <a
                            class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500"
                            href="./news.html"
                        >

                            <span class="mx-4 text-sm font-normal">资讯</span>
                        </a>
                        <a
                            class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="guides.html"
                        >

                            <span class="mx-4 text-sm font-normal">攻略</span>
                        </a>
                        <a
                            class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="calc.html"
                        >

                            <span class="mx-4 text-sm font-normal">计算器</span>
                        </a>
                        <a
                            class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="comment.html"
                        >

                            <span class="mx-4 text-sm font-normal">讨论版</span>
                        </a>
                        <a
                            class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="abyss.html"
                        >

                            <span class="mx-4 text-sm font-normal">排行榜</span>
                        </a>

                        <a
                            class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                            href="userPanel.html"
                        >
                            <span class="mx-4 text-sm font-normal">用户中心</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                    <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                        <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                            <div class="relative flex items-center w-full lg:w-64 h-full group">
                                <div class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                    <svg
                                        fill="none"
                                        class="relative w-5 h-5"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <svg
                                    class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                </svg>
                                <input
                                    type="text"
                                    class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                                    placeholder="搜索"
                                />
                            </div>
                        </div>
                        <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                            <a href="login_old.html" class="block relative">
                                <img
                                    alt="profile"
                                    src="https://s1.ax1x.com/2022/04/16/LJ3eQf.jpg"
                                    class="mx-auto object-cover rounded-full h-10 w-10 "
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <?php
            include("connectphp.php");
            $result = $conn1->query('SELECT * from hopepredict');
            $arrHopePredict = mysqli_fetch_assoc($result);
            echo "<div class='overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0 flex flex-col'>
                <div class='bg-white dark:bg-gray-800 w-full mx-auto p-8'>
                    <div class='flex flex-row justify-between'>
                        <img src='../assets/banners/The%20Transcendent%20One%20Returns%201.png' class='max-h-64 my-6'>
                        <img src='../image/misspliter%20homa.jpeg' class=''max-h-64 my-6'/>
                    </div>
                    <p class='' dark:text-white w-full md:w-2/3 mh-3 m-auto font-bold text-center text-2xl md:text-3xl'>
                        {$arrHopePredict['what']}
                    </p>
                </div>";
//            ?>
<!--            <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0 flex flex-col">-->
<!--                <div class="bg-white dark:bg-gray-800 w-full mx-auto p-8">-->
<!--                    <div class="flex flex-row justify-between">-->
<!--                        <img src="../assets/banners/The%20Transcendent%20One%20Returns%201.png" class="max-h-64 my-6">-->
<!--                        <img src="../image/misspliter%20homa.jpeg" class="max-h-64 my-6"/>-->
<!--                    </div>-->
<!--                    <p class=" dark:text-white w-full md:w-2/3 mh-3 m-auto font-bold text-center text-2xl md:text-3xl">-->
<!--                        祈愿预告-->
<!--                    </p>-->
<!--                </div>-->

                <div class="bg-white dark:bg-gray-800 w-full mx-auto p-8">
                    <div class="flex flex-row justify-between">
                        <img src="../assets/events/divine_ingenuity.jpg" class="max-h-64 my-6"/>
                        <img src="../assets/events/overflowing_mastery.jpg" class="max-h-64 my-6"/>
                    </div>
                    <p class=" dark:text-white w-full md:w-2/3 mh-3 m-auto font-bold text-center text-2xl md:text-3xl">
                        活动预告
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

</body>
</html>