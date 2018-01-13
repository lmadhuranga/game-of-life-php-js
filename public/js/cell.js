var Cell = function(x_pos, y_pos, state) {
    //console.log("Creating cell at " + x_pos + "," + y_pos + ", and cell state is: " + state);
    /*var x_pos = 0,        // X Position of Cell in Grid
        y_pos = 0,        // Y position of cell in Grid
        state = "dead",   // Cell state: dead or alive.*/
    return {
        x_pos: x_pos,
        y_pos: y_pos,
        state: state,
        getXPos: function() {
            return x_pos;
        },
        getYPos: function() {
            return y_pos;
        },
        getState: function() {
            return state;
        },
        setState: function(new_state) {
            state = new_state;
        },
        clone: function() {
            return new Cell(x_pos, y_pos, state);
        }
    };
};