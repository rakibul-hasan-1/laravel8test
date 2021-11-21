<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Settings;
use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes=Home::all();
        $offer=DB::table('offer')->get();
        return view('home', compact('homes','offer'));
    }
public function addhome(){
    return view('addhome');
}
public function fatch(Request $request){
    $select=$request->get('select');
    dd($select);
    $value=$request->get('value');
    $first=$request->get('first');
    $data=DB::table('offer')->where($select,$value)->get();
    $output='<p class="result" id="result">Result: '.$first.'</p>';
    foreach($data as $row){
        $output.='<p class="result" id="result">Result: '.$row->first.'</p>';
    }
    echo $output;
}
public function doUpdateAccessRole($id, Request $request)
{
   $place_id = $request->get('id');
   $Role = UserAccess::findOrFail($id);
   $Role->user_access_role_id_fk = $id_role;
   $Role->update($request->all());
   return 'success';
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'  =>'required',
            'phone'     =>'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('addhome')
                ->withErrors($validator);
        }else{
            $home=new Home();
            $home->name=$request->name;
            $home->email=$request->email;
            $home->phone=$request->phone;
            $home->user=Auth::user()->id;
            if($request->category)
            {
            $categoryname='';
            foreach($request->category as $key=>$category){
                // $imgName=Carbon::now()->timestamp.$key.'.'.$image->extension();
                // $image->storeAs('products',$imgName);
                $categorysName=$category;
                $categoryname=$categoryname.','.$categorysName;
            }
            $home->category=$categoryname;
        }
            $home->save();
            Session()->flash('message','Home Has been saved succcessfully!');
            return redirect()->route('add.home');
        }
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
    public function edit($home_id)
    {
        $home=Home::where('id',$home_id)->first();
        return view('edithome', compact('home'));
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
        $rules = array(
            'name'       => 'required',
            'email'  =>'required',
            'phone'     =>'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('addhome')
                ->withErrors($validator);
        }else{
            $home=Home::where('id',$id)->first();
            $home->name=$request->name;
            $home->email=$request->email;
            $home->phone=$request->phone;
            $home->save();
            Session()->flash('message','Home Has been Updated succcessfully!');
            return redirect()->route('home');
        }
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
