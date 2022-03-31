@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <livewire:reports-home :data="$data->toArray()" />

    </div>
@endsection
