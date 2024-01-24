<?php

namespace App\Http\Controllers; 

use App\Http\Requests\OrgUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class OrgController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
     
        return view('organizationSignup');
    }

    /**
     * Update the user's profile information.
     */
    public function update(OrgUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        if($request->imagefile){
          $image = $request->imagefile->getClientOriginalName();
          $ext = pathinfo($image, PATHINFO_EXTENSION);
          $image = time() + rand(10,100) . "." . $ext;
          $request->imagefile->move(public_path('images'), $image);
          $request->user()->image = $image;
        }

        $request->user()->save();

        return Redirect::route('doc.edit');
    }

   
    
}
