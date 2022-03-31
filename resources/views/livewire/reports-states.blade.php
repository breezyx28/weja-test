<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $state)
                <tr>
                    <th scope="row">{{ $state['id'] }}</th>
                    <td>{{ $state['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
