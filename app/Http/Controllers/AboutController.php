<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $team = Team::select(
            'team.id',
            'team.name',
            'team.position',
            'team.email',
            'team.phone',
            'images.path')
            ->join('images', 'team.image_id', "=", 'images.id')
            ->get();


        return view('pages.about', compact('team'));
    }
}
