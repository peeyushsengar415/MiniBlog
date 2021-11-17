<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(session()->has('status'))
  <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">

  <p class="font-bold">{{ session('status') }}</p>
  
</div>

  
  @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-black border-b border-gray-200">
                    
                        <div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Title
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Body
                            </th>
                            
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach($posts as $post)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $post->id }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $post->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                  {{ $post->title }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $post->body }}
                            </td>
                            
                            <td class="px-6 py-4">
                                {{-- <a href="editpost/{{ $post->id }}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a> --}}

                                <a href="{{ url('/editpost',$post->id) }}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('deletepost',$post->id) }}" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
