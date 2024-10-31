<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NFT extends Model
{
    protected $fillable = [
        'token_id',
        'name',
        'description',
        'image_url',
        'ipfs_hash',
        'metadata_url',
        'owner_address',
        'status'
    ];
}
