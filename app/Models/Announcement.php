<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory, Searchable;

    protected $fillable =['title','body','price','techiche','extra'];

    public function toSearchableArray()
    {
        $category= $this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
            'techiche'=>$this->techiche,
            'extra'=>$this->extra,
            'category'=>$category,
        ];
        return $array;
    }

    public function category()
 {
    return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // settaggio del valore vero o farlo dell'accettazione annuncio
    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }

    public static function daRevisionare(){
        return Announcement::where('is_accepted',null)->count();


    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
