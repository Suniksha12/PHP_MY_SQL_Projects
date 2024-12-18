    <!-- Form Modal -->
    <div class="modal fade" id="usermodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating Users <i class="bi bi-cloud-plus text-dark"></i></h1>
                </div>
                <form id="addform" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <!--username-->
                            <label>Name: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark"><i class="bi bi-person text-light"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Your Username" autocomplete="off" required="required" id="username" name="username">
                            </div>
                        </div>

                        <!--email-->
                        <div class="form-group">
                            <label>Email: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark"><i class="bi bi-envelope text-light"></i></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter Your Email" autocomplete="off" required="required" id="email" name="email">
                            </div>
                        </div>

                        <!--mobile-->
                        <div class="form-group">
                            <label>Mobile: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark"><i class="bi bi-telephone text-light"></i></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Your Phone no" autocomplete="off" required="required" id="mobile" name="mobile" maxlength="10" minlength="10">
                            </div>
                        </div>

                        <!--photo-->
                        <div class="form-group">
                            <label>Photo:</label>
                            <div class="input-group">
                                <label class="custom-file-label" id="userphoto">Choose File</label>
                                <input type="file" class="custom-file-input" name="photo" id="photo">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Submit</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        <!-- 2 input fields first for adding and next for updating , deleting or viewing profile-->
                         <input type="hidden" name="action" value="adduser">
                         <input type="hidden" name="userId" id="userId" value="">


                    </div>
                </form>
            </div>
        </div>
    </div>