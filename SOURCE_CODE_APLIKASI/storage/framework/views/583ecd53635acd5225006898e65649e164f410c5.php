<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Siswa/i</h4>
                </div>
                <div class="card-body">
                    <?php echo e($siswa->count()); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-male    "></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Laki-Laki</h4>
                </div>
                <div class="card-body">
                    <?php echo e($jumlahLaki); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-female    "></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Perempuan</h4>
                </div>
                <div class="card-body">
                    <?php echo e($jumlahPerempuan); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-user-graduate    "></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <a href="<?php echo e(route('kelulusan.alumni')); ?>" class="">
                        <h4>Alumni</h4>
                    </a>
                </div>
                <div class="card-body">
                    <?php echo e($jumlahAlumni); ?>

                </div>
                    
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-5 col-md-12 col-12 col-sm-12">
        <div class="card gradient-bottom">
            <div class="card-header">
            <h4>Jenis Pembayaran</h4>
            
            </div>
            <div class="card-body" id="top-4-scroll" tabindex="2" style="height: 315px; overflow: hidden; outline: none;">
            <ul class="list-unstyled list-unstyled-border">
                <?php $__currentLoopData = $jenisPembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <li class="media">
                
                <div class="media-body">
                    <div class="float-right"><div class="font-weight-600 text-muted text-small pl-1"><?php echo e($row->tagihan->count()); ?> Orang</div></div>
                    <div class="media-title">
                        <a target="_blank" href="laporan/tagihan?kelas_id=&jenisPembayaran=<?php echo e($row->id); ?>">
                            <?php echo e($row->nama_pembayaran); ?>

                        </a>
                        <br>
                        <span class="text-muted small">T.P <?php echo e($row->tahunajaran->tahun_ajaran); ?></span>
                    </div>
                    <div class="mt-1">
                    <div class="budget-price">
                        <div class="budget-price-square bg-success" data-width="<?php echo e($row->lunas); ?>%" ></div>
                        <div class="budget-price-label"><?php echo e($row->lunas); ?> Orang</div>
                    </div>
                    <div class="budget-price">
                        <div class="budget-price-square bg-danger" data-width="<?php echo e($row->belum_lunas); ?>%"></div>
                        <div class="budget-price-label"><?php echo e($row->belum_lunas); ?> Orang</div>
                    </div>
                    </div>
                </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                
                
            </ul>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-center">
                <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-success" data-width="20" style="width: 20px;"></div>
                    <div class="budget-price-label">Lunas</div>
                </div>
                <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
                    <div class="budget-price-label">Belum Lunas</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Transaksi Pembayaran</h4>
                <div class="card-header-action">
                    <a href="<?php echo e(route('pembayaran.index')); ?>" class="btn btn-primary">Selengkapnya..</a>
                </div>
            </div>
            <div class="card-body" id="top-5-scroll" style="height: 315px; overflow: hidden;">
                <div class="table-responsive">
                    <table class="table table-striped mb-0 small">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                
                                <th>Nis|Nama</th>
                                
                                <th>Metode Pembayaran <br>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a class=""
                                            href="<?php echo e(route('pembayaran.show', $row->id)); ?>">
                                            <?php echo e($row->kode_pembayaran); ?>

                                        </a> <br>
                                        <?php echo e($row->for_human); ?>

                                    </td>
                                    
                                    <td>
                                        <?php echo e($row->siswa->nis); ?> <br>
                                        <?php echo e($row->siswa->nama_lengkap); ?>

                                    </td>
                                    <td class="text-right">
                                        <?php echo e($row->metode_pembayaran); ?> <br>
                                        <?php echo e(number_format($row->total)); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php if($row->status === "settlement"): ?>
                                            <i class="fas fa-check-circle text-success"
                                                data-toggle="tooltip" 
                                                data-placement="top" 
                                                title="Settlement"
                                                data-original-title="Settlement"
                                            ></i>
                                        <?php endif; ?>
                                        <?php if($row->status === "pending"): ?>
                                            <i class="fas fa-info-circle text-warning"
                                                data-toggle="tooltip" 
                                                data-placement="top" 
                                                title="Pending"
                                                data-original-title="Pending"
                                            ></i>
                                        <?php endif; ?>
                                        <?php if($row->status === "expire"): ?>
                                            <i class="fas fa-times-circle text-danger"
                                                data-toggle="tooltip" 
                                                data-placement="top" 
                                                title="Expire"
                                                data-original-title="Expire"
                                            ></i>
                                        <?php endif; ?>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="card-footer pt-3 d-flex justify-content-center">
                <div class="budget-price justify-content-center">
                    <i class="fas fa-check-circle text-success mr-2   "></i> Settlement
                </div>
                <div class="budget-price justify-content-center">
                    <i class="fas fa-times-circle text-danger mr-2 "></i> Expire
                </div>
                <div class="budget-price justify-content-center">
                    <i class="fas fa-info-circle text-warning mr-2 "></i> Pending
                </div>
            </div>
        </div>


        
    </div>
</div><?php /**PATH D:\Compressed\spp-sekolah-main\spp-sekolah-main\resources\views/layouts/partials/adminHome.blade.php ENDPATH**/ ?>