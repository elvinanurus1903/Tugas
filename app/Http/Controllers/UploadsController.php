<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = \App\Upload::when($request->search, function($query) use($request){
            $query->where('nama', 'LIKE', '%'.$request->search.'%');
        })->orderBy('nim', 'desc')->paginate(10);

        return view('data.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

  /*  public function search(Request $request) //harusnya jadi satu dengan fungsi index
    {
        $search = $request->get('search');
        $data = \App\Upload::where('nama','like','%'.$search.'%')->orderBy('nim','desc')->paginate(5);
        return view('data.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }*/

    function register(){
        return view('register');
    }

    function login(){
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'     =>  'required',
            'nama'    =>  'required',
            'email'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'nim'        =>   $request->nim,
            'nama'       =>   $request->nama,
            'email'        =>   $request->email,
            'image'            =>   $new_name
        );

        \App\Upload::create($form_data);

        return redirect('upload')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Upload::findOrFail($id);
        return view('data.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = \App\Upload::findOrFail($id);
        return view('data.edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                 'nim'     =>  'required',
              'nama'    =>  'required',
            'email'     => 'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                 'nim'     => 'required',
              'nama'    =>  'required',
            'email'     =>  'required'
            ]);
        }

        $form_data = array(
              'nim'        =>   $request->nim,
            'nama'       =>   $request->nama,
            'email'        =>   $request->email,
            'image'            =>   $image_name
        );
  
        \App\Upload::whereId($id)->update($form_data);

        return redirect('upload')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Upload::findOrFail($id);
        $data->delete();

        return redirect('upload')->with('success', 'Data is successfully deleted');
    }
}
