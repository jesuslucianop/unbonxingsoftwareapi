<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers;

use App\Http\Requests\Providercreaterequest;
use App\Http\Requests\Providerupdatebyidrequest;
use App\Http\Requests\Providergetbyidrequest;
class ProviderController extends Controller
{
    //Method for create the providers
   public function CreateProvider(Providercreaterequest $request )
   {
    $data  = $request->all();
    $provider= Providers::create($data);
    return $provider;
       
   }

   Public function Getallprovider()
   {
    $providers  =  Providers::all();
        return $providers->toJson();
   }
  
   Public function Getbyid(Providergetbyidrequest $request)
   {

    $id = $request->id;
    $Provider = Providers::find($request->id);
    return !$Provider ? json_encode("Provider not found ") : json_encode($Provider);
   }
       Public function Updateprovider(Providerupdatebyidrequest $request)
       {
        $id = $request->id;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $page = $request->page;
        $email= $request->email;
        $extension= $request->extension;
        $zipcode = $request->zipcode;
        $identification_rnc = $request->identification_rnc;
        $id_location= $request->id_location;
        $notification= $request->notification;
        $id_currency = $request->id_currency;
        $id_status= $request->id_status;
        $note= $request->note;
        $provider = Providers::where('id', $id);
        if($provider != null){
          $provider->update(['firstname' => $firstname,
          'lastname'=>$lastname,'phone'=>$phone, 'page'=>$page,'email'=>$email,
          'extension'=>$extension,'zipcode'=>$zipcode, 'identification_rnc'=>$identification_rnc,'id_location'=>$id_location,
          'notification'=>$notification,'id_currency'=>$id_currency, 'id_status'=>$id_status,'note'=>$note
          ]);
          return $request->all();
        }

       }
           


}
