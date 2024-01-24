<?php

namespace App\Http\Controllers; 

use App\Http\Requests\OrgUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use ErlandMuchasaj\LaravelFileUploader\FileUploader;

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
        $file = $request->file('file');
        $response = FileUploader::store($file);
dd($request);
        $request->user()->save();

        return Redirect::route('doc.edit');
    }

   
    
}
