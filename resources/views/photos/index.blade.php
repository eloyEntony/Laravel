@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script>
    axios.get("/api/photos")
        .then(function(response) {
            // handle success
            console.log(response.data.cars);
            fillTable(response.data.cars);

        })
        .catch(function(error) {
            // handle error
            console.log(error);
        })
        .then(function() {
            // always executed
        });


    function fillTable(cars) {
        var col = ['name', 'description', 'foto'];
        var table = document.getElementById("tabel");
        var tr = table.insertRow(-1); // TABLE ROW.

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < cars.length; i++) {
            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                if (j != 2)
                    tabCell.innerHTML = cars[i][col[j]];

                for (var index = 0; index < cars[i].car_images.length; index++) {
                    console.log(cars[i].car_images[index].name)
                    if (j == 2) tabCell.innerHTML += "<img src = '/storage/files/" + cars[i].car_images[index].name + "' style='height: 100px;'/>"
                }
            }
        }
        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("showData");
        //divContainer.innerHTML = "";
        divContainer.appendChild(table);
    }


    function deleteItem(index) {
        axios.delete("/api/photos/delete/" + index)
            .then(response => {
                console.log(response);
            });
    }
</script>

<table class="table" id="tabel">
    <thead>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Photo</th>
    </thead>
    <tbody id="tablebodylol">

    </tbody>
</table>

<button onclick="deleteItem(15)">del</button>

@endsection