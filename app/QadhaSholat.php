<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QadhaSholat extends Model
{
    protected $fillable = [
        'sholat', 'tanggal_qadha', 'status', 'qabliyah','badiyah','uid', 'tanggal_tinggal','sid'
    ];
public $timestamps = false;
protected $dates = ['created_at', 'updated_at', 'tanggal_tinggal'];

    }
