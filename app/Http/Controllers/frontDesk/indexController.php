<?php

namespace App\Http\Controllers\frontDesk;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Introduce;
class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
       // $ret=DB::select('select * from introduce where id=?',[1]);
       // $intro=$ret[0];
        //return view('frontDesk/index',['intro' => $intro]);
       // $title = '<span style="color: red">文章</span>标题1';
        return view('frontDesk/index');
    }
    public function index1()
    {
        //
        $ret=DB::select('select * from introduce where id=?',[1]);
        $intro=$ret[0];
        return view('frontDesk/introduce',['intro' => $intro]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
