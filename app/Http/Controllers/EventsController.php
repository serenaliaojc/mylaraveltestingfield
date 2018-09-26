<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    public function index() {
        $events = [
            'Laravel Hacking and Coffee', 
            'IoT with Raspberry Pi',
            'Free Vue.js Lessons'
        ]; 
        return view('events.index')->with('events', $events); 
    }

    public function show($id)
    {
        // dd($id);

        // concat:
        // $name = 'Hilton Head Beach House';
        //  $date = date('Y-m-d');
        //  return view('welcome', compact('name', 'date'));

        // array
        $data = [
            'name' => 'Name from Array',
            'date' => date('Y-m-d'),
            'id' => $id
        ];
        return view('events.show')->with($data);

        // return view('events.show')
        //     ->with('id', $id)
        //     ->with('name', 'The name comes from the controller');
    }

    public function category($category, $subcategory = 'all')
    {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
