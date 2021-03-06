<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    ログインしました。
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('admin.product.create') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">商品投稿ページへ</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('admin.register') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">管理者ユーザーを新規作成する</a>
                </div>


            </div>

            <div class="p-6 bg-white border-b border-gray-200">
                < 商品一覧 >
            </div>

            {{-- フラッシュメッセージ --}}
            @if(session('message'))
            <div class="p-6">
            {{ session('message') }}
            </div>
            @endif

            @foreach($products as $product)
                <div class="p-6 bg-white border-b border-gray-200">
                    <div> <img src="{{ asset('/storage/'.$product -> image_path) }}" alt="画像が登録されてません"></div>
                    <div> 商品名： {{ $product -> name }}</div>
                    <div> 値段： {{ $product -> price }}</div>
                    <div> サイズ： {{ $product -> size }}</div>
                    <div> カテゴリー： {{ $product -> category }}</div>
                    <div><a href="{{ route('admin.product.edit', $product->id) }}">商品を編集する</a></div>
                    <div>
                        <form method="post" action="{{ route('admin.product.delete', $product->id) }}">
                            @csrf
                            <button type="submit" onclick="return confirm('削除してもよろしいでしょうか？')">
                                商品を削除する
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <div class="pt-4">end</div>

        </div>
    </div>
</x-app-layout>
