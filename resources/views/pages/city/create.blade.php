@extends('layouts.app')

@section('content')
    <form action="{{ route('cities.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Select State</label>
            <select name="state_id" class="form-control" id="" required>
                @foreach ($states as $state)
                    <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="city_name">Name</label>
            <input type="text" class="form-control" id="city_name" name="name" placeholder="Type City name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
