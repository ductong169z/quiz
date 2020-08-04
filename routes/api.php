<?php

use App\Account;
use App\Anime;
use App\GenreAnime;
use App\Season;
use App\Studio;
use App\StudioAnime;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('create-season', function () {
    $season = array('Spring', 'Fall', 'Summer', 'Winter');
    for ($i = 2002; $i < 2022; $i++) {
        for ($j = 0; $j < 4; $j++) {
            Season::create([
                'name' => $season[$j] . " " . $i
            ]);
        }

    }

});
Route::get('get-data', function () {
    $data = Curl::to('https://api.jikan.moe/v3/user/moonbox/animelist/all/1')->withContentType('application/json')
        ->asJson()->get();
    $array = [];
        foreach ($data->anime as $key => $item) {
$i=0;
            try{
                $id = $item->mal_id;
                $array[] = $id;

                $info = Curl::to('https://api.jikan.moe/v3/anime/' . $id)->withContentType('application/json')
                    ->asJson()->get();
                $season = Season::pluck('name', 'SeasonID');
                $season = iterator_to_array($season);
                $studio = $item->studios;
                $genres = $info->genres;
                if (is_int(array_search($info->premiered, $season))) {
                    $id_ss = array_search($info->premiered, $season);
                } else {
                    $id_ss = null;
                };
                $status = Anime::create([
                    'name' => $info->title,
                    'type' => $info->type,
                    'releaseDate' => $item->start_date,
                    'rating' => $item->rating,
                    'episodes' => $info->episodes,
                    'status' => $info->status,
                    'duration' => $info->duration,
                    'description' => $info->synopsis,
                    'poster' => $info->image_url,
                    'trailer' => $info->trailer_url,
                    'AccountID' => 1,
                    'SeasonID' => $id_ss,
                ]);


                foreach ($studio as $item) {
                    if (!$curr_st=Studio::where('mal_id', $item->mal_id)->first()) {
                        $studio_ID = Studio::create([
                            'mal_id' => $item->mal_id,
                            'name' => $item->name
                        ]);
                        StudioAnime::create([
                            'Animeid' => $status->id,
                            'StudioID' => $studio_ID->id
                        ]);
                    }else{
                        StudioAnime::create([
                            'Animeid' => $status->id,
                            'StudioID' => $curr_st->StudioID
                        ]);
                    }


                }
                foreach ($genres as $item) {
                    GenreAnime::create([
                        'GenreID' => $item->mal_id,
                        'AnimeID' => $status->id
                    ]);
                }
            }catch (Exception $exception){
                dump($exception);

            }



        }


    return ['status' => true];
});
Route::get('get-image',function (){
    $anime=Anime::get();
    foreach ($anime as $item){
        Anime::where('id',$item->id)->first()->update([
                'poster'=>$item->id.'.jpg'
            ]);
    }

});
Route::get('create-user',function (){
$name=array("Nguyễn Đức Tông","Quản Đức Lộc","Trần Minh Thắng","Lưu Tiến Minh");
$i=0;
for($i=0;$i<8;$i++){

    foreach ($name as $item){
        $i++;
        $acc=Account::create([
            'RoleID'=>2,
            'username'=>"account".$i,
            'fullname'=>$item,
            'password'=>md5(123456)
        ]);
    }
}


});
