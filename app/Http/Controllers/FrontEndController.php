<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\CatService;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;



class FrontEndController extends Controller
{
    public function index(){

        $cat_services = CatService::all();

        return view('pages.index' , compact('cat_services') );
    }

    public function about(){

        return view('pages.about');
    }

    public function choix(){

        return view('pages.why-choose-us');
    }

    public function team(){

        return view('pages.team');
    }

    public function developpement(){

        return view('pages.services.single-project');
    }

    public function chatbot(){

        return view('pages.services.chatbot');
    }

    public function referencement(){

        return view('pages.services.referencement');
    }

    public function realisation(){

        return view('pages.services.realisation-film');
    }

    public function couverture(){

        return view('pages.services.couverture-media');
    }

    public function publicite(){

        return view('pages.services.publicite');
    }

    public function recuperation(){

        return view('pages.services.recuperation-compte');
    }

    public function elaboration(){

        return view('pages.services.elaboration-strategie');
    }

    public function identite(){

        return view('pages.services.identite-marque');
    }

    public function campagne(){

        return view('pages.services.lancement-produit');
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

        Mail::to(config('cartouche.admin_support_email'))
            ->send($mailable);
        Alert::success('Succes', 'Votre Demande de Devis à Bien été envoyer, nous vous contacterons bientôt !');
        return redirect()->back();

    }
}
