<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

      
          <div class="flex justify-center">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Title
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="title">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Body
      </label>
      <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="6" placeholder="Write your content here" name="body"></textarea>

      
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Post
      </button>
      
    </div>
  </form>
  @if(session()->has('status'))
  <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">

  <p class="font-bold">{{ session('status') }}</p>
  
</div>

  
  @endif

</div>


    
</x-app-layout>
