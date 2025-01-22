import React, { useEffect, useRef } from "react";
// import jwplayer from "jwplayer";

const VideoPlayerJio = ({ channelID }) => {
 
    const playerRef = useRef(null);


    const fetchStreamAndInitializePlayer = () => { 
        const url = `http://127.0.0.1:8000/proxyjio?url=${encodeURIComponent(`https://mhdtvstream.com/live.php?id=${channelID}&extension=.m3u8`)}`;
        
        fetch(url)
          .then((response) => response.json())
          .then((data) => {
            if (data.streams) {
              // Multiple quality streams
              new Clappr.Player({
                source: data.streams,
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
            } else if (data.streamUrl) {
              // Single stream
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
            }
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
                position: "absolute",
                width: "100vw",
                height: "100vh",
                top: 0,
                left: 0,
            }}
        ></div>
    );
};

export default VideoPlayerJio;
