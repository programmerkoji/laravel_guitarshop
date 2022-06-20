<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <ul class="p-6 bg-white border-b border-gray-200">
                    @foreach ($shops as $shop)
                        <li class="md:w-1/2">
                            <a href="{{ route('owner.shops.edit', ['shop' => $shop->id]) }}" class="block border rounded-md p-4">
                                <div class="mb-4">
                                    @if ($shop->is_selling)
                                        <span class="p-2 rounded-md bg-blue-400 text-white">販売中</span>
                                    @else
                                        <span class="p-2 rounded-md bg-red-400 text-white">販売中</span>
                                    @endif
                                </div>
                                <figure class="mb-2">
                                    @if (empty($shop->filename))
                                        <img src="{{ asset('images/no_image.png') }}" alt="no image">
                                    @else
                                        <img src="{{ asset('storage/shops/' . $shop->filename) }}" alt="">
                                    @endif
                                </figure>
                                <h3 class="text-2xl mb-2">{{ $shop->name }}</h3>
                                <p>{{ $shop->information }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>