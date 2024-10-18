 <x-app-layout>
     <x-slot name="header">
         <div class="flex flex-wrap justify-between items-center">
             <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 Görevlerim
             </h2>
             <a href="{{ route('tasks.create') }}"
                 class="text-base bg-green-600 hover:bg-green-700 px-4 py-1 rounded-lg text-white font-semibold">Yeni
                 Görev Ekle</a>
         </div>
     </x-slot>

     <!-- Burada sayfanın içeriği olacak -->
     <div class="max-w-4xl mx-auto">

         <div class="content p-3">

             @if (session('success'))
                 <div class="mb-5"><x-alert level="success" message="{{ session('success') }}" /></div>
             @endif

             @if (session('error'))
                 <div class="mb-5"><x-alert level="danger" message="{{ session('error') }}" /></div>
             @endif


             <ul class="space-y-2">
                 @if ($tasks && $tasks->isNotEmpty())
                     @foreach ($tasks as $task)
                         <li class="flex justify-between items-center p-4 bg-white rounded-lg shadow">
                             <div class=" break-words max-w-xl relative block">
                                 <strong class="text-lg">{{ $task->name }}</strong>
                                 <span
                                     class="ml-2 px-2 py-1 text-sm font-semibold rounded-full {{ $task->status == 'completed' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-black' }}">
                                     {{ ucfirst($task->status) }}
                                 </span>
                             </div>

                             <div class="space-x-2">
                                 <a href="{{ route('tasks.edit', $task) }}"
                                     class="px-3 py-1 text-white bg-blue-500 rounded hover:bg-blue-600 transition">Düzenle</a>

                                 <a href="{{ route('tasks.destroy', $task) }}"
                                     class="px-3 py-1 text-white bg-red-500 rounded hover:bg-red-600 transition"
                                     onclick="return confirm('Bu görevi silmek istediğinize emin misiniz?')">Sil</a>

                                 @if ($task->status != 'completed')
                                     <a href="{{ route('tasks.complete', $task) }}"
                                         class="px-3 py-1 text-white bg-green-500 rounded hover:bg-green-600 transition">Tamamla</a>
                                 @endif
                             </div>
                         </li>
                     @endforeach
                 @else
                     <li class="p-4 bg-white rounded-lg shadow">Hiç görev bulunamadı.</li>
                 @endif
             </ul>
         </div>


     </div>
 </x-app-layout>
