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
                            Jabatan</th>
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
                <tbody>
                    <tr>
                        <td
                            style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            {{$no}}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->nama_pelaksana }}
                            <br>
                            NIP. {{$data->T_realisasi_tempatpelaksanaans[0]->nip }}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->golongan }}
                        </td>
                        <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px;">
                            {{$data->T_realisasi_tempatpelaksanaans[0]->jabatan }} </td>
                        <td  rowspan="{{$data->T_realisasi_tempatpelaksanaans->count();}}"  style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
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
                        <td rowspan="{{$data->T_realisasi_tempatpelaksanaans->count();}}" style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center">
                           {{$data->T_realisasi_tempatpelaksanaans[0]->tempat_pelaksana }}
                        </td>
                       </tr>
                        @for($i=1; $i<$data->T_realisasi_tempatpelaksanaans->count(); $i++)
                        <tr>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px; text-align:center"> {{$i+1}} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px"> {{$data->T_realisasi_tempatpelaksanaans[$i]->nama_pelaksana }} <br>  {{$data->T_realisasi_tempatpelaksanaans[$i]->nip }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px"> {{$data->T_realisasi_tempatpelaksanaans[$i]->golongan }} </td>
                            <td style="border: 1px solid black; border-collapse: collapse; font-size: 12pt; padding: 7px"> {{$data->T_realisasi_tempatpelaksanaans[$i]->jabatan }} </td>
                        </tr>
                        @endfor


                </tbody>
                <?php $no++ ;?>
                @endforeach
            </table>

        </div>
    </div>