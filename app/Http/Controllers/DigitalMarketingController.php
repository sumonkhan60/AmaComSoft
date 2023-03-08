<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;

class DigitalMarketingController extends Controller
{
    private $marketings;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.marketing.add');
    }

    public function create(Request $request)
    {
        Marketing::newMarketing($request);
        return redirect()->back()->with('message', 'Marketing Info Created Successfully');
    }

    public function manage()
    {
        $this->marketings = Marketing::orderBy('id', 'desc')->get();
        return view('admin.marketing.manage', ['marketings' => $this->marketings]);
    }

    public function edit($id)
    {
        $marketing = Marketing::find($id);
        return view('admin.marketing.edit', ['marketing' => $marketing]);
    }

    public function update(Request $request, $id)
    {
        Marketing::updateMarketing($request, $id);
        return redirect('/manage-marketing')->with('message', 'Marketing Info Updated Successfully');
    }

    public function delete($id)
    {
        $marketing = Marketing::find($id);
        $marketing->delete();
        return redirect('/manage-marketing')->with('message', 'Marketing Info Deleted Successfully');
    }

}
