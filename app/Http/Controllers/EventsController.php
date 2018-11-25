<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('updated_at', 'DESC')->paginate(3);
        $nombreEvenements = Event::all();

        return view('events.index')->withNombreEvenements($nombreEvenements)->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $event = new Event;
        return view('events.create')->withEvent($event);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        
        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description]);

         flash(sprintf("Évènement / %s / créé avec succès", $event->title));

        // Flashy::message('Évènement créé avec succès !');
        // Alert::message('Robots are working!');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        // $event = Event::findOrFail($id); // Laravel nous fera cela avec l'implicit route model

        return view('events.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit')->withEvent($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, Event $event)
    {
            $event->update([
            'title' => $request->title,
            'description' => $request->description
            ]);

            flash(sprintf("Évènement / %s / modifié avec succès", $event->title));
           
        // return redirect()->route('events.show', $id); // Redirige l'utilisateur sur la page de l'event qui vient d'être modifier
        //Moi j'aimerais le rediriger sur la page d'accueil seulement
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        // 
        // Event::destroy($id); Implicit Route Model Binding

        $event->delete();

       flash(sprintf("Évènement / %s /supprimé avec succès", $event->title), 'danger');

        return redirect()->route('home');
    }

    public function contact() {
        $telephone = "07 68 24 73 64";
        $email = "ousmanealassane.toure@gmail.com";
        return view('events.contact')->withTelephone($telephone)->withEmail($email);
    }
}
