<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('layout.header')
    <div class="flex flex-wrap justify-center mx-auto">
        <div class="flex flex-wrap justify-center p-5 mx-auto">
            <a href="#" class="mx-auto flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="mx-auto p-10  w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://laravel.com/img/logotype.min.svg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Framework PHP Laravel</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller. </p>
                </div>
            </a>
        </div>
        <div class="flex flex-wrap justify-center p-5 mx-auto">
            <a href="#" class="mx-auto flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="mx-auto p-10  w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://tailwindcss.com/_next/static/media/tailwindcss-logotype-white.944c5d0ef628083bb316f9b3d643385c86bcdb3d.svg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Framework CSS Tailwind</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tailwind CSS adalah kerangka kerja CSS yang di dalamnya terdapat sekumpulan utility classes untuk membangun antarmuka kustom dengan cepat. Tailwind CSS berbeda dengan kerangka kerja CSS seperti Bootstrap, Bulma, atau Foundation, karena Tailwind CSS bukan sebuah UI Framework. </p>
                </div>
            </a>
        </div>
    </div>
    
    
    

    @include('layout.footer')
</body>

</html>