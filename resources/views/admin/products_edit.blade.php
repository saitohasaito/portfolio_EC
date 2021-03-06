<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      商品編集
    </h2>
  </x-slot>
<div class="">
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">

              <section class="text-gray-600 body-font relative">
                <div class="container px-5 mx-auto">
                  <div class="flex flex-col w-full mb-12">
                    <div class="text-center">
                      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">商品編集</h1>
                    </div>
                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                       <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="-m-2">
                          <div class="p-2 w-1/2 mx-auto" >
                            <div class="relative">
                              <label for="name" class="leading-7 text-sm text-gray-600">商品名</label>
                              <input type="text" id="name" name="name" value="{{ $product->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="price" class="leading-7 text-sm text-gray-600">料金</label>
                              <input type="text" id="price" name="price" value="{{ $product->price }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="image_path" class="leading-7 text-sm text-gray-600">画像(変更しない場合は空にする）</label>
                              <input type="file" id="image_path" name="image_path" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="size" class="leading-7 text-sm text-gray-600">サイズ</label>
                              <select id="size" name="size" value="{{ $product->size }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option @if( $product->size == 'S' )selected @endif value="S">S</option>
                                <option @if( $product->size == 'M' )selected @endif value="M">M</option>
                                <option @if( $product->size == 'L' )selected @endif value="L">L</option>
                              </select>
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="category" class="leading-7 text-sm text-gray-600">カテゴリー</label>
                              <select id="category" name="category" value="{{ $product->category }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option @if( $product->category == 'tops' )selected @endif value="tops">tops</option>
                                <option @if( $product->category == 'pants' )selected @endif value="pants">pants</option>
                                <option @if( $product->category == 'outer' )selected @endif value="outer">outer</option>
                                <option @if( $product->category == 'other' )selected @endif value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="gender" class="leading-7 text-sm text-gray-600">性別</label>
                              <select id="gender" name="gender" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option @if( $product->gender == 'mens' )selected @endif value="mens">mens</option>
                                <option @if( $product->gender == 'women' )selected @endif value="women">women</option>
                                <option @if( $product->gender == 'mens_and_women' )selected @endif value="mens_and_women">mens_and_women</option>
                                <option @if( $product->gender == 'kids' )selected @endif value="kids">kids</option>
                                <option @if( $product->gender == 'other' )selected @endif value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="etc" class="leading-7 text-sm text-gray-600">その他</label>
                              <input type="text" id="etc" name="etc" value="{{ $product->etc }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="pt-4 flex justify-around">
                            <div class="p-2 w-1/2 mx-auto">
                              <a href="{{ route('admin.top') }}">戻る</a>
                            </div>
                            <div class="p-2 w-1/2 mx-auto">
                              <button type="submit">更新する</button>
                            </div>
                          </div>
                        </div>
                      </form>

                        {{-- フラッシュメッセージ --}}
                        @if(session('message'))
                        <div class="p-6">
                        {{ session('message') }}
                        </div>
                        @endif

                    </div>
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
