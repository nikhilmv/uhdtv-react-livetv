import React, { useEffect, useRef } from "react";
// import jwplayer from "jwplayer";

const VideoPlayerYupp = ({ channelID }) => {
 
    const playerRef = useRef(null);


    const fetchStreamAndInitializePlayer = () => {
      const url = `https://cdn1.pishow.tv/live/${channelID}/master.m3u8`; 
        
      const player = new Clappr.Player({
        source: url,
        parentId: '#player', // Bind player to the container
        width: '100%',       // Player width (adjust as needed)
        height: '100%',      // Player height (adjust as needed)
        autoPlay: true,      // Automatically start playing
        mimeType: 'application/x-mpegURL', // MIME type for HLS streams
      });


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
