<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use App\Corporate;
use App\Counter;
use App\Product;
use App\Client;
use App\Page;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class HomeController extends Controller
{
    function index() {
        $Sliders = Slider::where('status',1)->orderBy('ordering')->orderBy('created_at','desc')->get();
        $Products = Product::where('status',1)->orderBy('ordering')->orderBy('created_at','desc')->get();
        $Corporate = Corporate::find(1);
        $Counter = Counter::find(1);
        $Clients = Client::limit(12,0)->get();

        $Page = Page::find(5);

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

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription($Page->meta_desc);
        JsonLd::addImage(asset('assets/img/logo.svg'));

        return view('pages.home')->with('Sliders',$Sliders)->with('Corporate',$Corporate)->with('Counter',$Counter)->with('Products',$Products)->with('Clients',$Clients);
    }
}
