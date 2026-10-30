<?php

namespace Modules\Tracking\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;
use Modules\Tracking\Models\Tracking_mdl;

class Tracking extends BaseController
{
    public function index(): string
    {
        $company = $this->comp['company3'] ?? '';
        $data['title']       = "Track Your Shipment | " . $company;
        $data['description'] = "Track your shipment with tracking number, LR number, or GR number. Get real-time updates of your household shifting or vehicle transportation.";
        $data['page']        = 'tracking';
        $data['module']      = 'tracking';
        $data['view_file']   = 'Modules\Tracking\Views\tracking';

        return Template::layout2($data);
    }

    public function track()
    {
        $trackingNumber = trim($this->request->getPost('trackingNumber') ?? '');

        if ($trackingNumber === '') {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Please enter a valid Tracking ID, LR No, or GR No.'
            ]);
        }

        $trackingMdl = new Tracking_mdl();
        $data = $trackingMdl->trackings($trackingNumber);

        if (!empty($data)) {
            $first = $data[0];
            $trackingId = !empty($first['tracking_id']) ? $first['tracking_id'] : (!empty($first['lr_no']) ? $first['lr_no'] : $first['gr_no']);
            $lrNo = !empty($first['lr_no']) ? $first['lr_no'] : $first['gr_no'];

            $response = [
                'status' => 'success',
                'main'   => [
                    'tracking_id' => $trackingId,
                    'lr_no'       => $lrNo,
                    'c_name'      => $first['c_name'] ?? '',
                    'ship_from'   => $first['ship_from'] ?? '',
                    'ship_to'     => $first['ship_to'] ?? '',
                    'ship_type'   => $first['ship_type'] ?? 'Household Shifting',
                    'ex_del_date' => $first['ex_del_date'] ?? ''
                ],
                'timeline' => []
            ];

            foreach ($data as $row) {
                if (!empty($row['date']) || !empty($row['place']) || !empty($row['remarks'])) {
                    $response['timeline'][] = [
                        'type'    => $row['type'] ?? '',
                        'date'    => $row['date'] ?? '',
                        'time'    => $row['time'] ?? '',
                        'place'   => $row['place'] ?? '',
                        'remarks' => $row['remarks'] ?? ''
                    ];
                }
            }

            return $this->response->setJSON($response);
        }

        return $this->response->setJSON([
            'status'  => 'error',
            'message' => 'No tracking records found for: ' . esc($trackingNumber) . '. Please verify the number or contact customer care.'
        ]);
    }
}
