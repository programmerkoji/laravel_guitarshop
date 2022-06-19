<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー情報編集
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 mx-auto">
                          <div class="flex flex-col text-center w-full mb-6">
                            <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">オーナー情報編集</h2>
                          </div>
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form action="{{ route('admin.owners.update', ['owner' => $owner->id]) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="-m-2">
                                    <div class="p-2">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">オーナー名</label>
                                            <input type="text" id="name" name="name" value="{{ $owner->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                <div class="p-2">
                                    <div class="relative">
                                        <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                        <input type="email" id="email" name="email" value="{{ $owner->email }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="relative">
                                        <p class="leading-7 text-sm text-gray-600">店名</p>
                                        <p class="w-full bg-gray-100 bg-opacity-50 rounded focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $owner->shop->name }}</p>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="relative">
                                        <label for="password" class="leading-7 text-sm text-gray-600">パスワード</label>
                                        <input type="password" id="password" name="password" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="relative">
                                    <label for="password_confirmation" class="leading-7 text-sm text-gray-600">パスワード確認</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="flex justify-center gap-8 p-2 mt-4 w-full">
                                    <button type="button" onclick="location.href='{{ route('admin.owners.index') }}'" class="flex text-white bg-gray-300 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                                    <button type="submit" class="flex text-white bg-blue-500 border-0 py-2 px-12 focus:outline-none hover:bg-blue-600 rounded text-lg">更新する</button>
                                </div>
                                </div>
                            </form>
                          </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
