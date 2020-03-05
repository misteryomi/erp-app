import React, { Component, useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { Modal, Button, Image, Carousel, Row, Col, Card } from 'react-bootstrap';
import Comments from './Comments';
import Comment from './Comment';

// import 'bootstrap/dist/css/bootstrap.min.css';

class GalleryCarousel extends Component {
  constructor(props) {
    super(props);

    this.state = {
      index: props.index,
      comments: [],
      images: props.images,
    }

    this.handleSelect = this.handleSelect.bind(this);
    this.fetchComments = this.fetchComments.bind(this);
  }
  
  handleSelect(selectedIndex, e) {
    this.setState({index: selectedIndex});
    this.fetchComments();

  };

  componentDidMount() {
      this.fetchComments();
  }

  async fetchComments() {
      try {
          const response = await axios.get(`/gallery/${this.state.images[this.state.index].id}/comments`);

          response.data && this.setState({comments : response.data})
      }
      catch (e) {
          console.log(e, e.message);
      }
  }


    render() {
      const { images, index, comments } = this.state;
      return (
        <Carousel  activeIndex={index} onSelect={this.handleSelect} slide={false} indicators={false}>
          {images.map((item, index) => 
              <Carousel.Item key={index}>
                  <Card>
                    {/* <Card.Body> */}
                      <Row>
                        <Col md >
                          <img
                          className="d-block w-100"
                          src={item.src}
                          alt=""
                          style={{height: '100%', objectFit: 'cover'}}
                          />
                        </Col>
                        <Col md style={{paddingTop: 20, paddingRight: 40}}>
                          {/* <h3>First slide label</h3> */}
                          {item.caption && (
                            <React.Fragment>
                            <p>{item.caption}</p>
                            <hr/>                              
                            </React.Fragment>
                          )}
                          <Comment gallery_id={item.id} onAddComment={(comment) => this.setState({comments: [comment, ...comments]})} />
                          <Comments comments={comments}/>
                        </Col>
                      </Row>
                      
                    {/* </Card.Body> */}
                  </Card>
              </Carousel.Item>      
          )}
        </Carousel>
      );
    }

  }

export default GalleryCarousel;

