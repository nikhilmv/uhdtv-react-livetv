import React, { useEffect, useRef } from "react";
// import jwplayer from "jwplayer";

const VideoPlayerSports = ({ channelID }) => {
   
    const playerRef = useRef(null);

    useEffect(() => {
        var ConfiguracionCanales = {
            
           
            "ASTRO_FOOTBALL": {
                url: "https://linearjitp-playback.astro.com.my/dash-wv/linear/2506/default_ott.mpd",
                k1: "79f4028730acca9ab8b00f26158ddb10",
                k2: "91febe843c08c7cc523efd827292e40e"
            },
            "ASTRO_SUPERSPORT": {
                url: "https://linearjitp-playback.astro.com.my/dash-wv/linear/5076/default_primary.mpd",
                k1: "89c10c7ef0af145be7d6e88dec090b10",
                k2: "80558606a13a99d2c543872d8899ced0"
            },
            "ASTRO_SPORTS": {
                url: "https://linear05-playback.sooka.my/CH2/masterCH2.mpd",
                k1: "4a267ba09b3a43969364ee77f76dd622",
                k2: "5b00d4341e90b3022b5e57139ae8ab16"
            }, 
            "TELEMUNDO_USA": {
                url: "https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(kvea)/master.mpd",
                k1: "dfb59142ce523a6c900758d5ee4c7997",
                k2: "bd2d684e590815190eda056a6d9618bc"
            },  
            "NFL": {
                url: "https://fsly.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(lc107a1ddy)/master.mpd",
                k1: "002007110c69a23803173b50eab05f23",
                k2: "590d6e8f4ca81319f9bb29104f571990"
            },
            "NBC_SPORTS": {
                url: "https://fsly.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(vc122ycnuy)/master.mpd",
                k1: "0020d88a6713159839743f655c5da7de",
                k2: "ba9f34226301f69a4f0f13f65a1f92ec"
            },
            "PREMIER_LEAGUE_TV": {
                url: "https://fsly.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(vc1021n07j)/master.mpd",
                k1: "002046c9a49b9ab1cdb6616bec5d26c3",
                k2: "d2f92f6b7edc9a1a05d393ba0c20ef9e"
            },
            "WWE": {
                url: "https://akam.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(vc106wh3yw)/master.mpd",
                k1: "00208c93f4358213b52220898b962385",
                k2: "8ae6063167228e350dd132d4a1573102"
            },  
             "SPOTV_2": {
                url: "https://pop5clustera00de07172379a62d6189.hypp.tv:443/PLTV/88888888/224/3221227608/3221227608.mpd?rrsip=web.hypp.tv:443&zoneoffset=0&servicetype=1&icpid=&accounttype=1&limitflux=-1&limitdur=-1&accountinfo=U0v281lovZMLWzqtXjPtYuOXwQCoIQRk449J%2BBUCcawWP5a6lzyDPJ57LXeuC05Cs44sM6v4Pb96oLcepTGODErcymHBIhx5oJP4jv2fPK0%3D%3A20230206101724%3AUTC%2C1003663983%2C115.164.187.20%2C20230206101724%2Curn:Huawei:liveTV:XTV100000161%2C1003663983%2C-1%2C0%2C1%2C%2C%2C2%2C593%2C%2C%2C2%2C1343117%2C0%2C248412%2C47562943%2C%2C%2C2%2C1%2CEND&GuardEncType=2&it=H4sIAAAAAAAAADWOy27CMBRE_8ZLK3YehIVXIKRKVahE6Laa2NcmihODHZD695A2bGfmjM4coeljr1B2dV7Zqsu1LeoS2EhRk611tu2MFYYlujVBSabhfT-5JpgF-z7tfkTGMy6l4EKydrk7eLh12dzHjqLK39iJ4qPXpEyy_IHE4Vwkh7kPE__y-D1Hv04YtauaqDZltc0KKQuZs3lJW6Th1bAL0i6MV0Qyn8H9AcrCJ2JX6AGOGoykprv3_9wxmpfNEzpVq7L0AAAA&tenantId=6001",
                k1: "7de0fa3c35f52f8a8517f1600dd11ed7",
                k2: "2d59cf94d10020aeee01a97cd0716eea"
            }, 
            "SPOTV2_2": {
                url: "https://pop5clustera00de07172379a62d6189.hypp.tv:443/PLTV/88888888/224/3221227726/3221227726.mpd?rrsip=web.hypp.tv:443&zoneoffset=0&servicetype=1&icpid=&accounttype=1&limitflux=-1&limitdur=-1&accountinfo=U0v281lovZMLWzqtXjPtYuOXwQCoIQRk449J%2BBUCcawRjfkMvdAX9TZ5I%2BbsmfrUeOV6Zn1IaYCsVySN%2F6aTU0rcymHBIhx5oJP4jv2fPK0%3D%3A20230206102855%3AUTC%2C1003663983%2C115.164.187.20%2C20230206102855%2Curn:Huawei:liveTV:XTV100000162%2C1003663983%2C-1%2C0%2C1%2C%2C%2C2%2C593%2C%2C%2C2%2C1343117%2C0%2C248412%2C47562943%2C%2C%2C2%2C1%2CEND&GuardEncType=2&it=H4sIAAAAAAAAADWOwY6CMBiE36bHpi0I9tCTGxOTDbuJrFczhZ9KLNRt0cS3X1D2NpmZbzJTREOHD5PZwoqt0IXSXZ7JEnqWCp2WFhtlBUv0WwWjWAPv-9FVoV2w03F3loILrpTkUrF6mdt7uLVZ3QdL0WT_2JHio2_ItKnjDyQO5yI5TH0Y-bfH8yf6tcKoXq_JotwUWuSlyvOSTYtbI13nhF2QdmG4IVL7GdwLMB18InZDc4WjCgOZ8e79m_uK7fzmD_CkDoH0AAAA&tenantId=6001",
                k1: "7c67cb7de9465062c06ac94e8e065462",
                k2: "5931fc07f285ffe40eb98e130bb090f9"
            },
            "SSC1": {
                url: "https://ssc-1-enc.edgenextcdn.net/out/v1/c696e4819b55414388a1a487e8a45ca1/index.mpd",
                k1: "d84c325f36814f39bbe59080272b10c3",
                k2: "550727de4c96ef1ecff874905493580f"
            },
            "SSC2": {
                url: "https://ssc-2-enc.edgenextcdn.net/out/v1/a16db2ec338a445a82d9c541cc9293f9/index.mpd",
                k1: "8bcfc55359e24bd7ad1c5560a96ddd3c",
                k2: "b5dcf721ab522af92a9d3bf0bd55b596"
            },
            "SSC3": {
                url: "https://ssc-3-enc.edgenextcdn.net/out/v1/42e86125555242aaa2a12056832e7814/index.mpd",
                k1: "7de5dd08ad8041d586c2f16ccc9490a1",
                k2: "5e1503f3398b34f5099933fedab847ef"
            },
            "SSC4": {
                url: "https://ssc-4-enc.edgenextcdn.net/out/v1/5267ea5772874b0db24559d643eaad93/index.mpd",
                k1: "5c672f6b85a94638872d0214f7806ed4",
                k2: "bf8756fbb866ee2d5c701c2289dd8de3"
            },
            "SSC5": {
                url: "https://ssc-5-enc.edgenextcdn.net/out/v1/99289eac5a7b4319905da595afbd792b/index.mpd",
                k1: "c88b512b17ab4f6cb09eb0ff4a1056ed",
                k2: "adc08ee1c20a734972a55c9aebbd1888"
            },
            "SSC_EXTRA1": {
                url: "https://ssc-extra-1-enc.edgenextcdn.net/out/v1/647c58693f1d46af92bd7e69f17912cb/index.mpd",
                k1: "ecbc9e6fe6b145efb6658fb5cf7427f8",
                k2: "03c17e28911f71221acbc0b11f900401"
            },
            "SSC_EXTRA2": {
                url: "https://ssc-extra-2-enc.edgenextcdn.net/out/v1/8b70de2b70d447ba8a7450ba90926a2d/index.mpd",
                k1: "4d89249bd4ca4ebc9e70443265f9507d",
                k2: "cf074ffd2646c9c2f8513b47fa57bc30"
            },    
            "BEIN_SPORTS_2": {
                url: "https://pop5clustera00de07172379a62d6189.hypp.tv:443/PLTV/88888888/224/3221227971/3221227971.mpd?rrsip=web.hypp.tv:443&zoneoffset=0&servicetype=1&icpid=&accounttype=1&limitflux=-1&limitdur=-1&accountinfo=U0v281lovZMLWzqtXjPtYuOXwQCoIQRk449J%2BBUCcawgQY43Tg5eLk6%2BKHkOBbkVv%2FaciHRqnNnDuZfWMEk6l0rcymHBIhx5oJP4jv2fPK0%3D%3A20230206101746%3AUTC%2C1003663983%2C115.164.187.20%2C20230206101746%2Curn:Huawei:liveTV:XTV59922231%2C1003663983%2C-1%2C0%2C1%2C%2C%2C2%2C593%2C%2C%2C2%2C1343117%2C0%2C248412%2C47562943%2C%2C%2C2%2C1%2CEND&GuardEncType=2&it=H4sIAAAAAAAAADWPQU-EMBSE_02PDX2LUA49rdnExKDJolcztI9KttC1ZTfx3wuKc3wz38vMkmD56dEMKEB1rQlDX6raNWh6TfqAinRflVZk_mqjIWERwjj7NroNez8fP1QhC0mkpCLRbe9OAX5Ptrep52QO_9iZ0320bFwe5B1ZwvvEHssYZ_ka8P2Wwh4R3O3VVFU_VE1RriItlu3aIV9WR3wiH-N0RWL3HP0vsC4JmcUV9gLPLSY28y2EP-4lubXND5_xMYT0AAAA&tenantId=6001",
                k1: "1c983e5a03b0f8adde686ef20497e2b4",
                k2: "f7b1d6556850b472f4f683519f4e41f7"
            },  
            "BEIN_SPORTS_4_TH": {
                url: "https://pop5clustera00de07172379a62d6189.hypp.tv:443/PLTV/88888888/224/3221227937/3221227937.mpd?rrsip=web.hypp.tv:443&zoneoffset=0&servicetype=1&icpid=&accounttype=1&limitflux=-1&limitdur=-1&accountinfo=U0v281lovZMLWzqtXjPtYuOXwQCoIQRk449J%2BBUCcawRjfkMvdAX9TZ5I%2BbsmfrU7%2B8kYXzOcpo3wc%2BwgB1By0rcymHBIhx5oJP4jv2fPK0%3D%3A20230206102855%3AUTC%2C1003663983%2C115.164.187.20%2C20230206102855%2Curn:Huawei:liveTV:XTV57682031%2C1003663983%2C-1%2C0%2C1%2C%2C%2C2%2C593%2C%2C%2C2%2C1343117%2C0%2C248412%2C47562943%2C%2C%2C2%2C1%2CEND&GuardEncType=2&it=H4sIAAAAAAAAADWOwY6CMBRF_6bLpn10wC660piYTHASGbfmUR6VWKi2QDJ_P6K4vfeemzNGtHTYGRKbPMu0shsAVdu2FlDkYNtMo4RaS5boUQYDzKL33eDK0CzY-bS9SMEFB5BcAquWu71Hty7Lqa8pmuyDnSjOnSXTpJbPmDg6F8nh2IWB_3j8-41-nTCqVjWZF1-5FqoApTQbl7TCdHs27IppG_o7Rmq-g3sBpkWfiN3R3tBRiT2ZYfL-zR1j87T5B0NkEFD0AAAA&tenantId=6001",
                k1: "94663e64ef81e90a9deeb0f1993ce11c",
                k2: "9d6f78876677b543cd4e18c846aa2481"
            },    
            "PREMIER_SPORTS_1_ASTRO": {
                url: "https://linearjitp-playback.astro.com.my/dash-wv/linear/2601/default_primary.mpd",
                k1: "9bfeb5068725617dbad6338473da6d10",
                k2: "06577ffcc4935ba24aff4c4c9dd6846d"
            },
            "RTL_HD": {
                url: "https://pnowlive-a.akamaized.net/live/rtlhd/dash/rtlhd.mpd",
                k1: "57e48b99f3f6d4f13f5c5afdcca084ca",
                k2: "29379a5e2d3405fad2f5d9cbe92586c3"
            },   
            "ZIGGO_SPORT_2": {
                url: "https://da-d436234620010b88000103020000000000000008.id.cdn.upcbroadband.com/wp/wp2-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000095_019371/go-dash-fhd-avc/NL_000095_019371.mpd?p=web",
                k1: "16bf72dc22743d929c4318e193408373",
                k2: "eae51a1e3904124963074cbf432c7c8e"
            }, 
            "ZIGGO_SPORT": {
                url: "https://da-d436236420010b88000103030000000000000006.id.cdn.upcbroadband.com/wp/wp7-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000014_019661/go-dash-fhd-avc/NL_000014_019661.mpd?p=web",
                k1: "0be3d503dba13fc9a9c8ad4b89f599e6",
                k2: "578c2231c526c5e9eb415411e36871bf"
            },
            "ZIGGO_SPORT_3": {
                url: "https://da-d436234920010b8800010302000000000000000b.id.cdn.upcbroadband.com/wp/wp3-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000096_019382/go-dash-fhd-avc/NL_000096_019382.mpd?p=web",
                k1: "16bf72dc22743d929c4318e193408373",
                k2: "eae51a1e3904124963074cbf432c7c8e"
            },
            "ZIGGO_4_TENNIS": {
                url: "https://da-d436236420010b88000103030000000000000006.id.cdn.upcbroadband.com/wp/wp4-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000097_019370/go-dash-fhd-avc/NL_000097_019370.mpd?p=web",
                k1: "16bf72dc22743d929c4318e193408373",
                k2: "eae51a1e3904124963074cbf432c7c8e"
            },
            "ZIGGO_SPORT_5": {
                url: "https://da-d436234420010b88000103020000000000000006.id.cdn.upcbroadband.com/wp/wp5-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000098_019255/go-dash-fhd-avc/NL_000098_019255.mpd?p=web",
                k1: "16bf72dc22743d929c4318e193408373",
                k2: "eae51a1e3904124963074cbf432c7c8e"
            },
            "ZIGGO_SPORT_6": {
                url: "https://da-d436234a20010b8800010302000000000000000c.id.cdn.upcbroadband.com/wp/wp6-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000099_019256/go-dash-fhd-avc/NL_000099_019256.mpd?p=web",
                k1: "16bf72dc22743d929c4318e193408373",
                k2: "eae51a1e3904124963074cbf432c7c8e"
            },
            "PREMIER_SPORTS_1": {
                url: "https://linear001-ie-dash1-prd-cf.cdn.skycdp.com/Content/DASH_003_720_120/Live/channel(premiersports1)/manifest_720.mpd",
                k1: "0005b3dba78ae0fe7a9288022d3b3736",
                k2: "d2827df80dd7e9243ba6b5bbda5dfa82"
            },  
            "DAZN_LALIGA": {
                url: "https://live.ll.ww.aiv-cdn.net/OTTB/dub-nitro/live/clients/dash/enc/wjgklbtvhh/out/v1/659736a1e24c40e4865a80ffd75e7de7/cenc.mpd",
                k1: "43d1c3b25207ff38b22ccfe17d302367",
                k2: "7b1f85f6e81059473b114c16a25c829a"
            },
            "LALIGA_GB": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/dub-nitro/live/clients/dash/enc/fpndxmzw6o/out/v1/70a50b1bda944628b8e7e66ab4069419/cenc.mpd",
                k1: "fc12a94c41e0885dbea8a8d94f0a277d",
                k2: "fc045df077e7669666b1b230e9aa3901"
            },   
            "TV_LA_1_ES": {
                url: "https://cache3.zapitv.com/live/eds_c2/la1_4k/dash_live_enc/la1_4k.mpd",
                k1: "a3abc44525eef3b0a7af9138a9dbe34a",
                k2: "7740f8ae4223ce5ba293028f7f78f1c1"
            },       
            "BEIN_XTRA_N_ES": {
                url: "https://d35j504z0x2vu2.cloudfront.net/v1/master/0bc8e8376bd8417a1b6761138aa41c26c7309312/bein-sports-xtra-en-espanol/playlist.m3u8"
            },
            "TNT_1_GB": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/wf8usag51e/out/v1/bd3b0c314fff4bb1ab4693358f3cd2d3/cenc.mpd",
                k1: "ae26845bd33038a9c0774a0981007294",
                k2: "63ac662dde310cfb4cc6f9b43b34196d"
            }, 
            "TNT_2_GB": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/f0qvkrra8j/out/v1/f8fa17f087564f51aa4d5c700be43ec4/cenc.mpd",
                k1: "6d1708b185c6c4d7b37600520c7cc93c",
                k2: "1aace05f58d8edef9697fd52cb09f441"
            },   
            "TNT_4_GB": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/i2pcjr4pe5/out/v1/912e9db56d75403b8a9ac0a719110f36/cenc.mpd",
                k1: "e31a5a81caff5d07ea2411a571fc2e59",
                k2: "96c5ef69479732ae734f962748c19729"
            },     
            "CANALE_5_IT": {
                url: "https://live03p-seg.msf.cdn.mediaset.net/live/ch-c5/c5-dash-widevine.isml/manifest.mpd",
                k1: "00f9f3c0783536b8ce4a30a01a52e082",
                k2: "e926f7d45af4f7d154c990eae6a2d937"
            },   
            "ITALIA_1": {
                url: "https://live03p-seg.msf.cdn.mediaset.net/live/ch-i1/i1-dash-widevine.isml/manifest.mpd",
                k1: "00f9f3c0783536b8ee91704e23b78016",
                k2: "bfd04d6f544c9cc4d35cb13ab6778587"
            }, 
            "SPORT_PLUS_DE": {
                url: "https://ac-009.live.p7s1video.net/c5c609cf/t_009/sport1plus-de-hd/cenc-default.mpd",
                k1: "c1c11c3844b0dffdb9d9831900f1a1da",
                k2: "a2c31e15346f339ca2b47bdd8591553f"
            },
            "HRT_2": {
                url: "https://cdn1oiv.akamaized.net/hrtliveorigin/hrt2.smil/1/manifest.mpd",
                k1: "994c79af863838109e7f3503bcd2aff9",
                k2: "d2c19650ad2a2ac77a95453b941a6f0e"
            },
            "INFINITY_PLUS_1": {
                url: "https://live03p-seg.msf.cdn.mediaset.net/live/ch-u1/u1-dash-widevine.isml/manifest.mpd",
                k1: "00f9f3c0783536b832a8f0326fbdc02e",
                k2: "ade0533ba667bb7e9847d8f215f03076"
            },
            "INFINITY_PLUS": {
                url: "https://live03p-seg.msf.cdn.mediaset.net/live/ch-u2/u2-dash-widevine.isml/manifest.mpd",
                k1: "00f9f3c0783536b834b0f0c2bfee80ac",
                k2: "76b3afbf163f9c3feb6204b8fcf0ff53"
            },   
            "TEN_CRICKET": {
                url: "https://edge3-moblive.yuppcdn.net/drm/smil:tencricketdrm.smil/manifest.mpd",
                k1: "9872e439f21f4a299cab249c6554daa3",
                k2: "0cdfcfe0d0f1fbe100554ce3ef4c4665"
            },      
            "PTV_SPORTS": {
                url: "https://live6.shoq.com.pk/live/eds/PTV_Sports/DASH/PTV_Sports.mpd",
                k1: "9ecad6c4413f8bdc54712ce6c072a2cf",
                k2: "442df559c369bdada8ba3abe97811575"
            },
     
            "DAZN_1_ES": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/dub-nitro/live/clients/dash/enc/bmnelo5c7a/out/v1/3ce2cdc4589f46189322bd3717c77957/cenc.mpd",
                k1: "44dd9cd370b08a868ead115fe84ecfde",
                k2: "bff19ab0a51cf14e848389b152913fd0"
            },
            "DAZN_2_ES": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/dub-nitro/live/clients/dash/enc/xnk4m9bnxt/out/v1/4ced7b7329a54652b9bb0521ed38bd4d/cenc.mpd",
                k1: "0eab5a3f3e3b4ba5d42d40ca30d17571",
                k2: "f3f061ded9b70e8160590d5802ecda6d"
            }, 
            "DAZN_F1": {
                url: "https://live.ll.ww.aiv-cdn.net/OTTB/dub-nitro/live/clients/dash/enc/cqbcvgkb83/out/v1/4dbe05ecfb1540448d82d68eeebfbb1c/cenc.mpd",
                k1: "1061be12d303247426ec25e8369b2647",
                k2: "bd622b0e610295de3b0bccb850ccaaaa"
            }, 
            "EUROSPORT_1_ES": {
                url: "https://ott.zapitv.com/live/eds_c2/eurosport_1_hd/dash_live_enc/eurosport_1_hd.mpd",
                k1: "237be8ca9383755e9f5784dd23f545eb",
                k2: "15a723773c3b3cbce295c0aed0bc71c3"
            },
            "EUROSPORT_2_ES": {
                url: "https://ott.zapitv.com/live/eds_c2/eurosport_2_hd/dash_live_enc/eurosport_2_hd.mpd",
                k1: "15382879a9bcfa6f1a04a86d5b4324e9",
                k2: "664241133368ab039dc1fb15206ba54b"
            },  
            "LALIGA_HYPE": {
                url: "https://live.ll.ww.aiv-cdn.net/OTTB/dub-nitro/live/clients/dash/enc/woujvkfnmn/out/v1/141b52f08a1e4e97850219729ee48dc8/cenc.mpd",
                k1: "0b1fdeaee3ffc51e9a66cf1938d57aaf",
                k2: "28e3cb88ab7b476b81ab8aa0624c4d71"
            },   
             "CANALE_5_ITALY": {
                url: "https://live03p-seg.msf.cdn.mediaset.net/live/ch-c5/c5-dash-widevine.isml/manifest.mpd",
                k1: "00f9f3c0783536b8ce4a30a01a52e082",
                k2: "e926f7d45af4f7d154c990eae6a2d937"
            },   
            "NBC_USA": {
                url: "https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(knbc)/master.mpd",
                k1: "0045a118e231f1326bcdb45350b1ceaa",
                k2: "8c13afbfa54ea37a368b8b859021f6e3"
            },  
            "TV_LA_1_ES": {
                url: "https://ott.zapitv.com/live/eds_c2/la1_4k/dash_live_enc/la1_4k.mpd",
                k1: "a3abc44525eef3b0a7af9138a9dbe34a",
                k2: "7740f8ae4223ce5ba293028f7f78f1c1"
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
                file:  config.url ,
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

export default VideoPlayerSports;
