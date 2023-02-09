<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return Inertia::render('Service/Index',
            [
                'services' => $services
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Service/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_category'  => 'required|string|max:255',
            'service_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'first_title' => 'required|string|max:255',
            'first_description' => 'required|string',
            'second_title' => 'required|string|max:255',
            'second_description' => 'required|string' 
           
        ]);

        $image_path = '';
        if ($request->hasFile('service_image')) {
            $image_path = $request->file('service_image')->store('images', 'public');
        }

        Service::create([
            'service_name'  => $request-> service_name,
            'service_category' => $request-> service_category,
            'service_image' => $image_path,
            'first_title' => $request-> first_title,
            'first_description' => $request-> first_description,
            'second_title' => $request-> second_title,
            'second_description' => $request-> second_description
        ]);
        sleep(1);

        return Redirect::route('service.index')->with('message', 'Service créer avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
