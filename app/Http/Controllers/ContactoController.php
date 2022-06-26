<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContactoRequest;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(CreateContactoRequest $request){
        $request->validated();
        Mail::to('glinaresva@ucvvirtual.edu.pe')->send(new MensajeRecibido($request));
        return new MensajeRecibido($request);
    }
}
