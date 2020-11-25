<div class="container ">
    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5 border border-dark">
            <h1 class="text-center my-5">Resturant About Section</h1>

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
                                <h3>About Section Title:</h3>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="addTitle" class="sr-only">Title</label>

                                <textarea type="text" required name="" id="addTitle" class="form-control" cols="30"
                                    rows="3"><?php if ($results) {
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
                                <h3>About Page Video URL:</h3>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="addVideo" class="sr-only">Title</label>
                                <input required name="" id="addVideo" class="form-control" cols="30" rows="10" value="<?php if ($results) {
                                    echo $results->video;
                                } ?>">
                            </div>
                        </td>
                        <td>
                            <button id="submitVideoURL" type="submit" class="btn btn-primary mb-2">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


