<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\CatService;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;



class FrontEndController extends Controller
{
    public function index(){

        // return 'success';

        $cat_services = CatService::all();
        return view('pages.index' , compact('cat_services') );
    }

    public function about(){
        $cat_services = CatService::all();
        return view('pages.about', compact('cat_services'));
    }

    public function choix(){
        $cat_services = CatService::all();
        return view('pages.why-choose-us', compact('cat_services'));
    }

    public function team(){
        $cat_services = CatService::all();
        return view('pages.team', compact('cat_services'));
    }

    public function services($slug)
    {
        $cat_services = CatService::all();
        $service = Service::where('slug', $slug)->first();
        switch ($service->slug) {
            case 'developpement-dapplications-web-mobiles':
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'developpement-dapplications-web-mobiles' )->first();
                return view('pages.services.single-project', compact('cat_services', 'one_service'));
                break;
            case 'realisation-de-chatbot':
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'realisation-de-chatbot' )->first();
                return view('pages.services.chatbot',compact('cat_services', 'one_service'));
                break;
            case "referencement-naturel-et-payant":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'referencement-naturel-et-payant' )->first();
                return view('pages.services.referencement',compact('cat_services','one_service'));
                break;
            case "realisation-de-film-institutionnel":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'realisation-de-film-institutionnel' )->first();
                return view('pages.services.realisation-film',compact('cat_services','one_service'));
                break;
            case "couverture-media-devenements":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'couverture-media-devenements' )->first();
                return view('pages.services.couverture-media',compact('cat_services','one_service'));
                break;
            case "publicite-en-ligne":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'publicite-en-ligne' )->first();
                return view('pages.services.publicite',compact('cat_services','one_service'));
                break;
            case "recuperation-de-compte":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'recuperation-de-compte' )->first();
                return view('pages.services.recuperation-compte',compact('cat_services','one_service'));
                break;
            case "elaboration-de-strategie-digitale":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'elaboration-de-strategie-digitale' )->first();
                return view('pages.services.elaboration-strategie',compact('cat_services','one_service'));
                break;
            case "creation-didentite-visuelle":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'creation-didentite-visuelle' )->first();
                return view('pages.services.identite-marque',compact('cat_services','one_service'));
                break;
            case "campagne-de-lancement-de-produit":
                $cat_services = CatService::all();
                $one_service = Service::Where('slug', 'campagne-de-lancement-de-produit' )->first();
                return view('pages.services.lancement-produit',compact('cat_services','one_service'));
                break;
            default:
               return ['succes'];
                break;
        }


    }

    public function developpement(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'developpement-dapplications-web-mobiles' )->first();
        return view('pages.services.single-project', compact('cat_services', 'one_service'));
    }
    public function chatbot(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'realisation-de-chatbot' )->first();
        return view('pages.services.chatbot',compact('cat_services', 'one_service'));
    }
    public function referencement(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'referencement-naturel-et-payant' )->first();
        return view('pages.services.referencement',compact('cat_services','one_service'));
    }
    public function realisation(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'realisation-de-film-institutionnel' )->first();
        return view('pages.services.realisation-film',compact('cat_services','one_service'));
    }
    public function couverture(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'couverture-media-devenements' )->first();
        return view('pages.services.couverture-media',compact('cat_services','one_service'));
    }
    public function publicite(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'publicite-en-ligne' )->first();
        return view('pages.services.publicite',compact('cat_services','one_service'));
    }
    public function recuperation(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'recuperation-de-compte' )->first();
        return view('pages.services.recuperation-compte',compact('cat_services','one_service'));
    }
    public function elaboration(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'elaboration-de-strategie-digitale' )->first();
        return view('pages.services.elaboration-strategie',compact('cat_services','one_service'));
    }
    public function identite(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'creation-didentite-visuelle' )->first();
        return view('pages.services.identite-marque',compact('cat_services','one_service'));
    }
    public function campagne(){
        $cat_services = CatService::all();
        $one_service = Service::Where('slug', 'campagne-de-lancement-de-produit' )->first();
        return view('pages.services.lancement-produit',compact('cat_services','one_service'));
    }

    public function gestion(){
        $cat_services = CatService::all();
        return view('pages.gestion', compact('cat_services'));
    }
    public function coatching(){
        $cat_services = CatService::all();
        return view('pages.formation-coatching', compact('cat_services'));
    }


    public function contact(){
        $cat_services = CatService::all();
        return view('pages.services.contact', compact('cat_services'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|min:4',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comment' => 'required|min:10',
        ]);

        // ENREGISTRER DANS LA BD
        // dd($request->only('name','email','phone','subject','comment'));
        $message = Message::create($request->only('name','email','phone','subject','comment'));

        // ENVOYER UN EMAIL
        $mailable = new ContactMessageCreated($message);
        Mail::to(config('cartouche.admin_support_email'))->send($mailable);
        Alert::success('Succes', 'Votre Demande de Devis à Bien été envoyer, nous vous contacterons bientôt !');
        return redirect()->back();

    }
}
