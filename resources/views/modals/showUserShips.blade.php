<div class="modal-header">
    <h5 class="modal-title" id="rolesTitle">Showing Ships for: {{ $user->username }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Tier</th>
                <th>Image</th>
                <th>Premium</th>
                <th>Nation</th>
                <th>Stats</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ships as $ship)
            <tr>
                <td scope="row">{{ $ship->name }}</td>
                <td>{{ $ship->type }}</td>
                <td>{{ $ship->tier_r }}</td>
                <td>@if ($ship->image == 'none') <img src="{{ asset('assets/images/'.$ship->image.'.png') }}" style="width: 30px;"> @else <a href="{{ $ship->image }}" data-lightbox="ships"><img src="{{ $ship->image }}" style="width: 30px;"></a> @endif</td>
                <td>@if ($ship->premium) <img src="{{ asset('assets/images/flags/premship_'.$ship->is_premium.'.png') }}" title="Premium" style="width: 40px;"> @else <img src="{{ asset('assets/images/flags/premship_'.$ship->is_premium.'.png') }}" title="Not Premium" style="width: 40px;"> @endif</td>
                <td><img src="{{ asset('assets/images/flags/'.$ship->nation.'.png') }}" title="{{ Str::upper($ship->nation) }}" style="width: 40px;"></td>
                <td><button class="btn btn-primary btn-sm" id="statsOfShip" data-shipid="{{ $ship->id }}" data-shipuserid="{{ $user->id }}" data-shipname="{{ $ship->name }}">Stats</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
