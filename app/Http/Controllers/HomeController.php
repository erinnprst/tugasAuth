<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
class HomeController extends Controller
{
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('auth');
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function index(): View
{
return view('home');
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function superadminHome(): View
{
return view('superadminHome');
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function adminHome(): View
{
return view('adminHome');
}

public function dosenHome(): View
{
return view('dosenHome');
}

public function mahasiswaHome(): View
{
return view('mahasiswaHome');
}

public function tendikHome(): View
{
return view('tendikHome');
}

public function adminakademikHome(): View
{
return view('adminakademikHome');
}

public function adminkeuanganHome(): View
{
return view('adminkeuanganHome');
}

public function direkturHome(): View
{
return view('direkturHome');
}

public function wakildirektur1Home(): View
{
return view('wakildirektur1Home');
}

public function wakildirektur2Home(): View
{
return view('wakildirektur2Home');
}

public function wakildirektur3Home(): View
{
return view('wakildirektur3Home');
}

public function adminlppmHome(): View
{
return view('adminlppmHome');
}

public function adminsdmHome(): View
{
return view('adminsdmHome');
}
}
