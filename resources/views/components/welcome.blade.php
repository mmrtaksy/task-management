<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Görev Yöneticisine Hoş geldiniz!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Bu görev yöneticisi MURAT AKSOY tarafından örnek çalışma olarak kodlanmıştır.
    </p>
    

    <a href="https://github.com/murataksoyrl" target="_blank" class="mt-6 text-blue-600 font-semibold">
        Murat AKSOY Github Adresi
    </a>

</div>

<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">


    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Görev Tanımı
            </h2>
        </div>


 
       
        <h1>Görev Yönetim Sistemi (Task Management System) Geliştirme</h1>

        <div class="mt-4 text-gray-800 text-base leading-relaxed">
        <p>Bir kullanıcının görevler oluşturabileceği, düzenleyebileceği, tamamlayabileceği ve silebileceği basit bir Laravel uygulaması geliştirilmesi gerekiyor. <br> Aşağıdaki adımları izleyerek uygulamayı geliştirebilirsiniz:</p>
    
        <h2 class="font-semibold mb-1 mt-4">1. Görev Tablosu Oluşturma (Migration ve Model)</h2>
        <ul>
            <li>Bir migration ve model oluşturun. Bu tablo, her bir görevin adını, açıklamasını, durumunu ve ilgili kullanıcı bilgilerini içermelidir.</li>
            <li>Görev tabloları için bir migration dosyası oluşturulmalıdır.</li>
        </ul>
    
        <h2 class="font-semibold mb-1 mt-4" class="font-semibold mb-1 mt-4">2. Görev CRUD İşlemleri (Controller ve Routes)</h2>
        <ul>
            <li>Görev CRUD işlemlerini gerçekleştiren bir controller oluşturun. Kullanıcıların yeni görevler oluşturabilmesi, mevcut görevleri görüntüleyebilmesi, düzenleyebilmesi ve silebilmesi gerekir.</li>
            <li>Örnek Controller İşlemleri:
                <ul>
                    <li><strong>Index:</strong> Tüm görevlerin listelendiği bir sayfa.</li>
                    <li><strong>Create:</strong> Yeni bir görev ekleme formu ve ekleme işlemi.</li>
                    <li><strong>Edit:</strong> Mevcut görevi düzenleme.</li>
                    <li><strong>Delete:</strong> Görev silme.</li>
                </ul>
            </li>
        </ul>
    
        <h2 class="font-semibold mb-1 mt-4">3. Görev Tamamlama ve Güncelleme</h2>
        <ul>
            <li>Kullanıcılar, görev tamamlandığında durumu güncelleyebilmelidir.</li>
            <li>Görevlerin durumu için bir tamamla (<code>complete</code>) düğmesi eklenmeli ve görevin durumu güncellenmelidir.</li>
        </ul>
    
        <h2 class="font-semibold mb-1 mt-4">4. Kullanıcı İlişkisi (User-Task Relationship)</h2>
        <ul>
            <li>Görevler kullanıcıya atanmalı ve her kullanıcı sadece kendi görevlerini görebilmelidir.</li>
            <li>Eloquent ilişkisinde her görevin bir kullanıcıya ait olduğunu belirtmek için, User ve Task modelleri arasında birçok-görevi-olan bir ilişki kurulmalıdır.</li>
        </ul>
    
        <h2 class="font-semibold mb-1 mt-4">5. Örnek Kullanıcı Arayüzü (Blade Templating)</h2>
        <ul>
            <li>Görevlerin listelendiği, yeni görev ekleme ve görev düzenleme formlarını içeren basit bir Blade teması oluşturulmalıdır.</li>
        </ul>
    
        <h2 class="font-semibold mb-1 mt-4">6. Validation ve Middleware</h2>
        <ul>
            <li>Görev ekleme ve düzenleme işlemlerinde kullanıcı giriş doğrulaması yapılmalı (örneğin, başlık zorunlu olmalı).</li>
            <li>Kullanıcının giriş yapmadığı durumlarda, yetkisiz işlemleri engellemek için <code>middleware</code> eklenmelidir.</li>
        </ul>
    
        <h2 class="font-semibold mb-1 mt-4">Task Özeti</h2>
        <p>Bu görev, bir kullanıcının giriş yaptıktan sonra görev ekleyebileceği, görüntüleyebileceği ve düzenleyebileceği temel bir görev yönetim sistemi geliştirmeyi içerir. Amaç, Laravel’deki temel veri modelleme, CRUD işlemleri ve Blade temalarını uygulamaktır.</p>
    </div>

    </div>
</div>
