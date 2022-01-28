<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Workspaces') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="text-center w-full table-auto">
                        <tr class="border-2 border-gray-700">
                            <th class="py-3 ">#ID</th>
                            <th>Name</th>
                        </tr>
                    @foreach ($workspaces as $workspace)
                        <tr class="border-2 border-blue-700">
                            <td class="py-2">
                                {{ $workspace->id }}
                            </td>
                            <td>
                                <a class="text-blue-500" href="{{ route('list_task', $workspace->id) }}">{{ $workspace->name }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
