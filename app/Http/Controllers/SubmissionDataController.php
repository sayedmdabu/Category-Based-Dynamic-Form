<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmissionData;

class SubmissionDataController extends Controller
{
    public function index()
    {
        $submissionData = SubmissionData::all();
        return view('submission_data.index', compact('submissionData'));
    }

    public function create()
    {
        return view('submission_data.create');
    }

    public function store(Request $request)
    {
        SubmissionData::create($request->all());
        return redirect()->route('submission_data.index');
    }

    public function show(SubmissionData $submissionData)
    {
        return view('submission_data.show', compact('submissionData'));
    }

    public function edit(SubmissionData $submissionData)
    {
        return view('submission_data.edit', compact('submissionData'));
    }

    public function update(Request $request, SubmissionData $submissionData)
    {
        $submissionData->update($request->all());
        return redirect()->route('submission_data.index');
    }

    public function destroy(SubmissionData $submissionData)
    {
        $submissionData->delete();
        return redirect()->route('submission_data.index');
    }
}
