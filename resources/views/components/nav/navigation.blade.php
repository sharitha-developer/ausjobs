<nav class=" py-5 flex justify-between items-center">
    <div>
        <a href="/">
             <img src="{{ Vite::asset('resources/images/logo-n1.png') }}" alt="" class=" max-w-40"> 
        </a>
    </div>
    <div>  
        <ul class=" flex space-x-10">
             <x-nav.nav-items href="">Home</x-nav.nav-items>
             <x-nav.nav-items href="">Find Job</x-nav.nav-items>
             <x-nav.nav-items href="">Employers</x-nav.nav-items>
             <x-nav.nav-items href="">Contact us</x-nav.nav-items>          
        </ul>
    </div>
    <div class=" space-x-4" >
        <a href="#" class=" bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Login / Register</a>
        <a href="#" class=" bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded"> Post a Job</a>
    </div>
</nav>
