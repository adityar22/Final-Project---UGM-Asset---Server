<?php

namespace App\Controllers;

use App\Models\ReportModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class ReportController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new ReportModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new ReportModel();
        $data = $model->find($id);

        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Report not found');
        }
    }

    public function create()
    {
        $model = new ReportModel();
        $data = [
            'user_id' => $this->request->getVar('user_id'),
            'title' => $this->request->getVar('title'),
            'reporter' => $this->request->getVar('reporter'),
            'type' => $this->request->getVar('type'),
            'coordinate' => json_encode($this->request->getVar('coordinate')),
            'image_url' => $this->request->getVar('image_url'),
            'description' => $this->request->getVar('description'),
            'evidence_img_url' => json_encode($this->request->getVar('evidence_img_url'))
        ];

        $model->insert($data);

        return $this->respondCreated(['message' => 'Report created successfully']);
    }

    public function update($id = null)
    {
        $model = new ReportModel();
        $data = [
            'user_id' => $this->request->getVar('user_id'),
            'title' => $this->request->getVar('title'),
            'reporter' => $this->request->getVar('reporter'),
            'type' => $this->request->getVar('type'),
            'coordinate' => json_encode($this->request->getVar('coordinate')),
            'image_url' => $this->request->getVar('image_url'),
            'description' => $this->request->getVar('description'),
            'evidence_img_url' => json_encode($this->request->getVar('evidence_img_url'))
        ];

        $model->update($id, $data);

        return $this->respond(['message' => 'Report updated successfully']);
    }

    public function delete($id = null)
    {
        $model = new ReportModel();
        $model->delete($id);

        return $this->respond(['message' => 'Report deleted successfully']);
    }
}
