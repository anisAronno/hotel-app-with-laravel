@extends('admin.Layouts.app')
@section('title', 'Blog')

@section('content')


@include('admin.component.blog')



@endsection

@section('script')
<script>


getHomeBlogData();
        

        function getHomeBlogData() {


            axios.get('/getBlogData')
                .then(function(response) {

                    if (response.status = 200) {

                        $('#mainDivBlog').removeClass('d-none');
                        $('#loadDivBlog').addClass('d-none');

                        $('#BlogDataTable').DataTable().destroy();
                        $('#Blog_table').empty();
                        var count = 1;
                        var dataJSON = response.data;
                       
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(
                                "<td>" + count++ + " </td>" +

                                "<td class='text-break'>" + dataJSON[i].title + " </td>" +

                                "<td><img width='200px' height='80' class='table-img' src=" + dataJSON[i]
                                .image + "> </td>" +



                                "<td class='text-break'>" + dataJSON[i].description + " </td>" +
                                "<td>" + dataJSON[i].categories + " </td>" +

                                "<td class='text-center'><a class='BlogEditIcon' data-id=" + dataJSON[i].id +
                                "><i class='fas fa-edit'></i></a> </td>" +

                                 "<td><a class='BlogDeleteIcon' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-trash-alt'></i></a> </td>"
                            ).appendTo('#Blog_table');
                        });

                        $(".BlogDeleteIcon").click(function() {

                            var id = $(this).data('id');
                            $('#BlogDeleteId').html(id);
                            $('#deleteModalBlog').modal('show');

                        })

                        $(".BlogEditIcon").click(function() {

                            var id = $(this).data('id');
                            $('#BlogEditId').html(id);

                            $('#updateBlogModal').modal('show');
                            BlogUpdateDetails(id);

                        })


                    } else {
                        $('#wrongDivBlog').removeClass('d-none');
                        $('#loadDivBlog').addClass('d-none');

                    }
                }).catch(function(error) {

                    $('#wrongDivBlog').removeClass('d-none');
                    $('#loadDivBlog').addClass('d-none');
                });


        }





//  Blog delete modal yes button

