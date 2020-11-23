@extends('admin.Layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basic.min.css') }}">
@endsection


@section('content')
<div class="container-fluid" onload="getdata();">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <p><h5>Rooms</h5></p><div class="m-auto"></div>
                <button id="roomAddModal" class="btn btn-danger btn-sm">Add Rooms</button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Lenght</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="retultBody">

                </tbody>
            </table>
        </div>
    </div>
</div>






<!-- Rooms add -->
<div class="modal fade" id="addRoom" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title ml-5">Add New Slider</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body  text-center">
            <div class="container-fluid">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row p-0">
                        <div class="panel-body">
                            <form id="dropzoneForm" class="dropzone" action="{{ route('room.storeImage') }}">
                                @csrf
                            </form>
                            <div>
                                <button type="button" class="btn btn-info" id="submit-all">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@section('script')
<script src="{{ asset('js/dropzone-amd-module.min.js') }}"></script>
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function(){
        getdata(); 

    });



  
  function getdata() {
    
    
    axios.get('/admin/rooms/get').then(function(response) {
        console.log(response);
    });
}



$('#roomAddModal').click(function(){
    $('#addRoom').modal('show');
});




</script>

@endsection
@endsection
