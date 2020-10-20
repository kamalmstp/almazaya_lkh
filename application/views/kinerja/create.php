        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Input Kegiatan
                    </header>
                    <div class="panel-body">
                        <form action="post_kegiatan" method="post" class="form-horizontal ">

                            <?php
                                if ($this->session->flashdata('message') != '') {
                                    echo '<div class="alert alert-success">';
                                    echo $this->session->flashdata('message');
                                    echo "</div>";
                                }
                            ?>
                            
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Tanggal Kegiatan</label>
                                <div class="col-lg-10">
                                    <input name="tanggal" class="form-control form-control-inline input-medium dp1"  size="16" type="text" value="<?php echo date('l, d M Y') ?>" disabled/>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Pukul</label>
                                <div class="col-lg-10">
                                    <input name="waktu" type="text" class="form-control" value="<?php echo date('H:i:s') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Jenis Kegiatan </label>
                                <div class="col-lg-6">
                                    <select name="jenis" id="e1" class="populate " style="width: 300px">
                                        <?php
                                            foreach ($jenkin->result() as $row)
                                            {
                                                echo '<option value="'.$row->id.'">'.$row->kegiatan.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Detail Kegiatan</label>
                                <div class="col-lg-10">
                                    <textarea name="detail" class="form-control" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
                                <div class="col-lg-10">
                                    <textarea name="keterangan" class="form-control" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Foto</label>
                                <div class="col-lg-10">
                                <input name="userfile" type="file" accept="image/*" class="form-control" capture />
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger">Proses</button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>