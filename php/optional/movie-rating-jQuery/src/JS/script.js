let movies = [];
// movie class
class movie {
    constructor(title, rating) {
        this.title = title;
        this.rating = rating;
    }
}

// function for sorting
function sortIt(param) {
    movies.sort(sortFunction)
    function sortFunction(a, b) {
        if (typeof a[param] != 'number') {
            a[param] = a[param].toLowerCase();
        }
        if (typeof b[param] != 'number') {
            b[param] = b[param].toLowerCase();
        }
        if (a[param] == b[param]) {
            return 0;
        } else {
            return ((a[param] < b[param]) ? -1 : 1);
        }
    }
}

// function to generate table containing all movies
function generateTable() {
    let ret = "";
    movies.forEach(x => {
        ret += "<tr>";
        ret += `<td> ${x.title} </td>`;
        ret += `<td> ${x.rating} </td>`;
        ret += `<td> <button id = ${x.title} class = "delete-btn"> Delete </button>`;
        ret += `</tr>`;
    });
    return ret;
}
// jQuery functions
$(document).ready(function () {

    function validNumber(n) {
        return (n >= 0 && n <= 10);
    }
    function validName(str) {
        return (str.length >= 1);
    }

    function printError(msg) {
        $("#error").html(msg);
    }

    // add button action
    $('#add').click(function () {
        let title = $("#movie-name").val();
        let rating = $("#movie-rating").val();

        if (validName(title) && validNumber(rating)) {
            printError("");
            let new_movie = new movie(title, rating);
            movies.push(new_movie);
        } else {
            printError("Please enter correct values");
        }
        let tab = generateTable();
        $("#table-body").html(tab);
    });

    // delete button action
    $(document).on('click', ".delete-btn", function () {
        let curr_id = this.id;
        // using the for loop to find the index
        let idx = -1;
        for (let i = 0; i < movies.length; i++) {
            if (movies[i].title == curr_id) {
                idx = i;
                break;
            }
        }
        if (idx != -1) {
            movies.splice(idx, 1);
            let tab = generateTable();
            $("#table-body").html(tab);
        }
    });

    $(document).on('click', "#sortByTitle", function () {
        sortIt('title');
        let tab = generateTable();
        $("#table-body").html(tab);
    });

    $(document).on('click', "#sortByRating", function () {
        sortIt('rating');
        let tab = generateTable();
        $("#table-body").html(tab);
    });
});
