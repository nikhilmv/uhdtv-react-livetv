<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WishListResource;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class TvController extends Controller
{
    public function allchannels(Request $request){
 
 
        $dummy = '{
                    "page": 1,
                    "results": [
                     
                        {
                            "adult": false,
                            "backdrop_path": "/ookJ1LS8Uc0ji7cSDuJfV7Qh6Lb.jpg",
                            "genre_ids": [
                                10764
                            ],
                            "id": 18770,
                            "origin_country": [
                                "ES"
                            ],
                            "original_language": "es",
                            "original_name": "KTV_HD",
                            "overview": "KTV_HD is a reality television series broadcast in Spain on Telecinco and La Siete produced by Endemol. It is part of the Big Brother franchise first developed in the Netherlands. As of February 2012, 19 editions of the show have aired.",
                            "popularity": 2078.686,
                            "poster_path": "'.asset('storage/sunnxt/KTVHD-185x278.webp').'",
                            "first_air_date": "2000-04-23",
                            "name": "KTV_HD",
                            "vote_average": 4.594,
                            "vote_count": 16,
                            "platform": "sunnxt"
                        }, 
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258463,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUNTV_HD",
                            "overview": "SUNTV_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sun-HD-white-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUNTV_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        } ,
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258464,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_TV_HD",
                            "overview": "GEMINI_TV_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/geminihd-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_TV_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        }, 
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_MUSIC_HD",
                            "overview": "SUN_MUSIC_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sun-music-HD-white-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_MUSIC_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_HD_DOLBY",
                            "overview": "SUN_HD_DOLBY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sun-HD-au-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_HD_DOLBY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUNTV_HD_AU",
                            "overview": "SUNTV_HD_AU, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sun-HD-au-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUNTV_HD_AU",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                                                {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_NEWS",
                            "overview": "SUN_NEWS, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sunnews-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_NEWS",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_LIFE",
                            "overview": "SUN_LIFE, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sunlife-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_LIFE",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },  
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ADITHYA_TV",
                            "overview": "ADITHYA_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/ADITHYA-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "ADITHYA_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "CHUTTI_TV",
                            "overview": "CHUTTI_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/DeJNqhp-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "CHUTTI_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_MUSIC",
                            "overview": "SUN_MUSIC, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/SUNMUSIC-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_MUSIC",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_TV",
                            "overview": "SUN_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/SUNTV-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "KTV",
                            "overview": "KTV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/KTV-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "KTV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_TV_HD_DOLBY",
                            "overview": "GEMINI_TV_HD_DOLBY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/geminihd-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_TV_HD_DOLBY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_MUSIC_HD",
                            "overview": "GEMINI_MUSIC_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/images-1-2-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_MUSIC_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_COMEDY",
                            "overview": "GEMINI_COMEDY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/geminicomedy-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_COMEDY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_LIFE",
                            "overview": "GEMINI_LIFE, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/geminilife-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_LIFE",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "KUSHI_TV",
                            "overview": "KUSHI_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/kushitxv-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "KUSHI_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_TV",
                            "overview": "GEMINI_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/geminitv-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_MOVIES",
                            "overview": "GEMINI_MOVIES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/images-1-1-1-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_MOVIES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_MOVIES_HD",
                            "overview": "GEMINI_MOVIES_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/images-1-1-1-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_MOVIES_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "GEMINI_MUSIC",
                            "overview": "GEMINI_MUSIC, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/GEMINIMUSIC-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "GEMINI_MUSIC",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SURYA_TV_HD",
                            "overview": "SURYA_TV_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/surya1-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SURYA_TV_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SURYA_TV_HD_DOLBY",
                            "overview": "SURYA_TV_HD_DOLBY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/surya1-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SURYA_TV_HD_DOLBY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SURYA_MUSIC",
                            "overview": "SURYA_MUSIC, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/suryamusic1-1-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SURYA_MUSIC",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SURYA_COMEDY",
                            "overview": "SURYA_COMEDY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/suryacomedy-1-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SURYA_COMEDY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "KOCHU_TV",
                            "overview": "KOCHU_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/kochu.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "KOCHU_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "UDAYA_HD",
                            "overview": "UDAYA_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/udayahd-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "UDAYA_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "UDAYA_HD_DOLBY",
                            "overview": "UDAYA_HD_DOLBY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/udayahd-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "UDAYA_HD_DOLBY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "UDAYA_MOVIES",
                            "overview": "UDAYA_MOVIES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/udayamovies-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "UDAYA_MOVIES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "UDAYA_MUSIC",
                            "overview": "UDAYA_MUSIC, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/udayamusic-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "UDAYA_MUSIC",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "UDAYA_COMEDY",
                            "overview": "UDAYA_COMEDY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/udaycomedy-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "UDAYA_COMEDY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "CHINTU_TV",
                            "overview": "CHINTU_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/kochu.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "CHINTU_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "UDAYA_TV",
                            "overview": "UDAYA_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/udaya-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "UDAYA_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_BANGLA",
                            "overview": "SUN_BANGLA, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/images-1-1-1-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_BANGLA",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_MARATHI",
                            "overview": "SUN_MARATHI, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/KXyB3Mf-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_MARATHI",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_MARATHI_AU",
                            "overview": "SUN_MARATHI_AU, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/KXyB3Mf-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_MARATHI_AU",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUN_NEO_HD",
                            "overview": "SUN_NEO_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sunneohd.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUN_NEO_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "-asianet_1",
                            "overview": "-asianet_1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/ASIANET-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "-asianet_1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "yupp"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "asianet-plus",
                            "overview": "asianet-plus, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/images-1-4-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "asianet-plus",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "yupp"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "asianet-movies",
                            "overview": "asianet-movies, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/images-1-5-2-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "asianet-movies",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "yupp"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "kairali-tv",
                            "overview": "kairali-tv, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/kairali-185x278.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "kairali-tv",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "yupp"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "mazhavil",
                            "overview": "mazhavil, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/MAZHAVILHD-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "mazhavil_manorama",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://cdn1.pishow.tv/live/200/master.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "flowers",
                            "overview": "mazhavil, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/flowers-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "634",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "jio"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "asianethd",
                            "overview": "asianethd, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/ASIAHD-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "asianethd",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://217.20.112.199/asianet/index.m3u8",
                            "platform": "m3u8"

                        } ,
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "kaumudy",
                            "overview": "kaumudy, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "kaumudy",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://oqgdrkxby4rm-hls-live.5centscdn.com/kaumudytv/live.stream/playlist.m3u8",
                            "platform": "m3u8"

                        } ,
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "safari",
                            "overview": "safari, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "safari",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://j78dp346yq5r-hls-live.5centscdn.com/safari/live.stream/playlist.m3u8",
                            "platform": "m3u8"

                        } ,
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "FoxSports1",
                            "overview": "FoxSports1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "FoxSports1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://fl2.moveonjoy.com/FOX_Sports_1/index.m3u8",
                            "platform": "m3u8"

                        } ,
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "kairaliwe",
                            "overview": "kairaliwe, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "kairaliwe",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://yuppmedtaorire.akamaized.net/v1/master/a0d007312bfd99c47f76b77ae26b1ccdaae76cb1/wetv_nim_https/050522/wetv/playlist.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "hbo",
                            "overview": "hbo, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "hbo",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://fl2.moveonjoy.com/HBO/index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "sports18",
                            "overview": "sports18, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "sports18",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://jiotvbpklive.cdn.jio.com/bpk-tv/IDCDemo_IPL23_Sports18_MOB/Fallback/index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "JCSports247",
                            "overview": "JCSports247, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "JCSports247",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://prod-ent-live-gm.jiocinema.com/bpk-tv/JV_SportsHD15_DIG_MOB/Fallback/index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "FoxCricket501",
                            "overview": "FoxCricket501, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "FoxCricket501",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://m118753.protect-cdn.net/live/m1-index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ASTRO_FOOTBALL",
                            "overview": "ASTRO_FOOTBALL, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ASTRO_FOOTBALL",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ASTRO_SUPERSPORT",
                            "overview": "ASTRO_SUPERSPORT, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ASTRO_SUPERSPORT",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ASTRO_SPORTS",
                            "overview": "ASTRO_SPORTS, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ASTRO_SPORTS",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TELEMUNDO_USA",
                            "overview": "TELEMUNDO_USA, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TELEMUNDO_USA",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "NFL",
                            "overview": "NFL, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "NFL",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "NBC_SPORTS",
                            "overview": "NBC_SPORTS, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "NBC_SPORTS",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "PREMIER_LEAGUE_TV",
                            "overview": "PREMIER_LEAGUE_TV, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "PREMIER_LEAGUE_TV",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "WWE",
                            "overview": "WWE, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "WWE",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SPOTV_2",
                            "overview": "SPOTV_2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SPOTV_2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SPOTV2_2",
                            "overview": "SPOTV2_2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SPOTV2_2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC1",
                            "overview": "SSC1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC2",
                            "overview": "SSC2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC3",
                            "overview": "SSC3, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC3",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC4",
                            "overview": "SSC4, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC4",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC5",
                            "overview": "SSC5, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC5",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC_EXTRA1",
                            "overview": "SSC_EXTRA1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC_EXTRA1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SSC_EXTRA2",
                            "overview": "SSC_EXTRA2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SSC_EXTRA2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "BEIN_SPORTS_2",
                            "overview": "BEIN_SPORTS_2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "BEIN_SPORTS_2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "BEIN_SPORTS_4_TH",
                            "overview": "BEIN_SPORTS_4_TH, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "BEIN_SPORTS_4_TH",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "PREMIER_SPORTS_1_ASTRO",
                            "overview": "PREMIER_SPORTS_1_ASTRO, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "PREMIER_SPORTS_1_ASTRO",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "RTL_HD",
                            "overview": "RTL_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "RTL_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ZIGGO_SPORT",
                            "overview": "ZIGGO_SPORT, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ZIGGO_SPORT",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ZIGGO_SPORT_2",
                            "overview": "ZIGGO_SPORT_2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ZIGGO_SPORT_2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ZIGGO_SPORT_3",
                            "overview": "ZIGGO_SPORT_3, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ZIGGO_SPORT_3",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ZIGGO_4_TENNIS",
                            "overview": "ZIGGO_4_TENNIS, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ZIGGO_4_TENNIS",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ZIGGO_SPORT_5",
                            "overview": "ZIGGO_SPORT_5, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ZIGGO_SPORT_5",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ZIGGO_SPORT_6",
                            "overview": "ZIGGO_SPORT_6, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ZIGGO_SPORT_6",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "DAZN_LALIGA",
                            "overview": "DAZN_LALIGA, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "DAZN_LALIGA",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "LALIGA_GB",
                            "overview": "LALIGA_GB, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "LALIGA_GB",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TV_LA_1_ES",
                            "overview": "TV_LA_1_ES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TV_LA_1_ES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "BEIN_XTRA_N_ES",
                            "overview": "BEIN_XTRA_N_ES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "BEIN_XTRA_N_ES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TNT_1_GB",
                            "overview": "TNT_1_GB, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TNT_1_GB",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TNT_2_GB",
                            "overview": "TNT_2_GB, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TNT_2_GB",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TNT_4_GB",
                            "overview": "TNT_4_GB, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TNT_4_GB",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "CANALE_5_IT",
                            "overview": "CANALE_5_IT, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "CANALE_5_IT",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "ITALIA_1",
                            "overview": "ITALIA_1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "ITALIA_1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SPORT_PLUS_DE",
                            "overview": "SPORT_PLUS_DE, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "SPORT_PLUS_DE",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "HRT_2",
                            "overview": "HRT_2, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "HRT_2",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "INFINITY_PLUS_1",
                            "overview": "INFINITY_PLUS_1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "INFINITY_PLUS_1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "Astro_Sports_3",
                            "overview": "Astro_Sports_3, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "Astro_Sports_3",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TEN_CRICKET",
                            "overview": "TEN_CRICKET, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TEN_CRICKET",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "PTV_SPORTS",
                            "overview": "PTV_SPORTS, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "PTV_SPORTS",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "DAZN_1_ES",
                            "overview": "DAZN_1_ES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "DAZN_1_ES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "DAZN_2_ES",
                            "overview": "DAZN_2_ES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "DAZN_2_ES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "EUROSPORT_1_ES",
                            "overview": "EUROSPORT_1_ES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "EUROSPORT_1_ES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "DAZN_F1",
                            "overview": "DAZN_F1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "DAZN_F1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "EUROSPORT_2_ES",
                            "overview": "EUROSPORT_2_ES, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "EUROSPORT_2_ES",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "LALIGA_HYPE",
                            "overview": "LALIGA_HYPE, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "LALIGA_HYPE",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "CANALE_5_ITALY",
                            "overview": "CANALE_5_ITALY, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "CANALE_5_ITALY",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "NBC_USA",
                            "overview": "NBC_USA, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "NBC_USA",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/FLOWERSUSA-185x278.webp",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "flowers usa",
                            "overview": "flowers usa, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/FLOWERSUSA-185x278.webp').'",   
                            "first_air_date": "2024-11-30",
                            "name": "flowers usa",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://yuppmedtaorire.akamaized.net/v1/master/a0d007312bfd99c47f76b77ae26b1ccdaae76cb1/flowers_nim_https/050522/flowers/playlist.m3u8", 
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "amrita",
                            "overview": "amrita, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                             "poster_path": "'.asset('storage/sunnxt/amrita-tv-black-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "amrita",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://dr1zhpsuem5f4.cloudfront.net/master_2000.m3u8", 
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "kclhd",
                            "overview": "kclhd, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "kclhd",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://kcltv.livebox.co.in/kclhls/live.m3u8", 
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "24news",
                            "overview": "24news, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "24news",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://segment.yuppcdn.net/110322/channel24/playlist.m3u8", 
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "asianetnews",
                            "overview": "asianetnews, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "asianetnews",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://vidcdn.vidgyor.com/asianet-origin/liveabr/asianet-origin/live_720p/chunks.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "indiatoday",
                            "overview": "indiatoday, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "indiatoday",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://indiatodaylive.akamaized.net/hls/live/2014320/indiatoday/indiatodaylive/live_720p/chunks.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "bbc",
                            "overview": "bbc, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                               "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "bbc",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://cdn4.skygo.mn/live/disk1/BBC_News/HLSv3-FTA/BBC_News.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "aljazeera",
                            "overview": "aljazeera, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                               "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "aljazeera",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://live-hls-web-aje.getaj.net/AJE/02.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "sony pixhd",
                            "overview": "sony pixhd, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                                "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "sony pixhd",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://212.102.34.8:9080/SonyPixHD/video.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "isaiaruvi",
                            "overview": "isaiaruvi, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                               "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "isaiaruvi",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://segment.yuppcdn.net/140622/isaiaruvi/playlist.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "star sports hindi",
                            "overview": "star sports hindi, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865, 
                            "poster_path": "'.asset('storage/sunnxt/STARSPHINDI.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "star sports hindi",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://109.61.81.147:2080/cdn2/511/video.m3u8", 
                            "platform": "m3u8" 
                        },
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "sony sports 3",
                            "overview": "sony sports 3, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865, 
                            "poster_path": "'.asset('storage/sunnxt/sten3sd.png').'", 
                            "first_air_date": "2024-11-30",
                            "name": "sony sports 3",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://109.61.81.147:2080/cdn2/504/video.m3u8", 
                            "platform": "m3u8" 
                        }
 
 


                    ],
                    "total_pages": 9382,
                    "total_results": 187625
                    }';
                    
        $dummyArray = json_decode($dummy, true);
 
        return response()->json($dummyArray);

    }


    public function yupp(Request $request) 
    {
   
        $url = $request->query('url');
         
        $headers = [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.6723.70 Safari/537.36',
            "Host" => "mhdtvweb.com",
            "Connection" => "keep-alive",
            "Accept" => "*/*",
            "Sec-Ch-Ua-Platform" => "Windows",
            "Sec-Ch-Ua-Mobile" => "?0",
            "Sec-Fetch-Site" => "same-origin",
            "Sec-Fetch-Mode" => "cors",
            "Sec-Fetch-Dest" => "empty",
            "Referer" => "https://mhdtvweb.com/yupp/play.php?watch=asianet-movies",
            "Accept-Encoding" => "gzip, deflate, br",
            "Accept-Language" => "en-US,en;q=0.9",
            "Priority" =>  "u=4, i",
            // "Cookie" => $request->header('Cookie'), // Pass cookies if needed
        ];
        
        $response = Http::withHeaders($headers)->get($url);

  
        $transferStats = $response->transferStats;  
        if ($transferStats) {
            $urlres = $response->transferStats->getHandlerStats()['url'];
             
        } 
 
        return response()->json(['streamUrl' => $urlres]);
 
    } 


    public function tv2(Request $request) 
    {
 
       // Initialize cURL
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://colorsscreen.com/tv/sunxt.php?id=SURYA_MOVIES",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "gzip, deflate", // Remove "br" support
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Host: colorsscreen.com",
                "Cookie: starstruck_e7f1eb2ffdc74d564b7f750454c1893b=b3fb309ce2840ffac67fcd90fa23670c; _ga=GA1.1.1643001722.1732221017; pp_main_005200e7e09133f45d85c14d4a776603=1; pp_sub_005200e7e09133f45d85c14d4a776603=4; _ga_4M25E9P04Q=GS1.1.1734240581.4.1.1734241312.0.0.0",
                "Sec-Ch-Ua: \"Chromium\";v=\"131\", \"Not_A Brand\";v=\"24\"",
                "Sec-Ch-Ua-Mobile: ?0",
                "Sec-Ch-Ua-Platform: \"Windows\"",
                "Accept-Language: en-US,en;q=0.9",
                "Upgrade-Insecure-Requests: 1",
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.86 Safari/537.36",
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
                "Sec-Fetch-Site: same-origin",
                "Sec-Fetch-Mode: navigate",
                "Sec-Fetch-Dest: iframe",
                "Referer: https://neeplay.com/",
                "Accept-Encoding: gzip, deflate", // Remove Brotli from Accept-Encoding
                "Priority: u=0, i"
            ],
        ]);

         // Execute the request
         $response = curl_exec($curl);

         // Close cURL session
         curl_close($curl);
 
         // Check if there was an error
         if ($response === false) {
             abort(500, "Failed to fetch content from the server.");
         }
 
         // Pass the response to the Blade view
     
         return view('tv.index2', ['htmlContent' => $response]);
    }
    public function tv2Stream(Request $request) {
    
        if ($request->isMethod('head')) {
            return response()->noContent(200, [
                'Content-Type' => 'application/dash+xml'
            ]);
        }

        $streamUrl = $request->query('url'); // Stream URL from the front-end
  
        $parsedUrl = parse_url($streamUrl);
        $baseHost = 'sunnxt.malayalamtvhd.workers.dev';
        $relativePath = str_replace("https://$baseHost/", '', $streamUrl);
         
        if (isset($parsedUrl['path']) && strpos($parsedUrl['host'], $baseHost) !== false) {
            $relativePath = ltrim($parsedUrl['path'], '/'); // Ensure no leading slash
        }
   
        $response = Http::withHeaders([
            'authority' => 'sunnxt.malayalamtvhd.workers.dev',
            'method' => 'GET',
            'path' => "/$relativePath",
            'scheme' => 'https',
            'accept' => '*/*',
            'accept-encoding' => 'gzip, deflate, br, zstd',
            'accept-language' => 'en-US,en;q=0.6',
            'origin' => 'https://colorsscreen.com',
            'priority' => 'u=1, i',
            'sec-fetch-dest' => 'empty',
            'sec-fetch-mode' => 'cors',
            'sec-fetch-site' => 'cross-site',
            'sec-gpc' => '1',
            'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
        ])->get($streamUrl);
        

        $parsed_url = parse_url($streamUrl);
        $path = $parsed_url['path'];
        $segments = explode('/', trim($path, '/'));
        array_pop($segments);
        $base_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . '/' . implode('/', $segments);
            $furl = "http://127.0.0.1:8000/api/tv2stream?url=".$base_url;
   
        $transferStats = $response->transferStats;
        $mpdContent = $response->body();

        $append1 = "initialization=".'"'.$furl.'/';
        $append2 = "media=".'"'.$furl.'/';
        
        $mpdContent1 = str_replace('initialization="', $append1, $mpdContent);
        $mpdContent2 = str_replace('media="', $append2, $mpdContent1);
        
              
        return response($mpdContent2, 200)
        ->header('Content-Type', 'application/xml');
      

        
    }

    public function regionalChannels(Request $request) {

        $dummy = '{
            "page": 1,
            "results": [
                {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258465,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "asianethd",
                            "overview": "asianethd, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/ASIAHD-185x278.webp').'", 
                            "first_air_date": "2024-11-30",
                            "name": "asianethd",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://217.20.112.199/asianet/index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/FLOWERSUSA-185x278.webp",
                            "genre_ids": [
                                18
                            ],
                            "id": 258466,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "flowers usa",
                            "overview": "flowers usa, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/FLOWERSUSA-185x278.webp').'",   
                            "first_air_date": "2024-11-30",
                            "name": "flowers usa",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://yuppmedtaorire.akamaized.net/v1/master/a0d007312bfd99c47f76b77ae26b1ccdaae76cb1/flowers_nim_https/050522/flowers/playlist.m3u8", 
                            "platform": "m3u8"

                        }, 
                        {
                            "adult": false,
                            "backdrop_path": "/amrita-tv-black-185x278.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258467,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "amrita",
                            "overview": "amrita, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                             "poster_path": "'.asset('storage/sunnxt/amrita-tv-black-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "amrita",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://dr1zhpsuem5f4.cloudfront.net/master_2000.m3u8", 
                            "platform": "m3u8"

                        }, 
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258468,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "mazhavil",
                            "overview": "mazhavil, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/MAZHAVILHD-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "mazhavil_manorama",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://yuppmedtaorire.akamaized.net/v1/master/a0d007312bfd99c47f76b77ae26b1ccdaae76cb1/mazhavilmanorama_nim_https/050522/mazhavilmanorama/playlist.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 258469,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "SUNTV_HD",
                            "overview": "SUNTV_HD, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "'.asset('storage/sunnxt/sun-HD-white-185x278.jpg').'", 
                            "first_air_date": "2024-11-30",
                            "name": "SUNTV_HD",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "platform": "sunnxt"

                        }
            ],
            "total_pages": 9382,
            "total_results": 187625
        }';
 
            $dummyArray = json_decode($dummy, true);
 
            return response()->json($dummyArray);
             

    }
    
    public function sportsChannels(Request $request) {

        
        $dummy = '{
            "page": 1,
            "results": [
                     {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 23,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "FoxSports1",
                            "overview": "FoxSports1, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "FoxSports1",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"http://fl2.moveonjoy.com/FOX_Sports_1/index.m3u8",
                            "platform": "m3u8"

                        } ,{
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 24,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "sports18",
                            "overview": "sports18, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "sports18",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://jiotvbpklive.cdn.jio.com/bpk-tv/IDCDemo_IPL23_Sports18_MOB/Fallback/index.m3u8",
                            "platform": "m3u8"

                        },{
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 25,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "JCSports247",
                            "overview": "JCSports247, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "JCSports247",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://prod-ent-live-gm.jiocinema.com/bpk-tv/JV_SportsHD15_DIG_MOB/Fallback/index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 26,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "FoxCricket501",
                            "overview": "FoxCricket501, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "FoxCricket501",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"https://m118753.protect-cdn.net/live/m1-index.m3u8",
                            "platform": "m3u8"

                        },
                        {
                            "adult": false,
                            "backdrop_path": "/n5hwt6FCkqgWFui8Dx7SZwY8XhL.jpg",
                            "genre_ids": [
                                18
                            ],
                            "id": 27,
                            "origin_country": [
                                "CN"
                            ],
                            "original_language": "zh",
                            "original_name": "TNT_1_GB",
                            "overview": "TNT_1_GB, a spirited woman from the Shu brocade, strives to restore her family’s honor and rebuild their legacy. Facing powerful rivals and the looming threat of Nanzhao Kingdom, she joins forces with Yang Jinglan to revive the Shu brocade industry and safeguard its artisans.",
                            "popularity": 2358.865,
                            "poster_path": "", 
                            "first_air_date": "2024-11-30",
                            "name": "TNT_1_GB",
                            "vote_average": 7.5,
                            "vote_count": 2,
                            "streamurl":"",
                            "platform": "sports"

                        }
            ],
            "total_pages": 9382,
            "total_results": 187625
        }';
 
            $dummyArray = json_decode($dummy, true);
 
            return response()->json($dummyArray);
             

    }

   
}
