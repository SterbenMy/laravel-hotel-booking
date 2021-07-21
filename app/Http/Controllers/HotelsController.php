<?php

namespace App\Http\Controllers;

use App\Models\Hotel;


class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::select(
            'hotel.id',
            'hotel.name',
            'hotel.country',
            'hotel.rating',
            'hotel.price',
            'hotel.address',
            'hotel.description',
            'images.path'
        )
            ->join('images', 'hotel.image_id', "=", 'images.id')
            ->paginate(9);
        return view('pages.ourHotels', compact('hotels'));
    }


}
