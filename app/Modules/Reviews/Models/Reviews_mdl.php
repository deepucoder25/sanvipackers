<?php

namespace Modules\Reviews\Models;

use CodeIgniter\Model;

class Reviews_mdl extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'r_id';
    protected $allowedFields = [
        'b_id', 'name', 'email', 'r_title', 'r_desc', 'r_img', 'stars', 'views', 'status', 'posted_date', 'city', 'admin_reply'
    ];

    public function get_reviews(int $limit = 9, int $offset = 0, $starFilter = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('reviews');
        $builder->where('status', 1);

        if (!empty($starFilter)) {
            $builder->where('stars', (int) $starFilter);
        }

        return $builder->orderBy('r_id', 'DESC')
            ->limit($limit, $offset)
            ->get()
            ->getResult();
    }

    public function count_reviews($starFilter = null): int
    {
        $db = \Config\Database::connect();
        $builder = $db->table('reviews');
        $builder->where('status', 1);

        if (!empty($starFilter)) {
            $builder->where('stars', (int) $starFilter);
        }

        return $builder->countAllResults();
    }

    public function insert_review(array $data): bool
    {
        $db = \Config\Database::connect();
        return $db->table('reviews')->insert($data);
    }
}
