<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;
use CreateClientesTable;
use Illuminate\Support\Facades\DB;
class ClientesController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id_cli','desc')->paginate(10);
        return view('pages/clientes/list', ['clientes'=>$clientes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/clientes/create')->with('cliente', new Cliente);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClienteRequest $request)
    {
        Cliente::create($request->validated());
        return redirect()->route('clientes.index')->with('acto','Los datos del cliente fueron agregados correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cli)
    {
        return view('pages/clientes/detail',['cliente' => Cliente::find($id_cli)]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('pages/clientes/edit',['cliente'=>$cliente]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente, CreateClienteRequest $request)
    {
        $cliente->update($request->validated());
        return redirect()->route('clientes.show',$cliente)->with('acto','Los datos del cliente fueron actualizados correctamente.');
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
