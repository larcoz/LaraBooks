<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body class="p-4">
@if (session('success'))
    <div class="mb-4 px-4 py-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif
<h1 class="font-bold border-b-gray-300 border-b pb-2 mb-3">
        Books
    </h1>
    <ul>
        @foreach ($books as $book)
            <li class="flex mb-1 items-center gap-2 py-1">
                <span class="flex-1">{{ $book->title }}</span>
                <a href="{{ route('books.show', $book) }}" class="mr-2 text-blue-600">View</a>
                <a href="{{ route('books.edit', $book) }}" class="mr-2 text-green-600">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border bg-gray-200 p-1 border-black">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    @include('books.create')
</body>

</html>
