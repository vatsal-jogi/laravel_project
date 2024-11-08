<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\admission;
use App\Models\Signup;
use App\models\stud_data;
use Illuminate\Support\Facades\Auth;


class mycontroller extends Controller
{
    public function home()
    {
        return view('client.home');
    }
    public function contact()
    {
        return view('client.contactus');
    }
    public function about()
    {
        return view('client.aboutus');
    }
    public function Courses()
    {
    return view('client.Courses');
    }
    public function create()
    {
        return view('client.create');
    }
    public function store(Request $request)
    {
        $data =new Registration();
        $data->name  = $request->name;
        $data->email  = $request->email;
        $data->dob  = $request->dob;
        $data->fathers_name  = $request->fathersname;
        $data->mothers_name  = $request->mothersname;
        $data->gender  = $request->gender;
        $data->country  = $request->country;
        $data->city  = $request->city;
        $data->save();
        return redirect()->route('admin.view');

    }
    public function login()
    {
        return view('client.login');
    }
    public function signup()
    {
        return view('client.signup');
    }
    public function storesign(Request $request)
    {
        $data =new Signup();
        $data->firstname  = $request->firstname;
        $data->lastname  = $request->lastname;
        $data->email  = $request->email;
        $data->password  = $request->password;
        $data->repeatpass  = $request->repeatpass;
        $data->save();
        return redirect()->route('admin.signview');

    }
    public function admission()
    {
        return view('client.admission');
    }

//admin

    public function index()
    {
        return view('admin.index');
    }
    public function view()
    {
        $data=Registration::get();
        return view('admin.view',compact('data'));
    }
    public function destroy($id)
    {
        $data=Registration::find($id);
        $data->delete();
        return redirect()->route('admin.view');
    }

    public function edit($id)
    {
        $data=Registration::find($id);
        return view('admin.edit',compact('data'));

    }
    public function update(Request $request,$id)
    {
        $data =Registration::find($id);
        $data->name  = $request->name;
        $data->email  = $request->email;
        $data->dob  = $request->dob;
        $data->fathers_name  = $request->fathersname;
        $data->mothers_name  = $request->mothersname;
        $data->gender  = $request->gender;
        $data->country  = $request->country;
        $data->city  = $request->city;
        $data->save();
        return redirect()->route('admin.view');

    }

    //admission

    public function data(Request $request)
    {
        $data =new admission();
        $data->firstname  = $request->firstname;
        $data->lastname  = $request->lastname;
        $data->dob  = $request->dob;
        $data->email  = $request->email;
        $data->mobile  = $request->mobile;
        $data->gender  = $request->gender;
        $data->address  = $request->address;
        $data->city  = $request->city;
        $data->pincode  = $request->pincode;
        $data->state  = $request->state;
        $data->country  = $request->country;
        $data->hobbies  = $request->hobbies;
        $data->save();
        return redirect()->route('admin.dataview');
    }

    public function dataview()
    {
    $data=admission::get();
    return view('admin.dataview',compact('data'));
    }

    public function signview()
    {
        $data=Signup::get();
        return view('admin.signup',compact('data'));
    }

    public function editsign($id)
    {
        $data=Signup::find($id);
        return view('admin.editsign',compact('data'));
    }

    public function updates(Request $request,$id)
    {
        $data =Signup::find($id);
        $data->firstname  = $request->firstname;
        $data->lastname  = $request->lastname;
        $data->email  = $request->email;
        $data->password  = $request->password;
        $data->repeatpass  = $request->repeatpass;
        $data->save();
        return redirect()->route('admin.signview');
    }

    public function destroys($id)
    {
        $data=Signup::find($id);
            $data->delete();
            return redirect()->route('admin.signview');
     }

    public function loginy(Request $request)
        {
            $validated = $request->validate([
                "email"=>"required",
                "dob"=>"required"
            ]);

            if(Auth::attempt([$validated]))
            {
                $request->session()->regenerate();
                return redirect()->intended('client.home');
            }
            echo "Invalid email or password";
        }

//courses

public function tdme()
{
    return view('client.tdme');
}
public function bdcp()
{
    return view('client.bdcp');
}
public function me()
{
    return view('client.me');
}
public function dm()
{
    return view('client.dm');
}
public function dme()
{
    return view('client.dme');
}
public function draughtsman()
{
    return view('client.draughtsman');
}
public function ee()
{
    return view('client.ee');
}
public function fitterengineering()
{
    return view('client.fitter engineering');
}
public function fvp()
{
    return view('client.fvp');
}
public function ite()
{
    return view('client.ite');
}
public function lmm()
{
    return view('client.lmm');
}
public function mdme()
{
    return view('client.mdme');
}
public function te()
{
    return view('client.te');
}
public function secretarial()
{
    return view('client.secretarial practice');
}
public function mie()
{
    return view('client.mie');
}
public function pumpoperator()
{
    return view('client.pump operator');
}
public function apply()
{
    return view('client.apply');
}

public function success()
{
    return view('client.success');
}

public function test()
{
    return view('client.test');
}


}


