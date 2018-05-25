<?php

namespace App\Entities\AbsenceReasons;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbsenceReason
 *
 * @package  DotwebCloud\Entities\AbsenceReasons
 *
 * @property  int         $id
 * @property  string      $name
 * @property  int         $created_by
 * @property  int         $updated_by
 * @property  Carbon      $created_at
 * @property  Carbon      $updated_at
 * @property  Carbon|null $deleted_at
 */
class AbsenceReason extends Model
{

    /**
     * The table name associated with the model.
     *
     * @var  string
     */
    protected $table = 'absence_reasons';
}