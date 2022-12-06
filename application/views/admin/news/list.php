<?php $this->load->view('admin/includes/headerStyle')?>
<?php $this->load->view('admin/includes/leftmenu')?>
<?php $this->load->view('admin/includes/navbar')?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                        <div class="card">
                <h5 class="card-header">Bordered Table
                    <a href="<?php echo base_url('a_news_create'); ?>">
                    <button type="button" class="btn btn-success" style="float:right;" >Create</button>
                    </a>
                </h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          <td>1</td>
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                          <td>Lorem, ipsum dolor</td>
                          <td>Sport</td>
                          <td>
                            <img width="100px" src="https://www.sportsdestinations.com/sites/sportsdestinations.com/files/sports_destination_management/nodes/2019/17127/DSHawaii1.jpg" alt="">
                          </td>
                          <td>22.11.2022</td>
                          <td><span class="badge bg-label-success me-1">Active</span></td>
                          <td>
                            
                              <a href="">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="dropdown" >
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </button>
                               
                              <a href="">
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="dropdown">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </button>
                              </a>
                            
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>        


<?php $this->load->view('admin/includes/footer')?>
<?php $this->load->view('admin/includes/footerScript')?>
