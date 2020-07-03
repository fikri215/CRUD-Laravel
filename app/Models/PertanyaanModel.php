<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data)
    {
        $new_question = DB::table('pertanyaan')->insert($data);
        return $new_question;
    }

    public static function show($pertanyaan_id)
    {
        $show = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return $show;
    }
}

?>