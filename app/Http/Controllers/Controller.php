<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Faqs;
use App\Models\Testimonial;
use App\Models\Services;
use App\Models\User;
use App\Models\FaqController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    
    public function myHome(){
        $blogs = [
            [
                "id" => 1,
                "link" => "https://plus.unsplash.com/premium_photo-1682434403587-1313db01ed02?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "The Importance of Regular Home Maintenance",
                "details" => "Regular home maintenance is an essential part of owning a property. By addressing small issues early, you can prevent major problems and costly repairs down the road. One of the first tasks to consider is roof inspection. Roof damage can lead to leaks and other issues, so it’s important to check for missing shingles, damaged flashing, or water stains on ceilings. Cleaning gutters regularly ensures that water flows freely and doesn't damage your home’s foundation. HVAC systems should be serviced at least once a year to improve air quality and ensure energy efficiency. Another critical area is plumbing—check for leaks in faucets, pipes, and toilets. Small leaks can turn into significant water damage if left unchecked. Ensure that smoke detectors and carbon monoxide alarms are in working condition to maintain the safety of your home. Finally, keep your home clean and pest-free by addressing cracks in walls and windows that may provide entry points for insects or rodents.",
                "why_choose_the_home_team" => "The Home Team offers comprehensive home maintenance services to keep your property in top shape throughout the year. Our team of professionals can help with routine maintenance like HVAC servicing, roof inspections, plumbing, and more. By partnering with us, you’ll have peace of mind knowing that your home is well-maintained and that we can help address any problems before they become costly repairs. We focus on long-term relationships, ensuring your home remains a safe, comfortable, and well-maintained environment.",
                "conclusion" => "In conclusion, maintaining your home is key to protecting your investment and ensuring a safe, comfortable living space. The Home Team is dedicated to offering high-quality, reliable maintenance services. We understand that every home is unique, so we provide customized solutions based on your specific needs. Let us help you stay ahead of maintenance tasks to prevent small issues from turning into major problems, giving you peace of mind and saving you money in the long run."
            ],
            [
                "id" => 2,
                "link" => "https://plus.unsplash.com/premium_photo-1668028172814-ae27b98af5c0?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "Energy-Efficient Upgrades for a Sustainable Home",
                "details" => "In today's world, sustainability and energy efficiency have become major priorities for homeowners. Energy-efficient upgrades not only help reduce your carbon footprint but also lower utility bills and enhance your home's comfort. Start with replacing older appliances with ENERGY STAR-rated products that use less water and energy. These appliances include refrigerators, dishwashers, washing machines, and air conditioners. Another major upgrade is switching to LED lighting throughout your home. LED bulbs consume significantly less power and have a much longer lifespan than traditional incandescent bulbs. Insulating your home, particularly the attic, walls, and floors, can help maintain a comfortable temperature year-round, reducing the need for heating and cooling. Double-pane windows are an excellent way to minimize heat loss in winter and heat gain in summer. Another sustainable option is installing solar panels, which provide a renewable energy source that can reduce your dependence on the grid and even generate savings by lowering electricity bills. Consider using smart thermostats, which optimize energy consumption by adjusting the temperature based on your schedule and behavior. Lastly, adding rainwater collection systems or gray water systems can reduce water usage, making your home more sustainable overall.",
                "why_choose_the_home_team" => "The Home Team is your partner in creating a more energy-efficient and sustainable home. We offer professional consultations to help you choose the right energy-efficient upgrades for your needs, whether it’s installing solar panels, upgrading insulation, or replacing your appliances. Our team is equipped with the expertise to guide you through the process, helping you save energy and reduce your environmental impact. We also offer energy audits to assess your home's efficiency and suggest the best improvements based on your lifestyle and budget.",
                "conclusion" => "Energy-efficient upgrades are a smart choice not only for reducing your utility bills but also for contributing to environmental conservation. These upgrades increase the overall comfort of your home while enhancing its value. The Home Team is here to help you implement these upgrades with professional services and guidance. Whether you’re looking to install solar panels, upgrade your insulation, or simply replace outdated appliances, we can help you create a more sustainable and cost-effective home."
            ],
            [
                "id" => 3,
                "link" => "https://plus.unsplash.com/premium_photo-1672280727393-ab6f0b26f527?q=80&w=1989&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "DIY Home Improvement Projects for Beginners",
                "details" => "Taking on DIY home improvement projects is a great way to personalize your space, save money, and learn new skills. If you're just getting started, it’s best to begin with smaller, manageable tasks. Repainting a room can completely transform its look. Choose colors that complement your existing furniture or create a bold new atmosphere. Another easy project is updating your cabinet hardware in the kitchen or bathroom. Swapping out old handles or knobs with new, modern styles can give these spaces a fresh feel without the need for an expensive remodel. Installing floating shelves is another simple DIY project that not only adds storage space but also serves as a stylish design element. For those with some basic carpentry skills, building a garden box or a custom headboard can be rewarding and relatively simple. Before starting any project, make sure to gather all necessary tools and materials. It’s also important to plan your project carefully—set a budget, create a timeline, and ensure that you have the proper instructions or tutorials to guide you. For more complicated tasks, such as electrical work or plumbing, it’s best to seek professional assistance to ensure safety and avoid making mistakes that could lead to costly repairs.",
                "why_choose_the_home_team" => "The Home Team is here to assist with any DIY project that feels out of your comfort zone. Whether you need advice on materials, tools, or how to approach a more complex project, we offer guidance to ensure your success. We can also help with specialized tasks that require professional expertise, such as installing electrical fixtures, laying tile, or building larger furniture pieces. Our goal is to empower you to complete your DIY projects safely and successfully, and we’re just a call away if you need professional help.",
                "conclusion" => "DIY home improvement projects can be incredibly rewarding, both creatively and financially. By starting with simple projects and learning new skills, you can transform your living space and build confidence for more ambitious tasks. However, it’s important to know when to seek professional help. The Home Team is ready to support you through your DIY journey with expert advice, resources, and assistance when you need it."
            ],
            [
                "id" => 4,
                "link" => "https://plus.unsplash.com/premium_photo-1678752716884-1f1cf64fb85c?q=80&w=1997&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "How to Create a Relaxing Outdoor Living Space",
                "details" => "Your outdoor space should be a place of relaxation and enjoyment, whether it’s used for quiet reflection or social gatherings with friends and family. Start by defining the purpose of your outdoor area—do you want it to be a peaceful retreat, a place for entertaining, or an outdoor dining area? Once you have a vision, begin by selecting durable, weather-resistant furniture. Sofas, chairs, and tables made of materials like teak, wicker, or metal are ideal for outdoor use. Adding a pergola or an umbrella is a great way to create shade and structure in your outdoor space. Consider including outdoor rugs, throw pillows, and blankets for added comfort and style. If you're planning to entertain, a fire pit or an outdoor grill will serve as a central focal point. String lights, lanterns, or LED garden lights can add warmth and ambiance to your space, creating a cozy atmosphere in the evening. Additionally, incorporate plants and flowers to bring life and color to your outdoor living space. Raised garden beds, hanging planters, and potted plants can help personalize your space and create a peaceful, natural environment. Don't forget about storage—outdoor benches and ottomans that open up can provide a place to store cushions and other items.",
                "why_choose_the_home_team" => "At The Home Team, we specialize in designing and building beautiful, functional outdoor living spaces. Whether you want to create a cozy nook for relaxation or an outdoor dining area for entertaining, we’ll work with you to bring your vision to life. Our team can help you choose the right furniture, lighting, and decor to suit your style, and we can even assist with custom landscaping projects to ensure that your outdoor space meets your needs. From simple updates to full outdoor makeovers, we’re here to help you create the perfect outdoor retreat.",
                "conclusion" => "A well-designed outdoor living space can extend the functionality of your home and provide a peaceful retreat right in your backyard. Whether you're looking to create a cozy nook or a social gathering spot, The Home Team is here to help you every step of the way. Let us help you transform your outdoor space into a haven where you can relax and unwind in comfort."
            ]
        ];
        $services = Services::all();  

        return  view("myhome",['title' => 'Home | The Home Team','blogs'=>$blogs,'services'=>$services]);
    }

    public function myAbout(){
        $services = Services::all();  
        return  view("myabout",['title' => 'About Us | The Home Team','services'=>$services]);
    }

    public function myTestimonial(){
        $testimonials = Testimonial::all();  
        return  view("mytestimonial",['title' => 'Testimonials | The Home Team','testimonials'=>$testimonials]);
    }

    public function myContact(){
        return  view("mycontact",['title' => 'Contact Us | The Home Team']);
    }

    public function myBlogs(){
        $title = 'Blogs | The Home Team';
        $blogs = [
            [
                "id" => 1,
                "link" => "https://plus.unsplash.com/premium_photo-1682434403587-1313db01ed02?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "The Importance of Regular Home Maintenance",
                "details" => "Regular home maintenance is an essential part of owning a property. By addressing small issues early, you can prevent major problems and costly repairs down the road. One of the first tasks to consider is roof inspection. Roof damage can lead to leaks and other issues, so it’s important to check for missing shingles, damaged flashing, or water stains on ceilings. Cleaning gutters regularly ensures that water flows freely and doesn't damage your home’s foundation. HVAC systems should be serviced at least once a year to improve air quality and ensure energy efficiency. Another critical area is plumbing—check for leaks in faucets, pipes, and toilets. Small leaks can turn into significant water damage if left unchecked. Ensure that smoke detectors and carbon monoxide alarms are in working condition to maintain the safety of your home. Finally, keep your home clean and pest-free by addressing cracks in walls and windows that may provide entry points for insects or rodents.",
                "why_choose_the_home_team" => "The Home Team offers comprehensive home maintenance services to keep your property in top shape throughout the year. Our team of professionals can help with routine maintenance like HVAC servicing, roof inspections, plumbing, and more. By partnering with us, you’ll have peace of mind knowing that your home is well-maintained and that we can help address any problems before they become costly repairs. We focus on long-term relationships, ensuring your home remains a safe, comfortable, and well-maintained environment.",
                "conclusion" => "In conclusion, maintaining your home is key to protecting your investment and ensuring a safe, comfortable living space. The Home Team is dedicated to offering high-quality, reliable maintenance services. We understand that every home is unique, so we provide customized solutions based on your specific needs. Let us help you stay ahead of maintenance tasks to prevent small issues from turning into major problems, giving you peace of mind and saving you money in the long run."
            ],
            [
                "id" => 2,
                "link" => "https://plus.unsplash.com/premium_photo-1668028172814-ae27b98af5c0?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "Energy-Efficient Upgrades for a Sustainable Home",
                "details" => "In today's world, sustainability and energy efficiency have become major priorities for homeowners. Energy-efficient upgrades not only help reduce your carbon footprint but also lower utility bills and enhance your home's comfort. Start with replacing older appliances with ENERGY STAR-rated products that use less water and energy. These appliances include refrigerators, dishwashers, washing machines, and air conditioners. Another major upgrade is switching to LED lighting throughout your home. LED bulbs consume significantly less power and have a much longer lifespan than traditional incandescent bulbs. Insulating your home, particularly the attic, walls, and floors, can help maintain a comfortable temperature year-round, reducing the need for heating and cooling. Double-pane windows are an excellent way to minimize heat loss in winter and heat gain in summer. Another sustainable option is installing solar panels, which provide a renewable energy source that can reduce your dependence on the grid and even generate savings by lowering electricity bills. Consider using smart thermostats, which optimize energy consumption by adjusting the temperature based on your schedule and behavior. Lastly, adding rainwater collection systems or gray water systems can reduce water usage, making your home more sustainable overall.",
                "why_choose_the_home_team" => "The Home Team is your partner in creating a more energy-efficient and sustainable home. We offer professional consultations to help you choose the right energy-efficient upgrades for your needs, whether it’s installing solar panels, upgrading insulation, or replacing your appliances. Our team is equipped with the expertise to guide you through the process, helping you save energy and reduce your environmental impact. We also offer energy audits to assess your home's efficiency and suggest the best improvements based on your lifestyle and budget.",
                "conclusion" => "Energy-efficient upgrades are a smart choice not only for reducing your utility bills but also for contributing to environmental conservation. These upgrades increase the overall comfort of your home while enhancing its value. The Home Team is here to help you implement these upgrades with professional services and guidance. Whether you’re looking to install solar panels, upgrade your insulation, or simply replace outdated appliances, we can help you create a more sustainable and cost-effective home."
            ],
            [
                "id" => 3,
                "link" => "https://plus.unsplash.com/premium_photo-1672280727393-ab6f0b26f527?q=80&w=1989&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "DIY Home Improvement Projects for Beginners",
                "details" => "Taking on DIY home improvement projects is a great way to personalize your space, save money, and learn new skills. If you're just getting started, it’s best to begin with smaller, manageable tasks. Repainting a room can completely transform its look. Choose colors that complement your existing furniture or create a bold new atmosphere. Another easy project is updating your cabinet hardware in the kitchen or bathroom. Swapping out old handles or knobs with new, modern styles can give these spaces a fresh feel without the need for an expensive remodel. Installing floating shelves is another simple DIY project that not only adds storage space but also serves as a stylish design element. For those with some basic carpentry skills, building a garden box or a custom headboard can be rewarding and relatively simple. Before starting any project, make sure to gather all necessary tools and materials. It’s also important to plan your project carefully—set a budget, create a timeline, and ensure that you have the proper instructions or tutorials to guide you. For more complicated tasks, such as electrical work or plumbing, it’s best to seek professional assistance to ensure safety and avoid making mistakes that could lead to costly repairs.",
                "why_choose_the_home_team" => "The Home Team is here to assist with any DIY project that feels out of your comfort zone. Whether you need advice on materials, tools, or how to approach a more complex project, we offer guidance to ensure your success. We can also help with specialized tasks that require professional expertise, such as installing electrical fixtures, laying tile, or building larger furniture pieces. Our goal is to empower you to complete your DIY projects safely and successfully, and we’re just a call away if you need professional help.",
                "conclusion" => "DIY home improvement projects can be incredibly rewarding, both creatively and financially. By starting with simple projects and learning new skills, you can transform your living space and build confidence for more ambitious tasks. However, it’s important to know when to seek professional help. The Home Team is ready to support you through your DIY journey with expert advice, resources, and assistance when you need it."
            ],
            [
                "id" => 4,
                "link" => "https://plus.unsplash.com/premium_photo-1678752716884-1f1cf64fb85c?q=80&w=1997&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "How to Create a Relaxing Outdoor Living Space",
                "details" => "Your outdoor space should be a place of relaxation and enjoyment, whether it’s used for quiet reflection or social gatherings with friends and family. Start by defining the purpose of your outdoor area—do you want it to be a peaceful retreat, a place for entertaining, or an outdoor dining area? Once you have a vision, begin by selecting durable, weather-resistant furniture. Sofas, chairs, and tables made of materials like teak, wicker, or metal are ideal for outdoor use. Adding a pergola or an umbrella is a great way to create shade and structure in your outdoor space. Consider including outdoor rugs, throw pillows, and blankets for added comfort and style. If you're planning to entertain, a fire pit or an outdoor grill will serve as a central focal point. String lights, lanterns, or LED garden lights can add warmth and ambiance to your space, creating a cozy atmosphere in the evening. Additionally, incorporate plants and flowers to bring life and color to your outdoor living space. Raised garden beds, hanging planters, and potted plants can help personalize your space and create a peaceful, natural environment. Don't forget about storage—outdoor benches and ottomans that open up can provide a place to store cushions and other items.",
                "why_choose_the_home_team" => "At The Home Team, we specialize in designing and building beautiful, functional outdoor living spaces. Whether you want to create a cozy nook for relaxation or an outdoor dining area for entertaining, we’ll work with you to bring your vision to life. Our team can help you choose the right furniture, lighting, and decor to suit your style, and we can even assist with custom landscaping projects to ensure that your outdoor space meets your needs. From simple updates to full outdoor makeovers, we’re here to help you create the perfect outdoor retreat.",
                "conclusion" => "A well-designed outdoor living space can extend the functionality of your home and provide a peaceful retreat right in your backyard. Whether you're looking to create a cozy nook or a social gathering spot, The Home Team is here to help you every step of the way. Let us help you transform your outdoor space into a haven where you can relax and unwind in comfort."
            ]
        ];
        
        
        
        return  view("myblogs",compact('title','blogs'));
    }

    public function myBlogDetails($id){
        $title = 'Blogs | The Home Team';
        $blogs = [
            [
                "id" => 1,
                "link" => "https://plus.unsplash.com/premium_photo-1682434403587-1313db01ed02?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "The Importance of Regular Home Maintenance",
                "details" => "Regular home maintenance is an essential part of owning a property. By addressing small issues early, you can prevent major problems and costly repairs down the road. One of the first tasks to consider is roof inspection. Roof damage can lead to leaks and other issues, so it’s important to check for missing shingles, damaged flashing, or water stains on ceilings. Cleaning gutters regularly ensures that water flows freely and doesn't damage your home’s foundation. HVAC systems should be serviced at least once a year to improve air quality and ensure energy efficiency. Another critical area is plumbing—check for leaks in faucets, pipes, and toilets. Small leaks can turn into significant water damage if left unchecked. Ensure that smoke detectors and carbon monoxide alarms are in working condition to maintain the safety of your home. Finally, keep your home clean and pest-free by addressing cracks in walls and windows that may provide entry points for insects or rodents.",
                "why_choose_the_home_team" => "The Home Team offers comprehensive home maintenance services to keep your property in top shape throughout the year. Our team of professionals can help with routine maintenance like HVAC servicing, roof inspections, plumbing, and more. By partnering with us, you’ll have peace of mind knowing that your home is well-maintained and that we can help address any problems before they become costly repairs. We focus on long-term relationships, ensuring your home remains a safe, comfortable, and well-maintained environment.",
                "conclusion" => "In conclusion, maintaining your home is key to protecting your investment and ensuring a safe, comfortable living space. The Home Team is dedicated to offering high-quality, reliable maintenance services. We understand that every home is unique, so we provide customized solutions based on your specific needs. Let us help you stay ahead of maintenance tasks to prevent small issues from turning into major problems, giving you peace of mind and saving you money in the long run."
            ],
            [
                "id" => 2,
                "link" => "https://plus.unsplash.com/premium_photo-1668028172814-ae27b98af5c0?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "Energy-Efficient Upgrades for a Sustainable Home",
                "details" => "In today's world, sustainability and energy efficiency have become major priorities for homeowners. Energy-efficient upgrades not only help reduce your carbon footprint but also lower utility bills and enhance your home's comfort. Start with replacing older appliances with ENERGY STAR-rated products that use less water and energy. These appliances include refrigerators, dishwashers, washing machines, and air conditioners. Another major upgrade is switching to LED lighting throughout your home. LED bulbs consume significantly less power and have a much longer lifespan than traditional incandescent bulbs. Insulating your home, particularly the attic, walls, and floors, can help maintain a comfortable temperature year-round, reducing the need for heating and cooling. Double-pane windows are an excellent way to minimize heat loss in winter and heat gain in summer. Another sustainable option is installing solar panels, which provide a renewable energy source that can reduce your dependence on the grid and even generate savings by lowering electricity bills. Consider using smart thermostats, which optimize energy consumption by adjusting the temperature based on your schedule and behavior. Lastly, adding rainwater collection systems or gray water systems can reduce water usage, making your home more sustainable overall.",
                "why_choose_the_home_team" => "The Home Team is your partner in creating a more energy-efficient and sustainable home. We offer professional consultations to help you choose the right energy-efficient upgrades for your needs, whether it’s installing solar panels, upgrading insulation, or replacing your appliances. Our team is equipped with the expertise to guide you through the process, helping you save energy and reduce your environmental impact. We also offer energy audits to assess your home's efficiency and suggest the best improvements based on your lifestyle and budget.",
                "conclusion" => "Energy-efficient upgrades are a smart choice not only for reducing your utility bills but also for contributing to environmental conservation. These upgrades increase the overall comfort of your home while enhancing its value. The Home Team is here to help you implement these upgrades with professional services and guidance. Whether you’re looking to install solar panels, upgrade your insulation, or simply replace outdated appliances, we can help you create a more sustainable and cost-effective home."
            ],
            [
                "id" => 3,
                "link" => "https://plus.unsplash.com/premium_photo-1672280727393-ab6f0b26f527?q=80&w=1989&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "DIY Home Improvement Projects for Beginners",
                "details" => "Taking on DIY home improvement projects is a great way to personalize your space, save money, and learn new skills. If you're just getting started, it’s best to begin with smaller, manageable tasks. Repainting a room can completely transform its look. Choose colors that complement your existing furniture or create a bold new atmosphere. Another easy project is updating your cabinet hardware in the kitchen or bathroom. Swapping out old handles or knobs with new, modern styles can give these spaces a fresh feel without the need for an expensive remodel. Installing floating shelves is another simple DIY project that not only adds storage space but also serves as a stylish design element. For those with some basic carpentry skills, building a garden box or a custom headboard can be rewarding and relatively simple. Before starting any project, make sure to gather all necessary tools and materials. It’s also important to plan your project carefully—set a budget, create a timeline, and ensure that you have the proper instructions or tutorials to guide you. For more complicated tasks, such as electrical work or plumbing, it’s best to seek professional assistance to ensure safety and avoid making mistakes that could lead to costly repairs.",
                "why_choose_the_home_team" => "The Home Team is here to assist with any DIY project that feels out of your comfort zone. Whether you need advice on materials, tools, or how to approach a more complex project, we offer guidance to ensure your success. We can also help with specialized tasks that require professional expertise, such as installing electrical fixtures, laying tile, or building larger furniture pieces. Our goal is to empower you to complete your DIY projects safely and successfully, and we’re just a call away if you need professional help.",
                "conclusion" => "DIY home improvement projects can be incredibly rewarding, both creatively and financially. By starting with simple projects and learning new skills, you can transform your living space and build confidence for more ambitious tasks. However, it’s important to know when to seek professional help. The Home Team is ready to support you through your DIY journey with expert advice, resources, and assistance when you need it."
            ],
            [
                "id" => 4,
                "link" => "https://plus.unsplash.com/premium_photo-1678752716884-1f1cf64fb85c?q=80&w=1997&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "subject" => "How to Create a Relaxing Outdoor Living Space",
                "details" => "Your outdoor space should be a place of relaxation and enjoyment, whether it’s used for quiet reflection or social gatherings with friends and family. Start by defining the purpose of your outdoor area—do you want it to be a peaceful retreat, a place for entertaining, or an outdoor dining area? Once you have a vision, begin by selecting durable, weather-resistant furniture. Sofas, chairs, and tables made of materials like teak, wicker, or metal are ideal for outdoor use. Adding a pergola or an umbrella is a great way to create shade and structure in your outdoor space. Consider including outdoor rugs, throw pillows, and blankets for added comfort and style. If you're planning to entertain, a fire pit or an outdoor grill will serve as a central focal point. String lights, lanterns, or LED garden lights can add warmth and ambiance to your space, creating a cozy atmosphere in the evening. Additionally, incorporate plants and flowers to bring life and color to your outdoor living space. Raised garden beds, hanging planters, and potted plants can help personalize your space and create a peaceful, natural environment. Don't forget about storage—outdoor benches and ottomans that open up can provide a place to store cushions and other items.",
                "why_choose_the_home_team" => "At The Home Team, we specialize in designing and building beautiful, functional outdoor living spaces. Whether you want to create a cozy nook for relaxation or an outdoor dining area for entertaining, we’ll work with you to bring your vision to life. Our team can help you choose the right furniture, lighting, and decor to suit your style, and we can even assist with custom landscaping projects to ensure that your outdoor space meets your needs. From simple updates to full outdoor makeovers, we’re here to help you create the perfect outdoor retreat.",
                "conclusion" => "A well-designed outdoor living space can extend the functionality of your home and provide a peaceful retreat right in your backyard. Whether you're looking to create a cozy nook or a social gathering spot, The Home Team is here to help you every step of the way. Let us help you transform your outdoor space into a haven where you can relax and unwind in comfort."
            ]
        ];
        
        
        
        $blog = collect($blogs)->firstWhere('id', $id);

        if (!$blog) {
            abort(404, 'Blog not found');
        }

        // return $blog['details'];
        return view('myblogdetails',compact('title','blog'));
    }
        
    public function myServices(){
        $services = Services::all();  
        return  view("myservices",['title' => 'Services | The Home Team','services'=>$services]);
    }

    public function myServiceDetails($id){
        $service = Services::find($id);  
        return  view("myservicesdetails",['title' => 'Services | The Home Team','service'=>$service]);
    }


    public function myFaq(){
    $pageTitle = "FAQs | The Home Team";
    $faqs = Faqs::all();
    $data = compact("faqs");

    return view('myfaq', ['title' => 'Faqs | The Home Team'])->with($data);
    }


    public function myRegister(){
        return view('myregister', ['title' => 'Register | The Home Team']);
        }

        public function addRegister(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'terms' => 'required',
            ]);
    
          // Assuming you want to create a user and link it to an admin
                $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => false, 
                
            ]);

                Admin::create([
                 'user_id' => $user->id,
            ]);

    
            return redirect('/myLogin')->with('success', 'Account created successfully!');
        }



        public function myLogin()
        {
            return view('mylogin', ['title' => 'Login | The Home Team']);
        }
    
        public function addLogin(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
    
            if (Auth::attempt($credentials, $request->remember)) {
                $request->session()->regenerate();
    
                return redirect('/myAdminDashboard');
            }
    
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    
        public function myLogout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/myHome');
        }

        public function showAdminList()
        {
            $services = Services::all();
            $adminUsers = User::where('is_admin', true)->get();
            $simpleUsers = User::where('is_admin', false)->get(); 
            return view('myadminlist',['title' => 'Admin List | The Home Team','allServices'=>$services,'simpleUsers'=>$simpleUsers,'adminUsers'=>$adminUsers]);
        }

        public function destroy($id)
        {
            $user = User::findOrFail($id);

            if (auth()->id() === $user->id) {
           return redirect()->back()->with('error', 'You cannot delete your own account.');
         }
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully.');
        }

        public function promoteToAdmin($userId)
        {
            $user = User::findOrFail($userId);

            if ($user->is_admin) {
                return back()->with('error', 'This user is already an admin.');
            }

            $user->update(['is_admin' => true]);

            Admin::create([
                'user_id' => $user->id,     
            ]);

            return back()->with('success', 'User has been promoted to admin!');
        }

        public function updateRole(Request $request, $id)
{
   

    $user = User::findOrFail($id);

    $user->role = $request->role;
    $user->save();

    return redirect()->back()->with('success', 'Role updated successfully.');
}

}
