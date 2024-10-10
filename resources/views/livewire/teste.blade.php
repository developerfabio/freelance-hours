<div>
    <h1>Meu Componente Livewire</h1>
    <input wire:model.live="search" />
    <br>
    <br>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
