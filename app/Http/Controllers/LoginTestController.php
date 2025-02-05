<?php

namespace App\Http\Controllers;

use App\Models\login_test;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\LoginStoreRequest;
use App\Http\Requests\LoginUpdateRequest;
class LoginTestController extends Controller
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
    public function show(login_test $login_test)
    {
        return view('login.show', compact('login'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login_test $login_test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login_test $login_test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login_test $login_test): RedirectResponse
    {
        $note->delete();
           
        return redirect()->route('login.index')
                        ->with('success', 'Note deleted successfully');
    
    }
}
