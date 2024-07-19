<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            Made with <i class="fas fa-heart"></i> by <span>EngMars Corp. | AnakIT41
                Copyright &copy; 2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url() ?>assets/backend/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url() ?>assets/backend/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets/backend/js/demo/chart-pie-demo.js"></script>

<!-- Sweetalert -->
<script src="<?= base_url() ?>assets/lib/js/sweetalert2.min.js"></script>
<script src="<?= base_url() ?>assets/lib/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/lib/js/myscript.js"></script>
<script src="<?= base_url() ?>assets/lib/js/zingchart.min.js"></script>



<script>
    var chartData = {
        type: 'line',
        series: [{
            values: [<?= $pengunjungonline ?>, <?= $pengunjunghariini ?>]
        }]
    };
    zingchart.render({
        id: 'chart-div',
        data: chartData
    });
</script>


<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }

    // function hanyaAngka(event) {
    //   var angka = (event.which) ? event.which : event.keyCode
    //   if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
    //     return false;
    //   return true;
    // }
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

    $(document).on('click', '#btn-tutup', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data lamaran akan ditutup!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#539a55",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Tutup'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        })
    })

    $(document).on('click', '#btn-buka', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data lamaran akan dibuka!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#539a55",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Buka'
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