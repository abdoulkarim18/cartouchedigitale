<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\CatService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ServiceRequest;

class ServicesDevController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $services = Service::all();
        $cat_services = CatService::all();

        return view('admin.services.index', compact('services','cat_services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service)
    {
        $cats = CatService::all();
        // dd($cats);
        return view('admin.services.create', compact('service' , 'cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        // $data = $request->all();
        // dd($data);
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = 'uploads/services/';
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = rand(11111, 99999) . "." . $extension;
            $file->move($destinationPath, $fileName);
            $photo = $destinationPath . '' . $fileName;
            $data['file'] = $photo;
        }else{
            $destinationPath = 'uploads/services/';
            $fileName = '97510.jpg';
            $photo = $destinationPath . '' . $fileName;
            // $photo = null;
        }
        Service::create([
            'cat_service_id' =>$data['cat_service_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'slug' => Str::slug($data['title']),
            'file' => $photo,
            'user_id' => Auth::id(),
        ]);

        Toastr::success('Creation éffectuer avec succes ');
        return back();
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
    public function edit(Service $service)
    {
        $cats = CatService::all();
        return view('admin.services.edit', compact('service', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = 'uploads/services/';
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = rand(11111, 99999) . "." . $extension;
            $file->move($destinationPath, $fileName);
            $photo = $destinationPath . '' . $fileName;
            $data['file'] = $photo;
        }else{
            $destinationPath = 'uploads/services/';
            $fileName = '97510.jpg';
            $photo = $destinationPath . '' . $fileName;
            // $photo = null;
        }
        $service->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'slug' => Str::slug($data['title']),
            'file' => $photo,
            'cat_service_id' =>$data['cat_service_id'],
            'user_id' => Auth::id(),
        ]);
            // dd($service);
        Toastr::success('Modification éffectuer avec succes ');
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        Toastr::error('Suppression éffectuer avec succes ');
        return redirect()->back();
    }
}
