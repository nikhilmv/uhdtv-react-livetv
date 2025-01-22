<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Array_;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class AdminController extends Controller
{ 
  

    public function tv()
    {
        return view('tv.index');
    }
    public function proxy(Request $request) 
    {
  
        $url = 'https://mhdtvweb.com/yupp/tv.php?c=asianet-movies';
        
         
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
            CURLOPT_URL => "https://neeplay.xyz/snxt/livestream/194397/manifest.mpd",
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
                "Referer: https://neeplay.xyz/snxt/player.php?id=194397",
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

    public function proxystream(Request $request) {
    
        
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
            $furl = "http://127.0.0.1:8000/proxy-stream?url=".$base_url;
  

       
        $transferStats = $response->transferStats;
        $mpdContent = $response->body();

        $append1 = "initialization=".'"'.$furl.'/';
        $append2 = "media=".'"'.$furl.'/';
        
        $mpdContent1 = str_replace('initialization="', $append1, $mpdContent);
        $mpdContent2 = str_replace('media="', $append2, $mpdContent1);
        
              
        return response($mpdContent2, 200)
        ->header('Content-Type', 'application/xml');
      

        
    }
    

    public function tv3()
    {
        return view('tv.index3');
    }
    public function proxyjio(Request $request) 
    {
 
        $url = "https://mhdtvstream.com/live.php?id=144&extension=.m3u8";
    
        $headers = [
            'Host' => 'mhdtvstream.com',
            'User-Agent' => 'Mozilla/5.0 ...', // Add your full user agent here
            'Referer' => 'https://mhdtvstream.com/play.php?id=144',
        ];
        
        $response = Http::withHeaders($headers)->get($url); 
        $m3u8Data = $response->body(); 
        
        
        $lines = explode("\n", $m3u8Data);
     
        $streams = [];
     
        $baseUrl = 'https://mhdtvstream.com/';  
        
        foreach ($lines as $index => $line) {
            $line = trim($line);
            
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
    
    
            if (isset($lines[$index - 1]) && strpos($lines[$index - 1], '#EXT-X-STREAM-INF') === 0) {
 
                $metadata = $lines[$index - 1];
    
                preg_match('/BANDWIDTH=(\d+)/', $metadata, $bandwidth);
                preg_match('/RESOLUTION=([\dx]+)/', $metadata, $resolution);
    
                $streams[] = [
                    'bandwidth' => $bandwidth[1] ?? null,
                    'resolution' => $resolution[1] ?? null,
                    'url' => (strpos($line, 'http') === 0) ? $line : $baseUrl . ltrim($line, '/'),
                ];
            }
        }
 
         if (empty($streams)) {

            $replaceddata = str_replace('live.php?', 'http://127.0.0.1:8000/proxyjio2?url=https://mhdtvstream.com//live.php?', $m3u8Data);

           
            return $replaceddata;
         } 

        
         $furl = url('/proxyjio2?url=' . urlencode($streams[2]['url']));

       
        return response()->json(['streamUrl' => $furl]);
      
     
    }
    public function proxyjio2(Request $request) 
    {
      
        $headers = ['Referer' => 'https://mhdtvstream.com/play.php?id=634'];

        
        $response = Http::withHeaders($headers)->get($request->url); 
        
        $m3u8Data = $response->body(); 
      
        $localBaseUrl = url('/proxyjio2?url=');
        $replaceddata = str_replace('live.php?', "{$localBaseUrl}https://mhdtvstream.com/live.php?", $m3u8Data);
        return response($replaceddata, 200, ['Content-Type' => 'application/vnd.apple.mpegurl']);

          
     
 
     
    }


    public function sportstest()
    {
        return view('tv.sportstest');
    }

    
}
