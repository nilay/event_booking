var BookedStand = React.createClass({

	render: function(){
		return (
			<td className="booked-stand" data-stand-id={this.props.standdata.stand_id}>
				<img src={this.props.standdata.booking.logo_url} width="40"/>
			</td>			
		)
	}
});

var VacantStand = React.createClass({

	render: function(){
		return(
			<td className="vacant-stand cursor-hand" data-stand-id={this.props.standdata.stand_id} data-toggle="modal" data-target="#book-stand-proceed"></td>
		)
	}
});

var VoidStand = React.createClass({
	render: function(){
		return <td></td>
	}
});


var GridRow = React.createClass({


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

var StandGrid = React.createClass({

	getInitialState: function() {
        return {
            hallData: false
        };
    },

    componentDidMount: function(){
        var that = this;
        $.getJSON('/api/event/halldata/' + this.props.eventId, function (data) {
            that.setState({hallData: data});
        }.bind(this));
    },

	render: function () {
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

		return <div>Loading...</div>;
	}


});

ReactDOM.render(<StandGrid eventId="1" />, document.getElementById('root'));




