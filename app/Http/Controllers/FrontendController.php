<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\menu;
use App\Models\reservation;
use App\Models\setting;
use App\Models\Special;
use App\Models\status;
use App\Models\table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;


class FrontendController extends Controller
{
    public function index()
    {
         $menu = menu::latest()->take(7)->get();
         $special = Special::latest()->take(4)->get();
        
        return view('frontend.index',compact('menu','special'));
    }

    public function stepOne(Request $request)
    {
         $minDate = Carbon::today();
         $maxDate = Carbon::now()->addWeek();
         $reservation =$request->session()->get('reservation');
        return view('frontend.stepone',compact('minDate','maxDate','reservation'));
    }

    public function stepOneStore(Request $request)
    {
       $validated = $request->validate([
              'name' => 'required',
              'mobile' => 'required',
              'resDate' => 'required','date', new DateBetween, new TimeBetween,
              'email' => 'required|email',
              'guests' => 'required',
        ]);

        if(empty($request->session()->get('reservation'))){
               $reservation = new reservation();
               $reservation->fill($validated);
               $request->session()->put('reservation', $reservation);
        }else{
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }
         return to_route('web.stepTwo');

    }
    
    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $status = status::where('slug','available')->first();         
               
                $reservation_id = reservation::orderBy('resDate')->get()->filter(function($value) use ($reservation){
               //  return  $value->resDate->format('Y-m-d') == $reservation->resDate->format('Y-m-d');
                })->pluck('table_id');
                $table = table::where('status_id',$status->id)->where('guests', '>=', $reservation->guests)->whereNotIn('id',$reservation_id)->get();
                if($table){
                  return view('frontend.steptwo',compact('table'));
             }else{
                  return redirect()->with('valid', 'This Day No Available Table Here . Please Select Another date!');
             }
    }

    public function stepTwoStore(Request $request)
    {
        $validated = $request->validate([
               'table_id' => 'required',
          ]);
           $reservation = $request->session()->get('reservation');
           $reservation->fill($validated);
           $reservation->save();
           $request->session()->forget('reservation');
        
           Session::flash('success', 'Your Reservation Ready');
           return redirect()->route('web.home');
    }

    public function contact()
    {
          return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
          $request->validate([
               'name' => 'required',
               'mobile' => 'required',
               'message' => 'required',
          ]);

          $contact = new contact();
          $contact->name = $request->name;
          $contact->mobile = $request->mobile;
          $contact->email = $request->email;
          $contact->message = $request->message;
          $contact->save();
          Session::flash('success','Message Send Successfully!');
          return redirect()->back();
    }


   
}
