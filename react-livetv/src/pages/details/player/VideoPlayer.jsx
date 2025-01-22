import React, { useEffect, useRef } from "react";
// import jwplayer from "jwplayer";

const VideoPlayer = ({ channelID }) => {
   
    const playerRef = useRef(null);

    useEffect(() => {
        const ConfiguracionCanales = { 


        "KTV_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/61477b4c8d8d45d5a49e044cc1dffc60/KTVHDB_IN_index.mpd",
            k1: "351e547391bb45cbac66d2cb9ec0c294",
            k2: "3bd646753f4903eee3b404646c7819d3"
        },
        "SUNTV_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream2/19ee29194c4d4fc286c3e697362e60cd/SunTVHDB_IN_index.mpd",
            k1: "3891557f1cb14dedb7545bf52499d748",
            k2: "fb662f742e5f5e0c61a7c1c66d2b019a"
        },
        "SUN_HD_DOLBY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream2/803a6a4872a449a193b5846b5d101359/SunTVHD_IN_index.mpd",
            k1: "3891557f1cb14dedb7545bf52499d748",
            k2: "fb662f742e5f5e0c61a7c1c66d2b019a"
        },
        "SUNTV_HD_AU": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream2/9287b977a5694d3c98c12b79622da462/SunTVHDB_AU_index.mpd",
            k1: "3891557f1cb14dedb7545bf52499d748",
            k2: "fb662f742e5f5e0c61a7c1c66d2b019a"
        },
"SUN_NEWS": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream3/491c99fb6d0c49e88e6349170d890a2f/SunNewsB_IN_index.mpd",
            k1: "4df8f920386e4346ba6b7d7ae935d668",
            k2: "c5fcaa8df5663365d938a50987f71b84"
        },
"SUN_MUSIC_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/d434796d90fa4dc9b7ecfacedbe683f1/SunMusicHDB_IN_index.mpd",
            k1: "b5a2c6d13b9748de9ceebc0a8adc8af3",
            k2: "e806fec1bf1c8a844216118c94bad020"
        },
"SUN_LIFE": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/6b79451f54284b3fb680fd717ee008dc/SunLifeB_IN_index.mpd",
            k1: "81546df3f41c4a6dbc9a4efc7f2fb626",
            k2: "3928505f4054cf1fa935276fdbe40992"
        },
"ADITHYA_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/4d0eb3cde30247ada4ade679fdfbaf86/AdithyaTVB_IN_index.mpd",
            k1: "d674a1a7f43641a29bd8867d87c7259a",
            k2: "812f55dcde68619fc6ad95951b241d2c"
        },
"CHUTTI_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/e3eccb3f250a4ca8826e42914b2322a6/ChuttiTV_IN_index.mpd",
            k1: "05da38a46fb7403088f41434e44de980",
            k2: "488046139a1e1d65323cfe4bb1b30b7b"
        },
"SUN_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream1/05b5df1221764bca9867054c5e65ee62/SunTVB_IN_index.mpd",
            k1: "6752015acf084572a08dfe21796f8b45",
            k2: "ff823ddbe5625c35d3e93f0ed4520115"
        },
"KTV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/6ae70edd4c1440379f5311e8fbddc7c1/KTVB_IN_index.mpd",
            k1: "426117d115b04497b0b0d425e8095184",
            k2: "aa751ae8a41ac6f87141734163ffe3b2"
        },
"SUN_MUSIC": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/585bb66e95c84ccea3f828c96b3567b5/SunMusicB_IN_index.mpd",
            k1: "21ddc14c4da94c079d4f4c343ecdcd80",
            k2: "5701bee4ee9b625d0c8ed7de032a7478"
        },
"GEMINI_TV_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream14/e778d9c98488494b9c9b38f9c48b63ec/GeminiTVHDB_IN_index.mpd",
            k1: "880dc94460af4197bbbf43a176fb3a95",
            k2: "0beb7012ffd133360889d5d56e20de4d"
        },
        "GEMINI_TV_HD_DOLBY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream14/6a5c3dbb8b6044f8be835e13a815f40b/GeminiTVHD_IN_index.mpd",
            k1: "880dc94460af4197bbbf43a176fb3a95",
            k2: "0beb7012ffd133360889d5d56e20de4d"
        },
"GEMINI_MUSIC_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/6a6520e446604c6e9840e5bf3a3a7d95/GeminiMusicHDB_IN_index.mpd",
            k1: "76230567f3c04513a7e5d1249ab65983",
            k2: "4ee6dc9a99d894dc41b0878d6ea22790"
        },
