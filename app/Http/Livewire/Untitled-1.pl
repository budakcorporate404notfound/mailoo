  $check_realisasi = DB::table('t_realisasi_pagu_rkkl')
  ->select(DB::raw("count(ref_keuangan_uraian_kegiatan_id) as count"))
  ->where('ref_keuangan_uraian_kegiatan_id', '=', $id)
  ->get();

  $decode_check_realisasi = $check_realisasi;

  $count = $decode_check_realisasi[0]->count;

  if ($count <= 0) { Referensi::find($id)->delete();
      return response()->json(['success' => 'success']);
      } else {
      return response()->json(['failed' => 'failed.']);
      }