<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class latihanController extends Controller
{
    public function index(Request $request)
    {
        try{
            $data = User::select('id','name','email')
                ->when(isset($request->name),function($query) use ($request){
                    $query->where('name', "like", '%'.$request->name.'%');
                })
                ->get();
            
            $data = User::select('id','name','email')
                ->when(isset($request->email),function($query) use ($request){
                    $query->where('email', "like", '%'.$request->email.'%');
                })
                ->get();
            return $this->apiResponse("Succes Full", $data);
        
        }catch (\Throwable $th){
            return $this->apiResponse($th->getMessage(), NULL, 500);
        }
    }
}
