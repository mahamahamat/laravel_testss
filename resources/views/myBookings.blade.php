@extends('layouts.main')

@section('content')



<div class="container-lg" style="margin: 0 auto;">

<h2 class="text-center mt-2 mb-2" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:aquamarine" > My Bookings </h2>

<table class="table table-hover table-dark">
<thread> 
    <tr>
    <th scope="col">Booking id</th>
    <th scope="col">Appointment id</th>
    <th scope="col">Department name</th>
    <th scope="col">Appointment date</th>
    <th>Want To Cancel?</th>
    </tr>
</thread>
<tbody> 
    @foreach($bookings as $booking)
    <tr>
    <th scope="row">{{$booking->id}}</th>
    <td>{{$booking->appointment_id}}</td>
    <td>{{$booking->department_name}}</td>
    <td>{{$booking->appointment_date}}</td>
   <!--<td></td>-->
    <td>
    please call (89778798898) OR PRESS
        <form method="post" action="{{ route('cancelBooking') }}">
            @csrf
            <input type="text" style="display: none;" value="{{$booking->id}}" name="booking_id"/>
            <input type="text" style="display: none;" value="{{$booking->appointment_id}}" name="appointment_id"/>
            <input type="submit" value="cancel" class="btn btn-danger"/>
        </form>
    </td>
   
    @endforeach

</tbody>
</table>







</div>

 

@endsection