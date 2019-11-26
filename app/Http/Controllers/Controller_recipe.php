<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myrecipe;
class Controller_recipe extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recipe = Myrecipe::all();
        return json_encode($recipe,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         echo "create";
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
         // $tensp = $request->input('tensp');
         // $giasp = $request->input('giasp');
         // $soluong = $request->input('soluong');
         // echo "store " . $tensp .$giasp . $soluong;
        $recipe = new Myrecipe;
        $recipe->name_recipe = $request->name;
        $recipe->description_recipe = $request->mota ;
        $recipe->link_image = $request->image;
        $recipe->link_detail = $request->detail;
        $recipe->save();

        return response($recipe,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
         $recipe = Myrecipe::find($id);
         return json_encode($recipe,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
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
         $recipe = Myrecipe::find($id);
         $recipe->name_recipe = $request->name;
         $recipe->description_recipe = $request->mota ;
         $recipe->link_image = $request->image;
         $recipe->link_detail = $request->detail;
         $recipe->save();
         echo "succes";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $recipe = Myrecipe::find($id);
         $recipe->delete();
         echo "succes" ;
    }
}
