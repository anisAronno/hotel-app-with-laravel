@extends('admin.Layouts.app')
@section('title', 'Home Setting')

@section('content')
    <div class="container ">
        
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5 border border-dark">
                <h2 class="text-center p-3 mb-3 border-bottom border-dark">About Page  Settings</h2>

                <table class="table table-striped table-bordered mt-2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Input</th>
                            <th class="th-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>About Page Image:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2 text-center">
                                    <label for="addImage" class="sr-only">Image</label>
                                    <input id="addImage" required type="file" class="form-control ">
                                    <hr>
                                    <img id="addimagepreview" style="width: 200px; height:120px !important;"
                                        class="imgPreview mt-3 border rounded" src="<?php if ($results) {
                                                echo $results->image;
                                            } ?>" />

                                </div>
                            </td>
                            <td>
                                <button id="submitImage" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>About Title:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addTitle" class="sr-only">Title</label>

                                    <textarea type="text" required name="" id="addTitle" class="form-control" cols="30"
                                        rows="5"><?php if ($results) {
                                           echo $results->title;
                                       } ?></textarea>

                                </div>
                            </td>
                            <td>
                                <button id="submitTitle" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>About Description:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addDescription" class="sr-only">Title</label>
                                    <textarea required name="" id="addDescription" class="form-control" cols="30" rows="10"><?php if ($results) {
                                            echo $results->description;
                                        } ?></textarea>

                                </div>
                            </td>
                            <td>
                                <button id="submitDescription" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>Facebook Likes:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addFbLike" class="sr-only">FaceBook Likes</label>
                                    <input type="number" required name="" id="addFbLike" class="form-control" value="<?php if ($results) {
                                            echo $results->facebook;
                                        } ?>">
                                </div>
                            </td>
                            <td>
                                <button id="submitFbLike" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>Twetter Followers:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addTwitter" class="sr-only">Twetter Followers</label>
                                    <input type="number" required name="" id="addTwitter" class="form-control" value="<?php if ($results) {
                                            echo $results->twitter;
                                        } ?>">
                                </div>
                            </td>
                            <td>
                                <button id="submitTwitter" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>Youtube Subscribers:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addYoutube" class="sr-only">Youtube Subscribers</label>
                                    <input type="number" required name="" id="addYoutube" class="form-control" value="<?php if ($results) {
                                            echo $results->youtube;
                                        } ?>">
                                </div>
                            </td>
                            <td>
                                <button id="submitYoutube" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>LinkedIn Connections:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addLinkedIn" class="sr-only">LinkedIn Connectionss</label>
                                    <input type="number" required name="" id="addLinkedIn" class="form-control" value="<?php if ($results) {
                                            echo $results->linkedin;
                                        } ?>">
                                </div>
                            </td>
                            <td>
                                <button id="submitLinkedIn" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group mb-2">
                                    <h3>Booking Review:</h3>
                                </div>
                            </td>
                            <td>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="addBooking" class="sr-only">Booking Review</label>
                                    <input type="number" required name="" id="addBooking" class="form-control" value="<?php if ($results) {
                                            echo $results->review;
                                        } ?>">
                                </div>
                            </td>
                            <td>
                                <button id="submitBooking" type="submit" class="btn btn-primary mb-2">Update</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>













    <div class="row mt-5">
        <div class="col-md-10 offset-md-1 border border-dark">
            <h2 class="text-center p-3 border-bottom border-dark">Extra Services Section</h2>
            <div id="mainDivProjects" class="container-fluid d-none">
                <div class="row">
                    <div class="col-md-12 p-2">
                        <button id="addbtnAbout" class="btn btn-sm btn-danger my-3">Add New</button>
                        <table id="SliderDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Sl.</th>
                                    <th class="th-sm">Title</th>
                                    <th class="th-sm">Description</th>
                                    <th class="th-sm">Edit</th>
                                    <th class="th-sm">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="Slider_table">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="loadDivProjects" class="container">
                <div class="row">
                    <div class="col-md-12 p-5 text-center">
                        <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

                    </div>
                </div>
            </div>
            <div id="wrongDivProjects" class="container d-none">
                <div class="row">
                    <div class="col-md-12 p-5 text-center">
                        <h3>Something Went Wrong!</h3>
                    </div>
                </div>
            </div>



            <!-- About add -->
            <div class="modal fade" id="addAboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title ml-5">Add New Slider</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body  text-center">
                            <div class="container">
                                <div class="row">

                                    <input id="aboutTitle" type="text" id="" class="form-control mb-3" placeholder="Title">

                                    <textarea id="aboutDescription" type="text" id="" class="form-control mb-3"
                                        placeholder=" Description" cols="30" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                            <button id="aboutAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About add -->


            <!-- Modal About Delete -->
            <div class="modal fade" id="deleteModalabout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body p-3 text-center">
                            <h5 class="mt-4">Do you want to Delete</h5>
                            <h5 id="aboutDeleteId" class="mt-4 d-none "></h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                            <button data-id="" id="confirmDeleteAbout" type="button"
                                class="btn btn-sm btn-danger">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal About Delete -->




            <!-- About update -->
            <div class="modal fade" id="updateAboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update About Extra Services</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body  text-center">
                            <div id="SliderEditForm" class="container d-none ">
                                <h5 id="AboutESEditId" class="mt-4 d-none"></h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="AboutESTitleIdUpdate" type="text" id="" class="form-control mb-3"
                                            placeholder="Title">
                                        <textarea id="AboutESDesIdUpdate" type="text" id="" class="form-control mb-3"
                                            placeholder="Description" cols="30" rows="5"></textarea>

                                    </div>

                                </div>
                            </div>
                            <img id="projectLoader" class="loding-icon m-5 d-none" src="{{ asset('loader.svg') }}" alt="">
                            <h3 id="projectwrongLoader" class="d-none">Something Went Wrong!</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                            <button id="AboutESupdateConfirmBtn" type="button"
                                class="btn  btn-sm  btn-danger">Update</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>










