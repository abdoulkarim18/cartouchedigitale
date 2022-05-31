<?php

namespace App\Http\Controllers\Admin;

use App\Models\CatService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CatServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catservices = CatService::all();
        return view('admin.services.categories.create', compact('catservices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $this->validate($request,[
            'libelle' => 'required',
        ]);
        CatService::create([
            'libelle' =>$data['libelle'],
            'slug' => Str::slug($data['libelle']),
            'user_id' => Auth::id(),
        ]);
        Toastr::success('Categories créé avec succes');
        return redirect()->back();

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
    public function edit(CatService $catservice, $id)
    {
        // dd($catservice->id);
        $catservice = CatService::find($id);
        return view('admin.services.categories.edit', compact('catservice'));
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
        $catservice = CatService::find($id);
        $data = Request()->all();
        $catservice->update([
            'libelle' => $data['libelle'],
            'slug' => Str::slug($data['libelle']),
            'user_id' => Auth::id(),
        ]);
        Toastr::success('Modification éffectuer avec succes ');
        return redirect()->route('admin.cat-services.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatService $catservice, $id)
    {   
        $catservice = CatService::find($id);
        $catservice->delete();
        Toastr::error('Categorie supprimer avec succes');
        return redirect()->back();
    }
}
