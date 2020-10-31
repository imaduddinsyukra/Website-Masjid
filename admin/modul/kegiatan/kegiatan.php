 <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        &nbsp;
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Kegiatan Mesjid</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">a</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Kegiatan Mesjid</h1>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <div align="left">
                                            <a href="index2.php?part=Tambah Kegiatan"><button type="button" class="btn btn-success">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                            </button>
                                            </a>
                                        </div>
                                        <br>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="no" data-editable="true">No.</th>
                                                    <th data-field="tanggal_artikel" data-editable="true">Tanggal Diterbitkan</th>
                                                    <th data-field="judul_artikel" data-editable="true">Judul Kegiatan</th>
                                                    <th data-field="isi_artikel" data-editable="true">Keterangan Kegiatan</th>
                                                    <th data-field="foto" data-editable="false">Foto</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $no = 1;
                                                $query = mysql_query("select * from kegiatan");
                                                while($dt = mysql_fetch_array($query)){
                                                    $n++;
                                            ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $n;?></td>
                                                    <td><?php echo $dt['tanggal_artikel'];?></td>
                                                    <td><?php echo $dt['judul_kegiatan'];?></td>
                                                    <td><?php echo $dt['keterangan'];?></td>
                                                    <td>
                                                    <?php
                                                    $gb = explode("/", $dt['foto']);

                                                    $gambar = $gb[2].'/'.$gb[3].'/'.$gb[4];                  
                                                    ?>
                                                    <img src="<?php echo $gambar;?>" alt="" style='width:250px'>
                                                    </td>
                                                    <td><a href="index2.php?part=Edit Kegiatan&id=<?php echo $dt['id_kegiatan'];?>" class="btn btn-primary" value="edit" style='width: 70px'>Edit</a> <br> <a href="modul/kegiatan/aksi.php?part=hapus&id=<?php echo $dt['id_kegiatan'];?>" class="btn btn-danger btn-small" value="hapus" onClick="return confirm('Apakah Anda Yakin Hapus Data?')"  style='width: 70px'>Hapus</a></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            