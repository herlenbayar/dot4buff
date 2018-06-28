'use strict';

const e = React.createElement;

var Jumbotron = React.createClass({
  render: function(){
    return(
      <div>
        TEST
      <div>
    )
  }
});

ReactDom.render(
  <Jumbotron />,
  document.getElementById('jumbotron')
);
