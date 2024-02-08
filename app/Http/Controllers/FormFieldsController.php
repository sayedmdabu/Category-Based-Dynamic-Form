<?php

namespace App\Http\Controllers;

use App\Models\FormField;
use Illuminate\Http\Request;

class FormFieldsController extends Controller
{
    public function index()
    {
        $formFields = FormField::all();
        return view('form_fields.index', compact('formFields'));
    }

    public function create()
    {
        return view('form_fields.create');
    }

    public function store(Request $request)
    {
        FormField::create($request->all());
        return redirect()->route('form_fields.index');
    }

    public function show(FormField $formField)
    {
        return view('form_fields.show', compact('formField'));
    }

    public function edit(FormField $formField)
    {
        return view('form_fields.edit', compact('formField'));
    }

    public function update(Request $request, FormField $formField)
    {
        $formField->update($request->all());
        return redirect()->route('form_fields.index');
    }

    public function destroy(FormField $formField)
    {
        $formField->delete();
        return redirect()->route('form_fields.index');
    }
}
