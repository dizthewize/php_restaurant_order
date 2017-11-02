<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Food;
use Spatie\OpeningHours\OpeningHours;

class PagesController extends Controller
{

  public function index()
  {
    $foodGallery = Food::take(8)->get();
    $foods = Food::all();
    return view('pages.index')->with('foods', $foods)->with('foodGallery', $foodGallery);
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

      $randomFood = Food::inRandomOrder()
                          ->take(4)
                          ->get();
      $food = Food::find($id);
      return view('pages.foods.show', ['foods' => Food::find($id)])->with('food', $food)->with('randomFood', $randomFood);
  }

  public function getContact()
  {
      $openingHours = OpeningHours::create([
      'monday' => ['09:00-22:00'],
      'tuesday' => ['09:00-22:00'],
      'wednesday' => ['09:00-22:00'],
      'thursday' => ['09:00-22:00'],
      'friday' => ['09:00-23:00'],
      'saturday' => ['09:00-23:00'],
      'sunday' => [],
      'exceptions' => [
          '2016-12-25' => [],
          ],
      ]);

    return view('pages.contact')->with('openingHours', $openingHours);
  }

}
