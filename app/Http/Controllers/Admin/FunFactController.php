<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFunFactRequest;
use App\Models\Funfact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FunFactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $funFacts = Funfact::all();
        return view('dashboard.content.funfact.index', compact('funFacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.content.funfact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFunFactRequest $request
     * @return RedirectResponse
     */
    public function store(StoreFunFactRequest $request): RedirectResponse
    {
        $funFact = Funfact::query()->create($request->validated());
        if ($funFact){
            return redirect()->route('dashboard.funfact.index')->with('sukses', ' Success Inserted '.$funFact->body);
        }
        return redirect()->back()->withErrors("Failed Insert");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Funfact $funfact
     * @return View
     */
    public function edit(Funfact $funfact):View
    {
        return view('dashboard.content.funfact.edit', compact('funfact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreFunFactRequest $request
     * @param Funfact $funfact
     * @return RedirectResponse
     */
    public function update(StoreFunFactRequest $request, Funfact $funfact)
    {
        if ($funfact->update($request->validated())){
            return redirect()->route('dashboard.funfact.index')->with('sukses', $funfact->body.' Updated Success ');
        }
        return redirect()->back()->withErrors('Update Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Funfact $funfact
     * @return RedirectResponse
     */
    public function destroy(Funfact $funfact)
    {
        if ($funfact->delete()){
            return redirect()->route('dashboard.funfact.index')->with('sukses', $funfact->body.' Deleted ');
        }
        return redirect()->back()->withErrors('Delete Failed');
    }
}