"GEMINI_COMEDY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/167c40e9521b470b87b4cf921fd0e146/GeminiComedyB_IN_index.mpd",
            k1: "93e686ceac134f30b0a7bc3ce5a76b26",
            k2: "2c37e97fa0646751e1f2b85bc4b9ff8a"
        },
"GEMINI_LIFE": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/a4b4f71a8b4344f3a280e906657a517a/GeminiLifeB_IN_index.mpd",
            k1: "96d5157791ea4817a66a419e285a137f",
            k2: "d6d0ad2a9a6cc56e18d7557c7c693a37"
        },
"KUSHI_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/b24f908d8104462db019c91dac6512a3/KushiTV_IN_index.mpd",
            k1: "e16421cf7c374c57a8f7e91049f58cd9",
            k2: "b7e01aba2c307b1f05057e91a9d150d2"
        },
"GEMINI_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream4/a1a61fa1811c4d20a5c2d5e14cdc0cd2/GeminiTVB_IN_index.mpd",
            k1: "2ec6fa5b77ff4223a376c2b98032fbf8",
            k2: "afe96f602fd6abedcd9c2c8cdf799afd"
        },
"GEMINI_MOVIES": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/6a59979ff0044fd3b6e0cb85d6f44432/GeminiMoviesB_IN_index.mpd",
            k1: "0c37231880034787bce9fd3607aa09ea",
            k2: "e063bb30351dac572bac24ed43d304b2"
        },
        "GEMINI_MOVIES_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/ec0d4961a002442295f91efc9d675c9d/GeminiMoviesHDB_IN_index.mpd",
            k1: "0c37231880034787bce9fd3607aa09ea",
            k2: "e063bb30351dac572bac24ed43d304b2"
        },
"GEMINI_MUSIC": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/52b94f70c6e64692b2497f5023b629cd/GeminiMusicB_IN_index.mpd",
            k1: "0faa2e9469fc45fdaf1728333351ec71",
            k2: "ffcf9dee6ede62bd8740dacfaa0c1e59"
        },
"SURYA_TV_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream15/d719fad367614ee5baad747822767ad8/SuryaTVHDB_IN_index.mpd",
            k1: "eae838ccd75d4a1fbff6fd7dd1c97780",
            k2: "8259ce0c112725a4d2c94d154207425f"
        },
        "SURYA_TV_HD_DOLBY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream15/d719fad367614ee5baad747822767ad8/SuryaTVHDB_IN_index.mpd",
            k1: "eae838ccd75d4a1fbff6fd7dd1c97780",
            k2: "8259ce0c112725a4d2c94d154207425f"
        },
"SURYA_MOVIES": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/e24ee14c395945bd8ccb065e1bce8b9b/SuryaMoviesB_IN_index.mpd",
            k1: "6b67bccef7024f2da29b42e10dc13f89",
            k2: "2e8460c47d3f01693e193dba5963a5e1"
        },
"SURYA_MUSIC": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/8c2352ff54954e7b9a4188045dcf3b27/SuryaMusicB_IN_index.mpd",
            k1: "25a1d2a4c3f848b1aed911ad691fe232",
            k2: "3c8b2cf8611c343e6a231b6a9c7c8b58"
        },
"SURYA_COMEDY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/6505e922bf164423ad122f404747356a/SuryaComedyB_IN_index.mpd",
            k1: "11563b00a46b43f2a0f80ecf42a4fb77",
            k2: "9bad28ad6f23dbb917c63ee680f66a1f"
        },
"KOCHU_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/1893b9ab790747cb80a584873a608dcb/KochuTVB_IN_index.mpd",
            k1: "7354fb333b0c4159bc6c433c4db13d0f",
            k2: "fbf8b4a11febf7d2eed2283006979176"
        },
"SURYA_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream6/30612a1b269d4a18aa14657641c47515/SuryaTVB_IN_index.mpd",
            k1: "56e1f5b5b72e4e45a98b6f287c265ab9",
            k2: "6dee8663e63cc8f8dda8478b8b2f3b71"
        },
"UDAYA_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream16/a8d28f18944c4946ad7133938860e7cf/UdayaTVHDB_IN_index.mpd",
            k1: "91b5f2d0205c4527b7aa3e41f35e1e7f",
            k2: "66ddb1a017753f966e20442ab2f91f18"
        },
        "UDAYA_HD_DOLBY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream16/3a36700e8a904726b253cf6873bfaf40/UdayaTVHD_IN_index.mpd",
            k1: "91b5f2d0205c4527b7aa3e41f35e1e7f",
            k2: "66ddb1a017753f966e20442ab2f91f18"
        },
