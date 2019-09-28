<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers;

use App\Http\Requests\Providercreaterequest;
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
   //Public function Getbyid(){}
       //Public function Updateprovider(){}
           //Public function deleteprovider(){}



}
