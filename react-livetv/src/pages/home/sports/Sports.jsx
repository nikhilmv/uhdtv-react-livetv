import React, {useState} from 'react';
import ContentWrapper from '../../../components/contentWrapper/ContentWrapper'; 
import useFetch from '../../../hooks/useFetch';
import Carousel from '../../../components/carousel/Carousel';

const Sports = () => {

  //create states
  const [endpoint, setEndpoint] = useState("tv");
 
  const {data,loading} = useFetch(`/${endpoint}/sports-channels`)

const onTabChange = (tab) =>{
  setEndpoint(tab === "Day" ? "day" : "week")
}

  return (
    <div className='carouselSection'>
        <ContentWrapper>
            <span className="carouselTitle">Sports</span> 
        </ContentWrapper> 
        <Carousel data={data?.results} loading={loading} endpoint={endpoint}/>
    </div>
  )
}

export default Sports