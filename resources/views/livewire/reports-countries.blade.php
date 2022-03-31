<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">ISO</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item['id'] }}</th>
                    <td><img src="{{ $item['icon'] }}" width="32" height="32"></td>
                    <td>{{ $item['iso'] }}</td>
                    <td>{{ $item['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
