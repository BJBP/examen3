<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\CreateServicioRequest;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function __construct() {
        //$this->middleware('auth')->only('create', 'edit');
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //
        $clientes = Cliente::latest()->paginate();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //
        return view('create', [
            'cliente' => new Cliente,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateServicioRequest $request)
    {
        //
        $cliente = new Cliente($request->validated());
        $cliente->save();
        return redirect()->route('clientes.index')->with('estado', 'El cliente fue creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        //
        return view('show', [
            'cliente' => Cliente::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cliente  $id
     * @return \Illuminate\View\View
     */
    public function edit(Cliente $cliente)
    {
        //
        return view('edit', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cliente $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Cliente $cliente, CreateServicioRequest $request)
    {
        //
        $cliente->update($request->validated());
        return redirect()->route('clientes.show', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cliente  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect()->route('clientes.index')->with('estado', 'El cliente fue eliminado correctamente');
    }
}
