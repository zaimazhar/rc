<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-right mr-1 mb-2">
                <button onclick="toggleModal()" class="text-white px-2 rounded-md text-3xl bg-slate-500 shadow-lg">&#43;</button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2 gap-4 text-white">
                        @foreach ($tasks as $id => $task)
                            <div @class(['shadow-xl', 'col-span-1', 'rounded-sm', 'p-3', 'bg-yellow-600' => ($task->deadline_at > $now), 'bg-blue-600' => ($task->deadline_at < $now)])>
                                Task {{ ++$id }}: {{ $task->name }}
                                <div>
                                    {{ ucfirst($task->status) }} ({{ $now->diffForHumans($task->deadline_at, ['parts' => 2, 'join' => ', ', 'syntax' => \Carbon\CarbonInterface::DIFF_ABSOLUTE])}} {{ $task->status === 'completed' ? ' ago' : ' remaining' }})
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal></x-modal>
</x-app-layout>
