<?php

namespace Modules\Tracking\Models;

use CodeIgniter\Model;

class Tracking_mdl extends Model
{
    protected $table = 'ship_main';
    protected $primaryKey = 'id';

    public function trackings(string $trackingNumber): array
    {
        $db = \Config\Database::connect();
        $builder = $db->table('ship_main');
        $builder->select('
            ship_main.id as main_id,
            ship_main.gr_no,
            ship_main.tracking_id,
            ship_main.lr_no,
            ship_main.c_name,
            ship_main.ship_from,
            ship_main.ship_to,
            ship_main.ship_type,
            ship_main.ex_del_date,
            ship_tracking.id as tracking_row_id,
            ship_tracking.type,
            ship_tracking.date,
            ship_tracking.time,
            ship_tracking.place,
            ship_tracking.remarks
        ');
        $builder->join('ship_tracking', 'ship_main.id = ship_tracking.sh_id', 'left');
        $builder->groupStart()
            ->where('ship_main.gr_no', $trackingNumber)
            ->orWhere('ship_main.tracking_id', $trackingNumber)
            ->orWhere('ship_main.lr_no', $trackingNumber)
            ->groupEnd();
        $builder->orderBy('ship_tracking.type', 'ASC');

        return $builder->get()->getResultArray();
    }
}
