<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight flex justify-between">
                <span class="font-semibold text-xl">{{ __('Atividades') }}</span>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <a class="font-semibold text-x text-gray-800 leading-tight font-bold py-2 px-4 rounded" style="background-color: #848CFC;" href="{{ route('activities.create')}}">
                Criar atividade
            </a>
        </button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>