<?php

namespace App\Http\Controllers\authentications;

use Session;
use App\Models\Like;
use App\Models\Dislike;
use App\Models\Secteur;
use App\Models\Voiture;
use App\Models\Candidat;
use App\Models\Programme;
use Illuminate\Http\Request;
use App\Charts\VoituresChart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }

  public function dashboard(VoituresChart $chart)
  {
    $Voiture = Voiture::query()->orderBy('id', 'ASC')->get();
    return view('content.dashboard.dashboards-analytics', ['chart' =>$chart->build(),'Voiture' =>$Voiture]);
  }

  public function Verification(Request $request)
  {
    validator(request()->all(), [
      'email' => ['required', 'email'],
      'password' => ['required'],
    ])->validate();
    if (auth()->attempt(request()->only(['email', 'password']))) {
      $request->session()->regenerate();
      $request->Session()->put('User', auth()->user());
      if($request->email == "damesarr@isigroupe.com")
      return redirect('Acceuil');
      else
      return redirect('ConsulterReservation');
    }
    return back()
      ->withErrors([
        'email' => 'Identifiants incorrects.',
      ])
      ->onlyInput('email');
  }

  public function Deconnexion()
  {
    Auth::logout();
    return redirect('Connexion');
  }
}
