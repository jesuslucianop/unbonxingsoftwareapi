<?php

namespace App\Http\Controllers;
use app\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Providercreaterequest;
class ProviderController extends Controller
{
    //Method for create the providers
   public function CreateProvider(Providercreaterequest $request )
   {
    return $request->all();
       
   }
}
