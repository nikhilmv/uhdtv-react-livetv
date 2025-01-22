import React from "react";
import { LazyLoadImage } from "react-lazy-load-image-component";
import "react-lazy-load-image-component/src/effects/blur.css";

const Img = ({ src, className, name}) => { 
 
    if (!src) {
        return (
            <div  >
               <span className="lazy-load-image-background blur lazy-load-image-loaded"    style={{
                            display: "flex",
                            alignItems: "center",
                            justifyContent: "center",
                            width: "100%", // Adjust width as needed
                            height: "100%", // Adjust height as needed
                            backgroundColor: "#7c7c7c36",
                            color: "#fff", // White text color
                            fontSize: "1rem", // h1 equivalent size
                            fontWeight: "bold", // Optional for bold text
                            textAlign: "center",
                        }}>
                     {name || "No Image Available"}
                </span>
            </div>
 

        );
    }
    
    
    return (
        <LazyLoadImage
            className={className || ""}
            alt=""
            effect="blur"
            src={src}
        />
    );
};

export default Img;