<?php

namespace App\Http\Controllers;

use App\Mail\SendContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use https\App\Controller\User;
class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request){
        $this->validate($request, [
         "name"=> "required|string|min:5|max:100",
         "mail"=> "required|string|min:5|max:20",
         "subject"=> "required|string|min:5|max:100",
         "message"=> "required|string|min:5|max:3000",
        ]);

        Mail::to(User::first())->send(
            new SendContactForm(
                $request->input(key:"name"),
                $request->input(key:"mail"),
                $request->input(key:"subject"),
                $request->input(key:"message"),
            )
            );
            return view('welcome');
    }
}
?>