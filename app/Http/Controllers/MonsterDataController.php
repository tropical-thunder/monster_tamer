<?php

namespace App\Http\Controllers;

use App\MonsterData;
use App\ZukanData;
use App\BokujouData;
use Illuminate\Http\Request;

class MonsterDataController extends Controller
{
    
  
    /*ルートの画面*/

    public function home()
    {
        return view('home');
    }


    /* ↓ 戦闘画面用のコード　ランダムな数字を生成し、その数字を元にDBからモンスターデータを
    取得し変数に格納してbladeに送る*/

    public function battle()
    {
        $id = mt_rand(1,9);
        $monster = MonsterData::find($id);
        return view('battle',[ 'monster' => $monster ]);
    }


    /* ↓ 戦闘画面で捕まえたモンスターデータを図鑑DBに保存するコード*/

    public function store(Request $request)
    {
        /*↓ すでに捕まえたモンスターの場合は、図鑑DBには保存しない　*/

        $zukan_check = ZukanData::where('name',$request->name)->exists();
        
        if($zukan_check == true)
        {

        }else{
            $zukan = new ZukanData();
            $zukan->name = $request->name;
            $zukan->description = $request->description;
            $zukan->image_id = $request->image_id;
            $zukan->monster_id = $request->monster_id;
            $zukan->syubetsu = $request->syubetsu;
            $zukan->save();
        }
       

        /* ↓牧場DBに戦闘画面で捕まえたモンスターを保存*/

        $bokujou = new BokujouData();
        $bokujou->name = $request->name;
        $bokujou->image_id = $request->image_id;
        $bokujou->nickname = $request->nickname;
        $bokujou->save();

        return redirect()->route('bokujou');
    }


    /* ↓ 牧場DBからデータを引っ張って、捕まえたモンスターを表示するコード　*/

    public function show_bokujou(MonsterData $monsterData)
    {
        //
        $bokujou_datas = BokujouData::All();
        return view('bokujou',['bokujou_datas'=> $bokujou_datas]);
    }

     public function show_bokujou_detail(MonsterData $monsterData,$id)
    {
        //
        $bokujou_data = BokujouData::find($id);
        return view('bokujou_detail',['bokujou_data'=> $bokujou_data]);
    }

    /* ↓ 図鑑DBから捕まえたモンスターデータを引っ張って表示するコード　*/

    public function show_zukan(MonsterData $monsterData)
    {
        //
        $zukan_datas = ZukanData::All()->sortBy('monster_id');
        return view('zukan',['zukan_datas'=> $zukan_datas]);
    }

     public function show_zukan_detail(MonsterData $monsterData , $id)
    {
        //
        $zukan_data = ZukanData::find($id);
        return view('detail',['zukan_data'=> $zukan_data]);
    }


    /* ↓ 牧場DBにあるモンスターデータ（モンスターの名前)に変更を加えるコード*/

    public function bokujou_update(Request $request,$id, MonsterData $monsterData)
    {
        //
        $bokujou_data = BokujouData::find($id);
        $bokujou_data->nickname = $request->nickname;
        $bokujou_data->save();
        return redirect('bokujou');
    }


    /* ↓ 牧場DBからモンスターのデータを削除するコード　*/
    public function destroy(MonsterData $monsterData, $id)
    {
        //
        $bokujou = BokujouData::find($id);
        $bokujou->delete();
        return redirect('/bokujou');
    }
}
