<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class PeopleController extends Controller
{
   
 
    
    public function index()
    {

            $People = People::all();
        
            return response()->json( $People );
           
    }
    public function show(Request $request, $id)
{
        $person = People::find($id);
         
        return response()->json($person);

}
public function create(Request $request)
{
   $newperson = new People();

   $newperson -> name = $request->input('name'); 
   $newperson -> mobile = $request->input('mobile');
   $newperson -> city = $request->input('city');
   $newperson -> street = $request->input('street');
   $newperson -> age = $request->input('age');
   $newperson -> country = $request->input('country');

   $newperson->save();
   return response() ->json($newperson);
}
public function destroy($id)
  {
    $person = People::find($id);
    $person->delete();
    return response()->json("Rekord usunięty");
  }







}