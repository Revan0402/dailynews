<?php $this->load->view('admin/includes/headerStyle')?>
<?php $this->load->view('admin/includes/leftmenu')?>
<?php $this->load->view('admin/includes/navbar')?>
<style>
    .fLeft{
        float: left;
    }
</style>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <div class="container mt-3"> 
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td style="width:100px">Title</td>
                                            <td><?php echo $single_news['n_title'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td><?php echo $single_news['n_description'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td><?php echo $single_news['n_date'];?></td>                                        </tr>
                                        <tr>
                                            <td>Category</td>
                                            <td><?php echo $single_news['n_category'];?></td>                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><?php echo $single_news['n_status'];?></td>                                        </tr>
                                        <tr>
                                            <td>File</td>

                                            <td>
                                               <?php if($single_news['n_file_ext'] == '.mp3') { ?>                     
                                                <audio controls>
                                                    <source src="<?php echo base_url('uploads/news/'). $single_news['n_file'];?>" type="audio/mpeg">
                                                </audio>
                                                <?php }else{ ?> 
                                                    <img width="100px"src="<?php echo base_url('uploads/news/'). $single_news['n_file'];?>" alt="">
                                                <?php } ?> 
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
<?php $this->load->view('admin/includes/footer')?>
<?php $this->load->view('admin/includes/footerScript')?>