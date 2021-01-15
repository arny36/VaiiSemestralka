<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::paginate(25);

        $grid = new Datagrid($users, $request->get('f', []));

        $grid->setColumn('name' , 'Full name')
            ->setColumn('email', 'Email address')
            ->setActionColumn([
                'wrapper' => function ($value, $row) {
                return '<a href="' . route('user.edit',[$row->id]). '"title="Edit " class="btn btn-sn btn-primary">Edit</a>
                        <a href="' .route('user.delete', $row->id). '"title="Delete" data-method="DELETE" class="btn btn-sn btn-danger" data-confirm="Are you sure?">Delete</a>';
                }
            ]);


        return view('user.index' , [
            'grid' => $grid
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            'action' => route('user.store'),
            'method' => 'post'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->save();
        return redirect()->route('user.index');
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
    public function edit(User $user)
    {
        $user->password = " ";
        return view('user.edit', [
            'action' => route('user.update' , $user->id),
            'method' => 'put',
            'model' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users' .$user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
