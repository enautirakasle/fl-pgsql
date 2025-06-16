<x-filament::page>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Grupos del curso: {{ $curso->nombre }}</h2>
    </x-slot>

    @if ($curso->grupos->isEmpty())
        <p class="text-gray-500">Este curso no tiene grupos asignados.</p>
    @else
        <ul class="mt-4 list-disc list-inside">
            @foreach ($curso->grupos as $grupo)
                <li>{{ $grupo->nombre }}</li>
            @endforeach
        </ul>
    @endif
</x-filament::page>
