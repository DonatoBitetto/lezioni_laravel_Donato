<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public $shows = [
        [
            "name" => "The Witcher",
            "year" => 2019,
            "description" => "Geralt di Rivia, un cacciatore di mostri mutante, viaggia verso il suo destino in un mondo turbolento in cui le persone spesso si dimostrano più perverse delle bestie.",
            "img" => "/img/the_witcher.jpg"
        ],
        [
            "name" => "Peaky Blinders",
            "year" => 2013,
            "description" => "La storia di una famiglia criminale nella Birmingham del 1919, Inghilterra, centrata sulle vicende di una gang che nasconde delle lame di rasoio nelle visiere dei propri cappelli e del loro capo Tommy Shelby, che aspira a trovare il suo posto nel mondo.",
            "img" => "/img/peaky_blinders.jpg"
        ],
        [
            "name" => "Vikings",
            "year" => 2013,
            "description" => "Vikings è una serie televisiva storica canadese iniziata nel 2013 e prodotta da History Channel .",
            "img" => "/img/vikings.jpg"
        ],
        [
            "name" => "Fringe",
            "year" => 2008,
            "description" => "La Divisione Fringe si occupa di indagare su una serie di eventi inspiegabili, noti come Eventi Fringe, che si stanno verificando in varie parti del mondo. Ne fanno parte lo scienziato Walter Bishop, suo figlio Peter e l'agente dell'FBI Oli via Dunham.",
            "img" => "/img/fringe.jpg"
        ],
        [
            "name" => "Gomorra",
            "year" => 2014,
            "description" => "",
            "img" => "/img/gomorra.jpg"
        ],
        [
            "name" => "Hannibal",
            "year" => 2013,
            "description" => "",
            "img" => "/img/hannibal.jpg"
        ],
    ];
    public function index() {
        return view('shows', [
            'series' => $this->shows
        ]);
    }

    public function show($title){
        foreach ($this->shows as $show) {
            if($title == $show['name']){
                return view('show-series', [
                    'show' => $show
                ]);
            }
        }

        abort(404);
    }

}
