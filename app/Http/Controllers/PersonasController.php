<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;
use Illuminate\Support\Facades\DB;
class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::paginate(10);
        return view('pages/personas/list', ['personas'=>$personas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendas = DB::table('tiendas')->get();//Compact pasa variables
        return view('pages/personas/create')->with(compact('tiendas'))
                                            ->with('persona', new Persona);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonaRequest $request)
    {
        Persona::create($request->validated());
        return redirect()->route('personas.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_per)
    {
        return view('pages/personas/read',['persona' => Persona::find($id_per)]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $id_per)
    {
        $tiendas = DB::table('tiendas')->get();
        return view('pages/personas/edit',['persona'=>$id_per], compact('tiendas'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Persona $id_per, CreatePersonaRequest $request)
    {
        $id_per->update($request->validated());
        return redirect()->route('personas.show',$id_per);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$persona->delete();
        //return redirect()->route("personas.index");
    }
}
