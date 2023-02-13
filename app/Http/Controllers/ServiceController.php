<?php

namespace App\Http\Controllers;



use Inertia\Inertia;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


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
    public function store(StoreService $request)
    {

       

        $image_path = '';

        if ($request->hasFile('service_image')) {
            $image_path = $request->file('service_image')->store('public');
          
            $data = Service::create([
                'service_name'  => $request-> service_name,
                'service_category' => $request-> service_category,
                'service_image' => $image_path,
                'first_title' => $request-> first_title,
                'first_description' => nl2br($request-> first_description),
                // 'first_description' =>  $firstrequest,
                'second_title' => $request-> second_title,
                'second_description' => nl2br($request-> second_description)
                // 'second_description' =>  $secondrequest 
            ]);
            sleep(1);
    
           
            return redirect()->route('service.index')->with('message', 'Service créer avec succès !');
        }

    
        return Redirect::back();
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
    public function edit($id)
    {

        $services = Service::findOrFail($id);
        return Inertia::render(
            'Service/Edit',
            [
                'services' => $services
            ]
        );
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
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_category'  => 'required|string|max:255',
            'service_image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'first_title' => 'required|string|max:255',
            'first_description' => 'required|string',
            'second_title' => 'required|string|max:255',
            'second_description' => 'required|string'
        ]);

        $image_path = '';

        if ($request->hasFile('service_image')) {
            Storage::delete($service->service_image);
            $image_path = $request->file('service_image')->store('public');
          
        }

        $service->update([
            'service_name'  => $request-> service_name,
            'service_category' => $request-> service_category,
            'service_image' => $image_path,
            'first_title' => $request-> first_title,
            'first_description' => nl2br($request-> first_description),
            'second_title' => $request-> second_title,
            'second_description' => nl2br($request-> second_description),
        ]);

        sleep(1);

        return Redirect::route('service.index')->with('message', 'Service supprimer avec succès !');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $services , $id)
    {
        $services->destroy($id);
        sleep(1);

        // return Redirect::back()->with('message', 'Service supprimer avec succès !');
    }
}
