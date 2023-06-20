<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $judul ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">

            <h5 class="card-title"><?= $judul ?> </h5>

            <form action="<?= base_url('Room/update/' . $kamar_id['id_room']) ?>" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip01" class="form-label">Kamar</label>
                    <input type="text" name="room" class="form-control" value="<?= $kamar_id['room'] ?>" id="validationTooltip01" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <label class="col-sm-2 col-form-label">Tipe Kamar</label>
                    <div class="col-sm-12">
                        <select name="id_type" class="form-select" aria-label="Default select example">
                            <option selected value="<?= $kamar_id['id_type'] ?>"><?= $kamar_id['type'] ?></option>
                            <?php foreach ($type as $key => $tipe) { ?>
                                <option value="<?= $tipe['id_type'] ?>"><?= $tipe['type'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip02" class="form-label">Deskripsi</label>
                    <input type="text" name="room_desc" class="form-control" value="<?= $kamar_id['room_desc'] ?>" id="validationTooltip02" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Edit</button>
                </div>
            </form><!-- End Custom Styled Validation with Tooltips -->
        </div>
    </div>

</main>