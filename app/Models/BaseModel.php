<?php 
namespace App\Models;

use App\Models\Traits\SlugRoutable;
use App\Models\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;


class BaseModel extends Model {

	protected $guarded = []; 

	use SlugRoutable, Sluggable;

	

}