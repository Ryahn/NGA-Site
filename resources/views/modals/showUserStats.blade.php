<div class="modal-header">
    <h5 class="modal-title" id="rolesTitle">Showing Stats for: {{ $user->username }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row stats-row">
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Created
                </div>
                <div class="div-control">{{ $user->u_created_at->diffForHumans() }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Last Battle
                </div>
                @php
                $current = $user->last_battle_time;
                $now = Carbon::now();
                $days = $current->diffInDays($now)
                @endphp
                @if ($days > 7)
                <div class="div-control" style="color:red;">{{ $user->last_battle_time->diffForHumans() }}</div>
                @else
                <div class="div-control">{{ $user->last_battle_time->diffForHumans() }}</div>
                @endif
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Updated
                </div>
                <div class="div-control">{{ $user->u_updated_at->diffForHumans() }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Logged Out
                </div>
                <div class="div-control">{{ $user->logout_at->diffForHumans() }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Leveling Tier
                </div>
                <div class="div-control">{{ $user->leveling_tier }}</div>
            </div>
        </div><!-- End Col -->
    </div>
    <div class="row stats-row">
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Survived Battles
                </div>
                <div class="div-control">{{ number_format($user->survived_battles) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Survived Wins
                </div>
                <div class="div-control">{{ number_format($user->survived_wins) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Total Battles
                </div>
                <div class="div-control">{{ number_format($user->total_battles) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Total Frags
                </div>
                <div class="div-control">{{ number_format($user->total_frags) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Max Frags Per Battled
                </div>
                <div class="div-control">{{ number_format($user->max_frags_battle) }}</div>
            </div>
        </div><!-- End Col -->
    </div>
    <div class="row stats-row">
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Total Losses
                </div>
                <div class="div-control">{{ number_format($user->total_losses) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Total Damage
                </div>
                <div class="div-control">{{ number_format($user->total_damage_dealt) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Max Planes Killed
                </div>
                <div class="div-control">{{ number_format($user->max_planes_killed) }}</div>
            </div>
        </div><!-- End Col -->
        <div class="col col-stats">
            <div class="div-group">
                <div class="group-text">
                    Total Planes Killed
                </div>
                <div class="div-control">{{ number_format($user->total_planes_killed) }}</div>
            </div>
        </div><!-- End Col -->
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
