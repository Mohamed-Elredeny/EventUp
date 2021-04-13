@extends('admin.dashboard')
@section('main-container')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add New Hall</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">

                <form method="post" action="{{route('halls.update',['hall'=>$category->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Hall Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="Hall Title" name="title" value="{{$category->title}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Hall description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="form-control"  name="description" id="description" cols="30" rows="10" >{{$category->description}}</textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Hall Address</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Package Address" type="text" name="address" value="{{$category->address}}" >

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Price PerHour </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Price per hour" type="number" name="price_per_hour"  value="{{$category->price_per_hour}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="hidden" name="oldval">
                            <input class="form-control"  type="file" name="image" required>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 ">
                            <img src="{{asset('assets/images/halls/'.$category->image)}}" alt="" style="width:100px;height:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <center>
                                    <input class="form-control btn btn-outline-primary"  type="submit" name="save" value="Edit">
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
