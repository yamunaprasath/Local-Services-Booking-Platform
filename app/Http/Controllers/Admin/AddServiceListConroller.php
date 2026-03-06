<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class AddServiceListConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::latest()->get();

        return view('backend.service-list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $galleryPaths = [];

        if ($request->hasFile('gallery')) {

            foreach ($request->file('gallery') as $image) {

                $path = $image->store('services', 'public');

                $galleryPaths[] = $path;
            }
        }

        // FAQ combine
        $faq = [];

        if ($request->faq_question) {

            foreach ($request->faq_question as $key => $question) {

                $faq[] = [
                    'question' => $question,
                    'answer' => $request->faq_answer[$key] ?? ''
                ];
            }
        }

        Services::create([

            'service_title' => $request->service_title,
            'service_category' => $request->service_category,
            'price_type' => $request->price_type,
            'base_price' => $request->base_price,
            'discount_price' => $request->discount_price,

            'available_days' => $request->available_days,

            'location_type' => $request->location_type,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'address' => $request->address,

            'highlight' => $request->highlight,

            'service' => $request->service,

            'other_service' => $request->other_service,

            'faq' => $faq,

            'description' => $request->description,

            'gallery' => $galleryPaths
        ]);

        return redirect()->back()->with('success', 'Service Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Services::findOrFail($id);

        return view('backend.edit-service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::findOrFail($id);

        $galleryPaths = [];

        if ($request->hasFile('gallery')) {

            foreach ($request->file('gallery') as $image) {

                $path = $image->store('services', 'public');

                $galleryPaths[] = $path;
            }
        }

        // FAQ combine
        $faq = [];

        if ($request->faq_question) {

            foreach ($request->faq_question as $key => $question) {

                $faq[] = [
                    'question' => $question,
                    'answer' => $request->faq_answer[$key] ?? ''
                ];
            }
        }

        $service->update([
            'service_title' => $request->service_title,
            'service_category' => $request->service_category,
            'price_type' => $request->price_type,
            'base_price' => $request->base_price,
            'discount_price' => $request->discount_price,
            'available_days' => $request->available_days,
            'location_type' => $request->location_type,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'highlight' => $request->highlight,
            'service' => $request->service,
            'other_service' => $request->other_service,
            'faq' => $faq,
            'description' => $request->description,
            'gallery' => $galleryPaths
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
