@extends('layouts.app')

@section('content')
    <form action="{{ route('neighborhoods.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Select City</label>
            <select name="city_id" class="form-control" id="" required>
                @foreach ($cities as $city)
                    <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="neighborhood_name">Name</label>
            <input type="text" class="form-control" id="neighborhood_name" name="name" placeholder="Type Neighborhood name"
                required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
