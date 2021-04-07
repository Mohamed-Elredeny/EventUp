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
    table thead tr th{
        width:1px; white-space:nowrap;
    }
    table tbody tr td{
        white-space:normal;

    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

@section('main-container')
    <div class="table-responsive"  style="overflow-y:scroll;">
        <table id="myTable" class="table table-striped table-bordered table-sm table-responsive"  style="width:auto;" style="text-align:center;layout:auto">
            <thead>
            <tr>
                <th>
                    Image
                </th>
                <th>
                    Arabic Name
                </th>
                <th class="th-sm">
                    English Name
                </th>
                <th class="th-sm">
                    Details Arabic
                </th>
                <th class="th-sm">
                    Details English
                </th>
                <th class="th-sm">
                     Lessons Number
                </th>
                <th>
                    Category
                </th>
                <th>
                    Chief
                </th>
                <th colspan="3" >
                    <center>
                        Controllers
                    </center>
                </th>

            </tr>
            </thead>
            <tbody>

{{--
            @foreach($categories as $category)
--}}
@for($i=0;$i<5;$i++)
                <tr style="text-align:center">
                    <td>
                         <img src="" alt="" style="width:70px;height:70px">
                     </td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>
                        Test
                    </td>
                    <td>
                        Test
                    </td>
                    <td>
                        Test
                        <br><br>
                        <a class="btn btn-dark" href="">Show</a>
                    </td>


                    <td>Test</td>
                    <td>Test</td>

                    <td colspan="3" class="col-sm-12">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Controllers
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="btn btn-dark col-sm-12" href="">Show</a>
                                    <a class="btn btn-dark col-sm-12"  href="">Edit</a>
                                    <form method="post" action="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-dark col-sm-12" >Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                     </td>
                </tr>
@endfor

            {{--
                        @endforeach
            --}}

            <tfoot>
            <tr>
                <th colspan="11">
                    <center>
                        <br>
                        <a href="" class="btn btn-dark ">Add New Course</a>

                    </center>
                </th>

            </tr>
            </tfoot>
        </table>
    </div>
@endsection

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
