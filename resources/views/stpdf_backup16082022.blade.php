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
            width: 11%;
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
            width: 86%;
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
            width: 11%;
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
            width: 86%;
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
    <div class="row">
        <div class="column1x" style="background-color:#aaa;">
            <span style="font-family: Times New Roman; font-size: 10pt">Menimbang :</span>
        </div>
        <div class="column2x" style="background-color:#bbb;">
            <table>
                @foreach ($menimbangx as $menimbang)
                <tr>
                    <td style="font-family: Times New Roman; font-size: 10pt; vertical-align:top; text-align: justify">
                        {{$menimbang->urutan}}.</td>
                    <td style="font-family: Times New Roman; font-size: 10pt; text-align: justify">
                        {{$menimbang->text_menimbang}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div class="column3" style="background-color:#aaa;">
            <span style="font-family: Times New Roman; font-size: 10pt">Dasar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                :</span>
        </div>
        <div class="column4" style="background-color:#bbb;">
            <table>
                <?php $no=1;?>
                @foreach ($dasarx as $dasar)
                <tr>
                    <td style="font-family: Times New Roman; font-size: 10pt; vertical-align:top; text-align: justify">
                        {{$no}}.</td>
                    <td style="font-family: Times New Roman; font-size: 10pt; text-align: justify">
                        {{$dasar->text_dasar}}</td>
                </tr>
                <?php $no++ ;?>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div class="column5" style="text-align: center; background-color:#aaa;">
            <a style="text-align: center; font-family: Times New Roman; font-size: 11pt"><b>MENUGASKAN</b></a>
        </div>
    </div>
    <div class="row">
        <div class="column6" style="background-color:#aaa;">
            <p style="font-family: Times New Roman; font-size: 10pt;">Kepada &nbsp; &nbsp; &nbsp; &nbsp; :</p>
        </div>
    </div>

    <div class="row">
        <div class="column7" style="background-color:#aaa; margin-left: auto; margin-right: auto ">

            @if ($jumlahrow < 6)

            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                <thead>
                    <tr>
                        <th
                            style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            No</th>
                        <th
                            style=" width: 30%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Nama / NIP</th>
                        <th
                            style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Gol</th>
                        <th
                            style="width: 25%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Jabatan</th>
                        <th
                            style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Hari / Tanggal</th>
                        <th
                            style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Tujuan</th>
                    </tr>
                </thead>
                <?php $no=1;?>
                @foreach ($datax as $data)
                <tbody>
                    <tr>
                        <td height="30"
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$no}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                            <br>
                            NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px;">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                        <td rowspan="{{$data->T_realisasi_tempatpelaksanaans->count();}}"
                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
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
                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">

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
                            @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br> @elseif($x <
                                $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br> @else @endif <?php $x++ ;?>
                                @endforeach @endif </td> </tr> @for($i=1; $i<$data->
                                T_realisasi_tempatpelaksanaans->count(); $i++)
                    <tr>
                        <td height="30"
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$i+1}} </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                    </tr>
                    @endfor

                </tbody>
                <?php $no++ ;?>
                @endforeach
            </table>

            @else

            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                <thead>
                    <tr>
                        <th
                            style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            No</th>
                        <th
                            style=" width: 30%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Nama / NIP</th>
                        <th
                            style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Gol</th>
                        <th
                            style="width: 25%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Jabatan</th>
                        <th
                            style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Hari / Tanggal</th>
                        <th
                            style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Tujuan</th>
                    </tr>
                </thead>
                <?php $no=1;?>
                @foreach ($datax as $data)
                <tbody>
                    <tr>
                        <td height="30"
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$no}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                            <br>
                            NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px;">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>

                        <td rowspan="5"
                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
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
                        <td rowspan="5"
                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">

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
                            @if ($x < $count_tempat_pelx && $x - $count_tempat_pelx < -1 ){{','}} <br> @elseif($x <
                                $count_tempat_pelx && $x - $count_tempat_pelx=-1) <br> {{'dan'}} <br> @else @endif <?php $x++ ;?>
                                @endforeach @endif </td> </tr>
                            @for($i=1; $i < 5 ; $i++)
                    <tr>
                        <td height="30"
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$i+1}} </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                    </tr>
                    @endfor

                </tbody>
                <?php $no++ ;?>
                @endforeach
            </table>




            <div style="page-break-after:always;"></div>



            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                <thead>
                    <tr>
                        <th
                            style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            No</th>
                        <th
                            style=" width: 30%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Nama / NIP</th>
                        <th
                            style="width: 5%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Gol</th>
                        <th
                            style="width: 25%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Jabatan</th>
                        <th
                            style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Hari / Tanggal</th>
                        <th
                            style="width: 20%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            Tujuan</th>
                    </tr>
                </thead>
                <?php $nox=6;?>
                <?php $startrow=5;?>
                @foreach ($datax2 as $data2)
                <tbody>
                    <tr>
                        <td height="30"
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$nox}}

                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data2->T_realisasi_tempatpelaksanaans[$startrow]->nama_pelaksana }}
                            <br>
                            NIP. {{$data2->T_realisasi_tempatpelaksanaans[$startrow]->nip }}
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$data2->T_realisasi_tempatpelaksanaans[$startrow]->golongan }}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px;">
                            {{$data2->T_realisasi_tempatpelaksanaans[$startrow]->jabatan }} </td>

                        {{-- perbaiki --}}
                        <td rowspan="{{$data->T_realisasi_tempatpelaksanaans->count() - 5 }}"
                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
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
                            {{ \Carbon\Carbon::parse($data2->tanggal_pelaksana_dari)->isoformat('D')}} -
                            {{ \Carbon\Carbon::parse($data2->tanggal_pelaksana_sampai)->isoformat('D MMMM Y')}}
                            {{-- Carbon::parse($tanggal_pelaksanaan)->isoFormat('D MMMM Y'); --}}
                        </td>
                        <td rowspan="{{$data->T_realisasi_tempatpelaksanaans->count() - 5 }}"
                            style="page-break-inside:avoid; page-break-after:auto; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">

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
                            @elseif($x <$count_tempat_pelx2 && $x - $count_tempat_pelx2 =-1) <br> {{'dan'}} <br>
                            @else @endif
                            <?php $x++ ;?>
                                @endforeach @endif </td> </tr>

                    @for($i=6; $i < $data2->T_realisasi_tempatpelaksanaans->count() ; $i++)
                    <tr>
                        <td height="30"
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$i+1}} </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br> NIP.
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:center">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                    </tr>
                    @endfor

                </tbody>
                <?php $nox++ ;?>
                @endforeach
            </table>

            @endif



        </div>
    </div>

    <div class="row">
        <div class="column2xx" style="background-color:#bbb;">
            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">
                @foreach ($untukx as $untuk)
                <tbody>
                    <tr>
                        <td
                            style=" border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:top; vertical-align: text-top;">
                            Untuk &nbsp; &nbsp; &nbsp; &nbsp;
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align:top; vertical-align: text-top; ">
                            :
                        </td>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px; text-align: justify;">
                            {{$untuk->text_untuk}}
                        </td>
                    </tr>
                </tbody> @endforeach </table>
        </div>
    </div>
    <div class="row">

    </div>
    </div>

    <div class="row">
        <div class="column2xx" style="background-color:#bbb;">
            <table style="border: 1px solid black; border-collapse: collapse; margin-left: auto; margin-right: auto ">

                <tbody>
                    <tr>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 10pt; text-align:justify; line-height: 1.5;">
                            Segala yang timbul atas kegiatan ini dibebankan pada Daftar Isian
                            Pelaksana Anggaran (DIPA) Satuan Kerja Badan Urusan Administrasi Mahkamah Agung RI dengan Akun / Kode MAK:
                            @foreach ($kodemakx as $kodemak)
                            {{$kodemak->text_kodemak}}.
                            @endforeach
                            Dalam waktu paling lama 5 (lima) hari setelah pelaksanaan tugas,
                            agar menyerahkan laporan kepada Kepala Biro Perlengkapan Badan Urusan Administrasi MA RI.
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
                            style=" width: 90%; border: 1px solid black; border-collapse: collapse; font-size: 10pt; padding: 7px;">
                            Demikian surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggung jawab.

                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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

</body>

</html>