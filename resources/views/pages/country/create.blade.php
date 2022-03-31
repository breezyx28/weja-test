@extends('layouts.app')

@section('content')
    <form action="{{ route('countries.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="icon_file">Icon</label>
            <input type="file" class="form-control" id="icon_file" accept="image/*" name="icon" required>

        </div>
        <div class="form-group">
            <label for="country_iso">ISO</label>
            <input type="text" class="form-control" id="country_iso" name="iso" placeholder="Type Country ISO" required>
        </div>

        <div class="form-group">
            <label for="country_name">Name</label>
            <input type="text" class="form-control" id="country_name" name="name" placeholder="Type Country name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
