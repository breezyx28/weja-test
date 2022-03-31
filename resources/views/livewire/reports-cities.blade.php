<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $city)
                <tr>
                    <th scope="row">{{ $city['id'] }}</th>
                    <td>{{ $city['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
