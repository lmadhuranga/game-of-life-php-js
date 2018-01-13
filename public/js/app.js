$(document).ready(function () {
    var cell_width = 10;
    var cell_height = 10;
    var canvas_id = "life";
    var cell_array = [];
    var display;
    var is_color = false;
    var previousGeneration = [];
    var num_cells_y;
    var num_cells_x;

    /**
     * Initial Desktop setup with random game pattern
     */
    function setUp()
    {
        // Generate random generate with initial size
        previousGeneration = getRandomGeneration(38, 38);

        // Set Array size as length
        num_cells_y = previousGeneration.length;
        num_cells_x = previousGeneration[0].length;

        // Convert to display of canverse cell format
        display = new GameDisplay(num_cells_x, num_cells_y, cell_width, cell_height, canvas_id, is_color);
    }

    /**
     * Generate grid of randomly generator
     */
    function getRandomGeneration(rowsCount, colsCount) {
        randomArray = [];
        for (var i = 0; i < rowsCount; i++) {
            randomColumns = [];
            for (var j = 0; j < colsCount; j++) {
                randomColumns[j] = Math.floor(Math.random() * 2);
            }
            randomArray[i] = randomColumns;
        }
        return randomArray;
    };

    /**
     *  Normal object convert to cells based object
     */
    function convertToCellObject(cells) {
        var length_y = cells.length;
        var length_x;
        var y;
        var x;
        // each row
        for (y = 0; y < length_y; y++) {
            length_x = previousGeneration[y].length;
            // each column in rows
            for (x = 0; x < length_x; x++) {
                var state = (cells[y][x] == 1) ? 'alive' : 'dead';
                cells[y][x] = new Cell(x, y, state);
            }
        }
        return cells;
    };

    /**
     * Select game with name
     */
    function selectGame(game) {
        if (game.gameType == 'auto') {
            var randomGeneration = getRandomGeneration(38, 38);
            previousGeneration = JSON.parse(JSON.stringify(randomGeneration));
        }
        else {
            var selectedGeneration = games[game.gameType].grid;
            previousGeneration = JSON.parse(JSON.stringify(selectedGeneration));
        }
        is_color = game.gameColor;
        display = new GameDisplay(num_cells_x, num_cells_y, cell_width, cell_height, canvas_id, is_color);
    }

    /**
     * Call server with current generation
     */
    function getNextGeneration(cellData) {
        cellData = JSON.stringify(cellData)
        $.ajax({
            'url': 'index.php/game/calc',
            'type': 'POST',
            'dataType': 'json',
            'data': {data: cellData},
            'success': function (newArray) {
                // Update with new generation
                previousGeneration = JSON.parse(JSON.stringify(newArray));
                // Convert to cell array
                cell_array = convertToCellObject(newArray);
                // Update cell grid
                display.update(cell_array);
            },
            'error': function (request, error) {
                console.error("Request: " + JSON.stringify(request));
            }
        });
    }


    /**
     * Continuesly get next generation using prvious gen
     */
    setInterval(function () {
        if (previousGeneration.length > 0) {
            getNextGeneration(previousGeneration);
        }
    }, 500);

    //---------------- Jquery Event callers ------------------------------------
    // Initial Display set up with the
    setUp();

    /**
     * Select the game
     */
    $('.game-select-btn').click(function (event) {
        gameData = $(this).data();
        selectGame(gameData);

        // Hide game selector modal
        $('#gameSelectorModal').modal("hide");
    });

    // Initialy open the modal of game selector
    $('#gameSelectorModal').modal("toggle");


});