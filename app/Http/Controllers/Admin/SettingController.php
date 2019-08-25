<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    // Home
    public function getHome(){
        $setting = \App\Setting::findOrFail(1);
        $subcategories = Subcategory::all();
        $categories = Category::all();

        return view('admin.settings.home', compact('setting', 'subcategories', 'categories'));
    }

    public function putHome(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);
        $subcategories = Subcategory::all();
        $categories = Category::all();

        // Images
        if(isset($input['home_header_image'])){
            $imageName = 'home_header_image.png';
            $request->home_header_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_header_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_slider1_image'])){
            $imageName = 'home_slider1_image.png';
            $request->home_slider1_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_slider1_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_slider2_image'])){
            $imageName = 'home_slider2_image.png';
            $request->home_slider2_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_slider2_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_slider3_image'])){
            $imageName = 'home_slider3_image.png';
            $request->home_slider3_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_slider3_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_slider4_image'])){
            $imageName = 'home_slider4_image.png';
            $request->home_slider4_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_slider4_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_categories_image'])){
            $imageName = 'home_categories_image.png';
            $request->home_categories_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_categories_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_publicity1_image'])){
            $imageName = 'home_publicity1_image.png';
            $request->home_publicity1_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_publicity1_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_events_image'])){
            $imageName = 'home_events_image.png';
            $request->home_events_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_events_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_video_image'])){
            $imageName = 'home_video_image.png';
            $request->home_video_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_video_image = '/images/settings/home/'.$imageName;
        }
        if(isset($input['home_publicity2_image'])){
            $imageName = 'home_publicity2_image.png';
            $request->home_publicity2_image->move(public_path('images/settings/home'), $imageName);
            $setting->home_publicity2_image = '/images/settings/home/'.$imageName;
        }
        // Texts
        if(isset($input['home_slider1_text1'])){
            $text = $input['home_slider1_text1'];
            $setting->home_slider1_text1 = $text;
        }
        if(isset($input['home_slider1_text2'])){
            $text = $input['home_slider1_text2'];
            $setting->home_slider1_text2 = $text;
        }
        if(isset($input['home_slider2_text'])){
            $text = $input['home_slider2_text'];
            $setting->home_slider2_text = $text;
        }
        if(isset($input['home_slider3_text'])){
            $text = $input['home_slider3_text'];
            $setting->home_slider3_text = $text;
        }
        if(isset($input['home_slider4_text'])){
            $text = $input['home_slider4_text'];
            $setting->home_slider4_text = $text;
        }
        if(isset($input['home_categories_text'])){
            $text = $input['home_categories_text'];
            $setting->home_categories_text = $text;
        }
        if(isset($input['home_publicity2_text'])){
            $text = $input['home_publicity2_text'];
            $setting->home_publicity2_text = $text;
        }
        // Video
        if(isset($input['home_video'])){
            $text = $input['home_video'];
            $setting->home_video = $text;
        }
        // Categories
        $split = explode(".", $input['subcategory_id_1']);
        if(isset($split[1])){
            $text = $split[1];
            $setting->subcategory_id_1 = $text;
        }
        $split = explode(".", $input['subcategory_id_2']);
        if(isset($split[1])){
            $text = $split[1];
            $setting->subcategory_id_2 = $text;
        }
        $split = explode(".", $input['subcategory_id_3']);
        if(isset($split[1])){
            $text = $split[1];
            $setting->subcategory_id_3 = $text;
        }
        $split = explode(".", $input['subcategory_id_4']);
        if(isset($split[1])){
            $text = $split[1];
            $setting->subcategory_id_4 = $text;
        }

        $setting->update();

        return view('admin.settings.home', compact('setting', 'subcategories', 'categories'));
    }

    // Service
    public function getService(){
        $setting = \App\Setting::findOrFail(1);
        return view('admin.settings.service', compact('setting'));
    }

    public function putService(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);

        // Images
        if(isset($input['service_header_image'])){
            $imageName = 'service_header_image.png';
            $request->service_header_image->move(public_path('images/settings/service'), $imageName);
            $setting->service_header_image = '/images/settings/service/'.$imageName;
        }
        if(isset($input['service_poligon_image'])){
            $imageName = 'service_poligon_image.png';
            $request->service_poligon_image->move(public_path('images/settings/service'), $imageName);
            $setting->service_poligon_image = '/images/settings/service/'.$imageName;
        }
        // Texts
        if(isset($input['service_header_text'])){
            $text = $input['service_header_text'];
            $setting->service_header_text = $text;
        }
        if(isset($input['service_intermediate_text'])){
            $text = $input['service_intermediate_text'];
            $setting->service_intermediate_text = $text;
        }
        if(isset($input['service_info_text'])){
            $text = $input['service_info_text'];
            $setting->service_info_text = $text;
        }

        $setting->update();

        return view('admin.settings.service', compact('setting'));
    }

    // Company
    public function getCompany(){
        $setting = \App\Setting::findOrFail(1);
        return view('admin.settings.company', compact('setting'));
    }

    public function putCompany(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);

        // Images
        if(isset($input['company_header_image'])){
            $imageName = 'company_header_image.png';
            $request->company_header_image->move(public_path('images/settings/company'), $imageName);
            $setting->company_header_image = '/images/settings/company/'.$imageName;
        }
        if(isset($input['company_poligon1_image'])){
            $imageName = 'company_poligon1_image.png';
            $request->company_poligon1_image->move(public_path('images/settings/company'), $imageName);
            $setting->company_poligon1_image = '/images/settings/company/'.$imageName;
        }
        if(isset($input['company_poligon2_image'])){
            $imageName = 'company_poligon2_image.png';
            $request->company_poligon2_image->move(public_path('images/settings/company'), $imageName);
            $setting->company_poligon2_image = '/images/settings/company/'.$imageName;
        }
        // Texts
        if(isset($input['company_intermediate_text'])){
            $text = $input['company_intermediate_text'];
            $setting->company_intermediate_text = $text;
        }
        if(isset($input['company_poligon1_text1'])){
            $text = $input['company_poligon1_text1'];
            $setting->company_poligon1_text1 = $text;
        }
        if(isset($input['company_poligon1_text2'])){
            $text = $input['company_poligon1_text2'];
            $setting->company_poligon1_text2 = $text;
        }
        if(isset($input['company_poligon1_text3'])){
            $text = $input['company_poligon1_text3'];
            $setting->company_poligon1_text3 = $text;
        }
        if(isset($input['company_poligon2_text1'])){
            $text = $input['company_poligon2_text1'];
            $setting->company_poligon2_text1 = $text;
        }
        if(isset($input['company_poligon2_text2'])){
            $text = $input['company_poligon2_text2'];
            $setting->company_poligon2_text2 = $text;
        }

        $setting->update();

        return view('admin.settings.company', compact('setting'));
    }

    // Blog
    public function getBlog(){
        $setting = \App\Setting::findOrFail(1);
        return view('admin.settings.blog', compact('setting'));
    }

    public function putBlog(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);

        // Images
        if(isset($input['blog_header_image'])){
            $imageName = 'blog_header_image.png';
            $request->blog_header_image->move(public_path('images/settings/blog'), $imageName);
            $setting->blog_header_image = '/images/settings/blog/'.$imageName;
        }
        // Texts
        if(isset($input['blog_header_text'])){
            $text = $input['blog_header_text'];
            $setting->blog_header_text = $text;
        }

        $setting->update();

        return view('admin.settings.blog', compact('setting'));
    }

    // Contact
    public function getContact(){
        $setting = \App\Setting::findOrFail(1);
        return view('admin.settings.contact', compact('setting'));
    }

    public function putContact(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);

        // Images
        if(isset($input['contact_header_image'])){
            $imageName = 'contact_header_image.png';
            $request->contact_header_image->move(public_path('images/settings/contact'), $imageName);
            $setting->contact_header_image = '/images/settings/contact/'.$imageName;
        }
        // Texts
        if(isset($input['contact_header_text'])){
            $text = $input['contact_header_text'];
            $setting->contact_header_text = $text;
        }
        if(isset($input['contact_mail_driver'])){
            $text = $input['contact_mail_driver'];
            $setting->contact_mail_driver = $text;
        }
        if(isset($input['contact_mail_host'])){
            $text = $input['contact_mail_host'];
            $setting->contact_mail_host = $text;
        }
        if(isset($input['contact_mail_port'])){
            $text = $input['contact_mail_port'];
            $setting->contact_mail_port = $text;
        }
        if(isset($input['contact_mail_username'])){
            $text = $input['contact_mail_username'];
            $setting->contact_mail_username = $text;
        }
        if(isset($input['contact_mail_password'])){
            $text = $input['contact_mail_password'];
            $setting->contact_mail_password = $text;
        }
        if(isset($input['contact_mail_encryption'])){
            $text = $input['contact_mail_encryption'];
            $setting->contact_mail_encryption = $text;
        }

        $setting->update();

        return view('admin.settings.contact', compact('setting'));
    }

    // FAQ
    public function getFaq(){
        $setting = \App\Setting::findOrFail(1);
        return view('admin.settings.faq', compact('setting'));
    }

    public function putFaq(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);

        // Images
        if(isset($input['faq_header_image'])){
            $imageName = 'faq_header_image.png';
            $request->faq_header_image->move(public_path('images/settings/faq'), $imageName);
            $setting->faq_header_image = '/images/settings/faq/'.$imageName;
        }
        // Texts
        if(isset($input['faq_header_text'])){
            $text = $input['faq_header_text'];
            $setting->faq_header_text = $text;
        }
        if(isset($input['faq_div_text1'])){
            $text = $input['faq_div_text1'];
            $setting->faq_div_text1 = $text;
        }
        if(isset($input['faq_div_text2'])){
            $text = $input['faq_div_text2'];
            $setting->faq_div_text2 = $text;
        }
        if(isset($input['faq_div_text3'])){
            $text = $input['faq_div_text3'];
            $setting->faq_div_text3 = $text;
        }
        if(isset($input['faq_div_text4'])){
            $text = $input['faq_div_text4'];
            $setting->faq_div_text4 = $text;
        }

        $setting->update();

        return view('admin.settings.faq', compact('setting'));
    }

    // Contact
    public function getFooter(){
        $setting = \App\Setting::findOrFail(1);
        return view('admin.settings.footer', compact('setting'));
    }

    public function putFooter(Request $request){
        $input = $request->all();
        $setting = Setting::findOrFail(1);

        // Texts
        if(isset($input['footer_youtube'])){
            $text = $input['footer_youtube'];
            $setting->footer_youtube = $text;
        }
        if(isset($input['footer_twitter'])){
            $text = $input['footer_twitter'];
            $setting->footer_twitter = $text;
        }
        if(isset($input['footer_instagram'])){
            $text = $input['footer_instagram'];
            $setting->footer_instagram = $text;
        }
        if(isset($input['footer_facebook'])){
            $text = $input['footer_facebook'];
            $setting->footer_facebook = $text;
        }
        if(isset($input['footer_phone'])){
            $text = $input['footer_phone'];
            $setting->footer_phone = $text;
        }
        if(isset($input['footer_email'])){
            $text = $input['footer_email'];
            $setting->footer_email = $text;
        }

        $setting->update();

        return view('admin.settings.footer', compact('setting'));
    }

}
