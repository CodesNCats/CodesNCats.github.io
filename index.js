'use strict';

const e = React.createElement;


/*============= Code for Main View Port =============*/
class ViewPort extends React.Component {
  constructor(props) {
    super(props);
    this.state = { page: "Pages/about.html"};
  }

  render() {
    return (
      <div class="container">
        <div class="menu" id="menu">
            <div class="homeLink" id="homeLink"></div>
            <a class="menuLink" id="portfolio" onClick={() => this.setState({ page: "Pages/portfolio.html" })}>Portfolio</a>
            <a class="menuLink" id="about" onClick={() => this.setState({ page: "Pages/about.html" })}>About</a>
            <a class="menuLink"	id="resume" onClick={() => this.setState({ page: "Pages/resume.html" })}>Resume</a>
        </div>
        <div id="main">
          <div id="port">
            <iframe src={this.state.page} sandbox="allow-same-origin"/>
          </div>
        </div>
      </div>
    )
  }
}

const domContainer = document.querySelector('#root');
ReactDOM.render(e(ViewPort), domContainer);
