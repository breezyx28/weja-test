@extends('layouts.app')

@section('content')
    <form action="{{ route('states.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Select Country</label>
            <select name="country_id" class="form-control" id="" required>
                @foreach ($countries as $country)
                    <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="state_name">Name</label>
            <input type="text" class="form-control" id="state_name" name="name" placeholder="Type State name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
