<?php

namespace App\Http\Controllers;

use App\Models\Europeo;
use Illuminate\Http\Request;

class EuropeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Europeo::all();
        
        return view("tabla", ['parametros' => [
                'uri' => 'europeo',
                'titulo' => 'Datos de tabla Europea',
                'columnas' => ['nombre', 'copas', 'nacionales'],
                'contenido' => $data ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Europeo;

        return view('crear', ['parametros' => [
                                'uri' => 'europeo',
                                'labels' => ['Nombre','Copas','Nacionales']]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestArray = $request->toArray();

        $data = [
            'name' => $requestArray[0],
            'copas'=> $requestArray[1],
            'nacionales'=> $requestArray[2]
        ];

        Europeo::create($data);
        return redirect('/europeo');
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
        $model = Europeo::find($id);

        $data = [
            'nombre' => ['Nombre', $model->name],
            'copas' => ['Copas', $model->copas],
            'nacionales' => ['Nacionales', $model->nacionales]
        ];

        return view('editar', ['parametros' => ['id' => $id, 'labels' => $data, 'uri' => "europeo"]]);
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
        $model = Europeo::find($id);

        $requestArray = $request->toArray();
        
        $model->name = $requestArray['nombre'];
        $model->copas = $requestArray['copas'];
        $model->nacionales = $requestArray['nacionales'];

        $model->save();

        return redirect('/europeo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Europeo::find($id);

        $model->delete();

        return redirect('/europeo');
    }
}

