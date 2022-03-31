@extends('layouts.app')

@section('content')
    <main>

        <livewire:reports-states :data="$states" />

    </main>
@endsection
