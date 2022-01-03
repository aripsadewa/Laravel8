@extends('layouts.app', ['title' => 'Laravel 8'])

@section('content')
    <x-alert>
        @slot('title')
            header
        @endslot
        Ini adalahslotnya
        @slot('footer')
            ini variable lain
        @endslot
    </x-alert>
<p>
    Ini adalah Home
</p>
@endsection