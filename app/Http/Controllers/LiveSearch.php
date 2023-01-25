<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }

    function index()
    {
        $products = Product::paginate(5);
        return view('live_search' , compact('products'));
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('products')
                    ->where('title', 'like', '%'.$query.'%')
                    ->orWhere('price', 'like', '%'.$query.'%')
                    ->orWhere('shopkeeper', 'like', '%'.$query.'%')
                    ->get();

            }
            else
            {
                $data = DB::table('products')
                    ->orderBy('id', 'asc')
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->title.'</td>
         <td>'.$row->price.'</td>
         <td>'.$row->shopkeeper.'</td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
