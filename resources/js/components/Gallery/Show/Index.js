import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Gallery from 'react-grid-gallery';

export default class Show extends Component {
    constructor(props){
        super(props);

        this.state = {
            images: [],
            currentImage: 0,
            loading: false,
            hasMore: false,
            next_page_url: null
        };

        this.onCurrentImageChange = this.onCurrentImageChange.bind(this);
        this.deleteImage = this.deleteImage.bind(this);
        this.loadMore = this.loadMore.bind(this);


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
            const response = await axios.get(next_page_url ? next_page_url : '/gallery/folder/4');

            console.log(response);
            response.data && this.setState({images : response.data.data})
        }
        catch (e) {
            console.log(e, e.message);
        }
    }

    onCurrentImageChange(index) {
        this.setState({ currentImage: index });
    }

    deleteImage() {
        if (window.confirm(`Are you sure you want to delete image number ${this.state.currentImage}?`)) {
            var images = this.state.images.slice();
            images.splice(this.state.currentImage, 1)
            this.setState({
                images: images
            });
        }
    }

    // loadMore() {
    //     const { loading, hasMore, next_page_url } = this.state;

    //     if (loading || !hasMore) return;

    //     if (next_page_url && window.innerHeight + document.documentElement.scrollTop === document.documentElement.offsetHeight) {
    //         fetchPictures();
    //     }
  
    // }

    render () {
        return (
            <div style={{
                display: "block",
                minHeight: "1px",
                width: "100%",
                border: "1px solid #ddd",
                overflow: "auto"}}>

                <Gallery
                    images={this.state.images}
                    enableLightbox={true}
                    enableImageSelection={false}
                    currentImageWillChange={this.onCurrentImageChange}

                    customControls={[
                        <button key="deleteImage" onClick={this.deleteImage}>Delete Image</button>
                    ]}
                />
            </div>
        );
    }
}




if (document.getElementById('irs_gallery_files')) {
    ReactDOM.render(<Show />, document.getElementById('irs_gallery_files'));
}
