<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditorResource;
use App\Models\Editor;
use App\Http\Requests\StoreEditorRequest;
use App\Http\Requests\UpdateEditorRequest;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EditorResource::collection(Editor::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEditorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Editor $editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editor $editor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEditorRequest $request, Editor $editor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editor $editor)
    {
        //
    }
}
