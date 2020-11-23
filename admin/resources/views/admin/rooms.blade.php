@extends('admin.Layouts.app')

@section('content')

    @include('admin.component.RoomSingle')

@section('script')

    <script type="text/javascript">
        getRoomData();


        function getRoomData() {


            axios.get('/getRoomData')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivRoom').removeClass('d-none');
                        $('#loadDivRoom').addClass('d-none');

                        $('#RoomDataTable').DataTable().destroy();
                        $('#Room_table').empty();
                        var count = 1;
                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(
                                "<td>" + count++ + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].title + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].price + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].length + " </td>" +



                                "<td class='text-break'>" + dataJSON[i].view + " </td>" +
                                "<td class='text-break'>" + dataJSON[i].adult + " </td>" +
                                "<td class='text-break'>" + dataJSON[i].children + " </td>" +
                                "<td class='text-break'>" + dataJSON[i].bed + " </td>" +

                                "<td class='text-center'><a class='RoomEditIcon' data-id=" +
                                dataJSON[i].id +
                                "><i class='fas fa-edit'></i></a> </td>" +

                                "<td><a class='RoomDeleteIcon' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#Room_table');
                        });

                        $(".RoomDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#RoomDeleteId').html(id);
                            $('#deleteModalRoom').modal('show');

                        })

                        $(".RoomEditIcon").click(function() {

                            var id = $(this).data('id');
                            $('#RoomEditId').html(id);

                            $('#updateRoomModal').modal('show');
                            RoomUpdateDetails(id);

                        })


                    } else {
                        $('#wrongDivRoom').removeClass('d-none');
                        $('#loadDivRoom').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivRoom').removeClass('d-none');
                    $('#loadDivRoom').addClass('d-none');
                });


        }





        //add button modal show for add new entity

        $('#addRoomModal').click(function() {
            $('#addRoomModal').modal('show');
        });


        //Exclusive Add modal save button

        $('#RoomAddConfirmBtn').click(function() {


            var RoomTitle = $('#RoomTitle').val();
            var RoomPrice = $('#RoomPrice').val();
            var RoomLenght = $('#RoomLenght').val();
            var RoomView = $('#RoomView').val();
            var RoomAdults = $('#RoomAdults').val();
            var RoomChildren = $('#RoomChildren').val();
            var RoomBed = $('#RoomBed').val();
            RoomAdd(RoomTitle, RoomPrice, RoomLenght, RoomView, RoomAdults, RoomChildren, RoomBed);

        })




        function RoomAdd(RoomTitle, RoomPrice, RoomLenght, RoomView, RoomAdults, RoomChildren, RoomBed) {



            if (RoomTitle.length == 0) {

                toastr.error('Room  Title is empty!');

            } else if (RoomPrice.length == 0) {

                toastr.error('Room Price is empty!');

            } else if (RoomLenght.length == 0) {

                toastr.error('Room Description is empty!');
            } else if (RoomView.length == 0) {
                toastr.error('Room View is empty!');

            } else if (RoomAdults.length == 0) {

                toastr.error('Room Adults is empty!');
            } else if (RoomChildren.length == 0) {

                toastr.error('Room Children is empty!');
            } else if (RoomBed.length == 0) {

                toastr.error('Room Bed is empty!');
            } else {

                $('#RoomAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                axios.post('/RoomAdd', {

                        RoomTitle: RoomTitle,
                        RoomPrice: RoomPrice,
                        RoomLenght: RoomLenght,
                        RoomView: RoomView,
                        RoomAdults: RoomAdults,
                        RoomChildren: RoomChildren,
                        RoomBed: RoomBed

                    })

                    .then(function(response) {

                        $('#RoomAddConfirmBtn').html("Save");

                        if (response.status = 200) {
                            if (response.data == 1) {
                                $('#addRoomModal').modal('hide');
                                toastr.success('Add New Success .');
                                getRoomData();
                            } else {
                                $('#addRoomModal').modal('hide');
                                toastr.error('Add New Failed');
                                getRoomData();
                            }
                        } else {
                            $('#addRoomModal').modal('hide');
                            toastr.error('Something Went Wrong');
                        }


                    }).catch(function(error) {

                        $('#addRoomModal').modal('hide');
                        toastr.error('Something Went Wrong');

                    });

            }

        }

        //  Room delete modal yes button

        $('#confirmDeleteRoom').click(function() {
            var id = $('#RoomDeleteId').html();
            DeleteDataRoom(id);

        })


        //delete courses function

        function DeleteDataRoom(id) {
            $('#confirmDeleteRoom').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/RoomDelete', {
                    id: id
                })
                .then(function(response) {
                    $('#confirmDeleteRoom').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalRoom').modal('hide');
                            toastr.error('Delete Success.');
                            getRoomData();
                        } else {
                            $('#deleteModalRoom').modal('hide');
                            toastr.error('Delete Failed');
                            getRoomData();
                        }

                    } else {
                        $('#deleteModalRoom').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalRoom').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }





        //each courses  Details data show for edit

        function RoomUpdateDetails(id) {

            axios.post('/RoomEdit', {
                    id: id
                })
                .then(function(response) {

                    if (response.status == 200) {


                        $('#loadDivRoom').addClass('d-none');
                        $('#RoomEditForm').removeClass('d-none');
                        var jsonData = response.data;
                        $('#RoomTitleIdUpdate').val(jsonData[0].title);
                        $('#RoomPriceIdUpdate').val(jsonData[0].price);
                        $('#RoomLenghtIdUpdate').val(jsonData[0].length);
                        $('#RoomViewIdUpdate').val(jsonData[0].view);
                        $('#RoomAdultsIdUpdate').val(jsonData[0].adult);
                        $('#RoomChildrenIdUpdate').val(jsonData[0].children);
                        $('#RoomBedIdUpdate').val(jsonData[0].bed);

                    } else {

                        $('#loadDivRoom').addClass('d-none');
                        $('#wrongDivRoom').removeClass('d-none');
                    }

                }).catch(function(error) {

                    $('#loadDivRoom').addClass('d-none');
                    $('#wrongDivRoom').removeClass('d-none');

                });

        }



                // update modal save button

                $('#ConfirmBtn').click(function() {
                    
                    var idUpdate = $('#EditId').html();
                    var RoomTitleIdUpdate = $('#RoomTitleIdUpdate').val();
                    var RoomPriceIdUpdate = $('#RoomPriceIdUpdate').val();
                    var RoomLenghtIdUpdate = $('#RoomLenghtIdUpdate').val();
                    var RoomViewIdUpdate = $('#RoomViewIdUpdate').val();
                    var RoomAdultsIdUpdate = $('#RoomAdultsIdUpdate').val();
                    var RoomChildrenIdUpdate = $('#RoomChildrenIdUpdate').val();
                    var RoomBedIdUpdate = $('#RoomBedIdUpdate').val();


                   Update(PageIdUpdate, idUpdate, nameUpdate, desUpdate, SubTitle);

                })





                //update project data using modal

                function Update(PageIdUpdate, idUpdate, nameUpdate, desUpdate, SubTitle) {



                    if (PageIdUpdate.length == 0) {

                        toastr.error(' name is empty!');

                    }
                    else if (nameUpdate.length == 0) {

                        toastr.error(' name is empty!');

                    } else if (SubTitle == 0) {

                        toastr.error(' description is empty!');

                    } else if (desUpdate == 0) {

                        toastr.error(' description is empty!');

                    } else {
                        $('#ConfirmBtn').html(
                            "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                       

                        axios.post('/Update', {
                                id: idUpdate,
                                PageIdUpdate: PageIdUpdate,
                                name: nameUpdate,
                                description: desUpdate,
                                SubTitle: SubTitle,

                            
                        }).then(function(response) {

                            $('#ConfirmBtn').html("Update");

                            if (response.status = 200) {

                                if (response.data == 1) {
                                    $('#updateModal').modal('hide');
                                    toastr.success('Update Success.');
                                    getData();

                                } else {
                                    $('#updateModal').modal('hide');
                                    toastr.error('Update Failed');
                                    getData();

                                }
                            } else {
                                $('#updateModal').modal('hide');
                                toastr.error('Something Went Wrong');
                            }


                        }).catch(function(error) {

                            $('#updateModal').modal('hide');
                            toastr.error('Something Went Wrong');

                        });
                    }
                }







    </script>

@endsection
@endsection
