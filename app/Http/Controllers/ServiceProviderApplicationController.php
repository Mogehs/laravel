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
        // Validate incoming request
        $validated = $request->validate([
            'location' => 'required|string|max:255',
            'experience' => 'required|string',
            'service_id' => 'required',
            'reason' => 'required|string',
        ]);

        // Check if the user already has a rejected application for this service
        $existingApplication = ServiceProviderApplication::where('user_id', Auth::id())
            ->where('service_id', $validated['service_id'])
            ->where('application_status', 'rejected')
            ->first();

        if ($existingApplication) {
            // If an application is found and its status is rejected, update the status to 'pending'
            $existingApplication->update([
                'application_status' => 'pending',
                'location' => $validated['location'],
                'experience' => $validated['experience'],
                'reason' => $validated['reason'],
            ]);

            return redirect('/myApplication')->with('success', 'Your application has been updated to pending!');
        } else {
            // If no rejected application is found, create a new application
            ServiceProviderApplication::create([
                'user_id' => Auth::id(),
                'location' => $validated['location'],
                'experience' => $validated['experience'],
                'service_id' => $validated['service_id'],
                'reason' => $validated['reason'],
                'application_status' => 'pending', // Set initial status to 'pending'
            ]);

            return redirect('/myApplication')->with('success', 'Your application has been submitted!');
        }
    }

    public function manageApplication()
    {
        $services = Services::all();
        $applications = ServiceProviderApplication::all();
        return view('manageapplication', ['applications' => $applications, 'services' => $services, 'title' => 'Application | The Home Team']);
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
