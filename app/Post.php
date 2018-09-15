<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    //
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function addComment($body)
    {
//        Comment::create([
//            'body' => $commentbody,
//            'post_id' => $this->id
//        ]);
        
        //fine tuned to below
//        dd($this->attributes['user_id']);
        $this->comments()->create(["body" => $body, "user_id" => $this->user_id]);

    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeFilter($query, $filters)
    {
        
//        dd($filters);
        if(isset($filters['month']))
        {
            $query->whereMonth('created_at',Carbon::parse($filters['month'])->month);
        }
        
        if(isset($filters['year']))
        {
            $query->whereYear('created_at',$filters['year']);
        }
    }
    
        
        public static function archives()
        {
            return static::selectRaw('year(created_at) as year, monthname(created_at) as month,count(*) as count')
                 ->groupBy('year','month')
                 ->orderByRaw('min(created_at) desc')
                 ->get()
                 ->toArray();
        }
    
}
