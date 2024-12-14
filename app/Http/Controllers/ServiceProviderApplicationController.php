<?php

namespace App\Http\Controllers;

use App\Models\ServiceProviderApplication;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServiceProviderApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'location' => 'required|string|max:255',
            'experience' => 'required|string',
            'service_id' => 'required',
            'reason' => 'required|string',
        ]);

        ServiceProviderApplication::create([
            'user_id' => Auth::id(), 
            'location' => $validated['location'],
            'experience' => $validated['experience'],
            'service_id' => $validated['service_id'],
            'reason' => $validated['reason'],
        ]);

        return redirect()->back()->with('success', 'Your application has been submitted!');
    }

    public function manageApplication(){
        $services = Services::all();
        $applications = ServiceProviderApplication::all();
        return view('manageapplication',['applications'=>$applications,'services'=>$services,'title'=>'Application | The Home Team']);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'application_status' => 'required|in:pending,approved,rejected',
        ]);

        $application = ServiceProviderApplication::findOrFail($id);

        $application->update([
            'application_status' => $request->input('application_status'),
        ]);

        return redirect()->back()->with('success', 'Application status updated successfully!');
    }

}
