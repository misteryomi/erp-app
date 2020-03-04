import React, { Component, useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { Tab, Row, Col, Nav, Card} from 'react-bootstrap';

// import 'bootstrap/dist/css/bootstrap.min.css';


function Comments(props) {


        return (
            <div style={{height: 250, overflowY: 'scroll'}}>
                {props.comments.map((item, index) => 
                    <div className="media media-comment" key={index}>
                        { item.user  && <img alt="" className="avatar avatar-lg media-comment-avatar rounded-circle" src={item.user.profile_picture}/>}
                            <div className="media-body">
                                <div className="media-comment-text">
                                <h6 className="h5 mt-0">{item.user ? item.user.username : 'Anonymous'}</h6>
                                <p className="text-sm lh-160">{item.comment}</p>
                            </div>
                        </div>
                    </div>
                )}
            </div>
        );    
}

export default Comments;