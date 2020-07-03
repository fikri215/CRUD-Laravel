<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all()
    {
        $answer = DB::table('answer')->get();
        return $answer;
    }

    public static function save($data)
    {
        $new_answer = DB::table('answer')->insert($data);
        return $new_answer;
    }

    public static function all_answer($pertanyaan_id)
    {
        $get_answer = DB::select(DB::raw("SELECT * FROM answer WHERE pertanyaan_id=" . $pertanyaan_id));
        return $get_answer;
    }
}

?>