<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Bookings;
use Illuminate\Support\Facades\Storage;



class ServicesController extends Controller
{
  public function myAdminServices() {
    $services = Services::all();
    return view("myadmincategory", [
        'title' => 'Admin Services | The Home Team',
        'services' => $services 
    ]);
}

public function addAdminServices(Request $request)
{
    $request->validate([
        'service_name' => 'required|string|max:255',
        'service_description' => 'required|string',
        'service_price' => 'required|numeric',
        'service_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'service_img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'service_img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'service_sub1' => 'nullable|string|max:255',
        'service_sub2' => 'nullable|string|max:255',
        'service_sub3' => 'nullable|string|max:255',
    ]);

    $serviceImg1Path = null;
    $serviceImg2Path = null;
    $serviceImg3Path = null;

    if ($request->hasFile('service_img1')) {
        $serviceImg1 = $request->file('service_img1');
        $serviceImg1Path = $serviceImg1->store('services', 'public');
    }

    if ($request->hasFile('service_img2')) {
        $serviceImg2 = $request->file('service_img2');
        $serviceImg2Path = $serviceImg2->store('services', 'public');
    }

    if ($request->hasFile('service_img3')) {
        $serviceImg3 = $request->file('service_img3');
        $serviceImg3Path = $serviceImg3->store('services', 'public');
    }

    Services::create([
        'service_name' => $request->service_name,
        'service_description' => $request->service_description,
        'service_img1' => $serviceImg1Path,
        'service_img2' => $serviceImg2Path,
        'service_img3' => $serviceImg3Path,
        'price' => $request->service_price,
        'service_sub1' => $request->service_sub1,
        'service_sub2' => $request->service_sub2,
        'service_sub3' => $request->service_sub3,
    ]);

    return redirect()->route('my.AdminServices')->with('success', 'Service added successfully');
}


    public function updateAdminServices($id) {
      $allServices = Services::all();
      $orders = Bookings::with('user') 
                ->where('service_id', $id)
                ->get();
      $service = Services::find($id);  
  
      if (!$service) {
          return redirect()->back()->with('error', 'Service not found');
      }
  
     
      return view("myadmincategoryupdate", [
          'title' => 'Admin Services | The Home Team',
          'service' => $service,        
          'allServices' => $allServices,
          'orders' => $orders,
      ]);
  }

  public function updatedAdminServices(Request $request, $service_id)
{
    $request->validate([
        'service_name' => 'required|string|max:255',
        'service_description' => 'required|string',
        'service_price' => 'required|numeric',
        'service_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'service_img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'service_img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'service_sub1' => 'nullable|string|max:255',
        'service_sub2' => 'nullable|string|max:255',
        'service_sub3' => 'nullable|string|max:255',
    ]);

    $service = Services::findOrFail($service_id);

    $service->service_name = $request->service_name;
    $service->service_description = $request->service_description;
    $service->price = $request->service_price;
    $service->service_sub1 = $request->service_sub1;
    $service->service_sub2 = $request->service_sub2;
    $service->service_sub3 = $request->service_sub3;

    if ($request->hasFile('service_img1')) {
        if ($service->service_img1) {
            Storage::disk('public')->delete($service->service_img1);
        }
        $service->service_img1 = $request->file('service_img1')->store('services', 'public');
    }

    if ($request->hasFile('service_img2')) {
        if ($service->service_img2) {
            Storage::disk('public')->delete($service->service_img2);
        }
        $service->service_img2 = $request->file('service_img2')->store('services', 'public');
    }

    if ($request->hasFile('service_img3')) {
        if ($service->service_img3) {
            Storage::disk('public')->delete($service->service_img3);
        }
        $service->service_img3 = $request->file('service_img3')->store('services', 'public');
    }

    $service->save();

    return redirect()->route('my.AdminServices')->with('success', 'Service updated successfully');
}
   

public function deleteAdminService($service_id)
{
    $service = Services::findOrFail($service_id);

    if ($service->service_img1) {
        Storage::disk('public')->delete($service->service_img1);
    }
    if ($service->service_img2) {
        Storage::disk('public')->delete($service->service_img2);
    }
    if ($service->service_img3) {
        Storage::disk('public')->delete($service->service_img3);
    }

    $service->delete();

    return redirect()->route('my.AdminServices')->with('success', 'Service deleted successfully!');
}
   
}



  





