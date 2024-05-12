<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Carbon;


class QuoteController extends Controller
{
    public function Quote(){
        return view('quote');
    }
    public function StoreQuote(Request $request){
        $validation = $request ->validate([
 
            'departure'=>'required|min:3',
            'delivery'=> 'required|min:3',
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'phone'=> 'required|min:10'
            
          
           
        ],
    [ 'departure.required'=>'Remplissez lieux de récupération du produit',
      'departure.min'=>'lieux de récupérartion exacte du produit ',
      'delivery.required'=>'lieux de livrqison exacte du produit ',
      'delivery.required'=>'Remplissez lieux de livraison exacte du produit ',
      'name.min'=>'Remplissez le champ nom',
      'phone.min' => 'Le numéro est invalide'
      

    ]);


Quote::insert([
    'departure' =>$request->departure,
    'delivery' =>$request->delivery,
    'weight' =>$request->weight,
    'dimension' =>$request->dimension,
    'name'=>$request->name,
    'email'=>$request->email,
    'phone'=>$request->phone,
    'message'=>$request->message,
    'quantity'=>$request->quantity,
    'date'=>$request->date,
    'created_at' => Carbon::now()
]);
$notification= array(
    'success' => 'Soumission reussim vous serew contacte dans les prochaines 24 heures. Merci pour votre confiance',
    
);
return Redirect()->route('quote')->with($notification);
    }
}
