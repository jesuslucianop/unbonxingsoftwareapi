<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Providercreaterequest;
class ProviderController extends Controller
{
    //Method for create the providers
   public function CreateProvider(Providercreaterequest $request )
   {
    $data  = $request->all();
    $provider= Provider::create($data);
    return $provider;
       
   }
}
