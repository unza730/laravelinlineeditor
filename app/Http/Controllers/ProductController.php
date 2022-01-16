<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TaksModel;
class ProductController extends Controller
{
     public function index(Request $request)
    {
         $task = DB::table('taksmodels')->get();
        return view('product', compact('task'));
    }
     public function update(Request $request)
    {
        if ($request->ajax()) {
           TaksModel::find($request->pk)
                ->update([
                    $request->name => $request->value
                ]);
  
            return response()->json(['success' => true]);
        }
    }
     public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['success' => 'success']);
    }
}

