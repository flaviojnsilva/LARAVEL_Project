<?php

namespace App\Http\Controllers;

use App\Models\conferences;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ConferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('conf/conf_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function imageUploadPost(Request $request)
    {
        //$request - dados preenchidos no formulário
        $request->validate([
            'image' => 'required|image|mimes:jpeg, jpg, png,gif,svg|max:2048',]);
        $conference = new conferences();
        $conference->name = $request->name;
        $conference->local = $request->localizacao;
        $conference->lotacao = $request->lota;
        $conference->descricao = $request->descricao;
        $conference->inscritos = '0';
        $conference->data = $request->data;
        $conference->save();

        //"buscar" id da conf na DB -> table conferences
        $conf = DB::table('conferences')->where('name', $conference->name)->value('id');

        $imageName = $conf . '_' . $conference->name . '_' . date('d-m-Y_His') . '.' . $request->image->extension();

        //path
        $request->image->move(public_path('img/upload'), $imageName);

        //voltar à view conf_creat com mensagem de sucesso
        return back()->with('message', 'Conferência criada com sucesso!');
    }

    public function conf_create()
    {
        return view('conf.conf_create');
    }
}
