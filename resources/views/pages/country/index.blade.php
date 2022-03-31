@extends('layouts.app')

@section('content')
    <main>

        <livewire:reports-countries :data="$countries" />

    </main>
@endsection
