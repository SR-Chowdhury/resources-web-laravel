<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicInput;

class DynamicInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DynamicInput::all();
        return view('dynamic-input.home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dynamic-input.dynamic_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request->user_name);
        $validate = $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        for ($i = 0; $i< count($request->user_name); $i++) {
            $data[] = [
                'user_name' => $request->user_name[$i],
                'email' => $request->email[$i],
                'phone' => $request->phone[$i]
            ];
        }
        // return response()->json($data);
        $res = DynamicInput::insert($data);

        if($res) {
            $notification = array(
                'message' => 'Alhamdulillah, Data is successfully inserted',
                'alert-type' => 'success'
            );
            return Redirect()->to('/dynamic-input')->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Ops! data is failed to insert.',
                'alert-type' => 'error'
            );
            return Redirect()->to('/dynamic-input')->with($notification);
        }
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
    public function edit($id)
    {
        //
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
