@extends('layouts.app')

@section('title')
    Laravel 11
@endsection

@section('content')
<div class="max-w-4xl mx-auto px-4">
    <x-alert type="info">
        <x-slot name="title">Este es el título</x-slot>
        Contenido de la alerta
    </x-alert>
</div>
@endsection

   