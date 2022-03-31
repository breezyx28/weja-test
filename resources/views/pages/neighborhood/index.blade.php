@extends('layouts.app')

@section('content')
    <main>

        <livewire:reports-neighborhoods :data="$neighborhoods" />

    </main>
@endsection
