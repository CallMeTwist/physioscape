<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    /**
     * CareersController constructor.
     */
    public function __construct()
    {
        $this->path = 'admin.dashboard.careers.';
        $this->model = new Career();
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $careers = $this->model->all();
        return view($this->path.'index')->with('careers', $careers);
    }

    public function add(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:225',
            'description' => 'required|string',
            'photo'=>'required|image|mimes:jpg,png|max:2000',
            'location'=>'required|string|max:225',
            'type'=>'required|string|max:225',
            'deadline'=>'required|'
//            'slug'=>'required|string|max:225',
        ]);

        return redirect()->back() ;
    }

}
