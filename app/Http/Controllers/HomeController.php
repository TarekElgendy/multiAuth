<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MajorCategory;
use App\Models\Page;
use App\Models\Product;
use App\Models\Productitem;
use App\Models\Section;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function index()
    {
        dd('Hello ... ');
    } //end of method

}
