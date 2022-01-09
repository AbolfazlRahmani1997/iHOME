<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user=User::find(Auth::user()->id);
       if (Gate::allows('isManager'))
       { $homes=Home::where('user_id','=',Auth::user()->id)->get();
        return $homes;
       }
        if (Gate::allows('isAdmin'))
        {

            return Home::where('user_id','=',Auth::user()->id)->get();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
       return view('manager.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
     $home=new Home();
     $home->name=$request->name;
     $home->address=$request->address;
     $home->user_id=Auth::user()->id;
     $home->save();
     return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return Response
     */
    public function destroy(Home $home)
    {
        //
    }

    /**
     * @throws \Exception
     */
    public function getCell(int $id)
    {
        $home=Home::findOrFail($id);
        return view('manager.cell.index',['cells'=>$home->cells]);

    }
}
