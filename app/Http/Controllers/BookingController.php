<?php

namespace App\Http\Controllers;
use App\Models\Bookings;

use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function getBookings()
    {
        $bookings = Bookings::all();
    }

     public function addBooking(Request $request,$id){
        $booking = Bookings::create([
            'user_id' => auth()->id(), 
            'service_id' => $id,        
            'service_date' => now(),  
            'status' => 'pending',    
            'name' =>$request->input('name'),
            'address' =>$request->input('address'),
            'requirements' => $request->input('requirements'),
            'service_preffer_date' => $request->input('service_date'),
            'service_time' => $request->input('service_time'), 
        ]);
        return back()->with('success', 'Your booking was successful!');
     }


     public function updateStatus(Request $request,$id)
    {
       
        $booking = Bookings::findOrFail($id);
        $newStatus = $request->input('status'); 
        $booking->status = $newStatus;
        $booking->save();
        return redirect('/myAdminDashboard');

    }
    
}
