<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\ShelfRepositoryInterface;
use App\Repositories\BookRepositoryInterface;


class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private  $shelfRepository;
    private  $bookRepository;


    public function __construct(ShelfRepositoryInterface $shelfRepository,BookRepositoryInterface $bookRepository) 
    {
        $this->shelfRepository = $shelfRepository;
        $this->bookRepository = $bookRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function metadata()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider( new \Faker\Provider\Person($faker) );
        $faker->addProvider( new \Faker\Provider\DateTime($faker) );
        $faker->addProvider( new \Faker\Provider\Image($faker) );

        $jsonable = [];

        foreach(Book::all()->pluck('book_id') as $book_id) {
            $jsonable[$book_id] = [
                'published_at' => $faker->date(),
                'author' => $faker->title.' '.$faker->name,
                'cover' => $faker->imageUrl,

            ];
         }

        return response()->json($jsonable);
    }

    public function shelf($slug){
        
        return response()->json([
            'data' => $this->shelfRepository->getShelfBooksBySlug($slug)
        ]);
    }

    public function book($id){
        
        return response()->json([
            'data' => $this->bookRepository->show($id)
        ]);
    }

}
