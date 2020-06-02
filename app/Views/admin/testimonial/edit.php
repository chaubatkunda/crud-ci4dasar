<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/admin/home">Home</a></li>
                        <li class="breadcrumb-item "><a href="<?php echo base_url(); ?>/admin/testimonial">Testimonial</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Create Testimonial
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <?php echo form_open_multipart('admin/testimonial/update/' . $testimoni->id_testimonial); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $testimoni->nama; ?>" id="nama" placeholder="Enter Nama">
                                <input type="hidden" name="idt" class="form-control" value="<?php echo $testimoni->id_testimonial; ?>" id="nama" placeholder="Enter Nama">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"><?php echo $testimoni->deskripsi; ?></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>File input</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('upload/' . $testimoni->image); ?>" class="rounded-circle" width="50" height="50">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('admin/testimonial'); ?>" class="btn btn-danger">Batal</a>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>