<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index ()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
        
    }


    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '0')
            {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function appointment(Request $request)
    {
        // Validate the incoming request data
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'doctor' => 'required|string|max:255',
        ]);

        // If validation passes, proceed to save the data
        if ($validator) {
            try {
                $data = new Appointment;

                // Assign values to the appointment model properties
                $data->name = $request->name;
                $data->email = $request->email;
                $data->phone = $request->phone;
                $data->date = $request->date;
                $data->doctor = $request->doctor;
                $data->message = $request->message;
                $data->status = 'in Progress';

                // If the user is authenticated, associate the user_id with the appointment
                if (auth()->check()) {
                    $data->user_id = auth()->user()->id;
                }

                $data->save();

                // Data saved successfully, you can add any additional logic or redirect here
                return redirect()->back()->with('success', 'Appointment submitted successfully. We will contact you soon!!')->withAnchor('appointment-form');

            } catch (\Exception $e) {
                // Log the exception for debugging
                \Log::error($e);

                // Return an error message or redirect back with an error
                return redirect()->back()->with('error', 'An error occurred while saving the appointment.');
            }
        } else {
            // Validation failed, redirect back with validation errors
            return redirect()->back()->withErrors($validator)->withInput()->withAnchor('appointment-form');;
        }
    }

    public function my_appointment()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $appointment = Appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appointment'));
        }
        
    }

    public function cancel_appoint($id)
    {
        $appointment = Appointment::find($id);

        $appointment->delete();

        return redirect()->back()->with('success','Appointment deleted successfully!!');
    }
    
}
