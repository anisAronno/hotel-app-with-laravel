@extends('admin.Layouts.app')
@section('title', 'Resturant')
@section('content')

@include('admin.component.ResturantAbout')
@include('admin.component.ResturantImage')
@include('admin.component.ResturantMenu')

@endsection


@section('script')

<script>

$('#submitTitle').click(function() {
            var title = $('#addTitle').val();
            addTitle(title);
        })

        function addTitle(title) {
            if (title.length == 0) {
                toastr.error('title is empty!');

            } else {
                $('#submitTitle').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addResturantTitle', {
                        title: title
                    })
                    .then(function(response) {
                        $('#submitTitle').html("Update");
                        if (response.status = 200) {
                            if (response.data == 1) {
                                toastr.success('Updated Success .');


                            } else {
                                toastr.error('Updated Failed');
                            }
                        } else {
                            toastr.error('Something Went Wrong');
                        }
                    }).catch(function(error) {
                        toastr.error('Something Went Wrong');
                    });
            }
        }







        // Description Add


        $('#submitDescription').click(function() {
            var description = $('#addDescription').val();


            addDescription(description);
        })

        function addDescription(description) {
            if (description.length == 0) {
                toastr.error('Description is empty!');

            } else {
                $('#submitDescription').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addResturantDescription', {
                        description: description
                    })
                    .then(function(response) {

                        $('#submitDescription').html("Update");
                        if (response.status = 200) {
                            if (response.data == 1) {
                                toastr.success('Updated Success .');


                            } else {
                                toastr.error('Updated Failed');
                            }
                        } else {
                            toastr.error('Something Went Wrong');
                        }
                    }).catch(function(error) {
                        toastr.error('Something Went Wrong');
                    });
            }
        }


        // Video Add


        $('#submitVideoURL').click(function() {
            var addVideo = $('#addVideo').val();


            addResturantVideo(addVideo);
        })

        function addResturantVideo(addVideo) {
            if (addVideo.length == 0) {
                toastr.error('Video URL is empty!');

            } else {
                $('#submitVideoURL').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addResturantVideo', {
                        video: addVideo
                    })
                    .then(function(response) {
                        $('#submitVideoURL').html("Update");
                        if (response.status = 200) {
                            if (response.data == 1) {
                                toastr.success('Updated Success .');
                            } else {
                                toastr.error('Updated Failed');
                            }
                        } else {
                            toastr.error('Something Went Wrong');
                        }
                    }).catch(function(error) {
                        toastr.error('Something Went Wrong');
                    });
            }
        }






// ---------------------
// Image Gallery
// ---------------------



