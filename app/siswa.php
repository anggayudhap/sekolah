<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected$table= 'siswas';
    protected $fillable = ['nama','orangtua_id', 'umur', '
    jk', 'alamat'];
    protected $visible = ['nama','orangtua_id', 'umur', '
    jk', 'alamat'];
    public $timistamps = true;

    public function orangtua()
    {
    return $this->belongsTo('App\Orangtua', 'orangtua_id');
    
    }
}
