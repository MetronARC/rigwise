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
        
        // Get seed from session if exists, otherwise use current month
        $session = session();
        $currentSeed = $session->get('carousel_seed') ?? date('Ym');
        mt_srand($currentSeed);

        // Get total count of rows
        $totalRows = $builder->countAllResults(false);
        
        // Calculate offset to get random rows
        $offset = mt_rand(0, max(0, $totalRows - 4));
        
        $data = $builder->select('carousel_image, carousel_alt, carousel_title')
                       ->limit(4, $offset)
                       ->get()
                       ->getResult();

        if ($data) {
            // Reset the random seed to not affect other random operations
            mt_srand();
            
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

    public function resetCarousel()
    {
        // Generate new random seed
        $newSeed = mt_rand();
        
        // Store in session
        $session = session();
        $session->set('carousel_seed', $newSeed);

        return $this->respond([
            'status' => 200,
            'error' => false,
            'message' => 'Carousel has been reset with new images'
        ]);
    }
} 