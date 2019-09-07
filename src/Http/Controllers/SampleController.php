<?php
/**
 * Created by PhpStorm.
 * User: dckap
 * Date: 7/9/19
 * Time: 11:38 AM
 */

namespace Swathi\Sample\Http\Controllers;
use App\Http\Controllers\Controller;


class SampleController extends Controller
{
    public function index(){
        return view('customViews::sample');
    }
}