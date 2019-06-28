<html>
    <head>
        <meta charset="utf-8" /> <!-- first element so that the encoding is applied to the title etc. -->
        <title>Vertretung während Reise – 1. Dezember 2012</title>
        <link rel="stylesheet" href="letter.css" />
        <style>
            #footer{
                height:50px;
                line-height:2px;
                font-family: "Arial", "Verdana", sans-serif;
                font-size: 5pt;
                /* background:#333; */
                color:#333;
                position:absolute;
                bottom:-20px;
            }
            .content{
                font-family: "Arial", "Verdana", sans-serif;
                font-size: 11pt;
                margin-left: 15px;
                margin-right: 15px;
                margin-bottom: 20px;
                padding: 0px;
                page-break-after: always;
                position: relative;
                z-index: 0;
                
            }
            .pagebreak { page-break-before: always; }
            div.a {
                    text-transform: uppercase;
                    }
            .header1{
            /* background:#0cf; */
            font-family: "Arial", "Verdana", sans-serif;
            margin-top:50px;
            margin-bottom: -25px;
            }
        
            #header2{
            padding-top:-24px;
            }
            #header3{
            padding-top:-15px;
            padding-bottom: -30px;
            }
            #header4{
            padding-top:-32px;
            padding-bottom: -35px;

            }

            #pihak{
                margin-top: -500px;
                margin-left: auto;
                margin-right: auto;
                display:table;
                
            }
            #pihak ol{
                text-align: justify;
            }
            #pihak ol li{
                margin-top: 15px;
                text-align: justify;
                margin-bottom: 15px;
            }

            #pihak2 {
                margin-top: -40px;
                margin-left: auto;
                margin-right: auto;
                display:table;
            }
            #pihak2 ol{
                text-align: justify;
            }
            #pihak2 ol li{
                /* margin-top: 20px; */
                text-align: justify;
                /* margin-bottom: 5px; */
            }
            
            #pihak3 {
                /* margin-top: -40px; */
                margin-left: auto;
                margin-right: auto;
                display:table;
            }
            #pihak3 ol{
                text-align: justify;
            }
            #pihak3 ol li{
                /* margin-top: 20px; */
                text-align: justify;
                /* margin-bottom: 5px; */
            }

            #pihak3 ul li{
                padding-left: -20px;
            }
            
            #pihak4 {
                /* margin-top: -40px; */
                margin-left: auto;
                margin-right: auto;
                display:table;
            }
            #pihak4 ol{
                text-align: justify;
            }
            #pihak4 ol li{
                /* margin-top: 20px; */
                text-align: justify;
                /* margin-bottom: 5px; */
            }

            #pihak4 ul li{
                padding-left: -20px;
            }

        </style>
    </head>

    <body>
        <div class="header1">
            <center>
                <h4><u>PERJANJIAN KERJA UNTUK WAKTU TERTENTU</u><br>
                {{ $data->noperj }}</h4>
            </center>
        </div>
        <div class="content"> <!-- use this div only if it is required for styling -->
            <p align="justify">
                Pada hari ini, selasa tanggal ??dua puluh dua?? bulan ??januari?? tahun ??dua ribu sembilan belas??, bertempat di Jakarta:
            </p>
            <div id="pihak">
                <ol>
                    <li>
                        <b>NILO WIDYO MUDITO</b>, Kepala Divisi Bisnis Mineral dan Batubara bertindak untuk dan atas nama Direktur PT. Surveyor Indonesia berdasarkan Akta Notaris Surjadi, SH., MKn., MM. No.10 tentang Pencabutan dan Pengangkatan Pimpinan Serta Tugas Wewenang Kepala Divisi Bisnis Mineral dan Batubara tanggal 21 Juli 2016, berkedudukan di Gedung Adhi Graha Lt. 4 -11 Jalan Jenderal Gatot Subroto Kavling 56 Jakarta 12950.
                        selanjutnya disebut <b>PIHAK PERTAMA</b>.
                    </li>
                    <li>
                        <b>{{$data->employee->name}}</b>, tempat dan tanggal lahir di ??{{$data->employee->tempat_lahir}}, {{$data->employee->tanggal_lahir}}??, jenis kelamin ??Perempuan??, bertempat tinggal di ??Jl. Komplek Goodyear Blok E No.4 Ciomas Rahayu Bogor Jawa Barat??. 
                        selanjutnya disebut <b>PIHAK KEDUA</b>.
                    </li>
                </ol>
            </div>
            <p align="justify">
                Maka <b>PIHAK PERTAMA</b> yang didasarkan atas kesepakatan <b>PIHAK KEDUA</b> mengadakan Perjanjian Kerja Untuk Waktu Tertentu dengan ketentuan sebagai berikut : 
            </p>
            <div id="header2">
                <center>
                    <h4>
                        <b>Pasal 1<br>
                        JABATAN, LOKASI PENEMPATAN DAN MASA PERJANJIAN KERJA</b>
                    </h4>
                </center>
            </div>            
            <div id="pihak2">
                <ol>
                    <li>
                        <b>PIHAK PERTAMA</b> menempatkan <b>PIHAK KEDUA</b> sebagai Staff Marketing di wilayah Divisi Bisnis Mineral dan Batubara. 
                    </li>
                    
                    <li>
                        Perjanjian  kerja untuk waktu tertentu ini berlaku selama ??3 (tiga)?? bulan terhitung mulai tanggal ??28 Januari 2019?? sampai dengan tanggal ??27 April 2019?? 
                    </li>
                    <li>
                        Bila perjanjian kerja ini berakhir sesuai dengan tanggal yang ditentukan dalam ayat 2 (dua) pasal ini, maka <b>PIHAK PERTAMA</b> dapat mempepanjang perjanjian kerja ini bila perusahaan membutuhkan tenaga <b>PIHAK KEDUA</b>, dan disepakati oleh <b>PIHAK KEDUA</b>.
                    </li>
                    <li>
                        <b>PIHAK PERTAMA</b> harus memberitahukan secara tertulis kepada <b>PIHAK KEDUA</b> tentang pemutusan (pengakhiran) atau perpanjangan perjanjian kerja selambat-lambatnya 1 (satu) bulan sebelum masa perjanjian kerja sebagaimana yang disebutkan dalam ayat (2) pasal ini berakhir.
                    </li>
                </ol>
            </div>
            <div id="header3">
                <center>
                    <h4>
                        <b>Pasal 2<br>
                        HARI KERJA DAN WAKTU ISTIRAHAT</b>
                    </h4>
                </center>
            </div>
            <p align = "justify">
                Hari kerja ditentukan : hari Senin s/d hari Jumat ; <br>
                Waktu kerja	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Jam 07.30 WIB s/d 16.30 WIB ;<br>
                Waktu istirahat	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Jam 12.00 WIB s/d 13.00. <br>   
                Hari kerja, waktu kerja dan waktu istirahat dapat ditentukan lain berdasarkan kesepakatan kedua belah pihak dan tidak bertentangan dengan Perundang-undangan dan Peraturan Ketenagakerjaan yang berlaku.                         
            </p>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 3<br>
                        UPAH/GAJI DAN FASILITAS</b>
                    </h4>
                </center>
            </div>
            <div id="pihak3">
                <ol style="list-style-position: outside;" >
                    <li>
                        Gaji/Upah diberikan oleh <b>PIHAK PERTAMA</b> sebesar ??Rp4.200.000??,- (??Empat Juta Dua Ratus Ribu Rupiah??)/bulan yang dibayarkan pada tanggal 27 setiap bulannya 
                        dengan dipotong Jamsostek sebesar 2% (dua persen) dari upah. <br> 
                        - Gaji Pokok&nbsp;&nbsp;&nbsp;: <br>
                        - Tunj Kinerja&nbsp;:
                        
                        <hr style="margin-left:-28pt;"width="100%" align="left" margin>
                    </li>
                    <div style="margin-left:-692px; text-align:left;" id="footer">
                            <br>
                            <br>
                        PERJANJIAN KERJA UNTUK WAKTU TERTENTU <span style="padding-left:630px;">halaman 1 dari 6
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        dd<span style="padding-left:30px;">/mrd
                    </div>
                    <div class="pagebreak"> </div>
                    <br>
                    <br>
                    <li>
                        Tunjangan Hari Raya (THR) diberikan kepada <b>PIHAK KEDUA</b> sebesar Rp??4.200.000??,- (??Empat Juta Dua Ratus Ribu Rupiah??), dengan ketentuan:
                        <ol style="list-style-type: lower-alpha; padding-left: 23px;">
                            <li>
                                Diberikan secara penuh bila telah mempunyai masa kerja 12 bulan (1 tahun) berturut-turut dan diberikan secara proporsional bila bekerja berturut-turut minimal 3 bulan pada saat hari raya Idul Fitri.
                            </li>
                            <li>
                                Pembayaran THR dilakukan oleh PIHAK PERTAMA 14 (empat belas) hari sebelum hari raya Idul Fitri tiba
                            </li>
                        </ol>
                    </li>
                    <li>
                    <b>PIHAK KEDUA</b> berhak atas cuti selama 12 hari kerja, apabila <b>PIHAK KEDUA</b> telah bekerja selama 1 (satu) tahun berturut-turut pada <b>PIHAK PERTAMA</b>.
                    </li>
                    <li>
                        <b>PIHAK KEDUA</b> diberikan Tunjangan Pajak Penghasilan (Pph).
                    </li>
                    <li>
                        Fasilitas kesehatan menggunakan BPJS Kesehatan dan pembayaran iuaran sesuai dengan ketentuan yang berlaku, serta diberikan bantuan kesehatan dengan ketentuan sebagai berikut:  
                        <ol style="list-style-type: lower-alpha; padding-left: 23px;">
                            <li>
                                Plafon bantuan biaya rawat jalan bagi pegawai istri dan maximum 3 orang anak dihitung dengan ketentuan sebagai berikut : 
                                <ul style="list-style-type:disc;">
                                    <li>Pegawai         <span style="padding-left:61px;"> : Rp 150.000,-/bulan</span></li>
                                    <li>Istri pegawai	<span style="padding-left:35px;"> : Rp 75.000,-/bulan</span></li>
                                    <li>Anak pegawai	<span style="padding-left:25px;"> : Rp 75.000,-/bulan</span></li>
                                    <li>Perawatan gigi	<span style="padding-left:20px;"> : Rp 1.500.000,-/tahun untuk pegawai, istri dan anak</span></li>
                                </ul>
                                Sisa plafon bantuan biaya rawat jalan yang tidak diklaim sampai pada akhir kontrak dapat dikembalikan sebesar 75% tidak termasuk perawatan gigi.
                            </li>
                            <li>
                                Plafon rawat inap sebesar Rp. 300.000,-/hari untuk pegawai, istri dan maximum 3 orang anak  selama 30 hari penginapan dengan jumlah maksimum sebesar Rp 25.000.000,-/tahun.
                            </li>
                            <li>
                                Penggantian pembelian kacamata atau lensa kontak diberikan sebagai berikut:
                                <ul style="list-style-type:disc;">
                                    <li>Pegawai sebesar  Rp 1.250.000,-/tahun</li>
                                    <li>Keluarga pegawai Rp 400.000,-/tahun</li>
                                </ul>
                            </li>
                            <li>Beberapa Pengecualian <br>
                                Perusahaan tidak memberikan penggantian biaya konsultasi, tindakan pengobatan dan perawatan dalam bentuk apapun dalam hal-hal sebagai berikut:
                                <ul style="list-style-type:disc;">
                                    <li>
                                        Cidera yang timbul langsung atau tidak langsung oleh perang, diumumkan atau tidak diumumkan.
                                    </li>
                                    <li>
                                        Bedah, pengobatan dan perawatan kosmetika yang berhubungan dengan kecantikan termasuk bedah plastik dan lain-lain untuk tujuan keindahan tubuh muka; termasuk didalamnya bedah laser mata, program diet, acne, tindik ;
                                    </li>
                                    <li>
                                        Inseminasi buatan dan program bayi tabung.
                                    </li>
                                    <li>
                                        Penyakit menular yang berdasarkan hukum harus diasingkan atau dikarantinakan.
                                    </li>
                                    <li>
                                        Cidera yang diakibatkan gangguan kejiwaan atau mencederai diri sendiri atau keadaan berhubungan dengan gangguan kejiwaan, perawatan istirahat atau perawatan sanitasi kecanduan obat-obatan, alkohol, maupun obat terlarang lainnya;
                                    </li>
                                    <li>
                                        Pengobatan perawatan akibat suatu tindakan yang bersifat sengaja, antara lain pengguguran kandungan, kecanduan alcohol/obat bius, percobaan bunuh diri, operasi perawatan untuk tujuan kecantikan, termasuk penyakit yang timbul akibat keadan tersebut.
                                    </li>
                                    <li>
                                        Rawat inap yang diakibat oleh gangguan psikis penyakit mental lainnya (termasuk neurosis, manifestasi dari gangguan kejiwaan atau psikosomatis).
                                    </li>
                                    <li>
                                        Penyakit kelamin yang ditularkan melalui hubungan seks termasuk AIDS.
                                    </li>
                                    <li>
                                        Pembuatan dan pemasangan gigi palsu, caping, kawat gigi, mahkota dan jembatan dalam bentuk apapun, kecuali bila disebabkan oleh kecelakaaan kerja yang dialami pegawai.
                                    </li>
                                    <li>
                                        Semua jenis kelainan cacat bawaan, seperti kusta, bibir sumbing, kelainan jantung dan kelainan lainnya sesuai dengan diagnosa dokter yang merawat.
                                        <hr style="margin-left:-60pt;"width="100%" align="left" margin>
                                    </li>
                                    <div style="margin-left:-692px; text-align:left;" id="footer">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        PERJANJIAN KERJA UNTUK WAKTU TERTENTU <span style="padding-left:630px;">halaman 2 dari 6
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        dd<span style="padding-left:30px;">/mrd
                                    </div>
                                    <div class="pagebreak"> </div>
                                    <br>
                                    <br>
                                    <br>
                                    <li>
                                        Pelayanan kesehatan yang belum diakui secara luas dibidang kedokteran kecuali patah tulang (seperti: pijat, pengobatan alternatif, ramuan tradisional, jamu, akupuntur, akupresur dan lain-lain).
                                    </li>
                                    <li>
                                        Penyakit atau cidera yang terjadi dalam hubungan kerja dengan pihak ketiga di luar penugasan dari perusahaan.
                                    </li>
                                    <li>
                                        Penyakit atau cidera yang diakibat melakukan tindakan atau kegiatan-kegiatan yang melanggar hukum.
                                    </li>
                                </ul>
                            </li>                            
                        </ol>
                    </li>
                    <li>
                        <b>PIHAK PERTAMA</b> memberikan bantuan makan siang, sesuai dengan ketentuan perusahaan.
                    </li>
                    <li>
                        Apabila melakukan perjalanan dinas, maka diberikan uang saku menginap sebesar Rp. 100.000,-/hari dan apabila tidak menginap diberikan sebesar Rp. 50.000,-/hari.
                    </li>
                    <li>
                        <b>PIHAK PERTAMA</b> dapat memberikan Insentif atau jasa produksi sesuai dengan kebijakan dan kemampuan <b>PIHAK PERTAMA</b>.
                    </li>
                    <li>
                        <b>PIHAK KEDUA</b> diberikan bantuan beasiswa pendidikan anak pegawai sesuai dengan kebijakan <b>PIHAK PERTAMA</b>
                    </li>
                    <li>
                        Selain Gaji/ upah dan tunjangan/fasilitas lain sebagaimana yang disebutkan dalam pasal ini, maka <b>PIHAK KEDUA</b> tidak diberikan tunjangan/ fasilitas pegawai lainnya (seperti biaya lisensi, asuransi pensiun dan lain-lain) yang tidak disebutkan dalam perjanjian kerja khusus ini.
                    </li>
                </ol>
            </div>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 4<br>
                        BIDANG TUGAS, WEWENANG DAN TANGGUNG JAWAB </b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol style="list-style-position: outside;">
                    <li>
                    Tempat tugas <b>PIHAK KEDUA</b> adalah di Wilayah Divisi Bisnis Mineral dan Batubara atau sesuai penugasan dari <b>PIHAK PERTAMA</b> atau pejabat lain yang ditunjuk.
                    </li>
                    <li>
                    Bidang tugas/ tugas kerja, tanggung jawab dan wewenang <b>PIHAK KEDUA</b> akan ditentukan kemudian oleh <b>PIHAK PERTAMA</b> atau pejabat lain yang ditunjuk.
                    </li>
                    <li>
                    <b>PIHAK KEDUA</b> bertanggung jawab atas semua pelaksanaan bidang tugas yang disebutkan dalam ayat (2) pasal ini kepada <b>PIHAK PERTAMA</b> atau pejabat lain yang ditunjuk.
                    </li>
                    <li>
                    <b>PIHAK KEDUA</b> wajib mematuhi dan melaksanakan peraturan perusahaan dan peraturan perusahaan yang berlaku.
                    </li>
                </ol>
            </div>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 5<br>
                        TIDAK MASUK KERJA </b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>
                    Apabila <b>PIHAK KEDUA</b>  tidak masuk kerja pada hari kerja karena alasan seperti sakit dan kematian salah satu anggota keluarga (orang tua kandung, Istri atau anak), hal tersebut harus dibuktikan dengan surat keterangan dokter (karena sakit) dan surat kematian (akte kematian).
                    </li>
                    <li>Apabila <b>PIHAK KEDUA</b> tidak masuk kerja selama 5 (lima) hari kerja berturut-turut dalam jadwal kerja yang telah ditentukan tanpa ada pemberitahuan baik lisan maupun secara tertulis sebelumnya, maka <b>PIHAK KEDUA</b> dinyatakan telah mengundurkan diri dari PT Surveyor Indonesia dan akan diproses sesuai Undang-undang yang berlaku.
                    </li>
                </ol>
            </div>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 6<br>
                        SCHORSING</b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>
                    <b>PIHAK PERTAMA</b> dapat menjatuhkan schorsing pada <B>PIHAK KEDUA</B> apabila <b>PIHAK KEDUA</b> melakukan pelanggaran terhadap tata tertib kerja dan atau tidak menjalankan kewajiban sebagaimana mestinya atau melakukan tindakan yang merugikan perusahaan.
                    </li>
                    <li>
                    Sebelum schorsing dijatuhkan pada <b>PIHAK KEDUA</b>, terlebih dahulu dilakukan teguran, sampai dengan dijatuhkannya surat peringatan.
                    </li>
                    <li>
                    Schorsing diberlakukan sampai adanya putusan dari Pengadilan Perselisihan Hubungan Industrial (PPHI).
                    </li>
                </ol>
            </div>
            <div id="footer">
                    <hr>
                    <br>
                    <br>
                PERJANJIAN KERJA UNTUK WAKTU TERTENTU <span style="padding-left:481px;">halaman 3 dari 6
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                dd<span style="padding-left:30px;">/mrd
            </div>
            <div class="pagebreak"> </div>
            <br>
            <br>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 7<br>
                        SCHORSING</b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>
                        Pemutusan hubungan kerja dalam masa perjanjian kerja ini dilakukan dengan ketentuan sebagai berikut :
                        <ol style="list-style-type: lower-alpha; padding-left: 23px;">
                            <li>
                            Memberikan keterangan palsu atau dipalsukan kepada <b>PIHAK PERTAMA</b> dalam pembuatan perjanjian kerja ini ;
                            </li>
                            <li>
                            Mabuk, madat, memakai obat bius atau narkotik ditempat kerja ;
                            </li>
                            <li>
                            Mencuri, menipu, menggelapkan atau melakukan kejahatan lainnya, baik yang menyangkut kepentingan <b>PIHAK PERTAMA</b> maupun pihak lainnya ;
                            </li>
                            <li>
                            >Membujuk pimpinan atau pegawai <b>PIHAK PERTAMA</b> untuk melakukan sesuatu yang bertentangan dengan hukum atau kesusilaan ;
                            </li>
                            <li>
                            Dengan sengaja atau dengan kecerobohannya merusak atau membiarkan barang-barang atau dokumen-dokumen milik atau yang berada dalam penguasaan milik <b>PIHAK PERTAMA</b> sehingga terancam bahaya ;
                            </li>
                            <li>
                            Dengan sengaja walaupun sudah diperingatkan membiarkan dirinya atau teman sekerjanya dalam keadaan bahaya ;
                            </li>
                            <li>
                            Membuka rahasia perusahaan ;
                            </li>
                            <li>
                            Tidak melaksanakan tugas-tugas / perintah sesuai yang telah ditetapkan oleh <b>PIHAK PERTAMA</b> atau Pejabat lain yang ditunjuk, sedangkan tugas/ perintah tersebut sesuai dengan maksud perjanjian kerja ini ;
                            </li>
                            <li>
                            Tidak taat dengan peraturan kerja yang telah ditetapkan (Indisipliner) ;
                            </li>
                            <li>
                            Melanggar ketentuan pasal 11 ayat (2) dan (3).
                            </li>
                        </ol>
                    </li>
                    <li>
                    <b>PIHAK PERTAMA</b> tidak berkewajiban memberikan ganti rugi dalam bentuk apapun juga bila  terjadinya Pemutusan Hubungan Kerja (PHK) karena hal-hal yang tercantum dalam ayat (1).
                    </li>
                    <li>
                    Apabila salah satu pihak mengakhiri hubungan kerja sebelum berakhirnya jangka waktu yang ditetapkan dalam pasal 1 ayat (2) atau berakhirnya hubungan kerja bukan karena ketentuan yang ditetapkan dalam ayat (1) pasal ini, pihak yang mengakhiri hubungan kerja diwajibkan membayar ganti rugi kepada pihak lainnya sebesar upah <b>PIHAK KEDUA</b> sampai batas waktu berakhirnya jangka waktu perjanjian kerja.
                    </li>
                    <li>
                    Jika <b>PIHAK KEDUA</b> yang mengakhiri hubungan kerja sebelum jangka waktu kerja ditetapkan berakhir dan <b>tidak membayar</b> ganti rugi kepada <b>PIHAK PERTAMA</b> sebagaimana diatur dalam ayat (3) diatas, maka :
                        <ol style="list-style-type: lower-alpha; padding-left: 23px;">
                            <li>
                            <b>PIHAK KEDUA</b> tidak diberikan Surat Keterangan Kerja.
                            </li>
                            <li>
                            Diterbitkan surat Pemberhentian bahwa <b>PIHAK KEDUA</b> mengundurkan diri secara tidak baik karena tidak memenuhi kewajibannya sebagaimana yang telah  disepakati (wanprestasi).
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 8<br>
                        BERAKHIRNYA PERJANJIAN KERJA</b>
                    </h4>
                </center>
            </div>
            <p align="justify">
                Bila hubungan kerja ini putus demi hukum karena berakhirnya masa perjanjian kerja, maka bila perjanjian kerja ini tidak dilanjutkan dengan suatu hubungan kerja baru, maka perjanjian kerja ini akan berakhir secara otomatis dan <b>PIHAK KEDUA</b> wajib menyerahkan semua hal yang dipercayakan perusahaan kepada <b>PIHAK PERTAMA</b>.  
            </p>
            <div id="footer">
                    <hr>
                    <br>
                    <br>
                PERJANJIAN KERJA UNTUK WAKTU TERTENTU <span style="padding-left:481px;">halaman 4 dari 6
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                dd<span style="padding-left:30px;">/mrd
            </div>
            <div class="pagebreak"> </div>
            <br>
            <br>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 9<br>
                        FORCE MAJEURE</b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>Yang dimaksud dengan Force Majeure dalam perjanjian ini adalah keadaan-keadaan sebagai berikut :
                        <ol style="list-style-type: lower-alpha; padding-left: 23px;">
                            <li>
                            Gempa bumi besar, taufan, banjir besar, tanah longsor, wabah penyakit dan bencana alam;
                            </li>
                            <li>
                            Pemberontakan, pemogokan umum, huru hara, sabotase, perang dan kebijaksanaan pemerintah yang berakibat langsung terhadap perjanjian ini.
                            </li>
                        </ol>
                    </li>
                    <li>
                        Dalam hal terjadi Force Majeure sebagaimana yang dimaksud pada ayat (1) pasal ini, maka pihak yang terkena wajib memberitahukan secara tertulis kepada pihak lainnya dalam waktu 7 (tujuh) hari kalender sejak diterima pemberitahuan oleh pihak lainnya dimana adanya Force Majeure tersebut diterangkan secara resmi oleh pejabat pemerintah yang berwenang.
                    </li>
                    <li>
                        Kelalaian atau keterlambatan dalam memenuhi kewajiban memberitahukan sebagaimana dimaksud pada ayat (2) pasal ini, mengakibatkan tidak diakuinya oleh pihak lainnya peristiwa dimaksud pada ayat (1) pasal ini sebagai Force Majeure.
                    </li>
                    <li>
                        Akibat adanya Force Majeure, maka <b>PIHAK PERTAMA</b> dibebaskan dari pembayaran sisa kontrak <b>PIHAK KEDUA</b>.
                    </li>
                </ol>
            </div>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 10<br>
                        PENYELESAIAN PERSELISIHANE</b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>
                    Apabila kemudian hari terjadi perselisihan dalam penafsiran atau pelaksanaan ketentuan-ketentuan dari perjanjian kerja ini, kedua belah pihak setuju untuk menyelesaikannya secara musyawarah dan mufakat.
                    </li>
                    <li>
                    Apabila dengan cara musyawarah dan mufakat, perselisihan tidak dapat diselesaikan, maka kedua belah pihak sepakat untuk menyelesaikannya sesuai dengan per undang-undangan yang berlaku.
                    </li>
                </ol>
            </div>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 11<br>
                        LAIN - LAIN</b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>
                    <b>PIHAK PERTAMA</b> tidak menanggung biaya perpanjangan sertifikat dan tidak memberikan jaminan adanya pendidikan sesuai dengan kualifikasi.
                    </li>
                    <li>
                    Selama berlangsungnya perjanjian kerja ini <b>PIHAK KEDUA</b> dilarang bekerja, memberi informasi milik perusahaan, menggunakan fasilitas perusahaan, membocorkan rahasia perusahaan pada pihak lain tanpa persetujuan tertulis terlebih dahulu dari <b>PIHAK PERTAMA</b>.
                    </li>
                    <li>
                    Pada saat ditandatanganinya dan berlakunya perjanjian ini, <b>PIHAK KEDUA</b> tidak sedang terikat perjanjian kerja dengan pihak lainnya.
                    </li>
                </ol>
            </div>
            <div id="footer">
                    <hr>
                    <br>
                    <br>
                PERJANJIAN KERJA UNTUK WAKTU TERTENTU <span style="padding-left:481px;">halaman 5 dari 6
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                dd<span style="padding-left:30px;">/mrd
            </div>
            <div class="pagebreak"> </div>
            <br>
            <br>
            <br>
            <div id="header4">
                <center>
                    <h4>
                        <b>Pasal 12<br>
                        PENUTUP</b>
                    </h4>
                </center>
            </div>
            <div id="pihak4">
                <ol>
                    <li>
                    Dengan ditanda tanganinya Perjanjian Kerja ini, maka seluruh pasal dan isinya telah dimengerti dan disetujui oleh kedua belah pihak.
                    </li>
                    <li>
                    Akte perjanjian ini dibuat rangkap dua, yang setiap rangkap mempunyai kekuatan hukum yang sama sebagai asli.
                    </li>
                </ol>
            </div>
            <br>
            <br>
            <br>
            <br>
            <table style="width:100%">
            <tr>
                <td style="width:10%"></td>
                <td style="width:40%"><center><h3>PIHAK PERTAMA</h3></center></td>
                <td style="width:10%"></td>
                <td style="width:10%"></td>
                <td style="width:40%"><center><h3>PIHAK KEDUA</h3></center></td>
                <td style="width:10%"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="width:10%"></td>
                <td style="width:40%"><center><h3>NILO WIDYO MUDITO</h3></center></td>
                <td style="width:10%"></td>
                <td style="width:10%"></td>
                <td style="width:40%"><center><h3>{{$data->employee->name}}</h3></center></td>
                <td style="width:10%"></td>
            </tr>
            </table>
            <div id="footer">
                    <hr>
                    <br>
                    <br>
                PERJANJIAN KERJA UNTUK WAKTU TERTENTU <span style="padding-left:481px;">halaman 6 dari 6
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                dd<span style="padding-left:30px;">/mrd
            </div>
        </div>
    </body>
</html>