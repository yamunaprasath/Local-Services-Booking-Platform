<?php

namespace App\Http\Controllers\Backend\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class AddServiceListConroller extends Controller
{
    public function index()
    {
        $services = Services::latest()->get();

        return view('backend.service-list', compact('services'));
    }

    public function create()
    {
        return view('backend.create-service');
    }

    public function store(Request $request)
    {
        $galleryPaths = [];

        if ($request->hasFile('gallery')) {

            foreach ($request->file('gallery') as $image) {

                $path = $image->store('services', 'public');

                $galleryPaths[] = $path;
            }
        }

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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $service = Services::findOrFail($id);

        return view('backend.edit-service', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $service = Services::findOrFail($id);

        $existingGallery = $request->input('existing_gallery', []);
        $deleteGallery   = $request->input('delete_gallery', []);

        foreach ($deleteGallery as $path) {
            Storage::disk('public')->delete($path);
        }

        $gallery = array_values(array_diff($existingGallery, $deleteGallery));

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $image->store('services', 'public');
            }
        }

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
            'service_title'    => $request->service_title,
            'service_category' => $request->service_category,
            'price_type'       => $request->price_type,
            'base_price'       => $request->base_price,
            'discount_price'   => $request->discount_price,
            'available_days'   => $request->available_days,
            'location_type'    => $request->location_type,
            'city'             => $request->city,
            'state'            => $request->state,
            'zip_code'         => $request->zip_code,
            'address'          => $request->address,
            'highlight'        => $request->highlight,
            'service'          => $request->service,
            'other_service'    => $request->other_service,
            'faq'              => $faq,
            'description'      => $request->description,
            'gallery'          => $gallery,
        ]);

        return redirect()->back()->with('success', 'Service updated successfully');
    }

    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);

        if (!empty($service->gallery)) {
            foreach ($service->gallery as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully!');
    }
}
