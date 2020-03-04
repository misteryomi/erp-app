import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Gallery from 'react-grid-gallery';
import GalleryModal from './Modal';
import { Tab, Row, Col, Nav, Card, Image} from 'react-bootstrap';


export default class Show extends Component {
    constructor(props){
        super(props);

        this.state = {
            images: [],
            currentIndex: 0,
            loading: false,
            hasMore: false,
            next_page_url: null,
            showModal: false,
        };

        this.onCurrentImageChange = this.onCurrentImageChange.bind(this);
        this.deleteImage = this.deleteImage.bind(this);
        this.loadMore = this.loadMore.bind(this);
        this.handleDisplayModal = this.handleDisplayModal.bind(this);

        // window.onscroll = () => {
        //     this.loadMore();
        // }
    
    }

    componentDidMount() {
        this.fetchPictures();

        
    }

    async fetchPictures() {
        const { next_page_url } = this.state; 

        try {
            const response = await axios.get(next_page_url ? next_page_url : '/gallery/folder/'+this.props.folderid);

            // console.log(response);
            response.data && this.setState({images : response.data})
        }
        catch (e) {
            console.log(e, e.message);
        }
    }

    onCurrentImageChange(index) {
        this.setState({ currentIndex: index });
    }

    deleteImage() {
        if (window.confirm(`Are you sure you want to delete image number ${this.state.currentIndex}?`)) {
            var images = this.state.images.slice();
            images.splice(this.state.currentIndex, 1)
            this.setState({images});
        }
    }

    loadMore() {
        const { loading, hasMore, next_page_url } = this.state;

        if (loading || !hasMore) return;

        if (next_page_url && window.innerHeight + document.documentElement.scrollTop === document.documentElement.offsetHeight) {
            fetchPictures();
        }
  
    }

    handleDisplayModal(e) {
        const index = e.target.attributes['data-index'].value;

        this.setState({ currentIndex: index, showModal: true });

    }

    render () {
        const { showModal, images, currentIndex } = this.state; 

        return (
            <div style={{
                display: "block",
                minHeight: "1px",
                width: "100%",
                border: "1px solid #ddd",
                overflow: "auto"}}>

                <Row>
                {(images.length > 0) && images.map((item, index) => 
                    <Col md={4} key={index}>
                        <Image onClick={this.handleDisplayModal} data-index={index} src={item.thumbnail} thumbnail />
                    </Col>
                )}                                                
                </Row>


                <GalleryModal onHide={() => this.setState({showModal: false})} show={showModal} index={currentIndex} images={images} />
            </div>
        );
    }
}




if (document.getElementById('irs_gallery_files')) {

    const element = document.getElementById('irs_gallery_files')
      
    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset)

    ReactDOM.render(<Show {...props} />, element);
}