@endsection

@section('script')
    <script>
        //Image Add  

        $('#submitImage').click(function() {
            var image = $('#addImage').prop('files')[0];
            addAboutImage(image);
        })

        $('#addImage').change(function() {
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function(event) {
                var ImgSource = event.target.result;
                $('#addimagepreview').attr('src', ImgSource)
            }
        })


        function addAboutImage(image) {


            $('#submitImage').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            console.log(image);
            var formData = new FormData();
            formData.append('photo', image);

            axios.post('/addAboutImage', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(function(response) {
                console.log(response.data);

                $('#submitImage').html("Update");

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


        // Title Add


        $('#submitTitle').click(function() {
            var title = $('#addTitle').val();
            console.log(title);

            addTitle(title);
        })

        function addTitle(title) {
            if (title.length == 0) {
                toastr.error('title is empty!');

            } else {
                $('#submitTitle').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addAboutTitle', {
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
            console.log(description);

            addDescription(description);
        })

        function addDescription(description) {
            if (description.length == 0) {
                toastr.error('Description is empty!');

            } else {
                $('#submitDescription').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addDescription', {
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







        // Facebook Like Add


        $('#submitFbLike').click(function() {
            var facebook = $('#addFbLike').val();
            console.log(facebook);

            addFbLike(facebook);
        })

        function addFbLike(facebook) {
            if (facebook.length == 0) {
                toastr.error('Facebook is empty!');

            } else {
                $('#submitFbLike').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addFbLike', {
                        facebook: facebook
                    })
                    .then(function(response) {
                        $('#submitFbLike').html("Update");
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







        // twitter Like Add


        $('#submitTwitter').click(function() {
            var twitter = $('#addTwitter').val();
            console.log(twitter);

            addTwitter(twitter);
        })

        function addTwitter(twitter) {
            if (twitter.length == 0) {
                toastr.error('Twetter is empty!');

            } else {
                $('#submitTwitter').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addTwitter', {
                        twitter: twitter
                    })
                    .then(function(response) {
                        $('#submitTwitter').html("Update");
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





        // youtube Like Add


        $('#submitYoutube').click(function() {
            var youtube = $('#addYoutube').val();
            console.log(youtube);

            addYoutube(youtube);
        })

        function addYoutube(youtube) {
            if (youtube.length == 0) {
                toastr.error('Youtube is empty!');

            } else {
                $('#submitYoutube').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addYoutube', {
                        youtube: youtube
                    })
                    .then(function(response) {
                        $('#submitYoutube').html("Update");
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



        // LinkedIn Connections Like Add


        $('#submitLinkedIn').click(function() {
            var linkedin = $('#addLinkedIn').val();
            console.log(linkedin);

            addLinkedIn(linkedin);
        })

        function addLinkedIn(linkedin) {
            if (linkedin.length == 0) {
                toastr.error('Linked In is empty!');

            } else {
                $('#submitLinkedIn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addLinkedIn', {
                        linkedin: linkedin
                    })
                    .then(function(response) {
                        $('#submitLinkedIn').html("Update");
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

        // Booking Review Like Add


        $('#submitBooking').click(function() {
            var review = $('#addBooking').val();
            console.log(review);

            addBooking(review);
        })

        function addBooking(review) {
            if (review.length == 0) {
                toastr.error('Booking Review is empty!');

            } else {
                $('#submitBooking').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
                axios.post('/addBooking', {
                        review: review
                    })
                    .then(function(response) {
                        $('#submitBooking').html("Update");
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















        getAboutESdata();
        // for Slider table

        function  getAboutESdata(){


            axios.get('/getESData')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivProjects').removeClass('d-none');
                        $('#loadDivProjects').addClass('d-none');

                        $('#SliderDataTable').DataTable().destroy();
                        $('#Slider_table').empty();
                        var count = 1;
                        var dataJSON = response.data;
                        console.log(dataJSON);
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(
                                "<td>" + count++ + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].title + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].description + " </td>" +

                                "<td><a class='SliderEditIcon' data-id=" + dataJSON[i].id +
                                "><i class='fas fa-edit'></i></a> </td>" +

                                "<td><a class='SliderDeleteIcon' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#Slider_table');
                        });


                        //Projects click on delete icon

                        $(".SliderDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#aboutDeleteId').html(id);
                            $('#deleteModalabout').modal('show');

                        })



                        //Project edit icon click

                        $(".SliderEditIcon").click(function() {

                            var id = $(this).data('id');
                            $('#AboutESEditId').html(id);

                            $('#updateAboutModal').modal('show');
                            AboutUpdateDetails(id);

                        })



                    } else {
                        $('#wrongDivProjects').removeClass('d-none');
                        $('#loadDivProjects').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivProjects').removeClass('d-none');
                    $('#loadDivProjects').addClass('d-none');
                });


        }




        //add button modal show for add new entity

        $('#addbtnAbout').click(function() {
            $('#addAboutModal').modal('show');
        });


        //Slider Add modal save button

        $('#aboutAddConfirmBtn').click(function() {
            var title = $('#aboutTitle').val();
            var description = $('#aboutDescription').val();
            aboutAdd(title, description);

        })

        function aboutAdd(title, description) {

            if (title.length == 0) {

                toastr.error('Title is empty!');

            } else if (description == 0) {

                toastr.error('description is empty!');
            } else {

                $('#aboutAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

                axios.post('/addES', {
                    title: title,
                    description:description,
                    })

                .then(function(response) {
                    console.log(response.data);
                    $('#aboutAddConfirmBtn').html("Save");

                    if (response.status = 200) {
                        if (response.data == 1) {
                            $('#addAboutModal').modal('hide');
                            toastr.success('Add New Success .');
                            getAboutESdata();
                        } else {
                            $('#addAboutModal').modal('hide');
                            toastr.error('Add New Failed');
                            getAboutESdata();
                        }
                    } else {
                        $('#addAboutModal').modal('hide');
                        toastr.error('Something Went Wrong');
                    }


                }).catch(function(error) {

                    $('#addAboutModal').modal('hide');
                    toastr.error('Something Went Wrong');

                });

            }

        }





        //  slider delete modal yes button

        $('#confirmDeleteAbout').click(function() {
            var id = $('#aboutDeleteId').html();
            // var id = $(this).data('id');
            DeleteDataSlider(id);

        })


        //delete About Extra Servicess function

        function DeleteDataSlider(id) {
            $('#confirmDeleteAbout').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/aboutESdelete', {
                    id: id
                })
                .then(function(response) {
                    $('#confirmDeleteAbout').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalabout').modal('hide');
                            toastr.error('Delete Success.');
                            getAboutESdata();
                        } else {
                            $('#deleteModalabout').modal('hide');
                            toastr.error('Delete Failed');
                            getAboutESdata();
                        }

                    } else {
                        $('#deleteModalabout').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalabout').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }







 //each About  Details data show for edit

 function AboutUpdateDetails(id) {

    axios.post('/AboutESDetails', {
        id: id
    })
    .then(function(response) {

        if (response.status == 200) {

            console.log(response.data);
            $('#projectLoader').addClass('d-none');
            $('#SliderEditForm').removeClass('d-none');
            var jsonData = response.data;


            $('#AboutESTitleIdUpdate').val(jsonData[0].title);
            $('#AboutESDesIdUpdate').val(jsonData[0].description);
        } else {

            $('#projectLoader').addClass('d-none');
            $('#projectwrongLoader').removeClass('d-none');
        }

    }).catch(function(error) {

        $('#projectLoader').addClass('d-none');
        $('#projectwrongLoader').removeClass('d-none');

    });

}



//About update modal save button

$('#AboutESupdateConfirmBtn').click(function() {


var idUpdate = $('#AboutESEditId').html();
var nameUpdate = $('#AboutESTitleIdUpdate').val();
var desUpdate = $('#AboutESDesIdUpdate').val();



SliderUpdate(idUpdate, nameUpdate, desUpdate);

})





//update project data using modal

function SliderUpdate(idUpdate, nameUpdate, desUpdate) {



if (nameUpdate.length == 0) {

    toastr.error('Slider name is empty!');

} else if (desUpdate == 0) {

    toastr.error('Slider description is empty!');

} else {
    $('#AboutESupdateConfirmBtn').html(
        "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

    updateData = [{
            id: idUpdate,
            name: nameUpdate,
            description: desUpdate,
        }

    ];
    
    axios.post('/AboutESUpdate', {
            id: idUpdate,
            title: nameUpdate,
            description: desUpdate,
            })
    
    
    .then(function(response) {

        $('#AboutESupdateConfirmBtn').html("Update");

        if (response.status = 200) {
            if (response.data == 1) {
                $('#updateAboutModal').modal('hide');
                toastr.success('Update Success.');
                getAboutESdata();

            } else {
                $('#updateAboutModal').modal('hide');
                toastr.error('Update Failed');
                getAboutESdata();

            }
        } else {
            $('#updateAboutModal').modal('hide');
            toastr.error('Something Went Wrong');
        }


    }).catch(function(error) {

        $('#updateAboutModal').modal('hide');
        toastr.error('Something Went Wrong');

    });
}
}





    </script>
@endsection
