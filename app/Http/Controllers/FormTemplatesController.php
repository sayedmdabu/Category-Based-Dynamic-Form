<?php

namespace App\Http\Controllers;

use App\Models\FormTemplate;
use Illuminate\Http\Request;

class FormTemplatesController extends Controller
{
    public function index()
    {
        $formTemplates = FormTemplate::all();
        return view('form_templates.index', compact('formTemplates'));
    }

    public function create()
    {
        return view('form_templates.create');
    }

    public function store(Request $request)
    {
        FormTemplate::create($request->all());
        return redirect()->route('form_templates.index');
    }

    public function show(FormTemplate $formTemplate)
    {
        return view('form_templates.show', compact('formTemplate'));
    }

    public function edit(FormTemplate $formTemplate)
    {
        return view('form_templates.edit', compact('formTemplate'));
    }

    public function update(Request $request, FormTemplate $formTemplate)
    {
        $formTemplate->update($request->all());
        return redirect()->route('form_templates.index');
    }

    public function destroy(FormTemplate $formTemplate)
    {
        $formTemplate->delete();
        return redirect()->route('form_templates.index');
    }
}
