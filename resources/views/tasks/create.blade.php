 <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             Yeni Görev Ekle
         </h2>
     </x-slot>



     <div class="max-w-7xl mx-auto">
         <div class="p-3">



             @if (session('error'))
                 <div class="mb-5"><x-alert level="danger" message="{{ session('error') }}" /></div>
             @endif


             <form action="{{ route('tasks.store') }}" method="POST"
                 class="max-w-lg mx-auto bg-white p-6 shadow-md rounded-lg">
                 @csrf
                 @method('POST')

                 <div class="mb-4">
                     <label for="name" class="block text-sm font-medium text-gray-700">Görev Adı:</label>
                     <input type="text" name="name" id="name" required value="{{ old('name') }}"
                         class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                     <!-- Görev Adı Doğrulama Hatası -->
                     @error('name')
                         <span class="text-red-500 text-sm">{{ $message }}</span>
                     @enderror
                 </div>

                 <div class="mb-4">
                     <label for="description" class="block text-sm font-medium text-gray-700">Açıklama:</label>
                     <textarea name="description" id="description" rows="4"
                         class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
                 </div>

                 <div class="text-right">
                     <button type="submit"
                         class="inline-flex justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                         Görev Ekle
                     </button>
                 </div>
             </form>
         </div>
     </div>

 </x-app-layout>
