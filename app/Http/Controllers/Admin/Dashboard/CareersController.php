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
    public function jobIndex()
    {
        return view($this->path.'jobIndex');
    }

    public function internshipIndex()
    {
        return view($this->path.'internshipIndex');
    }

}
