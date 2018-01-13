var GameDisplay = function (num_cells_x, num_cells_y, cell_width, cell_height, canvas_id, colourful) {
    var canvas = document.getElementById(canvas_id),
        ctx = canvas.getContext && canvas.getContext('2d'),
        width_pixels = num_cells_x * cell_width,
        height_pixels = num_cells_y * cell_height,
        updateCells = function (cell_array) {
            var length_y = cell_array.length,
                length_x,
                y, x;
            // each row
            for (y = 0; y < length_y; y++) {
                length_x = cell_array[y].length;
                // each column in rows
                for (x = 0; x < length_x; x++) {
                    // Draw Cell on Canvas
                    drawCell(cell_array[y][x]);
                }
            }
        },
        drawCell = function(cell) {
            // find start point (top left)
            var start_x = cell.getXPos() * cell_width,
                start_y = cell.getYPos() * cell_height;
            // draw rect from that point, to bottom right point by adding cell_height/cell_width
            if (cell.getState() == "alive") {
                //console.log("it's alive!");
                if (colourful === true) {
                    var r=Math.floor(Math.random()*256),
                        g=Math.floor(Math.random()*256),
                        b=Math.floor(Math.random()*256),
                        a=(Math.floor(Math.random()*6)+5)/10; // rand between 0.5 and 1.0
                    ctx.fillStyle = "rgba(" + r + "," + g + "," + b + "," + a + ")";
                }
                ctx.fillRect(start_x, start_y, cell_width, cell_height);
            } else {
                ctx.clearRect(start_x, start_y, cell_width, cell_height);
            }
        },
        init = function () {
            // Resize Canvas
            canvas.width = width_pixels;
            canvas.height = height_pixels;

        };
    init();
    return {
        update: function (cell_array) {
            updateCells(cell_array);
        }
    };
};
