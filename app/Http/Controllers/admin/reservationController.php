<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\reservation;
use App\Models\status;
use App\Models\table;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class reservationController extends Controller
{
    public function index()
    {
              $reservation = reservation::latest()->paginate(20);
             return view('admin.reservation.index',compact('reservation'));
    }
    public function create()
   {
         $status = status::where('slug','available')->first();
        if($status){
         $table = table::where('status_id', $status->id)->get();
         return view('admin.reservation.create',compact('table'));
        }
   }

   public function store(ReservationStoreRequest $request)
   {
                $table = table::find($request->table_id);
                if($request->guests > $table->guests ){
                   return redirect()->back()->with('valid','Please Select Guest Wise Table');
                }
                $requestDate = Carbon::parse($request->resDate);
                $reserva = reservation::all();
                foreach($reserva as $date){
                    if($date->resDate == $requestDate){
                         return redirect()->back()->with('valid','This table Already Booked Please Select Other Table!');
                    }
                }


                $reservation = new reservation();
                $reservation->name = $request->name;
                $reservation->slug = Str::slug($request->name,'-');
                $reservation->email = $request->email;
                $reservation->mobile = $request->mobile;
                $reservation->guests = $request->guests;
                $reservation->resDate = $request->resDate;
                $reservation->table_id = $request->table_id;
                $reservation->save();
                Session::flash('success' , 'Reservation Add Successfully!');
                return redirect()->back();
   }
}
