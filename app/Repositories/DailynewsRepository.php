<?php

namespace App\Repositories;
use App\Models\Dailynews;
class DailynewsRepository
{

    protected $dailynews;

    public function __construct(Dailynews $dailynews)
    {
        $this->dailynews = $dailynews;
    }

    public function index($agencyId,$request)
    {
       if($request->datetime == 'asc'){
            $news=Dailynews::where('agency_id',$agencyId)->select('title','content','rating','datetime')
                        ->orderBy('datetime','asc')->get();
            return $news;
       }elseif($request->datetime == 'desc'){
            $news=Dailynews::where('agency_id',$agencyId)->select('title','content','rating','datetime')
                        ->orderBy('datetime','desc')->get();
             return $news;
       }elseif($request->rating== 'asc'){
            $news=Dailynews::where('agency_id',$agencyId)->select('title','content','rating','datetime')
                        ->orderBy('rating','asc')->get();
             return $news;
       }elseif($request->rating== 'desc'){
           $news=Dailynews::where('agency_id',$agencyId)->select('title','content','rating','datetime')
                        ->orderBy('rating','desc')->get();
             return $news;
       }else{
           $news=Dailynews::where('agency_id',$agencyId)->select('title','content','rating','datetime')->get();
            return $news;
       }
       
    }

}