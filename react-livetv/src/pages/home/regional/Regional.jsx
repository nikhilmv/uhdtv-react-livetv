import React, {useState} from 'react';
import ContentWrapper from '../../../components/contentWrapper/ContentWrapper'; 
import useFetch from '../../../hooks/useFetch';
import Carousel from '../../../components/carousel/Carousel';

const Regional = () => {
 
  //create states
  const [endpoint, setEndpoint] = useState("tv");

  const {data,loading} = useFetch(`/${endpoint}/regional-channels`)
 
const onTabChange = (tab) =>{

  setEndpoint(tab === "Movies" ? "movie" : "tv")
}

  return (
    <div className='carouselSection'>
        <ContentWrapper>
            <span className="carouselTitle">Regional</span> 
        </ContentWrapper>
        <Carousel data={data?.results} loading={loading} endpoint={endpoint}/>
    </div>
  )
}

export default Regional