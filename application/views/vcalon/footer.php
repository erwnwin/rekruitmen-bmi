<div class="container">
    <br>
    <hr class="footer">
    <p align="center" style="font-family: Verdana; font-size: 13px;"> PT Bumi Menara Internusa - Copyright &copy2024 Allright Reserved </p>
    <!-- <p align="center">Version 3.1.13 - Page rendered in <b>0.0057</b> second </p> -->
</div>

<script src="<?= base_url() ?>assets/lib/bootstrap/js/jquery-3.7.1.min.js"></script>
<script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?= base_url() ?>assets/lib/bootstrap/js/popper.min.js"></script>

<script src="<?= base_url() ?>assets/select2/select2.min.js"></script>
<script src="<?= base_url() ?>assets/dataTable/jquery.dataTables.js"></script>

<!-- Sweetalert -->
<script src="<?= base_url() ?>assets/lib/js/sweetalert2.min.js"></script>
<script src="<?= base_url() ?>assets/lib/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/lib/js/myscript.js"></script>


<script>
    window.addEventListener("load", () => {

        const loader = document.querySelector(".loader");

        loader.classList.add("loader--hidden");

        loader.addEventListener("transitioned", () => {
            document.body.removeChild(document.querySelector(".loader"));
        });
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $("#loader").hide();
    });

    $("#nama_lengkap").keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $("#provinsi").change(function() {
            var url = "<?php echo site_url('pegawai/curriculum_vitae/add_ajax_kab'); ?>/" + $(this).val();
            $('#kabupaten').load(url);
            return false;
        })

        $("#kabupaten").change(function() {
            var url = "<?php echo site_url('pegawai/curriculum_vitae/add_ajax_kec'); ?>/" + $(this).val();
            $('#kecamatan').load(url);
            return false;
        })

        $("#kecamatan").change(function() {
            var url = "<?php echo site_url('pegawai/curriculum_vitae/add_ajax_des'); ?>/" + $(this).val();
            $('#desa').load(url);
            return false;
        })

    });
</script>

<script>
    function sameAddres() {
        if (document.getElementById("same").checked) {
            document.getElementById("alamatktp2").value =
                document.getElementById("alamatktp").value;

            document.getElementById("provinsid").value =
                document.getElementById("provinsi").value;

            document.getElementById("kabupatend").value =
                document.getElementById("kabupaten").value;

            document.getElementById("kecamatand").value =
                document.getElementById("kecamatan").value;

            document.getElementById("kode_poss").value =
                document.getElementById("kode_pos").value;
        } else {
            document.getElementById("alamat_ktp2").value = ""
            document.getElementById("provinsid").value = ""
            document.getElementById("kabupatend").value = ""
            document.getElementById("kecamatand").value = ""
            document.getElementById("kode_pos").value = ""
        }

    }
</script>


<!-- domisili -->
<script>
    $(document).ready(function() {
        $("#provinsid").change(function() {
            var url = "<?php echo site_url('pegawai/curriculum_vitae/add_ajax_kab'); ?>/" + $(this).val();
            $('#kabupatend').load(url);
            return false;
        })

        $("#kabupatend").change(function() {
            var url = "<?php echo site_url('pegawai/curriculum_vitae/add_ajax_kec'); ?>/" + $(this).val();
            $('#kecamatand').load(url);
            return false;
        })

        $("#kecamatand").change(function() {
            var url = "<?php echo site_url('pegawai/curriculum_vitae/add_ajax_des'); ?>/" + $(this).val();
            $('#desad').load(url);
            return false;
        })

    });
</script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

<script>
    $(document).ready(function() {
        $('.select3').select2();
    });
</script>

<script>
    var flash = $('#flash').data('flash');
    if (flash) {
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            confirmButtonColor: '#2b961f',
            text: flash
        })
    }

    var flashGagal = $('#flash-gagal').data('flash');
    if (flashGagal) {
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            confirmButtonColor: '#2b961f',
            text: flashGagal
        })
    }

    var flashWarning = $('#flash-warning').data('flash');
    if (flashWarning) {
        Swal.fire({
            icon: 'warning',
            title: 'Maaf || Sorry',
            confirmButtonColor: '#2b961f',
            text: flashWarning
        })
    }

    $(document).on('click', '#btn-hapus', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#539a55",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        })
    })

    $(document).on('click', '#btn-lamar', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Melamar pada posisi ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#539a55",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Ajukan Lamaran'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        })
    })

    // $("#nama_lengkap").keyup(function() {
    //   $(this).val($(this).val().toUpperCase());
    // });
</script>


</body>

</html>