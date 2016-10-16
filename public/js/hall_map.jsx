/**
 * React components to render virtual hall and its
 * booking data
 */


var BookedStand = React.createClass({
	// generate cell of booked cell
	render: function(){
		return (
			<td className="booked-stand" data-stand-id={this.props.standdata.stand_id}>
				<img src={this.props.standdata.booking.logo_url} width="40"/>
			</td>			
		)
	}
});

var VacantStand = React.createClass({
	// generate cell of vacant stand
	render: function(){
		return(
			<td className="vacant-stand cursor-hand" data-stand-id={this.props.standdata.stand_id} data-toggle="modal" data-target="#book-stand-proceed"></td>
		)
	}
});

var VoidStand = React.createClass({
	// cell which is not stand in hall stand grid
	render: function(){
		return <td></td>
	}
});


var GridRow = React.createClass({
	
	/**
	 * build row of exposition hall virtual map
	 */

	render: function(){
		var row = [];
		for(var i= 1; i<= this.props.col; i++){
			var currentGridCoordinate = this.props.rownum.toString() + i.toString();
			if(this.props.halldata[currentGridCoordinate].is_stand){
				if(this.props.halldata[currentGridCoordinate].is_booked){
					row.push(<BookedStand standdata={this.props.halldata[currentGridCoordinate]}/>);
				}
				else{
					row.push(<VacantStand standdata={this.props.halldata[currentGridCoordinate]}/>);
				}				
			}
			else{
				row.push(<VoidStand/>);
			}
						
		}
		return (
			<tr>
			{row}
			</tr>
		)
	}
});



/** 
 * React component to create virtual map exposition hall
 */

var StandGrid = React.createClass({

	getInitialState: function() {
        return {
            hallData: false
        };
    },

    /*
     * fetch exposition hall data and booking information
     * for given event 
     */
    componentDidMount: function(){
        var that = this;
        $.getJSON('/api/event/halldata/' + this.props.eventId, function (data) {
            that.setState({hallData: data});
        }.bind(this));
    },

	render: function () {
	  	
	  	// making sure exposition hall data are loaded
	  	if(this.state.hallData){

		  	var l = [];
		  	for(var i=1; i<= this.state.hallData.cells_y; i++){
		  		l.push(<GridRow col={this.state.hallData.cells_x} rownum={i} halldata={this.state.hallData.data}/>);
		  	}
		    return (
		     <table  className="table-responsive table">
		      <tbody>
		     	{l}
		      </tbody>	
		     </table>
		    )

		}

		// exposition hall data has not been loaded yet
		return <div>Loading...</div>;
	}


});

ReactDOM.render(<StandGrid eventId={eventId} />, document.getElementById('root'));




