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
                            <div className="media-body">
                                    { item.user  && <img alt="" className="avatar mr-3 avatar-sm rounded-circle" src={item.user.profile_picture}/>}
                                    <h6 className="h5 mt-0 d-inline">{item.user ? item.user.username : 'Anonymous'}: </h6>
                                    <p className="d-inline text-sm lh-160">{item.comment}</p>
                            </div>
                    </div>
                )}
            </div>
        );    
}

export default Comments;