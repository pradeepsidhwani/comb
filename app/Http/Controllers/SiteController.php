<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
      return view('site.home');
    }

    public function about()
    {
      return view('site.about');
    }
    public function contact()
    {
      return view('site.contact');
    }

    public function detail($id)
    {

    }
    public function task()
    {
      $path = storage_path() . "/json/apps.json";
      $json = json_decode(file_get_contents($path), true);
      $apps = array();
      $msg = "";
      foreach ($json as $j) {
        $s = 1;
        foreach ($j["permissions"] as $p) {
          if ($p['severity'] >= $s) {
            $s=$p['severity'];
          }
        }
        if ($s == 3) {
          $msg = "High Risk";
        }
        else if ($s == 2) {
          $msg = "Medium Risk";
        }
        else {
          $msg = "Low Risk";
        }
        $app = array($j['appName'],$msg);
        $apps[] = $app;
      }
       // return $apps;
      return view('site.task',compact("apps"));
    }
}
