import React, { useEffect, useRef } from "react";
// import jwplayer from "jwplayer";

const VideoPlayerYupp = ({ channelID }) => {
 
    const playerRef = useRef(null);


    const fetchStreamAndInitializePlayer = () => {
        const url = `http://127.0.0.1:8000/api/proxy?url=${encodeURIComponent(`https://mhdtvweb.com/yupp/tv.php?c=${channelID}`)}`;
        
        fetch(url)
          .then((response) => response.json())
          .then((data) => {
    
              new Clappr.Player({
                source: data.streamUrl,
                plugins: [HlsjsPlayback, LevelSelector],
                parentId: "#player",
                width: "100%",
                height: "100%",
                autoPlay: true,
                mimeType: "application/vnd.apple.mpegurl",
                playback: {
                  hlsjsConfig: {
                    // Add any hls.js-specific options here
                  },
                },
              });
            
          })
          .catch((error) => console.error("Error fetching stream URL:", error));
      };

      
    useEffect(() => {  
       fetchStreamAndInitializePlayer(); 
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

export default VideoPlayerYupp;
