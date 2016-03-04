<?php

namespace App\Http\Controllers\backManager\display;

use Illuminate\Http\Request;
use App\TeamIntroduction;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $intro=TeamIntroduction::find(1);
        //print_r($intro);
        return view('backManager/display/about/about',['intro'=>$intro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function introEdit($id)
    {
        //
        $intro=TeamIntroduction::find($id);
        return view('backManager/display/about/introEdit',['intro'=>$intro]);
    }
    public function introEditOk(Request $request,$id)
    {
       // return  dd($request->all()).$id;// $request->get('Title').$request->get('content');
        //通过id把数据查出来，通过来接受表单的数据
        $intro=TeamIntroduction::find($id);
        //return dd($intro->Title);
        $intro->Title = $request->Title;
        $intro->iContent = $request->iContent;//strip_tags()清除html格式
        $intro->updateTime = $request->updateTime;
        $intro->updateMember =$request->updateMember;
        $intro->save();
        //跳转
        return redirect(url('manager/display/about'));
        //return view('backManager/display/about/aboutEdit',['intro'=>$intro]);
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
        //
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
}
