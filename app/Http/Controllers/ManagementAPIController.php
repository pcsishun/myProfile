<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ManagementAPIController extends Controller
{

    function home_data(){
        $full_data = "Real-life programming isn't always glamorous. You're not always launching fancy new interactive features 
        backed by weeks of marketing and hype. In fact, that's rarely the case. Instead, much of the time, we work on boring 
        fixes and general maintenance of packages and tools that, frankly, not many people use. This is the reality.";

        return view('homepage', compact('full_data'));
    }


    //
    function bio_data(){

        $count_array = 0;
        $bio_array = [];

        $bioData = DB::table("mybio")
        ->get();
 
        foreach($bioData as $row_data){

            $condition = $row_data -> {'title'};
 
            if($condition == "Name"){
                $data = $row_data -> {'desc'};
                $json_data = json_decode($data);
                $detail = $json_data -> {'detail'};

                $bio_array[$count_array] = $detail;
                $count_array = $count_array  + 1;
            }

            elseif($condition == "Age"){
                $data = $row_data -> {'desc'};
                $json_data = json_decode($data);
                $detail = $json_data -> {'detail'};

                $bio_array[$count_array] = $detail;      
                $count_array = $count_array  + 1;    
            }
            elseif($condition == "description"){
                $data = $row_data -> {'desc'};
                $json_data = json_decode($data);
                $detail = $json_data -> {'detail'};

                $bio_array[$count_array] = $detail;     
                $count_array = $count_array  + 1;     
            }
        }
        
        $record = compact('bio_array');
        // dd($record["bio_array"][0]);
        return view('biographypage',compact("record"));
    }

    function skill_data(){

        $skill_data = DB::table('skilldata')
        ->get();
        $skill_json = json_decode($skill_data);

        // dd($skill_json[0] -> title);

        return view('skillpage',compact("skill_json"));
    }

    function exp_data(){
        $expData = DB::table('myexp')
        ->get();

        $exp_json = json_decode($expData);

        return view('exppage', compact('exp_json'));
    }

    function contact_data(){
        
        $numberPhone = "065-549-8745";
        $Email = "pcsishun@gmail.com";
        $address = "799/126";
        $province = "chiang-mai";
        $tumbol = "Paidak";
        $amupol = "Muang";
        $codeid = "50100";

        $contact_result = compact(['numberPhone','Email','address','province','tumbol','amupol','codeid']);

        // dd($contact_result);

        return view('contantpage',compact("contact_result"));;
    }
 
}
