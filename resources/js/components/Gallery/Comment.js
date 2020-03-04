import React, { Component, useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { Tab, Row, Col, Nav, Card} from 'react-bootstrap';

// import 'bootstrap/dist/css/bootstrap.min.css';


class Comment extends Component {

    constructor(props) {
        super(props);

        this.state = {
            comment: '',
            is_anonymous: false,
        }
    }

    componentDidMount() {
    }

    async submitComment() {
        try {
            const { comment, is_anonymous }  = this.state;
            const data = { comment, is_anonymous };

            const response = await axios.post(`/gallery/${this.props.gallery_id}/comment/store`, data);

            console.log(response);
            this.setState({comment: '', is_anonymous: false})
            this.props.onAddComment(response.data.comment)
            // response.data && this.setState({folders : response.data})
        }
        catch (e) {
            console.log(e, e.message);
        }
    }

    handleSubmitComment() {
        this.submitComment();
    }

    render() {
        const { is_anonymous, comment } = this.state;
        return (
            <div>
                    <textarea className="form-control" onChange={(e) => this.setState({comment: e.target.value})} value={comment} placeholder="Add your comment"></textarea>
                    <div className="custom-control custom-checkbox mb-3">
                        <input className="custom-control-input" id="customCheck1" checked={is_anonymous} type="checkbox" value={is_anonymous} onChange={(e) => this.setState({is_anonymous: !is_anonymous}) }/>
                        <label className="custom-control-label" htmlFor="customCheck1"> Comment anonymously</label>
                    </div>            
                    <button className="btn btn-default btn-block mt-2" onClick={() => this.handleSubmitComment() }>Comment</button>
            </div>
        );    
    }
}

export default Comment;