@extends('admin.dashboard')
<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@if( LaravelLocalization::getCurrentLocaleName() == "English")
@section('main-container')
    <div class="table-responsive"  style="overflow-y:scroll">
        <table id="myTable" class="table table-striped table-bordered table-sm"  style="width:100%;" style="text-align:center">
            <thead>
            <tr>
                <th class="th-sm">
                    Number
                </th>
                <th class="th-sm">
                    Image
                </th>
                <th class="th-sm">
                    Title
                </th>
                <th class="th-sm">
                    Description
                </th>
                <th class="th-sm">
                    Price
                </th>
                <th>
                   From
                </th>
                <th>
                    To
                </th>
                <th>
                    all_ticket
                </th>
                <th>
                    available_ticket
                </th>
                <th>
                    Hall
                </th>
                <th>
                    Organizer
                </th>
                <th >
                    <center>
                        Controllers
                    </center>
                </th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 0?>
            @foreach($categories as $category)
                <tr style="text-align:left">
                    <?php $i++ ?>
                    <td>{{$i}}</td>
                    <td>
                        <img src="{{asset('assets/images/events/'.$category->image)}}" alt="" style="width:70px;height:70px">

                    </td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->price}}</td>
                        <td>{{$category->from}}</td>
                        <td>{{$category->to}}</td>
                        <td>{{$category->all_ticket}}</td>
                        <td>{{$category->available_ticket}}</td>
                        <td>
                            {{$category->Halls->title}}
                        </td>
                        <td>{{$category->Organizers->fname .' '. $category->Organizers->lname}}</td>


                        <td>
                        <center>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Controllers
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="btn btn-dark col-sm-12" href="{{route('events.show',['event'=>$category->id])}}">Show</a>
                                        <a class="btn btn-dark col-sm-12"  href="{{route('events.edit',['event'=>$category->id])}}">Edit</a>
                                        <form method="post" action="{{route('events.destroy',['event'=>$category->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-dark col-sm-12" >Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </td>


                </tr>
            @endforeach

            <tfoot>
            <tr>
                <th colspan="14">
                    <center>
                        <br>
                        <a href="{{route('events.create')}}" class="btn btn-dark ">Add New Event</a>

                    </center>
                </th>

            </tr>
            </tfoot>
        </table>
    </div>
@endsection

@endif
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
