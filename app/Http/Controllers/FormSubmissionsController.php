<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormSubmissionsController extends Controller
{
    public function index()
    {
        $formSubmissions = FormSubmission::all();
        return view('form_submissions.index', compact('formSubmissions'));
    }

    public function create()
    {
        return view('form_submissions.create');
    }

    public function store(Request $request)
    {
        FormSubmission::create($request->all());
        return redirect()->route('form_submissions.index');
    }

    public function show(FormSubmission $formSubmission)
    {
        return view('form_submissions.show', compact('formSubmission'));
    }

    public function edit(FormSubmission $formSubmission)
    {
        return view('form_submissions.edit', compact('formSubmission'));
    }

    public function update(Request $request, FormSubmission $formSubmission)
    {
        $formSubmission->update($request->all());
        return redirect()->route('form_submissions.index');
    }

    public function destroy(FormSubmission $formSubmission)
    {
        $formSubmission->delete();
        return redirect()->route('form_submissions.index');
    }
}