getHomeimageData();
        

        function getHomeimageData() {


            axios.get('/getresturantImage')
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

            axios.post('/ResturantAboutImageDelete', {
                    id: id
                })
                .then(function(response) {
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







 //add button modal show for add new entity

        $('#addbtnimage').click(function() {
            $('#addimageModal').modal('show');
        });


        //ResturantMenu Add modal save button

        $('#imageAddConfirmBtn').click(function() {
            var imageimg = $('#imageimg').prop('files')[0];
            imageAdd(imageimg);

        })




        $('#imageimg').change(function() {
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function(event) {
                var ImgSource = event.target.result;
                $('#addimagepreviewimage').attr('src', ImgSource)
            }
        })

        //ResturantMenu Add Method


        function imageAdd(imageimg) {

                $('#imageAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                var formData = new FormData();
                formData.append('photo', imageimg);

                axios.post('/ResturantAboutImageAdd', formData, {
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






        getResturantMenuData();
        // for ResturantMenu table

        function getResturantMenuData() {


            axios.get('/getResturantMenudata')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivResturantMenu').removeClass('d-none');
                        $('#loadDivResturantMenu').addClass('d-none');

                        $('#ResturantMenuDataTable').DataTable().destroy();
                        $('#ResturantMenu_table').empty();
                        var count = 1;
                        var dataJSON = response.data;
                       
                                   

                        $.each(dataJSON, function(i, item) {

                                var categoryName="";
                                if (dataJSON[i].category == 1) {
                                    categoryName="Basic";
                                } else if(dataJSON[i].category == 2){
                                    categoryName="Set Menu";
                                    
                                }else{
                                    categoryName="Party Menu";
                                }

                            $('<tr>').html(
                                "<td>" + count++ + " </td>" +

                                "<td>" + dataJSON[i].title + " </td>" +

                                "<td>" + dataJSON[i].description + " </td>" +

                                "<td>" + categoryName + " </td>" +

                                "<td class='text-center'><a class='ResturantMenuEditIcon ' data-id=" + dataJSON[i].id +
                                "><i class='fas fa-edit'></i></a> </td>" 

                                 + "<td><a class='ResturantMenuDeleteIcon' data-id=" + dataJSON[i].id +
                                    " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#ResturantMenu_table');
                        });

                        $(".ResturantMenuDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#ResturantMenuDeleteId').html(id);
                            $('#deleteModalResturantMenu').modal('show');

                        })

                        $(".ResturantMenuEditIcon").click(function() {

                            var id = $(this).data('id');
                            $('#ResturantMenuESEditId').html(id);

                            $('#updateResturantMenuModal').modal('show');
                            ResturantmenuUpdateDetails(id);

                        })


                    } else {
                        $('#wrongDivResturantMenu').removeClass('d-none');
                        $('#loadDivResturantMenu').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivResturantMenu').removeClass('d-none');
                    $('#loadDivResturantMenu').addClass('d-none');
                });


        }



        //add button modal show for add new entity

        $('#addbtnResturantMenu').click(function() {
            $('#addResturantMenuModal').modal('show');
        });

     
        // Material Select Initialization
        $(document).ready(function () {
        $('.mdb-select').material_select();
        });

        //ResturantMenu Add modal save button

        $('#ResturantMenuAddConfirmBtn').click(function() {
            var ResturantMenu_title = $('#ResturantMenuTitle').val();
            var ResturantMenu_description = $('#ResturantMenuDescription').val();
            var ResturantMenu_categories = $('#ResturantMenuCategories').val();
            ResturantMenuAdd(ResturantMenu_title, ResturantMenu_description, ResturantMenu_categories);

        })

        function ResturantMenuAdd(ResturantMenu_title, ResturantMenu_description, ResturantMenu_categories) {

            if (ResturantMenu_title.length == 0) {

                toastr.error('Title is empty!');

            } else if (ResturantMenu_description == 0) {

                toastr.error('description is empty!');
            }else if (ResturantMenu_categories == 0) {

                toastr.error('description is empty!');
            } else {

                $('#ResturantMenuAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                axios.post('/ResturantMenuAdd', {
                    ResturantMenu_title: ResturantMenu_title,
                    ResturantMenu_description: ResturantMenu_description,
                    ResturantMenu_categories: ResturantMenu_categories,
                    })

                .then(function(response) {
                    console.log(response.data);
                    $('#ResturantMenuAddConfirmBtn').html("Save");

                    if (response.status = 200) {
                        if (response.data == 1) {
                            $('#addResturantMenuModal').modal('hide');
                            toastr.success('Add New Success .');
                            getResturantMenuData();
                        } else {
                            $('#addResturantMenuModal').modal('hide');
                            toastr.error('Add New Failed');
                            getResturantMenuData();
                        }
                    } else {
                        $('#addResturantMenuModal').modal('hide');
                        toastr.error('Something Went Wrong');
                    }


                }).catch(function(error) {

                    $('#addResturantMenuModal').modal('hide');
                    toastr.error('Something Went Wrong');

                });

            }

        }




//  ResturantMenu  delete modal yes button

        $('#confirmDeleteResturantMenu').click(function() {
            var id = $('#ResturantMenuDeleteId').html();
            // var id = $(this).data('id');
            DeleteDataResturantmenu(id);

        })


        //delete ResturantMenu   function

        function DeleteDataResturantmenu(id) {
            $('#confirmDeleteResturantMenu').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/ResturantmenuDelete', {
                    id: id
                })
                .then(function(response) {
                    $('#confirmDeleteResturantMenu').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalResturantMenu').modal('hide');
                            toastr.error('Delete Success.');
                            getResturantMenuData();
                        } else {
                            $('#deleteModalResturantMenu').modal('hide');
                            toastr.error('Delete Failed');
                            getResturantMenuData();
                        }

                    } else {
                        $('#deleteModalResturantMenu').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalResturantMenu').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }





//Get  Update Excludive Feature Data

        // Material Select Initialization
        $(document).ready(function () {
        $('.mdb-select2').material_select();
        });




function ResturantmenuUpdateDetails(id) {

axios.post('/getResturantmenuEditData', {
        id: id
    })
    .then(function(response) {
       
        if (response.status == 200) {

           
            $('#loadDivResturantmenu').addClass('d-none');
            $('#ResturantMenuEditForm').removeClass('d-none');
            var jsonData = response.data;
            
            $('#ResturantmenudTitleIdUpdate').val(jsonData[0].title);
            $('#ResturantmenudDesIdUpdate').val(jsonData[0].description);
            $('#ResturantmenudCatIdUpdate').val(jsonData[0].category);
        } else {

            $('#loadDivResturantmenu').addClass('d-none');
            $('#wrongDivResturantmenu').removeClass('d-none');
        }

    }).catch(function(error) {

        $('#loadDivResturantmenu').addClass('d-none');
        $('#wrongDivResturantmenu').removeClass('d-none');

    });

}






//Featured Specials update modal save button

 $('#ResturantMenuUpdateConfirmBtn').click(function() {


var ResturantMenuidUpdate = $('#ResturantMenuESEditId').html();
var ResturantMenu_title = $('#ResturantmenudTitleIdUpdate').val();
var ResturantMenu_description = $('#ResturantmenudDesIdUpdate').val();
var ResturantMenu_category = $('#ResturantmenudCatIdUpdate').val();



ResturantMenuUpdate(ResturantMenuidUpdate, ResturantMenu_title, ResturantMenu_description, ResturantMenu_category);

})





//update Special Feature data using modal

function ResturantMenuUpdate(ResturantMenuidUpdate, ResturantMenu_title, ResturantMenu_description, ResturantMenu_category) {



if (ResturantMenu_title.length == 0) {

    toastr.error('Title  is empty!');

} else if (ResturantMenu_description == 0) {

    toastr.error(' description is empty!');

}else if (ResturantMenu_category == 0) {

    toastr.error(' description is empty!');

} else {
    $('#ResturantMenuUpdateConfirmBtn').html(
        "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

    axios.post('/ResturantMenuUpdate', {
            id: ResturantMenuidUpdate,
            ResturantMenu_title: ResturantMenu_title,
            ResturantMenu_description: ResturantMenu_description,
            ResturantMenu_category: ResturantMenu_category
        })


        .then(function(response) {
            console.log(response.data);
            $('#ResturantMenuUpdateConfirmBtn').html("Update");

            if (response.status = 200) {
                if (response.data == 1) {
                    $('#updateResturantMenuModal').modal('hide');
                    toastr.success('Update Success.');
                    getResturantMenuData();

                } else {
                    $('#updateResturantMenuModal').modal('hide');
                    toastr.error('Update Failed');
                    getResturantMenuData();

                }
            } else {
                $('#updateResturantMenuModal').modal('hide');
                toastr.error('Something Went Wrong');
            }


        }).catch(function(error) {

            $('#updateResturantMenuModal').modal('hide');
            toastr.error('Something Went Wrong');

        });
}
}
















</script>

@endsection