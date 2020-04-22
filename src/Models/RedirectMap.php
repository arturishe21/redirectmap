<?php
namespace Litvin\Redirectmap\Models;

use Illuminate\Database\Eloquent\Model;

class RedirectMap extends Model
{
    protected $table = 'redirect_map';
    protected $fillable = ['old_link', 'new_link'];
    public $timestamps = false;
}
