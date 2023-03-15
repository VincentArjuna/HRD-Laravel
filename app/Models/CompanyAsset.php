<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAsset extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    protected $table = "company_asset";
    protected $primaryKey = "asset_number";

    protected $fillable = [
        "asset_number",
        "type",
        "asset_name",
        "description",
        "date_entry",
        "status_loan",
        "id_loan",
        "kondisi",
        "warehouse",
        "keterangan",
    ];
}
