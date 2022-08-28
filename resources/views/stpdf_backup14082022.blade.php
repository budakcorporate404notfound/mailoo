<!DOCTYPE html>
<html>

<head>
    <title>surat tugas</title>
    <style>
        * {
            box-sizing: border-box;
        }

        @page {
            margin-top: 70px;
            /* create space for header */
            margin-bottom: 50px;
            /* create space for footer */
        }

        /* Create two equal columns that floats next to each other */
        .column1 {
            float: left;
            width: 17%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }

        .column1x {
            float: left;
            width: 17%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }

        .column1xx {
            float: left;
            width: 17%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }


        .column2 {
            float: left;
            width: 80%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }

        .column2x {
            float: left;
            width: 80%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }


        .column2xx {
            float: left;
            width: 98.5%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }

        .column22xx {
            float: left;
            width: 98.5%;
            padding: 5px;
            /* height: 90px; */
            /* Should be removed. Only for demonstration */
        }


        .column3 {
            float: left;
            width: 17%;
            padding: 5px;
            /* height: 330px; */
            /* Should be removed. Only for demonstration */
        }

        .column3x {
            float: left;
            width: 98.5%;
            padding: 5px;
            /* height: 330px; */
            /* Should be removed. Only for demonstration */
        }


        .column4 {
            float: left;
            width: 80%;
            padding: 5px;
            /* height: 330px; */
            /* Should be removed. Only for demonstration */
        }

        .column5 {
            float: left;
            width: 99%;
            padding: 3px;
            /* height: 35px; */
            /* Should be removed. Only for demonstration */
        }

        .column6 {
            float: left;
            width: 99%;
            padding: 3px;
            line-height: 0px;
            /* height: 30px; */
            /* Should be removed. Only for demonstration */
        }

        .column6x {
            float: left;
            width: 99%;
            padding: 3px;
            line-height: 0px;
            /* height: 30px; */
            /* Should be removed. Only for demonstration */
        }

        .column7 {
            float: left;
            width: 99%;
            padding: 3px;
            /* height: 350px; */
            /* Should be removed. Only for demonstration */
        }

        .column8 {
            float: left;
            width: 99%;
            padding: 3px;
            line-height: normal;
            /* height: 350px; */
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .br {
            display: block;
            margin-bottom: 0em;
        }

        .brsmall {
            display: block;
            margin-bottom: -.2em;
        }

        .brxsmall {
            display: block;
            margin-bottom: -.4em;
        }

        hr.new {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    {{-- {{asset('/storage/images/'.Auth::user()->image)}} --}}
    {{-- <img src="{{asset('/storage/app/public/logo/mahkamahagung.jpg')}}" alt=""> --}}
    {{-- <img src="{{ public_path("storage/logo/mahkamahagung.jpg") }}" alt="" style="width: 150px; height: 150px;">
    --}}
    {{-- <img src="/public/storage/logo/mahkamahagung.jpg"> --}}
    {{-- <img src="{{url('/public/storage/logo/mahkamahagung.jpg')}}" alt=""> --}}
    <div class="row">

        <div class="column1"
            style="background-color:#aaa; text-align: center; font-family: Times New Roman; font-size: 16pt">
            <img src="{{ public_path("storage/logo/mahkamahagung.jpg") }}" alt="" style="width: 65px; height: 76px;">
        </div>

        <div class="column2" style="background-color:#bbb; font-family: Times New Roman; font-size: 16pt">
            <b>MAHKAMAH AGUNG REPUBLIK INDONESIA</b>
            <br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>BADAN URUSAN ADMINISTRASI</b>

            <span class="brsmall" style="font-size: 8.5pt"> &nbsp; &nbsp; &nbsp; JL. MEDAN MERDEKA UTARA NO. 9-13,
                TELP.3843348,3810350,3457611 FAX 3810361
                <span class="brsmall" style="font-size: 8.5pt"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TROMOL
                    POS NO.1020 – JAKARTA 10010
                </span>

            </span>

            {{-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span class="brsa" style="font-size: 8pt">TROMOL POS NO.1020 – JAKARTA 10010</span> --}}
        </div>

    </div>

    <hr class="new">

    <div class="row">

        <div class="column3x" style="background-color:#aaa;">
            <p style="text-align: center; font-family: Times New Roman; font-size: 18pt"><b>SURAT TUGAS</b>
                <br>

            </p>
            <span style="text-align: left; font-size: 12pt"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nomor : &nbsp; &nbsp; &nbsp; &nbsp; / BUA.4 / ST /
                {{$only_bulan}}

                        {{-- @switch($months)
                        @case('01')
                        1
                        @break
                        @case('02')
                        2
                        @break
                        @case('03')
                        3
                        @break
                        @case('04')
                        4
                        @break
                        @case('05')
                        5
                        @break
                        @case('06')
                        6
                        @break
                        @case('07')
                        7
                        @break
                        @case('08')
                        8
                        @break
                        @case('09')
                        9
                        @break
                        @case('10')
                        10
                        @break
                        @case('11')
                        11
                        @break
                    @default
                        12
                @endswitch --}}

                / {{$years}}  </span>

        </div>
    </div>
    <br>

    <div class="row">
        <div class="column1x" style="background-color:#aaa;">
            <span style="font-family: Times New Roman; font-size: 12pt">Menimbang &nbsp; &nbsp; &nbsp; &nbsp;
                :</span>
        </div>
        <div class="column2x" style="background-color:#bbb;">
            <table>
                @foreach ($menimbangx as $menimbang)
                <tr>
                    <td style="font-family: Times New Roman; font-size: 12pt; vertical-align:top; text-align: justify">
                        {{$menimbang->urutan}}.</td>
                    <td style="font-family: Times New Roman; font-size: 12pt; text-align: justify">
                        {{$menimbang->text_menimbang}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div class="column3" style="background-color:#aaa;">
            <span style="font-family: Times New Roman; font-size: 12pt">Dasar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;
                &nbsp; &nbsp; &nbsp; :</span>
        </div>
        <div class="column4" style="background-color:#bbb;">
            <table>
                <?php $no=1;?>
                @foreach ($dasarx as $dasar)
                <tr>
                    <td style="font-family: Times New Roman; font-size: 12pt; vertical-align:top; text-align: justify">
                        {{$no}}.</td>
                    <td style="font-family: Times New Roman; font-size: 12pt; text-align: justify">
                        {{$dasar->text_dasar}}</td>
                </tr>
                <?php $no++ ;?>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div class="column5" style="background-color:#aaa;">
            <p style="text-align: center; font-family: Times New Roman; font-size: 12pt"><b>MENUGASKAN</b></p>
        </div>
    </div>
    <div class="row">
        <div class="column6" style="background-color:#aaa;">
            <p style="font-family: Times New Roman; font-size: 12pt;">Kepada &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; :</p>
        </div>
    </div>

    <div class="row">
        <div class="column7" style="background-color:#aaa; margin-left: auto; margin-right: auto ">
            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                <thead>
                    <tr>
                        <th
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12t; padding: 7px; text-align:center">
                            No</th>
                        <th
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            Nama / NIP</th>
                        <th
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            Gol</th>
                        <th
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            Hari / Tanggal</th>
                        <th
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            Tujuan</th>
                    </tr>
                </thead>
                <?php $no=1;?>
                @foreach ($datax as $data)
                @foreach ($data->t_realisasi_tempatpelaksanaans as $x)
                <tbody>
                    <tr>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            {{$no}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px">
                            {{$x->nama_pelaksana}}
                            <br>
                            NIP. {{$x->nip}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            {{$x->golongan}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            {{-- Carbon::tomorrow()->format('l'); --}}
                            @php
                            $namahari_tanggalpelaksana_dari = \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                            echo $namahari_tanggalpelaksana_dari->format('l');
                            @endphp
                            -
                            @php
                            $namahari_tanggalpelaksana_sampai = \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                            echo $namahari_tanggalpelaksana_sampai->format('l');
                            @endphp

                            <br>
                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} - {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            {{$x->tempat_pelaksana}}
                        </td>
                    </tr>
                </tbody>
                <?php $no++ ;?>
                @endforeach
                @endforeach
            </table>

        </div>
    </div>

    <div class="row">
        <div class="column2xx" style="background-color:#bbb;">
            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                @foreach ($untukx as $untuk)
                <tbody>
                    <tr>
                        <td
                            style=" width: 100px; border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:top; vertical-align: text-top;">
                            Untuk
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:top; vertical-align: text-top; ">
                            :
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align: justify;">
                            {{$untuk->text_untuk}}
                            pada tanggal
                            {{$tanggalparse_pelaksanaan}}
                            sampai dengan
                            {{$tanggalparse_sampai}}
                            yang diselenggarakan di
                            @if ($count_tempat_pelx == '1')
                            @foreach ($tempat_pelx as $tempat_pel)
                            {{$tempat_pel->tempat_pelaksana}}
                            @endforeach
                            @endif
                            @php $x=1; @endphp
                            @if ($count_tempat_pelx > '1')
                            @foreach ($tempat_pelx as $tempat_pel)
                            {{$tempat_pel->tempat_pelaksana}}

                            @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 )
                                {{','}}
                            @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx = -1)
                                {{', dan'}}
                            @else
                            @endif <?php $x++ ;?> @endforeach @endif . </td>
                                </tr> </tbody> @endforeach </table> </div> </div> <div class="row">

        </div>
    </div>

    <div class="row">
        <div class="column2xx" style="background-color:#bbb;">
            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">

                <tbody>
                    <tr>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:top; vertical-align: text-top;">
                            Segala yang timbul atas kegiatan ini dibebankan pada Daftar Isian
                            Pelaksana Anggaran (DIPA) dengan Kode MAK:
                            @foreach ($kodemakx as $kodemak)
                            {{$kodemak->text_kodemak}} .
                            @endforeach
                        </td>

                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <div class="container" position="fixed">
        <div class="column22xx" style="background-color:#bbb;">

            <table
                style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ;  width: 100%">

                <tbody>

                    <tr>
                        <td
                            style=" width: 90%; border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px;">
                            Demikian surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggung jawab.
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; Jakarta, &nbsp; &nbsp; &nbsp;
                            {{$tanggalparse}}
                            <br>
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; Kepala Biro Perlengkapan
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Badan Urusan
                            Administrasi MA RI
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;
                            @foreach ($tertandax as $tertanda)
                            <u><b> {{$tertanda->nama}} </b></u>
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;
                            NIP. {{$tertanda->nip}}
                            @endforeach

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>