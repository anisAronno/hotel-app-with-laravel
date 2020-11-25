
<div class="row mt-5">
    <div class="col-md-10 offset-md-1 border border-dark">

        <div id="mainDivBlog" class="container-fluid d-none">
            <div class="row">
                <div class="col-md-12 p-2">
                    <h1 class="text-center">Blog Section</h1>
                    <button id="addbtnBlog" class="btn btn-sm btn-danger my-3">Add New</button>
                    <table id="BlogDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Sl.</th>
                                <th class="th-sm">Title</th>
                                <th class="th-sm">Image</th>
                                <th class="th-sm">Description</th>
                                <th class="th-sm">Category</th>
                                <th class="th-sm">Edit</th>
                                <th class="th-sm">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="Blog_table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="loadDivBlog" class="container">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

                </div>
            </div>
        </div>
        <div id="wrongDivBlog" class="container d-none">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <h3>Something Went Wrong!</h3>
                </div>
            </div>
        </div>




    <!-- Blog add -->
    <div class="modal fade" id="addBlogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5">Add New Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  text-center">
                    <div class="container">
                        <div class="row">
                            <input id="BlogTitle" type="text" class="form-control mb-3" placeholder="Blog Name">
                            <input id="BlogCategory" type="text"  class="form-control mb-3"
                                placeholder="Blog Category">
                            <textarea name="" id="BlogDes" cols="30" rows="10" class="form-control mb-3" placeholder="Blog Description"></textarea>
                            <input type="file" id="Blogimg" class="form-control mb-3" name="text-input">
                            <img id="addimagepreviewBlog" style="height: 100px !important;" class="imgPreview mt-3 "
                                src="{{ asset('images/default-image.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="BlogAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog add -->

    

    <!-- Blog Delete -->
    <div class="modal fade" id="deleteModalBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body p-3 text-center">
                    <h5 class="mt-4">Do you want to Delete</h5>
                    <h5 id="BlogDeleteId" class="mt-4 d-none "></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                    <button data-id="" id="confirmDeleteBlog" type="button" class="btn btn-sm btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Delete -->


    
    <!-- Blog update -->
    <div class="modal fade" id="updateBlogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  text-center">
                    <div id="BlogEditForm" class="container d-none ">
                        <h5 id="BlogEditId" class="mt-4 d-none"></h5>
                        <div class="row">
                            <div class="col-md-6">
                                <input id="BlogTitleIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Blog Name">
                                <input id="BlogcategoryIdUpdate" type="text" id="" class="form-control mb-3"
                                    placeholder="Blog Category">
                                <textarea name="" id="BlogDesIdUpdate" cols="30" rows="10" class="form-control mb-3" placeholder="Blog Description"></textarea>
                            </div>
                            <div class="col-md-6">

                                <input class="form-control" id="BlogimgUpdate" type="file">
                                <img id="imagepreviewBlog" style="height: 200px !important;" class="imgPreview mt-3 " src="" />
                            </div>
                        </div>
                    </div>
                    <img id="BlogLoader" class="loding-icon m-5 d-none" src="{{ asset('loader.svg') }}" alt="">
                    <h3 id="BlogwrongLoader" class="d-none">Something Went Wrong!</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="BlogConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog update -->