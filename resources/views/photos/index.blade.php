@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    document.getElementById('whole_page_loader').style.display = "block";
    axios.get("/api/photos")
        .then(function(response) {
            console.log(response.data.cars);
            fillTable(response.data.cars);
        })
        .catch(function(error) {
            console.log(error);
        })
        .then(function() {
            document.getElementById('whole_page_loader').style.display = "none";

            $(document).on('click', '#del_button', function() {
                console.log($(this).val())
                var index = $(this).val();
                $(this).closest('tr').remove();
                deleteItem(index)
            })
        });


    function fillTable(cars) {
        var col = ['name', 'description', 'foto', 'delete'];
        var table = document.getElementById("tabel");
        var tr = table.insertRow(-1);

        for (var i = 0; i < cars.length; i++) {
            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                if (j != 2 && j != 3)
                    tabCell.innerHTML = cars[i][col[j]];

                for (var index = 0; index < cars[i].car_images.length; index++) {
                    console.log(cars[i].car_images[index].name)
                    if (j == 2) tabCell.innerHTML += "<img src = '/storage/files/" + cars[i].car_images[index].name + "' style='height: 100px;'/>"
                }

                if (j == 3) tabCell.innerHTML = "<button type='button' id='del_button' value='" + cars[i].id + "' title='delete' style='cursor: pointer; border: none; background-color:transparent;'> <i class='fas fa-trash fa-lg text-danger'></i></button>"
            }
        }
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
        <th scope="col">Action</th>
    </thead>
    <tbody id="tablebodylol">

    </tbody>
</table>

@endsection