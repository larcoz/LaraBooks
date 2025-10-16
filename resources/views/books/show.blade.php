@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6">
	<div class="bg-white shadow-md rounded-lg p-6">
		<h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $book->title }}</h1>

		<div class="mt-6 flex space-x-3">
			<a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
				← Back to List
			</a>
			<a href="{{ route('books.edit', $book) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
				Edit Book
			</a>
		</div>
	</div>
	</div>
@endsection
