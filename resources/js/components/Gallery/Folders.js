import React, { Component, useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { Tab, Row, Col, Nav, Card} from 'react-bootstrap';

// import 'bootstrap/dist/css/bootstrap.min.css';


class Folders extends Component {

    constructor(props) {
        super(props);

        this.state = {
            folders: [],
            active_tab: []
        }

    }

    componentDidMount() {
        this.fetchFolders();
    }

    async fetchFolders() {
        try {
            const response = await axios.get('/gallery/folders');

            response.data && this.setState({folders : response.data})
        }
        catch (e) {
            console.log(e, e.message);
        }
    }

    render() {
        const { folders } = this.state;

        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-12">

                                <Tab.Container id="left-tabs-example" defaultActiveKey={1}>
                                    <Row>
                                        <Col sm={12}>
                                            <Nav variant="pills">
                                                <Nav.Item key='-1' >
                                                    <Nav.Link eventKey='-1'>All</Nav.Link>
                                                </Nav.Item>
                                                {folders.map((item, index) => 
                                                    <Nav.Item key={index}>
                                                        <Nav.Link  eventKey={index}>{item.name}</Nav.Link>
                                                    </Nav.Item>
                                                )}
                                            </Nav>
                                        </Col>
                                    </Row>
                                    <br/><br/>
                                    <Row>
                                        <Col sm={12}>
                                        <Tab.Content>
                                            <Tab.Pane eventKey='-1'>
                                                <Row>
                                                {folders.map((item, index) => 
                                                            <Col md={4}>
                                                                <a href={`/gallery/${item.id}`}>
                                                                    <Card>
                                                                        <Card.Img variant="top" src={item.default_image} />
                                                                        <Card.Body>
                                                                            <Card.Text>{item.description}</Card.Text>
                                                                        </Card.Body>
                                                                    </Card>    
                                                                </a>                                                
                                                            </Col>
                                                )}                                                
                                                </Row>
                                            </Tab.Pane>
                                            {folders.map((item, index) => 
                                                <Tab.Pane eventKey={index}>
                                                    <Row>
                                                        <Col md={4}>
                                                            <a href={`/gallery/${item.id}`}>
                                                                <Card>
                                                                    <Card.Img variant="top" src={item.default_image} />
                                                                    <Card.Body>
                                                                        <Card.Text>{item.description}</Card.Text>
                                                                    </Card.Body>
                                                                </Card>                                                    
                                                            </a>
                                                        </Col>
                                                    </Row>
                                                </Tab.Pane>
                                            )}
                                        </Tab.Content>
                                        </Col>
                                    </Row>
                                </Tab.Container>                            
                    </div>
                </div>
            </div>
        );    
    }
}

if (document.getElementById('irs_gallery_folders')) {
    ReactDOM.render(<Folders />, document.getElementById('irs_gallery_folders'));
}
