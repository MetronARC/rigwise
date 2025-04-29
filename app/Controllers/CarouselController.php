<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class CarouselController extends ResourceController
{
    use ResponseTrait;

    public function getCarouselData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('rigwise_carousel');
        
        $data = $builder->select('carousel_image, carousel_alt, carousel_title')
                       ->get()
                       ->getResult();

        if ($data) {
            return $this->respond([
                'status' => 200,
                'error' => false,
                'slides' => $data
            ]);
        } else {
            return $this->respond([
                'status' => 404,
                'error' => true,
                'message' => 'No carousel data found'
            ]);
        }
    }
} 