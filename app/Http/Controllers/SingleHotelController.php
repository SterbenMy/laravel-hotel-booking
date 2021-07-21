<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class SingleHotelController extends Controller
{
    public function showHotel($id)
    {
        $hotel = Hotel::select(
            'hotel.id',
            'hotel.name',
            'hotel.country',
            'hotel.rating',
            'hotel.price',
            'hotel.description',
            'hotel.address',
            'hotel.email',
            'images.path'
        )
            ->join('images', 'hotel.image_id', "=", 'images.id')
            ->where('hotel.id', "=", $id)
            ->find($id);
        return view('pages.hotel',compact('hotel'));
    }
}
