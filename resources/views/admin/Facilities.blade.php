@extends('admin.Layouts.app')

@section('content')

@include('admin.component.facilitiesSinglePage')
    
@include('admin.component.FacilitiesImage')
        

           


@endsection


        @section('script')

            <script>
                // Facilities Section


                getFacilitiesData();


                function getFacilitiesData() {


                    axios.get('/getFacilitiesData')
                        .then(function(response) {

                            if (response.status = 200) {

                                $('#mainDivFacilities').removeClass('d-none');
                                $('#loadDivFacilities').addClass('d-none');

                                $('#FacilitiesDataTable').DataTable().destroy();
                                $('#Facilities_table').empty();
                                var count = 1;
                                var dataJSON = response.data;
                                $.each(dataJSON, function(i, item) {
                                    $('<tr>').html(
                                        "<td>" + count++ + " </td>" +

                                        "<td class='text-break'>" + dataJSON[i].page_title + " </td>" +

                                        "<td class='text-break'>" + dataJSON[i].sub_title + " </td>" +

                                        "<td class='text-break'>" + dataJSON[i].title + " </td>" +

                                  

                                        "<td class='text-break'>" + dataJSON[i].description + " </td>" +

                                        "<td class='text-center'><a class='FacilitiesEditIcon' data-id=" +
                                        dataJSON[i].id +
                                        "><i class='fas fa-edit'></i></a> </td>" +

                                        "<td><a class='FacilitiesDeleteIcon' data-id=" + dataJSON[i].id +
                                        " ><i class='fas fa-trash-alt'></i></a> </td>"
                                    ).appendTo('#Facilities_table');
                                });

                                $(".FacilitiesDeleteIcon").click(function() {

                                    var id = $(this).data('id');
                                    $('#FacilitiesDeleteId').html(id);
                                    $('#deleteModalFacilities').modal('show');

                                })

                                $(".FacilitiesEditIcon").click(function() {

                                    var id = $(this).data('id');
                                    $('#FacilitiesEditId').html(id);

                                    $('#updateFacilitiesModal').modal('show');
                                    FacilitiesUpdateDetails(id);

                                })


                            } else {
                                $('#wrongDivFacilities').removeClass('d-none');
                                $('#loadDivFacilities').addClass('d-none');

                            }
                        }).catch(function(error) {

                            $('#wrongDivFacilities').removeClass('d-none');
                            $('#loadDivFacilities').addClass('d-none');
                        });


                }







                //add button modal show for add new entity

                $('#addbtnFacilities').click(function() {
                    $('#addFacilitiesModal').modal('show');
                });


                //Exclusive Add modal save button

                $('#FacilitiesAddConfirmBtn').click(function() {


                    var FacilitiesPage = $('#FacilitiesPage').val();
                    var FacilitiesName = $('#FacilitiesName').val();
                    var FacilitiesDes = $('#FacilitiesDes').val();
                    var FacilitiesSubTitle = $('#FacilitiesSubTitle').val();
                    FacilitiesAdd(FacilitiesPage, FacilitiesName, FacilitiesDes, FacilitiesSubTitle);

                })




                function FacilitiesAdd(FacilitiesPage, FacilitiesName, FacilitiesDes, FacilitiesSubTitle) {



                    if (FacilitiesPage.length == 0) {

                        toastr.error('Facilities Page Title is empty!');

                    }
                    else if (FacilitiesName.length == 0) {

                        toastr.error('Facilities Title is empty!');

                    } else if (FacilitiesDes == 0) {

                        toastr.error('Facilities Description is empty!');
                    } else if (FacilitiesSubTitle == 0) {

                        toastr.error('Facilities Sub Title is empty!');
                    } else {

                        $('#FacilitiesAddConfirmBtn').html(
                            "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                        axios.post('/FacilitiesAdd',{

                            FacilitiesPage: FacilitiesPage,
                                 name: FacilitiesName,
                                description: FacilitiesDes,
                                 FacilitiesSubTitle: FacilitiesSubTitle,
                    })
                        
                        .then(function(response) {

                            $('#FacilitiesAddConfirmBtn').html("Save");

                            if (response.status = 200) {
                                if (response.data == 1) {
                                    $('#addFacilitiesModal').modal('hide');
                                    toastr.success('Add New Success .');
                                    getFacilitiesData();
                                } else {
                                    $('#addFacilitiesModal').modal('hide');
                                    toastr.error('Add New Failed');
                                    getFacilitiesData();
                                }
                            } else {
                                $('#addFacilitiesModal').modal('hide');
                                toastr.error('Something Went Wrong');
                            }


                        }).catch(function(error) {

                            $('#addFacilitiesModal').modal('hide');
                            toastr.error('Something Went Wrong');

                        });

                    }

                }




                //  Facilities delete modal yes button

                $('#confirmDeleteFacilities').click(function() {
                    var id = $('#FacilitiesDeleteId').html();
                    DeleteDataFacilities(id);

                })


                //delete courses function

                function DeleteDataFacilities(id) {
                    $('#confirmDeleteFacilities').html(
                        "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                    axios.post('/FacilitiesDelete', {
                            id: id
                        })
                        .then(function(response) {
                            $('#confirmDeleteFacilities').html("Yes");

                            if (response.status == 200) {


                                if (response.data == 1) {
                                    $('#deleteModalFacilities').modal('hide');
                                    toastr.error('Delete Success.');
                                    getFacilitiesData();
                                } else {
                                    $('#deleteModalFacilities').modal('hide');
                                    toastr.error('Delete Failed');
                                    getFacilitiesData();
                                }

                            } else {
                                $('#deleteModalFacilities').modal('hide');
                                toastr.error('Something Went Wrong');
                            }

                        }).catch(function(error) {

                            $('#deleteModalFacilities').modal('hide');
                            toastr.error('Something Went Wrong');

                        });

                }




                //each courses  Details data show for edit

                function FacilitiesUpdateDetails(id) {

                    axios.post('/FacilitiesEdit', {
                            id: id
                        })
                        .then(function(response) {

                            if (response.status == 200) {


                                $('#loadDivFacilities').addClass('d-none');
                                $('#FacilitiesEditForm').removeClass('d-none');
                                var jsonData = response.data;
                                $('#FacilitiesPageIdUpdate').val(jsonData[0].page_title);
                                $('#FacilitiesNameIdUpdate').val(jsonData[0].title);
                                $('#FacilitiesSubTitleIdUpdate').val(jsonData[0].sub_title);
                                $('#FacilitiesDesIdUpdate').val(jsonData[0].description);
                                
                                
                            } else {

                                $('#loadDivFacilities').addClass('d-none');
                                $('#wrongDivFacilities').removeClass('d-none');
                            }

                        }).catch(function(error) {

                            $('#loadDivFacilities').addClass('d-none');
                            $('#wrongDivFacilities').removeClass('d-none');

                        });

                }


                




                //Facilities update modal save button

                $('#FacilitiesConfirmBtn').click(function() {
                    
                    var idUpdate = $('#FacilitiesEditId').html();
                    var FacilitiesPageIdUpdate = $('#FacilitiesPageIdUpdate').val();
                    var nameUpdate = $('#FacilitiesNameIdUpdate').val();
                    var desUpdate = $('#FacilitiesDesIdUpdate').val();
                    var SubTitle = $('#FacilitiesSubTitleIdUpdate').val();


                   FacilitiesUpdate(FacilitiesPageIdUpdate, idUpdate, nameUpdate, desUpdate, SubTitle);

                })





                //update project data using modal

                function FacilitiesUpdate(FacilitiesPageIdUpdate, idUpdate, nameUpdate, desUpdate, SubTitle) {



                    if (FacilitiesPageIdUpdate.length == 0) {

                        toastr.error('Facilities name is empty!');

                    }
                    else if (nameUpdate.length == 0) {

                        toastr.error('Facilities name is empty!');

                    } else if (SubTitle == 0) {

                        toastr.error('Facilities description is empty!');

                    } else if (desUpdate == 0) {

                        toastr.error('Facilities description is empty!');

                    } else {
                        $('#FacilitiesConfirmBtn').html(
                            "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                       

                        axios.post('/FacilitiesUpdate', {
                                id: idUpdate,
                                FacilitiesPageIdUpdate: FacilitiesPageIdUpdate,
                                name: nameUpdate,
                                description: desUpdate,
                                SubTitle: SubTitle,

                            
                        }).then(function(response) {

                            $('#FacilitiesConfirmBtn').html("Update");

                            if (response.status = 200) {

                                if (response.data == 1) {
                                    $('#updateFacilitiesModal').modal('hide');
                                    toastr.success('Update Success.');
                                    getFacilitiesData();

                                } else {
                                    $('#updateFacilitiesModal').modal('hide');
                                    toastr.error('Update Failed');
                                    getFacilitiesData();

                                }
                            } else {
                                $('#updateFacilitiesModal').modal('hide');
                                toastr.error('Something Went Wrong');
                            }


                        }).catch(function(error) {

                            $('#updateFacilitiesModal').modal('hide');
                            toastr.error('Something Went Wrong');

                        });
                    }
                }







// ---------------------
// Image Gallery
// ---------------------



getHomeimageData();
        

        function getHomeimageData() {


            axios.get('/getFacilitiesImageData')
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

                                "<td><img width='200px' height='80' class='table-img' src="+dataJSON[i]
                                .image + "> </td>" +

                                 "<td class='text-center'><a class='imageDeleteIcon' data-id=" + dataJSON[i].id +
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

            axios.post('/FacilitiesImageDelete', {
                    id: id
                })
                .then(function(response) {
                    console.log(response.data);
                    $('#confirmDeleteimage').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalimage').modal('hide');
                            toastr.error('Delete Success.');
                            getHomeimageData();
                        } else {
                            $('#deleteModalimage').modal('hide');
                            toastr.error('Delete Failed');
                            getHomeimageData();
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
$(document).ready(function () {
        $('.mdb-select3').material_select();
        });



 //add button modal show for add new entity

        $('#addbtnimage').click(function() {
            $('#addimageModal').modal('show');
        });


        //ResturantMenu Add modal save button

        $('#imageAddConfirmBtn').click(function() {
            var imageimg = $('#imageimg').prop('files')[0];
            var pageName = $('#pageName').val();
            imageAdd(imageimg,pageName);

        })


        axios.get('/getFacilitiesData')
            .then(function(response) {
                var dataJSON = response.data;
                $('#pageName').empty();
                $('#pageName').append(`<option disabled selected>Select Product Category</option>`);
                $.each(dataJSON, function(i, item) {

                    $('#pageName').append(`<option value="${dataJSON[i].id}"> ${dataJSON[i].page_title} </option>`);

                });

            }).catch(function(error) {

                alert("There are no Category")

            });



        $('#imageimg').change(function() {
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function(event) {
                var ImgSource = event.target.result;
                $('#addimagepreviewimage').attr('src', ImgSource)
            }
        })

        //ResturantMenu Add Method


        function imageAdd(imageimg, pageName) {

                $('#imageAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                   
                    my_data = [{
                        pageName: pageName,
                        
                    }

                ];
                var formData = new FormData();
                formData.append('data', JSON.stringify(my_data));
                formData.append('photo', imageimg);

                axios.post('/FacilitiesImageAdd',formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(function(response) {
                   
                    $('#imageAddConfirmBtn').html("Save");

                    if (response.status = 200) {
                        if (response.data == 1) {
                            $('#addimageModal').modal('hide');
                            toastr.success('Add New Success .');
                              getHomeimageData();
                        } else {
                            $('#addimageModal').modal('hide');
                            toastr.error('Add New Failed');
                              getHomeimageData();
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


















            </script>




        @endsection
