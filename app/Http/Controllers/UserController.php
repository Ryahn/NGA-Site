<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Ship;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::query();
            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('updated_at', function (User $user) {
                    return $user->updated_at->diffForHumans();
                })
                ->editColumn('created_at', function (User $user) {
                    return $user->created_at->diffForHumans();
                })
                ->addColumn('clan', function (User $user) {
                    return $user->clan();
                })
                ->addColumn('leader', function (User $user) {
                    if ($user->isLeader()) {
                        $html = '<span class="label label-danger label-inline leader">Yes</span>';
                    } else {
                        $html = '<span class="label label-success label-inline leader">No</span>';
                    }
                    return $html;
                })
                ->addColumn('role', function (User $user) {
                    $btn = '<button class="btn btn-roles btn-sm" id="showRolesbtn" data-toggle="modal" data-id="' . $user->id . '" data-action="rolesUser">Show Roles</button>';
                    return $btn;
                })
                ->addColumn('alts', function (User $user) {
                    $btn = '<button class="btn btn-alts btn-sm" id="showAltsBtn" data-toggle="modal" data-id="' . $user->id . '" data-action="showAlts">Show Alts</button>';
                    return $btn;
                })
                ->addColumn('stats', function (User $user) {
                    $btn = '<button class="btn btn-stats btn-sm" id="showStatsBtn" data-toggle="modal" data-id="' . $user->id . '" data-action="showUserStats">Show Stats</button>';
                    return $btn;
                })
                ->addColumn('ships', function (User $user) {
                    $btn = '<button class="btn btn-ships btn-sm" id="showShipsBtn" data-toggle="modal" data-id="' . $user->id . '" data-action="showUserShips">Show Ships</button>';
                    return $btn;
                })
                ->addColumn('action', function (User $user) {

                    $btn = '
                    <button form-action-url="' . route('users.addAlt', $user->id) . '" class="btn btn-primary btn-sm" id="addAltBtn" data-toggle="modal" data-id="' . $user->id . '" data-action="altUser">Add ALT</button>
                    <button form-action-url="' . route('users.update', $user->id) . '" class="btn btn-success btn-sm" id="editUserBtn" data-toggle="modal" data-id="' . $user->id . '" data-action="editUser">Edit</button>
                    <button form-action-url="' . route('users.delete', $user->id) . '" id="deleteUserBtn" class="delete btn btn-danger btn-sm">Delete</button>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'role', 'leader', 'alts', 'stats', 'ships'])
                ->toJson();
        }

        $pageData = [
            'title' => 'Users',
        ];
        return view('user.index', compact('pageData'));
    }

    public function loadModal($modal, $id, $action)
    {
        $user = User::findOrFail($id);
        if ($action == 'editUser') {
            $roles = Role::all()->map(function ($role) {
                return ['id' => $role->id, 'name' => $role->name];
            });

            return view('modals.' . $modal, compact('user', 'roles'));
        } else if ($action == 'altUser') {
            $users = $user->all();
            return view('modals.' . $modal, compact('users', 'user'));
        } else if ($action == 'rolesUser') {
            $data = $user->roles->map(function ($role) {
                if ($role->name == 'Admin') {
                    $rname = '<span class="label label-danger label-inline">' . $role->name . '</span>';
                } else {
                    $rname = '<span class="label label-primary label-inline">' . $role->name . '</span>';
                }
                return $rname;
            })->implode('');

            $data = [
                'username' => $user->username,
                'id' => $user->id,
                'data' => $data
            ];
            return view('modals.' . $modal, compact('data'));
        } else if ($action == 'showAlts') {
            $alts = $user->getAlts();
            return view('modals.' . $modal, compact('alts', 'user'));
        } else if ($action == 'showUserStats') {
            return view('modals.' . $modal, compact('user'));
        } else if ($action == 'showUserShips') {
            $ships = $user->ships->sortBy('name');
            return view('modals.' . $modal, compact('ships', 'user'));
        }
    }

    public function login()
    {
        if (env('APP_ENV') === 'local') {
            $user = User::find(env('ADMIN_USER_ID'));
            Auth::login($user);
            return redirect('/home');
        }
        $redirect_url = urlencode('http://nga.test/openid/auth');
        $url = "https://api.worldoftanks.com/wot/auth/login/?application_id=67942732fd8eb7cca379240d4ee9e31e&redirect_uri=$redirect_url";
        return redirect($url, 302);
    }

    public function openid()
    {
        if (request()->status !== 'ok') throw new Exception('Could not log in as user!');

        $user_id = request()->account_id;
        $password = Hash::make(str_random(16));

        $data = [
            'username' => request()->nickname,
            'access_token' => request()->access_token,
            'id' => $user_id,
            'expires_at' => request()->expires_at,
            'password' => $password
        ];

        $u = User::updateOrCreate(['id' => $user_id], $data);
        Auth::login($u, true);
        return redirect('/dashboard');
    }

    public function dashboard()
    {
        return redirect('/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id, Request $request)
    {
        $roles = Role::all()->map(function ($role) {
            return ['id' => $role->id, 'name' => $role->name];
        });
        return json_encode(['roles' => $roles, 'user' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function addAlt(Request $request, User $id)
    {
        $alts = $request->input('alts');
        $sync = $id->alts()->sync($alts);

        if ($sync['attached']) {
            return [
                'status' => true,
                'msg' => 'Updated alts for ' . $id->username
            ];
        } elseif ($sync['detached']) {
            return [
                'status' => true,
                'msg' => 'Removed alts from ' . $id->username
            ];
        } elseif ($sync['updated']) {
            return [
                'status' => true,
                'msg' => 'Updated alts for ' . $id->username
            ];
        }
        return [
            'status' => false,
            'msg' => 'Did not update alts for ' . $id->username
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        $roles = $request->input('userRoles');
        $sync = $id->roles()->sync($roles);

        if ($sync['attached']) {
            return [
                'status' => true,
                'msg' => 'Updated roles for ' . $id->username
            ];
        } elseif ($sync['detached']) {
            return [
                'status' => true,
                'msg' => 'Removed roles from ' . $id->username
            ];
        } elseif ($sync['updated']) {
            return [
                'status' => true,
                'msg' => 'Updated roles for ' . $id->username
            ];
        }
        return [
            'status' => false,
            'msg' => 'Did not update roles for ' . $id->username
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {

        if ($id->delete()) {
            return [
                'status' => true,
                'msg' => 'User: ' . $id->username . ' has been restored!'
            ];
        }
        return [
            'status' => false,
            'msg' => 'User: ' . $id->username . ' could not be restored!'
        ];
    }

    public function deletedUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::onlyTrashed();
            return Datatables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('updated_at', function (User $user) {
                    return $user->updated_at->diffForHumans();
                })
                ->editColumn('created_at', function (User $user) {
                    return $user->created_at->diffForHumans();
                })
                ->editColumn('deleted_at', function (User $user) {
                    return $user->deleted_at->diffForHumans();
                })
                ->addColumn('action', function (User $user) {

                    $btn = '
                    <button data-userid="' . $user->id . '" class="btn btn-warning font-weight-bold btn-sm" id="restoreUserBtn">Restore</button>
                    ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        $pageData = [
            'title' => 'Users',
        ];
        return view('user.deletedUsers', compact('pageData'));
    }

    public function restoreUser($id)
    {
        $user = User::withTrashed()->where('id', $id);
        if ($user->restore()) {
            return [
                'status' => true,
                'msg' => 'User: ' . $user->first()->username . ' has been restored!'
            ];
        }
        return [
            'status' => false,
            'msg' => 'User: ' . $user->first()->username . ' could not be restored!'
        ];
    }

    public function shipStats($shipid, $userid)
    {
        // $userid = $userid;
        $ship = Ship::with(['users' => function ($query) use($userid) {
            return $query->where('users.id', '=', $userid);
        }])->find($shipid);

        return [
            'average_damage_dealt' => floor($ship->average_damage_dealt),
            'average_frags' => floor($ship->average_frags),
            'win_rate' => floor($ship->win_rate),
            'wins' => $ship->users->first()->pivot->wins,
            'frags' => $ship->users->first()->pivot->frags,
            'max_damage_dealt' => $ship->users->first()->pivot->max_damage_dealt,
        ];
    }
}
