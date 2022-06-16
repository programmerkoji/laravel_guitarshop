<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            期限切れオーナー一覧
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <x-flash-message status="session('status')" />
                            <div class="lg:w-3/4 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead class="whitespace-nowrap">
                                    <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">期限が切れた日</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                    </tr>
                                </thead>
                                <tbody class="whitespace-nowrap">
                                    @foreach ($expiredOwners as $owner)
                                    <tr>
                                    <td class="px-4 py-3">{{ $owner->name }}</td>
                                    <td class="px-4 py-3">{{ $owner->email }}</td>
                                    <td class="px-4 py-3">{{ $owner->deleted_at->diffForHumans() }}</td>
                                    <td class="px-4 py-3">
                                        <form action="{{ route('admin.expired-owners.restore', ['owner' => $owner->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="flex text-white bg-blue-400 border-0 py-2 px-4 focus:outline-none hover:bg-blue-500 rounded">復元</button>
                                        </form>
                                    </td>
                                    <td class="px-4 py-3">
                                        <form id="delete_{{ $owner->id }}" action="{{ route('admin.expired-owners.destroy', ['owner' => $owner->id]) }}" method="post" class="flex">
                                            @csrf
                                            <a href="#" data-id="{{ $owner->id }}" onclick="deletePost(this)" class="flex text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded">完全に削除</a>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            {{ $expiredOwners->links() }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除してもよいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
