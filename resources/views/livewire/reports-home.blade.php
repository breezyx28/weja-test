<div class="table-responsive mt-5">
    <div class="group-select row">
        <div class="col-md-3 d-flex flex-column">
            <label for="">Country</label>
            <select wire:model="selectCountry" id="country">
                <option> --- Select --- </option>
                @foreach ($countries as $country)
                    @if (!empty($country))
                        <option value="{{ $country }}">
                            {{ $country }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="col-md-3 d-flex flex-column">
            <label for="">State</label>
            <select wire:model="selectState" id="state">
                <option> --- Select --- </option>
                @foreach ($states as $state)
                    @if (!empty($state))
                        <option value="{{ $state }}">
                            {{ $state }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="col-md-3 d-flex flex-column">
            <label for="">City</label>
            <select wire:model="selectCity" id="city">
                <option> --- Select --- </option>
                @foreach ($cities as $city)
                    @if (!empty($city))
                        <option value="{{ $city }}">
                            {{ $city }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="col-md-3 d-flex flex-column">
            <label for="">Neighborhood</label>
            <select wire:model="selectNeighborhood" id="neighborhood">
                <option> --- Select --- </option>
                @foreach ($neighborhoods as $neighborhood)
                    @if (!empty($neighborhood))
                        <option value="{{ $neighborhood }}">
                            {{ $neighborhood }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Icon</th>
                <th scope="col">ISO</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">City</th>
                <th scope="col">Neighborhood</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td><img src="{{ asset('storage/app/' . $item['country']['icon']) }}" width="32" height="32"></td>
                    <td>{{ @$item['country']['iso'] }}</td>
                    <td>{{ @$item['country']['name'] }}</td>
                    <td>{{ @$item['state']['name'] }}</td>
                    <td>{{ @$item['city']['name'] }}</td>
                    <td>{{ @$item['neighborhood']['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
