import React from "react";
import dayjs from "dayjs";
import { useNavigate } from "react-router-dom";
import { useSelector } from "react-redux";

import "./style.scss";
import Img from "../lazyLoadImage/img";
import CircleRating from "../circleRating/CircleRating";
import Genres from "../genres/Genres";
import PosterFallback from "../../assets/no-poster.png";

const MovieCard = ({ data, fromSearch, mediaType }) => {
    const { url } = useSelector((state) => state.home);
    const navigate = useNavigate();
    const posterUrl = data.poster_path
        ? data.poster_path
        : null;

        const handleClick = () => {
            navigate(`/${data.media_type || mediaType}/${data.id}/${data.platform}/${data.name}`, {
                state: { data }, // Pass the data object here
            });
        };

    return ( 

        <div className="movieCard" onClick={handleClick}>  
            <div className="posterBlock">
                <Img className="posterImg" src={posterUrl} name={data.name} />
                {!fromSearch && (
                    <React.Fragment>
                        <CircleRating rating={data.vote_average.toFixed(1)} />
                        {/* <Genres data={data.genre_ids.slice(0, 2)} /> */}
                    </React.Fragment>
                )}
            </div>
            <div className="textBlock">
                <span className="title">{data.title || data.name.replace(/_/g, " ")}</span>
                {/* <span className="date">
                    {dayjs(data.release_date).format("MMM D, YYYY")}
                </span> */}
            </div>
        </div>
    );
};

export default MovieCard;