@extends('admin.dashboard')
@section('main-container')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Show Event Details</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">

                <form method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Event Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="Hall Title" name="title" value="{{$category->title}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Event description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="form-control"  name="description" id="description" cols="30" rows="10" disabled>{{$category->description}}</textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Event Price</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Event Price" type="number" name="price" value="{{$category->price}}" disabled>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">From</label>
                        <div class="col-sm-6">
                            <input class="form-control" placeholder="Price per hour" type="datetime" name="from" value="{{$category->from}}" disabled >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">To</label>
                        <div class="col-sm-6">
                            <input class="form-control" placeholder="Price per hour" type="datetime" name="to" value="{{$category->to}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Number Of Tickets</label>
                        <div class="col-sm-6">
                            <input class="form-control" placeholder="Number Of Tickets" type="number" min="1" name="all_ticket" value="{{$category->all_ticket}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select a Hall</label>
                        <div class="col-sm-6">
                            <select name="hall_id" class="form-control" disabled>
                                @foreach($halls as $hall)
                                    <option select value="{{$category->halls->id}}">{{$category->halls->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select an Organizer</label>
                        <div class="col-sm-6">
                            <select name="organizer_id"  class="form-control" disabled>
                                @foreach($organizers as $hall)
                                    <option select value="{{$category->id}}">{{$category->Organizers->fname . ' '.$category->Organizers->fname}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                        <div class="col-sm-12 col-md-10">
                            <img class="form-control" src="{{asset('assets/images/events/'.$category->image)}}" alt="" style="width: 100px;height: 100px">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <center>
{{--
                                    <input class="form-control btn btn-outline-primary"  type="submit" name="save" value="Save">
--}}

                                </center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Default Basic Forms End -->


        </div>

    </div>
@endsection
<script>
    var flag = 0;
    if(flag === 1){
        var oldVal=0;
    }
    function NumOfFields(){
        usingClassNameToShowDisplayNone();
        var skills = document.getElementById('skills').value;
        //alert(skills);
        if(skills > 0) {

            if (flag !== 1) {
                var test = document.getElementById('sad');
                for (var i = 0; i < skills; i++) {
                    var newtest = test.cloneNode(true);
                    newtest.style.display = "block";
                    newtest.id = 'skill' + i;
                    newtest.name = 'skill' + i;

                    newtest.placeholder = 'Type Your Skill';
                    document.getElementById("container").appendChild(newtest);

                    var newtest2 = test.cloneNode(true);
                    newtest2.style.display = "block";
                    newtest2.id = 'percentages' + i;
                    newtest2.name = 'percentages' + i;

                    newtest2.type = 'number';
                    newtest2.placeholder = 'Type Your Percentage % ';
                    document.getElementById("container1").appendChild(newtest2);


                    flag = 1;
                    oldVal = skills;
                }
            } else if(oldVal !== null) {
                alert('You have already specify number of skills ');
                flag =0;
                resetFields(oldVal);
                //alert(oldVal + '' + skills);
            }
        }else{
            alert('Enter a valid number');
        }
    }
    function resetFields(oldVal){
        for(var i=0;i<oldVal;i++) {
            var myobj = document.getElementById("skill"+i);
            var myobj2 = document.getElementById("percentages"+i);

            myobj.remove();
            myobj2.remove();
        }
        NumOfFields();
    }

    function usingClassNameToShowDisplayNone() {
        var myClasses = document.querySelectorAll('.hh'),
            i = 0,
            l = myClasses.length;
        for (i; i < l; i++) {
            myClasses[i].style.display = 'block';
        }
    }
</script>