"UDAYA_MOVIES": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/1c02547243c041eea5dab1c343018e90/UdayaMoviesB_IN_index.mpd",
            k1: "b4dbffb517824732a955ca02dd6aacd9",
            k2: "83c2aa2946432f1ded7c049efe79feef"
        },
"UDAYA_MUSIC": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/8034b7519d6a4ab8929aa4279fda1f29/UdayaMusicB_IN_index.mpd",
            k1: "9ac3472b0040459cab52035ead6fe1ae",
            k2: "ba9fe9dd1b8e5421e2f8c9d23bd86922"
        },
"UDAYA_COMEDY": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/8a3d3d8d679b4f9f83a8305b4ead0644/UdayaComedyB_IN_index.mpd",
            k1: "71329783aeb74e6e9e1014fb9e4c30f4",
            k2: "1e025a9ed7e50fa35b8de2c96cccdd6b"
        },
"CHINTU_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream/ed4c67ad957644b69361651d9101107e/ChintuTVB_IN_index.mpd",
            k1: "19d8a5cc002f411b89b33925acdc33e0",
            k2: "2a9aa7a3f69834c4f348430cc3f658bb"
        },
"UDAYA_TV": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream5/e2f36b5d0be74780a041a8f5b65bc7e6/UdayaTVB_IN_index.mpd",
            k1: "3084683c80234b6bbf69abfd5bb258a0",
            k2: "4ae6b547e5c8f51329a12d7953ee4c72"
        },
"SUN_BANGLA": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream7/bf76ee92dd01473bb2eb57d137294484/SunBanglaB_IN_index.mpd",
            k1: "01f7b9f7bf7e425f86d6dfd478390e3f",
            k2: "5fde68100a7856d055038236ffc7c84a"
        },
"SUN_MARATHI": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream9/b0aacde03b744564870634ecb10e8a31/SunMarathiB_IN_index.mpd",
            k1: "5ea90a1f3b1e4a0a9b72c8e0f4a9bf31",
            k2: "30899fda5ca4dfb5a4535ce10c4d7341"
        },
        "SUN_MARATHI_AU": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream9/2699d3c42a1944d9bb8e919433a349c2/SunMarathiB_AU_index.mpd",
            k1: "5ea90a1f3b1e4a0a9b72c8e0f4a9bf31",
            k2: "30899fda5ca4dfb5a4535ce10c4d7341"
        },
"SUN_NEO_HD": {
            url: "https://sunnxt.malayalamtvhd.workers.dev/livestream8/248c92b73514435686fd72ba325d4008/SunNeoHDB_IN_index.mpd",
            k1: "09ffaaff477d490abb4516b7e0711d35",
            k2: "759cc157a993e8a76ff4d675e34b5400"
        },
    };

        const config = ConfiguracionCanales[channelID];
 
        if (!config) {
            console.error("Invalid or missing channel ID");
            return;
        }

        const sources = [];

        if (config.url.includes(".m3u8")) {
            sources.push({
                file: config.url,
            });
        }

        if (config.url.includes(".mpd") && config.k1 && config.k2) {
            sources.push({
                file: `http://127.0.0.1:8000/api/tv2stream?url=${encodeURIComponent(config.url)}`,
                drm: {
                    clearkey: {
                        keyId: config.k1,
                        key: config.k2,
                    },
                },
            });
        }

        // Set up JW Player
        if (playerRef.current) {
            jwplayer(playerRef.current).setup({
                playlist: [{
                    sources: sources,
                }],
                width: "100%",
                height: "100%",
                aspectratio: "16:9",
                autostart: true,
                primary: "html5",
                stretching: "exactfit",
                streaming: {
                    abr: {
                        enabled: true,
                    },
                },
            });

            // Optional: Error handling
            jwplayer().on("error", (error) => {
                console.error("Player Error:", error);
            });

            jwplayer().on("setupError", (event) => {
                console.log("Setup Error:", event);
            });
        }
    }, [channelID]);

    return (
        <div
            id="player"
            ref={playerRef}
            style={{
                position: "relative",
                width: "50vw",
                height: "50vh",
                top: 0,
                left: 0,
            }}
        ></div>
    );
};

export default VideoPlayer;
