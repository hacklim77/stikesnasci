<!-- <?php 
    /* $idu = $_SESSION['login']; */
?> -->
<style type="text/css">
    ul#main-tab li.actived>a{
        background-color: #9c27b0;
        box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
        color: #fff !important;
    }
</style>

<div class="sidebar" data-color="purple" data-image="<?= base_url('assets/img/sidebar-1.jpg') ?>">
    <div class="logo">
        <a href="#" class="simple-text">
            <img src="<?= base_url('assets/img/logo-stikes.png') ?>" style="max-height: 100px;">
        </a>
    </div>
    <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y">
        <ul class="nav" id="main-tab" data-tab="<?php /* echo $menu */ ?>">
            <li class="home">
                <a href="<?= base_url('admin'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>DASHBOARD</p>
                </a>
            </li>

            <?php 
                /* $ar = array('1');
                if (in_array($idu, $ar)) { */ 
            ?> 
                <li>
                    <a href="./user.html">
                        <i class="material-icons">person</i>
                        <p>PROFILE</p>
                    </a>
                </li>
            <?php /* } */?>

            <?php 
                /* $ar = array('1','3','4');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- BERITA & INFO -->
                <li class="nav-item berita infomhs">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#info-berita" aria-expanded="false">
                        <i class="material-icons">info</i>
                        <p> INFORMASI
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="info-berita" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item berita">
                                <a class="nav-link" href="<?= base_url('berita/tblBerita'); ?>">
                                  <span class="sidebar-normal">Berita</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item infomhs">
                                <a class="nav-link" href="<?= base_url('infokampus/Infomhs'); ?>">
                                    <span class="sidebar-normal">Info Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php /*  } */?>

            <?php 
               /*  $ar = array('1');
                if (in_array($idu, $ar)) {  */
            ?>
                <!-- akademik -->
                <li class="nav-item ">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#akademik" aria-expanded="false">
                        <i class="material-icons">content_paste</i>
                        <p> AKADEMIK
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="akademik" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="sidebar-normal">DIII Farmasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">DIII Analis Kesehatan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">DIV Fisioterapi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">DIV Teknologi Laboratorium Medik</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">S1 Farmasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php /* } */?>

            <?php 
                /* $ar = array('1','5');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- LPPM -->
                <li class="nav-item lppm_penelitian lppm_pkm lppm_informasi lppm_agenda">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#lppm" aria-expanded="false">
                        <i class="material-icons">chrome_reader_mode</i>
                        <p> LPPM
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="lppm" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item lppm_penelitian">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_penelitian'); ?>">
                                  <span class="sidebar-normal">Penelitian</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_pkm">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_pkm'); ?>">
                                    <span class="sidebar-normal">Pengabdian Kepada Masyarakat</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_informasi">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_informasi'); ?>">
                                    <span class="sidebar-normal">Informasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_agenda">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_agenda'); ?>">
                                    <span class="sidebar-normal">Agenda LPPM</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">Jurnal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php /*  } */?>

            <?php 
               /*  $ar = array('1','3','4');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- Kemahasiswaaan -->
                <li class="nav-item kemahasiswaan_download beasiswa kreativitas skp seminar ukm survey_kemahasiswaan organisasi">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#KEMAHASISWAAN" aria-expanded="false">
                        <i class="material-icons">supervised_user_circle</i>
                        <p> KEMAHASISWAAN
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="KEMAHASISWAAN" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item beasiswa">
                                <a class="nav-link" href="<?= base_url('admin_stksn/beasiswa'); ?>">
                                  <span class="sidebar-normal">Beasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item kreativitas">
                                <a class="nav-link" href="<?= base_url('admin_stksn/kreativitas'); ?>">
                                    <span class="sidebar-normal">Hibah Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item skp">
                                <a class="nav-link" href="<?= base_url('admin_stksn/skp'); ?>">
                                    <span class="sidebar-normal">SKP</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url('admin_stksn/alumni'); ?>">
                                    <span class="sidebar-normal">Alumni</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item seminar">
                                <a class="nav-link" href="<?= base_url('admin_stksn/seminar'); ?>">
                                    <span class="sidebar-normal">Seminar dan Workshop</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ukm">
                                <a class="nav-link" href="<?= base_url('admin_stksn/ukm'); ?>">
                                    <span class="sidebar-normal">Unit Kegiatan Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item organisasi">
                                <a class="nav-link" href="<?= base_url('admin_stksn/organisasi'); ?>">
                                    <span class="sidebar-normal">Organisasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item survey_kemahasiswaan">
                                <a class="nav-link" href="<?= base_url('admin_stksn/survey_kemahasiswaan'); ?>">
                                    <span class="sidebar-normal">Survey Kemahasiswaan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item kemahasiswaan_download">
                                <a class="nav-link" href="<?= base_url('admin_stksn/kemahasiswaan_download'); ?>">
                                    <span class="sidebar-normal">Download</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- cdc -->
                <li class="nav-item roc tracerstudy info_cdc benchmarking loker download_cdc">
                    <!-- <a class="nav-link" data-toggle="collapse" href="#cdc" aria-expanded="true">
                        <i class="material-icons">domain</i>
                        <p> CDC
                           <b class="caret"></b>
                        </p>
                    </a> -->
                    <a class="nav-link collapsed" data-toggle="collapse" href="#cdc" aria-expanded="false">
                        <i class="material-icons">domain</i>
                        <p> CDC
                           <b class="caret"></b>
                        </p>
                    </a>

                    <!-- class='collapse in' -->
                    <div class="collapse" id="cdc" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item roc">
                                <a class="nav-link" href="<?= base_url('admin_stksn/roc'); ?>">
                                  <span class="sidebar-normal">Recruitment on Campus</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item tracerstudy">
                                <a class="nav-link" href="<?= base_url('admin_stksn/tracerstudy'); ?>">
                                    <span class="sidebar-normal">Tracer Study</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item info_cdc">
                                <a class="nav-link" href="<?= base_url('admin_stksn/info_cdc'); ?>">
                                    <span class="sidebar-normal">Informasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item benchmarking">
                                <a class="nav-link" href="<?= base_url('admin_stksn/benchmarking'); ?>">
                                    <span class="sidebar-normal">Benchmarking</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item loker">
                                <a class="nav-link" href="<?= base_url('admin_stksn/loker'); ?>">
                                    <span class="sidebar-normal">Lowongan Pekerjaan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item cdc_download">
                                <a class="nav-link" href="<?= base_url('admin_stksn/download_cdc'); ?>">
                                    <span class="sidebar-normal">Download</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- PMB -->
                <!-- <li>
                    <a href="<?= base_url('admin_stksn/pmb'); ?>">
                        <i class="material-icons text-gray">person_add</i>
                        <p>PMB</p>
                    </a>
                </li> -->
            <?php /* } */?>
            <?php 
                /* $ar = array('1','6');
                if (in_array($idu, $ar)) { */ 
            ?>
                <li class="bauk">
                    <a href="<?= base_url('admin_stksn/bauk'); ?>">
                        <i class="material-icons">add_task</i>
                        <p>BAUK</p>
                    </a>
                </li>
            <?php /* } */?>
            <?php 
                /* $ar = array('1','7');
                if (in_array($idu, $ar)) { */ 
            ?>
                <li class="humas">
                    <a href="<?= base_url('admin_stksn/humas'); ?>">
                        <i class="material-icons">add_task</i>
                        <p>HUMAS</p>
                    </a>
                </li>
            <?php /* } */?>
        </ul>
        <div class="ps-scrollbar-x-rail">
            <div class="ps-scrollbar-x"></div>
        </div>
        <div class="ps-scrollbar-y-rail">
            <div class="ps-scrollbar-y"></div>
        </div>
    </div>


