<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $neighborhood)
                <tr>
                    <th scope="row">{{ $neighborhood['id'] }}</th>
                    <td>{{ $neighborhood['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
