<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="session('status')" />
                    <div class="flex justify-end mx-auto mb-4 p-2">
                        <button onclick="location.href='{{ route('owner.images.create') }}'" class="flex text-white bg-blue-500 border-0 py-2 px-12 focus:outline-none hover:bg-blue-600 rounded text-lg">新規登録</button>
                    </div>
                    <ul class="flex flex-wrap">
                        @foreach ($images as $image)
                            <li class="md:w-1/4 p-2">
                                <a href="{{ route('owner.images.edit', ['image' => $image->id]) }}" class="block border rounded-md p-4">
                                    <figure class="mb-2">
                                        <x-thumbnail :filename="$image->filename" type="products" />
                                    </figure>
                                    <p class="text-l">{{ $image->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
