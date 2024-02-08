<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('organizations.create');
    }

    public function store(Request $request)
    {
        Organization::create($request->all());
        return redirect()->route('organizations.index');
    }

    public function show(Organization $organization)
    {
        return view('organizations.show', compact('organization'));
    }

    public function edit(Organization $organization)
    {
        return view('organizations.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $organization->update($request->all());
        return redirect()->route('organizations.index');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organizations.index');
    }
}
