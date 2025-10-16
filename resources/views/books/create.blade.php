<form method="POST" action="{{ route('books.store') }}">
    @csrf
    <h3 class="font-bold border-b-gray-300 border-b pb-2 mb-3 mt-4">Sila masukkan nama buku</h3>
    <label for="title" class="block mb-1">Nama Buku</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" required
           class="border border-gray-300 p-2 rounded w-full max-w-md" />
    @error('title')
        <div class="text-red-600 mt-1">{{ $message }}</div>
    @enderror
    <div class="mt-3">
        <button type="submit" class="bg-gray-800 text-white px-3 py-1 rounded">Simpan</button>
    </div>
</form>
