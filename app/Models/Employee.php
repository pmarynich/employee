<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Scout\Searchable;

class Employee extends Model
{
    use HasFactory;
    use Sortable;
    use Searchable;

    public $sortable = ['id',
                        'firstname',
                        'middlename',
                        'lastname',
                        'salary',
                        'employed_at'];

    protected $fillable = ['firstname',
                            'middlename',
                            'lastname',
                            'salary',
                            'employed_at'];
}
