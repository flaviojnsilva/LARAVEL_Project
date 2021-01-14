<?php

namespace App\Http\Controllers;

use App\Mail\sendingEmail;
use App\Models\User;
use App\Models\conferences;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {

    }

    public function admin_conferences()
    {

        return view('admin_conferences', [
            'conferences' => DB::table('conferences')->paginate(5)
        ]);
    }

    public function admin()
    {

        return view('admin', [
            'users' => DB::table('users')->paginate(5)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
//
    }

    public function edit($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        User::destroy($id);
        return redirect('admin/');
    }

    public function updateAdmin($id)
    {
        $users = User::findOrFail($id);
        $users->admin = '1';
        $users->save();
        return redirect('admin/');
    }

    public function updateUser($id)
    {
        $users = User::findOrFail($id);
        $users->admin = '0';
        $users->save();
        return redirect('/admin');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile', [
            'user' => $user,
        ]);
    }
}
