<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8" /> <!-- first element so that the encoding is applied to the title etc. -->
      <title>Kontrak Baru Tahun ke-1 {{$data->employee->name}}</title>
    <link rel="stylesheet" href="letter.css" />

    <style>
      div.a {
              text-transform: uppercase;
            }
    .header1{
    /* background:#0cf; */
    padding-top:100px;
    }

    .header2{
      padding-top:30px;
    }

    

    </style>
  </head>

  <body>

  <div class="header1">
    <header> 
      <center>
        <h4><u>PERJANJIAN KERJA UNTUK WAKTU TERTENTU</u><br>
          PERJ-{{ $data->name }}/MINBA-I/NWM/2019</h4>
        </center>
    </header>

   

    <div class="content"> <!-- use this div only if it is required for styling -->
      {{-- Intro --}}
        <p align="justify">
          Pada hari ini, selasa tanggal ??dua puluh dua?? bulan ??januari?? tahun ??dua ribu sembilan belas??, bertempat di Jakarta:
        </p>
          {{-- <br class="salution" /><br> --}}
          <table style="width:100%">    
            <tr>
              <td style="width:3%" valign="top">1.</td> 
              <td valign="top" align="justify"><b>NILO WIDYO MUDITO</b>, Kepala Divisi Bisnis Mineral dan Batubara bertindak untuk dan atas nama Direktur PT. Surveyor Indonesia berdasarkan Akta Notaris Surjadi, SH., MKn., MM. No.10 tentang Pencabutan dan Pengangkatan Pimpinan Serta Tugas Wewenang Kepala Divisi Bisnis Mineral dan Batubara tanggal 21 Juli 2016, berkedudukan di Gedung Adhi Graha Lt. 4 -11 Jalan Jenderal Gatot Subroto Kavling 56 Jakarta 12950.
                selanjutnya disebut <b>PIHAK PERTAMA</b></td>
            </tr>
            <tr>
              <td valign="top">2.</td> 
              <td valign="top" align="justify"><b>{{$data->employee->name}}</b>, tempat dan tanggal lahir di ??Ujung Pandang, 05 Mei 1996??, jenis kelamin ??Perempuan??, bertempat tinggal di ??Jl. Komplek Goodyear Blok E No.4 Ciomas Rahayu Bogor Jawa Barat??. 
                selanjutnya disebut <b>PIHAK KEDUA</b></td>
            </tr>
          </table>
        <p align="justify">
           Maka <b>PIHAK PERTAMA</b> yang didasarkan atas kesepakatan <b>PIHAK KEDUA</b> mengadakan Perjanjian Kerja Untuk Waktu Tertentu dengan ketentuan sebagai berikut : 
        </p>
      {{-- end Intro --}}

      {{-- Pasal 1 --}}
          <center>
            <h4>
                <b>Pasal 1<br>
                JABATAN, LOKASI PENEMPATAN DAN MASA PERJANJIAN KERJA</b>
            </h4>
          </center>
          <table style="width:100%">    
            <tr>
              <td style="width:3%" valign="top">1.</td> 
              <td valign="top" align="justify"><b>PIHAK PERTAMA</b> menempatkan <b>PIHAK KEDUA</b> sebagai Staff Marketing di wilayah Divisi Bisnis Mineral dan Batubara. </td>
            </tr>
            <tr>
              <td valign="top">2.</td> 
              <td valign="top" align="justify">Perjanjian  kerja untuk waktu tertentu ini berlaku selama ??3 (tiga)?? bulan terhitung mulai tanggal ??28 Januari 2019?? sampai dengan tanggal ??27 April 2019?? <br></td>
            </tr>
            <tr>
              <td valign="top">3.</td> 
              <td valign="top" align="justify">Bila perjanjian kerja ini berakhir sesuai dengan tanggal yang ditentukan dalam ayat 2 (dua) pasal ini, maka <b>PIHAK PERTAMA</b> dapat mempepanjang perjanjian kerja ini bila perusahaan membutuhkan tenaga <b>PIHAK KEDUA</b>, dan disepakati oleh <b>PIHAK KEDUA</b>.</td>
            </tr>
            <tr>
              <td valign="top">4.</td> 
              <td valign="top" align="justify"><b>PIHAK PERTAMA</b> harus memberitahukan secara tertulis kepada <b>PIHAK KEDUA</b> tentang pemutusan (pengakhiran) atau perpanjangan perjanjian kerja selambat-lambatnya 1 (satu) bulan sebelum masa perjanjian kerja sebagaimana yang disebutkan dalam ayat (2) pasal ini berakhir.</td>
            </tr>
          </table>
        
      {{-- end Pasal 1 --}}


      {{-- Pasal 2 --}}
          <center>
            <h4>
                <b>Pasal 2<br>
                HARI KERJA DAN WAKTU ISTIRAHAT</b>
            </h4>
          </center>
          <table style="width:100%">           
            <tr>
              <td style="width:25%">Hari kerja ditentukan</td>
              <td style="width:1%">:</td> 
              <td>hari Senin s/d hari Jumat ;</td>
            </tr>
            <tr>
              <td>Waktu kerja</td>
              <td>:</td> 
              <td>Jam 07.30 WIB s/d 16.30 WIB ;</td>
            </tr>
            <tr>
              <td>Waktu istirahat</td>
              <td>:</td> 
              <td>Jam 12.00 WIB s/d 13.00.</td>
            </tr>
          </table>
          <p align="justify">
            {{-- Hari kerja ditentukan&nbsp;	: hari Senin s/d hari Jumat ;<br>
            Waktu kerja&nbsp;&nbsp;&nbsp;	: Jam 07.30 WIB s/d 16.30 WIB ;<br>
            Waktu istirahat&nbsp;&nbsp;	: Jam 12.00 WIB s/d 13.00. <br> --}}
            Hari kerja, waktu kerja dan waktu istirahat dapat ditentukan lain berdasarkan kesepakatan kedua belah pihak dan tidak bertentangan dengan Perundang-undangan dan Peraturan Ketenagakerjaan yang berlaku. 
            <br>              
          </p>
      {{-- end Pasal 2 --}}

      {{-- Pasal 3 --}}
      <center>
        <h4>
            <b>Pasal 3<br>
            UPAH/GAJI DAN FASILITAS</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Gaji/Upah diberikan oleh <b>PIHAK PERTAMA</b> sebesar ??Rp4.200.000??,- (??Empat Juta Dua Ratus Ribu Rupiah??)/bulan yang dibayarkan pada tanggal 27 setiap bulannya dengan dipotong Jamsostek sebesar 2% (dua persen) dari upah. <br> 
            - Gaji Pokok&nbsp;&nbsp;&nbsp;: Rp. {{$data->gapok}}<br>
            - Tunj Kinerja&nbsp;: @if($data->tunjangan_kinerja == null) - @else {{$data->tunjangan_kinerja}}@endif</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Tunjangan Hari Raya (THR) diberikan kepada <b>PIHAK KEDUA</b> sebesar Rp??4.200.000??,- (??Empat Juta Dua Ratus Ribu Rupiah??), dengan ketentuan: <br>
            <table style="width:100%">    
              <tr>
                <td style="width:3%" valign="top">a.</td> 
                <td valign="top" align="justify">Diberikan secara penuh bila telah mempunyai masa kerja 12 bulan (1 tahun) berturut-turut dan diberikan secara proporsional bila bekerja berturut-turut minimal 3 bulan pada saat hari raya Idul Fitri. </td>
              </tr>
              <tr>
                <td valign="top">b.</td> 
                <td valign="top" align="justify">Pembayaran THR dilakukan oleh <b>PIHAK PERTAMA</b> 14 (empat belas) hari sebelum hari raya Idul Fitri tiba. <br></td>
              </tr>
            </table>
        </tr>
        <tr>
          <td valign="top">3.</td> 
          <td valign="top" align="justify"><b>PIHAK KEDUA</b> berhak atas cuti selama 12 hari kerja, apabila <b>PIHAK KEDUA</b> telah bekerja selama 1 (satu) tahun berturut-turut pada <b>PIHAK PERTAMA</b>.</td>
        </tr>
        <tr>
          <td valign="top">4.</td> 
          <td valign="top" align="justify"><b>PIHAK KEDUA</b> diberikan Tunjangan Pajak Penghasilan (Pph).</td>
        </tr>
        <tr>
          <td valign="top">5.</td> 
          <td valign="top" align="justify">Fasilitas kesehatan menggunakan BPJS Kesehatan dan pembayaran iuaran sesuai dengan ketentuan yang berlaku, serta diberikan bantuan kesehatan dengan ketentuan sebagai berikut:<br>
            <table style="width:100%">    
              <tr>
                <td style="width:3%" valign="top">a.</td> 
                <td valign="top" align="justify">Plafon bantuan biaya rawat jalan bagi pegawai istri dan maximum 3 orang anak dihitung dengan ketentuan sebagai berikut : <br>
                  <table style="width:100%">    
                    <tr>
                      <td style="width:1%" valign="top">•</td> 
                      <td style="width:20%" valign="top" align="justify">Pegawai</td>
                      <td style="width:1%" valign="top">:</td>
                      <td valign="top">Rp 150.000,-/bulan</td>
                    </tr>
                    <tr>
                      <td style="width:3%" valign="top">•</td> 
                      <td valign="top" align="justify">Istri Pegawai</td>
                      <td style="width:1%" valign="top">:</td>
                      <td valign="top">Rp 75.000,-/bulan</td>
                    </tr>
                    <tr>
                      <td style="width:3%" valign="top">•</td> 
                      <td valign="top" align="justify">Anak Pegawai</td>
                      <td style="width:1%" valign="top">:</td>
                      <td valign="top">Rp 75.000,-/bulan</td>
                    </tr>
                    <tr>
                      <td style="width:3%" valign="top">•</td> 
                      <td valign="top" align="justify">Perawatan Gigi</td>
                      <td style="width:1%" valign="top">:</td>
                      <td valign="top">Rp 1.500.000,-/tahun</td>
                    </tr>                    
                  </table>
                  Sisa plafon bantuan biaya rawat jalan yang tidak diklaim sampai pada akhir kontrak dapat dikembalikan sebesar 75% tidak termasuk perawatan gigi.
                </td>
              </tr>
              <tr>
                <td valign="top">b.</td> 
                <td valign="top" align="justify">Plafon rawat inap sebesar Rp. 300.000,-/hari untuk pegawai, istri dan maximum 3 orang anak  selama 30 hari penginapan dengan jumlah maksimum sebesar Rp 25.000.000,-/tahun.</td>
              </tr>
              <tr>
                <td valign="top">c.</td> 
                <td valign="top" align="justify">Penggantian pembelian kacamata atau lensa kontak diberikan sebagai berikut: <br>
                  <table style="width:100%">    
                    <tr>
                      <td style="width:1%" valign="top">•</td> 
                      <td valign="top" align="justify">Pegawai sebesar  Rp 1.250.000,-/tahun</td>
                    </tr>    
                    <tr>
                      <td style="width:1%" valign="top">•</td> 
                      <td valign="top" align="justify">Keluarga Pegawai  Rp 400.000,-/tahun</td>
                    </tr>                    
                  </table>                  
                </td>
              </tr>
              <tr>
                <td valign="top">d.</td> 
                  <td valign="top" align="justify">Beberapa Pengecualian <br>
                    Perusahaan tidak memberikan penggantian biaya konsultasi, tindakan pengobatan dan perawatan dalam bentuk apapun dalam hal-hal sebagai berikut:
                    <table style="width:100%">    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Cidera yang timbul langsung atau tidak langsung oleh perang, diumumkan atau tidak diumumkan.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Bedah, pengobatan dan perawatan kosmetika yang berhubungan dengan kecantikan termasuk bedah plastik dan lain-lain untuk tujuan keindahan tubuh muka; termasuk didalamnya bedah laser mata, program diet, acne, tindik.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Inseminasi buatan dan program bayi tabung. 
                        </td>
                      </tr>
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Penyakit menular yang berdasarkan hukum harus diasingkan atau dikarantinakan.</td>
                      </tr> 
                    </table>  
                  </td>
              </tr>
            </table>
          </td>
        </tr>  
        <tr>
          <td valign="top" style="color:white">6.</td> 
          <td valign="top" align="justify">
            <table>
              <tr>
                <td valign="top" style="color:white">6.</td> 
                <td valign="top" align="justify">
                <table>
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Cidera yang diakibatkan gangguan kejiwaan atau mencederai diri sendiri atau keadaan berhubungan dengan gangguan kejiwaan, perawatan istirahat atau perawatan sanitasi kecanduan obat-obatan, alkohol, maupun obat terlarang lainnya;</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Pengobatan perawatan akibat suatu tindakan yang bersifat sengaja, antara lain pengguguran kandungan, kecanduan alcohol/obat bius, percobaan bunuh diri, operasi perawatan untuk tujuan kecantikan, termasuk penyakit yang timbul akibat keadan tersebut.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Rawat inap yang diakibat oleh gangguan psikis penyakit mental lainnya (termasuk neurosis, manifestasi dari gangguan kejiwaan atau psikosomatis).</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Penyakit kelamin yang ditularkan melalui hubungan seks termasuk AIDS.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Pembuatan dan pemasangan gigi palsu, caping, kawat gigi, mahkota dan jembatan dalam bentuk apapun, kecuali bila disebabkan oleh kecelakaaan kerja yang dialami pegawai.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Semua jenis kelainan cacat bawaan, seperti kusta, bibir sumbing, kelainan jantung dan kelainan lainnya sesuai dengan diagnosa dokter yang merawat.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Pelayanan kesehatan yang belum diakui secara luas dibidang kedokteran kecuali patah tulang (seperti: pijat, pengobatan alternatif, ramuan tradisional, jamu, akupuntur, akupresur dan lain-lain).</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Penyakit atau cidera yang terjadi dalam hubungan kerja dengan pihak ketiga di luar penugasan dari perusahaan.</td>
                      </tr>    
                      <tr>
                        <td style="width:1%" valign="top">•</td> 
                        <td valign="top" align="justify">Penyakit atau cidera yang diakibat melakukan tindakan atau kegiatan-kegiatan yang melanggar hukum.</td>
                      </tr> 
                </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>      
        <tr>
          <td valign="top">6.</td> 
          <td valign="top" align="justify"><b>PIHAK PERTAMA</b> memberikan bantuan makan siang, sesuai dengan ketentuan perusahaan.</td>
        </tr>
        <tr>
          <td valign="top">7.</td> 
          <td valign="top" align="justify">Apabila melakukan perjalanan dinas, maka diberikan uang saku menginap sebesar Rp. 100.000,-/hari dan apabila tidak menginap diberikan sebesar Rp. 50.000,-/hari.</td>
        </tr>
        <tr>
          <td valign="top">8.</td> 
          <td valign="top" align="justify"><b>PIHAK PERTAMA</b> dapat memberikan Insentif atau jasa produksi sesuai dengan kebijakan dan kemampuan <b>PIHAK PERTAMA</b>.</td>
        </tr>
        <tr>
          <td valign="top">9.</td> 
          <td valign="top" align="justify"><b>PIHAK KEDUA</b> diberikan bantuan beasiswa pendidikan anak pegawai sesuai dengan kebijakan <b>PIHAK PERTAMA</b>.</td>
        </tr>
        <tr>
          <td valign="top">10.</td> 
          <td valign="top" align="justify">Selain Gaji/ upah dan tunjangan/fasilitas lain sebagaimana yang disebutkan dalam pasal ini, maka <b>PIHAK KEDUA</b> tidak diberikan tunjangan/ fasilitas pegawai lainnya (seperti biaya lisensi, asuransi pensiun dan lain-lain) yang tidak disebutkan dalam perjanjian kerja khusus ini.</td>
        </tr>
      </table>
      {{-- end Pasal 3 --}}

      {{-- Pasal 4 --}}
      <center>
        <h4>
            <b>Pasal 4<br>
            BIDANG TUGAS, WEWENANG DAN TANGGUNG JAWAB</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Tempat tugas <b>PIHAK KEDUA</b> adalah di Wilayah Divisi Bisnis Mineral dan Batubara atau sesuai penugasan dari <b>PIHAK PERTAMA</b> atau pejabat lain yang ditunjuk.</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Bidang tugas/ tugas kerja, tanggung jawab dan wewenang <b>PIHAK KEDUA</b> akan ditentukan kemudian oleh <b>PIHAK PERTAMA</b> atau pejabat lain yang ditunjuk. </td>
        </tr>
        <tr>
          <td valign="top">3.</td> 
          <td valign="top" align="justify"><b>PIHAK KEDUA</b> bertanggung jawab atas semua pelaksanaan bidang tugas yang disebutkan dalam ayat (2) pasal ini kepada <b>PIHAK PERTAMA</b> atau pejabat lain yang ditunjuk.</td>
        </tr>
        <tr>
          <td valign="top">4.</td> 
          <td valign="top" align="justify"><b>PIHAK KEDUA</b> wajib mematuhi dan melaksanakan peraturan perusahaan dan peraturan perusahaan yang berlaku.</td>
        </tr>
      </table>
      {{-- end Pasal 4 --}}

      {{-- Pasal 5 --}}
      <center>
        <h4>
            <b>Pasal 5<br>
            TIDAK MASUK KERJA</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Apabila <b>PIHAK KEDUA</b>  tidak masuk kerja pada hari kerja karena alasan seperti sakit dan kematian salah satu anggota keluarga (orang tua kandung, Istri atau anak), hal tersebut harus dibuktikan dengan surat keterangan dokter (karena sakit) dan surat kematian (akte kematian).</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Apabila <b>PIHAK KEDUA</b> tidak masuk kerja selama 5 (lima) hari kerja berturut-turut dalam jadwal kerja yang telah ditentukan tanpa ada pemberitahuan baik lisan maupun secara tertulis sebelumnya, maka <b>PIHAK KEDUA</b> dinyatakan telah mengundurkan diri dari PT Surveyor Indonesia dan akan diproses sesuai Undang-undang yang berlaku.</td>
        </tr>
      </table>
      {{-- end Pasal 5 --}}

      {{-- Pasal 6 --}}
      <center>
        <h4>
            <b>Pasal 6<br>
            SCHORSING</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify"><b>PIHAK PERTAMA</b> dapat menjatuhkan schorsing pada <B>PIHAK KEDUA</B> apabila <b>PIHAK KEDUA</b> melakukan pelanggaran terhadap tata tertib kerja dan atau tidak menjalankan kewajiban sebagaimana mestinya atau melakukan tindakan yang merugikan perusahaan.</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Sebelum schorsing dijatuhkan pada <b>PIHAK KEDUA</b>, terlebih dahulu dilakukan teguran, sampai dengan dijatuhkannya surat peringatan.</td>
        </tr>
        <tr>
          <td valign="top">3.</td> 
          <td valign="top" align="justify">Schorsing diberlakukan sampai adanya putusan dari Pengadilan Perselisihan Hubungan Industrial (PPHI).</td>
        </tr>
      </table>
      {{-- end Pasal 6 --}}

      {{-- Pasal 7 --}}
      <center>
        <h4>
            <b>Pasal 7<br>
            PEMUTUSAN HUBUNGAN KERJA</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Pemutusan hubungan kerja dalam masa perjanjian kerja ini dilakukan dengan ketentuan sebagai berikut :
            <table style="width:100%">    
              <tr>
                <td style="width:3%" valign="top">a.</td> 
                <td valign="top" align="justify">Memberikan keterangan palsu atau dipalsukan kepada <b>PIHAK PERTAMA</b> dalam pembuatan perjanjian kerja ini ;</td>
              </tr>
              <tr>
                <td valign="top">b.</td> 
                <td valign="top" align="justify">Mabuk, madat, memakai obat bius atau narkotik ditempat kerja ;</td>
              </tr>
              <tr>
                <td valign="top">c.</td> 
                <td valign="top" align="justify">Mencuri, menipu, menggelapkan atau melakukan kejahatan lainnya, baik yang menyangkut kepentingan <b>PIHAK PERTAMA</b> maupun pihak lainnya ;</td>
              </tr>
              <tr>
                <td valign="top">d.</td> 
                <td valign="top" align="justify">Membujuk pimpinan atau pegawai <b>PIHAK PERTAMA</b> untuk melakukan sesuatu yang bertentangan dengan hukum atau kesusilaan ;</td>
              </tr>
              <tr>
                <td valign="top">e.</td> 
                <td valign="top" align="justify">Dengan sengaja atau dengan kecerobohannya merusak atau membiarkan barang-barang atau dokumen-dokumen milik atau yang berada dalam penguasaan milik <b>PIHAK PERTAMA</b> sehingga terancam bahaya ;</td>
              </tr>
              <tr>
                <td valign="top">f.</td> 
                <td valign="top" align="justify">Dengan sengaja walaupun sudah diperingatkan membiarkan dirinya atau teman sekerjanya dalam keadaan bahaya ;</td>
              </tr>
              <tr>
                <td valign="top">g.</td> 
                <td valign="top" align="justify">Membuka rahasia perusahaan ;</td>
              </tr>
              <tr>
                <td valign="top">h.</td> 
                <td valign="top" align="justify">Tidak melaksanakan tugas-tugas / perintah sesuai yang telah ditetapkan oleh <b>PIHAK PERTAMA</b> atau Pejabat lain yang ditunjuk, sedangkan tugas/ perintah tersebut sesuai dengan maksud perjanjian kerja ini ;</td>
              </tr>
              <tr>
                <td valign="top">i.</td> 
                <td valign="top" align="justify">Tidak taat dengan peraturan kerja yang telah ditetapkan (Indisipliner) ;</td>
              </tr>
              <tr>
                <td valign="top">j.</td> 
                <td valign="top" align="justify">Melanggar ketentuan pasal 11 ayat (2) dan (3).</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table style="width:100%">
        <tr>
          <td valign="top" style="width:3%">2.</td> 
          <td valign="top" align="justify"><b>PIHAK PERTAMA</b> tidak berkewajiban memberikan ganti rugi dalam bentuk apapun juga bila  terjadinya Pemutusan Hubungan Kerja (PHK) karena hal-hal yang tercantum dalam ayat (1).</td>
        </tr>
      </table>
      {{-- END PASAL 7 --}}

      {{-- Pasal 8 --}}
      <center>
        <h4>
            <b>Pasal 8<br>
            BERAKHIRNYA PERJANJIAN KERJA</b>
        </h4>
      </center>
      <p align="justify">
        Bila hubungan kerja ini putus demi hukum karena berakhirnya masa perjanjian kerja, maka bila perjanjian kerja ini tidak dilanjutkan dengan suatu hubungan kerja baru, maka perjanjian kerja ini akan berakhir secara otomatis dan <b>PIHAK KEDUA</b> wajib menyerahkan semua hal yang dipercayakan perusahaan kepada <b>PIHAK PERTAMA</b>.  
      </p>
      {{-- end Pasal 8 --}}

      {{-- Pasal 9 --}}
      <center>
        <h4>
            <b>Pasal 9<br>
            FORCE MAJEURE</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Yang dimaksud dengan Force Majeure dalam perjanjian ini adalah keadaan-keadaan sebagai berikut :
            <table style="width:100%">    
              <tr>
                <td style="width:3%" valign="top">a.</td> 
                <td valign="top" align="justify">Gempa bumi besar, taufan, banjir besar, tanah longsor, wabah penyakit dan bencana alam;</td>
              </tr>
              <tr>
                <td valign="top">b.</td> 
                <td valign="top" align="justify">Pemberontakan, pemogokan umum, huru hara, sabotase, perang dan kebijaksanaan pemerintah yang berakibat langsung terhadap perjanjian ini. </td>
              </tr>              
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Dalam hal terjadi Force Majeure sebagaimana yang dimaksud pada ayat (1) pasal ini, maka pihak yang terkena wajib memberitahukan secara tertulis kepada pihak lainnya dalam waktu 7 (tujuh) hari kalender sejak diterima pemberitahuan oleh pihak lainnya dimana adanya Force Majeure tersebut diterangkan secara resmi oleh pejabat pemerintah yang berwenang.</td>
        </tr>
        <tr>
          <td valign="top">3.</td> 
          <td valign="top" align="justify">Kelalaian atau keterlambatan dalam memenuhi kewajiban memberitahukan sebagaimana dimaksud pada ayat (2) pasal ini, mengakibatkan tidak diakuinya oleh pihak lainnya peristiwa dimaksud pada ayat (1) pasal ini sebagai Force Majeure.</td>
        </tr>
        <tr>
          <td valign="top">4.</td> 
          <td valign="top" align="justify">Akibat adanya Force Majeure, maka <b>PIHAK PERTAMA</b> dibebaskan dari pembayaran sisa kontrak <b>PIHAK KEDUA</b>.</td>
        </tr>
      </table>
      {{-- end Pasal 9 --}}
      
      {{-- Pasal 10 --}}
      <center>
        <h4>
            <b>Pasal 10<br>
            PENYELESAIAN PERSELISIHAN</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Apabila kemudian hari terjadi perselisihan dalam penafsiran atau pelaksanaan ketentuan-ketentuan dari perjanjian kerja ini, kedua belah pihak setuju untuk menyelesaikannya secara musyawarah dan mufakat.</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Apabila dengan cara musyawarah dan mufakat, perselisihan tidak dapat diselesaikan, maka kedua belah pihak sepakat untuk menyelesaikannya sesuai dengan per undang-undangan yang berlaku.</td>
        </tr>
      </table>
      {{-- end Pasal 10 --}}
      
      {{-- Pasal 11 --}}
      <center>
        <h4>
            <b>Pasal 11<br>
            LAIN-LAIN</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify"><b>PIHAK PERTAMA</b> tidak menanggung biaya perpanjangan sertifikat dan tidak memberikan jaminan adanya pendidikan sesuai dengan kualifikasi.</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Selama berlangsungnya perjanjian kerja ini <b>PIHAK KEDUA</b> dilarang bekerja, memberi informasi milik perusahaan, menggunakan fasilitas perusahaan, membocorkan rahasia perusahaan pada pihak lain tanpa persetujuan tertulis terlebih dahulu dari <b>PIHAK PERTAMA</b>.</td>
        </tr>
        <tr>
          <td valign="top">3.</td> 
          <td valign="top" align="justify">3.	Pada saat ditandatanganinya dan berlakunya perjanjian ini, <b>PIHAK KEDUA</b> tidak sedang terikat perjanjian kerja dengan pihak lainnya.</td>
        </tr>
      </table>
      {{-- end Pasal 11 --}}
      
      {{-- Pasal 12 --}}
      <center>
        <h4>
            <b>Pasal 12<br>
            PENUTUP</b>
        </h4>
      </center>
      <table style="width:100%">    
        <tr>
          <td style="width:3%" valign="top">1.</td> 
          <td valign="top" align="justify">Dengan ditanda tanganinya Perjanjian Kerja ini, maka seluruh pasal dan isinya telah dimengerti dan disetujui oleh kedua belah pihak.</td>
        </tr>
        <tr>
          <td valign="top">2.</td> 
          <td valign="top" align="justify">Akte perjanjian ini dibuat rangkap dua, yang setiap rangkap mempunyai kekuatan hukum yang sama sebagai asli.</td>
        </tr>
      </table>
      {{-- end Pasal 12 --}}
    </div>

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

  {{-- TTD --}}
    {{-- <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-3">
        <h3>
          <b>
            <center>PIHAK PERTAMA</center>
          </b>
        </h3>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-3">
        <h3>
          <b>
            <center>PIHAK PERTAMA</center>
          </b>
        </h3>
      </div>
      <div class="col-md-2"></div>
    </div> --}}
  </div>
  </body>

</html>