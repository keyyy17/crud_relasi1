<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table ='pinjam';
    protected $primaryKey ='id';
    protected $fillable = ['nama','jenis_buku','jumlah_buku','tanggal_pinjam'];
}
