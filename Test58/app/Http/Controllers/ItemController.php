<?php

namespace App\Http\Controllers;

use App\Entities\Item;
use Illuminate\Http\Request;
use App\Entities\User;
use Carbon\Carbon;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Item::paginate(5);
        $action = route('item.insert');
       return view('items.create')->with(compact('items','action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $me = $request->user();
        list($rules ,$messages) = $this->_rules();
        $this->validate($request,$rules,$messages);
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $units = $request->input('units');

        $item =[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'units'=>$units,
            'id_user'=>$me->id,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ];

        Item::insert($item);
        return redirect()->route('items.view');
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
        $action = route('item.update',['id'=> $id]);

        $itemedit = Item::find($id);

        $items = Item::paginate(6);
      return view('items.edit')->with(compact('items','itemedit','action'));
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
        $me = $request->user();

        list($rules ,$messages) = $this->_rules();
        $this->validate($request,$rules,$messages);
        $item = Item::find($id);
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->units = $request->input('units');
        $item->id_user =$me->id;
        $item->save();
        return redirect()->route('items.view');



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


    private function _rules(){
        $messages =[
            'name.required' =>'El nombre del item es requerido',
            'name.min'=>'El nombre del item debe tener minimo de 3 caractes',
            'description.required'=>'Ingrese una descripcion',
            'description.min'=>'La descripcion debe ser 3  caracteres',
            'description.max'=>'La descripcion no debe ser mas de 120 caracteres',
            'price.numeric'=>'el precio debe ser numerico',
            'price.min'=>'Ingrese un valor mayor a 0',
            'price.max'=>'el valor de debe ser mas de 99',
            'units.min'=>'Ingrese un valor mayor a 0',
            'units.max'=>'el valor de debe ser mas de 50'

        ];
        $rules =[
            'name'=>'required|min:3|max:30',
            'description'=>'required|min:3|max:120',
            'price'=>'numeric|min:1|max:99',
            'units'=>'numeric|min:1|max:50',
        ];

        return array($rules,$messages);
    }

}
