<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Coffee;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Image;


class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $coffees = Coffee::all();
        return view('coffees.coffee', compact('coffees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    return view('coffees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:coffees|max:255',
            'price' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Coffee::create($request->all());
        return back()->withMessage('Kaffet tillagt!');

        /*$this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();


        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        /*$this->postImage->add($input);*/

        /*return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);*/

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
       $coffee = Coffee::find($id);
       return view('coffees.show', compact('coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $coffee = Coffee::find($id);
        return view('coffees.edit', compact('coffee'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:coffees|max:255',
            'price' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $coffee = Coffee::find($id);
        $coffee -> fill($request->all());
        $coffee ->save();
        return back() -> withMessage('Uppdaterad');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $coffee = Coffee::find($id);
        $coffee ->delete();
        return back() -> withMessage('Borttagen');
    }
}

