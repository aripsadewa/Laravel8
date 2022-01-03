<x-app-layout title="About">
    <h1>Ini adalah About</h1>
    <x-alert>
        @slot('titlenya')
            ini titlenya
        @endslot
        ini slot x-alert
        @slot('footer')
            slot footer
        @endslot
    </x-alert>
</x-app-layout>