$('#confirmDeleteBlog').click(function() {
            var id = $('#BlogDeleteId').html();
            // var id = $(this).data('id');
            DeleteDataBlog(id);

        })


        //delete courses function

        function DeleteDataBlog(id) {
            $('#confirmDeleteBlog').html(
                "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

            axios.post('/BlogDelete', {
                    id: id
                })
                .then(function(response) {
                    $('#confirmDeleteBlog').html("Yes");

                    if (response.status == 200) {


                        if (response.data == 1) {
                            $('#deleteModalBlog').modal('hide');
                            toastr.error('Delete Success.');
                            getHomeBlogData();
                        } else {
                            $('#deleteModalBlog').modal('hide');
                            toastr.error('Delete Failed');
                            getHomeBlogData();
                        }

                    } else {
                        $('#deleteModalBlog').modal('hide');
                        toastr.error('Something Went Wrong');
                    }

                }).catch(function(error) {

                    $('#deleteModalBlog').modal('hide');
                    toastr.error('Something Went Wrong');

                });

        }






        //add button modal show for add new entity

        $('#addbtnBlog').click(function() {
            $('#addBlogModal').modal('show');
        });


        //Exclusive Add modal save button

        $('#BlogAddConfirmBtn').click(function() {


            var BlogTitle = $('#BlogTitle').val();
            var BlogCategory = $('#BlogCategory').val();
            var BlogDes = $('#BlogDes').val();
            var Blogimg = $('#Blogimg').prop('files')[0];
            BlogAdd(BlogTitle, BlogCategory,BlogDes, Blogimg);

        })




        $('#Blogimg').change(function() {
            var reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function(event) {
                var ImgSource = event.target.result;
                $('#addimagepreviewBlog').attr('src', ImgSource)
            }
        })

        //Exclusive Add Method


        function BlogAdd(BlogTitle, BlogCategory, BlogDes, Blogimg) {



            if (BlogTitle.length == 0) {

                toastr.error('Blog Title is empty!');

            } else if (BlogCategory == 0) {

                toastr.error('Blog description is empty!');
            }else if (BlogDes == 0) {

                toastr.error('Blog Page is empty!');
            } else {

                $('#BlogAddConfirmBtn').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation



                my_data = [{
                        title: BlogTitle,
                        description: BlogDes,
                        categories: BlogCategory,
                    }

                ];
                var formData = new FormData();
                formData.append('data', JSON.stringify(my_data));
               
                formData.append('photo', Blogimg);

                axios.post('/BlogAdd', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(function(response) {
                   
                    $('#BlogAddConfirmBtn').html("Save");

                    if (response.status = 200) {
                        if (response.data == 1) {
                            $('#addBlogModal').modal('hide');
                            toastr.success('Add New Success .');
                              getHomeBlogData();
                        } else {
                            $('#addBlogModal').modal('hide');
                            toastr.error('Add New Failed');
                              getHomeBlogData();
                        }
                    } else {
                        $('#addBlogModal').modal('hide');
                        toastr.error('Something Went Wrong');
                    }


                }).catch(function(error) {

                    $('#addBlogModal').modal('hide');
                    toastr.error('Something Went Wrong');

                });

            }

        }




  //each courses  Details data show for edit

  function BlogUpdateDetails(id) {

axios.post('/getBlogEdit', {
        id: id
    })
    .then(function(response) {

        if (response.status == 200) {


            $('#loadDivBlog').addClass('d-none');
            $('#BlogEditForm').removeClass('d-none');
            var jsonData = response.data;


            $('#BlogTitleIdUpdate').val(jsonData[0].title);
            $('#BlogcategoryIdUpdate').val(jsonData[0].categories);
            $('#BlogDesIdUpdate').val(jsonData[0].description);
            var ImgSource = (jsonData[0].image);
            $('#imagepreviewBlog').attr('src', ImgSource)
        } else {

            $('#loadDivBlog').addClass('d-none');
            $('#wrongDivBlog').removeClass('d-none');
        }

    }).catch(function(error) {

        $('#loadDivBlog').addClass('d-none');
        $('#wrongDivBlog').removeClass('d-none');

    });

}









$('#BlogimgUpdate').change(function() {
var reader = new FileReader();
reader.readAsDataURL(this.files[0]);
reader.onload = function(event) {
    var ImgSource = event.target.result;
    $('#imagepreviewBlog').attr('src', ImgSource)
}
})






//Blog update modal save button

$('#BlogConfirmBtn').click(function() {


var idUpdate = $('#BlogEditId').html();
var titleUpdate = $('#BlogTitleIdUpdate').val();
var dateUpdate = $('#BlogcategoryIdUpdate').val();
var desUpdate = $('#BlogDesIdUpdate').val();
var img = $('#BlogimgUpdate').prop('files')[0];


BlogUpdate(idUpdate, titleUpdate,dateUpdate, desUpdate, img);

})





//update project data using modal

function BlogUpdate(idUpdate, titleUpdate, dateUpdate, desUpdate, img) {



if (titleUpdate.length == 0) {

    toastr.error('Blog name is empty!');

} else if (dateUpdate == 0) {

    toastr.error('Blog date is empty!');

}else if (desUpdate == 0) {

    toastr.error('Blog description is empty!');

} else {
    $('#BlogConfirmBtn').html(
        "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation

    updateData = [{
            id: idUpdate,
            title: titleUpdate,
            categories: dateUpdate,
            description: desUpdate,
           
        }

    ];
    var formData = new FormData();
    formData.append('data', JSON.stringify(updateData));
    formData.append('photo', img);


    axios.post('/BlogUpdate', formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }).then(function(response) {

        $('#BlogConfirmBtn').html("Update");

        if (response.status = 200) {
            
            if (response.data == 1) {
                $('#updateBlogModal').modal('hide');
                toastr.success('Update Success.');
                getHomeBlogData();

            } else {
                $('#updateBlogModal').modal('hide');
                toastr.error('Update Failed');
                getHomeBlogData();

            }
        } else {
            $('#updateBlogModal').modal('hide');
            toastr.error('Something Went Wrong');
        }


    }).catch(function(error) {

        $('#updateBlogModal').modal('hide');
        toastr.error('Something Went Wrong');

    });
}
}












</script>
@endsection