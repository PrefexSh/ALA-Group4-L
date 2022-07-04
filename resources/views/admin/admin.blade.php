<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Possible actions:<br>
                    <a href="{{ url('admin/posts') }}" style="color: dodgerblue;">Menage Posts</a><br>
                    <a href="{{ route('posts.index') }}" style="color: dodgerblue;">Delete Posts</a><br>
                    <a href="{{ route('posts.index') }}" style="color: dodgerblue;">Show Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
