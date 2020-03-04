import React, { Component, useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { Modal, Button, Image } from 'react-bootstrap';
import GalleryCarousel from './Carousel';

// import 'bootstrap/dist/css/bootstrap.min.css';

function GalleryModal(props) {
    return (
      <Modal
        {...props}
        size="lg"
        aria-labelledby="contained-modal-title-vcenter"
        centered
        id="fullscreen"
      >
        <Modal.Header closeButton>
        </Modal.Header>
        <Modal.Body>
          <GalleryCarousel images={props.images} index={props.index} />
        </Modal.Body>
      </Modal>
    );
  }

export default GalleryModal;

