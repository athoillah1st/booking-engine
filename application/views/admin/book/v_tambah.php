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

            <form action="<?= base_url('book/insert/' . $kamar['id_room']) ?>" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip01" class="form-label">Kamar</label>
                    <input type="text" name="id_room" class="form-control" id="validationTooltip01" value="<?= $kamar['id_room'] ?>" hidden>
                    <input type="text" class="form-control" id="validationTooltip01" value="<?= $kamar['room'] ?>">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip02" class="form-label">Cek In</label>
                    <input type="date" name="cek_in" class="form-control" id="validationTooltip02">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12 position-relative">
                    <label for="validationTooltip03" class="form-label">Cek Out</label>
                    <input type="date" name="cek_out" class="form-control" id="validationTooltip03">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip04" class="form-label">Nama Customer</label>
                    <input type="text" name="nama_customer" class="form-control" id="validationTooltip04">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12 position-relative">
                    <label class="col-sm-2 col-form-label">Jumlah Orang</label>
                    <div class="col-sm-10">
                        <select name="jumlah_orang" class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih Jumlah Orang --</option>
                            <option value="1"> 1 Orang </option>
                            <option value="2"> 2 Orang </option>
                            <option value="3"> 3 Orang </option>
                            <option value="4"> 4 Orang </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 position-relative">
                    <label for="validationTooltip06" class="form-label">Rate Harga</label>
                    <input type="text" name="harga" value="<?= $kamar['harga'] ?>" class="form-control" id="validationTooltip06">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>


                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Cek In</button>
                </div>
            </form><!-- End Custom Styled Validation with Tooltips -->
        </div>
    </div>

</main>