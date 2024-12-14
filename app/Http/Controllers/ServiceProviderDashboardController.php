<?php

namespace App\Http\Controllers;
use App\Models\ServiceProviderApplication;
use App\Models\Bookings;
use Illuminate\Support\Facades\Auth;

class ServiceProviderDashboardController extends Controller
{
    public function index($id)
    {
        $application = ServiceProviderApplication::where('user_id', Auth::id())
            ->first();

        $serviceProvider = ServiceProviderApplication::with('service')
            ->where('user_id',$id)
            ->firstOrFail();
        $serviceId = $serviceProvider->service_id;

        $orders = Bookings::where('service_id', $serviceId)->get();
        

        if (!$application || $application->application_status !== 'approved') {
            return redirect()->route('my.Home')->with('error', 'Access Denied!');
        }

        return view('serviceproviderdashboard', compact('application','orders'),['title'=>'Dashboard | The Home Team']);
    }
}
