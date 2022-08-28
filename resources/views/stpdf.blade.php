<!DOCTYPE html>
<html>

<head>
    <title>surat tugas</title>
    <style>
        * {
            box-sizing: border-box;
        }

        @page {
            margin-top: 50px;
            /* create space for header */
            margin-bottom: 30px;
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
            width: 12%;
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
            width: 85%;
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
            width: 12%;
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
            width: 85%;
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

        @media print {
        tr.page-break {
            page-break-after:always;
        }
 }


    </style>
</head>

<body>

    {{-- HEADER --}}
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
    {{-- END HEADER --}}

    <hr class="new">

    {{-- NOMOR SURAT TUGAS --}}
    <div class="row">

        <div class="column3x" style="text-align: center; background-color:#aaa;">
            <b>SURAT TUGAS</b> <br>
            <span style="text-align: center; font-size: 10pt">Nomor : &nbsp; &nbsp; &nbsp; &nbsp; / BUA.4 / ST /
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
                / {{$years}}
            </span>

        </div>
    </div>
    {{-- END NOMOR SURAT TUGAS --}}

    {{-- MENIMBANG --}}
    <div class="row">
        <div class="column1x" style="background-color:#aaa;">
            <span style="font-family: Times New Roman; font-size: 10.5pt">Menimbang :</span>
        </div>
        <div class="column2x" style="background-color:#bbb;">
            <table>
                @foreach ($menimbangx as $menimbang)
                <tr>
                    <td style="font-family: Times New Roman; font-size: 10.5pt; vertical-align:top; text-align: justify">
                        {{$menimbang->urutan}}.</td>
                    <td style="font-family: Times New Roman; font-size: 10.5pt; text-align: justify">
                        {{$menimbang->text_menimbang}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{-- END MENIMBANG --}}

    {{-- DASAR --}}
    <div class="row">
        <div class="column3" style="background-color:#aaa;">
            <span style="font-family: Times New Roman; font-size: 10.5pt">Dasar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                :</span>
        </div>
        <div class="column4" style="background-color:#bbb;">
            <table>
                <?php $no=1;?>
                @foreach ($dasarx as $dasar)
                <tr>
                    <td style="font-family: Times New Roman; font-size: 10.5pt; vertical-align:top; text-align: justify">
                        {{$no}}.</td>
                    <td style="font-family: Times New Roman; font-size: 10.5pt; text-align: justify">
                        {{$dasar->text_dasar}}</td>
                </tr>
                <?php $no++ ;?>
                @endforeach
            </table>
        </div>
    </div>
    {{-- END DASAR --}}

    {{-- MENUGASKAN --}}
    <div class="row">
        <div class="column5" style="text-align: center; background-color:#aaa;">
            <a style="text-align: center; font-family: Times New Roman; font-size: 10.5pt"><b>MENUGASKAN</b></a>
        </div>
    </div>
    {{-- END MENUGASKAN --}}

    {{-- TABLE --}}
    <div class="row">
        <a style="font-family: Times New Roman; font-size: 10.5pt;">Kepada &nbsp; &nbsp; &nbsp; &nbsp; :</a>
        <div class="column7" style="background-color:#aaa; margin-left: auto; margin-right: auto ">

            @if ($jumlahrow < 11)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="{{$data->T_realisasi_tempatpelaksanaans->count();}}"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="{{$data->T_realisasi_tempatpelaksanaans->count();}}"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                        {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}}<br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1)<br>{{'dan'}}<br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                    @endforeach
                                    @endif
                            </td>
                        </tr>

                        @for($i=1; $i<$data->T_realisasi_tempatpelaksanaans->count(); $i++)

                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

            @elseif($jumlahrow > 10 && $jumlahrow < 39)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= ($jumlahrow - 10); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 10 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 10 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i<$data2->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @elseif($jumlahrow > 38 && $jumlahrow < 67)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= 37 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i< 38; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax3 as $data3)
                            @for ($i = 1; $i <= ($jumlahrow - 38); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 38}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 37]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 38 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 38 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx3 == '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx3 > '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=39; $i<$data3->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @elseif($jumlahrow > 65 && $jumlahrow < 95)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= 37 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i< 38; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax3 as $data3)
                            @for ($i = 1; $i <= 66 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 38}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 37]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx3 == '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx3 > '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=39; $i < 66; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax4 as $data4)
                            @for ($i = 1; $i <= ($jumlahrow - 66); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 66}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 65]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 65]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 65]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 65]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 66 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 66 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx4 == '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx4 > '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=67; $i<$data3->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data3->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @elseif($jumlahrow > 94 && $jumlahrow < 123)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= 37 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i< 38; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax3 as $data3)
                            @for ($i = 1; $i <= 66 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 38}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 37]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx3 == '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx3 > '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=39; $i < 66; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax4 as $data4)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 66}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 65]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx4 == '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx4 > '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=67; $i < 94; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>

                        @foreach ($datax5 as $data5)
                            @for ($i = 1; $i <= ($jumlahrow - 94); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 94}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 93]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 94 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 94 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx5 == '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx5 > '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=95; $i<$data5->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data5->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data5->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data5->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data5->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @elseif($jumlahrow > 122 && $jumlahrow < 151)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= 37 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i< 38; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax3 as $data3)
                            @for ($i = 1; $i <= 66 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 38}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 37]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx3 == '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx3 > '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=39; $i < 66; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax4 as $data4)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 66}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 65]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx4 == '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx4 > '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=67; $i < 94; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax5 as $data5)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 94}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx5 == '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx5 > '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=95; $i < 122; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>

                        @foreach ($datax6 as $data6)
                            @for ($i = 1; $i <= ($jumlahrow - 122); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 122}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 122 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 122 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx6 == '1')
                                            @foreach ($tempat_pelx6 as $tempat_pel6)
                                            {{$tempat_pel6->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx6 > '1')
                                            @foreach ($tempat_pelx6 as $tempat_pel6)
                                            {{$tempat_pel6->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx6 && $x - $count_tempat_pelx6 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx6 && $x - $count_tempat_pelx6=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=123; $i<$data6->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data6->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data6->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data6->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data6->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @elseif($jumlahrow > 150 && $jumlahrow < 178)

                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= 37 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i< 38; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax3 as $data3)
                            @for ($i = 1; $i <= 66 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 38}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 37]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx3 == '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx3 > '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=39; $i < 66; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax4 as $data4)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 66}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 65]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx4 == '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx4 > '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=67; $i < 94; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax5 as $data5)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 94}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx5 == '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx5 > '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=95; $i < 122; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax6 as $data6)
                            @for ($i = 1; $i <= 122 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 122}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx6 == '1')
                                            @foreach ($tempat_pelx6 as $tempat_pel6)
                                            {{$tempat_pel6->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx6 > '1')
                                            @foreach ($tempat_pelx6 as $tempat_pel6)
                                            {{$tempat_pel6->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx6 && $x - $count_tempat_pelx6 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx6 && $x - $count_tempat_pelx6=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=123; $i < 150; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>

                        @foreach ($datax7 as $data7)
                            @for ($i = 1; $i <= ($jumlahrow - 150); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 150}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data6->T_realisasi_tempatpelaksanaans[$i + 149]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 150 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 150 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx7 == '1')
                                            @foreach ($tempat_pelx7 as $tempat_pel7)
                                            {{$tempat_pel7->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx7 > '1')
                                            @foreach ($tempat_pelx7 as $tempat_pel7)
                                            {{$tempat_pel7->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx7 && $x - $count_tempat_pelx7 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx7 && $x - $count_tempat_pelx7=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=151; $i<$data7->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @elseif($jumlahrow > 178 && $jumlahrow < 207)
                <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>
                    <?php $no=1;?>
                    @foreach ($datax as $data)
                    <tbody>
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$no}}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                                <br>
                                NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                            </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                            </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{-- Carbon::tomorrow()->format('l'); --}}
                                @php
                                $namahari_tanggalpelaksana_dari =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_dari->format('l');
                                @endphp
                                -
                                @php
                                $namahari_tanggalpelaksana_sampai =
                                \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                echo $namahari_tanggalpelaksana_sampai->format('l');
                                @endphp

                                <br>
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                            </td>
                            <td rowspan="10"
                                style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                @if ($count_tempat_pelx == '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @endforeach
                                @endif

                                @php $x=1; @endphp

                                @if ($count_tempat_pelx > '1')
                                @foreach ($tempat_pelx as $tempat_pel)
                                {{$tempat_pel->tempat_pelaksana}}
                                @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br>
                                @elseif($x < $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br>
                                @else
                                @endif
                                <?php $x++ ;?>
                                @endforeach
                                @endif
                            </td>
                        </tr>

                                @for($i=1; $i < 10 ; $i++)
                        <tr>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td
                                style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor

                    </tbody>
                    <?php $no++ ;?>
                    @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax2 as $data2)
                            @for ($i = 1; $i <= 37 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 10}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 9]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx2 == '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx2 > '1')
                                            @foreach ($tempat_pelx2 as $tempat_pel2)
                                            {{$tempat_pel2->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx2 && $x - $count_tempat_pelx2=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=11; $i< 38; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax3 as $data3)
                            @for ($i = 1; $i <= 66 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 38}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data3->T_realisasi_tempatpelaksanaans[$i + 37]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 37]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx3 == '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx3 > '1')
                                            @foreach ($tempat_pelx3 as $tempat_pel3)
                                            {{$tempat_pel3->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx3 && $x - $count_tempat_pelx3=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=39; $i < 66; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax4 as $data4)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 66}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data4->T_realisasi_tempatpelaksanaans[$i + 65]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data2->T_realisasi_tempatpelaksanaans[$i + 65]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx4 == '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx4 > '1')
                                            @foreach ($tempat_pelx4 as $tempat_pel4)
                                            {{$tempat_pel4->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx4 && $x - $count_tempat_pelx4=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=67; $i < 94; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax5 as $data5)
                            @for ($i = 1; $i <= 94 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 94}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data5->T_realisasi_tempatpelaksanaans[$i + 93]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx5 == '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx5 > '1')
                                            @foreach ($tempat_pelx5 as $tempat_pel5)
                                            {{$tempat_pel5->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx5 && $x - $count_tempat_pelx5=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=95; $i < 122; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax6 as $data6)
                            @for ($i = 1; $i <= 122 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 122}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data6->T_realisasi_tempatpelaksanaans[$i + 121]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx6 == '1')
                                            @foreach ($tempat_pelx6 as $tempat_pel6)
                                            {{$tempat_pel6->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx6 > '1')
                                            @foreach ($tempat_pelx6 as $tempat_pel6)
                                            {{$tempat_pel6->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx6 && $x - $count_tempat_pelx6 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx6 && $x - $count_tempat_pelx6=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=123; $i < 150; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data2->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>


                        @foreach ($datax7 as $data7)
                            @for ($i = 1; $i <= 178 ; $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 150}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data7->T_realisasi_tempatpelaksanaans[$i + 149]->jabatan }} </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="28"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx7 == '1')
                                            @foreach ($tempat_pelx7 as $tempat_pel7)
                                            {{$tempat_pel7->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx7 > '1')
                                            @foreach ($tempat_pelx7 as $tempat_pel7)
                                            {{$tempat_pel7->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx7 && $x - $count_tempat_pelx7 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx7 && $x - $count_tempat_pelx7=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=151; $i < 178; $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data7->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

                <div style="page-break-after:always;"></div>

                <table style=" width:100%; border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                    <thead>
                        <tr>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                No</th>
                            <th
                                style=" width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Nama / NIP</th>
                            <th
                                style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Gol</th>
                            <th
                                style="width: 45%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Jabatan</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                Hari / Tanggal</th>
                            <th
                                style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:center">
                                Tujuan</th>
                        </tr>
                    </thead>

                        @foreach ($datax8 as $data8)
                            @for ($i = 1; $i <= ($jumlahrow - 178); $i++)
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$i + 178}}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                            {{$data8->T_realisasi_tempatpelaksanaans[$i + 177]->nama_pelaksana }}
                                            <br>
                                            NIP. {{$data8->T_realisasi_tempatpelaksanaans[$i + 177]->nip }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{$data8->T_realisasi_tempatpelaksanaans[$i + 177]->golongan }}
                                        </td>
                                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;"> {{$data8->T_realisasi_tempatpelaksanaans[$i + 177]->jabatan }} </td>
                                        <td rowspan="{{$jumlahrow - 178 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                            {{-- Carbon::tomorrow()->format('l'); --}}
                                            @php
                                            $namahari_tanggalpelaksana_dari =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->locale('id');
                                            $namahari_tanggalpelaksana_dari->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_dari->format('l');
                                            @endphp
                                            -
                                            @php
                                            $namahari_tanggalpelaksana_sampai =
                                            \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->locale('id');
                                            $namahari_tanggalpelaksana_sampai->settings(['formatFunction' => 'translatedFormat']);
                                            echo $namahari_tanggalpelaksana_sampai->format('l');
                                            @endphp

                                            <br>
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_dari)->isoformat('D')}} -
                                            {{ \Carbon\Carbon::parse($data->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                                        </td>
                                        <td rowspan="{{$jumlahrow - 178 }}"
                                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">

                                            {{-- {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }} --}}
                                            @if ($count_tempat_pelx8 == '1')
                                            @foreach ($tempat_pelx8 as $tempat_pel7)
                                            {{$tempat_pel8->tempat_pelaksana}}
                                            @endforeach
                                            @endif

                                            @php $x=1; @endphp

                                            @if ($count_tempat_pelx8 > '1')
                                            @foreach ($tempat_pelx8 as $tempat_pel8)
                                            {{$tempat_pel8->tempat_pelaksana}}
                                            @if ($x < $count_tempat_pelx8 && $x - $count_tempat_pelx8 < -1 ){{','}} <br>
                                            @elseif($x < $count_tempat_pelx8 && $x - $count_tempat_pelx8=-1) <br> {{'dan'}} <br>
                                            @else
                                            @endif
                                            <?php $x++ ;?>
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>



                                        @for($i=179; $i<$data8->T_realisasi_tempatpelaksanaans->count(); $i++)

                                            <tr>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;text-align:center">
                                                    {{$i+1}} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; ">
                                                    {{$data8->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                                                    {{$data8->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                                                <td
                                                    style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:center">
                                                    {{$data8->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                                                <td style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;">
                                                    {{$data8->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                                            </tr>
                                        @endfor
                                </tbody>
                            @endfor
                        @endforeach
                </table>

            @endif
        </div>
    </div>
    {{-- END TABLE --}}

    {{-- UNTUK --}}
    <div class="row">
        <div class="column2xx" style="background-color:#bbb;">
            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                @foreach ($untukx as $untuk)
                <tbody>
                    <tr>
                        <td
                            style=" border: 1px solid black; border-collapse: collapse; font-size:10.5pt; text-align:top; vertical-align: text-top;">
                            Untuk &nbsp; &nbsp; &nbsp; &nbsp;
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; text-align:top; vertical-align: text-top; ">
                            :
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10.5pt;  text-align: justify;">
                            {{$untuk->text_untuk}}
                        </td>
                    </tr>
                </tbody> @endforeach </table>
        </div>
    </div>
    {{-- END UNTUK --}}

    {{-- TTD --}}
    <div class="container" position="fixed">
        <div class="column22xx" style="background-color:#bbb;">

            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ;  width: 100%">
                <tbody>
                    <tr>
                        <td style=" width: 90%; border: 1px solid black; border-collapse: collapse; font-size: 10.5pt; padding: 7px;">

                            Segala yang timbul atas kegiatan ini dibebankan pada Daftar Isian
                            Pelaksana Anggaran (DIPA) Satuan Kerja Badan Urusan Administrasi Mahkamah Agung RI dengan Akun / Kode MAK:
                            @foreach ($kodemakx as $kodemak)
                            {{$kodemak->text_kodemak}}.
                            @endforeach
                            <br>
                            <br>
                            Demikian surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggung jawab.

                            &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jakarta, &nbsp;&nbsp; &nbsp; &nbsp;
                            {{$tanggalparse}}
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kepala Biro Perlengkapan
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp;
                            <br>
                            <br>
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            @foreach ($tertandax as $tertanda)
                            <u><b>{{$tertanda->nama}}</b></u>
                            <br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            NIP. {{$tertanda->nip}}
                            @endforeach

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- END TTD --}}

</body>

</html>