import React from 'react';
import "./style.scss";
import HeroBanner from "./heroBanner/HeroBanner";
import Sports from './sports/Sports';
import Regional from './regional/Regional';
// import TopRated from './topRated/TopRated';

const Home = () => {
  return (
    <div className='homePage'>
      <HeroBanner/>
      <Regional/>
      <Sports/> 
      {/* <TopRated/> */}
    </div>
  )
}

export default Home