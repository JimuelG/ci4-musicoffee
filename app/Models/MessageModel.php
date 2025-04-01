<?php

namespace App\Models;
use CodeIgniter\Model;

class MessageModel extends Model
{

    protected $table = "messages";
    protected $primaryKey = "id";

    protected $allowedFields = [
        'name',
        'email',
        'number',
        'body',
    ];

    public function saveMessage($data)
    {
            $this->db->transStart();

            $this->insert([
                'name' => $data['name'],
                'email'=> $data['email'],
                'number'=> $data['number'],
                'body'=> $data['body'],
            ]);

            $this->db->transComplete();
            return $this->db->transStatus();
    }

}