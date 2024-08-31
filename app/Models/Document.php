<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
    ];

    // Define the relationship with DocumentRequest
    public function documentRequests()
    {
        return $this->hasMany(DocumentRequest::class);
    }
}
