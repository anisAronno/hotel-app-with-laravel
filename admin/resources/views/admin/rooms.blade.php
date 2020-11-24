@extends('admin.Layouts.app')

@section('content')

    @include('admin.component.RoomSingle')
    @include('admin.component.RoomImage')
    @include('admin.component.RoomFacility')



@endsection

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

        $('#addRoomModalbtn').click(function() {
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
                        console.log(response.data);

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

        $('#RoomConfirmBtn').click(function() {

            var idUpdate = $('#RoomEditId').html();
            var RoomTitleIdUpdate = $('#RoomTitleIdUpdate').val();
            var RoomPriceIdUpdate = $('#RoomPriceIdUpdate').val();
            var RoomLenghtIdUpdate = $('#RoomLenghtIdUpdate').val();
            var RoomViewIdUpdate = $('#RoomViewIdUpdate').val();
            var RoomAdultsIdUpdate = $('#RoomAdultsIdUpdate').val();
            var RoomChildrenIdUpdate = $('#RoomChildrenIdUpdate').val();
            var RoomBedIdUpdate = $('#RoomBedIdUpdate').val();


            RoomUpdate(idUpdate, RoomTitleIdUpdate, RoomPriceIdUpdate, RoomLenghtIdUpdate, RoomViewIdUpdate,
                RoomAdultsIdUpdate, RoomChildrenIdUpdate, RoomBedIdUpdate);

        })





        //update project data using modal

        function RoomUpdate(idUpdate, RoomTitleIdUpdate, RoomPriceIdUpdate, RoomLenghtIdUpdate, RoomViewIdUpdate,
            RoomAdultsIdUpdate, RoomChildrenIdUpdate, RoomBedIdUpdate) {



            if (RoomTitleIdUpdate.length == 0) {

                toastr.error('Room name is empty!');

            } else if (RoomPriceIdUpdate.length == 0) {

                toastr.error('Room name is empty!');

            } else if (RoomLenghtIdUpdate.length == 0) {

                toastr.error('Room description is empty!');

            } else if (RoomViewIdUpdate.length == 0) {

                toastr.error('Room description is empty!');

            } else if (RoomAdultsIdUpdate.length == 0) {

                toastr.error('Room description is empty!');

            } else if (RoomChildrenIdUpdate.length == 0) {

                toastr.error('Room description is empty!');

            } else if (RoomBedIdUpdate.length == 0) {

                toastr.error('Room description is empty!');

            } else {
                $('#RoomConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation



                axios.post('/RoomUpdate', {
                    id: idUpdate,
                    RoomTitleIdUpdate: RoomTitleIdUpdate,
                    RoomPriceIdUpdate: RoomPriceIdUpdate,
                    RoomLenghtIdUpdate: RoomLenghtIdUpdate,
                    RoomViewIdUpdate: RoomViewIdUpdate,
                    RoomAdultsIdUpdate: RoomAdultsIdUpdate,
                    RoomChildrenIdUpdate: RoomChildrenIdUpdate,
                    RoomBedIdUpdate: RoomBedIdUpdate,


                }).then(function(response) {

                    $('#RoomConfirmBtn').html("Update");

                    if (response.status = 200) {

                        if (response.data == 1) {
                            $('#updateRoomModal').modal('hide');
                            toastr.success('Update Success.');
                            getRoomData();

                        } else {
                            $('#updateRoomModal').modal('hide');
                            toastr.error('Update Failed');
                            getRoomData();

                        }
                    } else {
                        $('#updateRoomModal').modal('hide');
                        toastr.error('Something Went Wrong');
                    }


                }).catch(function(error) {

                    $('#updateRoomModal').modal('hide');
                    toastr.error('Something Went Wrong');

                });
            }
        }




        getRoomimageData();


        function getRoomimageData() {


            axios.get('/getRoomImageData')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivimage').removeClass('d-none');
                        $('#loadDivimage').addClass('d-none');

                        $('#imageDataTable').DataTable().destroy();
                        $('#image_table').empty();
                        var count = 1;
                        var dataJSON = response.data;

                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(
                                "<td>" + count++ + " </td>" +

                                "<td><img width='200px' height='80' class='table-img' src=" + dataJSON[i]
                                .images + "> </td>" +

                                "<td class='text-center'><a class='imageDeleteIcon' data-id=" + dataJSON[i]
                                .id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#image_table');
                        });

                        $(".imageDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#imageDeleteId').html(id);
                            $('#deleteModalimage').modal('show');

                        })

                    } else {
                        $('#wrongDivimage').removeClass('d-none');
                        $('#loadDivimage').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivimage').removeClass('d-none');
                    $('#loadDivimage').addClass('d-none');
                });


        }





        //  image delete modal yes button

        $('#confirmDeleteimage').click(function() {
            var id = $('#imageDeleteId').html();
            // var id = $(this).data('id');
            DeleteDataimage(id);

        })


        //delete courses function

        function DeleteDataimage(id) {
            $('#confirmDeleteimage').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/RoomImageDelete', {
                    id: id
                })
                .then(function(response) {
                    console.log(response.data);
                    $('#confirmDeleteimage').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalimage').modal('hide');
                            toastr.error('Delete Success.');
                            getRoomimageData();
                        } else {
                            $('#deleteModalimage').modal('hide');
                            toastr.error('Delete Failed');
                            getRoomimageData();
                        }

                    } else {
                        $('#deleteModalimage').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalimage').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }






        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select4').material_select();
        });



        //add button modal show for add new entity

        $('#addRoombtnimage').click(function() {
            $('#addimageModal').modal('show');
        });


        //ResturantMenu Add modal save button

        $('#RoomImageAddConfirmBtn').click(function() {
            var imageimgRoom = $('#imageimgRoom').prop('files')[0];
            var RoompageName = $('#RoompageName').val();
            imageAdd(imageimgRoom, RoompageName);

        })


        axios.get('/getRoomData')
            .then(function(response) {
                var dataJSON = response.data;
                $('#RoompageName').empty();
                $('#RoompageName').append(`<option disabled selected>Select Room</option>`);
                $.each(dataJSON, function(i, item) {

                    $('#RoompageName').append(
                        `<option value="${dataJSON[i].id}"> ${dataJSON[i].title} </option>`);

                });

            }).catch(function(error) {

                alert("There are no Category")

            });



        $('#imageimgRoom').change(function() {
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function(event) {
                var ImgSource = event.target.result;
                $('#addimagepreviewimage').attr('src', ImgSource)
            }
        })

        //ResturantMenu Add Method


        function imageAdd(imageimgRoom, RoompageName) {

            $('#RoomImageAddConfirmBtn').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            my_data = [{
                    RoompageName: RoompageName,

                }

            ];
            var formData = new FormData();
            formData.append('data', JSON.stringify(my_data));
            formData.append('photo', imageimgRoom);

            axios.post('/RoomImageAdd', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(function(response) {

                $('#RoomImageAddConfirmBtn').html("Save");

                if (response.status = 200) {
                    if (response.data == 1) {
                        $('#addimageModal').modal('hide');
                        toastr.success('Add New Success .');
                        getRoomimageData();
                    } else {
                        $('#addimageModal').modal('hide');
                        toastr.error('Add New Failed');
                        getRoomimageData();
                    }
                } else {
                    $('#addimageModal').modal('hide');
                    toastr.error('Something Went Wrong');
                }


            }).catch(function(error) {

                $('#addimageModal').modal('hide');
                toastr.error('Something Went Wrong');

            });



        }







        var i = 0;

        function addInput() {
            i++;
            var html = "";
            console.log(i);
            html += '<tr id="rowid' + i + '">';
            html += '<td>' + i + ' </td>';
            html += '<td> <input name="titleInput[]" type="text" class="form-control" id="titleInput[]"> </td>';
            html += '<td> <button onclick="removeInput(' + i +
                ');" class="btn  btn-warning btn-sm p-o"><i class="fas fa-minus-circle fa-2x"></i></button></td>';
            html += '</tr>';

            $('#append_tbody').append(html);
        }


        function removeInput(row_id) {
            console.log(row_id);
            $('#rowid' + row_id).remove();
        }



        // get Room facilty Data


        getRoomFacilityData();


        function getRoomFacilityData() {


            axios.get('/getRoomFacilityData')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivFacility').removeClass('d-none');
                        $('#loadDivFacility').addClass('d-none');

                        $('#FacilityDataTable').DataTable().destroy();
                        $('#Facility_table').empty();
                        var count = 1;
                        var dataJSON = response.data;

                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(
                                "<td>" + count++ + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].category_id + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].room_id + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].title + " </td>" +



                                "<td class='text-center'><a class='facilityDeleteIcon' data-id=" + dataJSON[
                                    i]
                                .id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#Facility_table');
                        });

                        $(".facilityDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#FacilityDeleteId').html(id);
                            $('#deleteModalFacility').modal('show');

                        })

                    } else {
                        $('#wrongDivFacility').removeClass('d-none');
                        $('#loadDivFacility').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivFacility').removeClass('d-none');
                    $('#loadDivFacility').addClass('d-none');
                });


        }





        //delete  Room Facility


        //  image delete modal yes button

        $('#confirmDeleteFacility').click(function() {
            var id = $('#FacilityDeleteId').html();

            DeleteDataFacility(id);

        })


        function DeleteDataFacility(id) {
            console.log(id);
            $('#confirmDeleteFacility').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/RoomFacilityDelete', {
                    id: id
                })
                .then(function(response) {
                    console.log(response.data);
                    $('#confirmDeleteFacility').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalFacility').modal('hide');
                            toastr.error('Delete Success.');
                            getRoomFacilityData();
                        } else {
                            $('#deleteModalFacility').modal('hide');
                            toastr.error('Delete Failed');
                            getRoomFacilityData();
                        }

                    } else {
                        $('#deleteModalFacility').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalFacility').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }


















        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select5').material_select();
        });




        // Room Facility Add


        $('#addRoombtnFacility').click(function() {
            $('#addFacilityModal').modal('show');
        });


        //ResturantMenu Add modal save button

        $('#RoomFacilityAddConfirmBtn').click(function() {
            var FacilitRoomPageName = $('#FacilitRoomPageName').val();
            var facilityCategoryItem = $('#facilityCategoryItem').val();
           
            var titleInput = $("input[name='titleInput[]']").map(function(){return $(this).val();}).get();
            console.log(titleInput);

            FacilityItemAdd(FacilitRoomPageName, facilityCategoryItem, titleInput);

        })


        axios.get('/getRoomData')
            .then(function(response) {
                var dataJSON = response.data;
                $('#FacilitRoomPageName').empty();
                $('#FacilitRoomPageName').append(`<option disabled selected>Select Room</option>`);
                $.each(dataJSON, function(i, item) {

                    $('#FacilitRoomPageName').append(
                        `<option value="${dataJSON[i].id}"> ${dataJSON[i].title} </option>`);

                });

            }).catch(function(error) {

                alert("There are no Facilit Room Page Name")

            });

        function FacilityItemAdd(FacilitRoomPageName, facilityCategoryItem, titleInput) {

            $('#RoomFacilityAddConfirmBtn').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation




            axios.post('/RoomFacilityAdd', {
                FacilitRoomPageName: FacilitRoomPageName,
                facilityCategoryItem: facilityCategoryItem,
                titleInput: titleInput,

            }).then(function(response) {
                console.log(response.data);

                $('#RoomFacilityAddConfirmBtn').html("Save");

                if (response.status = 200) {
                    if (response.data == 1) {
                        $('#addFacilityModal').modal('hide');
                        toastr.success('Add New Success .');
                        getRoomFacilityData();
                    } else {
                        $('#addFacilityModal').modal('hide');
                        toastr.error('Add New Failed');
                        getRoomFacilityData();
                    }
                } else {
                    $('#addFacilityModal').modal('hide');
                    toastr.error('Something Went Wrong');
                }


            }).catch(function(error) {

                $('#addFacilityModal').modal('hide');
                toastr.error('Something Went Wrong');

            });



        }

    </script>


@endsection
