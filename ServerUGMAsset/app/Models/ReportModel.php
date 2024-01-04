<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected $table = 'reports';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['user_id', 'title', 'reporter', 'type', 'coordinate', 'image_url', 'description', 'evidence_img_url', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
