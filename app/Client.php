<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Client extends Model
{

  protected $fillable = ['orgainization_id'];
  use Searchable;

  public $asYouType = true;

  /**
   * Get the indexable data array for the model.
   *
   * @return array
   */
  public function toSearchableArray()
  {
      $array = $this->toArray();

      // Customize array...

      return $array;
  }
}
