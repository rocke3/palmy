<?php

namespace App\Http\Controllers; 

use App\Http\Requests\DocUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
    
        return view('documentSubmission');
    }

    /**
     * Update the user's profile information.
     */
    public function update(DocUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        
        return Redirect::route('doc.edit');
    }

   
    
}
