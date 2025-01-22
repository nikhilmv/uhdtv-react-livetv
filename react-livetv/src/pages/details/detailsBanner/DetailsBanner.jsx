import React, { useState } from "react";
import { useParams } from "react-router-dom";
import { useSelector } from "react-redux";
import dayjs from "dayjs";

import "./style.scss";

import ContentWrapper from "../../../components/contentWrapper/ContentWrapper";
import useFetch from "../../../hooks/useFetch";
import Genres from "../../../components/genres/Genres";
import CircleRating from "../../../components/circleRating/CircleRating";
import Img from "../../../components/lazyLoadImage/img";
import PosterFallback from "../../../assets/no-poster.png";
import { PlayIcon } from "../Playbtn";
import VideoPopup from "../../../components/videoPopup/VideoPopup";
import VideoPlayer from "../player/VideoPlayer";
import VideoPlayerJio from "../player/VideoPlayerJio";
import VideoPlayerYupp from "../player/VideoPlayerYupp";
import VideoPlayerDefault from "../player/VideoPlayerDefault";
import VideoPlayerm3u8 from "../player/VideoPlayerm3u8";
import VideoPlayerSports from "../player/VideoPlayerSports";



const DetailsBanner = ({ streamUrl, crew , platform,  name, info}) => {
//  console.log(streamUrl);
 
    //states create fro video popup
    const [show, setShow] = useState(false);
    const [videoId, setVideoId] = useState(null);
    const [streamurl, setVideoUrl] = useState(null);

     const {mediaType, id} = useParams();
     const {data, loading} = useFetch(`/${mediaType}/${id}`); 
 
     
     const posterUrl = info.poster_path
     ? info.poster_path
     : null;
     const nameimg = info.name
     ? info.name
     : null; 
    
    
    const handlePlay = (name,streamUrl=null) => { 
     
        setVideoId(name);  
        setShow(true);  
        setVideoUrl(streamUrl);  

    };

    return (
   

        <div className="detailsBanner">

            
            {!loading ? (
                <>
                {!!data && (
                    <React.Fragment>
                       
                    <div className="backdrop-img">
                    <Img className="posterImg" src={posterUrl} name={nameimg.replace(/_/g, " ")} />

                    </div>
                    <div className="opacity-layer"></div>
                    <ContentWrapper>

                        <div className="content"> 

                            <div className="movieCard"  >  
                                <div className="posterBlock"> 
                                    <Img className="posterImg" src={posterUrl} name={nameimg.replace(/_/g, " ")} /> 
                                </div>
                            </div> 
                            <div className="right">
                                <div className="title">
                                    {nameimg.replace(/_/g, " ")}
                                </div>
                                <div className="subtitle">
                                    {data.tagline}
                                </div>
                     
                                <div className="row">
                                    <CircleRating rating={data.vote_average.toFixed(1)}/>
                             
                                    <div className="playbtn" 
                                        onClick={() => {
                                            setShow(true);
                                            if (platform === 'jio') {
                                            handlePlay(id);
                                            } else if(platform === 'm3u8'){
                                            handlePlay(name,streamUrl);
                                            } else {
                                            handlePlay(name);
                                            }
                                        }} >
                                        <PlayIcon />
                                    </div>

                                </div>
                                <div className="row"> 
                                        
                                    {
                                        show && (
                                            platform === 'sunnxt' ? (
                                            <VideoPlayer show={show} setShow={setShow} channelID={videoId} />
                                            ) : platform === 'jio' ? (
                                            <VideoPlayerJio show={show} setShow={setShow} channelID={videoId} />
                                            ) : platform === 'yupp' ? (
                                            <VideoPlayerYupp show={show} setShow={setShow} channelID={videoId} />
                                            ) : platform === 'm3u8' ? (
                                            <VideoPlayerm3u8 show={show} setShow={setShow} channelID={videoId} streamUrl={streamurl}/>
                                            ) : platform === 'sports' ? (
                                            <VideoPlayerSports show={show} setShow={setShow} channelID={videoId} />
                                            ) : (
                                            <VideoPlayerDefault show={show} setShow={setShow} channelID={videoId} />
                                            )

                                            
                                        )
                                    }

                                </div>
                             
  

                            </div>         
                        </div>
                        {/* <VideoPopup show={show} setShow={setShow} videoId={videoId} setVideoId={setVideoId}/> */}

                      

                



                    </ContentWrapper>
                    </React.Fragment>
                )}
                </>
            ) : (
                <div className="detailsBannerSkeleton">
                    <ContentWrapper>
                        <div className="left skeleton"></div>
                        <div className="right">
                            <div className="row skeleton"></div>
                            <div className="row skeleton"></div>
                            <div className="row skeleton"></div>
                            <div className="row skeleton"></div>
                            <div className="row skeleton"></div>
                            <div className="row skeleton"></div>
                            <div className="row skeleton"></div>
                        </div>
                    </ContentWrapper>
                </div>
            )}
        </div>
    );
};

export default DetailsBanner;