<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Models\Services;


use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function addTestimonial(Request $request)
    {

        Testimonial::create([
            'name' => $request->name,
            'service' => $request->service,
            'testimonial' => $request->testimonial,
        ]);

        return redirect('/myTestimonial')->with('success', 'Thanks For Your Kind words');
    }

    public function myAdminTestimonials()
    {
        $services = Services::all();  
        $testimonials = Testimonial::all();
        return view("myadmintestimonials",['title' => 'Admin Testimonials | The Home Team', 'allServices' => $services,
        'testimonials' => $testimonials]);
    }

    public function destroy($id)

{

    $testimonial = Testimonial::find($id);
    $testimonial->delete();
    return redirect('/myAdminTestimonials');
    
}
}
