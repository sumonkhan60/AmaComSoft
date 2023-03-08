<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;
    private $services;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.service.add');
    }

    public function create(Request $request)
    {
        Service::newService($request);
        return redirect()->back()->with('message', 'Service Info Created Successfully');
    }

    public function manage()
    {
        $this->services = Service::orderBy('id', 'desc')->get();
        return view('admin.service.manage', ['services' => $this->services]);
    }

    public function edit($id)
    {
        $this->service = Service::find($id);
        return view('admin.service.edit', ['service' => $this->service]);
    }

    public function update(Request $request, $id)
    {
        Service::updateService($request, $id);
        return redirect('/manage-service')->with('message', 'Service Info Updated Successfully');
    }

    public function delete($id)
    {
        $this->service = Service::find($id);
        $this->service->delete();
        return redirect('/manage-service')->with('message', 'Service Info Deleted Successfully');
    }

}
