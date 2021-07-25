<?php

namespace App\Http\Controllers;

use App\Link;
use App\Level;
use App\Topic;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    //

    public function index()
    {
        return view('pages.roadmap');
    }

    public function getData()
    {
        $result = array();
        $link_ids = Link::all(['id'])->toArray();
        foreach($link_ids as $link_id)
        {
            $datas = Link::find($link_id['id'])->topics()->get();
            // massage data from intermediate table and its linked table values
            $data = [
                'link_id' => $datas[0]->id,
                'link_name' => $datas[0]->name,
                'link_url' => $datas[0]->url,
                'created_at' => $datas[0]->created_at,
                'updated_at' => $datas[0]->updated_at,
                'topic' => Topic::find($datas[0]->topic_id) !== null ?  Topic::find($datas[0]->topic_id)->toArray() : [],
                'level' => Level::find($datas[0]->level_id)->toArray() !== null ? Level::find($datas[0]->level_id)->toArray() : [],
            ];
                // push value to existing array value
            array_push($result, $data);
        }
        // return result in form of json
        return response()->json(['data' => $result]);

    }
}
