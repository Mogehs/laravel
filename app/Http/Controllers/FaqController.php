<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Faqs;
use App\Models\Services;



class FaqController extends Controller
{
    public function myAdminFaq(){
        $services = Services::all();  
        $faqs = Faqs::all();
        $data = compact("faqs");

        return view("myadminfaq",['title' => 'Admin FAQs | The Home Team','allServices' => $services])->with($data);
    }

    public function addFaq(Request $request){
        $faq = new Faqs;
        $faq->faq_question = $request['question'];
        $faq->faq_answer = $request['answer'];
        $faq->save();

        return redirect('/myAdminFaq');
    }

    public function delFaq($id){
        Faqs::find($id)->delete();
        return redirect('/myAdminFaq');
    }
}
