<script type="text/javascript">
    var wp;
    var posisi;
    var pid;
    var pname;
    var pdate;
    var datanya;
    $(document).ready(function() {
        $("#save").click(function() {
            //ambil nilai-nilai dari masing-masing input
            wp = $("#wp").val();
            if (wp === "- Jenis Werehouse -") {
                alert("Pilih dulu jenis werehouse");
                exit();
            }
            posisi = $("#posisi").val();
            pid = $("#pid").val();
            if (pid === "- Produk ID -") {
                alert("Pilih dulu ID Produk");
                exit();
            }
            pname = $("#pname").val();
            if (pname == "") {
                alert("Pilih dulu ID Produk");
                exit();
            }
            pdate = $("#pdate").val();
            if (pdate == "") {
                alert("Isi dulu tanggal inputnya");
                exit();
            }
            datanya = "&wp=" + wp + "&posisi=" + posisi + "&pid=" + pid;
            datanya = datanya + "&pdate=" + pdate + "&pname=" + pname;
            //tampilkan status Updating dan animasinya
            $("#status").html("Dalam proses...");
            $("#loading").show();
            $.ajax({
                type: 'POST',
                url: "aksi.php",
                data: "op=save" + datanya,
                cache: false,
                success: function(msg) {
                    if (msg == "error1") {
                        $("#status").html("Rak ini penuh");
                    } else if (msg == "sukses") {
                        $("#status").html("Data berhasil disimpan")
                    } else {
                        $("#status").html("ERROR..penyimpanan data GAGAL!");
                    }
                    $("#loading").hide();
                }
            });
            location.reload();
        });

        //jika tombol VIEW diklik
        $("#view").click(function() {
            posisi = $("#posisi").val();
            $("#status").html("Mencari Data...");
            $("#loading").show();
            $.ajax({
                type: 'POST',
                url: "aksi.php",
                data: "op=view&posisi=" + posisi,
                cache: false,
                success: function(msg) {
                    if (msg == "error") {
                        $("#status").html("Tidak ada produk di RAK ini");
                        $("#loading").hide();
                    } else { //karna di server pembatas setiap data adalah |
                        //maka kita split dan akan membentuk array
                        data = msg.split("|");
                        //masukkan ke masing-masing textfield
                        $("#pname").val(data[0]);
                        $("#pdate").val(data[1]);
                        //hilangkan status dan animasi loading
                        $("#status").html("");
                        $("#loading").hide();
                    }
                }
            });
        });
        //jika tombol DEL diklik
        $("#delete").click(function() {
            posisi = $("#posisi").val();
            alert("Anda yakin untuk mengosong data produk yang ada di rak ini");
            $("#status").html("Lagi didelete...");
            $("#loading").show();
            $.ajax({
                type: 'POST',
                url: "aksi.php",
                data: "op=delete&posisi=" + posisi,
                cache: false,
                success: function(msg) {
                    if (msg == "sukses") {
                        $("#status").html("Delete Berhasil...");
                    } else {
                        $("#status").html("ERROR..");
                    }
                    $("#loading").hide();
                }
            });
            location.reload();
        });
    });
</script>

<?php
$query = $this->db->get_where('pelamar', array('id_job' => $id_job, 'id_akun_pelamar' => $id_akun_pelamar));

if ($query->num_rows() == 0) {
    $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');
    $id_job = $id_job;
    $kode_alternatif = $this->input->post('kode_alternatif');
    // $berkas = $this->input->post('kode_alternatif');
    // $kode_alternatif = $this->input->post('kode_alternatif');

    $data = array(
        'id_akun_pelamar' => $id_akun_pelamar,
        'id_job' => $id_job,
        'Status_lamaran' => 'Direkam'

    );

    $data1 = array(
        'id_akun_pelamar' => $id_akun_pelamar,
        'id_job' => $id_job,
        'berkas' => 'Direkam'

    );

    $this->m_pelamar->input_data($data, 'pelamar');
    $this->m_pelamar->input_data($data1, 'penilaian');
    $this->session->set_flashdata('sukses', 'Lamaran anda telah direkam. Terima kasih atas partisipasi anda');
    redirect(base_url('user/job-vacancy'));
} elseif ($query->num_rows() > 1) {
    $this->session->set_flashdata('warning', 'Saudara(i) telah melakukan lamaran. Pengajuan Lamaran hanya dilakukan untuk SATU POSISI saja');
    redirect(base_url('user/job-vacancy'));
} else {
    $this->session->set_flashdata('gagal', 'Saudara(i) telah melakukan lamaran POSISI ini.');
    redirect(base_url('user/job-vacancy'));
}

?>