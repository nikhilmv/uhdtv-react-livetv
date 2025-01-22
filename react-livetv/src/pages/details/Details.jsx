import React from 'react';
import "./style.scss";
import useFetch from './../../hooks/useFetch';
import { useParams } from 'react-router-dom';
import DetailsBanner from './detailsBanner/DetailsBanner';
import Cast from './cast/Cast';
import VideosSection from './videosSection/VideosSection';
import Similar from './carousels/Similar';
import Recommendation from './carousels/Recommendations';
import { useLocation } from "react-router-dom";

const Details = () => {
  const location = useLocation();
  const { data } = location.state || {}; 
 
  
  var streamUrl = null;
  if (data.streamurl != null) {
    var streamUrl = data.streamurl;
  }
   const {mediaType, id, platform, name} = useParams();
  //  const {data, loading} = useFetch(`/${mediaType}/${id}/videos`);
   const {data: credits, loading: creditsLoading} = useFetch(`/${mediaType}/${id}/credits`);

  return (
    <div>
      <DetailsBanner streamUrl={streamUrl} crew={credits?.crew} platform={platform} name={name} info={data}/>
      {/* <Cast data={credits?.cast} loading={creditsLoading}/> */}
      {/* <VideosSection data={data} loading={loading}/> */}
      {/* <Similar mediaType={mediaType} id={id}/> */}
      {/* <Recommendation mediaType={mediaType} id={id}/> */}
    </div>
  )
}

export default Details