 

 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            403 - Yetkiniz Yok
        </h2>
    </x-slot>


    <div class="container mx-auto">
        <div class="p-3">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-red-500">403</h1>
                <p class="text-xl text-gray-600 mt-4">Bu işlemi yapmaya yetkiniz yok.</p>
                <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded">Ana Sayfaya Dön</a>
            </div>
        </div>    
    </div>    

</x-app-layout>
