<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'room' => 'nullable|string|max:50',
            'speciality' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Validate the incoming request data
        $validation = $request->validate($rules);

        // Check if validation passed
        if ($validation) {
            // Create a new Doctor instance
            $doctor = new Doctor;

            // Process and move the uploaded image
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('doctor_image', $image_name);

            // Set attributes for the Doctor model
            $doctor->name = $request->input('name');
            $doctor->phone = $request->input('number');
            $doctor->room = $request->input('room');
            $doctor->speciality = $request->input('speciality');
            $doctor->image = $image_name;

            // Save the Doctor model to the database
            $doctor->save();

            // Redirect back with a success message
            return redirect()->route('add_doctor_view')->with('success', 'Doctor information uploaded successfully');
        } else {
            return redirect()->back()
            ->withErrors('There was an error with the submitted data. Please check the form and try again.')
            ->withInput();
        }
    }

    public function show_appointments()
    {
        if (Auth::check() && Auth::user()->usertype == 1)
        {
            $data = Appointment::all();

            return view('admin.show_appointments', compact('data'));
        } else 
        {
            return redirect()->back();
        }
        
    }

    public function approved($id)
    {
        $data = Appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back()->with('success','status changed to Approved!!');
    }

    public function Cancel($id)
    {
        $data = Appointment::find($id);

        $data->status = 'Canceled';

        $data->save();

        return redirect()->back()->with('success','status changed to Cancel!!');
    }
    
    public function show_doctors()
    {
        if(Auth::id()){

            if(Auth::user()->usertype==1){

                $doctors = Doctor::all();

                return view('admin.show_doctors', compact('doctors'));

            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();  
        }
        
    }

    public function delete_doctor($id)
    {
        $doctor = Doctor::find($id);

        $doctor->delete();

        return redirect()->back()->with('success','doctor deleted successfully!!');
    }

    public function update_doctor($id, Request $request)
    {
        $doctor = Doctor::find($id);

        return view('admin.update_doctor', compact('doctor'));
    }

    public function edit_doctor(Request $request, $id)
    {
        // Find the existing    doctor by ID
        $doctor = Doctor::find($id);

        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'room' => 'nullable|string|max:50',
            'speciality' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Validate the incoming request data
        $validation = $request->validate($rules);

        // Check if validation passed
        if ($validation) {
            // Check if a new image is provided and it's valid
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // Process and move the uploaded image
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $image->move('doctor_image', $image_name);

                // Update the image attribute
                $doctor->image = $image_name;
            }

            // Update attributes for the existing Doctor model
            $doctor->name = $request->input('name');
            $doctor->phone = $request->input('number');
            $doctor->room = $request->input('room');
            $doctor->speciality = $request->input('speciality');

            // Save the updated Doctor model to the database
            $doctor->save();

            return redirect()->back()->with('success','Doctor data updated successfully!!');
        }
    }

}
