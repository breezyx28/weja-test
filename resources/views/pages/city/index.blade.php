@extends('layouts.app')

@section('content')
    <main>

        <livewire:reports-cities :data="$cities" />

    </main>
@endsection
