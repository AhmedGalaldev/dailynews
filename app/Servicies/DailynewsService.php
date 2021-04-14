<?php 

namespace App\Services;
namespace App\Servicies;
use App\Repositories\DailynewsRepository;

class DailynewsService
{
    protected $dailynewsRepository;

    public function __construct(DailynewsRepository $dailynewsRepository)
    {
        $this->dailynewsRepository = $dailynewsRepository;
    }

    public function index($agencyId,$request){
       $news= $this->dailynewsRepository->index($agencyId,$request);
       return view('dailynews',['news'=>$news]);
    }

}