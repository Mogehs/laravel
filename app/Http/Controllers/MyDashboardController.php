<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;
use App\Models\Bookings;
use App\Models\Contact;

use Carbon\Carbon;


class MyDashboardController extends Controller
{
     public function myAdminDashboard(){

        $services = Services::all();
        $today = Carbon::today();
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $totalTodayOrders = Bookings::whereDate('created_at', $today)->count();
        $totalContacts = Contact::count();
    
        $totalCompletedThisMonthOrders = Bookings::whereBetween('created_at', [$startOfMonth, $endOfMonth])
                                                  ->where('status', 'Completed')
                                                  ->count();
    
        return view("myadmindashboard", [
            'title' => 'Admin Dashboard | The Home Team',
            'allServices' => $services,
            'totalTodayOrders' => $totalTodayOrders,
            'totalCompletedThisMonthOrders' => $totalCompletedThisMonthOrders,
            'totalContacts' => $totalContacts
        ]);
    }
}
