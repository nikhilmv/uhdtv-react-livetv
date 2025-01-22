import React, {useState, useEffect} from 'react';
import "./style.scss";
import { useNavigate } from 'react-router-dom';
import useFetch from '../../../hooks/useFetch';
import { useSelector } from 'react-redux';
import Img from '../../../components/lazyLoadImage/img';
import ContentWrapper from '../../../components/contentWrapper/ContentWrapper';
import cover from "../../../assets/cover.webp";

const HeroBanner = () => {
  const [background, setBackground] = useState("");
  const [query, setQuery] = useState("");
  const navigate = useNavigate();
  const {url} = useSelector((state)=> state.home)

  const {data,loading} = useFetch("/movie/upcoming");

  useEffect(()=>{ 
    
    const bg = url.backdrop + data?.results?.[Math.floor(Math.random() * 20)]?.backdrop_path
    setBackground(bg)
  },[data])

  const searchQueryHandler = (event)=>{
    //if user type search query and press enter, and search query not empty, then api call
    if(event.key === 'Enter' && query.length >0 ){
        navigate(`/search/${query}`)
    }
  }

  const searchItem = () =>{
    navigate(`/search/${query}`)
  }

  return (
      <div className="heroBanner">
        {!loading && <div className="backdrop-img">
          <Img src={cover}/>
        </div>}

        <div className="opacity-layer">
          
        </div>

        <ContentWrapper>
        <div className="wrapper">
          <div className="heroBannerContent">
          <span style={{ 
          color: "#fff", 
          textTransform: "uppercase",
          fontSize: "8rem", // h1 equivalent size
          fontWeight: 1000, // Optional for bold text
          fontFamily: "'Josefin Sans', sans-serif",
          background: "linear-gradient(to right,#095fab 10%, #25abe8 50%, #57d75b 60%)", // Gradient colors
          backgroundSize: "200% auto",
          WebkitBackgroundClip: "text",
          WebkitTextFillColor: "transparent",
          animation: "textclip 1.5s linear infinite",
          display: "inline-block",
          
        }}>UHDTV</span>
            <span className="subTitle">The ultimate destination for live tv. Explore Now..</span>
            {/* <div className="searchInput">
              <input type="text" placeholder='Search for movie or TV show..' onChange={(e)=> setQuery(e.target.value)} onKeyUp={searchQueryHandler}/>
              <button >Search</button>
            </div> */}
          </div>
        </div>
        </ContentWrapper>
        
      </div>
  )
}

export default HeroBanner