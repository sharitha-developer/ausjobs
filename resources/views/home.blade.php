<x-layout>
    <div class=" mt-6">
        <img src=" {{ Vite::asset('resources/images/bg-img3.png') }}" class=" w-full" alt="">
    </div>
    <section class=" px-10">
        <div class=" py-20 flex flex-col text-center space-y-6">
            <h2 class=" text-5xl font-bold mt-4 text-white">Popular Job Categories</h2>
            <div class=" text-gray-400 text-xl">2000 Jobs live</div>
        </div>
        <div class=" max-w-[1600px] mx-auto my-10">
            <div class=" grid grid-cols-3 gap-8">

                <x-category-block></x-category-block>
                <x-category-block></x-category-block>
                <x-category-block></x-category-block>
                <x-category-block></x-category-block>
                <x-category-block></x-category-block>

            </div>
        </div>
        <div class=" border border-gray-100 mt-28"></div>
    </section>

    <section class=" px-10">
        <div class=" py-20 flex flex-col text-center space-y-6">
            <h2 class=" text-5xl font-bold mt-4 text-white">Featured Jobs</h2>
            <div class=" text-gray-400 text-xl">Know your worth and find the job that qualify your life</div>
        </div>
        <div class=" max-w-[1600px] mx-auto my-10">
            <div class=" grid grid-cols-2 gap-8">
                <x-job-block></x-job-block>
                <x-job-block></x-job-block>
                <x-job-block></x-job-block>
                <x-job-block></x-job-block>
                <x-job-block></x-job-block>
                <x-job-block></x-job-block>

            </div>
        </div>
    </section>
   

</x-layout>
