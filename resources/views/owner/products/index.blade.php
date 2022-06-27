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
                        <button onclick="location.href='{{ route('owner.products.create') }}'" class="flex text-white bg-blue-500 border-0 py-2 px-12 focus:outline-none hover:bg-blue-600 rounded text-lg">新規登録</button>
                    </div>
                    <ul class="flex flex-wrap">
                        @foreach ($ownerInfo as $owner)
                            @foreach ($owner->shop->product as $product)
                                <li class="md:w-1/4 p-2">
                                    <a href="{{ route('owner.products.edit', ['product' => $product->id]) }}" class="block border rounded-md p-4">
                                        <figure class="mb-2">
                                            <x-thumbnail :filename="$product->imageFirst->filename" type="products" />
                                        </figure>
                                        {{-- <p class="text-l">{{ $product->name }}</p> --}}
                                    </a>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                    {{-- {{ $images->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>