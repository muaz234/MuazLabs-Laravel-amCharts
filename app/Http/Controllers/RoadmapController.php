<?php

namespace App\Http\Controllers;

use App\Link;
use App\Level;
use App\Topic;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Database\Eloquent\Collection;

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
            // get pivot data id
            // dd($datas[0]->pivot->link_id);
            // massage data from intermediate table and its linked table values
            $data = [
                'module_id' => $datas[0]->id,
                'module_name' => $datas[0]->name,
                'link' => Link::find($datas[0]->pivot->link_id) !== null ? Link::find($datas[0]->pivot->link_id)->toArray() : [],
                'created_at' => $datas[0]->created_at,
                'updated_at' => $datas[0]->updated_at,
                'topic' => Topic::find($datas[0]->topic_id) !== null ?  Topic::find($datas[0]->topic_id)->toArray() : [],
                'level' => Level::find($datas[0]->level_id)->toArray() !== null ? Level::find($datas[0]->level_id)->toArray() : [],
            ];
                // push value to existing array value
            array_push($result, $data);
        }
        // turn into collection
        $courses = new Collection($result);
        return Datatables::of($courses)->make(true);

    }
}
