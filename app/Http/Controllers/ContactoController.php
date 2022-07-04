<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContactoRequest;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('pages/contacto');
    }
    public function store(CreateContactoRequest $request){
        $request->validated();
        Mail::to('glinaresva@ucvvirtual.edu.pe')->send(new MensajeRecibido($request));
        //return new MensajeRecibido($request);
        return back()->with('acto','Gracias por contactarte con nosotros, pronto le enviaremos una respuesta.');
    }
}
