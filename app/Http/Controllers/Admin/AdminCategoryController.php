<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::query();
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('created_at', function (Category $category) {
                    return $category->created_at->diffForHumans();
                })->editColumn('updated_at', function (Category $category) {
                return $category->updated_at->diffForHumans();
            })->editColumn('parent_id', function (Category $category) {
                if ($category->parent_id) {
                    return $category->parent_id;
                }
                return 'None';
            })->addColumn('parent', function (Category $category) {
                if ($category->parent_id) {
                    return $category->parent->title;
                }
                return 'None';
            })
            // ->addColumn('action', function(Category $category) {
            //     $btn = '
            //         <button form-action-url="' . route('admin.category.edit', $category->id) . '" class="btn btn-success btn-sm" id="editCatBtn" data-toggle="modal" data-id="' . $category->id . '" data-action="editCat">Edit</button>
            //         <button form-action-url="' . route('admin.category.addParent', $category->id) . '" class="btn btn-success btn-sm" id="addParentBtn" data-toggle="modal" data-id="' . $category->id . '" data-action="addParent">Add Parent</button>
            //         <button form-action-url="' . route('admin.category.delete', $category->id) . '" id="deleteCatBtn" class="delete btn btn-danger btn-sm">Delete</button>
            //         ';
            //     return $btn;
            // })
                ->addColumn('action', function (Category $category) {
                    $btn = '
                    <button form-action-url="' . route('forum.index', $category->id) . '" class="btn btn-success btn-sm" id="editCatBtn" data-toggle="modal" data-id="' . $category->id . '" data-action="editCat">Edit</button>
                    <button form-action-url="' . route('forum.index', $category->id) . '" class="btn btn-success btn-sm" id="addParentBtn" data-toggle="modal" data-id="' . $category->id . '" data-action="addParent">Add Parent</button>
                    <button form-action-url="' . route('forum.index', $category->id) . '" id="deleteCatBtn" class="delete btn btn-danger btn-sm">Delete</button>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'role', 'leader', 'alts', 'stats', 'ships'])
                ->toJson();
        }
        return view('admin.forum.category.index');
    }

    public function loadModal($modal, $id, $action)
    {
        if ($action == 'createCat') {
            $cats = Category::all()->pluck('id', 'title')->toArray();
            // return ['modal' => $modal, 'id' => $id, 'action' => $action, 'data' => $cats];
            return view('admin.modals.' . $modal, compact('cats'));
        }
        return 'nothing';
        // $cat = Category::findOrFail($id);
        // if ($action == 'editCat') {
        //     // return view('admin.modals.' . $modal, compact($cat));
        //     dd($cat);
        // } else if ($action == 'addParent') {
        //     return view('admin.modals.' . $modal, compact($cat));
        // }
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

    public function addParent(Request $request)
    {
        # code...
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
