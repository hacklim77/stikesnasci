<?php 
    cek_not_login();
?> 


<div class="sidebar" data-color="purple" data-image="<?= base_url('assets/img/sidebar-1.jpg') ?>">
    <div class="logo">
        <a href="<?= base_url('dashboard') ?>" class="simple-text">
            <img src="<?= base_url('assets/img/logo-stikes.png') ?>" style="max-height: 100px;">
        </a>
    </div>
    
    <div class="sidebar-wrapper">
        <ul class="nav" id="main-tab">

            <li class="home <?php if($this->uri->segment(1)=="dashboard"){echo "actived";} ?>">
                <a href="<?= base_url('dashboard'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>DASHBOARD</p>
                </a>
            </li>

            <?php
                if ($this->session->userdata('id_admin') == 1) { 
            ?> 
                <li>
                    <a href="./user.html">
                        <i class="material-icons">person</i>
                        <p>PROFILE</p>
                    </a>
                </li>
            <?php  } ?>

            <?php 
                if ($this->session->userdata('id_admin') == 1 || $this->session->userdata('id_admin') == 3 || $this->session->userdata('id_admin') == 4) {
                /* $ar = array('1','3','4');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- BERITA & INFO -->
                <li class="nav-item berita infomhs <?php if($this->uri->segment(1)=="berita") {echo "actived";} ?>">
                    <a class="nav-link" data-toggle="collapse" href="#info-berita" aria-expanded="false">
                        <i class="material-icons">info</i>
                        <p> INFORMASI
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="info-berita" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item berita <?php if($this->uri->segment(2)=="tblBerita") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('berita/tblBerita'); ?>">
                                  <span class="sidebar-normal">Berita</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item infomhs <?php if($this->uri->segment(2)=="tblInfomhs") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('berita/tblInfomhs'); ?>">
                                    <span class="sidebar-normal">Info Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>

            <?php
                if ($this->session->userdata('id_admin' == 1)) {  
               /*  $ar = array('1');
                if (in_array($idu, $ar)) {  */
            ?>
                <!-- akademik -->
                <li class="nav-item <?php if($this->uri->segment(1)=="akademik") {echo "actived";} ?>">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#akademik" aria-expanded="false">
                        <i class="material-icons">content_paste</i>
                        <p> AKADEMIK
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="akademik" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_d3farmasi") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('akademik/tbl_d3farmasi'); ?>">
                                  <span class="sidebar-normal">DIII Farmasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_d3tlm") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('akademik/tbl_d3tlm'); ?>">
                                    <span class="sidebar-normal">DIII Teknologi Laboratorium Medis</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_d4fisioterapi") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('akademik/tbl_d4fisioterapi'); ?>">
                                    <span class="sidebar-normal">DIV Fisioterapi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_d4tlm") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('akademik/tbl_d4tlm'); ?>">
                                    <span class="sidebar-normal">DIV Teknologi Laboratorium Medis</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_s1farmasi") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('akademik/tbl_s1farmasi'); ?>">
                                    <span class="sidebar-normal">S1 Farmasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>

            <?php
                if ($this->session->userdata('id_admin') == 1 || $this->session->userdata('id_admin') == 5) { 
                /* $ar = array('1','5');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- LPPM -->
                <li class="nav-item lppm_penelitian lppm_pkm lppm_informasi lppm_agenda <?php if($this->uri->segment(1)=="lppm") {echo "actived";} ?>">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#lppm" aria-expanded="false">
                        <i class="material-icons">chrome_reader_mode</i>
                        <p> LPPM
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="lppm" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item lppm_penelitian <?php if($this->uri->segment(2)=="tbl_lppmpenelitian") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('lppm/tbl_lppmpenelitian'); ?>">
                                  <span class="sidebar-normal">Penelitian</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_pkm <?php if($this->uri->segment(2)=="tbl_lppmpkm") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('lppm/tbl_lppmpkm'); ?>">
                                    <span class="sidebar-normal">Pengabdian Kepada Masyarakat</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_informasi <?php if($this->uri->segment(2)=="tbl_lppminfo") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('lppm/tbl_lppminfo'); ?>">
                                    <span class="sidebar-normal">Informasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item lppm_agenda <?php if($this->uri->segment(2)=="tbl_lppmagenda") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('lppm/tbl_lppmagenda'); ?>">
                                    <span class="sidebar-normal">Agenda LPPM</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_lppmjurnal") {echo "actived";} ?>">
                                <a class="nav-link" href=<?= base_url('lppm/tbl_lppmjurnal') ?>>
                                    <span class="sidebar-normal">Jurnal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php  } ?>

            <?php
                if ($this->session->userdata('id_admin') == 1 || $this->session->userdata('id_admin') == 3 || $this->session->userdata('id_admin') == 4 ) { 
               /*  $ar = array('1','3','4');
                if (in_array($idu, $ar)) { */ 
            ?>
                <!-- Kemahasiswaaan -->
                <li class="nav-item kemahasiswaan_download beasiswa kreativitas skp seminar ukm survey_kemahasiswaan organisasi <?php if($this->uri->segment(1)=="kemahasiswaan") {echo "actived";} ?>">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#KEMAHASISWAAN" aria-expanded="false">
                        <i class="material-icons">supervised_user_circle</i>
                        <p> KEMAHASISWAAN
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="KEMAHASISWAAN" aria-expanded="false">
                        <ul class="nav">
                            <li class="nav-item beasiswa <?php if($this->uri->segment(2)=="tbl_beasiswa") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_beasiswa'); ?>">
                                  <span class="sidebar-normal">Beasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item kreativitas <?php if($this->uri->segment(2)=="tbl_hibahmhs") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_hibahmhs'); ?>">
                                    <span class="sidebar-normal">Hibah Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item skp <?php if($this->uri->segment(2)=="tbl_skp") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_skp'); ?>">
                                    <span class="sidebar-normal">SKP</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item <?php if($this->uri->segment(2)=="tbl_alumni") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_alumni'); ?>">
                                    <span class="sidebar-normal">Alumni</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item seminar <?php if($this->uri->segment(2)=="tbl_seminar") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_seminar'); ?>">
                                    <span class="sidebar-normal">Seminar dan Workshop</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item ukm <?php if($this->uri->segment(2)=="tbl_ukm") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_ukm'); ?>">
                                    <span class="sidebar-normal">Unit Kegiatan Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item organisasi <?php if($this->uri->segment(2)=="tbl_organisasi") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_organisasi'); ?>">
                                    <span class="sidebar-normal">Organisasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item survey_kemahasiswaan <?php if($this->uri->segment(2)=="tbl_survey") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_survey'); ?>">
                                    <span class="sidebar-normal">Survey Kemahasiswaan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item kemahasiswaan_download <?php if($this->uri->segment(2)=="tbl_download") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('kemahasiswaan/tbl_download'); ?>">
                                    <span class="sidebar-normal">Download</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- cdc -->
                <li class="nav-item roc tracerstudy info_cdc benchmarking loker download_cdc  <?php if($this->uri->segment(1)=="cdc") {echo "actived";} ?>">
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
                            <li class="nav-item roc <?php if($this->uri->segment(2)=="tbl_roc") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('cdc/tbl_roc'); ?>">
                                  <span class="sidebar-normal">Recruitment on Campus</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item tracerstudy <?php if($this->uri->segment(2)=="tbl_tracerStudy") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('cdc/tbl_tracerStudy'); ?>">
                                    <span class="sidebar-normal">Tracer Study</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item info_cdc <?php if($this->uri->segment(2)=="tbl_informasi") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('cdc/tbl_informasi'); ?>">
                                    <span class="sidebar-normal">Informasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item benchmarking <?php if($this->uri->segment(2)=="tbl_benchmarking") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('cdc/tbl_benchmarking'); ?>">
                                    <span class="sidebar-normal">Benchmarking</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item loker <?php if($this->uri->segment(2)=="tbl_cdcloker") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('cdc/tbl_cdcloker'); ?>">
                                    <span class="sidebar-normal">Lowongan Pekerjaan</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item cdc_download <?php if($this->uri->segment(2)=="tbl_download") {echo "actived";} ?>">
                                <a class="nav-link" href="<?= base_url('cdc/tbl_download'); ?>">
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
            <?php  } ?>
            <?php
                if ($this->session->userdata('id_admin') == 1 || $this->session->userdata('id_admin') == 6) {
                /* $ar = array('1','6');
                if (in_array($idu, $ar)) { */ 
            ?>
                <li class="bauk <?php if($this->uri->segment(2)=="Tbl_bauk") {echo "actived";} ?>">
                    <a href="<?= base_url('bauk/Tbl_bauk'); ?>">
                        <i class="material-icons">add_task</i>
                        <p>BAUK</p>
                    </a>
                </li>
            <?php  } ?>
            <?php
                if ($this->session->userdata('id_admin') == 1 || $this->session->userdata('id_admin') == 7) { 
                /* $ar = array('1','7');
                if (in_array($idu, $ar)) { */ 
            ?>
                <li class="humas <?php if($this->uri->segment(2)=="Tbl_humas") {echo "actived";} ?>">
                    <a href="<?= base_url('humas/Tbl_humas'); ?>">
                        <i class="material-icons">add_task</i>
                        <p>HUMAS</p>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <div class="ps-scrollbar-x-rail">
            <div class="ps-scrollbar-x"></div>
        </div>
        <div class="ps-scrollbar-y-rail">
            <div class="ps-scrollbar-y"></div>
        </div>
    </div>



</div>

