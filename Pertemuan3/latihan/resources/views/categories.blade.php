<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <h1 class="text-3xl font-bold mb-6 text-gray-800">Post Categories</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($categories as $category)
            <a href="/categories/{{ $category->slug }}" class="block">
                <div class="bg-white hover:bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 transition duration-300 transform hover:-translate-y-1">
                    
                    <h2 class="text-xl font-bold text-gray-900 mb-2">
                        {{ $category->name }}
                    </h2>
                    
                    <!-- Contoh menghitung jumlah post per kategori (Opsional) -->
                    <p class="text-gray-600 text-sm">
                        Lihat artikel di kategori ini &rarr;
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>