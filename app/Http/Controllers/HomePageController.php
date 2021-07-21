<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Hotel;
use App\Models\Team;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $articles=$this->showArticles();
        $hotels=$this->showHotels();
        $team = $this->showTeam();
        return view('pages.homepage')
            ->with (compact('team'))
            ->with (compact('hotels'))
            ->with (compact('articles'));

    }

    public function showTeam()
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
        return $team;
    }
    public function showHotels(){
        $hotels = Hotel::select(
            'hotel.id',
            'hotel.name',
            'hotel.country',
            'hotel.rating',
            'hotel.address',
            'hotel.price',
            'hotel.description',
            'images.path'
        )
            ->join('images', 'hotel.image_id', "=", 'images.id')
            ->orderBy('hotel.rating', 'desc')
            ->paginate(6);
        return $hotels;
    }
    public function showArticles(){
        $articles = Article::select(
            'articles.id',
            'articles.title',
            'articles.short_description',
            'articles.published_at',
            'images.path'
        )
            ->join('images', 'articles.image_id', "=", 'images.id')
            ->orderBy('articles.published_at', 'desc')
            ->paginate(3);
        return $articles;
    }
}
