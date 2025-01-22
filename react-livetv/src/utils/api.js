import axios from "axios";

// const BASE_URL = "https://api.themoviedb.org/3";
const TMDB_TOKEN = import.meta.env.VITE_APP_TMDB_TOKEN;

const headers = {
    Authorization: "bearer " + TMDB_TOKEN,
};

export const fetchDataFromApi = async (url, params) => {
    try { 
        let BASE_URL = null;
        if (url == "/discover/tv") {
             
           BASE_URL = 'http://127.0.0.1:8000/api';
            
        } else if(url == "/tv/regional-channels") {
            BASE_URL = 'http://127.0.0.1:8000/api';
        } else if(url == "/tv/sports-channels") {
            BASE_URL = 'http://127.0.0.1:8000/api';
        } else {
           BASE_URL = "https://api.themoviedb.org/3";
        }
       
        const { data } = await axios.get(BASE_URL + url, {
            headers,
            params,
        });
        return data;
    } catch (err) {
        //console.log(err);
        return err;
    }
};