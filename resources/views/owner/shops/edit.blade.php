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
                    <form action="{{ route('owner.shops.update', ['shop' => $shop->id]) }}" method="post" enctype="multipart/form-data" class="lg:w-2/3 mx-auto">
                        @csrf
                        <div class="-m-2">
                            <div class="p-2">
                                <div class="relative">
                                    <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                    <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="flex justify-center gap-8 p-2 mt-4 w-full">
                                <button type="button" onclick="location.href='{{ route('owner.shops.index') }}'" class="flex text-white bg-gray-300 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                                <button type="submit" class="flex text-white bg-blue-500 border-0 py-2 px-12 focus:outline-none hover:bg-blue-600 rounded text-lg">更新する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