<script type="text/javascript">
    $( document ).ready(function() {
        var tab = $('ul#main-tab').data('tab');
        $('ul#main-tab li.'+tab).addClass('actived');                       
        // alert(tab);                                                   
    });
</script>
    <div class="logo">
        <a href="#" class="simple-text">
            <img src="<?= base_url('assets/img/logo-stikes.png') ?>" style="max-height: 100px;">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav" id="main-tab" data-tab="">
            <li class="home">
                <a href="<?= base_url('admin_stksn'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>DASHBOARD</p>
                </a>
            </li>

            <?php 
               /*  $ar = array('1');
                if (in_array($idu, $ar)) { */ 
            ?> 
                <li>
                    <a href="./user.html">
                        <i class="material-icons">person</i>
                        <p>PROFILE</p>
                    </a>
                </li>
            <?php /* } */?>

            <?php 
               /*  $ar = array('1','3','4');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- BERITA & INFO -->
                <li class="nav-item berita infomhs">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#info-berita" aria-expanded="false">
                        <i class="material-icons">info</i>
                        <p> INFORMASI
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="info-berita" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item berita">
                                <a class="nav-link" href="<?= base_url('admin_stksn/informasi/berita'); ?>">
                                  <span class="sidebar-normal">Berita</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item infomhs">
                                <a class="nav-link" href="<?= base_url('admin_stksn/informasi/infomhs'); ?>">
                                    <span class="sidebar-normal">Info Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php /* } */?>

            <?php 
               /*  $ar = array('1');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- akademik -->
                <li class="nav-item ">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#akademik" aria-expanded="false">
                        <i class="material-icons">content_paste</i>
                        <p> AKADEMIK
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="akademik" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="sidebar-normal">DIII Farmasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">DIII Analis Kesehatan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">DIV Fisioterapi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">DIV Teknologi Laboratorium Medik</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">S1 Farmasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php /* } */?>

            <?php 
                /* $ar = array('1','5');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- LPPM -->
                <li class="nav-item lppm_penelitian lppm_pkm lppm_informasi lppm_agenda">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#lppm" aria-expanded="false">
                        <i class="material-icons">chrome_reader_mode</i>
                        <p> LPPM
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="lppm" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item lppm_penelitian">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_penelitian'); ?>">
                                  <span class="sidebar-normal">Penelitian</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_pkm">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_pkm'); ?>">
                                    <span class="sidebar-normal">Pengabdian Kepada Masyarakat</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_informasi">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_informasi'); ?>">
                                    <span class="sidebar-normal">Informasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_agenda">
                                <a class="nav-link" href="<?= base_url('admin_stksn/lppm_agenda'); ?>">
                                    <span class="sidebar-normal">Agenda LPPM</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-normal">Jurnal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php /* } */?>

            <?php 
                /* $ar = array('1','3','4');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- Kemahasiswaaan -->
                <li class="nav-item kemahasiswaan_download beasiswa kreativitas skp seminar ukm survey_kemahasiswaan organisasi">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#KEMAHASISWAAN" aria-expanded="false">
                        <i class="material-icons">supervised_user_circle</i>
                        <p> KEMAHASISWAAN
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="KEMAHASISWAAN" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item beasiswa">
                                <a class="nav-link" href="<?= base_url('admin_stksn/beasiswa'); ?>">
                                  <span class="sidebar-normal">Beasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item kreativitas">
                                <a class="nav-link" href="<?= base_url('admin_stksn/kreativitas'); ?>">
                                    <span class="sidebar-normal">Hibah Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item skp">
                                <a class="nav-link" href="<?= base_url('admin_stksn/skp'); ?>">
                                    <span class="sidebar-normal">SKP</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url('admin_stksn/alumni'); ?>">
                                    <span class="sidebar-normal">Alumni</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item seminar">
                                <a class="nav-link" href="<?= base_url('admin_stksn/seminar'); ?>">
                                    <span class="sidebar-normal">Seminar dan Workshop</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ukm">
                                <a class="nav-link" href="<?= base_url('admin_stksn/ukm'); ?>">
                                    <span class="sidebar-normal">Unit Kegiatan Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item organisasi">
                                <a class="nav-link" href="<?= base_url('admin_stksn/organisasi'); ?>">
                                    <span class="sidebar-normal">Organisasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item survey_kemahasiswaan">
                                <a class="nav-link" href="<?= base_url('admin_stksn/survey_kemahasiswaan'); ?>">
                                    <span class="sidebar-normal">Survey Kemahasiswaan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item kemahasiswaan_download">
                                <a class="nav-link" href="<?= base_url('admin_stksn/kemahasiswaan_download'); ?>">
                                    <span class="sidebar-normal">Download</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- cdc -->
                <li class="nav-item roc tracerstudy info_cdc benchmarking loker download_cdc">
                    <!-- <a class="nav-link" data-toggle="collapse" href="#cdc" aria-expanded="true">
                        <i class="material-icons">domain</i>
                        <p> CDC
                           <b class="caret"></b>
                        </p>
                    </a> -->
                    <a class="nav-link collapsed" data-toggle="collapse" href="#cdc" aria-expanded="false">
                        <i class="material-icons">domain</i>
                        <p> CDC
                           <b class="caret"></b>
                        </p>
                    </a>

                    <!-- class='collapse in' -->
                    <div class="collapse" id="cdc" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item roc">
                                <a class="nav-link" href="<?= base_url('admin_stksn/roc'); ?>">
                                  <span class="sidebar-normal">Recruitment on Campus</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item tracerstudy">
                                <a class="nav-link" href="<?= base_url('admin_stksn/tracerstudy'); ?>">
                                    <span class="sidebar-normal">Tracer Study</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item info_cdc">
                                <a class="nav-link" href="<?= base_url('admin_stksn/info_cdc'); ?>">
                                    <span class="sidebar-normal">Informasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item benchmarking">
                                <a class="nav-link" href="<?= base_url('admin_stksn/benchmarking'); ?>">
                                    <span class="sidebar-normal">Benchmarking</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item loker">
                                <a class="nav-link" href="<?= base_url('admin_stksn/loker'); ?>">
                                    <span class="sidebar-normal">Lowongan Pekerjaan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item cdc_download">
                                <a class="nav-link" href="<?= base_url('admin_stksn/download_cdc'); ?>">
                                    <span class="sidebar-normal">Download</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- PMB -->
                <!-- <li>
                    <a href="<?= base_url('admin_stksn/pmb'); ?>">
                        <i class="material-icons text-gray">person_add</i>
                        <p>PMB</p>
                    </a>
                </li> -->
            <?php /* } */?>
            <?php 
                /* $ar = array('1','6');
                if (in_array($idu, $ar)) { */ 
            ?>
                <li class="bauk">
                    <a href="<?= base_url('admin_stksn/bauk'); ?>">
                        <i class="material-icons">add_task</i>
                        <p>BAUK</p>
                    </a>
                </li>
            <?php /* } */?>
            <?php 
                /* $ar = array('1','7');
                if (in_array($idu, $ar)) { */ 
            ?>
                <li class="humas">
                    <a href="<?= base_url('admin_stksn/humas'); ?>">
                        <i class="material-icons">add_task</i>
                        <p>HUMAS</p>
                    </a>
                </li>
            <?php /* } */?>
        </ul>
    </div>
</div>

