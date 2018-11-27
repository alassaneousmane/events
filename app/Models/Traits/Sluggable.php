<?php 

namespace App\Models\Traits;

trait Sluggable
{
 	protected static function bootSluggable() 
   	{
   		
   		// static fait référence à la classe qui va appeler cette méthode
   		static::creating(function($event) {
   			$event->slug = str_slug($event->title);
   		});
   	}
	
}