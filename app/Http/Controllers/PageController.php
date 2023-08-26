<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;

use App\Page;

use App\Corporate;
use App\Counter;
use App\History;
use App\Product;
use App\Client;
use App\Message;
use App\Policy;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


use Spatie\Sitemap\SitemapGenerator;

class PageController extends Controller
{
    function index($slug){
        $Page = Page::whereTranslation('slug',$slug)->get()->first();
        if (empty($Page)) abort('404');

        SEOMeta::setTitle($Page->meta_title);
        SEOMeta::setDescription($Page->meta_desc);
        SEOMeta::setCanonical(url()->full());
        $tags = explode(',',$Page->meta_tags);
        SEOMeta::addKeyword($tags);

        OpenGraph::setDescription($Page->meta_desc);
        OpenGraph::setTitle($Page->meta_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle($Page->meta_title);

        JsonLd::setTitle($Page->meta_title);
        JsonLd::setDescription($Page->meta_desc);
        JsonLd::addImage(asset('assets/img/logo.svg'));
        
        $Corporate = Corporate::find(1);
        $Counter = Counter::find(1);
        $History = History::orderBy('year')->get();
        $Products = Product::where('status',1)->orderBy('ordering')->orderBy('created_at','desc')->paginate(16);
        $Clients = Client::all();

        $PageData = [];
        switch ($slug) {
            case 'hakkimizda': $PageData['yield']="pages.about"; $PageData['Corporate'] = $Corporate;$PageData['Counter']=$Counter; $PageData['History']=$History; break;
            case 'urunler': $PageData['yield']="pages.products"; $PageData['Products'] = $Products; break;
            case 'referanslar': $PageData['yield']="pages.clients"; $PageData['Clients'] = $Clients; break;
            case 'iletisim': $PageData['yield']="pages.contact"; break;
            case 'anasayfa': abort('404'); break;
        }
        
        return view($PageData['yield'])->with('Page',$Page)->with('PageData', $PageData);
    }


    function product($slug) {
        $Product = Product::whereTranslation('slug',$slug)->get()->first();
        if (empty($Product)) abort('404');

        SEOMeta::setTitle(!empty($Product->meta_title) ? $Product->meta_title : $Product->title);
        SEOMeta::setDescription($Product->meta_desc);
        SEOMeta::setCanonical(url()->full());
        $tags = explode(',',$Product->meta_tags);
        SEOMeta::addKeyword($tags);
        SEOMeta::addMeta('article:published_time', $Product->created_at->toW3CString(), 'property');

        OpenGraph::setDescription($Product->meta_desc);
        OpenGraph::setTitle(!empty($Product->meta_title) ? $Product->meta_title : $Product->title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addProperty('locale', 'tr-TR');
        OpenGraph::addImage(url(asset($Product->image)));

        OpenGraph::setArticle([
                'published_time' => $Product->created_at->toW3CString(),
                'modified_time' => $Product->updated_at->toW3CString(),
                'author' => 'Sezgin San',
                'section' => 'Automotive',
                'tag' => $Product->meta_tags
            ]);

        TwitterCard::setTitle(!empty($Product->meta_title) ? $Product->meta_title : $Product->title);

        JsonLd::setTitle(!empty($Product->meta_title) ? $Product->meta_title : $Product->title);
        JsonLd::setDescription($Product->meta_desc);
        JsonLd::addImage(url(asset($Product->image)));
        

        $Others = Product::where('slug','!=',$slug)->limit(4,0)->get();


        return view('pages.product')->with('Product',$Product)->with('Others',$Others);
    }

    function policy($slug) {
        $Policies = Policy::where('status',1)->whereTranslation('slug',$slug)->get()->first();
        if (empty($Policies)) abort('404');

        return view('pages.policy',compact('Policies'));
    }
    
    function store(Request $request){
        $executed = RateLimiter::attempt(
            'send-message:' . $request->ip(),
            $perMinute = 1,
            function () {
            }
        );

        if (!$executed) {
            return back()->with(['status' => 'danger', 'message' => "Tekrar mesaj gönderebilmek için bir süre beklemeniz gerekmektedir."]);
        }

        $validated = Validator::make($request->all(),
        [
            'name' => 'required|min:3',
            'message' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required',
        ],[
            "required" => "Lütfen tüm alanları doldurunuz",
            "email.email" => "Lütfen geçerli bir mail adresi giriniz.",
            "name.min" => "İsim & Soyisim alanı minumum 3 karakter olmalıdır.",
            "message.min" => "Mesajınız 5 karakterden uzun olmalıdır."
        ]);
        if ($validated->fails()) {
            return back()->with(['status' => 'danger', 'message' => $validated->errors()->first()]);
        }

        $data = $request->all();

        $Message = new Message();
        $Message->name = $data['name'];
        $Message->email = $data['email'];
        $Message->phone = $data['phone'];
        $Message->message = $data['message'];

        if($Message->save()){
            return back()->with(['status' => 'success', 'message' => "Mesajınız başarılı bir şekilde tarafımıza iletilmiştir."]);
        }else{
            return back()->with(['status' => 'danger', 'message' => "Bir hata oluştu, lütfen daha sonra tekrar deneyiniz."]);
        }
    }

    function sitemap(){
        $Products = Product::where('status',1)->get();

        $content = view('sitemap.index',compact('Products'));
        return response($content)->header('Content-Type', 'application/xml');
    }
}
