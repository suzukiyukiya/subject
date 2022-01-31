<?php

namespace App\Http\Controllers;

use App\User;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function index(Lesson $lesson)
    { 
        $lessons = $lesson::orderBy('id', 'asc')->get();
        return view('subject/time_table', compact('lessons'));
    }
    
    public function store(Request $request)
    {
        $input_lessons = $request->lessons_array;
        $user = Auth::user();

        $user->lessons()->detach();
        $user->lessons()->attach($input_lessons); 
        return redirect('/process');
    }
    
    public function process()
    {
        $eigoes = Lesson::select('subject_group_id','unit')->where('subject_group_id', 5)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $careers = Lesson::select('subject_group_id','unit')->where('subject_group_id', 10)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $ningengakus = Lesson::select('id','unit')->where('id', 65)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $sinrigakus = Lesson::select('id','unit')->where('id', 66)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $syakaigakus = Lesson::select('id','unit')->where('id', 67)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $kokusaigakus = Lesson::select('id','unit')->where('id', 68)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $bunkens = Lesson::select('id','unit')->where('id', 169)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $zemis = Lesson::select('subject_group_id','unit')->where('subject_group_id', 17)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $bunkas = Lesson::select('subject_group_id','unit')->where('subject_group_id', 2)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $syakais = Lesson::select('subject_group_id','unit')->where('subject_group_id', 3)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $sizens = Lesson::select('subject_group_id','unit')->where('subject_group_id', 4)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $jouhous = Lesson::select('subject_group_id','unit')->where('subject_group_id', 7)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $taikens = Lesson::select('subject_group_id','unit')->where('subject_group_id', 15)->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->get()->toArray();
        
        $kyouyous = Lesson::select('subject_group_id','unit')->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->where(function($query){
            $query->where('subject_group_id', 1)
            ->orWhere('subject_group_id', 2)
            ->orWhere('subject_group_id', 3)
            ->orWhere('subject_group_id', 4)
            ->orWhere('subject_group_id', 6)
            ->orWhere('subject_group_id', 7)
            ->orWhere('subject_group_id', 8)
            ->orWhere('subject_group_id', 9);
        })->get()->toArray();
        
        $senmons = Lesson::select('id','subject_group_id','unit')->whereHas('users', function($q){
            $q->where('id', Auth::id());
        })->where(function($query){
            $query->where('id', 69)
            ->orWhere('id', 70)
            ->orWhere('id', 71)
            ->orWhere('id', 170)
            ->orWhere('subject_group_id', 12)
            ->orWhere('subject_group_id', 13)
            ->orWhere('subject_group_id', 14)
            ->orWhere('subject_group_id', 15);
        })->get()->toArray();
        
        $eigoes_unit = 0;
    foreach($eigoes as $eigo){
        $eigoes_unit += $eigo["unit"];
    }
    
    $careers_unit = 0;
    foreach($careers as $career){
        $careers_unit += $career["unit"];
    }
    
    $ningengakus_unit = 0;
    foreach($ningengakus as $ningengaku){
        $ningengakus_unit += $ningengaku["unit"];
    }
    
    $sinrigakus_unit = 0;
    foreach($sinrigakus as $sinrigaku){
        $sinrigakus_unit += $sinrigaku["unit"];
    }
    
    $syakaigakus_unit = 0;
    foreach($syakaigakus as $syakaigaku){
        $syakaigakus_unit += $syakaigaku["unit"];
    }
    
    $kokusaigakus_unit = 0;
    foreach($kokusaigakus as $kokusaigaku){
        $kokusaigakus_unit += $kokusaigaku["unit"];
    }
    
    $bunkens_unit = 0;
    foreach($bunkens as $bunken){
        $bunkens_unit += $bunken["unit"];
    }
        
    $zemis_unit = 0;
    foreach($zemis as $zemi){
        $zemis_unit += $zemi["unit"];
    }
    
    $bunkas_unit = 0;
    foreach($bunkas as $bunka){
        $bunkas_unit += $bunka["unit"];
    }
    
    $syakais_unit = 0;
    foreach($syakais as $syakai){
        $syakais_unit += $syakai["unit"];
    }
    
    $sizens_unit = 0;
    foreach($sizens as $sizen){
        $sizens_unit += $sizen["unit"];
    }
    
    $jouhous_unit = 0;
    foreach($jouhous as $jouhou){
        $jouhous_unit += $jouhou["unit"];
    }
    
    $taikens_unit = 0;
    foreach($taikens as $taiken){
        $taikens_unit += $taiken["unit"];
    }
    
    $kyouyous_unit = 0;
    foreach($kyouyous as $kyouyou){
        $kyouyous_unit += $kyouyou["unit"];
    }
    
    $senmons_unit = 0;
    foreach($senmons as $senmon){
        $senmons_unit += $senmon["unit"];
    }
        //dd($taikens);
        return view ('subject/result',compact('eigoes_unit','careers_unit','ningengakus_unit','sinrigakus_unit','syakaigakus_unit','kokusaigakus_unit','bunkens_unit','zemis_unit','bunkas_unit','syakais_unit','sizens_unit','jouhous_unit','taikens_unit','kyouyous_unit','senmons_unit','eigoes','careers','ningengakus','sinrigakus','syakaigakus','kokusaigakus','bunkens','zemis','bunkas','syakais','sizens','jouhous','taikens','kyouyous','senmons'));
    }
}
