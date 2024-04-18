<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    protected static function boot()
    {
        parent::boot();
        //function dipakai, atur logika atau mendefinisikan nilai sebelum simpan data
        static::creating(function ($dt) {
            $dt->slug = ($dt->slug !== '') ? $dt->slug : generateSlug($dt->judul, $dt->waktu);
            $user_id = auth()->check() ? auth()->id() : 1;
            $dt->user_id = $user_id;
        });

        // static::updating(function ($dt) {
        //     $dt->user_id = getUserIdFromToken();
        // });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }

    public function publikasi()
    {
        return $this->hasOne(Publikasi::class);
    }

    public function likedislike()
    {
        return $this->hasMany(LikeDislike::class);
    }

    public function jenisKonten()
    {
        return $this->belongsTo(JenisKonten::class);
    }
}
