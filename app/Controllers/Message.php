<?php 

namespace App\Controllers;

use App\Models\MessageModel;

class Message extends BaseController
{
    public function saveMessage()
    {
        $message = new MessageModel();

        $data = [
            'name' => $this->request->getPost('message_name'),
            'email' => $this->request->getPost('message_email'),
            'number' => $this->request->getPost('message_phone'),
            'body' => $this->request->getPost('message_body'),
        ];

        $message->saveMessage($data);
        return redirect()->to(base_url('/contact'))->with('success', 'Message sent successfully!');
    }

    public function getMessages()
    {
        $messages = new MessageModel();
        
        $data['messages'] = $messages->findAll();
        return view('/admin/messages', $data);
    }

    public function getMessage($id = null)
    {
        $messages = new MessageModel();

        $data['message'] = $messages->where('id', $id)->first();

        return view('/admin/message', $data);
    }
}