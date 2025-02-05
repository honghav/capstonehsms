<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\LoginStoreRequest;
use App\Http\Requests\LoginUpdateRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logins = Login::latest()->paginate(5);
          
        return view('login.index', compact('login'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Login::create($request->validated());
           
        return redirect()->route('login.index')
                         ->with('success', 'Note created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        return view('login.show', compact('login'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
