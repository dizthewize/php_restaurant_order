<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'desc')->paginate(10);
        return view('manage.items.index')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

        $this->validate($request, [
           'name' => 'required',
           'description' => 'required',
          //  'slug' => 'required|alpha_dash|min:5|max:255',
           'price' => 'required|min:1',
           'image' => 'image|mimes:jpg,jpeg,png|max:10000'
        ]);
        // image upload
        $image=$request->image;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('img', $imageName);
          $formInput['image']=$imageName;
        }


        Food::create($formInput);
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);
        return view('manage.items.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        return view('manage.items.edit')->with('food', $food);
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
      $formInput=$request->except('image');

      $this->validate($request, [
         'name' => 'required',
         'description' => 'required',
        //  'slug' => 'required|alpha_dash|min:5|max:255',
         'price' => 'required|min:1',
         'image' => 'image|mimes:jpg,jpeg,png|max:10000'
      ]);

      $image=$request->image;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('img', $imageName);
        $formInput['image']=$imageName;
      }

      $food = Food::find($id);
      $food->name = $request->input('name');
      $food->description = $request->input('description');
      $food->price = $request->input('price');
      $food->save($formInput);
      return redirect()->route('items.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

        return redirect()->route('items.index');
    }
}
